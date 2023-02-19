<?php
include "connect.php";
     if(isset($_POST['update']))
    {

        $fiftha=$_POST['fiftha'];
        $fifthb=$_POST['fifthb'];
        $fifthc=$_POST['fifthc'];
        $fifthd=$_POST['fifthd'];
        $fifthe=$_POST['fifthe'];
        $fifthf=$_POST['fifthf'];
        $fifthg=$_POST['fifthg'];
        $fifthh=$_POST['fifthh'];
        $fifthi=$_POST['fifthi'];
        $fifthj=$_POST['fifthj'];
        $fifthl=$_POST['fifthl'];
       
       $query = " update fiftht set FIFTHA='$fiftha' , FIFTHB='$fifthb' , FIFTHC='$fifthc' , FIFTHD='$fifthd',FIFTHE='$fifthe',FIFTHF='$fifthf',FIFTHG='$fifthg',FIFTHH='$fifthh',FIFTHI='$fifthi', FIFTHJ='$fifthj' ,FIFTHL='$fifthl' where FIFTHA='$fiftha' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: fifth.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>