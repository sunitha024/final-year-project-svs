<?php
include "connect.php";
     if(isset($_POST['update']))
    {

          $sixa = $_POST['sixa'];
          $sixb = $_POST['sixb'];
          $sixc = $_POST['sixc'];
          $sixd = $_POST['sixd'];
          $sixe = $_POST['sixe'];
          $sixf = $_POST['sixf'];
          $sixg = $_POST['sixg'];
          $sixh = $_POST['sixh'];
          $sixi = $_POST['sixi'];
          $sixj = $_POST['sixj'];
          $sixk = $_POST['sixk'];
          $sixl = $_POST['sixl'];
          $sixm = $_POST['sixm'];
          $sixn = $_POST['sixn'];
          $sixo = $_POST['sixo'];
          $sixp = $_POST['sixp'];
          $sixq = $_POST['sixq'];
          $sixs = $_POST['sixs'];
          $sixz = $_POST['sixz'];
       
       $query = " update sixr set SIXA='$sixa' , SIXB='$sixb' , SIXC='$sixc' , SIXD='$sixd',SIXE='$sixe',SIXF='$sixf',SIXG='$sixg',SIXH='$sixh',SIXI='$sixi', SIXJ='$sixj' ,SIXK='$sixk',SIXL='$sixl',SIXM='$sixm',SIXN='$sixn',SIXO='$sixo',SIXP='$sixp',SIXQ='$sixq',SIXS='$sixs',SIXZ='$sixz' where SIXA='$sixa' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: sixth.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>