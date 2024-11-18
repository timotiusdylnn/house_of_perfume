<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $product->Description = $sanitizedDescription;
        $product->Notes_Description = $request->notes_description;
        $product->Ingredients = $request->ingredients;

        if ($request->hasFile('image')) {
            $product->Image = $request->file('image')->store('products', 'public');
        }

        $product->save();

        return redirect()->back()->with('success', 'Product added successfully.');
    }

    public function view_product(Request $request)
    {
        $search = $request->input('search');
        $product = $search
            ? Product::where('Name', 'like', '%' . $search . '%')->get()
            : Product::all();

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
        $product->Description = $sanitizedDescription;
        $product->Notes_Description = $request->notes_description;
        $product->Ingredients = $request->ingredients;

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $product->Image);
            $product->Image = $request->file('image')->store('products', 'public');
        }

        $product->save();

        return redirect()->route('admin.dashboard')->with('success', 'Product updated successfully.');
    }

    public function delete_product($id)
    {
        $product = Product::findOrFail($id);

        if (!empty($product->Image)) {
            Storage::delete('public/' . $product->Image);
        }

        $product->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Product deleted successfully!');
    }
}