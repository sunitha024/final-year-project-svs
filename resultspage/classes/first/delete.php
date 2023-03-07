<?php
   include "connect.php";
   session_start();
   $firsta=$_GET['firstA'];
   if(isset($_GET['firstA']))
   {
       $query= "DELETE from firstr where FIRSTA='$firsta'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:first.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
