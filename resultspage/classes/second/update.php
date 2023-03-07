<?php
include "connect.php";
$seconda = $_GET['secondA'];
$query = "select * from secondr where seconda ='" . $seconda . "' ";
$stmt = oci_parse($con, $query);
oci_execute($stmt, OCI_DEFAULT);
if (($row = oci_fetch_array($stmt))) {
          $seconda = $row['SECONDA'];
          $secondb = $row['SECONDB'];
          $secondc = $row['SECONDC'];
          $secondd = $row['SECONDD'];
          $seconde = $row['SECONDE'];
          $secondf = $row['SECONDF'];
          $secondg = $row['SECONDG'];
          $secondh = $row['SECONDH'];
          $secondi = $row['SECONDI'];
          $secondj = $row['SECONDJ'];
          $secondk = $row['SECONDK'];
          $secondl = $row['SECONDL'];
          $secondm = $row['SECONDM'];
          $secondn = $row['SECONDN'];
          $secondo = $row['SECONDO'];
          $secondp = $row['SECONDP'];
          $secondq = $row['SECONDQ'];
          $seconds = $row['SECONDS'];
          $secondz = $row['SECONDZ'];

}
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> Marks details</title>
    <style>
      body 
       {
         background-color: #1e293b;
         color: white;
        
       }
       
        a:hover {
            text-decoration: none
        }

        .form-control {
            width: 300px;
        }
     
        /* body{background-image: linear-gradient(90deg,rgb(179, 146, 146), rgb(77, 143, 168));} */
    </style>
    <script>
    tailwind.config = {
      theme: {
        screens: {
          '3xs': '320px',
          // => @media (min-width: 640px) { ... }

          '2xs': '375px',
          // => @media (min-width: 640px) { ... }

          'xs': '425px',
          // => @media (min-width: 640px) { ... }

          'sm': '640px',
          // => @media (min-width: 640px) { ... }

          'md': '768px',
          // => @media (min-width: 768px) { ... }

          '2md': '845px',
          // => @media (min-width: 690px) { ... }

          'lg': '1024px',
          // => @media (min-width: 1024px) { ... }

          'xl': '1280px',
          // => @media (min-width: 1280px) { ... }

          '2xl': '1440px'
          // => @media (min-width: 1536px) { ... }
        },
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>


</head>

<body>
    
<div class="container my-5 ">
        
        <h2 class="text-2xl text-center my-3 md:my-28 md:text-4xl font-bold "> Update Marks</h2><br>

        <form method="POST" action="updater.php" class="grid md:grid-cols-2 lg:grid-cols-3 justify-center gap-2  mx-auto max-w-[1000px] text-center">
            
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">S.NO</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="Enter ID" name="seconda" value="<?php echo $seconda ?>" required>
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">Id</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="Enter ID" name="secondb" value="<?php echo $secondb ?>" required>
                
                </div>
            </div>
            <div class="form-group">
                <label><h5 class="text-xl">Select Subject</h5></label>
                <!-- <input type="text" class="form-control" placeholder="Enter Your JobId" name="tena"  required> -->
                <select type="text" class="form-control text-center font-bold text-black" placeholder="Enter the subjectcode" name="secondc" value="<?php echo $secondc ?>">
                        
                        <?php if ($secondc == "TELUGU") { ?>
                        <option selected="selected">TEUGU</option>
                    <?php } else { ?>
                        <option>TELUGU</option>
                    <?php }
                    ?>

                    <?php if ($secondc == "HINDI") { ?>
                        <option selected="selected">HINDI</option>
                    <?php } else { ?>
                        <option>HINDI</option>
                    <?php }
                    ?>
                    <?php if ($secondc == "ENGLISH") { ?>
                        <option selected="selected">ENGLISH</option>
                    <?php } else { ?>
                        <option>ENGLISH</option>
                    <?php }
                    ?>
                    <?php if ($secondc == "MATHEMATICS") { ?>
                        <option selected="selected">MATHEMATICS</option>
                    <?php } else { ?>
                        <option>MATHEMATICS</option>
                    <?php }
                    ?>
                    <?php if ($secondc == "BIOLOGY") { ?>
                        <option selected="selected">BIOLOGY</option>
                    <?php } else { ?>
                        <option>BIOLOGY</option>
                    <?php }
                    ?>
                    <?php if ($secondc == "PHYSICS") { ?>
                        <option selected="selected">PHYSICS</option>
                    <?php } else { ?>
                        <option>PHYSICS</option>
                    <?php }
                    ?>
                    <?php if ($secondc == "SOCIAL") { ?>
                        <option selected="selected">SOCIAL</option>
                    <?php } else { ?>
                        <option>SOCIAL</option>
                    <?php }
                    ?>
                </select>
            </div>
            <div class="form-group  ">
                <label ><h5 class=" text-center text-violet-100 text-lg font-bold">FA-1</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E(20M)" name="secondd" value="<?php echo $secondd ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="I(30M)" name="seconde" value="<?php echo $seconde ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E+I(50M)" name="secondf" value="<?php echo $secondf ?>" readonly >
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">FA-2</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E(20M)" name="secondg" value="<?php echo $secondg ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="I(30M)" name="secondh" value="<?php echo $secondh ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E+I(50M)" name="secondi" value="<?php echo $secondi ?>" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">SA-1</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10"  placeholder="100M" name="secondj" value="<?php echo $secondj ?>" >
                
                </div>
            </div>
            <div class="form-group  ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">FA-3</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E(20M)" name="secondk" value="<?php echo $secondk ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="I(30M)" name="secondl" value="<?php echo $secondl ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E+I(50M)" name="secondm" value="<?php echo $secondm ?>" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">FA-4</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center  w-24 h-10"  placeholder="E(20M)" name="secondn" value="<?php echo $secondn ?>" >
                <input type="text" class="form-control font-bold text-black text-center  w-24 h-10"  placeholder="I(30M)" name="secondo" value="<?php echo $secondo ?>" >
                <input type="text" class="form-control font-bold text-black text-center  w-24 h-10"  placeholder="E+I(50M)" name="secondp" value="<?php echo $secondp ?>" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">SA-2</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10"  placeholder="100M" name="secondq" value="<?php echo $secondq ?>" >
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">S_TOTAL</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10"  placeholder="S-TOTAL" name="seconds" value="<?php echo $seconds ?>" readonly >
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">PERCENTAGE</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="PERCENTAGE" name="secondz" value="<?php echo $secondz ?>" readonly>
                
                </div>
            </div><br>
            
            
            
            <div class="ml-20 mt-6 bg-emerald-500  text-black text-2xl text-center font-semibold p-2 md:p-5 w-40 md:ml-[15%] rounded-md hover:bg-violet-600 hover:text-white  ">
                <button type="submit" name="update">
                   update
                </button>
            </div>
          </form>
    </div>


</body>

</html>