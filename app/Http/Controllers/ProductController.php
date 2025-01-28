<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $this->authorize('viewAny', Product::class);

        $products = Product::latest()->paginate(5);

        return view('products.index',compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Product::class);
        
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $this->authorize('create', Product::class);



        $request->validate([

            'name' => 'required',

            'detail' => 'required',

        ]);


        $request->merge(['resource_name' => "product"]);

        Product::create($request->all());



        return redirect()->route('products.index')

                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {

        $this->authorize('view', $product);

        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $this->authorize('update', $product);

        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
       $this->authorize('update', $product);

        $request->validate([

            'name' => 'required',

            'detail' => 'required',

        ]);

        $request->merge(['resource_name' => "product"]);


        $product->update($request->all());



        return redirect()->route('products.index')

                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $this->authorize('delete', $product);
        
        $product->delete();



        return redirect()->route('products.index')

                        ->with('success','Product deleted successfully');
    }
}
