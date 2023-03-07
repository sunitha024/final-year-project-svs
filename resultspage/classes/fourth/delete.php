<?php
   include "connect.php";
   session_start();
   $foura=$_GET['fourA'];
   if(isset($_GET['fourA']))
   {
       $query= "DELETE from fourthr where FOURA='$foura'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:fourth.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
