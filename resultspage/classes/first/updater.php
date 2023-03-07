<?php
include "connect.php";
     if(isset($_POST['update']))
    {

          $firsta = $_POST['firsta'];
          $firstb = $_POST['firstb'];
          $firstc = $_POST['firstc'];
          $firstd = $_POST['firstd'];
          $firste = $_POST['firste'];
          $firstf = $_POST['firstf'];
          $firstg = $_POST['firstg'];
          $firsth = $_POST['firsth'];
          $firsti = $_POST['firsti'];
          $firstj = $_POST['firstj'];
          $firstk = $_POST['firstk'];
          $firstl = $_POST['firstl'];
          $firstm = $_POST['firstm'];
          $firstn = $_POST['firstn'];
          $firsto = $_POST['firsto'];
          $firstp = $_POST['firstp'];
          $firstq = $_POST['firstq'];
          $firsts = $_POST['firsts'];
          $firstz = $_POST['firstz'];
       
       $query = " update firstr set FIRSTA='$firsta' , FIRSTB='$firstb' , FIRSTC='$firstc' , FIRSTD='$firstd',FIRSTE='$firste',FIRSTF='$firstf',FIRSTG='$firstg',FIRSTH='$firsth',FIRSTI='$firsti', FIRSTJ='$firstj' ,FIRSTK='$firstk',FIRSTL='$firstl',FIRSTM='$firstm',FIRSTN='$firstn',FIRSTO='$firsto',FIRSTP='$firstp',FIRSTQ='$firstq',FIRSTS='$firsts',FIRSTZ='$firstz' where FIRSTA='$firsta' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: first.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>