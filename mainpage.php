<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Main Page</title>
        <link rel="icon" href="pimg/weblogo.png">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <style>
            /* Custom scrollbar styles */
            .custom-scrollbar::-webkit-scrollbar {
                width: 8px;
            }

            .custom-scrollbar::-webkit-scrollbar-track {
                background-color: #f1f1f1;
            }

            .custom-scrollbar::-webkit-scrollbar-thumb {
                background-color: #888;
                border-radius: 4px;
            }

            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background-color: #555;
            }

            .custom-scrollbar::-webkit-scrollbar-button {
                background-color: #000;
                width: 1px;
                height: 1px;
            }

            .custom-scrollbar::-webkit-scrollbar-button {
                background-color: #000;
                width: 1px;
                height: 1px;
            }

            .active {
                position: relative;
            }

            .active::before {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;
                width: 50%;
                height: 2px;
                background-color: #000;
            }

            .half-underline {
                position: relative;
                text-decoration: none;
                color: #0c4a6e;
            }

            .half-underline::before {
                content: '';
                position: absolute;
                left: 0;
                bottom: 0;
                width: 50%;
                height: 2px;
                background-color: #000;
                transform: scaleX(0);
                transform-origin: left;
                transition: transform 0.2s;
            }

            .half-underline:hover::before {
                transform: scaleX(1);
            }
        </style>
    </head>
<?php $currentPage = 'home' ?>

<body class="custom-scrollbar overflow-y-scroll">

    <!-- Navigation Bar -->
    <nav class="bg-gradient-to-r from-sky-300 to-sky-100 py-4 px-8 sticky top-0 shadow shadow-blue z-50">
        <div class="flex items-center justify-center">

            <!-- Logo -->
            <div class="flex items-center mr-auto">
                <h2 class="font-bold text-2xl text-white bg-sky-900 border-none p-1">IT</h2>
                <h2 class="font-bold text-2xl text-sky-900 ml-1">Insights</h2>
            </div>

            <!-- Links -->
            <div class="flex space-x-4 hidden md:flex">
                <a href="mainpage.php" class=" <?php if ($currentPage === 'home') echo 'active'; else echo 'half-underline' ?>">Home</a>
                <a href="course.php" class="<?php if ($currentPage === 'course') echo 'active';  else echo 'half-underline'?>">Courses</a>
                <a href="events.php" class="<?php if ($currentPage === 'event') echo 'active';  else echo 'half-underline'?>">Events</a>
                <a href="student.php" class="<?php if ($currentPage === 'student') echo 'active';  else echo 'half-underline'?>">Students</a>
                <a href="contact.php" class="<?php if ($currentPage === 'contact') echo 'active';  else echo 'half-underline'?>">Contact</a>
            </div>

            <!-- Hamburger Menu for Mobile -->
            <button class="md:hidden block" id="toggleMenu">
                <svg class="w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden mt-2" id="mobileMenu">
            <a href="mainpage.php" class="block text-sky-900 hover:bg-sky-900 hover:text-white px-4 py-2 ">Home</a>
            <a href="course.php" class="block text-sky-900 hover:bg-sky-900 hover:text-white px-4 py-2">Courses</a>
            <a href="events.php" class="block text-sky-900 hover:bg-sky-900 hover:text-white px-4 py-2">Events</a>
            <a href="student.php" class="block text-sky-900 hover:bg-sky-900 hover:text-white px-4 py-2">Students</a>
            <a href="contact.php" class="block text-sky-900 hover:bg-sky-900 hover:text-white px-4 py-2">Contact</a>
        </div>

    </nav>


    <!-- Content Section -->
    <div class="container max-w-full bg-gradient-to-r from-sky-300 to-sky-100">

        <!-- First Row -->
        <div class="bg-cover" style="background-image: url('pimg/main.jpg');">
            <div class="h-80 flex flex-col justify-center items-center">
                <h1 id="typed-header" class="text-4xl font-bold mb-6 text-sky-950"></h1>
                <p id="typed-text" class="text-xl text-center text-sky-900"></p>
            </div>
        </div>

        <!-- Vision and Mission Section -->
        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div class="mt-5 md:mt-20 ml-10">
                    <p class="text-4xl font-bold text-gray-800">Vision</p>
                    <p class="text-gray-600 mt-4">
                        To produce useful Human resources for both eligible IT Engineers and
                        IT researches in ICT sectors.
                    </p>

                    <p class="text-4xl font-bold text-gray-800 mt-5">Mission</p>
                    <p class="text-gray-600 mt-4">
                        To produce qualified IT engineers by teaching theories and
                        practical effectively, based on curriculum which is in accordance
                        with continuous development of IT technology.
                    </p>
                    <p class="text-4xl font-bold text-gray-800 mt-5">Quality Objectives</p>
                    <p class="text-gray-600 mt-4">
                        To be the pass rate not less than 82% in according academic year.
                        To reduce under 5% of the drop-out rate of students.
                    </p>
                </div>

                <!-- Right Column -->
                <div class="flex justify-center items-center">
                    <img src="pimg/mainpage.png" alt="Image" class="w-80 h-auto pr-0 mt-10 mr-20">
                </div>
            </div>
        </div>

        <!-- Teacher Row-->
        <div class="flex items-center justify-center bg-gradient-to-r from-sky-300 to-sky-100">
            <h1 class="text-5xl font-bold text-sky-900 mt-20 uppercase underline">Faculty Members</h1>
        </div>

        <!-- Second Row -->
        <div class="container mx-auto py-10">
            <div class="flex flex-col md:flex-row md:space-x-8 items-center">
                <!-- Left Column (Image) -->
                <div class="md:ml-auto md:w-1/3 text-center">
                    <img src="pimg//Teachers/professor.jpg" alt="Image" class="rounded-full md:mx-auto w-96 h-96 border-8 border-sky-900">
                </div>
                <!-- Right Column (Content) -->
                <div class="md:w-1/2 mt-6 md:mt-0">
                    <h1 class="text-3xl font-bold mb-2">Dr. Thidar Khaing</h1>
                    <h2 class="text-xl font-semibold mb-2">Professor & Head</h2>
                    <h2 class="text-xl font-semibold mb-2">Ph.D(IT)</h2>
                </div>
            </div>
        </div>

        <!-- Third Row -->
        <div class="bg-gradient-to-r from-sky-300 to-sky-100">
            <div class="flex items-center justify-center mt-0 p-8">
                <div class="flex space-x-10 mt-8">
                    <!-- Column 1 -->
                    <div class="w-1/3">
                        <div class="relative">
                            <img src="pimg/Teachers/pearl.jpg" alt="Image" class="rounded-full w-80 h-auto">
                            <h2 class="mt-2 text-center text-2xl">Dr. Pearl Ei Phyu</h2>
                            <p class="text-center">Associate Professor<br>Ph.D (IT)</p>
                        </div>
                    </div>
                    <!-- Column 2 -->
                    <div class="w-1/3">
                        <div class="relative">
                            <img src="pimg/Teachers/su.jpg" alt="Image" class="rounded-full w-80 h-auto">
                            <h2 class="mt-2 text-center text-2xl">Dr. Su Su Hlaing</h2>
                            <p class="text-center">Associate Professor<br>Ph.D (IT)</p>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="w-1/3">
                        <div class="relative">
                            <img src="pimg/Teachers/myat.jpg" alt="Image" class="rounded-full w-80 h-auto">
                            <h2 class="mt-2 text-center text-2xl">Dr. Myat Thu Aye</h2>
                            <p class="text-center">Associate Professor<br>Ph.D (IT)</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Fourth Row -->
            <div class="flex items-center justify-center mt-8 p-8">
                <div class="flex space-x-10">
                    <!-- Column 1 -->
                    <div class="w-1/3">
                        <div class="relative">
                            <img src="pimg/Teachers/thida.jpg" alt="Image" class="rounded-full w-80 h-auto">
                            <h2 class="mt-2 text-center text-2xl">Daw May Thida Aung</h2>
                            <p class="text-center">Associate Professor<br>ME(IT)</p>
                        </div>
                    </div>
                    <!-- Column 2 -->
                    <div class="w-1/3">
                        <div class="relative">
                            <img src="pimg/Teachers/aye.jpg" alt="Image" class="rounded-full w-80 h-auto">
                            <h2 class="mt-2 text-center text-2xl">Daw Aye Aye Swe</h2>
                            <p class="text-center">Tutor<br>BE(IT)</p>
                        </div>
                    </div>
                    <!-- Column 3 -->
                    <div class="w-1/3">
                        <div class="relative">
                            <img src="pimg/Teachers/ni.jpg" alt="Image" class="rounded-full w-80 h-auto">
                            <h2 class="mt-2 text-center text-2xl">Daw Ni Ni Thin</h2>
                            <p class="text-center">Tutor<br>BE(IT)</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <!-- Main page's Choose IT -->
        <div class="container mx-auto p-6">
            <div class="flex justify-center items-center mb-8">
                <h1 class="text-6xl text-black p-4 py-9 ">Why choose IT</h1>
            </div>

            <div class="flex flex-col md:flex-row justify-center md:justify-between gap-3">
                <div class="w-full md:w-1/4 p-4 bg-sky-200 hover:shadow-lg hover:shadow-black">
                    <img src="pimg/demands.png" alt="IT Image" class="w-24 mx-auto mb-2 max-w-full">
                    <h1 class="text-center font-bold">High Demand for IT Professionals</h1>
                    <p class="text-justify">The IT industry has a consistent and growing demand for skilled professionals, offering a wide range of job opportunities.</p>
                </div>
                <div class="w-full md:w-1/4 p-4 bg-yellow-200 hover:shadow-lg hover:shadow-black">
                    <img src="pimg/salary.png" alt="IT Image" class="w-24 mx-auto mb-2 max-w-full">
                    <p class="text-center font-bold">Lucrative Career Opportunities</p>
                    <p class="text-justify"> IT careers often come with competitive salaries and benefits due to the specialized skills and expertise required in the field.</p>
                </div>
                <div class="w-full md:w-1/4 p-4 bg-red-200 hover:shadow-lg hover:shadow-black">
                    <img src="pimg/problem.png" alt="IT Image" class="w-24 mx-auto mb-2 max-w-full">
                    <p class="text-center font-bold">Problem-Solving</p>
                    <p class="text-justify"> IT professionals frequently engage in creative problem-solving and critical thinking, tackling complex challenges and finding innovative solutions.</p>
                </div>
                <div class="w-full md:w-1/4 p-4 bg-green-200 hover:shadow-lg hover:shadow-black">
                    <img src="pimg/flex.png" alt="IT Image" class="w-24 mx-auto mb-2 max-w-full">
                    <p class="text-center font-bold">Flexibility and Remote Work</p>
                    <p class="text-justify">Many IT roles offer flexible work arrangements, including remote work options, allowing for a better work-life balance.</p>
                </div>
            </div>
        </div>

        <footer class="bg-gradient-to-r from-sky-300 to-sky-100 ">
            <div class="container mx-auto py-8">
                <div class="flex flex-wrap justify-between ">

                    <!-- Logo -->
                    <div class="w-full md:w-1/3 px-4 mb-4 flex justify-center">
                    <div class="flex items-center">
                        <img src="pimg/itlogo2.png" alt="" class="w-40">
                    </div>
                </div>

                    <!-- Featured Links -->
                    <div class="w-full md:w-1/3 px-4 mb-4 ">
                        <h2 class="text-gray-600 text-lg font-semibold mb-2">Featured Links</h2>
                        <ul class="text-gray-600">
                            <li><a href="mainpage.php" class="mr-4 hover:text-sky-900 hover:underline">Home</a></li>
                            <li><a href="course.php" class="mr-4 hover:text-sky-900 hover:underline">Courses</a></li>
                            <li><a href="events.php" class="mr-4 hover:text-sky-900 hover:underline">Events</a></li>
                            <li><a href="student.php" class="mr-4 hover:text-sky-900 hover:underline">Students</a></li>
                            <li><a href="contact.php" class="hover:text-sky-900 hover:underline">Contact</a></li>
                        </ul>
                    </div>

                    <!-- Information -->
                    <div class="w-full md:w-1/3 px-4 mb-4">
                        <h2 class="text-gray-600 text-lg font-semibold mb-2">Information</h2>
                        <div class="flex items-center text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            <p class="mr-2">&nbsp;&nbsp;Win Zin 17-B (TU Meiktila)</p>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                            </svg>
                            <p class="mr-2">&nbsp;&nbsp;it@tumeiktila.edu.mm</p>
                        </div>
                        <div class="flex items-center text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg>
                            <p>&nbsp;&nbsp;+95 9 1234 56789</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center bg-gradient-to-r from-sky-300 to-sky-200 p-3">
                <p class="text-gray-600">&copy; Copyright 2023.All Rights Reserved. Designed and Developed By Group(II)</p>
            </div>
        </footer>
        <script>
            // JavaScript to toggle mobile menu
            document.getElementById('toggleMenu').addEventListener('click', function() {
                var mobileMenu = document.getElementById('mobileMenu');
                mobileMenu.classList.toggle('hidden');
            });

            // JavaScript for typing
            const typedHeader = new Typed('#typed-header', {
                strings: ["Welcome to IT Insights"],
                typeSpeed: 100,
                startDelay: 500,
                loop: false,
                showCursor: false,
                onComplete: () => {
                    const typedText = new Typed('#typed-text', {
                        strings: ["Wiring Success, Connecting Futures!"],
                        typeSpeed: 50,
                        loop: false,
                        showCursor: false,
                    });
                }
            });
        </script>

</body>

</html>