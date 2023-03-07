<?php
include "connect.php";
if (isset($_POST['update'])) {

    $ukga = $_POST['ukga'];
    $ukgb = $_POST['ukgb'];
    $ukgc = $_POST['ukgc'];
    $ukgd = $_POST['ukgd'];
    $ukge = $_POST['ukge'];
    $ukgf = $_POST['ukgf'];
    $ukgg = $_POST['ukgg'];
    $ukgh = $_POST['ukgh'];


    $query = " update ukgsd set UKGA='$ukga' , UKGB='$ukgb' , UKGC='$ukgc' , UKGD='$ukgd',UKGE='$ukge',UKGF='$ukgf',UKGG='$ukgg',UKGH='$ukgh' where UKGA='$ukga' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: ukg.php");
    } else {
        echo "unsuccessful";
    }

}


?>