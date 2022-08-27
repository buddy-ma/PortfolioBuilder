<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buddy - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

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

        <!-- Container -->
        <div class="flex flex-row w-full">

            <!-- Sidebar -->
            <div class='hidden lg:flex flex-col justify-between bg-blue-300 lg:p-8 xl:p-12 lg:max-w-xl xl:max-w-2xl'>
                <div class="flex items-center justify-start space-x-3">
                    <img class="rounded-full w-16 h-16" src="{{ asset('img/buddyy.png') }}" alt="">
                    <p class="font-medium font-mono text-2xl">Buddy</p>
                </div>
                <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_rst3usxp.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay hover></lottie-player>
                <div class='space-y-5'>
                    <h2 class="text-2xl leading-snug font-semibold">
                        Welcome Home,
                    </h2>
                    <h1 class="lg:text-3xl xl:text-5xl xl:leading-tight font-extrabold">Easy way to create your portfolio today !</h1>
                    <button
                        class="inline-block flex-none px-4 py-3 border-2 rounded-lg font-medium border-black bg-black text-white">
                        Create account here</button>
                </div>
                <p class="font-medium">© 2022 Buddy</p>
            </div>

            <!-- Login -->
            <div class="flex flex-1 flex-col items-center justify-center px-10 relative">
              <x-auth-validation-errors class="mb-4" :errors="$errors" />

              <x-auth-session-status class="mb-4" :status="session('status')" />

                {{-- Only Mobile --}}
                <div class="flex lg:hidden justify-between items-center w-full py-4">
                    <div class="flex items-center justify-start space-x-3">
                        <span class="bg-black rounded-full w-6 h-6"></span>
                        <a href="#" class="font-medium text-lg">Brand</a>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span>Not a member? </span>
                        <a href="#" class="underline font-medium text-[#070eff]">
                            Sign Up now
                        </a>
                    </div>
                </div>
                <!-- Login box -->
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="flex flex-1 flex-col  justify-center space-y-5 w-2xl">
                      <div class="flex flex-col space-y-2 text-center">
                          <h2 class="text-3xl md:text-4xl font-bold">Sign Up</h2>
                          <p class="text-md md:text-xl">Feel free to create an account & start your portfolio!</p>
                      </div>
                      <div class="flex flex-col w-2xl space-y-5">
                        <input type="text" placeholder="Name" name="name" required autofocus
                          class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
                        <input type="email" placeholder="Email" name="email" required
                          class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
                        <input type="password" placeholder="Password" name="password" required
                          class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
                        <input type="password" placeholder="Password Confirmation" name="password_confirmation" required
                          class="flex px-3 py-2 md:px-4 md:py-3 border-2 border-black rounded-lg font-medium placeholder:font-normal" />
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <button class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg font-medium border-black bg-black text-white">
                            Register
                        </button>
                        
                      </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Example -->
</body>

</html>
