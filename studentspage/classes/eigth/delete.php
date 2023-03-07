<?php
   include "connect.php";
   session_start();
   $eigtha=$_GET['eigthA'];
   if(isset($_GET['eigthA']))
   {
       $query= "DELETE from eigthsd where EIGTHA='$eigtha'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:eigth.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
