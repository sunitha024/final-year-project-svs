<?php
include "connect.php";
     if(isset($_POST['update']))
    {

          $seconda = $_POST['seconda'];
          $secondb = $_POST['secondb'];
          $secondc = $_POST['secondc'];
          $secondd = $_POST['secondd'];
          $seconde = $_POST['seconde'];
          $secondf = $_POST['secondf'];
          $secondg = $_POST['secondg'];
          $secondh = $_POST['secondh'];
          $secondi = $_POST['secondi'];
          $secondj = $_POST['secondj'];
          $secondk = $_POST['secondk'];
          $secondl = $_POST['secondl'];
          $secondm = $_POST['secondm'];
          $secondn = $_POST['secondn'];
          $secondo = $_POST['secondo'];
          $secondp = $_POST['secondp'];
          $secondq = $_POST['secondq'];
       
       $query = " update secondr set SECONDA='$seconda' , SECONDB='$secondb' , SECONDC='$secondc' , SECONDD='$secondd',SECONDE='$seconde',SECONDF='$secondf',SECONDG='$secondg',SECONDH='$secondh',SECONDI='$secondi', FSECONDJ='$secondj' ,SECONDK='$secondk',SECONDL='$secondl',SECONDM='$secondm',SECONDN='$secondn',SECONDO='$secondo',SECONDP='$secondp',SECONDQ='$secondq' where SECONDA='$seconda' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: second.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>