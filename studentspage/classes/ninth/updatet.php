<?php
include "connect.php";
if (isset($_POST['update'])) {

    $ninea = $_POST['ninea'];
    $nineb = $_POST['nineb'];
    $ninec = $_POST['ninec'];
    $nined = $_POST['nined'];
    $ninee = $_POST['ninee'];
    $ninef = $_POST['ninef'];
    $nineg = $_POST['nineg'];
    $nineh = $_POST['nineh'];


    $query = " update ninthsd set NINEA='$ninea' , NINEB='$nineb' , NINEC='$ninec' , NINED='$nined',NINEE='$ninee',NINEF='$ninef',NINEG='$nineg',NINEH='$nineh' where NINEA='$ninea' ";
    $stmt = oci_parse($con, $query);

    oci_execute($stmt);
    if ($stmt) {
        //oci_commit($con);
        header("location: ninth.php");
    } else {
        echo "unsuccessful";
    }

}


?>