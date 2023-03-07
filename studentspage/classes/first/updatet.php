<?php
include "connect.php";
if (isset($_POST['update'])) {

    $firsta = $_POST['firsta'];
    $firstb = $_POST['firstb'];
    $firstc = $_POST['firstc'];
    $firstd = $_POST['firstd'];
    $firste = $_POST['firste'];
    $firstf = $_POST['firstf'];
    $firstg = $_POST['firstg'];
    $firsth = $_POST['firsth'];


    $query = " update firstsd set FIRSTA='$firsta' , FIRSTB='$firstb' , FIRSTC='$firstc' , FIRSTD='$firstd',FIRSTE='$firste',FIRSTF='$firstf',FIRSTG='$firstg',FIRSTH='$firsth' where FIRSTA='$firsta' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: first.php");
    } else {
        echo "unsuccessful";
    }

}


?>