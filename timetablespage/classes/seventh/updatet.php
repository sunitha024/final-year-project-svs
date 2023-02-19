<?php
include "connect.php";
     if(isset($_POST['update']))
    {

        $seva=$_POST['seva'];
        $sevb=$_POST['sevb'];
        $sevc=$_POST['sevc'];
        $sevd=$_POST['sevd'];
        $seve=$_POST['seve'];
        $sevf=$_POST['sevf'];
        $sevg=$_POST['sevg'];
        $sevh=$_POST['sevh'];
        $sevi=$_POST['sevi'];
        $sevj=$_POST['sevj'];
        $sevl=$_POST['sevl'];
       
       $query = " update seventht set SEVA='$seva' , SEVB='$sevb' , SEVC='$sevc' , SEVD='$sevd',SEVE='$seve',SEVF='$sevf',SEVG='$sevg',SEVH='$sevh',SEVI='$sevi', SEVJ='$sevj' ,SEVL='$sevl' where SEVA='$seva' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: seventh.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>