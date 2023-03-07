<?php
include "connect.php";
if (isset($_POST['update'])) {

    $seconda = $_POST['seconda'];
    $secondb = $_POST['secondb'];
    $secondc = $_POST['secondc'];
    $secondd = $_POST['secondd'];
    $seconde = $_POST['seconde'];
    $secondf = $_POST['secondf'];
    $secondg = $_POST['secondg'];
    $secondh = $_POST['secondh'];


    $query = " update secondsd set SECONDA='$seconda' , SECONDB='$secondb' , SECONDC='$secondc' , SECONDD='$secondd',SECONDE='$seconde',SECONDF='$secondf',SECONDG='$secondg',SECONDH='$secondh' where SECONDA='$seconda' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: second.php");
    } else {
        echo "unsuccessful";
    }

}


?>