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
    <div class="flex gap-4 ml-20"><a href="insert.php">
        <img src="addition.png" class="h-10 w-10"></a>
      <img src="downloads.png" class=" h-10 w-10">
    </div>
    <br>
    <table class="mt-2 table table-hover justify-center text-center text-xs md:text-xl ">
      <thead>
        <tr>
          <th></th>
          <th>9:00PM-9:45PM</th>
          <th>9:45PM-10:30PM</th>
          <th>10:30PM-11:00PM</th>
          <th>11:00PM-11:45PM</th>
          <th>11:45PM-12:30PM</th>
          <th>12:30PM-1:30PM</th>
          <th>1:30PM-2:15PM</th>
          <th>2:15PM-3:00PM</th>
          <th>3:00PM-3:45PM</th>
          <th>3:45PM-4:30PM</th>
          <th>EDIT</th>
          <th>DELETE</th>

        </tr>
      </thead>

      <?php
      include "connect.php";
      $query = "SELECT *from thirdt";
      $stmt = oci_parse($con, $query);
      oci_execute($stmt, OCI_DEFAULT);

      if ($stmt) {
        while (($row = oci_fetch_array($stmt))) {

          $thirda = $row['THIRDA'];
          $thirdb = $row['THIRDB'];
          $thirdc = $row['THIRDC'];
          $thirdd = $row['THIRDD'];
          $thirde = $row['THIRDE'];
          $thirdf = $row['THIRDF'];
          $thirdg = $row['THIRDG'];
          $thirdh = $row['THIRDH'];
          $thirdi = $row['THIRDI'];
          $thirdj = $row['THIRDJ'];
          $thirdl = $row['THIRDL'];

      ?>
          <tr>
               <td class="font-semibold italic"><h5><?php echo $thirda ?></h5></td>
               <td><h5><?php echo $thirdb ?></h5></td>
               <td><h5><?php echo $thirdc ?></h5></td>
               <td class="font-extrabold italic"><h5><?php echo $thirdd ?></h5></td>
               <td><h5><?php echo $thirde ?></h5></td>
               <td><h5><?php echo $thirdf ?></h5></td>
               <td class="font-extrabold italic"><h5><?php echo $thirdg ?></h5></td>
               <td><h5><?php echo $thirdh ?></h5></td>
               <td><h5><?php echo $thirdi ?></h5></td>
               <td><h5><?php echo $thirdj ?></h5></td>
               <td><h5><?php echo $thirdl ?></h5></td>


               <td><a href="update.php?thirdA=<?php echo $thirda ?>"><button class="btn btn-primary text-xl p-2">EDIT</button></a></td>
               <td><a href="delete.php?thirdA=<?php echo $thirda ?>"><button class="btn btn-danger text-xl p-2">DELETE</button></a></td>
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