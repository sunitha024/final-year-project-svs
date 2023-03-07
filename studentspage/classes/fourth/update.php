<?php
include "connect.php";
$foura = $_GET['fourA'];
$query = "select * from fourthsd where foura ='" . $foura . "' ";
$stmt = oci_parse($con, $query);
oci_execute($stmt, OCI_DEFAULT);
if (($row = oci_fetch_array($stmt))) {
    $foura = $row['FOURA'];
    $fourb = $row['FOURB'];
    $fourc = $row['FOURC'];
    $fourd = $row['FOURD'];
    $foure = $row['FOURE'];
    $fourf = $row['FOURF'];
    $fourg = $row['FOURG'];
    $fourh = $row['FOURH'];

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
                <input type="text" class="form-control text-black font-bold" placeholder="Enter the S.no" name="foura"
                    value="<?php echo $foura ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Id</h5>
                </label>
                <input type="text" class="form-control text-black font-bold" placeholder="Enter the Id" name="fourb"
                    value="<?php echo $fourb ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Student Name</h5>
                </label>
                <input type="text" class="form-control text-black font-bold" placeholder="Enter the Student Name" name="fourc"
                    value="<?php echo $fourc ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Online Child Id</h5>
                </label>
                <input type="text" class="form-control text-black font-bold" placeholder="Enter the Online Child Id" name="fourd"
                    value="<?php echo $fourd ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Date of Birth</h5>
                </label>
                <input type="date" class="form-control text-black font-bold" placeholder="Enter the Date of Birth" name="foure"
                    value="<?php echo $foure ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Father Name</h5>
                </label>
                <input type="text" class="form-control text-black font-bold" placeholder="Enter the subjectcode" name="fourf"
                    value="<?php echo $fourf ?>">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Mobile No</h5>
                </label>
                <input type="text" class="form-control text-black font-bold" placeholder="Enter the subjectcode" name="fourg"
                    value="<?php echo $fourg ?>">



            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Area</h5>
                </label>
                <input type="text" class="form-control text-black font-bold" placeholder="Enter the subjectcode" name="fourh"
                    value="<?php echo $fourh ?>">

            </div>
            <br>

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