<?php
include "connect.php";
$tena = $_GET['tenA'];
$query = "select * from tenr where tena ='" . $tena . "' ";
$stmt = oci_parse($con, $query);
oci_execute($stmt, OCI_DEFAULT);
if (($row = oci_fetch_array($stmt))) {
          $tena = $row['TENA'];
          $tenb = $row['TENB'];
          $tenc = $row['TENC'];
          $tend = $row['TEND'];
          $tene = $row['TENE'];
          $tenf = $row['TENF'];
          $teng = $row['TENG'];
          $tenh = $row['TENH'];
          $teni = $row['TENI'];
          $tenj = $row['TENJ'];
          $tenk = $row['TENK'];
          $tenl = $row['TENL'];
          $tenm = $row['TENM'];
          $tenn = $row['TENN'];
          $teno = $row['TENO'];
          $tenp = $row['TENP'];
          $tenq = $row['TENQ'];
          $tens = $row['TENS'];
          $tenz = $row['TENZ'];

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
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="Enter ID" name="tena" value="<?php echo $tena ?>" required>
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">Id</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="Enter ID" name="tenb" value="<?php echo $tenb ?>" required>
                
                </div>
            </div>
            <div class="form-group">
                <label><h5 class="text-xl">Select Subject</h5></label>
                <!-- <input type="text" class="form-control" placeholder="Enter Your JobId" name="tena"  required> -->
                <select type="text" class="form-control text-center font-bold text-black" placeholder="Enter the subjectcode" name="tenc" value="<?php echo $tenc ?>">
                        
                        <?php if ($tenc == "TELUGU") { ?>
                        <option selected="selected">TEUGU</option>
                    <?php } else { ?>
                        <option>TELUGU</option>
                    <?php }
                    ?>

                    <?php if ($tenc == "HINDI") { ?>
                        <option selected="selected">HINDI</option>
                    <?php } else { ?>
                        <option>HINDI</option>
                    <?php }
                    ?>
                    <?php if ($tenc == "ENGLISH") { ?>
                        <option selected="selected">ENGLISH</option>
                    <?php } else { ?>
                        <option>ENGLISH</option>
                    <?php }
                    ?>
                    <?php if ($tenc == "MATHEMATICS") { ?>
                        <option selected="selected">MATHEMATICS</option>
                    <?php } else { ?>
                        <option>MATHEMATICS</option>
                    <?php }
                    ?>
                    <?php if ($tenc == "BIOLOGY") { ?>
                        <option selected="selected">BIOLOGY</option>
                    <?php } else { ?>
                        <option>BIOLOGY</option>
                    <?php }
                    ?>
                    <?php if ($tenc == "PHYSICS") { ?>
                        <option selected="selected">PHYSICS</option>
                    <?php } else { ?>
                        <option>PHYSICS</option>
                    <?php }
                    ?>
                    <?php if ($tenc == "SOCIAL") { ?>
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
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E(20M)" name="tend" value="<?php echo $tend ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="I(30M)" name="tene" value="<?php echo $tene ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E+I(50M)" name="tenf" value="<?php echo $tenf ?>" readonly >
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">FA-2</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E(20M)" name="teng" value="<?php echo $teng ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="I(30M)" name="tenh" value="<?php echo $tenh ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E+I(50M)" name="teni" value="<?php echo $teni ?>" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">SA-1</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10"  placeholder="100M" name="tenj" value="<?php echo $tenj ?>" >
                
                </div>
            </div>
            <div class="form-group  ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">FA-3</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E(20M)" name="tenk" value="<?php echo $tenk ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="I(30M)" name="tenl" value="<?php echo $tenl ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E+I(50M)" name="tenm" value="<?php echo $tenm ?>" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">FA-4</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center  w-24 h-10"  placeholder="E(20M)" name="tenn" value="<?php echo $tenn ?>" >
                <input type="text" class="form-control font-bold text-black text-center  w-24 h-10"  placeholder="I(30M)" name="teno" value="<?php echo $teno ?>" >
                <input type="text" class="form-control font-bold text-black text-center  w-24 h-10"  placeholder="E+I(50M)" name="tenp" value="<?php echo $tenp ?>" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">SA-2</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10"  placeholder="100M" name="tenq" value="<?php echo $tenq ?>" >
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">S_TOTAL</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10"  placeholder="S-TOTAL" name="tens" value="<?php echo $tens ?>" readonly>
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">PERCENTAGE</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="PERCENTAGE" name="tenz" value="<?php echo $tenz ?>" readonly>
                
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