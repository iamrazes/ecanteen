<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Product;
use App\Http\Requests\StoreAppRequest;
use App\Http\Requests\UpdateAppRequest;


class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsNewest = Product::latest()->limit(5)->get();

        $foods = Product::where('category', 'Makanan')->latest()->limit(5)->get();
        $drinks = Product::where('category', 'Minuman')->latest()->limit(5)->get();
        return view('app',compact('productsNewest', 'foods', 'drinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function show($category, $name)
    {
        $product = Product::where(['category' => $category, 'name' => $name])->first();
        $productsNewest = Product::latest()->limit(6)->get();
        return view('app.view',compact('product','productsNewest'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function edit(App $app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppRequest  $request
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppRequest $request, App $app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function destroy(App $app)
    {
        //
    }
}
