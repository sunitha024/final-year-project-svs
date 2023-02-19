<?php
include "connect.php";
     if(isset($_POST['update']))
    {

        $nina=$_POST['nina'];
        $ninb=$_POST['ninb'];
        $ninc=$_POST['ninc'];
        $nind=$_POST['nind'];
        $nine=$_POST['nine'];
        $ninf=$_POST['ninf'];
        $ning=$_POST['ning'];
        $ninh=$_POST['ninh'];
        $nini=$_POST['nini'];
        $ninj=$_POST['ninj'];
        $ninl=$_POST['ninl'];
       
       $query = " update nintht set NINA='$nina' , NINB='$ninb' , NINC='$ninc' , NIND='$nind',NINE='$nine',NINF='$ninf',NING='$ning',NINH='$ninh',NINI='$nini', NINJ='$ninj' ,NINL='$ninl' where NINA='$nina' " ;
       $stmt = oci_parse($con,$query);
       
       oci_execute($stmt);
       if($stmt)
        {
           //oci_commit($con);
          header("location: ninth.php");
        }
        else
        {
            echo "unsuccessful";
        }
   
    }

 
?>