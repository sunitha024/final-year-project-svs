<?php
   include "connect.php";
   session_start();
   $fivea=$_GET['fiveA'];
   if(isset($_GET['fiveA']))
   {
       $query= "DELETE from fiver where FIVEA='$fivea'";
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
