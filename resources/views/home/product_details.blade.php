<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('House of Perfume') }}
        </h2>
    </x-slot>

    <div class="bg-white">
        <div class="pt-1">
      
            <!-- Image gallery -->
            <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                <img src="{{ asset('storage/' . $product->Image) }}" class="hidden aspect-[3/4] size-full rounded-lg object-cover lg:block">
            </div>       
      
            <!-- Product info -->
            <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                    <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->Name }}</h1>
                </div>
      
            <!-- Options -->
            <div class="mt-4 lg:row-span-3 lg:mt-0">
                <h2 class="sr-only">Product information</h2>
                <p class="text-3xl tracking-tight text-gray-900">Rp {{ number_format($product->Price, 0, ',', '.') }}</p>
        
                <!-- Reviews -->
                <div class="mt-6">
                    <h3 class="sr-only">Reviews</h3>
                    <div class="flex items-center">
                    </div>
                </div>
        
                <!-- Sizes -->
                <div class="mt-10">
                    <div class="flex items-center justify-between">
                        <h3 class="text-sm font-medium text-gray-900">Size</h3>
                    </div>
            
                    <fieldset aria-label="Choose a size" class="mt-4">
                        <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6">
                                <input type="radio" name="size-choice" value="XS" class="sr-only">
                                <span>100ml</span>
                                <!--
                                Active: "border", Not Active: "border-2"
                                Checked: "border-indigo-500", Not Checked: "border-transparent"
                                    -->
                                <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                            </label>
                        </div>
                    </fieldset>
                </div>
            </div>
      
            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                <!-- Description and details -->
                <div>
                    <h3 class="sr-only">Description</h3>
        
                    <div class="space-y-6">
                        <p class="text-base text-gray-900">{{ $product->Description }}</p>
                    </div>
                </div>
        
                <div class="mt-10">
                    <h3 class="text-sm font-medium text-gray-900">Notes</h3>
            
                    <div class="mt-4">
                        <p class="text-base text-gray-900">{{ $product->Notes_Description }}</p>
                    </div>
                </div>
            
                <div class="mt-10">
                    <h2 class="text-sm font-medium text-gray-900">Ingredients</h2>
            
                    <div class="mt-4 space-y-6">
                        <p class="text-sm text-gray-600">{{ $product->Ingredients }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#searchForm').on('submit', function (e) {
            e.preventDefault(); // Prevent form submission

            let query = $('input[name="search"]').val();

            $.ajax({
                url: '{{ route('dashboard') }}',
                method: 'GET',
                data: { search: query },
                success: function(response) {
                    // Replace the product list with the new HTML from the response
                    $('#productList').html($(response).find('#productList').html());
                }
            });
        });
    });
</script>
