<?php
include "connect.php";
if (isset($_POST['update'])) {

    $eigtha = $_POST['eigtha'];
    $eigthb = $_POST['eigthb'];
    $eigthc = $_POST['eigthc'];
    $eigthd = $_POST['eigthd'];
    $eigthe = $_POST['eigthe'];
    $eigthf = $_POST['eigthf'];
    $eigthg = $_POST['eigthg'];
    $eigthh = $_POST['eigthh'];


    $query = " update eigthsd set EIGTHA='$eigtha' , EIGTHB='$eigthb' , EIGTHC='$eigthc' , EIGTHD='$eigthd',EIGTHE='$eigthe',EIGTHF='$eigthf',EIGTHG='$eigthg',EIGTHH='$eigthh' where EIGTHA='$eigtha' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: eigth.php");
    } else {
        echo "unsuccessful";
    }

}


?>