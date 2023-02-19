<?php
include "connect.php";
$eigtha = $_GET['eigthA'];
$query = "select * from eigthr where eigtha ='" . $eigtha . "' ";
$stmt = oci_parse($con, $query);
oci_execute($stmt, OCI_DEFAULT);
if (($row = oci_fetch_array($stmt))) {
          $eigtha = $row['EIGTHA'];
          $eigthb = $row['EIGTHB'];
          $eigthc = $row['EIGTHC'];
          $eigthd = $row['EIGTHD'];
          $eigthe = $row['EIGTHE'];
          $eigthf = $row['EIGTHF'];
          $eigthg = $row['EIGTHG'];
          $eigthh = $row['EIGTHH'];
          $eigthi = $row['EIGTHI'];
          $eigthj = $row['EIGTHJ'];
          $eigthk = $row['EIGTHK'];
          $eigthl = $row['EIGTHL'];
          $eigthm = $row['EIGTHM'];
          $eigthn = $row['EIGTHN'];
          $eigtho = $row['EIGTHO'];
          $eigthp = $row['EIGTHP'];
          $eigthq = $row['EIGTHQ'];

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
    <div class="navbar shadow-lg shadow-gray-600 rounded-b-[20px] bg-gradient-to-r to-amber-50 via-yellow-50 from-blue-100 backdrop-blur-lg flex flex-col xs:flex-row justify-center xs:gap-4  md:p-4 items-center z-50">
        <div class="items-center flex">
          <img src="../logo.png" class="img aspect-square w-[70px] md:w-[100px] max-w-[100px]" alt="logo" />
        </div>
        <div class="flex justify-center flex-col items-center py-2">
          <h1 class=" text-2xl font-bold md:text-5xl text-gray-800 font-['Open_Sans']">SREE VIDYA SCHOOL</h1>
    
          <h2 class="h2 text-red-600 text-center font-['Open_Sans'] md:text-left md:text-2xl font-bold text-xs">
            Nursery to 10th Class(Recognised by Govt. of A.P)
          </h2>
    
          <h3 class="h3 text-[#3d3266] tracking-wider font-['Open_Sans'] text-center md:text-left font-bold md:text-xl text-xs">
            Kommadhi Marikavalasa Padalapeta
          </h3>
        </div>
      </div>
  
    <div class="container my-5 ">
        
        <h2 class="text-2xl text-center my-3 md:my-28 md:text-4xl font-bold "> Update Marks</h2><br>

        <form method="POST" action="updater.php" class="grid md:grid-cols-2 lg:grid-cols-3 justify-center gap-2  mx-auto max-w-[1000px] text-center">
            
            <div class="form-group">
                <label>
                    <h5 class="text-center text-violet-800 text-lg font-bold">Select Subject</h5>
                </label>
                
                <input  type="text" class="form-control font-bold"  name="eigtha" value="<?php echo $eigtha ?>" readonly>
                    
                
            </div>
            <div class="form-group  ">
                <label ><h5 class=" text-center text-violet-800 text-lg font-bold">FA-1</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control text-center w-24 h-10"  placeholder="E(20M)" name="eigthb" value="<?php echo $eigthb ?>" >
                <input type="text" class="form-control text-center w-24 h-10"  placeholder="I(30M)" name="eigthc" value="<?php echo $eigthc ?>" >
                <input type="text" class="form-control text-center w-24 h-10"  placeholder="E+I(50M)" name="eigthd" value="<?php echo $eigthd ?>"  >
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-800 text-lg font-bold">FA-2</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control text-center w-24 h-10"  placeholder="E(20M)" name="eigthe" value="<?php echo $eigthe ?>" >
                <input type="text" class="form-control text-center w-24 h-10"  placeholder="I(30M)" name="eigthf" value="<?php echo $eigthf ?>" >
                <input type="text" class="form-control text-center w-24 h-10"  placeholder="E+I(50M)" name="eigthg" value="<?php echo $eigthg ?>" >
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-800 text-lg font-bold">SA-1</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10"  placeholder="100M" name="eigthh" value="<?php echo $eigthh ?>" >
                
                </div>
            </div>
            <div class="form-group  ">
                <label ><h5 class="text-center text-violet-800 text-lg font-bold">FA-3</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control text-center w-24 h-10"  placeholder="E(20M)" name="eigthi" value="<?php echo $eigthi ?>" >
                <input type="text" class="form-control text-center w-24 h-10"  placeholder="I(30M)" name="eigthj" value="<?php echo $eigthj ?>" >
                <input type="text" class="form-control text-center w-24 h-10"  placeholder="E+I(50M)" name="eigthk" value="<?php echo $eigthk ?>" >
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-800 text-lg font-bold">FA-4</h5></label>
                <div class="flex md:flex flex-cols-3">
                <input type="text" class="form-control text-center  w-24 h-10"  placeholder="E(20M)" name="eigthl" value="<?php echo $eigthl ?>" >
                <input type="text" class="form-control text-center  w-24 h-10"  placeholder="I(30M)" name="eigthm" value="<?php echo $eigthm ?>" >
                <input type="text" class="form-control text-center  w-24 h-10"  placeholder="E+I(50M)" name="eigthn" value="<?php echo $eigthn ?>" >
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-800 text-lg font-bold">SA-2</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10"  placeholder="100M" name="eigtho" value="<?php echo $eigtho ?>" >
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-800 text-lg font-bold">S_TOTAL</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10"  placeholder="S-TOTAL" name="eigthp" value="<?php echo $eigthp ?>" >
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-center text-violet-800 text-lg font-bold">PERCENTAGE</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10" size="2" placeholder="PERCENTAGE" name="eigthq" value="<?php echo $eigthq ?>">
                
                </div>
            </div>
            
            
            <div class="ml-20 mt-2 bg-violet-500 text-2xl font-semibold p-2 md:p-4 w-40 md:ml-[25%] rounded-md hover:bg-emerald-600  text-zinc-100">
                <button type="submit" name="update">
                    update
                </button>
            </div>
        </form>
    </div>





</body>

</html>