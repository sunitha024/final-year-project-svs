<?php
include "connect.php";
     if(isset($_POST['update']))
    {

          $foura = $_POST['foura'];
          $fourb = $_POST['fourb'];
          $fourc = $_POST['fourc'];
          $fourd = $_POST['fourd'];
          $foure = $_POST['foure'];
          $fourf = $_POST['fourf'];
          $fourg = $_POST['fourg'];
          $fourh = $_POST['fourh'];
          $fouri = $_POST['fouri'];
          $fourj = $_POST['fourj'];
          $fourk = $_POST['fourk'];
          $fourl = $_POST['fourl'];
          $fourm = $_POST['fourm'];
          $fourn = $_POST['fourn'];
          $fouro = $_POST['fouro'];
          $fourp = $_POST['fourp'];
          $fourq = $_POST['fourq'];
       
       $query = " update fourr set FOURA='$foura' , FOURB='$fourb' , FOURC='$fourc' , FOURD='$fourd',FOURE='$foure',FOURF='$fourf',FOURG='$fourg',FOURH='$fourh',FOURI='$fouri', FOURJ='$fourj' ,FOURK='$fourk',FOURL='$fourixl',FOURM='$fourm',FOURN='$fourn',FOURO='$fouro',FOURP='$fourp',FOURQ='$fourq' where FOURA='$foura' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: fourth.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>