<?php
include "connect.php";

if (isset($_POST['submit'])) {

    $nursurya = $_POST['nursurya'];
    $nursuryb = (int)$_POST['nursuryb'];
    $nursuryc = $_POST['nursuryc'];
    $nursuryd = $_POST['nursuryd'];
    $nursurye = $_POST['nursurye'];
    $nursuryf = $_POST['nursuryf'];
    $nursuryg = $_POST['nursuryg'];
    $nursuryh = $_POST['nursuryh'];


    $query = "INSERT INTO nursurysd (NURSURYA,NURSURYB,NURSURYC,NURSURYD,NURSURYE,NURSURYF,NURSURYG,NURSURYH) VALUES('$nursurya',$nursuryb,'$nursuryc','$nursuryd','$nursurye','$nursuryf','$nursuryg','$nursuryh')";
    $stmt = oci_parse($con, $query);
    oci_execute($stmt);

    if ($stmt) {
        header("location:nursury.php");
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
    <div class="container my-5 ">
        <h2 class="text-2xl text-center my-2 md:my-28 md:text-4xl  "> Add Studentdetails</h2><br><br>
        <form method="POST"
            class="grid md:grid-cols-2 lg:grid-cols-3 justify-center gap-2  mx-auto max-w-[1000px] text-center">
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Serial NO</h5>
                </label>
                <!-- <input type="text" class="form-control" placeholder="Enter Your JobId" name="tena"  required> -->
                <input type="text" class="form-control font-bold text-black" placeholder="Enter S.no" name="nursurya">
            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Id</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter ID" pattern="[^a-zA-Z]+" name="nursuryb">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enther the student Name</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the Student Name" pattern="[^0-9]+"
                    name="nursuryc">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Online Child ID</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the Online Child Id" pattern="[^a-zA-Z]+"
                    name="nursuryd">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Date of Birth</h5>
                </label>
                <input type="date" class="form-control font-bold text-black" placeholder="Enter the Date of Birth" name="nursurye">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Father Name </h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the Father Name" pattern="[^0-9]+"
                    name="nursuryf">

            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Mobile Number</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" Placeholder="Enter the Mobile Number" pattern="[^a-zA-Z]+"
                    min="0" max="10" name="nursuryg">



            </div>
            <div class="form-group">
                <label>
                    <h5 class="text-xl">Enter the Area</h5>
                </label>
                <input type="text" class="form-control font-bold text-black" placeholder="Enter the Area" name="nursuryh">

            </div>
            <br>


            <!-- <button type="submit" name="submit" class="btn btn-primary">Submit</button> -->
            <div class="ml-20 mt-2 bg-violet-400 text-2xl font-semibold p-2 md:p-3 w-40 md:ml-[25%] rounded-md hover:bg-emerald-600  text-zinc-100">
                <button type="submit" name="submit">
                    ADD
                </button>
            </div>
        </form>
    </div>


</body>

</html>