<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'House of Perfume') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script>
        function previewImage(event) {
            const fileName = event.target.files[0] ? event.target.files[0].name : 'No file chosen';
            document.getElementById('file-name').innerText = 'Selected file: ' + fileName;
    
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
    
                // Show the delete button
                const deleteBtnContainer = document.getElementById('delete-btn-container');
                if (deleteBtnContainer) {
                    deleteBtnContainer.classList.remove('hidden');  // Show the delete button
                }
            }
        }
    
        function deleteImage() {
            // Clear the file input and hide the image preview
            const fileInput = document.getElementById('image');
            fileInput.value = ''; // Reset file input
    
            document.getElementById('file-name').innerText = ''; // Clear file name text
            document.getElementById('preview').classList.add('hidden'); // Hide image preview
    
            // Hide the delete button
            document.getElementById('delete-btn-container').classList.add('hidden');
        }
    </script>    

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div>
        @include('admin.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex items-center justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Add Product</h1>
            </div>
        </header>
            
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-md shadow-md mt-6">
            <h2 class="text-2xl font-semibold mb-6">Add New Product</h2>
            
            @if (session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded-md mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ url('upload_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Image Upload -->
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Product Image</label>
                    <label class="mt-1 flex items-center justify-center w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 cursor-pointer">
                        <span>Choose File</span>
                        <input type="file" name="image" id="image" class="sr-only" onchange="previewImage(event)">
                    </label>

                    @if ($errors->has('image'))
                        <div class="text-red-600 text-sm mt-2">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div>
                
                <!-- Display selected file name -->
                <div id="file-name" class="text-sm text-gray-600 mt-2"></div>
        
                <!-- Image Preview -->
                <div class="mt-4">
                    <img id="preview" class="hidden w-32 h-32 object-cover rounded-md" alt="Image Preview" />
                </div>

                <!-- Delete Button for the Image -->
                <div id="delete-btn-container" class="hidden mt-2 mb-6">
                    <button type="button" class="px-4 py-2 text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-300" onclick="deleteImage()">
                        Delete Image
                    </button>
                </div>
        
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" name="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Enter product name" required>
                </div>
        
                <!-- Brand -->
                <div class="mb-4">
                    <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                    <input type="text" name="brand" id="brand" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Enter brand name">
                </div>
        
                <!-- Price -->
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="text" name="price" id="price" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Enter price">
                </div>
        
                <!-- Description -->
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Enter product description"></textarea>
                </div>

                <!-- Notes Description -->
                <div class="mb-6">
                    <label for="notes_description" class="block text-sm font-medium text-gray-700">Notes Description</label>
                    <textarea name="notes_description" id="notes_description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Enter notes description"></textarea>
                </div>

                <!-- Ingredients -->
                <div class="mb-6">
                    <label for="ingredients" class="block text-sm font-medium text-gray-700">Ingredients</label>
                    <textarea name="ingredients" id="ingredients" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Enter ingredients"></textarea>
                </div>
        
                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300">Add Product</button>
                </div>
            </form>
        </div>        
    </div>
</body>
</html>