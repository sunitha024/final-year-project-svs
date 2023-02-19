<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >  -->
        <link rel="stylesheet" type="text/css" href="input.css">
        <script src="https://kit.fontawesome.com/3221a471b1.js" crossorigin="anonymous"></script>
        <link href="input.css" rel="stylesheet">
        <title> final year project</title>
        <style>
          input[type="file"] 
		  {
              display: none;
            }
            .file-upload {
              display: inline-block;
              padding: 2px 15px;
              border: 1px solid #ccc;
              border-radius: 4px;
              font-size: 16px;
              cursor: pointer;
              display: flex;
          }
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
<div class="navbar shadow-lg shadow-gray-600 rounded-b-[20px] bg-gradient-to-r to-amber-50 via-yellow-50 from-blue-100 backdrop-blur-lg flex flex-col xs:flex-row justify-center xs:gap-4  md:p-4 items-center z-50">
	   <div class="items-center flex">
	   	  <img src="logo.png" class="img aspect-square w-[70px] md:w-[100px] max-w-[100px]" alt="logo" />
	   </div>
	   <div class="flex justify-center flex-col items-center py-2">
	   	   <h1 class=" text-2xl font-bold md:text-5xl text-gray-800 font-['Open_Sans']">SREE VIDYA SCHOOL</h1>
       
	   	   <h2 class="h2 text-red-600 text-center font-['Open_Sans'] md:text-left md:text-2xl font-bold text-xs">
	   	   	Nursery to 10th Class(Recognised by Govt. of A.P)
	   	   </h2>
       
	   	   <h3 class="h3 text-[#3d3266] tracking-wider font-['Open_Sans'] text-center md:text-left font-bold md:text-xl text-xs">
	   	   	Kommadhi Marikavalasa Padalapeta
	   	   </h3>
	   </div>
    </div>
	
	<div>
		<label for="file-upload" class=" file-upload  h-8 w-40 font-semibold mt-6 ml-36 2xs:ml-52 md:ml-[65%] md:h-12 md:w-60 justify-items-end bg-yellow-600 md:text-2xl rounded-md hover:bg-emerald-600  text-zinc-100 absolute ">
			<img src="upload.png" class="h-6 w-6 md:h-9 md:w-9 md:mt-1 ml-1 md:ml-3" alt="up" />
			<h1 class="md:mt-1">&nbsp;Upload File</h1>
			<input id="file-upload" type="file" />
		</label>
	</div>
	<h1 class="ml-2 text-xl mt-20 md:mt-[9%] lg:mt-[5%] font-bold  md:ml-[15%] md:font-bold">
		10th class Students
	</h1>

	
</body>
</html>