<?php
   include "connect.php";
   session_start();
   $ninea=$_GET['nineA'];
   if(isset($_GET['nineA']))
   {
       $query= "DELETE from ninthsd where NINEA='$ninea'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:ninth.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
