<?php
include "connect.php";
     if(isset($_POST['update']))
    {

          $fivea = $_POST['fivea'];
          $fiveb = $_POST['fiveb'];
          $fivec = $_POST['fivec'];
          $fived = $_POST['fived'];
          $fivee = $_POST['fivee'];
          $fivef = $_POST['fivef'];
          $fiveg = $_POST['fiveg'];
          $fiveh = $_POST['fiveh'];
          $fivei = $_POST['fivei'];
          $fivej = $_POST['fivej'];
          $fivek = $_POST['fivek'];
          $fivel = $_POST['fivel'];
          $fivem = $_POST['fivem'];
          $fiven = $_POST['fiven'];
          $fiveo = $_POST['fiveo'];
          $fivep = $_POST['fivep'];
          $fiveq = $_POST['fiveq'];
          $fives = $_POST['fives'];
          $fivez = $_POST['fivez'];
       
       $query = " update fiver set FIVEA='$fivea' , FIVEB='$fiveb' , FIVEC='$fivec' , FIVED='$fived',FIVEE='$fivee',FIVEF='$fivef',FIVEG='$fiveg',FIVEH='$fiveh',FIVEI='$fivei', FIVEJ='$fivej' ,FIVEK='$fivek',FIVEL='$fivel',FIVEM='$fivem',FIVEN='$fiven',FIVEO='$fiveo',FIVEP='$fivep',FIVEQ='$fiveq',FIVES='$fives',FIVEZ='$fivez' where FIVEA='$fivea' " ;
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