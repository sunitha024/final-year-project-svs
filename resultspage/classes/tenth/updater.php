<?php
include "connect.php";
     if(isset($_POST['update']))
    {

          $tena = $_POST['tena'];
          $tenb = $_POST['tenb'];
          $tenc = $_POST['tenc'];
          $tend = $_POST['tend'];
          $tene = $_POST['tene'];
          $tenf = $_POST['tenf'];
          $teng = $_POST['teng'];
          $tenh = $_POST['tenh'];
          $teni = $_POST['teni'];
          $tenj = $_POST['tenj'];
          $tenk = $_POST['tenk'];
          $tenl = $_POST['tenl'];
          $tenm = $_POST['tenm'];
          $tenn = $_POST['tenn'];
          $teno = $_POST['teno'];
          $tenp = $_POST['tenp'];
          $tenq = $_POST['tenq'];
       
       $query = " update tenr set TENA='$tena' , TENB='$tenb' , TENC='$tenc' , TEND='$tend',TENE='$tene',TENF='$tenf',TENG='$teng',TENH='$tenh',TENI='$teni', TENJ='$tenj' ,TENK='$tenk',TENL='$tenl',TENM='$tenm',TENN='$tenn',TENO='$teno',TENP='$tenp',TENQ='$tenq' where TENA='$tena' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: tenth.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>