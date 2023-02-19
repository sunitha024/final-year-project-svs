<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="st.css">
  <script src="https://kit.fontawesome.com/3221a471b1.js" crossorigin="anonymous"></script>
  <link href="input.css" rel="stylesheet">
  <!-- <img class="image" src="VSP.jpeg"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lobster&family=Poppins:wght@300&display=swap" rel="stylesheet"> -->
  <title> final year project</title>
  <style>

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


  <h1 class="text-center text-2xl font-bold italic mt-10">3rd CLASS TIMETABLE</h1><br>


  <div class="container overflow-scroll  ">
    <!-- <button class="ml-20 mt-8 bg-violet-400 text-2xl font-semibold p-3 w-40 md:ml-[25%] rounded-md hover:bg-emerald-600  text-zinc-100" >
      </button> -->
    <div class="flex gap-4 ml-20">
      <img src="downloads.png" class=" h-10 w-10">
    </div>
    <br>
    <table class="mt-2 table table-hover justify-center text-center text-xs md:text-xl ">
      <thead>
        <tr>
            <th rowspan="2">Subject</th>
			<th colspan="3">F.A-1</th>
			<th colspan="3">F.A-2</th>
			<th >S.A-1</th>
			<th colspan="3">F.A-3</th>
			<th colspan="3">F.A-4</th>
			<th >S.A-2</th>
			<th >S.Total</th>
			<th >Percent</th>

        </tr>
        <tr >
            
			<td class="text-green-800 font-bold ">E(20M)</td>
			<td class="text-green-800 font-bold ">I(30M)</td>
			<td class="text-green-800 font-bold ">E+I(50M)</td>
			<td class="text-pink-700 font-bold ">E(20M)</td>
			<td class="text-pink-700 font-bold ">I(30M)</td>
			<td class="text-pink-700 font-bold ">E+I(50M)</td>
			<td class="text-violet-800 font-bold ">100M</td>
			<td class="text-green-800 font-bold ">E(20M)</td>
			<td class="text-green-800 font-bold ">I(30M)</td>
			<td class="text-green-800 font-bold ">E+I(50M)</td>
			<td class="text-pink-700 font-bold ">E(20M)</td>
			<td class="text-pink-700 font-bold ">I(30M)</td>
			<td class="text-pink-700 font-bold ">E+I(50M)</td>
			<td class="text-violet-800 font-bold ">100M</td>
			<td class="text-cyan-700 font-bold ">400M</td>
			<td class="text-fuchsia-800 font-bold ">%</td>
		</tr>
      </thead>

      <?php
      include "connect.php";
      $query = "SELECT *from sixr";
      $stmt = oci_parse($con, $query);
      oci_execute($stmt, OCI_DEFAULT);

      if ($stmt) {
        while (($row = oci_fetch_array($stmt))) {

          
          $sixa = $row['SIXA'];
          $sixb = $row['SIXB'];
          $sixc = $row['SIXC'];
          $sixd = $row['SIXD'];
          $sixe = $row['SIXE'];
          $sixf = $row['SIXF'];
          $sixg = $row['SIXG'];
          $sixh = $row['SIXH'];
          $sixi = $row['SIXI'];
          $sixj = $row['SIXJ'];
          $sixk = $row['SIXK'];
          $sixl = $row['SIXL'];
          $sixm = $row['SIXM'];
          $sixn = $row['SIXN'];
          $sixo = $row['SIXO'];
          $sixp = $row['SIXP'];
          $sixq = $row['SIXQ'];
          

      ?>
          <tr>
                    
               <td class="font-bold"><h5><?php echo $sixa ?></h5></td>
               <td><h5><?php echo $sixb ?></h5></td>
               <td><h5><?php echo $sixc ?></h5></td>
               <td><h5><?php echo $sixd ?></h5></td>
               <td><h5><?php echo $sixe ?></h5></td>
               <td><h5><?php echo $sixf ?></h5></td>
               <td><h5><?php echo $sixg ?></h5></td>
               <td><h5><?php echo $sixh ?></h5></td>
               <td><h5><?php echo $sixi ?></h5></td>
               <td><h5><?php echo $sixj ?></h5></td>
               <td><h5><?php echo $sixk ?></h5></td>
               <td><h5><?php echo $sixl ?></h5></td>
               <td><h5><?php echo $sixm ?></h5></td>
               <td><h5><?php echo $sixn ?></h5></td>
               <td><h5><?php echo $sixo ?></h5></td>
               <td><h5><?php echo $sixp ?></h5></td>
               <td><h5><?php echo $sixq ?></h5></td>
		


               <td><a href="update.php?sixA=<?php echo $sixa ?>"><button class="btn btn-primary text-xl p-2">EDIT</button></a></td>
   
          </tr>
      <?php
        }
      }
      ?>

    </table>
  </div>

  </div>
  <!-- <button class="ml-20 mt-8 bg-[#0f3b6d] text-2xl font-semibold p-3 w-40 md:ml-[25%] rounded-md hover:bg-emerald-600  text-zinc-100" >
      Save
    </button> -->




  <!-- <style>
   table 
   {
     font-family: arial, sans-serif;
     border-collapse: collapse;
     width: 30%;
     margin-left:30px;
   }
  
   td, th 
   {
     border: 1px solid #24101036;
     text-align: center;
     padding: 15px;
     width:300px;
   }

   tr:nth-child(odd) 
   {
     background-color: green;
     
   }
</style> -->
</body>