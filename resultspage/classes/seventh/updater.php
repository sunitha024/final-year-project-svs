<?php
include "connect.php";
     if(isset($_POST['update']))
    {

          $sevena = $_POST['sevena'];
          $sevenb = $_POST['sevenb'];
          $sevenc = $_POST['sevenc'];
          $sevend = $_POST['sevend'];
          $sevene = $_POST['sevene'];
          $sevenf = $_POST['sevenf'];
          $seveng = $_POST['seveng'];
          $sevenh = $_POST['sevenh'];
          $seveni = $_POST['seveni'];
          $sevenj = $_POST['sevenj'];
          $sevenk = $_POST['sevenk'];
          $sevenl = $_POST['sevenl'];
          $sevenm = $_POST['sevenm'];
          $sevenn = $_POST['sevenn'];
          $seveno = $_POST['seveno'];
          $sevenp = $_POST['sevenp'];
          $sevenq = $_POST['sevenq'];
          $sevens = $_POST['sevens'];
          $sevenz = $_POST['sevenz'];
       
       $query = " update sevenr set SEVENA='$sevena' , SEVENB='$sevenb' , SEVENC='$sevenc' , SEVEND='$sevend',SEVENE='$sevene',SEVENF='$sevenf',SEVENG='$seveng',SEVENH='$sevenh',SEVENI='$seveni', SEVENJ='$sevenj' ,SEVENK='$sevenk',SEVENL='$sevenl',SEVENM='$sevenm',SEVENN='$sevenn',SEVENO='$seveno',SEVENP='$sevenp',SEVENQ='$sevenq',SEVENS='$sevens',SEVENZ='$sevenz' where SEVENA='$sevena' " ;
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