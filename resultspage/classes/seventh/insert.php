<?php
    include "connect.php";
    
    if(isset($_POST['submit']))
    {
    
          $sevena = $_POST['sevena'];
          $sevenb = $_POST['sevenb'];
          $sevenc = $_POST['sevenc'];
          $sevend = $_POST['sevend'];
          $sevene = $_POST['sevene'];
          $sevenf = $_POST['sevenf'];
          $seveng = $_POST['seveng'];
          $sevenh = $_POST['sevenh'];
          $seveni = $_POST['seveni'];
          $sevenj = $_POST['sevenj'];
          $sevenk = $_POST['sevenk'];
          $sevenl = $_POST['sevenl'];
          $sevenm = $_POST['sevenm'];
          $sevenn = $_POST['sevenn'];
          $seveno = $_POST['seveno'];
          $sevenp = $_POST['sevenp'];
          $sevenq = $_POST['sevenq']; 
        
        $query="INSERT INTO sevenr (SEVENA,SEVENB,SEVENC,SEVEND,SEVENE,SEVENF,SEVENG,SEVENH,SEVENI,SEVENJ,SEVENK,SEVENL,SEVENM,SEVENN,SEVENO,SEVENP,SEVENQ,SEVENS,SEVENZ) VALUES('$sevena','$sevenb','$sevenc','$sevend','$sevene','$sevenf','$seveng','$sevenh','$seveni','$sevenj','$sevenk','$sevenl','$sevenm','$sevenn','$seveno','$sevenp','$sevenq','$sevens','$sevenqz')";
        $stmt=oci_parse($con,$query);
        oci_execute($stmt);
    
        if($stmt)
        {
            header("location:seventh.php");
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
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="Enter ID" name="sevena" required>
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">Id</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="Enter ID" name="sevenb" required>
                
                </div>
            </div>
            <div class="form-group">
                <label><h5 class="text-xl">Select Subject</h5></label>
                <!-- <input type="text" class="form-control" placeholder="Enter Your JobId" name="tena"  required> -->
                <select type="text" class="form-control font-bold text-black" placeholder="Enter the subjectcode" name="sevenc" required >
                        <option>TELUGU</option>
                        <option>HINDI</option>
                        <option>ENGLISH</option>
                        <option>MATHEMATICS</option>
                        <option>BIOLOGY</option>
                        <option>PHYSICS</option>
                        <option>SOCIAL</option>
                </select>
            </div>
            <div class="form-group  ">
                <label ><h5 class="text-xl text-center">FA-1</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E(20M)" name="sevend" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="I(30M)" name="sevene" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E+I(50M)" name="sevenf" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">FA-2</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E(20M)" name="seveng" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="I(30M)" name="sevenh" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E+I(50M)" name="seveni" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">SA-1</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="100M" name="sevenj" >
                
                </div>
            </div>
            <div class="form-group  ">
                <label ><h5 class="text-xl text-center">FA-3</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control  font-bold text-black text-center h-10" size="2" placeholder="E(20M)" name="sevenk">
                <input type="text" class="form-control  font-bold text-black text-center h-10" size="2" placeholder="I(30M)" name="sevenl" >
                <input type="text" class="form-control  font-bold text-black text-center h-10" size="2" placeholder="E+I(50M)" name="sevenm" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">FA-4</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E(20M)" name="sevenn" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="I(30M)" name="seveno" >
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="E+I(50M)" name="sevenp" readonly>
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">SA-2</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="100M" name="sevenq" >
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">S_TOTAL</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="S-TOTAL" name="sevens" readonly >
                
                </div>
            </div>
            <div class="form-group ">
                <label ><h5 class="text-xl text-center">PERCENTAGE</h5></label>
                <div class="flex flex-cols-3">
                <input type="text" class="form-control font-bold text-black text-center h-10" size="2" placeholder="PERCENTAGE" name="sevenz" readonly >
                
                </div>
            </div><br><br>
            
            
            <button type="submit" name="submit" class="ml-20 bg-cyan-600 h-14 text-black w-28 text-center font-bold  hover:bg-violet-600 text-xl hover:text-white rounded">Submit</button>
           
           </div> 
        </form>
    </div>

    
</body>
</html>