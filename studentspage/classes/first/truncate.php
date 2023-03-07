<?php
include "connect.php";
session_start();


    $query = "TRUNCATE table firstsd";
    $stmt = oci_parse($con, $query);
    oci_execute($stmt);
    if ($stmt) 
    {
        header("location:first.php");
    } 
    else 
    {
        echo $query . "delete unsuccessful";
        die(oci_parse_error($con));
    }

?>