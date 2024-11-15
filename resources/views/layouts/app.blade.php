<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'House of Perfume') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-between">
                        <h1 class="text-3xl font-bold tracking-tight text-gray-900">House of Perfume</h1>
                        
                        <div class="flex items-center w-96 border border-black-300 rounded-lg">
                            <input type="text"
                                placeholder="What are you looking for?"
                                class="w-full h-10 px-4 text-sm rounded-l-lg focus:outline-none focus:ring-0 focus:border-black-300 bg-white"/>
                            <button class="h-10 px-3 border border-black-300 bg-white text-gray-600 rounded-r-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </button>
                        </div>
                    </div>
                </header>
            @endisset

            <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
                <div class="mx-auto grid max-w-screen-xl px-4 pb-8 md:grid-cols-12 lg:gap-12 lg:pb-16 xl:gap-0">
                  <div class="content-center justify-self-start md:col-span-7 md:text-start">
                    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight dark:text-white md:max-w-2xl md:text-5xl xl:text-6xl">Fragrance<br />as Unique<br />as You Are</h1>
                    <p class="mb-4 max-w-2xl text-gray-500 dark:text-gray-400 md:mb-12 md:text-lg mb-3 lg:mb-5 lg:text-xl">Explore Your Perfumes!!</p>
                    <a href="javascript:void(0);" id="getStartedBtn" class="inline-block rounded-lg bg-primary-700 px-6 py-3.5 text-center font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Get Started</a>
                  </div>
                  <div class="hidden md:col-span-5 md:mt-0 md:flex">
                    <img class="dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list.svg" alt="shopping illustration" />
                    <img class="hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/girl-shopping-list-dark.svg" alt="shopping illustration" />
                  </div>
                </div>
                <div class="mx-auto grid max-w-screen-xl grid-cols-2 gap-8 text-gray-500 dark:text-gray-400 sm:grid-cols-3 sm:gap-12 lg:grid-cols-6 px-4">
                  <a href="#" class="flex items-center md:justify-center">
                    <svg version="1.0" class="h-20 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" width="332.000000pt" height="150.000000pt"  viewBox="0 0 332 150" preserveAspectRatio="xMidYMid meet">
                      <g transform="translate(0.000000,150.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="black" stroke-width="2">
                      <path d="M276 1038 c-95 -12 -152 -54 -202 -148 -23 -43 -26 -185 -5 -244 18 -51 76 -115 126 -137 53 -24 147 -24 201 0 43 19 114 77 114 92 0 5 -20 -6 -44 -25 -25 -18 -68 -39 -96 -46 -96 -23 -167 24 -210 137 -18 47 -21 72 -17 134 9 137 83 229 185 229 53 0 99 -33 140 -100 19 -30 31 -44 27 -30 -4 14 -8  32 -10 40 -23 93 -26 101 -40 90 -8 -7 -18 -9 -23 -6 -23 14 -93 21 -146 14z" fill="currentColor"/>
                      <path d="M553 1036 c-38 -13 -56 -29 -28 -24 19 3 20 -3 23 -239 l2 -243 -31 -12 c-29 -12 -27 -13 40 -13 39 0 71 3 71 8 0 4 -6 7 -14 7 -11 0 -15 19 -18 81 -3 76 -1 83 21 100 13 11 31 19 40 19 33 0 41 -22 41 -108 0 -75 -2 -84 -20 -89 -38 -10 -19 -19 41 -18 54 0 58 1 40 14 -19 12 -21 24 -21 107 0 85 -2 94 -22 108 -31 22 -52 20 -87 -10 -17 -14 -31 -22 -31 -17 -1 4 0 81 0 170 0 89 -3 163 -7 166 -4 2 -22 -1 -40 -7z" fill="currentColor"/>
                      <path d="M2152 1001 c69 -14 68 -11 68 -240 0 -222 -3 -236 -50 -244 -14 -2 47 -5 135 -6 88 0 176 4 196 9 104 29 153 106 152 234 -1 97 -21 153 -69 195 -56 49 -116 61 -303 60 -99 -1 -151 -4 -129 -8z m339 -31 c59 -30 74 -74 74 -210 0 -132 -17 -181 -72 -213 -41 -23 -166 -35 -188 -17 -13 10 -15 47 -15  229 0 160 3 220 13 230 17 18 140 5 188 -19z" fill="currentColor"/>
                      <path d="M1047 863 c-15 -14 -7 -43 12 -43 23 0 34 23 18 39 -13 13 -21 14 -30 4z" fill="currentColor"/>
                      <path d="M1526 854 c-8 -21 1 -34 24 -34 22 0 33 23 17 39 -16 16 -34 14 -41 -5z" fill="currentColor"/>
                      <path d="M2710 855 c-9 -11 -10 -19 -3 -26 17 -17 48 -6 48 16 0 25 -28 31 -45 10z" fill="currentColor"/>
                      <path d="M1383 800 c-13 -11 -23 -29 -23 -40 0 -11 -9 -20 -22 -23 l-23 -4 23 -2 c21 -1 22 -5 22 -88 0 -110 13 -139 59 -136 18 0 38 6 44 12 7 7 1 10 -19 8 l-29 -2 -3 103 -3 102 37 0 c21 0 34 3 30 7 -4 4 -19 7 -34 8 -24 0 -28 5 -32 38 l-5 38 -22 -21z" fill="currentColor"/>
                      <path d="M843 729 c-45 -19 -57 -31 -23 -22 19 5 20 0 20 -91 0 -89 -1 -96  -20 -96 -11 0 -20 -3 -20 -7 0 -5 31 -8 70 -9 38 0 67 3 64 8 -3 4 -14 8 -25  8 -17 0 -19 7 -19 68 0 84 17 113 63 109 26 -2 33 2 35 21 5 31 -31 30 -64 -3 -14 -14 -27 -25 -29 -25 -2 0 -5 13 -7 29 l-3 28 -42 -18z" fill="currentColor"/>
                      <path d="M1040 732 c-25 -11 -30 -17 -17 -19 15 -4 17 -17 17 -94 0 -86 -1 -90 -25 -99 -14 -5 -25 -11 -25 -12 0 -2 29 -3 65 -3 64 0 84 8 45 18 -17 4 -20 15 -22 114 l-3 110 -35 -15z" fill="currentColor"/>
                      <path d="M1180 730 c-38 -38 -22 -86 40 -121 42 -24 53 -40 44 -64 -20 -50 -91 -34 -111 25 l-12 35 0 -43 c-1 -37 2 -44 27 -53 15 -6 44 -8 65 -6 83 11 104 76 40 124 -73 56 -85 71 -73 93 7 13 21 20 41 20 24 0 33 -6 44 -32 l14 -33 1 38 0 37 -50 0 c-37 0 -55 -5 -70 -20z" fill="currentColor"/>
                      <path d="M1525 729 c-31 -14 -35 -18 -17 -18 22 -1 23 -3 20 -93 -3 -84 -5 -93 -23 -96 -48 -9 -30 -18 35 -18 69 1 89 9 50 19 -17 4 -20 15 -22 114 l-3 110 -40 -18z" fill="currentColor"/>
                      <path d="M1672 730 c-28 -26 -29 -60 -3 -60 14 0 21 8 23 26 3 31 28 50 52 41 11 -4 16 -19 16 -47 0 -39 -2 -41 -60 -70 -65 -33 -82 -54 -69 -87 12 -31 50 -38 94 -17 35 16 38 16 47 1 10 -19 45 -22 68 -7 12 8 11 10 -7 10 -22 0 -23 3 -23 95 0 82 -3 98 -20 115 -27 27 -89 27 -118 0z m88 -138 c0 -41 -14 -62 -41 -62 -46 0 -47 60 -1 85 39 21 42 19 42 -23z" fill="currentColor"/>
                      <path d="M1986 725 c-44 -30 -46 -30 -39 -5 6 24 -19 27 -57 5 -19 -11 -21-14 -7 -15 15 0 17 -11 17 -95 0 -78 -3 -95 -15 -95 -8 0 -15 -3 -15 -7 0 -5 28 -8 63 -9 50 -1 58 1 39 9 -21 10 -23 15 -20 91 3 79 4 80 36 99 51 30 62 13 62 -94 0 -72 -3 -89 -15 -89 -8 0 -15 -3 -15 -7 0 -5 24 -8 54 -8 30 0 52 3 49 8 -2 4 -11 7 -19 7 -11 0 -14 19 -14 99 0 67 -4 102 -12 109 -30 23 -55 22 -92 -3z" fill="currentColor"/>
                      <path d="M2710 732 c-26 -12 -30 -17 -17 -20 16 -3 17 -14 15 -95 -3 -87 -4 -92 -25 -95 -47 -7 -21 -17 42 -17 36 0 65 3 65 8 0 4 -6 7 -14 7 -20 0 -27 41 -25 137 1 46 0 85 -2 87 -2 2 -20 -4 -39 -12z" fill="currentColor"/>
                      <path d="M2890 743 c-30 -11 -60 -48 -70 -84 -27 -99 82 -188 174 -144 91 44 101 176 16 220 -28 15 -90 19 -120 8z m79 -19 c50 -35 67 -132 30 -178 -22 -27 -48 -33 -80 -16 -49 27 -66 136 -28 184 24 30 45 33 78 10z" fill="currentColor"/>
                      <path d="M3125 724 c-29 -13 -39 -21 -22 -17 l27 5 0 -96 c0 -89 -1 -96 -20 -96 -11 0 -20 -3 -20 -7 0 -5 33 -8 73 -8 59 -1 67 1 45 9 -27 10 -28 12 -28 81 0 82 15 106 65 102 24 -2 30 2 30 18 0 30 -33 30 -65 0 l-29 -27 -3 30 -3 29 -50 -23z" fill="currentColor"/>
                      </g>
                      </svg>
                  </a>
                  <a href="#" class="flex items-center md:justify-center">
                    <svg version="1.0" class="h-20 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" width="332.000000pt" height="150.000000pt" viewBox="0 0 332.000000 150.000000" preserveAspectRatio="xMidYMid meet">
                      <g transform="translate(0.000000,150.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                      <path d="M710 1473 c-1 -5 -1 -87 -2 -183 l-1 -175 181 -3 180 -2 36 33 c43 41 48 88 15 131 -21 27 -21 28 -3 61 17 32 17 36 1 70 -31 66 -60 75 -244 75 -90 0 -163 -3 -163 -7z m319 -88 c15 -15 14 -18 -8 -36 -19 -16 -39 -19 -115 -19 -93 0 -116 8 -116 40 0 30 19 35 121 33 79 -2 106 -6 118 -18z m9 -137 c18 -18 14 -46 -7 -58 -11 -5 -67 -10 -125 -10 -104 0 -106 0 -112 25 -13 51 -4 55 119 55 74 0 117 -4 125 -12z" fill="currentColor"/>
                      <path d="M1244 1467 c-2 -7 -3 -89 -2 -182 l3 -170 176 -3 177 -2 5 27 c3 15 3 31 0 35 -2 5 -60 8 -127 8 -94 0 -126 3 -135 14 -8 9 -12 55 -11 133 1 65 1 126 1 136 -1 13 -10 17 -41 17 -24 0 -43 -5 -46 -13z" fill="currentColor"/>
                      <path d="M1690 1295 l0 -185 196 0 195 0 -3 33 -3 32 -144 5 c-133 5 -145 7 -151 25 -16 43 4 54 103 57 l92 3 3 32 3 32 -97 3 c-88 3 -97 5 -104 24 -15 41 0 46 136 45 71 0 135 4 143 8 7 5 11 21 9 37 l-3 29 -187 3 -188 2 0 -185z" fill="currentColor"/>
                      <path d="M2180 1345 c0 -187 17 -214 156 -245 61 -13 153 1 203 31 53 32 60 52 61 194 1 72 1 136 1 143 -1 9 -14 12 -43 10 l-43 -3 -5 -132 c-4 -117 -7 -134 -25 -147 -29 -22 -101 -30 -144 -17 -65 19 -70 32 -73 171 l-3 125 -42 3 -43 3 0 -136z" fill="currentColor"/>
                      <path d="M1473 863 c-9 -3 -13 -31 -13 -89 l0 -84 63 0 c53 0 67 4 84 23 64 70 18 158 -82 156 -22 0 -46 -3 -52 -6z m95 -39 c49 -14 36 -87 -18 -99 -40 -9 -57 7 -55 49 3 55 17 65 73 50z" fill="currentColor"/>
                      <path d="M1702 857 c-7 -8 -11 -44 -9 -88 l2 -74 78 -3 c71 -3 78 -1 75 15 -3 14 -12 17 -46 15 -45 -3 -86 13 -77 29 4 5 24 9 46 9 33 0 40 3 37 18 -2 11 -14 18 -33 20 -72 7 -70 23 3 32 33 3 47 10 47 20 0 21 -107 27 -123 7z" fill="currentColor"/>
                      <path d="M494 457 c-144 -54 -192 -211 -101 -330 31 -41 103 -77 152 -77 44 0 114 32 149 69 30 31 27 52 -8 70 -20 11 -26 9 -55 -18 -42 -39 -88 -48 -134 -26 -55 26 -74 65 -69 142 1 12 18 38 37 58 31 30 42 35 84 35 43 0 53 -4 84 -36 l35 -36 26 18 c14 11 26 24 26 30 0 21 -73 83 -118 98 -53 18 -66 19 -108 3z" fill="currentColor"/>
                      <path d="M804 447 c-2 -7 -3 -96 -2 -197 l3 -185 40 0 40 0 -3 76 c-3 52 0 79 8 84 16 10 172 11 188 1 8 -5 12 -35 12 -87 l0 -79 29 0 c17 0 32 4 36 10 8 13 8 366 0 380 -3 5 -19 10 -36 10 l-29 0 0 -65 c0 -44 -4 -67 -12 -70 -7 -2 -50 -6 -96 -8 -97 -4 -105 1 -102 70 2 26 2 54 1 61 -1 16 -70 16 -77 -1z" fill="currentColor"/>
                      <path d="M1403 453 c-7 -2 -13 -9 -13 -14 0 -5 -8 -28 -19 -52 -37 -82 -59 -133 -86 -192 -50 -111 -54 -119 -49 -127 3 -4 22 -8 43 -8 34 0 40 4 57 40 l19 40 102 0 101 0 19 -37 c18 -34 25 -38 61 -41 48 -4 51 3 23 62 -11 23 -28 61 -39 86 -11 25 -29 65 -40 90 -11 25 -32 71 -46 103 l-25 57 -48 -1 c-26 0 -54 -3 -60 -6z m73 -110 c4 -10 15 -37 25 -60 10 -24 19 -47 19 -53 0 -12 -117 -13 -124 -1 -3 5 5 29 19 53 14 23 25 51 25 61 0 9 7 17 15 17 9 0 18 -8 21 -17z" fill="currentColor"/>
                      <path d="M1755 448 c-3 -8 -4 -97 -3 -198 l3 -185 35 0 35 0 3 138 c1 81 7 137 12 137 6 0 25 -22 43 -49 141 -213 170 -244 212 -227 13 5 15 33 13 198 l-3 193 -35 0 -35 0 -3 -108 c-1 -60 -7 -107 -12 -105 -5 2 -41 50 -82 108 l-73 105 -53 3 c-37 2 -54 -1 -57 -10z" fill="currentColor"/>
                      <path d="M2250 260 l0 -200 150 0 150 0 6 25 c13 51 4 55 -116 55 l-110 0 0 40 0 39 88 3 87 3 0 35 0 35 -87 3 -88 3 0 39 0 40 101 0 100 0 -3 38 -3 37 -137 3 -138 3 0 -201z" fill="currentColor"/>
                      <path d="M2664 447 c-2 -7 -3 -96 -2 -197 l3 -185 148 -3 147 -3 0 40 0 40 -106 3 -107 3 1 143 c0 79 -2 150 -5 158 -7 18 -72 19 -79 1z" fill="currentColor"/>
                      </g>
                      </svg>
                  </a>
                  <a href="#" class="flex items-center md:justify-center">
                    <svg version="1.0" class="h-20 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg" width="332.000000pt" height="150.000000pt" viewBox="0 0 332.000000 150.000000" preserveAspectRatio="xMidYMid meet">
                      <g transform="translate(0.000000,150.000000) scale(0.100000,-0.100000)"
                      fill="#000000" stroke="none">
                      <path d="M1745 1459 c-4 -6 -6 -281 -4 -610 l4 -599 48 0 47 0 0 143 c0 127 2 146 18 160 10 10 21 17 24 17 2 0 94 -72 204 -160 l199 -160 58 0 c32 0 56 3 53 7 -2 5 -104 87 -225 183 -121 96 -220 178 -220 182 -1 3 79 71 177 150 l178 143 -54 3 -53 3 -175 -140 c-96 -78 -178 -141 -182 -141 -4 0 -7 186 -7 412 l0 413 -42 3 c-24 2 -44 -2 -48 -9z"  fill="currentColor"/>
                      <path d="M1221 930 c-118 -31 -210 -102 -263 -202 -18 -34 -23 -59 -23 -123 0 -70 4 -86 28 -128 64 -108 142 -164 277 -198 130 -33 273 -13 384 55 l40 24 -32 19 -32 20 -57 -29 c-155 -77 -347 -48 -459 70 -158 164 -47 395 213 442 77 13 160 1 242 -35 57 -26 60 -26 91 -10 l33 17 -45 29 c-55 36 -182 69 -262 68 -34 0 -94 -9 -135 -19z"  fill="currentColor"/>
                      <path d="M964 156 c-35 -35 -42 -63 -24 -97 25 -47 122 -64 183 -32 18 9 26 18 20 20 -7 3 -23 -3 -35 -11 -38 -27 -95 -21 -129 13 -43 44 -37 76 21 115 33 22 68 20 109 -5 41 -25 52 -19 15 10 -19 15 -41 21 -76 21 -43 0 -54 -4 -84 -34z"  fill="currentColor"/>
                      <path d="M1360 100 c0 -53 4 -90 10 -90 6 0 10 37 10 90 0 53 -4 90 -10 90 -6 0 -10 -37 -10 -90z"  fill="currentColor"/>
                      <path d="M1550 175 c0 -8 7 -15 15 -15 8 0 15 7 15 15 0 8 -7 15 -15 15 -8 0 -15 -7 -15 -15z"  fill="currentColor"/>
                      <path d="M1830 100 c0 -53 4 -90 10 -90 6 0 10 13 10 29 0 45 27 48 70 6 50 -49 66 -44 18 5 -21 23 -38 45 -38 50 0 5 16 25 35 46 56 59 30 54 -30 -6 l-55 -54 0 52 c0 29 -4 52 -10 52 -6 0 -10 -37 -10 -90z"  fill="currentColor"/>
                      <path d="M1990 100 c0 -53 4 -90 10 -90 6 0 10 37 10 90 0 53 -4 90 -10 90 -6 0 -10 -37 -10 -90z"  fill="currentColor"/>
                      <path d="M2220 175 c0 -8 5 -15 10 -15 6 0 10 7 10 15 0 8 -4 15 -10 15 -5 0 -10 -7 -10 -15z"  fill="currentColor"/>
                      <path d="M1186 119 c-33 -26 -33 -53 -1 -84 26 -27 72 -33 106 -15 13 7 19 7 19 0 0 -5 5 -10 10 -10 6 0 10 28 10 65 0 37 -4 65 -10 65 -5 0 -10 -5 -10 -12 0 -9 -3 -9 -12 0 -19 19 -82 14 -112 -9z m106 -6 c38 -34 7 -93 -49 -93 -26 0 -63 32 -63 55 0 45 76 71 112 38z"  fill="currentColor"/>
                      <path d="M1422 75 c18 -36 37 -65 43 -65 6 0 25 29 43 65 17 36 28 65 24 65 -5 0 -19 -22 -32 -50 -13 -27 -27 -50 -32 -50 -4 0 -19 23 -33 50 -14 28 -30 50 -35 50 -5 0 5 -29 22 -65z"  fill="currentColor"/>
                      <path d="M1550 75 c0 -51 3 -65 15 -65 12 0 15 14 15 65 0 51 -3 65 -15 65 -12 0 -15 -14 -15 -65z"  fill="currentColor"/>
                      <path d="M1600 73 c0 -35 4 -63 10 -63 6 0 10 20 10 44 0 50 19 76 54 76 33 0 44 -18 47 -73 4 -62 19 -61 19 2 0 67 -16 82 -86 79 l-54 -2 0 -63z"  fill="currentColor"/>
                      <path d="M2052 124 c-22 -15 -30 -57 -14 -80 24 -37 97 -44 133 -14 28 22 14 27 -15 5 -25 -19 -56 -19 -84 1 -37 26 -25 34 53 34 82 0 94 11 53 50 -27 25 -93 27 -126 4z m110 -11 c30 -27 21 -33 -47 -33 -36 0 -65 3 -65 7 0 3 7 15 17 25 20 22 70 23 95 1z"  fill="currentColor"/>
                      <path d="M2220 75 c0 -37 4 -65 10 -65 6 0 10 28 10 65 0 37 -4 65 -10 65 -6 0 -10 -28 -10 -65z"  fill="currentColor"/>
                      <path d="M2265 74 c0 -80 22 -90 27 -13 4 61 21 79 65 63 25 -8 28 -15 31 -62 2 -28 7 -52 13 -52 15 0 10 84 -7 108 -13 19 -24 22 -72 21 l-58 -2 1 -63z"  fill="currentColor"/>
                      </g>                     
                     </svg>
                  </a>
                  <a href="#" class="flex items-center md:justify-center">
                    <svg version="1.0" class="h-20 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg"  width="332.000000pt" height="150.000000pt" viewBox="0 0 332.000000 150.000000" preserveAspectRatio="xMidYMid meet">
                      <g transform="translate(0.000000,150.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                      <path d="M1559 1463 c5 -10 21 -53 36 -96 l26 -78 -30 -35 c-55 -62 -53 -115  6 -169 35 -32 36 -34 29 -85 l-7 -51 28 3 c23 2 29 8 31 36 3 33 22 46 22 15  0 -34 -31 -198 -39 -206 -12 -12 -91 9 -123 33 -33 25 -33 25 -42 -12 -6 -25  -2 -29 30 -43 20 -8 58 -15 85 -15 40 0 49 -3 49 -17 0 -19 -12 -74 -24 -111   l-8 -23 129 3 c116 3 128 5 131 22 3 15 0 18 -19 12 -13 -3 -57 -9 -96 -13  l-73 -6 0 29 c0 76 12 105 52 130 52 33 78 78 78 135 0 45 -23 91 -57 112 -7  4 -11 18 -9 30 3 12 7 35 11 50 5 26 4 28 -22 25 -22 -2 -29 -9 -31 -31 -2  -16 -8 -26 -15 -24 -21 7 -8 98 20 139 40 59 46 61 87 33 30 -20 38 -22 41  -10 3 8 7 22 10 30 3 11 -4 17 -25 22 -17 3 -33 10 -36 14 -3 5 20 45 51 89  l56 80 -28 0 c-24 0 -34 -11 -77 -81 -27 -44 -54 -82 -60 -84 -6 -2 -27 -5  -46 -8 l-36 -5 -25 86 c-24 85 -25 87 -57 90 -29 3 -32 1 -23 -15z m155 -212  c-20 -34 -34 -32 -34 5 0 19 5 24 26 24 l25 0 -17 -29z m-70 -27 c10 -25 7  -94 -4 -94 -14 0 -30 35 -30 68 0 41 22 58 34 26z m142 -332 c-5 -36 -19 -58  -46 -72 -19 -10 -19 -8 2 100 l10 54 20 -24 c15 -18 18 -34 14 -58z"  fill="currentColor"/>
                      <path d="M1104 500 c-28 -11 -64 -58 -71 -92 -5 -24 -9 -27 -27 -22 -55 19 -96 -13 -96 -74 0 -29 9 -44 55 -89 57 -56 66 -81 39 -107 -21 -22 -57 -20  -79 4 -16 17 -19 18 -29 5 -6 -8 -32 -18 -58 -21 l-48 -7 0 67 0 66 50 0 c28  0 50 5 50 10 0 6 -22 10 -49 10 l-49 0 5 71 5 71 -28 -4 c-27 -3 -32 -11 -71  -118 -23 -63 -44 -108 -47 -100 -3 8 -12 61 -21 118 -17 110 -16 116 32 180  22 30 23 32 5 32 -14 0 -36 -31 -83 -117 l-64 -118 -12 60 c-7 33 -17 86 -23  118 -8 38 -16 57 -26 57 -11 0 -14 -8 -9 -32 32 -188 33 -221 14 -333 -22  -131 -23 -135 -6 -135 7 0 20 43 35 118 17 85 32 131 55 170 17 28 34 52 37  52 3 0 16 -57 29 -126 13 -69 27 -122 30 -117 4 4 30 65 57 135 27 70 51 128  54 128 3 0 5 -61 5 -135 l0 -135 62 0 c34 0 64 4 68 10 4 6 15 6 31 0 67 -26 114 0 114 62 0 31 -8 44 -55 89 -39 38 -55 60 -55 79 0 57 47 66 90 18 45 -51 141 -189 152 -217 14 -38 1 -87 -29 -111 -18 -14 -21 -20 -10 -20 22 0 61 55 85 120 37 101 43 110 73 110 29 0 36 -13 55 -108 4 -18 13 -32 20 -32 17 0 18 -13 -11 126 -34 165 -35 168 -44 158 -4 -5 -30 -60 -57 -122 -27 -63 -50 -108 -53 -100 -2 7 -33 58 -69 113 -80 122 -86 159 -34 206 41 37 63 37 107 -2 36 -32 53 -33 41 -4 -12 33 -96 54 -142 35z m205 -218 c7 -24 6 -32 -7 -37 -25 -9 -33 8 -20 43 14 36 15 36 27 -6z"  fill="currentColor"/>
                      <path d="M1859 440 l-12 -60 -93 0 -93 0 -3 -122 -3 -122 -75 122 c-42 68 -82  122 -90 122 -12 0 -16 -24 -18 -146 -3 -104 -1 -144 7 -140 7 5 11 51 11 124  l0 117 88 -130 87 -130 6 115 c4 63 7 130 8 148 1 27 5 32 26 32 l25 0 0 -140  c0 -118 2 -140 15 -140 12 0 15 19 15 109 0 60 3 123 6 140 6 29 10 32 38 29  30 -3 31 -5 29 -46 -2 -36 -17 -131 -49 -295 l-6 -27 110 0 c92 0 111 3 116  16 5 13 2 15 -16 10 -31 -8 -178 -20 -178 -14 0 9 91 453 96 471 4 12 0 17  -15 17 -16 0 -22 -10 -32 -60z"  fill="currentColor"/>
                      <path d="M820 381 c8 -4 28 -11 43 -15 21 -5 28 -3 25 6 -3 7 -22 14 -44 16  -26 1 -34 -1 -24 -7z"  fill="currentColor"/>
                      <path d="M1981 369 c-5 -13 -32 -78 -60 -143 -29 -66 -50 -124 -47 -130 3 -9  39 60 59 117 5 14 15 17 39 15 30 -3 32 -6 45 -63 13 -57 27 -84 37 -74 6 6  -50 288 -58 297 -3 2 -10 -6 -15 -19z m11 -99 c2 -20 -2 -26 -19 -28 -26 -4  -27 0 -11 45 13 35 23 29 30 -17z"  fill="currentColor"/>
                      <path d="M2278 384 c-5 -4 -8 -72 -8 -151 0 -111 3 -144 13 -141 8 3 14 45 18  141 3 76 9 140 13 144 12 13 59 -21 68 -49 12 -34 -8 -79 -40 -93 -12 -5 -21  -13 -20 -16 8 -21 131 -160 150 -170 22 -12 22 -11 6 8 -10 11 -18 22 -18 26  0 3 26 7 57 9 31 2 58 8 60 15 3 8 -6 9 -34 2 -63 -14 -63 -15 -63 56 l0 65 47 0 c57 0 53 8 -5 11 l-42 3 0 64 0 64 45 -6 c29 -5 45 -4 45 3 0 7 -25 11  -62 11 l-63 0 3 -142 c2 -86 0 -139 -5 -133 -5 6 -26 34 -47 64 l-38 53 26 27  c61 63 38 127 -49 137 -27 3 -53 3 -57 -2z"  fill="currentColor"/>
                      <path d="M1398 234 c2 -107 6 -144 15 -141 8 2 13 46 15 145 2 130 1 142 -15  142 -17 0 -18 -12 -15 -146z"  fill="currentColor"/>
                      <path d="M2080 258 c5 -132 15 -164 55 -174 63 -16 82 20 92 174 7 96 6 122 -4 122 -10 0 -13 -29 -13 -118 0 -125 -11 -162 -50 -162 -39 0 -50 37 -50 162 0 106 -2 118 -17 118 -16 0 -18 -11 -13 -122z"  fill="currentColor"/>
                      <path d="M2595 235 c0 -80 3 -145 7 -145 4 0 9 55 10 122 l3 121 84 -126 c46  -70 86 -125 89 -123 2 3 7 67 11 143 l6 138 28 3 27 3 0 -140 c0 -119 2 -141  15 -141 12 0 15 18 15 103 0 56 3 119 7 140 5 36 8 39 34 35 16 -3 29 -1 29 4  0 4 -41 8 -91 8 l-90 0 2 -107 c1 -60 1 -115 0 -123 0 -8 -35 40 -77 108 -103 165 -109 164 -109 -23z"  fill="currentColor"/>
                      <path d="M980 51 c0 -19 39 -51 63 -51 9 0 1 14 -19 35 -37 40 -44 42 -44 16z"  fill="currentColor"/>
                      </g>
                      </svg>
                  </a>
                  <a href="#" class="flex items-center md:justify-center">
                    <svg version="1.0" class="h-20 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg"  width="332.000000pt" height="150.000000pt" viewBox="0 0 332.000000 150.000000"  preserveAspectRatio="xMidYMid meet">
                      <g transform="translate(0.000000,150.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                      <path d="M2815 1300 c3 -5 15 -10 25 -10 26 0 32 -38 28 -190 l-3 -124 -44 -8  c-56 -10 -61 -15 -33 -39 13 -10 25 -31 27 -46 1 -16 12 -91 24 -168 18 -113  19 -144 10 -163 -24 -44 -4 -46 169 -17 36 7 42 26 13 46 -16 12 -24 47 -46  199 -31 217 -31 214 -50 206 -13 -5 -15 17 -15 159 l0 165 -56 0 c-34 0 -53 -4 -49 -10z" fill="currentColor"/>
                      <path d="M360 1270 c0 -5 11 -10 25 -10 35 0 37 -19 33 -242 -3 -168 -5 -198 -22 -222 -10 -16 -27 -31 -37 -33 -22 -6 -26 -23 -5 -23 30 0 85 42 103 78 15  31 19 70 23 237 l5 200 28 3 c15 2 27 8 27 13 0 5 -40 9 -90 9 -53 0 -90 -4  -90 -10z" fill="currentColor"/>
                      <path d="M1770 1270 c0 -5 8 -10 18 -10 38 0 42 -18 42 -190 0 -172 -4 -190  -42 -190 -10 0 -18 -4 -18 -10 0 -6 35 -10 85 -10 47 0 85 4 85 9 0 5 -10 11  -22 13 -21 3 -23 9 -26 86 l-3 82 70 0 c39 0 82 5 96 12 35 16 55 57 55 113 0  38 -5 52 -29 76 l-29 29 -141 0 c-87 0 -141 -4 -141 -10z m255 -35 c34 -33 35  -106 2 -139 -23 -23 -107 -44 -127 -31 -6 3 -10 48 -10 101 l0 94 55 0 c46 0  60 -4 80 -25z" fill="currentColor"/>
                      <path d="M654 1141 c-56 -24 -84 -111 -63 -194 13 -54 34 -76 86 -87 71 -16  147 15 155 65 5 31 -30 32 -38 0 -7 -27 -49 -55 -82 -55 -36 0 -64 33 -69 83  l-6 47 44 2 c24 1 58 3 74 4 17 1 43 3 59 3 28 1 28 2 23 43 -8 61 -42 90 -109 95 -29 1 -63 -1 -74 -6z m96 -21 c20 -11 45 -74 35 -90 -8 -13 -132 -13  -140 1 -4 6 -4 25 -1 43 9 47 62 70 106 46z"  fill="currentColor"/>
                      <path d="M960 1138 c-26 -14 -52 -56 -44 -70 11 -17 33 -6 42 22 13 37 54 50  91 29 21 -12 26 -22 26 -54 l0 -40 -67 -6 c-83 -7 -108 -26 -108 -81 0 -55 27  -78 91 -78 28 0 59 5 69 10 13 7 21 7 25 0 8 -12 85 -13 85 -1 0 5 -9 11 -19  14 -17 4 -20 16 -23 115 -2 88 -7 115 -20 128 -22 22 -114 29 -148 12z m120  -176 c0 -55 -23 -82 -70 -82 -42 0 -60 18 -60 61 0 39 28 59 82 59 l48 0 0  -38z" fill="currentColor"/>
                      <path d="M1235 1140 l-30 -7 28 -11 27 -12 0 -110 c0 -109 0 -111 -25 -120  -14 -5 -25 -12 -25 -15 0 -3 36 -5 81 -5 51 0 78 4 74 10 -3 6 -14 10 -25 10  -25 0 -30 19 -30 116 0 71 3 87 20 104 23 23 91 28 108 8 6 -7 11 -53 12 -103  3 -125 3 -125 -19 -125 -11 0 -23 -4 -26 -10 -4 -6 23 -10 74 -10 85 0 97 4  57 20 -23 8 -24 13 -28 120 -3 103 -5 114 -27 131 -28 23 -94 25 -135 4 -35  -18 -36 -18 -36 0 0 16 -24 18 -75 5z" fill="currentColor"/>
                      <path d="M2180 1143 c-48 -19 -71 -83 -30 -83 13 0 20 7 20 19 0 28 27 51 58  51 41 0 54 -14 59 -62 l5 -45 -73 -5 c-60 -5 -76 -10 -91 -28 -19 -24 -24 -76  -8 -100 6 -9 5 -19 -3 -28 -8 -11 -6 -18 11 -30 24 -19 41 -88 62 -263 9 -75  9 -101 0 -119 -17 -32 -2 -40 55 -30 28 5 71 11 98 15 50 7 59 20 28 47 -13  11 -22 41 -31 104 -6 49 -18 125 -25 169 -9 55 -10 84 -3 93 12 14 84 16 93 2  3 -5 17 -86 31 -181 24 -162 24 -172 8 -190 -9 -11 -14 -22 -10 -26 6 -6 176  14 183 21 2 2 -6 54 -16 117 -11 63 -23 148 -27 190 l-6 76 43 7 c40 6 46 5  69 -24 30 -36 50 -39 50 -6 0 18 6 26 23 29 21 3 21 4 -5 15 l-27 11 -3 128  -3 128 -30 3 c-17 2 -42 -1 -55 -6 l-25 -10 27 -11 c33 -12 40 -37 36 -116 -3  -51 -6 -60 -23 -63 -54 -8 -65 -13 -65 -31 0 -11 6 -22 13 -24 6 -3 2 -6 -11  -6 -13 -1 -25 6 -29 17 -4 9 -12 21 -20 25 -9 6 -13 37 -13 117 l0 110 -27 0  c-38 0 -73 -10 -73 -21 0 -5 9 -9 20 -9 26 0 32 -26 28 -125 l-3 -79 -45 -9  c-25 -5 -48 -14 -52 -20 -16 -27 -27 13 -30 115 -4 128 -11 140 -90 144 -29 2  -60 1 -68 -3z m110 -183 c0 -51 -27 -80 -73 -80 -26 0 -36 6 -45 25 -16 34  -15 46 4 73 12 18 25 22 65 22 l49 0 0 -40z" fill="currentColor"/>
                      <path d="M2980 984 c0 -9 9 -23 20 -32 13 -11 24 -39 31 -80 10 -54 9 -65 -5 -81 -22 -24 -20 -36 9 -55 15 -10 26 -29 30 -53 14 -82 26 -104 63 -120 31  -13 40 -13 79 2 45 17 63 39 63 74 0 23 -24 29 -36 9 -9 -14 -22 15 -23 53 -1  33 -40 69 -74 69 -35 0 -34 9 5 42 30 24 33 32 32 79 0 45 -5 56 -32 81 -29  25 -40 28 -97 28 -53 0 -65 -3 -65 -16z" fill="currentColor"/>
                      <path d="M1993 843 c-19 -7 -16 -34 8 -59 11 -12 28 -37 37 -55 9 -19 24 -34  32 -34 16 0 17 31 5 113 -6 40 -8 42 -38 41 -18 0 -38 -3 -44 -6z" fill="currentColor"/>
                      <path d="M1860 823 c-19 -3 -39 -8 -44 -13 -8 -8 3 -91 39 -315 12 -75 12 -81  -5 -100 -35 -38 -12 -43 100 -24 58 10 106 18 108 19 11 1 -2 30 -17 35 -23 7  -25 13 -50 195 -33 229 -27 210 -64 208 -18 0 -48 -3 -67 -5z" fill="currentColor"/>
                      <path d="M1717 803 c-27 -4 -27 -5 -21 -56 11 -79 19 -102 37 -105 13 -3 17 4  17 30 0 18 7 46 15 62 8 15 15 39 15 52 0 25 -4 26 -63 17z" fill="currentColor"/>
                      <path d="M2627 760 l-26 -50 38 -40 c20 -22 41 -40 46 -40 8 0 0 116 -11 158  -9 33 -18 27 -47 -28z" fill="currentColor"/>
                      <path d="M1457 766 c-98 -16 -123 -38 -64 -58 7 -3 40 -193 53 -304 4 -41 3  -64 -5 -68 -22 -14 -12 -36 17 -36 25 0 142 20 150 25 3 2 -47 355 -54 377 -3  12 1 27 11 38 19 21 12 41 -13 39 -9 -1 -52 -7 -95 -13z" fill="currentColor"/>
                      <path d="M1240 731 c-52 -7 -68 -35 -27 -50 13 -5 27 -17 30 -25 14 -36 48  -271 42 -293 -3 -12 -18 -32 -34 -44 -19 -14 -27 -27 -24 -40 7 -25 12 -24 55  11 46 38 53 71 38 176 -29 187 -29 187 -9 222 32 55 30 56 -71 43z" fill="currentColor"/>
                      <path d="M996 694 c-82 -16 -96 -26 -67 -46 18 -13 26 -43 51 -183 19 -109 34  -173 46 -186 25 -27 79 -42 130 -34 38 5 44 10 44 30 0 15 -7 26 -20 30 -23 7 -22 4 -50 183 -24 159 -25 178 -5 186 8 3 15 12 15 21 0 19 -47 19 -144 -1z" fill="currentColor"/>
                      <path d="M710 648 c-84 -16 -90 -18 -90 -31 0 -7 23 -69 50 -137 28 -68 47  -127 43 -131 -4 -4 -19 -9 -33 -11 -17 -2 -26 -10 -28 -26 -3 -22 -1 -23 46 -16 47 6 50 5 56 -19 3 -14 3 -39 0 -57 l-7 -32 49 7 c82 11 155 28 161 38 3  5 -6 19 -20 31 -14 11 -29 32 -32 46 -4 14 -16 43 -26 65 -10 22 -39 92 -64  155 -26 63 -50 118 -53 121 -4 3 -27 2 -52 -3z" fill="currentColor"/>
                      <path d="M2721 597 c-13 -30 -32 -54 -51 -65 -16 -9 -30 -25 -30 -35 0 -17 6  -18 68 -12 37 4 69 9 71 11 8 7 -11 113 -24 130 -12 18 -15 15 -34 -29z"/>
                      <path d="M390 594 c-11 -13 -25 -14 -67 -9 -44 5 -53 4 -53 -9 0 -8 20 -24 44  -35 32 -14 51 -32 71 -65 27 -47 51 -58 62 -31 8 22 -20 158 -33 162 -6 2 -17 -4 -24 -13z" fill="currentColor"/>
                      <path d="M208 572 c-28 -12 -76 -60 -94 -94 -12 -23 -17 -56 -17 -110 2 -134   58 -220 162 -248 56 -15 74 -1 44 32 -22 25 -35 82 -58 258 -10 76 -12 117 -5  124 14 14 12 46 -2 45 -7 0 -20 -3 -30 -7z" fill="currentColor"/>
                      <path d="M610 498 c-1 -24 -7 -94 -14 -156 -11 -89 -18 -118 -35 -136 -42 -45  -21 -56 65 -35 50 13 54 25 20 54 l-25 20 14 119 c13 116 9 156 -14 171 -7 4  -11 -9 -11 -37z" fill="currentColor"/>
                      <path d="M1717 493 c-3 -5 -10 -27 -17 -51 -8 -31 -20 -48 -41 -60 -16 -9 -29  -25 -29 -35 0 -17 6 -18 63 -12 34 4 66 10 70 14 4 4 3 28 -2 52 -6 24 -13 56  -16 72 -5 26 -19 35 -28 20z" fill="currentColor"/>
                      <path d="M371 370 c-68 -10 -84 -25 -54 -48 27 -20 45 -120 29 -164 -5 -15 -8  -30 -5 -32 11 -11 82 19 116 49 l37 32 -12 64 c-7 41 -8 67 -2 73 6 6 10 16  10 23 0 14 -33 15 -119 3z" fill="currentColor"/>
                      </g>
                      </svg>
                  </a>
                  <a href="#" class="flex items-center md:justify-center">
                    <svg version="1.0" class="h-20 hover:text-gray-900 dark:hover:text-white" xmlns="http://www.w3.org/2000/svg"  width="332.000000pt" height="150.000000pt" viewBox="0 0 332.000000 150.000000"  preserveAspectRatio="xMidYMid meet">
                      <g transform="translate(0.000000,150.000000) scale(0.100000,-0.100000)"  fill="#000000" stroke="none">
                      <path d="M1960 1461 c0 -26 5 -30 45 -40 25 -6 49 -19 52 -28 3 -8 -3 -34 -15  -57 -12 -22 -38 -81 -58 -131 -20 -49 -63 -151 -94 -225 -32 -74 -81 -191  -110 -260 -29 -69 -54 -126 -55 -128 -3 -4 -46 84 -70 146 l-17 42 52 153 c29  83 56 157 60 162 4 6 17 40 29 77 12 36 28 72 36 78 8 6 35 15 61 18 42 6 49   11 61 40 l13 32 -189 0 -189 0 -11 -31 c-14 -41 -15 -39 14 -39 43 0 48 -30  20 -107 -14 -37 -33 -90 -41 -116 -14 -45 -16 -48 -29 -30 -8 10 -15 21 -15  25 0 4 -17 44 -39 90 -124 265 -120 252 -76 260 15 2 21 12 23 41 l3 38 -186  -2 -186 -1 3 -37 c3 -34 5 -36 46 -42 27 -3 52 -14 66 -30 13 -13 61 -105 106  -204 46 -99 105 -227 132 -284 l50 -104 -48 -126 c-26 -69 -56 -151 -68 -181  -29 -78 -30 -78 -173 -95 -46 -6 -53 -10 -62 -36 l-10 -29 519 -2 519 -3 67  140 c36 77 69 146 71 153 4 8 -6 12 -30 12 -34 0 -38 -4 -68 -60 -18 -34 -50  -81 -71 -105 -60 -68 -94 -75 -380 -75 -131 0 -238 1 -238 3 0 9 35 104 47  126 7 15 13 32 13 39 0 26 17 10 45 -43 l30 -55 61 0 c37 0 65 5 71 12 6 7 27  54 48 103 21 50 78 184 127 300 137 323 194 457 208 493 14 35 67 82 93 82 33  0 47 13 47 41 l0 29 -155 0 -155 0 0 -29z"  fill="currentColor"/>
                      <path d="M1068 144 c-9 -9 -11 -96 -2 -118 7 -17 54 -22 54 -6 0 6 -9 10 -20  10 -16 0 -19 8 -22 61 -2 33 -6 57 -10 53z"  fill="currentColor"/>
                      <path d="M1146 128 c-22 -31 -20 -70 4 -96 26 -28 50 -28 84 -1 33 26 34 68 3  97 -30 29 -71 28 -91 0z m89 -18 c15 -17 16 -24 7 -45 -14 -30 -33 -39 -67  -31 -29 7 -42 45 -25 75 14 27 61 28 85 1z"  fill="currentColor"/>
                      <path d="M1280 147 c-3 -3 -3 -31 -2 -62 3 -48 7 -58 28 -67 19 -9 28 -8 44 7  16 14 20 29 18 74 l-2 56 -3 -52 c-7 -96 -64 -99 -73 -4 -3 29 -7 51 -10 48z"  fill="currentColor"/>
                      <path d="M1390 85 c0 -37 4 -65 10 -65 6 0 10 28 10 65 0 37 -4 65 -10 65 -6  0 -10 -28 -10 -65z"  fill="currentColor"/>
                      <path d="M1447 144 c-16 -16 -6 -51 18 -62 30 -14 35 -52 7 -52 -10 0 -23 5  -30 12 -7 7 -12 8 -12 2 0 -16 22 -34 42 -34 10 0 24 11 30 25 9 21 8 28 -7  45 -10 11 -24 20 -32 20 -7 0 -13 7 -13 16 0 12 7 15 25 11 16 -3 24 0 22 7  -4 13 -40 20 -50 10z"  fill="currentColor"/>
                      <path d="M1570 144 c0 -15 45 -124 52 -124 9 0 50 110 45 123 -2 6 -11 -11  -21 -36 -10 -26 -21 -47 -25 -47 -4 0 -13 18 -20 40 -10 34 -31 64 -31 44z"  fill="currentColor"/>
                      <path d="M1690 91 c0 -56 2 -62 26 -73 43 -20 59 -1 60 73 1 64 1 64 -3 7 -3  -47 -8 -58 -24 -63 -29 -9 -37 2 -42 58 -6 70 -17 70 -17 -2z"  fill="currentColor"/>
                      <path d="M1807 143 c-11 -10 -8 -123 3 -123 6 0 10 28 10 65 0 65 -1 71 -13  58z"  fill="currentColor"/>
                      <path d="M1840 140 c0 -5 5 -10 10 -10 6 0 10 -25 10 -55 0 -30 5 -55 10 -55  6 0 10 25 10 55 l0 55 35 0 34 0 4 -62 3 -63 2 63 c2 48 5 62 17 62 8 0 15 5  15 10 0 6 -32 10 -75 10 -43 0 -75 -4 -75 -10z"  fill="currentColor"/>
                      <path d="M2020 130 c-27 -27 -26 -71 3 -98 29 -27 57 -28 85 -2 44 41 15 120 -43 120 -14 0 -34 -9 -45 -20z m84 -16 c21 -20 20 -43 -1 -66 -20 -22 -51 -23  -75 -1 -34 31 -12 83 37 83 13 0 31 -7 39 -16z"  fill="currentColor"/>
                      <path d="M2250 106 c0 -25 -4 -46 -9 -46 -5 0 -25 18 -45 40 -20 22 -38 40  -41 40 -3 0 -5 -27 -5 -60 0 -33 4 -60 10 -60 6 0 10 20 10 45 l0 45 42 -46  c37 -40 43 -43 49 -27 11 27 10 101 -1 108 -6 4 -10 -12 -10 -39z"  fill="currentColor"/>
                      </g>
                      </svg>
                  </a>
                </div>
            </section>
            <script>
              document.getElementById("getStartedBtn").addEventListener("click", function() {
                  window.scrollBy({
                      top: 680,
                      behavior: "smooth"
                  });
              });
          </script>

            <!-- Page Content -->
            <main class="flex-grow">
                <div class="px-4 py-6 sm:px-6 lg:px-8">
                    <div class="bg-white">
                        <div class="px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                            <h2 class="sr-only">Products</h2>
            
                            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                                <a href="#" class="group">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-01.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
                                </a>
                                <a href="#" class="group">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-02.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                                </a>
                                <a href="#" class="group">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-03.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
                                </a>
                                <a href="#" class="group">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                                </a>

                                <a href="#" class="group">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                                </a>

                                <a href="#" class="group">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                                </a>

                                <a href="#" class="group">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="https://tailwindui.com/plus/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
                                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                                </a>
                                <!-- More products... -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            
            {{-- -- Footer -- --}}
            <footer class="bg-white shadow dark:bg-gray-800">
              <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                  <div class="sm:flex sm:items-center sm:justify-between">
                      <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">House of Perfume</span>
                      </a>
                      <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                          <li>
                              <a href="#" onclick="showModal('about', event)" class="me-4 md:me-6 cursor-pointer">About Us</a>
                          </li>
                          <li>
                              <a href="#" onclick="showModal('contact', event)" class="me-4 md:me-6 cursor-pointer">Contact Us</a>
                          </li>
                          <li>
                              <a href="#" onclick="showModal('terms', event)" class="me-4 md:me-6 cursor-pointer">Terms & Conditions</a>
                          </li>
                          <li>
                              <a href="#" onclick="showModal('faq', event)" class="cursor-pointer">FAQ</a>
                          </li>
                      </ul>
                  </div>
                  <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                  <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 House of Perfume.</span>
              </div>
          </footer>
          
          <!-- Modals -->
          <div id="modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
              <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6">
                  <h2 id="modal-title" class="text-xl font-bold mb-4"></h2>
                  <p id="modal-content" class="text-gray-600 mb-6 text-justify"></p>
                  <button onclick="closeModal()" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-800">
                      Close
                  </button>
              </div>
          </div>
          
          <script>
              // Content for modals
              const modalData = {
                  about: {
                      title: "About Us",
                      content: "At House of Perfume, we believe that fragrance is an art that elevates your mood, personality, and sense of elegance. Our journey began with a simple vision: to bring high-quality, luxurious, and unique scents to the world. We are dedicated to curating a diverse collection of perfumes from the most renowned brands as well as offering bespoke fragrance options for those who want something truly personalized."
                  },
                  contact: {
                      title: "Contact Us",
                      content: "Have questions about our fragrances or need help finding the perfume you're looking for? Our team at House of Perfume is ready to assist you! Whether you're seeking product recommendations or unsure about choosing the right fragrance, we strive to offer personalized customer service every step of the way."
                  },
                  terms: {
                      title: "Terms & Conditions",
                      content: "Welcome to House of Perfume! By accessing or using our website, you agree to comply with and be bound by our website's Terms & Conditions. Please read our terms and conditions carefully before using our services."
                  },
                  faq: {
                      title: "FAQ",
                      content: "At House of Perfume, we offer a wide range of perfumes, including floral, oriental, woody, citrus, and fresh scents. We also provide bespoke perfume services for those looking to create a personalized fragrance."
                  }
              };
          
              // Show modal
              function showModal(key) {
                  event.preventDefault();
                  const modal = document.getElementById("modal");
                  document.getElementById("modal-title").innerText = modalData[key].title;
                  document.getElementById("modal-content").innerText = modalData[key].content;
                  modal.classList.remove("hidden");
              }
          
              // Close modal
              function closeModal() {
                  const modal = document.getElementById("modal");
                  modal.classList.add("hidden");
              }
          </script>
          

          </div>
        </div>
    </body>
</html>
