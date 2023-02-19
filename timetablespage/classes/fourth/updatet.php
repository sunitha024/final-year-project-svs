<?php
include "connect.php";
     if(isset($_POST['update']))
    {

        $fourtha=$_POST['fourtha'];
        $fourthb=$_POST['fourthb'];
        $fourthc=$_POST['fourthc'];
        $fourthd=$_POST['fourthd'];
        $fourthe=$_POST['fourthe'];
        $fourthf=$_POST['fourthf'];
        $fourthg=$_POST['fourthg'];
        $fourthh=$_POST['fourthh'];
        $fourthi=$_POST['fourthi'];
        $fourthj=$_POST['fourthj'];
        $fourthl=$_POST['fourthl'];
       
       $query = " update fourtht set FOURTHA='$fourtha' , FOURTHB='$fourthb' , FOURTHC='$fourthc' , FOURTHD='$fourthd',FOURTHE='$fourthe',FOURTHF='$fourthf',FOURTHG='$fourthg',FOURTHH='$fourthh',FOURTHI='$fourthi', FOURTHJ='$fourthj' ,FOURTHL='$fourthl' where FOURTHA='$fourtha' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: fourth.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>