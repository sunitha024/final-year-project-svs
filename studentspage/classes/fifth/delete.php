<?php
   include "connect.php";
   session_start();
   $fiftha=$_GET['fifthA'];
   if(isset($_GET['fifthA']))
   {
       $query= "DELETE from fifthsd where FIFTHA='$fiftha'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:fifth.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
