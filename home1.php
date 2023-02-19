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
        
        <!-- <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lobster&family=Poppins:wght@300&display=swap" rel="stylesheet"> -->
        <title> final year project</title>
        <style>
          .svg 
		  {
            width: 35px;
            height: 35px;
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
    
<!-- <body class="bg-gradient-to-l 	 via-yellow-50 from-blue-100 backdrop-blur-lg"> -->
<body>
    <div class="navbar shadow-lg shadow-gray-600 rounded-b-[20px] bg-gradient-to-r to-amber-50 via-yellow-50 from-blue-100 backdrop-blur-lg flex flex-col xs:flex-row justify-center xs:gap-4  md:p-4 items-center z-50">
	   <div class="items-center flex">
	   	  <img src="./static/logo.png" class="img aspect-square w-[70px] md:w-[100px] max-w-[100px]" alt="logo" />
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

	<p class="mx-auto text-center text-3xl uppercase font-bold font-serif my-6 py-[3vh] text-gray-800">-- Welcome --</p>
    <div class="cards grid md:grid-cols-2 lg:grid-cols-3 justify-center gap-2  mx-auto max-w-[1000px]">
    	<div class="card min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
    		<img src="./static/group.png" class="svg" alt="studentsicon" />
    		<h1 class="text-black font-bold">Users Present</h1>
    		<a href="#">
    			<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50" alt="ar" /></button>
    		</a>
    	</div>
    
    	<div class="card1 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
    		<img src="./static/user.png" class="svg" alt="studentsicon" />
			
    		<h1 class="text-black font-bold">students</h1>
    		<a href="./studentspage/students.php">
    			<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50 " alt="ar" /></button>
    		</a>
    	</div>
    
    	<div class="card2 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
    		<img src="./static/bar-chart.png" class="svg" alt="studentsicon" />
    		<h1 class="text-black font-bold">Attendance</h1>
    		<a href="./attendancepage/attendance.php">
    			<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50" alt="ar" /></button>
    		</a>
    	</div>
    
    	<div class="card3 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
    		<img src="./static/ranking-factor.png" class="svg" alt="studentsicon" />
    		<h1 class="text-black font-bold">Results</h1>
    		<a href="./resultspage/classes/result.php">
    			<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50" alt="ar" /></button>
    		</a>
    	</div>
    
    	<div class="card4 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
    		<img src="./static/schedule.png" class="svg" alt="studentsicon" />
    		<h1 class="text-black font-bold">Timetables</h1>
    		<a href="./timetablespage/classes/timetables.php">
    			<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50" alt="ar" /></button>
    		</a>
    	</div>
    
    	<div class="card5 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
    		<img src="./static/image-gallery.png" class="svg" alt="studentsicon" />
    		<h1 class="text-black font-bold">Gallery</h1>
    		<a href="./gallerypage/gallery.php">
    			<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50" alt="ar" /></button>
    		</a>
    	</div>
    
    	<div class="card6 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
    		<img src="./static/megaphone-.png" class="svg" alt="studentsicon" />
    		<h1 class="text-black font-bold">Announcements</h1>
    		<a href="./notificationpage/notification.php">
    			<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50" alt="ar" /></button>
    		</a>
    	</div>
    	<div class="card6 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
    		<img src="./static/money.png" class="svg" alt="studentsicon" />
    		<h1 class="text-black font-bold">Fee Payment</h1>
    		<a href="./feepaymentpage/fee.php">
    			<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50" alt="ar" /></button>
    		</a>
    	</div>
    </div>
        
                 
</body> 
</html>
