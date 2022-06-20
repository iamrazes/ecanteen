@extends('layouts.app')

@section('title')
    <title>eCanteen - Jajan di Kantin Sekarang Bisa Online!</title>
@endsection

@section('head')
@endsection

@section('content')
<div class="flex justify-center mt-28 md:mt-20 lg:mt-24">
    <div class="container mx-auto my-auto">
        <div class="mx-2 py-2">
            <h1 class="font-semibold text-lg">
                MAKANAN
            </h1>
        </div>
        <div class="container mx-auto my-auto mt-4 shadow-md rounded-xl pb-8">
            <div class="flex">
                <div>
                    <img src="{{ asset('img/trending.png') }}" alt="">
                </div>
                <div class="grid grid-cols-2 md:grid-cols-5 px-2 -ml-60 md:-ml-32 mt-8 md:mt-6 gap-2 md:gap-3 pr-3">
                    @foreach ( $foods as $product )
                    <div class="flex flex-col justify-between bg-white md:rounded-b-lg border rounded-b-md shadow rounded-t-lg">
                        <img src="{{ asset('storage/ProductCoverImages/' . $product->cover) }}" alt=""
                            class="rounded-br-xl rounded-t-lg object-cover h-[160px] w-[620px] md:h-[120px] md:w-[720px] lg:h-[200px]">
                        <p class="px-2 pt-2 font-bold text-md md:text-sm lg:text-lg">{{$product->name}}</p>
                        <p class="px-2 pt-1 pb-2 font-bold text-sm lg:text-xl text-[#72c2ff]">Rp. {{number_format($product->price, 0, '.','.'),$product->price}}</p>
                        <div class="flex flex-wrap justify-center mb-2 mt-3 mx-2">
                            <a
                                href="{{route('show', ['category' => $product->category, 'id' => $product->id, 'name' => $product->name])}}"
                                class="flex items-center justify-center bg-gradient-to-r from-[#72c2ff] to-[#7277ff] text-white text-sm rounded-md h-[32px] w-[128px]"><span class="fa fa-shopping-cart"></span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
