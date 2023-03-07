<?php
include "connect.php";
$ukga = $_GET['ukgA'];
$query = "select * from ukgsd where ukga ='" . $ukga . "' ";
$stmt = oci_parse($con, $query);
oci_execute($stmt, OCI_DEFAULT);
if (($row = oci_fetch_array($stmt))) {
    $ukga = $row['UKGA'];
    $ukgb = $row['UKGB'];
    $ukgc = $row['UKGC'];
    $ukgd = $row['UKGD'];
    $ukge = $row['UKGE'];
    $ukgf = $row['UKGF'];
    $ukgg = $row['UKGG'];
    $ukgh = $row['UKGH'];

}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale-1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title> student details</title>
    <style>
        body 
       {
         background-color: #1e293b;
         color: white;
        
       }
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
        <h2 class="text-2xl text-center my-2 md:my-28 md:text-4xl "> Update Student details</h2><br>

        <form method="POST" action="updatet.php"
            class="grid md:grid-cols-2 lg:grid-cols-3 justify-center gap-2  mx-auto max-w-[1000px] text-center">
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the S.no</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the S.no" name="ukga"
                    value="<?php echo $ukga ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Id</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the Id" name="ukgb"
                    value="<?php echo $ukgb ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Student Name</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the Student Name" name="ukgc"
                    value="<?php echo $ukgc ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Online Child Id</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the Online Child Id" name="ukgd"
                    value="<?php echo $ukgd ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Date of Birth</h5>
                </label>
                <input type="date" class="form-control font-bold text-black" placeholder="Enter the Date of Birth" name="ukge"
                    value="<?php echo $ukge ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Father Name</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the subjectcode" name="ukgf"
                    value="<?php echo $ukgf ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Mobile No</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the subjectcode" name="ukgg"
                    value="<?php echo $ukgg ?>">



            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Area</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the subjectcode" name="ukgh"
                    value="<?php echo $ukgh ?>">

            </div>
            <br>

            <!-- <button type="submit" name="submit" class="btn btn-primary">Submit</button> -->
            <div
                class="ml-20 mt-2 bg-violet-500 text-2xl font-semibold p-2 md:p-4 w-40 md:ml-[25%] rounded-md hover:bg-emerald-600  text-zinc-100">
                <button type="submit" name="update">
                    update
                </button>
            </div>
        </form>
    </div>





</body>

</html>