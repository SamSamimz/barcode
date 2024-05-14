<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at','DESC')->get();
        return view('home',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|integer',
            'description' => 'nullable|string|min:12'
        ]);
        $number = mt_rand(100000000,9999999999);
        
        if($this->codeExists($number)) {
            $number = mt_rand(100000000,9999999999);
        }
        $product = $request->all();
        $product['product_code'] = $number;
        Product::create($product);
        return to_route('products.index');
    }

    public function codeExists($code) {
        return Product::whereProductCode($code)->exists();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }
}
