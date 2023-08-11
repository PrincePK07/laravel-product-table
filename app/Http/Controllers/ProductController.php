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
        $commodity = Product::latest()->paginate(5);

        return view('items.index',compact('commodity'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validating fields
        $request->validate([
          'name'=>['required','min:3'],
          'status'=>['required'],
          'category'=>['required'],
          'details'=>['required', 'min:3']
          ]);
          //create a new Product row in db
        Product::create($request->all());

        // redirect the user
        return redirect()->route('products.index')->with('success','Product created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('items.show',compact('product'));
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
        //
    }
}
