<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Manufacturer;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::All();

        return view('product.index', ['list' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('title', 'id');
        $manufacturers = Manufacturer::all()->pluck('title', 'id');

        return view ('product.form', ['categories' => $categories, 'manufacturers' => $manufacturers]);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $product = new Product();
    $product->title = $request->title;
    $product->description = $request->description;
    $product->category_id = $request->category_id;
    $product->manufacturer_id = $request->manufacturer_id;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->image_url = $request->image_url;

    $product->save();

    return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        return view('product.show', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all()->pluck('title', 'id');
        $manufacturers = Manufacturer::all()->pluck('title', 'id');

        return view ('product.form', ['categories' => $categories, 'manufacturers' => $manufacturers, 'product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->title = $request->title;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->image_url = $request->image_url;

        $product->update();

    return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
       $product->delete();
       return redirect()->route('products.index');
    }
}
