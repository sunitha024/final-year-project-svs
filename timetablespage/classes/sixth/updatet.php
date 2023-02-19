<?php
include "connect.php";
     if(isset($_POST['update']))
    {

        $sixa=$_POST['sixa'];
        $sixb=$_POST['sixb'];
        $sixc=$_POST['sixc'];
        $sixd=$_POST['sixd'];
        $sixe=$_POST['sixe'];
        $sixf=$_POST['sixf'];
        $sixg=$_POST['sixg'];
        $sixh=$_POST['sixh'];
        $sixi=$_POST['sixi'];
        $sixj=$_POST['sixj'];
        $sixl=$_POST['sixl'];
       
       $query = " update sixt set SIXA='$sixa' , SIXB='$sixb' , SIXC='$sixc' , SIXD='$sixd',SIXE='$sixe',SIXF='$sixf',SIXG='$sixg',SIXH='$sixh',SIXI='$sixi', SIXJ='$sixj' ,SIXL='$sixl' where SIXA='$sixa' " ;
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