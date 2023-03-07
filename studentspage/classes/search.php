<?php
include "connect.php";

if (isset($_GET['tenB'])) {
  $tenb = (int) $_POST['tenB'];
  $query = "SELECT *from tenthsd where TENB=$tenb ";
  $stmt = oci_parse($con, $query);
  oci_execute($stmt);


  if ($stmt) {
    header("location:tenth.php");
  } else {
    echo "failed";
  }
}
?>



<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale-1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Student details</title>
  <style>
    a:hover {
      text-decoration: none
    }

    .form-control {
      width: 300px;
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


  <!-- <div>
        <form method="post">
        
           <input type="text" placeholder="Enter Student ID" name="search" class="h-11 bg-slate-200 rounded-md text-center font-extrbold inline">
          
             <button class="btn btn-info text-xl p-2 text-center" name="submit">
             Search&nbsp;<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
              </button>
        </form>
            
      

     </div> -->

  <table class="mt-2 table table-hover justify-center text-center text-xs md:text-xl ">
    <thead class="bg-slate-700 text-white">
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
    $query = "SELECT *from tenthsd";
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

          <td>
            <h5>
              <?php echo $tenb ?>
            </h5>
          </td>

          <td>
            <h5>
              <?php echo $tenc ?>
            </h5>
          </td>

          <td>
            <h5>
              <?php echo $tend ?>
            </h5>
          </td>

          <td>
            <h5>
              <?php echo $tene ?>
            </h5>
          </td>

          <td>
            <h5>
              <?php echo $tenf ?>
            </h5>
          </td>

          <td>
            <h5>
              <?php echo $teng ?>
            </h5>
          </td>

          <td>
            <h5>
              <?php echo $tenh ?>
            </h5>
          </td>



          <td class="gap-0">
            <a href="update.php?tenA=<?php echo $tena ?>">
              <button class="btn btn-primary text-xl p-3">
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
              <button class="btn btn-warning text-xl p-3 ">
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



</body>

</html>