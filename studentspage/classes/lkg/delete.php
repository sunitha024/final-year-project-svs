<?php
   include "connect.php";
   session_start();
   $lkga=$_GET['lkgA'];
   if(isset($_GET['lkgA']))
   {
       $query= "DELETE from lkgsd where LKGA='$lkga'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:lkg.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
