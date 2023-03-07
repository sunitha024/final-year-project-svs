<?php
include "connect.php";
if (isset($_POST['update'])) {

    $fiftha = $_POST['fiftha'];
    $fifthb = $_POST['fifthb'];
    $fifthc = $_POST['fifthc'];
    $fifthd = $_POST['fifthd'];
    $fifthe = $_POST['fifthe'];
    $fifthf = $_POST['fifthf'];
    $fifthg = $_POST['fifthg'];
    $fifthh = $_POST['fifthh'];


    $query = " update fifthsd set FIFTHA='$fiftha' , FIFTHB='$fifthb' , FIFTHC='$fifthc' , FIFTHD='$fifthd',FIFTHE='$fifthe',FIFTHF='$fifthf',FIFTHG='$fifthg',FIFTHH='$fifthh' where FIFTHA='$fiftha' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: fifth.php");
    } else {
        echo "unsuccessful";
    }

}


?>