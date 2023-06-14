<?php

namespace App\Http\Controllers\Admin;

use App\Models\Images;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::get();
        return view('dashboard.products')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // title price and description categorie_id
        $product = Products::create([
            'categories_id' => $request->categories_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'type' => $request->type,
            'price' => $request->price,
        ]);
        // use product id to store the images[] with product id from request in the table Images and store the files in public.images
        $uploadedImages = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('images'), $imageName);
                $uploadedImages[] = [
                    'products_id' => $product->id,
                    'path' => $imageName,
                ];
            }
            Images::insert($uploadedImages);
        }

        return redirect()->back()->with('message', 'product add successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        $products = Products::get();
        return view('dashboard.products')->with(['products' => $products, 'product' => $product]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->back()->with('');
    }
}
