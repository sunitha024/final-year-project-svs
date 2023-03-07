<?php
   include "connect.php";
   session_start();
   $nursurya=$_GET['nursuryA'];
   if(isset($_GET['nursuryA']))
   {
       $query= "DELETE from nursurysd where NURSURYA='$nursurya'";
       $stmt= oci_parse($con,$query);
       oci_execute($stmt);
       if($stmt)
       {
           header("location:nursury.php");
       }
       else
       {
           echo $query."delete unsuccessful";
           die(oci_parse_error($con));
       }
   }
?>
