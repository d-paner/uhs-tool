<?php

function generate_transaction_number(){

    $file = 'custom/last_number.txt';
    $date = date('Ymd'); // YYYYMMDD

    if (!file_exists($file)) {
        file_put_contents($file, '');
    }

    $fp = fopen($file, 'c+');
    flock($fp, LOCK_EX);

    rewind($fp);
    $content = trim(stream_get_contents($fp));

    if ($content == '') {

        $newNumber = $date . '-0001';

        ftruncate($fp,0);
        rewind($fp);
        fwrite($fp,$newNumber);

    } else {

        $lastNumber = $content;
        $lastDate = substr($lastNumber,0,8);

        // Reset if date changed
        if ($lastDate != $date) {

            $newNumber = $date . '-0001';

            ftruncate($fp,0);
            rewind($fp);
            fwrite($fp,$newNumber);

        } else {

            $query = "SELECT COUNT(*) as total FROM transactions WHERE transaction_number = '".$lastNumber."'";
            $row = DB::Query($query);
            $data = $row->fetchAssoc();

            if ($data['total'] > 0) {

                $seq = substr($lastNumber,9,4);
                $seq = str_pad($seq + 1,4,'0',STR_PAD_LEFT);

                $newNumber = $date . '-' . $seq;

                ftruncate($fp,0);
                rewind($fp);
                fwrite($fp,$newNumber);

            } else {

                $newNumber = $lastNumber;
            }
        }
    }

    flock($fp,LOCK_UN);
    fclose($fp);

    return $newNumber;
}