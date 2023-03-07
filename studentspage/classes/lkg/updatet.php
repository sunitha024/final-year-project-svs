<?php
include "connect.php";
if (isset($_POST['update'])) {

    $lkga = $_POST['lkga'];
    $lkgb = $_POST['lkgb'];
    $lkgc = $_POST['lkgc'];
    $lkgd = $_POST['lkgd'];
    $lkge = $_POST['lkge'];
    $lkgf = $_POST['lkgf'];
    $lkgg = $_POST['lkgg'];
    $lkgh = $_POST['lkgh'];


    $query = " update lkgsd set LKGA='$lkga' , LKGB='$lkgb' , LKGC='$lkgc' , LKGD='$lkgd',LKGE='$lkge',LKGF='$lkgf',LKGG='$lkgg',LKGH='$lkgh' where LKGA='$lkga' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: lkg.php");
    } else {
        echo "unsuccessful";
    }

}


?>