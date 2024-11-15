<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
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
            return view('dashboard', compact('product'));
        }

        return view('dashboard', compact('product'));
    }

    public function login_home()
    {
        $search = $request->input('search');
        
        if ($search) {
            $product = Product::where('Name', 'like', '%' . $search . '%')->get();
        } else {
            $product = Product::all();
        }

        if ($request->ajax()) {
            return view('dashboard', compact('product'));
        }

        return view('dashboard', compact('product'));
    }

    public function product_details($id)
    {
        $product = Product::findOrFail($id);
        return view('home.product_details', compact('product'));
    }
}
