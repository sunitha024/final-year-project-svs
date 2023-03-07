<?php
   include "connect.php";
   session_start();
   $thirda=$_GET['thirdA'];
   if(isset($_GET['thirdA']))
   {
       $query= "DELETE from thirdr where THIRDA='$thirda'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:third.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
