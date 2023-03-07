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
  
  
  <title> Sree Vidya School</title>
  <style>
    body 
    {
        background-color: #1e293b;
        color: white;
       
    }
    .dark-mode 
    {
       background-color: #1e293b;
       color: white;
    }
    .light-mode
    {
       background-color: white;
       color: black;
    }
    .search:focus
    {
      outline:none;
    }
    

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

      <h3
        class="h3 text-[#3d3266] tracking-wider font-['Open_Sans'] text-center md:text-left font-bold md:text-xl text-xs">
        Kommadhi Marikavalasa Padalapeta
      </h3>
    </div>
  </div>

  <h1 class="text-center text-2xl font-bold italic mt-10">10th Student Details</h1><br>


    <div class="container overflow-scroll lg:overflow-hidden">
      <div class="md:flex gap-4 2xs:ml-4 xs:ml-10 lg:ml-20">
      
         <div class="flex 3xs:gap-2 2xs:gap-4">
            <a href="insert.php">
              <img src="addition.png" class="h-10 w-10">
            </a>
      
            <a href="#" class="cursor-pointer">
              <button onClick="table2Excel()"><img src="downloads.png" class="h-10 w-10"></button>
            </a>
      
            
            <td>
              <a href="truncate.php">
                <button class="bg-red-700 3xs:w-[110%] 2xs:w-[100%] text-white rounded-md hover:bg-red-500 3xs:text-sm md:text-xl 3xs:p-2">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                  </svg>&nbsp;Delete all Student Records
                </button></a>
            </td>

            <!-- <h3 id="DarkModetext">Dark Mode is OFF</h3> -->
            <button onclick="darkMode()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
            </svg>
            </button>
            <button onclick="lightMode()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
             <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
            </svg>
            </button>
         </div>
          <div class=" 3xs:flex lg:ml-96">
          <form method="POST" action="tenth.php">

            
            <input type="search" placeholder="Enter ID" name="tenB"
              class="search focus-none border-b h-12 w-[40%]  border-b-violet-900 rounded-md text-center text-lg font-bold">
    
    
            <!-- <button class="btn btn-info text-xl p-2 text-center" type="submit"> -->
            <button class="bg-cyan-500 rounded-2xl hover:bg-violet-600 shadow-md text-center 3xs:text-sm lg:text-xl p-1" type ="submit">
    
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 inline">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                 </svg>
            
    
            </button>
          </form>
          </div>  
      



    </div>
    <br>

    <table id="example" class="table table-hover overflow:scroll mt-2  justify-center text-center text-xs md:text-xl ">

       <thead class="bg-slate-700  text-white">
        <tr>
          <th>S.no</th>
          <th>ID</th>
          <th>Student Name</th>
          <th>Online child ID</th>
          <th>Date of Birth</th>
          <th>Father Name</th>
          <th>Mobile NO</th>
          <th>Area</th>

          <th>EDIT</th>
          <th>DELETE</th>

        </tr>
      </thead>


      <?php

      include "connect.php";
      if (isset($_POST['tenB'])) 
      {
        $tenb = (int) $_POST['tenB'];
        $query = "SELECT *from tenthsd where TENB=$tenb";
      } 
      else 
      {
        $query = "SELECT *from tenthsd ";
      }
      $stmt = oci_parse($con, $query);
      oci_execute($stmt, OCI_DEFAULT);

      if ($stmt) {
        while (($row = oci_fetch_array($stmt))) {

          $tena = $row['TENA'];
          $tenb = $row['TENB'];
          $tenc = $row['TENC'];
          $tend = $row['TEND'];
          $tene = $row['TENE'];
          $tenf = $row['TENF'];
          $teng = $row['TENG'];
          $tenh = $row['TENH'];


          ?>
          <tr>
            <td class="text-pink-600 font-extrabold">
              <h5>
                <?php echo $tena ?>
              </h5>
            </td>

            <td class="">
              <h5>
                <?php echo $tenb ?>
              </h5>
            </td>

            <td class="">
              <h5>
                <?php echo $tenc ?>
              </h5>
            </td>

            <td class="">
              <h5>
                <?php echo $tend ?>
              </h5>
            </td>

            <td class="">
              <h5>
                <?php echo $tene ?>
              </h5>
            </td>

            <td class="">
              <h5>
                <?php echo $tenf ?>
              </h5>
            </td>

            <td class="">
              <h5>
                <?php echo $teng ?>
              </h5>
            </td>

            <td class="">
              <h5>
                <?php echo $tenh ?>
              </h5>
            </td>



            <td class="gap-0">
              <a href="update.php?tenA=<?php echo $tena ?>">
                <button class="bg-blue-700 text-white rounded-md hover:bg-blue-400 text-xl p-3">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>&nbsp;EDIT
                </button>
              </a>
            </td>
            <td>
              <a href="delete.php?tenA=<?php echo $tena ?>">
                <button class="bg-pink-700 text-center hover:bg-fuchsia-800 text-white rounded-md text-xl p-3 ">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 inline">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>&nbsp;DELETE
                </button></a>
            </td>
          </tr>
          <?php
        }
      }
      ?>

    </table>
    

  </div>

  <!-- for download Excel file -->

  <script>
     function table2Excel()
     {
       var table2excel = new Table2Excel();
       table2excel.export(document.querySelectorAll("table.table"));
     }


    
    
      function darkMode() {
        var element = document.body;
        var content = document.getElementById("DarkModetext");
        element.className = "dark-mode";
        content.innerText = "Dark Mode is ON";
      }
      function lightMode() {
        var element = document.body;
        var content = document.getElementById("DarkModetext");
        element.className = "light-mode";
        content.innerText = "Dark Mode is OFF";
      }
    
  </script>

  <script type="text/javascript" src="table2excel.js"></script>
  <!-- end -->
  

</body>

</html>