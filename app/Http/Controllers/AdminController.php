<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_product()
    {
        return view('admin.add_product');
    }

    public function upload_product(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'description' => 'nullable|string',
            'notes_description' => 'nullable|string',
            'ingredients' => 'nullable|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif|file|max:2048', // image validation
        ], [
            'image.required' => 'Please upload a product image. This field is required.',
        ]);

        // Create a new product instance
        $product = new Product();

        // Assign values to the product
        $product->Name = $request->name;
        $product->Brand = $request->brand;
        $product->Price = $request->price;  // Store the cleaned numeric price
        $product->Description = $request->description;
        $product->Notes_Description = $request->notes_description;
        $product->Ingredients = $request->ingredients;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->Image = $imagePath;
        }

        // Save the product to the database
        $product->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product added successfully.');
    }
}
