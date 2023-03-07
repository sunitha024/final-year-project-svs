
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="style.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>


    <title>Document</title>
</head>
<style>
   

.app {
	display: flex;
	min-height: 100vh;
  
    
}

.menu-toggle {
	display: none;
	position: absolute;
	top: 2rem;
	right: 2rem;
	width: 60px;
	height: 60px;
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

.hamburger > span,
.hamburger > span::before,
.hamburger > span::after {
  display: block;
  position: absolute;
  width: 100%;
  height: 4px;
  border-radius: 99px;
  background-color: #FFF;
  transition-duration: .25s;
}

.hamburger > span::before {
  content: '';
  top: -8px;
}
.hamburger > span::after {
  content: '';
  top: 8px;
}
.menu-toggle.is-active .hamburger > span {
  transform: rotate(45deg);
}
.menu-toggle.is-active .hamburger > span::before {
  top: 0;
  transform: rotate(0deg);
}
.menu-toggle.is-active .hamburger > span::after {
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
<body>

<div class="app">
		<div class="menu-toggle">
			<div class="hamburger">
				<span></span>
			</div>
		</div>


		<aside class="sidebar">
            <h1 class="  ml-3 text-xl text-gray-200 font-bold">Sree Vidya School</h1><br>

            <div class="p-2.5 mt-3 flex items-center  hover:bg-gray-600 rounded-md text-white font-bold px-4 duration-300 cursor-pointer  bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
                <input class="text-[15px] ml-2 w-full bg-transparent focus:outline-none " placeholder="Search....."  />
            </div><br>
			
			<nav class="menu">
				<a href="#" class="menu-item is-active p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>&nbsp;&nbsp;Dashboard
                </a>

				<a href="#"  class=" menu-item p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                  </svg>&nbsp;&nbsp;Settings
                </a>
                <hr class="my-4 text-gray-600">

				<a href="#" class=" menu-item p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                  </svg>&nbsp;&nbsp;Darkmode
                </a>

				<a href="#" class=" menu-item p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer text-white text-xl  hover:bg-gray-600">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                  </svg>&nbsp;&nbsp;Logout
                </a>
			</nav>

		</aside>

		<main class="content">
			
		</main>
	</div>

	<script>
		const menu_toggle = document.querySelector('.menu-toggle');
		const sidebar = document.querySelector('.sidebar');

		menu_toggle.addEventListener('click', () => {
			menu_toggle.classList.toggle('is-active');
			sidebar.classList.toggle('is-active');
		});
	</script>


    <!-- component -->
<!-- component -->


<!-- <section class="text-gray-600 body-font bg-gray-50 h-screen ml-32 flex justify-center items-center">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
        <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
          <div>
            <h2 class="text-gray-900 text-lg font-bold">Total Ballance</h2>
            <h3 class="mt-2 text-xl font-bold text-yellow-500 text-left">+ 150.000 ₭</h3>
            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
            <button class="text-sm mt-6 px-4 py-2 bg-yellow-400 text-white rounded-lg  tracking-wider hover:bg-yellow-300 outline-none">Add to cart</button>
          </div>
          <div
            class="bg-gradient-to-tr from-yellow-500 to-yellow-400 w-32 h-32  rounded-full shadow-2xl shadow-yellow-400 border-white  border-dashed border-2  flex justify-center items-center ">
            <div>
              <h1 class="text-white text-2xl">Basic</h1>
            </div>
          </div>
        </div>

      </div>
      <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
        <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
          <div>
            <h2 class="text-gray-900 text-lg font-bold">Total Ballance</h2>
            <h3 class="mt-2 text-xl font-bold text-orange-500 text-left">+ 150.000 ₭</h3>
            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
            <button class="text-sm mt-6 px-4 py-2 bg-orange-400  text-white rounded-lg  tracking-wider hover:bg-orange-500 outline-none">Add to cart</button>
          </div>
          <div
            class="bg-gradient-to-tr from-orange-500 to-orange-400 w-32 h-32  rounded-full shadow-2xl shadow-orange-400 border-white  border-dashed border-2  flex justify-center items-center ">
            <div>
              <h1 class="text-white text-2xl">Basic</h1>
            </div>
          </div>
        </div>

      </div>
      <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
        <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
          <div>
            <h2 class="text-gray-900 text-lg font-bold">Total Ballance</h2>
            <h3 class="mt-2 text-xl font-bold text-red-500 text-left">+ 150.000 ₭</h3>
            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
            <button class="text-sm mt-6 px-4 py-2 bg-red-400  text-white rounded-lg  tracking-wider hover:bg-red-500 outline-none">Add to cart</button>
          </div>
          <div
            class="bg-gradient-to-tr from-red-500 to-red-400 w-32 h-32  rounded-full shadow-2xl shadow-red-400 border-white  border-dashed border-2  flex justify-center items-center ">
            <div>
              <h1 class="text-white text-2xl">Basic</h1>
            </div>
          </div>
        </div>

      </div>

      <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
        <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
          <div>
            <h2 class="text-gray-900 text-lg font-bold">Total Ballance</h2>
            <h3 class="mt-2 text-xl font-bold text-green-500 text-left">+ 150.000 ₭</h3>
            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
            <button class="text-sm mt-6 px-4 py-2 bg-green-400  text-white rounded-lg  tracking-wider hover:bg-green-500 outline-none">Add to cart</button>
          </div>
          <div
            class="bg-gradient-to-tr from-green-500 to-green-500 w-32 h-32  rounded-full shadow-2xl shadow-green-400 border-white  border-dashed border-2  flex justify-center items-center ">
            <div>
              <h1 class="text-white text-2xl">Basic</h1>
            </div>
          </div>
        </div>

      </div>
            <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500">
        <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
          <div>
            <h2 class="text-gray-900 text-lg font-bold">Total Ballance</h2>
            <h3 class="mt-2 text-xl font-bold text-cyan-500 text-left">+ 150.000 ₭</h3>
            <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
            <button class="text-sm mt-6 px-4 py-2 bg-cyan-400  text-white rounded-lg  tracking-wider hover:bg-cyan-500 outline-none">Add to cart</button>
          </div>
          <div
            class="bg-gradient-to-tr from-cyan-500 to-cyan-400 w-32 h-32  rounded-full shadow-2xl shadow-cyan-400 border-white  border-dashed border-2  flex justify-center items-center ">
            <div>
              <h1 class="text-white text-2xl">Basic</h1>
            </div>
          </div>
        </div>

      </div>
      <div class="p-4 sm:w-1/2 lg:w-1/4 w-full hover:scale-105 duration-500 justify-center">
        <div class=" flex items-center  justify-between p-4  rounded-lg bg-white shadow-indigo-50 shadow-md">
          <div>
            <img src="./static/user.png" class="h-10 w-10">
            <h2 class="text-gray-900 text-lg font-bold">users</h2>
            <h3 class="mt-2 text-xl font-bold text-indigo-500 text-left">+ 150.000 ₭</h3> 
             <p class="text-sm font-semibold text-gray-400">Last Transaction</p>
            <button class="text-sm mt-6 px-4 py-2 bg-indigo-400 text-white rounded-lg  tracking-wider hover:bg-indigo-500 outline-none">Add to cart</button>
          </div>
          <div
            class="bg-gradient-to-tr from-indigo-500 to-indigo-400 w-32 h-32  rounded-full shadow-2xl shadow-[#304FFE] border-white  border-dashed border-2  flex justify-center items-center ">
            <div>
              <h1 class="text-white text-2xl">svs</h1>
            </div>
          </div>
        </div>

      </div>
      
    </div>
</section> -->
</body>
</html>