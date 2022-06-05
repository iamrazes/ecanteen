<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.products.index',compact('dtproduct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cover' => ['required', 'image']
        ]);

         //  dd($request->all());

         $randomString = Str::random(10);
         $imgName = $randomString . str_replace(' ', '-', $request->file('cover')->getClientOriginalName());
         $dir = 'public/ProductCoverImages';
         // dd($imgName);

         Product::create([
            'name' => $request->name,
            'category'=> $request->category,
            'price'=> $request->price,
            'stock'=> $request->stock,
            'description'=> $request->description,
            'cover'=> $imgName,
            'status'=> $request->status,
            ]);

         $request->file('cover')->storeAs($dir, $imgName);

        return redirect()->route('admin.products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if (Storage::disk('local')->exists('public/ProductCoverImages/' . $product->cover)) {
            Storage::disk('local')->delete('public/ProductCoverImages/' . $product->cover);
        }

        $product->delete();

        return redirect()->route('admin.products')->with('status', 'Data has been removed!');
    }
}
