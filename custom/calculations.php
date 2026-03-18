<?php

// process after adding data from hospital_services or professional services
function addServicesCalculation($transactionNumbers){

    // prepare array for IN clause
    $txnArray = "'" . implode("','", array_map('addslashes', $transactionNumbers)) . "'";

    $sql = "
        SELECT 
            transaction_number,
            SUM(amount) AS total_amount
        FROM (
            SELECT transaction_number, amount FROM hospital_services
            UNION ALL
            SELECT transaction_number, amount FROM professional_services
        ) t
        WHERE transaction_number IN ($txnArray)
        GROUP BY transaction_number
    ";

    $rs = DB::Query($sql);

    $totals = [];
    while($row = $rs->fetchAssoc()){
        $totals[$row["transaction_number"]] = $row["total_amount"];
    }

    // update the transactions tbl
    if(!empty($totals)) {

        $caseSql = '';
        $txnList = [];

        foreach($totals as $txn => $total) {
            $txnEscaped = addslashes($txn);
            $totalEscaped = floatval($total); // ensures numeric

            $caseSql .= "WHEN '$txnEscaped' THEN $totalEscaped ";
            $txnList[] = "'$txnEscaped'";
        }

        $txnListStr = implode(',', $txnList);

        $updateSql = "
            UPDATE transactions
            SET total_due = CASE transaction_number
                $caseSql
            END
            WHERE transaction_number IN ($txnListStr)
        ";

        DB::Exec($updateSql);
    }

}

// function adding data from payments
function addPayments($transactionNumber){

    $paymentTotal = 0;
    $sql = "SELECT SUM(amount) AS total_payment
    FROM payments WHERE transaction_number = '$transactionNumber'
    ";
    $data = DB::Query($sql);
    if(!empty($row = $data->fetchAssoc())){
        $paymentTotal = $row['total_payment'];
    }


    // update transaction base on total payments transaction number
    $sqlTransac = "UPDATE transactions
    SET 
        total_paid = $paymentTotal,
        status = CASE
            WHEN total_due > $paymentTotal THEN 'Partially Paid'
            WHEN total_due < $paymentTotal THEN 'Overpaid'
            WHEN total_due = $paymentTotal THEN 'Paid'
        END,
        updated_at = NOW()
    WHERE transaction_number = '$transactionNumber'
    ";
    DB::Exec($sqlTransac);
}