<?php
include "connect.php";
session_start();


    $query = "TRUNCATE table ninthsd";
    $stmt = oci_parse($con, $query);
    oci_execute($stmt);
    if ($stmt) 
    {
        header("location:ninth.php");
    } 
    else 
    {
        echo $query . "delete unsuccessful";
        die(oci_parse_error($con));
    }

?>