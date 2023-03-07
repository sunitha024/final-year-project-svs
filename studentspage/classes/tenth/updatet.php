<?php
include "connect.php";
if (isset($_POST['update'])) {

    $tena = $_POST['tena'];
    $tenb = $_POST['tenb'];
    $tenc = $_POST['tenc'];
    $tend = $_POST['tend'];
    $tene = $_POST['tene'];
    $tenf = $_POST['tenf'];
    $teng = $_POST['teng'];
    $tenh = $_POST['tenh'];


    $query = " update tenthsd set TENA='$tena' , TENB='$tenb' , TENC='$tenc' , TEND='$tend',TENE='$tene',TENF='$tenf',TENG='$teng',TENH='$tenh' where TENA='$tena' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: tenth.php");
    } else {
        echo "unsuccessful";
    }

}


?>