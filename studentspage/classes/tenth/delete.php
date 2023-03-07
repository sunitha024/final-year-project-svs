<?php
   include "connect.php";
   session_start();
   $tena=$_GET['tenA'];
   if(isset($_GET['tenA']))
   {
       $query= "DELETE from tenthsd where TENA='$tena'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:tenth.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
