<?php
include "connect.php";
$fivea = $_GET['fiveA'];
$query = "select * from fiver where fivea ='" . $fivea . "' ";
$stmt = oci_parse($con, $query);
oci_execute($stmt, OCI_DEFAULT);
if (($row = oci_fetch_array($stmt))) {
          $fivea = $row['FIVEA'];
          $fiveb = $row['FIVEB'];
          $fivec = $row['FIVEC'];
          $fived = $row['FIVED'];
          $fivee = $row['FIVEE'];
          $fivef = $row['FIVEF'];
          $fiveg = $row['FIVEG'];
          $fiveh = $row['FIVEH'];
          $fivei = $row['FIVEI'];
          $fivej = $row['FIVEJ'];
          $fivek = $row['FIVEK'];
          $fivel = $row['FIVEL'];
          $fivem = $row['FIVEM'];
          $fiven = $row['FIVEN'];
          $fiveo = $row['FIVEO'];
          $fivep = $row['FIVEP'];
          $fiveq = $row['FIVEQ'];
          $fives = $row['FIVES'];
          $fivez = $row['FIVEZ'];

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
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="Enter ID" name="fivea" value="<?php echo $fivea ?>" required>
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">Id</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="Enter ID" name="fiveb" value="<?php echo $fiveb ?>" required>
                
                </div>
            </div>
            <div class="form-group">
                <label><h5 class="text-xl">Select Subject</h5></label>
                <!-- <input type="text" class="form-control" placeholder="Enter Your JobId" name="tena"  required> -->
                <select type="text" class="form-control text-center font-bold text-black" placeholder="Enter the subjectcode" name="fivec" value="<?php echo $fivec ?>">
                        
                        <?php if ($fivec == "TELUGU") { ?>
                        <option selected="selected">TEUGU</option>
                    <?php } else { ?>
                        <option>TELUGU</option>
                    <?php }
                    ?>

                    <?php if ($fivec == "HINDI") { ?>
                        <option selected="selected">HINDI</option>
                    <?php } else { ?>
                        <option>HINDI</option>
                    <?php }
                    ?>
                    <?php if ($fivec == "ENGLISH") { ?>
                        <option selected="selected">ENGLISH</option>
                    <?php } else { ?>
                        <option>ENGLISH</option>
                    <?php }
                    ?>
                    <?php if ($fivec == "MATHEMATICS") { ?>
                        <option selected="selected">MATHEMATICS</option>
                    <?php } else { ?>
                        <option>MATHEMATICS</option>
                    <?php }
                    ?>
                    <?php if ($fivec == "BIOLOGY") { ?>
                        <option selected="selected">BIOLOGY</option>
                    <?php } else { ?>
                        <option>BIOLOGY</option>
                    <?php }
                    ?>
                    <?php if ($fivec == "PHYSICS") { ?>
                        <option selected="selected">PHYSICS</option>
                    <?php } else { ?>
                        <option>PHYSICS</option>
                    <?php }
                    ?>
                    <?php if ($fivec == "SOCIAL") { ?>
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
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E(20M)" name="fived" value="<?php echo $fived ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="I(30M)" name="fivee" value="<?php echo $fivee ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E+I(50M)" name="fivef" value="<?php echo $fivef ?>" readonly >
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">FA-2</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E(20M)" name="fiveg" value="<?php echo $fiveg ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="I(30M)" name="fiveh" value="<?php echo $fiveh ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E+I(50M)" name="fivei" value="<?php echo $fivei ?>" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">SA-1</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10"  placeholder="100M" name="fivej" value="<?php echo $fivej ?>" >
                
                </div>
            </div>
            <div class="form-group  ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">FA-3</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E(20M)" name="fivek" value="<?php echo $fivek ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="I(30M)" name="fivel" value="<?php echo $fivel ?>" >
                <input type="text" class="form-control font-bold text-black text-center w-24 h-10"  placeholder="E+I(50M)" name="fivem" value="<?php echo $fivem ?>" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">FA-4</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center  w-24 h-10"  placeholder="E(20M)" name="fiven" value="<?php echo $fiven ?>" >
                <input type="text" class="form-control font-bold text-black text-center  w-24 h-10"  placeholder="I(30M)" name="fiveo" value="<?php echo $fiveo ?>" >
                <input type="text" class="form-control font-bold text-black text-center  w-24 h-10"  placeholder="E+I(50M)" name="fivep" value="<?php echo $fivep ?>" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">SA-2</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10"  placeholder="100M" name="fiveq" value="<?php echo $fiveq ?>" >
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">S_TOTAL</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10"  placeholder="S-TOTAL" name="fives" value="<?php echo $fives ?>" readonly>
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-100 text-lg font-bold">PERCENTAGE</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="PERCENTAGE" name="fivez" value="<?php echo $fivez ?>" readonly>
                
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