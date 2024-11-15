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
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'notes_description' => 'nullable|string',
            'ingredients' => 'nullable|string',
            'image' => 'required|mimes:jpeg,png,jpg,gif|file|max:2048',
        ], [
            'image.required' => 'Please upload a product image. This field is required.',
        ]);

        $product = new Product();

        $product->Name = $request->name;
        $product->Brand = $request->brand;
        $product->Price = $request->price;
        $product->Description = $request->description;
        $product->Notes_Description = $request->notes_description;
        $product->Ingredients = $request->ingredients;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->Image = $imagePath;
        }

        $product->save();

        return redirect()->back()->with('success', 'Product added successfully.');
    }

    public function view_product(Request $request)
    {
        $search = $request->input('search');
        
        if ($search) {
            $product = Product::where('Name', 'like', '%' . $search . '%')->get();
        } else {
            // Return all products if no search term is provided
            $product = Product::all();
        }

        if ($request->ajax()) {
            // Return only the table rows as HTML for AJAX requests
            return view('admin.product_table', compact('product'));
        }

        // Return the whole page view for non-AJAX requests
        return view('admin.index', compact('product'));
    }

    public function update_product($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.update_product', compact('product'));
    }

    public function edit_product(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'notes_description' => 'nullable|string',
            'ingredients' => 'nullable|string',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|file|max:2048', // Image is optional for update
        ]);

        // Find the product by ID
        $product = Product::findOrFail($id);

        // Update the product fields
        $product->Name = $request->name;
        $product->Brand = $request->brand;
        $product->Price = $request->price;
        $product->Description = $request->description;
        $product->Notes_Description = $request->notes_description;
        $product->Ingredients = $request->ingredients;

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // If there's an old image, delete it from storage
            if ($product->Image) {
                \Storage::delete('public/' . $product->Image);
            }

            // Upload the new image
            $imagePath = $request->file('image')->store('products', 'public');
            $product->Image = $imagePath;
        }

        // Save the updated product
        $product->save();

        return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully.');
    }

    public function delete_product($id)
    {
        // Find the product by ID
        $product = Product::find($id);

        if ($product) {
            // Delete the product
            $product->delete();

            // Redirect with a success message
            return redirect()->route('admin.dashboard')->with('success', 'Product deleted successfully!');
        } else {
            // If the product isn't found, return an error message
            return redirect()->route('admin.dashboard')->with('error', 'Product not found!');
        }
    }
}
