<?php
include "connect.php";
$seva = $_GET['sevA'];
$query = "select * from seventht where seva ='" . $seva . "' ";
$stmt = oci_parse($con, $query);
oci_execute($stmt, OCI_DEFAULT);
if (($row = oci_fetch_array($stmt))) {
    $seva = $row['SEVA'];
    $sevb = $row['SEVB'];
    $sevc = $row['SEVC'];
    $sevd = $row['SEVD'];
    $seve = $row['SEVE'];
    $sevf = $row['SEVF'];
    $sevg = $row['SEVG'];
    $sevh = $row['SEVH'];
    $sevi = $row['SEVI'];
    $sevj = $row['SEVJ'];
    $sevl = $row['SEVL'];
}

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title> timetable details</title>
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
                <select type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="seva" readonly>
                    <?php if ($seva == "MONDAY") { ?>
                        <option selected="selected">MONDAY</option>
                    <?php } else { ?>
                        <option>MONDAY</option>
                    <?php }
                    ?>

                    <?php if ($seva == "TUESDAY") { ?>
                        <option selected="selected">TUESDAY</option>
                    <?php } else { ?>
                        <option>TUESDAY</option>
                    <?php }
                    ?>
                    <?php if ($seva == "WEDNESDAY") { ?>
                        <option selected="selected">WEDNESDAY</option>
                    <?php } else { ?>
                        <option>WEDNESDAY</option>
                    <?php }
                    ?>
                    <?php if ($seva == "THURSDAY") { ?>
                        <option selected="selected">THURSDAY</option>
                    <?php } else { ?>
                        <option>THURSDAY</option>
                    <?php }
                    ?>
                    <?php if ($seva == "FRIDAY") { ?>
                        <option selected="selected">FRIDAY</option>
                    <?php } else { ?>
                        <option>FRIDAY</option>
                    <?php }
                    ?>
                    <?php if ($seva == "SATURDAY") { ?>
                        <option selected="selected">SATURDAY</option>
                    <?php } else { ?>
                        <option>SATURDAY</option>
                    <?php }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">9-9:45</h5>
                </label>
                <input type="text" class="form-control " placeholder="Enter the subjectcode" name="sevb" value="<?php echo $sevb ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">9:45-10:30</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="sevc" value="<?php echo $sevc ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">10:30PM-11:00PM</h5>
                </label>
                <input type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="sevd" value="<?php echo $sevd ?>" required readonly>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">11:00PM-11:45PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="seve" value="<?php echo $seve ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">11:45PM-12:30PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="sevf" value="<?php echo $sevf ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">12:30PM-1:30PM</h5>
                </label>
                <input type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="sevg" value="<?php echo $sevg ?>" required readonly>



            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">1:30PM-2:15PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="sevh" value="<?php echo $sevh ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">2:15PM-3:00PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="sevi" value="<?php echo $sevi ?>" required>


            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">3:00PM-3:45PM</h5>
                </label>
                <input type="text" class="form-control " placeholder="Enter the subjectcode" name="sevj" value="<?php echo $sevj ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">3:45PM-4:30</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="sevl" value="<?php echo $sevl ?>" required>

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