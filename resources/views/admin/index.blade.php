<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'House of Perfume') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div>
        @include('admin.navigation')

        <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-between">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>

                    <div class="flex items-center w-96 border border-black-300 rounded-lg">
                        <input type="text"
                            placeholder="Search"
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
            
            <div class="bg-white rounded-md mx-auto w-full max-w-6xl px-4 py-6 sm:px-6 lg:px-8 mt-6">
                
                <!-- Add Product Button -->
                <div class="flex justify-end mb-4">
                    <a href="{{ url('add_product') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300">
                        Add Product
                    </a>
                </div>

                <!-- Product Table -->
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Image</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Brand</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <!-- Example Product Row -->
                        <tr class="border-t">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <img src="path_to_image.jpg" alt="product image" class="w-16 h-16 object-cover rounded-md">
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Product Name</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Brand Name</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">$100.00</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-blue-600 hover:text-blue-800">Edit</a>
                                <span class="mx-2">|</span>
                                <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                            </td>
                        </tr>
                        <!-- More Product Rows can go here -->
                    </tbody>
                </table>
            </div>
    </div>
</body>
</html>