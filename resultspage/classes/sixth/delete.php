<?php
   include "connect.php";
   session_start();
   $sixa=$_GET['sixA'];
   if(isset($_GET['sixA']))
   {
       $query= "DELETE from sixr where SIXA='$sixa'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:sixth.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
