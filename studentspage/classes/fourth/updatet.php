<?php
include "connect.php";
if (isset($_POST['update'])) {

    $foura = $_POST['foura'];
    $fourb = $_POST['fourb'];
    $fourc = $_POST['fourc'];
    $fourd = $_POST['fourd'];
    $foure = $_POST['foure'];
    $fourf = $_POST['fourf'];
    $fourg = $_POST['fourg'];
    $fourh = $_POST['fourh'];


    $query = " update fourthsd set FOURA='$foura' , FOURB='$fourb' , FOURC='$fourc' , FOURD='$fourd',FOURE='$foure',FOURF='$fourf',FOURG='$fourg',FOURH='$fourh' where FOURA='$foura' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: fourth.php");
    } else {
        echo "unsuccessful";
    }

}


?>