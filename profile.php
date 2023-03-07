<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
    <style>
        h1 {
            font-family: sans-serif;
            text-align: center;
            font-size: 30px;
            color: #222;
        }

        .profile-pic-div {
            height: 200px;
            width: 200px;
            position: absolute;
            margin-bottom: 30px;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            overflow: hidden;
            border: 1px solid grey;
        }

        #photo {
            height: 100%;
            width: 100%;
        }

        #file {
            display: none;
        }

        #uploadBtn {
            height: 40px;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            color: wheat;
            line-height: 30px;
            font-family: sans-serif;
            font-size: 15px;
            cursor: pointer;
            display: none;
        }
    </style>

</head>

<body>

    <div class="h-[100vh] bg-gray-200 p-8">


        <div class="my-32  justify-center flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">



            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                    <div class="flex flex-col items-center mt-10">

                        <div class="flex items-center space-x-2 mt-2">
                            <div class="profile-pic-div">
                                <img src="image.jpg" id="photo" class="w-40 border-4 border-white rounded-full">
                                <input type="file" id="file">
                                <label for="file" id="uploadBtn">Choose Photo</label>
                            </div>
                            <p class="text-2xl">Amanda Ross</p>
                            <span class="bg-blue-500 rounded-full p-1" title="Verified">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </span>
                        </div>

                    </div><br><br>
                    <h4 class="text-xl text-gray-900 text-center font-bold">Personal Info</h4>
                    <ul class="mt-2 ml-4 text-gray-700 text-center ">
                        <div class="border-b-full ">
                        <li class="flex border-y font-bold py-2">
                            Full name:
                            <!-- <span class="text-gray-700">Amanda S. Ross</span> -->
                            <input type="text"  class="text-gray-900 border-b-3 h-11 text-center border-violet">
                        </li>
                        <li class="flex border-b font-bold py-2">
                            Father Name:
                            <input type="text"  class="text-gray-900 text-center border-black">
                            <!-- <span class="text-gray-700">24 Jul, 1991</span -->
                        </li>
                        <li class="flex font-bold border-b py-2">
                            Mother Name:
                            <input type="text"  class="text-gray-900 text-center border-black">
                            <!-- <span class="text-gray-700">10 Jan 2022 (25 days ago)</span> -->
                        </li>
                        <li class="flex border-b font-bold py-2">
                            Mobile:
                            <input type="text" class="text-gray-900 text-center border-black">
                            <!-- <span class="text-gray-700">(123) 123-1234</span> -->
                        </li>
                        <li class="flex border-b font-bold py-2">
                            Email:
                            <input type="text"  class="text-gray-900 text-center border-black">
                            <!-- <span class="text-gray-700">amandaross@example.com</span> -->
                        </li>
                        <li class="flex border-b font-bold py-2">
                            Location:
                            <input type="text" class="text-gray-900 text-center border-black">
                            <!-- <span class="text-gray-700">New York, US</span> -->
                        </li>
                        </div>
                       
                    </ul>
                </div>

            </div>

        </div>



    </div>
    <script>
        const imgDiv = document.querySelector('.profile-pic-div');
        const img = document.querySelector('#photo');
        const file = document.querySelector('#file');
        const uploadBtn = document.querySelector('#uploadBtn');

        //if user hover on img div 

        imgDiv.addEventListener('mouseenter', function () {
            uploadBtn.style.display = "block";
        });

        //if we hover out from img div

        imgDiv.addEventListener('mouseleave', function () {
            uploadBtn.style.display = "none";
        });

        //lets work for image showing functionality when we choose an image to upload

        //when we choose a foto to upload

        file.addEventListener('change', function () {
            //this refers to file
            const choosedFile = this.files[0];

            if (choosedFile) {

                const reader = new FileReader(); //FileReader is a predefined function of JS

                reader.addEventListener('load', function () {
                    img.setAttribute('src', reader.result);
                });

                reader.readAsDataURL(choosedFile);


            }
        });
    </script>


</body>

</html>