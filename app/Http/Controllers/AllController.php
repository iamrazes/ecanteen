<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\All;
use App\Models\Product;
use App\Http\Requests\StoreAppRequest;
use App\Http\Requests\UpdateAppRequest;


class AllController extends Controller
{
    // all
    public function index()
    {
        $productsNewest = Product::where('status', 'Available')->latest()->get();

        return view('/app/all', compact('productsNewest'));
    }

    // all-food
    public function food()
    {

        $foods = Product::where(['category' => 'Makanan', 'status' => 'Available'])->inRandomOrder()->get();

        return view('/app/all-food', compact('foods'));
    }

    // all-drink
    public function drink()
    {

        $drinks = Product::where(['category' => 'Minuman', 'status' => 'Available'])->inRandomOrder()->get();

        return view('/app/all-drink', compact('drinks'));
    }
};
