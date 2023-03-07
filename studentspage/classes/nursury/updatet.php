<?php
include "connect.php";
if (isset($_POST['update'])) {

    $nursurya = $_POST['nursurya'];
    $nursuryb = $_POST['nursuryb'];
    $nursuryc = $_POST['nursuryc'];
    $nursuryd = $_POST['nursuryd'];
    $nursurye = $_POST['nursurye'];
    $nursuryf = $_POST['nursuryf'];
    $nursuryg = $_POST['nursuryg'];
    $nursuryh = $_POST['nursuryh'];


    $query = " update nursurysd set NURSURYA='$nursurya' , NURSURYB='$nursuryb' , NURSURYC='$nursuryc' , NURSURYD='$nursuryd',NURSURYE='$nursurye',NURSURYF='$nursuryf',NURSURYG='$nursuryg',NURSURYH='$nursuryh' where NURSURYA='$nursurya' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: nursury.php");
    } else {
        echo "unsuccessful";
    }

}


?>