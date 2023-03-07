<?php
   include "connect.php";
   session_start();
   $seconda=$_GET['secondA'];
   if(isset($_GET['secondA']))
   {
       $query= "DELETE from secondr where secondA='$seconda'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:second.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
