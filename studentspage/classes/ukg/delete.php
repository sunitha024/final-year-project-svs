<?php
   include "connect.php";
   session_start();
   $ukga=$_GET['ukgA'];
   if(isset($_GET['ukgA']))
   {
       $query= "DELETE from ukgsd where UKGA='$ukga'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:ukg.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
