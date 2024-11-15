<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'House of Perfume') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                @if(!request()->is('profile*'))
                    <header class="bg-white shadow">
                        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-between">
                            <h1 class="text-3xl font-bold tracking-tight text-gray-900">House of Perfume</h1>

                            @if(!request()->is('product_details*'))
                                <form method="GET" action="{{ route('dashboard') }}" class="flex items-center w-96 border border-black-300 rounded-lg">
                                    <input type="text" name="search" value="{{ request('search') }}" placeholder="What are you looking for?"
                                        class="w-full h-10 px-4 text-sm rounded-l-lg focus:outline-none focus:ring-0 focus:border-black-300 bg-white"/>
                                    <button type="submit" class="h-10 px-3 border border-black-300 bg-white text-gray-600 rounded-r-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </header>
                @endif
            @endisset

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>
            
            {{-- -- Footer -- --}}
            @if(!request()->is('profile*'))
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
          @endif
          
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
