<?php
include "connect.php";
     if(isset($_POST['update']))
    {

          $thirda = $_POST['thirda'];
          $thirdb = $_POST['thirdb'];
          $thirdc = $_POST['thirdc'];
          $thirdd = $_POST['thirdd'];
          $thirde = $_POST['thirde'];
          $thirdf = $_POST['thirdf'];
          $thirdg = $_POST['thirdg'];
          $thirdh = $_POST['thirdh'];
          $thirdi = $_POST['thirdi'];
          $thirdj = $_POST['thirdj'];
          $thirdk = $_POST['thirdk'];
          $thirdl = $_POST['thirdl'];
          $thirdm = $_POST['thirdm'];
          $thirdn = $_POST['thirdn'];
          $thirdo = $_POST['thirdo'];
          $thirdp = $_POST['thirdp'];
          $thirdq = $_POST['thirdq'];
          $thirds = $_POST['thirds'];
          $thirdz = $_POST['thirdz'];
       
       $query = " update thirdr set THIRDA='$thirda' , THIRDB='$thirdb' , THIRDC='$thirdc' , THIRDD='$thirdd',THIRDE='$thirde',THIRDF='$thirdf',THIRDG='$thirdg',THIRDH='$thirdh',THIRDI='$thirdi', THIRDJ='$thirdj' ,THIRDK='$thirdk',THIRDL='$thirdl',THIRDM='$thirdm',THIRDN='$thirdn',THIRDO='$thirdo',THIRDP='$thirdp',THIRDQ='$thirdq',THIRDS='$thirds',THIRDZ='$thirdz' where THIRDA='$thirda' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: third.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>