<?php

function setPersonType($type){

    $query = "SELECT id FROM person_types WHERE type_name = '".$type."' LIMIT 1";
    $exec = DB::Query($query);

    if($row = $exec->fetchAssoc()){
        return $row['id']; 
    } 
    return null;

}