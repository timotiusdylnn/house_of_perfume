<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

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

        $sanitizedDescription = strip_tags($request->input('description'), '<p><strong><br>');

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
            $product = Product::all();
        }

        if ($request->ajax()) {
            return view('admin.product_table', compact('product'));
        }

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
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|file|max:2048',
        ]);

        $sanitizedDescription = strip_tags($request->input('description'), '<p><strong><br>');

        $product = Product::findOrFail($id);

        $product->Name = $request->name;
        $product->Brand = $request->brand;
        $product->Price = $request->price;
        $product->Description = $request->description;
        $product->Notes_Description = $request->notes_description;
        $product->Ingredients = $request->ingredients;

        if ($request->hasFile('image')) {
            if ($product->Image) {
                \Storage::delete('public/' . $product->Image);
            }

            $imagePath = $request->file('image')->store('products', 'public');
            $product->Image = $imagePath;
        }

        $product->save();

        return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully.');
    }

    public function delete_product($id)
    {
        $product = Product::find($id); // Retrieve the product by ID

        if ($product) {
            // Delete the image file if it exists
            if (!empty($product->Image)) {
                $imagePath = public_path('storage/' . $product->Image);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the image file
                }
            }

            // Delete the product record from the database
            $product->delete();

            return redirect()->route('admin.dashboard')->with('success', 'Product deleted successfully!');
        } else {
            return redirect()->route('admin.dashboard')->with('error', 'Product not found!');
        }
    }
}
