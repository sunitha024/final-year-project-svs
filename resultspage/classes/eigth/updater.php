<?php
include "connect.php";
     if(isset($_POST['update']))
    {

          $eigtha = $_POST['eigtha'];
          $eigthb = $_POST['eigthb'];
          $eigthc = $_POST['eigthc'];
          $eigthd = $_POST['eigthd'];
          $eigthe = $_POST['eigthe'];
          $eigthf = $_POST['eigthf'];
          $eigthg = $_POST['eigthg'];
          $eigthh = $_POST['eigthh'];
          $eigthi = $_POST['eigthi'];
          $eigthj = $_POST['eigthj'];
          $eigthk = $_POST['eigthk'];
          $eigthl = $_POST['eigthl'];
          $eigthm = $_POST['eigthm'];
          $eigthn = $_POST['eigthn'];
          $eigtho = $_POST['eigtho'];
          $eigthp = $_POST['eigthp'];
          $eigthq = $_POST['eigthq'];
       
       $query = " update eigthr set EIGTHA='$eigtha' , EIGTHB='$eigthb' , EIGTHC='$eigthc' , EIGTHD='$eigthd',EIGTHE='$eigthe',EIGTHF='$eigthf',EIGTHG='$eigthg',EIGTHH='$eigthh',EIGTHI='$eigthi', EIGTHJ='$eigthj' ,EIGTHK='$eigthk',EIGTHL='$eigthl',EIGTHM='$eigthm',EIGTHN='$eigthn',EIGTHO='$eigtho',EIGTHP='$eigthp',EIGTHQ='$eigthq' where EIGTHA='$eigtha' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: eigth.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>