<?php
include "connect.php";
     if(isset($_POST['update']))
    {

          $ninea = $_POST['ninea'];
          $nineb = $_POST['nineb'];
          $ninec = $_POST['ninec'];
          $nined = $_POST['nined'];
          $ninee = $_POST['ninee'];
          $ninef = $_POST['ninef'];
          $nineg = $_POST['nineg'];
          $nineh = $_POST['nineh'];
          $ninei = $_POST['ninei'];
          $ninej = $_POST['ninej'];
          $ninek = $_POST['ninek'];
          $ninel = $_POST['ninel'];
          $ninem = $_POST['ninem'];
          $ninen = $_POST['ninen'];
          $nineo = $_POST['nineo'];
          $ninep = $_POST['ninep'];
          $nineq = $_POST['nineq'];
       
       $query = " update niner set NINEA='$ninea' , NINEB='$nineb' , NINEC='$ninec' , NINED='$nined',NINEE='$ninee',NINEF='$ninef',NINEG='$nineg',NINEH='$nineh',NINEI='$ninei', NINEJ='$ninej' ,NINEK='$ninek',NINEL='$ninel',NINEM='$ninem',NINEN='$ninen',NINEO='$nineo',NINEP='$ninep',NINEQ='$nineq' where NINEA='$ninea' " ;
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