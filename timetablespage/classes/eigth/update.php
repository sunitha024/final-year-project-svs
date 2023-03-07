<?php
include "connect.php";
$eigtha = $_GET['eigthA'];
$query = "select * from eigtht where eigtha ='" . $eigtha . "' ";
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
    $eigthl = $row['EIGTHL'];
}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title> Timetable details</title>
    <style>
        a:hover {
            text-decoration: none
        }

        .form-control {
            width: 300px;
        }

        /* body{background-image: linear-gradient(90deg,rgb(179, 146, 146), rgb(77, 143, 168));} */
    </style>


</head>

<body>
    <div class="container my-5">
        <h2 class="text-2xl text-center my-2 md:my-28 md:text-4xl "> Update Timetable details</h2><br>

        <form method="POST" action="updatet.php" class="grid md:grid-cols-2 lg:grid-cols-3 justify-center gap-2  mx-auto max-w-[1000px] text-center">
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Select Day</h5>
                </label>
                <!-- <input type="text" class="form-control" placeholder="Enter Your JobId" name="tena"  required> -->
                <select type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="eigtha" readonly>
                    <?php if ($eigtha == "MONDAY") { ?>
                        <option selected="selected">MONDAY</option>
                    <?php } else { ?>
                        <option>MONDAY</option>
                    <?php }
                    ?>

                    <?php if ($eigtha == "TUESDAY") { ?>
                        <option selected="selected">TUESDAY</option>
                    <?php } else { ?>
                        <option>TUESDAY</option>
                    <?php }
                    ?>

                    <?php if ($eigtha == "WEDNESDAY") { ?>
                        <option selected="selected">WEDNESDAY</option>
                    <?php } else { ?>
                        <option>WEDNESDAY</option>
                    <?php }
                    ?>

                    <?php if ($eigtha == "THURSDAY") { ?>
                        <option selected="selected">THURSDAY</option>
                    <?php } else { ?>
                        <option>THURSDAY</option>
                    <?php }
                    ?>

                    <?php if ($eigtha == "FRIDAY") { ?>
                        <option selected="selected">FRIDAY</option>
                    <?php } else { ?>
                        <option>FRIDAY</option>
                    <?php }
                    ?>

                    <?php if ($eigtha == "SATURDAY") { ?>
                        <option selected="selected">SATURDAY</option>
                    <?php } else { ?>
                        <option>SATURDAY</option>
                    <?php }
                    ?>
                </select>
            </div>
                  <div class="form-group after:content-['*'] after:ml-0.5 after:text-red-500">
                      <label>
                          <h5 class="text-xl">9-9:45</h5>
                      </label>
                      <input type="text" class="form-control " placeholder="Enter the subjectcode" name="eigthb" value="<?php echo $eigthb ?>" required>
      
                  </div>
                  <div class="form-group">
                      <label>
                          <h5 class="text-xl">9:45-10:30</h5>
                      </label>
                      <input type="text" class="form-control" placeholder="Enter the subjectcode" name="eigthc" value="<?php echo $eigthc ?>" required>
      
                  </div>
                  <div class="form-group">
                      <label>
                          <h5 class="text-xl">10:30PM-11:00PM</h5>
                      </label>
                      <input type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="eigthd" value="<?php echo $eigthd ?>" required readonly>
      
                  </div>
                  <div class="form-group">
                      <label>
                          <h5 class="text-xl">11:00PM-11:45PM</h5>
                      </label>
                      <input type="text" class="form-control" placeholder="Enter the subjectcode" name="eigthe" value="<?php echo $eigthe ?>" required>
      
                  </div>
                  <div class="form-group">
                      <label>
                          <h5 class="text-xl">11:45PM-12:30PM</h5>
                      </label>
                      <input type="text" class="form-control" placeholder="Enter the subjectcode" name="eigthf" value="<?php echo $eigthf ?>" required>
      
                  </div>
                  <div class="form-group">
                      <label>
                          <h5 class="text-xl">12:30PM-1:30PM</h5>
                      </label>
                      <input type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="eigthg" value="<?php echo $eigthg ?>" required readonly>
      
      
      
                  </div>
                  <div class="form-group">
                      <label>
                          <h5 class="text-xl">1:30PM-2:15PM</h5>
                      </label>
                      <input type="text" class="form-control" placeholder="Enter the subjectcode" name="eigthh" value="<?php echo $eigthh ?>" required>
      
                  </div>
                  <div class="form-group">
                      <label>
                          <h5 class="text-xl">2:15PM-3:00PM</h5>
                      </label>
                      <input type="text" class="form-control" placeholder="Enter the subjectcode" name="eigthi" value="<?php echo $eigthi ?>" required>
      
      
                  </div>
                  <div class="form-group">
                      <label>
                          <h5 class="text-xl">3:00PM-3:45PM</h5>
                      </label>
                      <input type="text" class="form-control " placeholder="Enter the subjectcode" name="eigthj" value="<?php echo $eigthj ?>" required>
      
                  </div>
                  <div class="form-group">
                      <label>
                          <h5 class="text-xl">3:45PM-4:30</h5>
                      </label>
                      <input type="text" class="form-control" placeholder="Enter the subjectcode" name="eigthl" value="<?php echo $eigthl ?>" required>
      
                  </div><br>
      
                  <!-- <button type="submit" name="submit" class="btn btn-primary">Submit</button> -->
                  <div class="ml-20 mt-2 bg-violet-500 text-2xl font-semibold p-2 md:p-4 w-40 md:ml-[25%] rounded-md hover:bg-emerald-600  text-zinc-100">
                      <button type="submit" name="update">
                          update
                      </button>
                  </div>
        </form>
    </div>





</body>

</html>