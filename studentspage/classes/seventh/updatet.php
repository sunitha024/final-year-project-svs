<?php
include "connect.php";
if (isset($_POST['update'])) {

    $sevena = $_POST['sevena'];
    $sevenb = $_POST['sevenb'];
    $sevenc = $_POST['sevenc'];
    $sevend = $_POST['sevend'];
    $sevene = $_POST['sevene'];
    $sevenf = $_POST['sevenf'];
    $seveng = $_POST['seveng'];
    $sevenh = $_POST['sevenh'];


    $query = " update seventhsd set SEVENA='$sevena' , SEVENB='$sevenb' , SEVENC='$sevenc' , SEVEND='$sevend',SEVENE='$sevene',SEVENF='$sevenf',SEVENG='$seveng',SEVENH='$sevenh' where SEVENA='$sevena' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: seventh.php");
    } else {
        echo "unsuccessful";
    }

}


?>