<?php
include "connect.php";
$fourtha = $_GET['fourthA'];
$query = "select * from fourtht where fourtha ='" . $fourtha . "' ";
$stmt = oci_parse($con, $query);
oci_execute($stmt, OCI_DEFAULT);
if (($row = oci_fetch_array($stmt))) {
    $fourtha = $row['FOURTHA'];
    $fourthb = $row['FOURTHB'];
    $fourthc = $row['FOURTHC'];
    $fourthd = $row['FOURTHD'];
    $fourthe = $row['FOURTHE'];
    $fourthf = $row['FOURTHF'];
    $fourthg = $row['FOURTHG'];
    $fourthh = $row['FOURTHH'];
    $fourthi = $row['FOURTHI'];
    $fourthj = $row['FOURTHJ'];
    $fourthl = $row['FOURTHL'];
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
                <input type="text" class="form-control font-bold"  name="fourtha" value="<?php echo $fourtha ?>" readonly>
                   
                
            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">9-9:45</h5>
                </label>
                <input type="text" class="form-control " placeholder="Enter the subjectcode" name="fourthb" value="<?php echo $fourthb ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">9:45-10:30</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fourthc" value="<?php echo $fourthc ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">10:30PM-11:00PM</h5>
                </label>
                <input type="text" class="form-control font-bold"  name="fourthd" value="<?php echo $fourthd ?>" required readonly>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">11:00PM-11:45PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fourthe" value="<?php echo $fourthe ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">11:45PM-12:30PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fourthf" value="<?php echo $fourthf ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">12:30PM-1:30PM</h5>
                </label>
                <input type="text" class="form-control font-bold"  name="fourthg" value="<?php echo $fourthg ?>" required readonly>



            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">1:30PM-2:15PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fourthh" value="<?php echo $fourthh ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">2:15PM-3:00PM</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fourthi" value="<?php echo $fourthi ?>" required>


            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">3:00PM-3:45PM</h5>
                </label>
                <input type="text" class="form-control " placeholder="Enter the subjectcode" name="fourthj" value="<?php echo $fourthj ?>" required>

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">3:45PM-4:30</h5>
                </label>
                <input type="text" class="form-control" placeholder="Enter the subjectcode" name="fourthl" value="<?php echo $fourthl ?>" required>

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