<?php 
// $con=new mysqli('localhost:3306','root','sunitha','dbschool');
// if($con)
// {
//     echo "";
// }
// else
// {
//     die(mysqli_error($con));
// }


   $con=oci_connect("system","sunitha","XE");
   if(!$con)
   {
      die(oci_parse_error($con));
      echo "connected";
      oci_close($con);
   }
   

?> 