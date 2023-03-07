<?php
   include "connect.php";
   session_start();
   $sevena=$_GET['sevenA'];
   if(isset($_GET['sevenA']))
   {
       $query= "DELETE from seventhsd where SEVENA='$sevena'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:seventh.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
