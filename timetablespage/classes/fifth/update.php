<?php
include "connect.php";
$fiftha = $_GET['fifthA'];
$query = "select * from fiftht where fiftha ='" . $fiftha . "' ";
$stmt = oci_parse($con, $query);
oci_execute($stmt, OCI_DEFAULT);
if (($row = oci_fetch_array($stmt))) {
    $fiftha = $row['FIFTHA'];
    $fifthb = $row['FIFTHB'];
    $fifthc = $row['FIFTHC'];
    $fifthd = $row['FIFTHD'];
    $fifthe = $row['FIFTHE'];
    $fifthf = $row['FIFTHF'];
    $fifthg = $row['FIFTHG'];
    $fifthh = $row['FIFTHH'];
    $fifthi = $row['FIFTHI'];
    $fifthj = $row['FIFTHJ'];
    $fifthl = $row['FIFTHL'];
}

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title> timetables details</title>
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
                <select type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="fiftha" readonly>
                    <?php if ($fiftha == "MONDAY") { ?>
                        <option selected="selected">MONDAY</option>
                    <?php } else { ?>
                        <option>MONDAY</option>
                    <?php }
                    ?>

                    <?php if ($fiftha == "TUESDAY") { ?>
                        <option selected="selected">TUESDAY</option>
                    <?php } else { ?>
                        <option>TUESDAY</option>
                    <?php }
                    ?>
                    <?php if ($fiftha == "WEDNESDAY") { ?>
                        <option selected="selected">WEDNESDAY</option>
                    <?php } else { ?>
                        <option>WEDNESDAY</option>
                    <?php }
                    ?>
                    <?php if ($fiftha == "THURSDAY") { ?>
                        <option selected="selected">THURSDAY</option>
                    <?php } else { ?>
                        <option>THURSDAY</option>
                    <?php }
                    ?>
                    <?php if ($fiftha == "FRIDAY") { ?>
                        <option selected="selected">FRIDAY</option>
                    <?php } else { ?>
                        <option>FRIDAY</option>
                    <?php }
                    ?>
                    <?php if ($fiftha == "SATURDAY") { ?>
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
                <input type="text" class="form-control " placeholder="Enter the subjectcode" name="fifthb" value="<?php echo $fifthb ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">9:45-10:30</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fifthc" value="<?php echo $fifthc ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">10:30PM-11:00PM</h5>
                </label>
                <input type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="fifthd" value="<?php echo $fifthd ?>" required readonly>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">11:00PM-11:45PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fifthe" value="<?php echo $fifthe ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">11:45PM-12:30PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fifthf" value="<?php echo $fifthf ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">12:30PM-1:30PM</h5>
                </label>
                <input type="text" class="form-control font-bold" placeholder="Enter the subjectcode" name="fifthg" value="<?php echo $fifthg ?>" required readonly>



            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">1:30PM-2:15PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fifthh" value="<?php echo $fifthh ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">2:15PM-3:00PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fifthi" value="<?php echo $fifthi ?>" required>


            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">3:00PM-3:45PM</h5>
                </label>
                <input type="text" class="form-control " placeholder="Enter the subjectcode" name="fifthj" value="<?php echo $fifthj ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">3:45PM-4:30</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fifthl" value="<?php echo $fifthl ?>" required>

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