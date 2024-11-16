<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'House of Perfume') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div>
        @include('admin.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Welcome, Admin</h1>

                <form action="{{ route('admin.dashboard') }}" method="GET" class="w-full max-w-md flex items-center">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by product name" 
                        class="w-full h-10 px-4 text-sm rounded-l-lg focus:outline-none focus:ring-0 focus:border-black-300 bg-white" />
                    <button type="submit" class="h-10 px-3 border border-black-300 bg-white text-gray-600 rounded-r-lg flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </form>
            </div>
        </header>

        @if (session('success'))
            <script>
                window.onload = function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '{{ session('success') }}',
                        confirmButtonText: 'Okay',
                    });
                };
            </script>
        @endif
            
        <div class="bg-white rounded-md mx-auto w-full max-w-6xl px-4 py-6 sm:px-6 lg:px-8 mt-6">
                
            <!-- Add Product Button -->
            <div class="flex justify-end mb-4">
                <a href="{{ url('add_product') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300">
                    Add Product
                </a>
            </div>

            <!-- Product Table -->
            <table class="min-w-full table-auto" id="productTable">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Image</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Name</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Brand</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Price</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white" id="productTableBody">
                    @foreach ($product as $products)
                        <tr class="border-t">
                            <td class="px-6 py-4 align-middle text-center whitespace-nowrap text-sm font-medium text-gray-900">
                                <img src="{{ asset('storage/products/' . $products->Image) }}" alt="product image" class="w-16 h-16 object-cover rounded-md mx-auto">
                            </td>
                            <td class="px-6 py-4 text-center whitespace-nowrap text-sm font-medium text-gray-900">{{ $products->Name }}</td>
                            <td class="px-6 py-4 text-center whitespace-nowrap text-sm font-medium text-gray-900">{{ $products->Brand }}</td>
                            <td class="px-6 py-4 text-center whitespace-nowrap text-sm font-medium text-gray-900">
                                Rp {{ number_format($products->Price, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 text-center whitespace-nowrap text-sm font-medium">
                                <a href="{{ url('update_product/' . $products->id) }}" class="text-blue-600 hover:text-blue-800">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>                                    
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#searchInput').on('input', function () {
                let query = $(this).val();
                // Perform AJAX search request
                $.ajax({
                    url: '{{ route('admin.dashboard') }}',
                    method: 'GET',
                    data: { search: query },
                    success: function (response) {
                        // Update product table with filtered results
                        $('#productTableBody').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
