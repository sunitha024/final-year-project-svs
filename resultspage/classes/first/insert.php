<?php
    include "connect.php";
    
    if(isset($_POST['submit']))
    {
    
          $firsta = $_POST['firsta'];
          $firstb = $_POST['firstb'];
          $firstc = $_POST['firstc'];
          $firstd = $_POST['firstd'];
          $firste = $_POST['firste'];
          $firstf = $_POST['firstf'];
          $firstg = $_POST['firstg'];
          $firsth = $_POST['firsth'];
          $firsti = $_POST['firsti'];
          $firstj = $_POST['firstj'];
          $firstk = $_POST['firstk'];
          $firstl = $_POST['firstl'];
          $firstm = $_POST['firstm'];
          $firstn = $_POST['firstn'];
          $firsto = $_POST['firsto'];
          $firstp = $_POST['firstp'];
          $firstq = $_POST['firstq']; 
          $firsts = $_POST['firsts'];
          $firstz = $_POST['firstz']; 
        
        $query="INSERT INTO firstr (FIRSTA,FIRSTB,FIRSTC,FIRSTD,FIRSTE,FIRSTF,FIRSTG,FIRSTH,FIRSTI,FIRSTJ,FIRSTK,FIRSTL,FIRSTM,FIRSTN,FIRSTO,FIRSTP,FIRSTQ,FIRSTS,FIRSTZ) VALUES('$firsta','$firstb','$firstc','$firstd','$firste','$firstf','$firstg','$firsth','$firsti','$firstj','$firstk','$firstl','$firstm','$firstn','$firsto','$firstp','$firstq','$firsts','$firstz')";
        $stmt=oci_parse($con,$query);
        oci_execute($stmt);
    
        if($stmt)
        {
            header("location:first.php");
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
    body 
       {
         background-color: #1e293b;
         color: white;
        
       }
    
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
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">S.no</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="Enter ID" name="firsta" required>
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">Id</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="Enter ID" name="firstb" required>
                
                </div>
            </div>
            <div class="form-group">
                <label><h5 class="text-xl">Select Subject</h5></label>
                <!-- <input type="text" class="form-control" placeholder="Enter Your JobId" name="tena"  required> -->
                <select type="text" class="form-control font-bold text-black" placeholder="Enter the subjectcode" name="firstc" required >
                        <option>TELUGU</option>
                        <option>HINDI</option>
                        <option>ENGLISH</option>
                        <option>MATHEMATICS</option>
                        <option>BIOLOGY</option>
                        <option>PHYSICS</option>
                        <option>SCIENCE</option>
                        <option>SOCIAL</option>
                </select>
            </div>
            <div class="form-group  ">
                <label ><h5 class="text-xl text-center">FA-1</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E(20M)" name="firstd" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="I(30M)" name="firste" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E+I(50M)" name="firstf" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">FA-2</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E(20M)" name="firstg" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="I(30M)" name="firsth" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E+I(50M)" name="firsti" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">SA-1</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="100M" name="firstj" >
                
                </div>
            </div>
            <div class="form-group  ">
                <label ><h5 class="text-xl text-center">FA-3</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control  font-bold text-black text-center h-10" size="2" placeholder="E(20M)" name="firstk">
                <input type="text" class="form-control  font-bold text-black text-center h-10" size="2" placeholder="I(30M)" name="firstl" >
                <input type="text" class="form-control  font-bold text-black text-center h-10" size="2" placeholder="E+I(50M)" name="firstm" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">FA-4</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E(20M)" name="firstn" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="I(30M)" name="firsto" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E+I(50M)" name="firstp" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">SA-2</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="100M" name="firstq" >
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">S_TOTAL</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="S-TOTAL" name="firsts" readonly >
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">PERCENTAGE</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="PERCENTAGE" name="firstz" readonly >
                
                </div>
            </div><br><br>
            
            
            <button type="submit" name="submit" class="ml-20 bg-cyan-600 h-14 text-black w-28 text-center font-bold  hover:bg-violet-600 text-xl hover:text-white rounded">Submit</button>
           
           </div> 
        </form>
    </div>

    
</body>
</html>