<?php 

function count_object($table){
    
    $count_result = "SELECT count(*) from $table";
    return $count_result;
}


?>