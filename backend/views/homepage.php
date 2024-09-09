<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Court Booking</title>
    <link rel="stylesheet" href="../../../src/css/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css" rel="stylesheet">
</head>
<body>

    <!-- navbar -->
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Pasir Pekan Badminton</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="/src/index.php/user/login"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button></a>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
                <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
            <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>



    <!-- content  -->
    <div class="w-screen">
        <div class="relative mx-auto mt-20 mb-20 max-w-screen-lg overflow-hidden rounded-t-xl bg-emerald-400/60 py-32 text-center shadow-xl shadow-gray-300">
            <h1 class="mt-2 px-8 text-3xl font-bold text-white md:text-5xl">Book Court Now</h1>
            <p class="mt-6 text-lg text-white">Select your court and time slot</p>
            <img class="absolute top-0 left-0 -z-10 h-full w-full object-cover" src="https://images.unsplash.com/photo-1504672281656-e4981d70414b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" />
        </div>

        <div class="mx-auto grid max-w-screen-lg px-6 pb-20">
            <div class="">
                <p class="font-serif text-xl font-bold text-blue-900">Select a Court</p>
                <div class="mt-4 grid max-w-3xl gap-x-4 gap-y-3 sm:grid-cols-2 md:grid-cols-4">
                    <div class="relative">
                        <input class="peer hidden" id="court_A" type="radio" name="court" checked />
                        <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-emerald-400"></span>
                        <label class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-emerald-600 peer-checked:text-white" for="court_A">
                            <span class="mt-2 font-medium">Court A</span>
                        </label>
                    </div>
                    <div class="relative">
                        <input class="peer hidden" id="court_B" type="radio" name="court" />
                        <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-emerald-400"></span>
                        <label class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-emerald-600 peer-checked:text-white" for="court_B">
                            <span class="mt-2 font-medium">Court B</span>
                        </label>
                    </div>
                    <div class="relative">
                        <input class="peer hidden" id="court_C" type="radio" name="court" />
                        <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-emerald-400"></span>
                        <label class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-emerald-600 peer-checked:text-white" for="court_C">
                            <span class="mt-2 font-medium">Court C</span>
                        </label>
                    </div>
                    <div class="relative">
                        <input class="peer hidden" id="court_D" type="radio" name="court" />
                        <span class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-emerald-400"></span>
                        <label class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-emerald-600 peer-checked:text-white" for="court_D">
                            <span class="mt-2 font-medium">Court D</span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="">
                <p class="mt-8 font-serif text-xl font-bold text-blue-900">Select a Time Slot</p>
                <div class="mt-4 grid grid-cols-4 gap-2 lg:max-w-xl">
                    <!-- Available time slots, dynamically displayed based on availability -->
                    <button class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95">08:00 - 10:00</button>
                    <button class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95">10:00 - 12:00</button>
                    <button class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95">12:00 - 14:00</button>
                    <button class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95">14:00 - 16:00</button>
                    <button class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95">16:00 - 18:00</button>
                    <button class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95">18:00 - 20:00</button>
                </div>
            </div>

            <button class="mt-8 w-56 rounded-full border-8 border-emerald-500 bg-emerald-600 px-10 py-4 text-lg font-bold text-white transition hover:translate-y-1">Book Now</button>
        </div>
    </div>
</body>
</html>
