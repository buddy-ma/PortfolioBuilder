<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buddy - Portfolio Builder</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>

    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        html,
        body {
            font-family: 'Roboto', sans-serif;
        }

        .break-inside {
            -moz-column-break-inside: avoid;
            break-inside: avoid;
        }

        body {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            min-height: 100vh;
            line-height: 1.5;
        }
    </style>
</head>

<body class="bg-white">

    <!-- Example -->
    <div class="flex min-h-screen">
        <div class="flex flex-row w-full">
            <div class='hidden lg:flex flex-col justify-between lg:p-8 xl:p-12 lg:max-w-xl xl:max-w-2xl'>
                <div class="flex items-center justify-start space-x-3">
                    <img class="rounded-full w-16 h-16" src="{{ asset('img/buddyy.png') }}" alt="">
                    <p class="font-medium font-mono text-2xl mr-50">Buddy</p>
                </div>
                <ul>
                    <li class="py-3">
                        <div class="flex items-center">
                            <div class="icon p-3.5 mr-3">
                                <lord-icon src="https://cdn.lordicon.com/rjzlnunf.json" trigger="loop"
                                    colors="primary:#0ea5e9,secondary:#104891" style="width:60px;height:60px">
                                </lord-icon>
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="font-semibold font-mono text-2xl">Select a template</p>
                                <p class="text-gray-400 text-md">Choose a template that you like from our professional
                                    & well-designed gallery</p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3">
                        <div class="flex items-center">
                            <div class="icon p-3.5 mr-3">
                                <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="loop"
                                    colors="primary:#0ea5e9,secondary:#104891" style="width:60px;height:60px">
                                </lord-icon>
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="font-semibold font-mono text-2xl">Complete Personal Profile</p>
                                <p class="text-gray-400 text-md">Complete your basic data & information about yourself.</p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3">
                        <div class="flex items-center">
                            <div class="icon p-3.5 mr-3">
                                <lord-icon src="https://cdn.lordicon.com/tvyxmjyo.json" trigger="loop"
                                    colors="primary:#0ea5e9,secondary:#104891" style="width:60px;height:60px">
                                </lord-icon>
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="font-semibold font-mono text-2xl">Customize the portfolio</p>
                                <p class="text-gray-400 text-md">Pick more options to insert into your portfolio and add more
                                    designs into it</p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3">
                        <div class="flex items-center">
                            <div class="icon p-3.5 mr-3">
                                <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop"
                                    colors="primary:#0ea5e9,secondary:#104891" style="width:60px;height:60px">
                                </lord-icon>
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="font-semibold font-mono text-2xl">Finish</p>
                                <p class="text-gray-400 text-md">Save your data and share your portfolio to the world !</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="/login">
                    <button class="inline-block flex-none px-4 py-3 border-2 rounded-lg font-medium bg-sky-500 text-white">
                    Get Started !</button>
                </a>
                <p class="font-medium">© 2022 Buddy</p>
            </div>

            <div class="flex flex-1 flex-col items-center bg-gradient-to-r from-sky-500 to-indigo-500 justify-center px-10 relative">
                <div class="flex flex-1 flex-col justify-center space-y-5 w-2xl">

                </div>
            </div>
        </div>
    </div>
    <!-- Example -->
</body>

</html>
