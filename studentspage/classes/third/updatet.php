<?php
include "connect.php";
if (isset($_POST['update'])) {

    $thirda = $_POST['thirda'];
    $thirdb = $_POST['thirdb'];
    $thirdc = $_POST['thirdc'];
    $thirdd = $_POST['thirdd'];
    $thirde = $_POST['thirde'];
    $thirdf = $_POST['thirdf'];
    $thirdg = $_POST['thirdg'];
    $thirdh = $_POST['thirdh'];


    $query = " update thirdsd set THIRDA='$thirda' , THIRDB='$thirdb' , THIRDC='$thirdc' , THIRDD='$thirdd',THIRDE='$thirde',THIRDF='$thirdf',THIRDG='$thirdg',THIRDH='$thirdh' where THIRDA='$thirda' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: THIRD.php");
    } else {
        echo "unsuccessful";
    }

}


?>