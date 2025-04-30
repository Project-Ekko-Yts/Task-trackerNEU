<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=" font-sans text-gray-900 antialiased">
        <div class="bg-[#2e2e3f] min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ">
            <div>
                <a href="/">
                   
                    <div class="flex items-center gap-2 text-[#6b46ff] font-bold text-xl">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="#805ad5"
                          stroke-width="2"
                          width="24"
                          height="24"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M9 12l2 2 4-4"
                          />
                        </svg>
                        <span>Plan It, Do It</span>
                      </div>

                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-[#3e3e4f]  sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
