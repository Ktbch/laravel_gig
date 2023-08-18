<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="relative container mx-auto p-6">
        <div class="flex items-center justify-between">
            <div class="pt-2">
                <h3>Tailwind</h5>
            </div>
            <div class="hidden  space-x-6 md:flex">
                <a href="#" class="hover:text-darkGrayishBlue" class="hover:text-darkGrayisBlue">Pricing</a>
                <a href="#" class="hover:text-darkGrayishBlue">Product</a>
                <a href="#" class="hover:text-darkGrayishBlue">About</a>
                <a href="#" class="hover:text-darkGrayishBlue">Carrers</a>
                <a href="#" class="hover:text-darkGrayishBlue">community</a>
            </div>
            <a href="" class="hidden p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline md:block">GetStarted</a>
            <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
        </div>
        <div class="md:hidden">
            <div id="menu" class="absolute flex-col items-center self-end hidden py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md">
                <a href="">Pricing</a>
                <a href="">Product</a>
                <a href="">About us</a>
                <a href="">Carrers</a>
                <a href="">Community</a>
            </div>
        </div>
    </nav>
    
    <section id="hero">
        <div class="container flex-col-reverse md:flex-row items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0">
            <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                    Bring everyone together to build better product
                </h1>
                <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                    Manage makes it simple for software teams to plan 
                    day-to-day tasks
                    while keeping the larger team goals in view

                </p>
                <div class="flex justify-center md:justify-start">
                    <a href="" class=" p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline">GetStarted</a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="" alt=""/>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row">
            <div class="flex flex-col space-y-12 md:w-1/2">
                <h2 class="max-w-md text-4xl font-bold text-center md:text-left">
                    What's diffrent about Manage?
                </h2>
                <p class="max-w-sm text-center text-darkGrayishBlue">
                    Manage provides all the functionality your team needs, 
                    without the
                    complexity. Our software is tailor-made for mordern digital product
                    teams.
                </p>
            </div>
            <div class="flex flex-col space-y-8 md:w-1/2">
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <div class="rounded-l-full bg-brightRedSuperLight md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py2 text-white rounded-full md:py-1 bg-brightRed">
                               01 
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                Track company progress
                            </h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                            Track company progress
                        </h3>
                        <p class="text-darkGrayishBlue">
                            See how your day-to-day tasks fir into the wider
                            vision. Go from
                            tracking progress at the milestone level all the way 
                            down to the
                            smallest of details. Never lose sight of the bigger picture
                            again.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <div class="rounded-l-full bg-brightRedSuperLight md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py2 text-white rounded-full md:py-1 bg-brightRed">
                               02 
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                Adavance Track result
                            </h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                            Adavance Track result
                        </h3>
                        <p class="text-darkGrayishBlue">
                            See how your day-to-day tasks fir into the wider
                            vision. Go from
                            tracking progress at the milestone level all the way 
                            down to the
                            smallest of details. Never lose sight of the bigger picture
                            again.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <div class="rounded-l-full bg-brightRedSuperLight md:bg-transparent">
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py2 text-white rounded-full md:py-1 bg-brightRed">
                               03 
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                Everything you need in one place
                            </h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                            Everything you need on place
                        </h3>
                        <p class="text-darkGrayishBlue">
                            See how your day-to-day tasks fir into the wider
                            vision. Go from
                            tracking progress at the milestone level all the way 
                            down to the
                            smallest of details. Never lose sight of the bigger picture
                            again.
                        </p>
                    </div>
                </div>
                </div>
                

            </div>
        </div>
    </section>
    <section id="testimonials">
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
            <h2 class="text-4xl font-bold text-center">
                What's Different About Manage?
            </h2>
            <div class="flex flex-col space-y-6 mt-24 md:flex-row md:space-x-6 md:space-y-0">
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3">
                    <img src="" alt="" class="w-16 mt-14">
                    <h5 class="text-lg font-bold">Kayode</h5>
                    <p class="text-sm text-darkGrayishBlue">
                          See how your day-to-day tasks fir into the wider
                            vision. Go from
                            tracking progress at the milestone level all the way 
                            down to the
                            smallest of details. Never lose sight of the bigger picture
                            again.
                    </p>
                </div>
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3">
                    <img src="" alt="" class="w-16 mt-14">
                    <h5 class="text-lg font-bold">Bolu</h5>
                    <p class="text-sm text-darkGrayishBlue">
                          See how your day-to-day tasks fir into the wider
                            vision. Go from
                            tracking progress at the milestone level all the way 
                            down to the
                            smallest of details. Never lose sight of the bigger picture
                            again.
                    </p>
                </div>
                <div class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3">
                    <img src="" alt="" class="w-16 mt-14">
                    <h5 class="text-lg font-bold">Bro deji</h5>
                    <p class="text-sm text-darkGrayishBlue">
                          See how your day-to-day tasks fir into the wider
                            vision. Go from
                            tracking progress at the milestone level all the way 
                            down to the
                            smallest of details. Never lose sight of the bigger picture
                            again.
                    </p>
                </div>
            </div>
            <div class="my-16">
                <a href="" class=" p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline">GetStarted</a>
            </div>
        </div>
    </section>
    <section id="cta" class="bg-brightRed">
        <div class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-8">
            <h2 class="text-5xl font-bold leading-tight text-center text-white md:text-4xl md:max-w-xl md:text-left">
                Simplify how your teams works today
            </h2>
            <div>
                <a href="" class=" p-3 px-6 pt-2 text-brightRed bg-white rounded-full shadow-2xl baseline hover:bg-gray-900">GetStarted</a>
            </div>
        </div>
    </section>
    <footer class="bg-veryDarkBlue">
        <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
            <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
                <div class="mx-auto my-6 text-center text-white md:hidden">
                    Copyright &copy; 2023, All Rights Reserved
                </div>
                <div>
                    <img src="" alt="Manage" class="h-8 text-white">
                </div>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-white">
                         Facebook   
                    </a>
                </div>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-white">
                         YouTube   
                    </a>
                </div>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-white">
                         Twiter   
                    </a>
                </div>
                <div class="flex justify-center space-x-4">
                    <a href="#" class="text-white">
                         Instagram   
                    </a>
                </div>
            </div>
            <div class="flex justify-around space-x-32">
                <div class="flex flex-col space-y-3 text-white">
                    <a href="" class="hover:text-brightRed">Home</a>
                    <a href="" class="hover:text-brightRed">Pricing</a>
                    <a href="" class="hover:text-brightRed">Products</a>
                    <a href="" class="hover:text-brightRed">About</a>
                </div>
                <div class= "flex flex-col space-y-3 text-white">
                    <a href="" class="hover:text-brightRed">carrers</a>
                    <a href="" class="hover:text-brightRed">Community</a>
                    <a href="" class="hover:text-brightRed">Privacy Policy</a>
                </div>
            </div>
            <div class="flex flex-col justify-between">
                <form action="">
                    <div class="flex space-x-3">
                        <input type="text" class="flex-1 px-4 rounded-full focus:outline-none" placeholder="Updates in your inbox"/>
                        <button class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline:none">Go</button>
                    </div>
                </form>
                <div class="hidden text-white md:block">
                    Copyright &copy; 2023, All right reserved
                </div>
            </div>
        </div>
    </footer>
</body>
</html>