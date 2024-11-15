@foreach ($product as $products)
    <tr class="border-t">
        <td class="px-6 py-4 align-middle text-center whitespace-nowrap text-sm font-medium text-gray-900">
            <img src="{{ asset('storage/' . $products->Image) }}" alt="product image" class="w-16 h-16 object-cover rounded-md mx-auto">
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
