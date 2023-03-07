<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    
	<link rel="stylesheet" type="text/css" href="input.css">

	<script src="https://kit.fontawesome.com/3221a471b1.js" crossorigin="anonymous"></script>
	<link href="style.css" rel="stylesheet">



	<title> final year project</title>
	<style>
	   .svg {
			width: 35px;
			height: 35px;
		}

		.menu-toggle {
			display: none;
			position: absolute;
			width: 50px;
			height: 50px;
			border-radius: 99px;
			background-color: #2e3047;
			cursor: pointer;
		}

		.hamburger {
			position: relative;
			top: calc(50% - 2px);
			left: 50%;
			transform: translate(-50%, -50%);
			width: 32px;
		}

		.hamburger>span,
		.hamburger>span::before,
		.hamburger>span::after {
			display: block;
			position: absolute;
			width: 100%;
			height: 4px;
			border-radius: 99px;
			background-color: #FFF;
			transition-duration: .25s;
		}

		.hamburger>span::before {
			content: '';
			top: -8px;
		}

		.hamburger>span::after {
			content: '';
			top: 8px;
		}

		.menu-toggle.is-active .hamburger>span {
			transform: rotate(45deg);
		}

		.menu-toggle.is-active .hamburger>span::before {
			top: 0;
			transform: rotate(0deg);
		}

		.menu-toggle.is-active .hamburger>span::after {
			top: 0;
			transform: rotate(90deg);
		}

		.sidebar {
			flex: 1 1 0;
			max-width: 300px;
			padding: 2rem 1rem;
			background-color: #2e3047;
		}

		.sidebar h3 {
			color: #707793;
			font-size: 0.75rem;
			text-transform: uppercase;
			margin-bottom: 0.5em;
		}

		.sidebar .menu {
			margin: 0 -1rem;
		}

		.sidebar .menu .menu-item {
			display: block;
			padding: 1em;
			color: #FFF;
			text-decoration: none;
			transition: 0.2s linear;
		}

		.sidebar .menu .menu-item:hover,
		.sidebar .menu .menu-item.is-active {
			color: #3bba9c;
			border-right: 5px solid #3bba9c;
		}

		.sidebar .menu .menu-item:hover {
			border-right: 5px solid #3bba9c;
		}

		.content {
			flex: 1 1 0;
			padding: 2rem;
		}

		.content h1 {
			color: #3C3F58;
			font-size: 2.5rem;
			margin-bottom: 1rem;
		}

		.content p {
			color: #707793;
		}

		@media (max-width: 1024px) {
			.sidebar {
				max-width: 100px;
			}
		}

		@media (max-width: 768px) {
			.menu-toggle {
				display: block;
			}

			.content {
				padding-top: 8rem;
			}

			.sidebar {
				position: fixed;
				top: 0;
				left: -300px;
				height: 100vh;
				width: 100%;
				max-width: 300px;
				transition: 0.2s linear;
			}

			.sidebar.is-active {
				left: 0;
			}
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
	<div
		class="navbar shadow-lg shadow-gray-600 rounded-b-[20px] bg-gradient-to-r to-amber-50 via-yellow-50 from-blue-100 backdrop-blur-lg flex flex-col xs:flex-row justify-center xs:gap-4  md:p-4 items-center z-50">
		<div class="items-center flex">
			<img src="./static/logo.png" class="img aspect-square w-[70px] md:w-[100px] max-w-[100px]" alt="logo" />
		</div>
		<div class="flex justify-center flex-col items-center py-2">
			<h1 class=" text-2xl font-bold md:text-5xl text-gray-800 font-['Open_Sans']">SREE VIDYA SCHOOL</h1>

			<h2 class="h2 text-red-600 text-center font-['Open_Sans'] md:text-left md:text-2xl font-bold text-xs">
				Nursery to 10th Class(Recognised by Govt. of A.P)
			</h2>

			<h3
				class="h3 text-[#3d3266] tracking-wider font-['Open_Sans'] text-center md:text-left font-bold md:text-xl text-xs">
				Kommadhi Marikavalasa Padalapeta
			</h3>
		</div>
	</div>
	<!-- <p id="demo"></p>
	<script>
    const d = new Date();
    document.getElementById("demo").innerHTML = d;
    </script> -->


	<!-- //mobile-menu// -->

	<div class=" only-for-mobile-sidebar-menu lg:w-[23%]  lg:hidden">
		<div class="menu-toggle 3xs:mt-2 md:mt-4 3xs:right-2 2xs:right-6 xs:right-6 md:right-10 z-30">
			<div class="hamburger ">
				<span></span>
			</div>
		</div>
		<aside class="sidebar">
			<h1 class=" ml-3 text-xl text-gray-200 font-bold">Sree Vidya School</h1><br>

			<div
				class="p-2.5 mt-3 flex items-center  hover:bg-gray-600 rounded-md text-white font-bold px-4 duration-300 cursor-pointer  bg-gray-700">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
					stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round"
						d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
				</svg>
				<input class="text-[15px] ml-2 w-full bg-transparent focus:outline-none " placeholder="Search....." />
			</div><br>

			<nav class="menu">
				<a href="#"
					class="menu-item is-active p-2.5  flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
					</svg>&nbsp;&nbsp;Dashboard
				</a>

				<a href="profile.php"
					class="menu-item p-2.5  flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
					</svg>&nbsp;&nbsp;Profile
				</a>

				<a href="#"
					class=" menu-item p-2.5  flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
					</svg>&nbsp;&nbsp;Settings
				</a>
				<hr class="my-4 text-gray-600">

				<a href="#" onclick="darkMode()"
					class=" menu-item p-2.5  flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
					</svg>&nbsp;&nbsp;Darkmode
				</a>

				<a href="#"
					class=" menu-item p-2.5  flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
					</svg>&nbsp;&nbsp;Logout
				</a>
			</nav>

		</aside>



	</div>

	
    <!-- <script>
      function darkMode() {
        var element = document.body;
        var content = document.getElementById("DarkModetext");
        element.className = "dark-mode";
        content.innerText = "Dark Mode is ON";
      }
      function lightMode() {
        var element = document.body;
        var content = document.getElementById("DarkModetext");
        element.className = "light-mode";
        content.innerText = "Dark Mode is OFF";
      }
    </script> -->

	<!-- // end of only-for-mobile-sidebar-menu -->

	<div class="flex felx-row gap-24">
		<!-- large screen menu or sidebar -->


		<aside class="sidebar h-screen top-0 max-md:hidden">
			<h1 class=" ml-3 text-xl text-gray-200 font-bold">Sree Vidya School</h1><br>

			<div class="p-2.5 mt-3 flex items-center hover:bg-gray-600 rounded-md text-white font-bold px-4 duration-300 cursor-pointer  bg-gray-700">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
					stroke="currentColor" class="w-6 h-6">
					<path stroke-linecap="round" stroke-linejoin="round"
						d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
				</svg>
				<input class="text-[15px] ml-2 w-full bg-transparent focus:outline-none " placeholder="Search....." />
			</div><br>

			<nav class="menu">
				<a href="#"
					class="menu-item is-active p-2.5  flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
					</svg>&nbsp;&nbsp;Dashboard
				</a>

				<a href="profile.php"
					class="menu-item p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
					</svg>&nbsp;&nbsp;Profile
				</a>

				<a href="#"
					class=" menu-item p-2.5  flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
					</svg>&nbsp;&nbsp;Settings
				</a>
				<hr class="my-4 text-gray-600">

				<a href="#"
					class=" menu-item p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
					</svg>&nbsp;&nbsp;Darkmode
				</a>

				<a href="#"
					class=" menu-item p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6 inline">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
					</svg>&nbsp;&nbsp;Logout
				</a>
			</nav>

		</aside>




		<!-- // end of large screen sidebar -->
		<script>
			const menu_toggle = document.querySelector('.menu-toggle');
			const sidebar = document.querySelector('.sidebar');

			menu_toggle.addEventListener('click', () => {
				menu_toggle.classList.toggle('is-active');
				sidebar.classList.toggle('is-active');
			});
		</script>







		<div>


			<div class="w-[100%] 3xs:ml-2 2xs:ml-6 xs:ml-10 md:ml-14 lg:ml-32">
				<!-- <img src="./static/menus.png" class=" sidebar h-10 w-10 ml-5 md:ml-10 mt-1"></a> -->

				<div class="lg:text-2xl flex ">
					<p class="mx-auto 3xs:ml-[15%] md:ml-[20%] 3xs:text-lg md:text-2xl uppercase font-bold font-serif 3xs:py-4 3xs:my-4 md:my-6 py-[3vh] text-gray-800">
						Welcome 
					</p><br>
					<!-- <div class="lg:visible">	
					<p id="demo" class="mt-10  text-end  text-violet-900 font-bold "></p>
				 
	               <script>
                     const d = new Date();
                     document.getElementById("demo").innerHTML = d;
                   </script>
				   </div> -->

		        </div>
				<div class="cards 3xs:ml-2.5 2xs:ml-10 xs:ml-16 md:ml-20 grid md:grid-cols-2 xl:grid-cols-3 justify-center  3xs:gap-0 md:gap-4  mx-auto max-w-[1000px]">

					<!-- class="card lg:min-w-[600px] md:min-w-[550px] md:ml-24 lg:ml-8 3xs:min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50"> -->
					<div class="card1 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
						<img src="./static/group.png" class="svg ml-[45%]" alt="studentsicon" />
						<div class="text-center">
						<h1 class="text-pink-900 text-2xl font-bold">Total No of Students:</h1>
						<h1 class="text-green-900 text-xl font-bold">No of Students Absent:</h1></div>
						<!-- <a href="#">
							<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50"
									alt="ar" /></button>
						</a> -->
		            </div>


					<div class="card1 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
						<img src="./static/user.png" class="svg" alt="studentsicon" />

						<h1 class="text-black font-bold">students</h1>
						<a href="./studentspage/classes/students.php">
							<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50 "
									alt="ar" /></button>
						</a>
					</div>

					<div class="card2 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
						<img src="./static/bar-chart.png" class="svg" alt="studentsicon" />
						<h1 class="text-black font-bold">Attendance</h1>
						<a href="./attendancepage/attendance.php">
							<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50"
									alt="ar" /></button>
						</a>
					</div>

					<div class="card3 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
						<img src="./static/ranking-factor.png" class="svg" alt="studentsicon" />
						<h1 class="text-black font-bold">Results</h1>
						<a href="./resultspage/classes/result.php">
							<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50"
									alt="ar" /></button>
						</a>
					</div>

					<div class="card4 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
						<img src="./static/schedule.png" class="svg" alt="studentsicon" />
						<h1 class="text-black font-bold">Timetables</h1>
						<a href="./timetablespage/classes/timetables.php">
							<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50"
									alt="ar" /></button>
						</a>
					</div>

					<div class="card5 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
						<img src="./static/image-gallery.png" class="svg" alt="studentsicon" />
						<h1 class="text-black font-bold">Gallery</h1>
						<a href="./gallerypage/gallery.php">
							<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50"
									alt="ar" /></button>
						</a>
					</div>

					<div class="card6 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
						<img src="./static/megaphone-.png" class="svg" alt="studentsicon" />
						<h1 class="text-black font-bold">Announcements</h1>
						<a href="./notificationpage/notification.php">
							<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50"
									alt="ar" /></button>
						</a>
					</div>
					<div class="card6 min-w-[300px] mx-auto bg-slate-200 shadow-md shadow-black/50">
						<img src="./static/money.png" class="svg" alt="studentsicon" />
						<h1 class="text-black font-bold">Fee Payment</h1>
						<a href="./feepaymentpage/fee.php">
							<button class="but">Explore<img src="./static/right.png" class="svg text-gray-50"
									alt="ar" /></button>
						</a>
					</div>
				</div>


			</div>
		</div>
	</div>
</body>

</html>