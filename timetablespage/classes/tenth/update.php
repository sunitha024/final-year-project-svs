<?php
include "connect.php";
$tena = $_GET['tenA'];
$query = "select * from tentht where tena ='" . $tena . "' ";
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
    $tenl = $row['TENL'];
}

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title> User Master</title>
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
                <select type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="tena" readonly>
                    <?php if ($tena == "MONDAY") { ?>
                        <option selected="selected">MONDAY</option>
                    <?php } else { ?>
                        <option>MONDAY</option>
                    <?php }
                    ?>

                    <?php if ($tena == "TUESDAY") { ?>
                        <option selected="selected">TUESDAY</option>
                    <?php } else { ?>
                        <option>TUESDAY</option>
                    <?php }
                    ?>
                    <?php if ($tena == "WEDNESDAY") { ?>
                        <option selected="selected">WEDNESDAY</option>
                    <?php } else { ?>
                        <option>WEDNESDAY</option>
                    <?php }
                    ?>
                    <?php if ($tena == "THURSDAY") { ?>
                        <option selected="selected">THURSDAY</option>
                    <?php } else { ?>
                        <option>THURSDAY</option>
                    <?php }
                    ?>
                    <?php if ($tena == "FRIDAY") { ?>
                        <option selected="selected">FRIDAY</option>
                    <?php } else { ?>
                        <option>FRIDAY</option>
                    <?php }
                    ?>
                    <?php if ($tena == "SATURDAY") { ?>
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
                <input type="text" class="form-control " placeholder="Enter the subjectcode" name="tenb" value="<?php echo $tenb ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">9:45-10:30</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="tenc" value="<?php echo $tenc ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">10:30PM-11:00PM</h5>
                </label>
                <input type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="tend" value="<?php echo $tend ?>" required readonly>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">11:00PM-11:45PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="tene" value="<?php echo $tene ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">11:45PM-12:30PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="tenf" value="<?php echo $tenf ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">12:30PM-1:30PM</h5>
                </label>
                <input type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="teng" value="<?php echo $teng ?>" required readonly>



            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">1:30PM-2:15PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="tenh" value="<?php echo $tenh ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">2:15PM-3:00PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="teni" value="<?php echo $teni ?>" required>


            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">3:00PM-3:45PM</h5>
                </label>
                <input type="text" class="form-control " placeholder="Enter the subjectcode" name="tenj" value="<?php echo $tenj ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">3:45PM-4:30</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="tenl" value="<?php echo $tenl ?>" required>

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