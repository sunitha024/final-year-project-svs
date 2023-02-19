<?php
    include "connect.php";
    
    if(isset($_POST['submit']))
    {
    
          $sixa = $_POST['sixa'];
          $sixb = $_POST['sixb'];
          $sixc = $_POST['sixc'];
          $sixd = $_POST['sixd'];
          $sixe = $_POST['sixe'];
          $sixf = $_POST['sixf'];
          $sixg = $_POST['sixg'];
          $sixh = $_POST['sixh'];
          $sixi = $_POST['sixi'];
          $sixj = $_POST['sixj'];
          $sixk = $_POST['sixk'];
          $sixl = $_POST['sixl'];
          $sixm = $_POST['sixm'];
          $sixn = $_POST['sixn'];
          $sixo = $_POST['sixo'];
          $sixp = $_POST['sixp'];
          $sixq = $_POST['sixq']; 
        
        $query="INSERT INTO sixr (SIXA,SIXB,SIXC,SIXD,SIXE,SIXF,SIXG,SIXH,SIXI,SIXJ,SIXK,SIXL,SIXM,SIXN,SIXO,SIXP,SIXQ) VALUES('$sixa','$sixb','$sixc','$sixd','$sixe','$sixf','$sixg','$sixh','$sixi','$sixj','$sixk','$sixl','$sixm','$sixn','$sixo','$sixp','$sixq')";
        $stmt=oci_parse($con,$query);
        oci_execute($stmt);
    
        if($stmt)
        {
            header("location:sixth.php");
        }
        else
        {
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

    <title> Results details</title>
    <style> 
        a:hover{ text-decoration:none} 
        .form-control
        {
            width:300px;
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
    <h2 class="text-2xl text-center my-2 md:my-28 md:text-4xl  "> POST_MARKS OF A STUDENT</h2><br><br>
        <form method="POST" class="grid md:grid-cols-2 lg:grid-cols-3 justify-center gap-8  mx-auto max-w-[1000px] text-center">
            <div class="form-group">
                <label><h5 class="text-xl">Select Day</h5></label>
                <!-- <input type="text" class="form-control" placeholder="Enter Your JobId" name="tena"  required> -->
                <select type="text" class="form-control" placeholder="Enter the subjectcode" name="sixa" required readonly>
                        <option>TELUGU</option>
                        <option>HINDI</option>
                        <option>ENGLISH</option>
                        <option>MATHEMATICS</option>
                        <option>SCIENCE</option>
                        <option>SOCIAL</option>
                </select>
            </div>
            <div class="form-group  ">
                <label ><h5 class="text-xl text-center">FA-1</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10" size="2" placeholder="E(20M)" name="sixb" required>
                <input type="text" class="form-control text-center h-10" size="2" placeholder="I(30M)" name="sixc" required>
                <input type="text" class="form-control text-center h-10" size="2" placeholder="E+I(50M)" name="sixd" required>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">FA-2</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10" size="2" placeholder="E(20M)" name="sixe" required>
                <input type="text" class="form-control text-center h-10" size="2" placeholder="I(30M)" name="sixf" required>
                <input type="text" class="form-control text-center h-10" size="2" placeholder="E+I(50M)" name="sixg" required>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">SA-1</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10" size="2" placeholder="100M" name="sixh" required>
                
                </div>
            </div>
            <div class="form-group  ">
                <label ><h5 class="text-xl text-center">FA-3</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10" size="2" placeholder="E(20M)" name="sixi" required>
                <input type="text" class="form-control text-center h-10" size="2" placeholder="I(30M)" name="sixj" required>
                <input type="text" class="form-control text-center h-10" size="2" placeholder="E+I(50M)" name="sixk" required>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">FA-4</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10" size="2" placeholder="E(20M)" name="sixl" required>
                <input type="text" class="form-control text-center h-10" size="2" placeholder="I(30M)" name="sixm" required>
                <input type="text" class="form-control text-center h-10" size="2" placeholder="E+I(50M)" name="sixn" required>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">SA-2</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10" size="2" placeholder="100M" name="sixo" required>
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">S_TOTAL</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10" size="2" placeholder="S-TOTAL" name="sixp" required>
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">PERCENTAGE</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control text-center h-10" size="2" placeholder="PERCENTAGE" name="sixq" required>
                
                </div>
            </div>
            
            <button type="submit" name="submit" class="ml-20 bg-cyan-600 h-10 w-24 hover:bg-red-300 text-xl text-white rounded">Submit</button>
           <!-- <div class="ml-20 mt-2 bg-violet-400 text-2xl font-semibold p-2 md:p-3 w-40 md:ml-[25%] rounded-md hover:bg-emerald-600  text-zinc-100">
           <button type="submit" name="submit"  >
                   ADD
           </button> -->
           </div> 
        </form>
    </div>

    
</body>
</html>