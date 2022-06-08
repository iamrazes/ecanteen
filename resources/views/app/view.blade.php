@extends('layouts.app')

@section('title')
<title>eCanteen</title>
@endsection

@section('content')


<div class="flex justify-center">
    <div class="mx-auto my-auto mt-28 md:mt-20 lg:mt-24">
        <div class="flex justify-between px-2 py-1">
            <a href="{{ url()->previous() }}"><span class="fa fa-arrow-left text-lg"></span></a>
            <a href="{{route('app')}}"><span class="fa fa-home text-lg"></span></a>
        </div>
        <div class="rounded-xl  shadow-xl px-4 pt-2 pb-4 bg-white">
            <div
                class="flex flex-col md:flex-row justify-center md:justify-between items-center md:items-start py-4 gap-4">
                <div class="flex border-4 border-blue-300 rounded-xl bg-blue-300">
                    <img src="{{ asset('storage/ProductCoverImages/' . $product->cover) }}" alt=""
                        class="rounded-lg w-[300px] h-[300px] md:w-[380px] md:h-[380px] lg:w-[420px] lg:h-[420px] object-cover">
                </div>
                <div class="flex flex-col-reverse lg:flex-row">
                    <div class="flex flex-col w-[300px] mt-4 md:mt-0 text-clip">
                        <p>Deskripsi Barang :</p>
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="flex flex-col w-[300px] md:justify-start md:my-0 mb-2 ml-0 lg:ml-4">
                        <div class="flex flex-col gap-1 ">
                            <p class="font-bold text-lg md:text-2xl">{{$product->name}}</p>
                            <p class="font-semibold text-[#72c2ff] md:text-2xl">Rp. {{$product->price}}</p>
                            <p>Stock : <span class="font-semibold">{{$product->stock}}</span></p>
                        </div>
                        <div class="flex flex-col items-center mb-2 mt-4">
                            <a href=""
                                class="bg-gradient-to-r from-[#72c2ff] to-[#7277ff] text-white mt-4 px-4 py-2 rounded-md"><span class="fa fa-shopping-cart pr-2"></span>BELI
                                SEKARANG</a>
                            <a href="{{route('app')}}" class="text-sm mt-2 text-gray-400">Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="font-semibold text-[#72c2ff] mt-4">Rekomendasi</p>
                <div class="flex flex-wrap gap-2 lg:gap-4 mt-4 justify-center">
                    @foreach ( $productsNewest as $product)
                    <a href="{{route('show', ['category' => $product->category, 'name' => $product->name])}}" class="w-24 h-24 md:w-24 md:h-24 lg:w-32 lg:h-32">
                        <img src="{{ asset('storage/ProductCoverImages/' . $product->cover) }}" class="rounded-md w-32 h-24 lg:h-32 object-cover " alt="">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
