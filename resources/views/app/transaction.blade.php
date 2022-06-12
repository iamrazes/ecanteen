@extends('layouts.app')

@section('title')
<title>eCanteen - Transaksi</title>
@endsection

@section('content')

{{-- Tampilan Pembeli --}}
@if (Auth::user()->role == 'Buyer')
<div class="flex justify-center">
    <div class="mx-auto my-auto mt-28 md:mt-20 lg:mt-24">
        {{-- loop --}}
        @foreach ($transactions as $transaction)

        <div class="rounded-lg shadow-lg px-4 py-4 my-2 bg-white">
            <div class="flex">
                <div class="flex flex-row justify-between items-start py-4 gap-4">
                        <div>
                            <img src="{{ asset('storage/ProductCoverImages/' . $transaction->product->cover) }}" alt="" class="w-32 h-32 rounded-lg object-cover">
                        </div>
                        <div class="flex flex-col w-[160px] md:w-[480px] ">
                            <p class="text-lg font-semibold"><span>{{ $transaction->product->name }}</span></p>
                            <p class="text-[#72c2ff] font-semibold">Rp. <span>{{ $transaction->price }}</span></p>
                            <p class="my-1">Pembeli : <span>{{ $transaction->buyer->name }}</span></p>
                            <p class="my-1">Tanggal : <span>{{ $transaction->created_at }}</span></p>
                        </div>
                        <div class="flex flex-col justify-center text-center gap-1">
                            <p class="text-left">Status :</p>
                            <p class="bg-gray-400 text-white rounded px-4 py-1">Dipesan</p>
                            {{-- <p class="bg-blue-500 text-white rounded px-4 py-1">Diproses</p> --}}
                            {{-- <p class="bg-green-500 text-white rounded px-4 py-1">Berhasil</p> --}}
                            {{-- <p class="bg-red-600 text-white rounded px-4 py-1">Dibatalkan</p> --}}
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endif


@if (Auth::user()->role == 'Seller')

{{-- Tampilan Pedagang --}}
<div class="flex justify-center">
    <div class="mx-auto my-auto mt-28 md:mt-20 lg:mt-24">
        {{-- loop --}}
        <div class="rounded-lg shadow-lg px-4 py-4 bg-white">
            <div class="flex">
                <div class="flex flex-row justify-between items-start py-4 gap-4">
                        <div>
                            <img src="/public/img1.jpg" alt="" class="w-32 h-32 rounded-lg object-cover">
                        </div>
                        <div class="flex flex-col w-[160px] md:w-[480px] ">
                            <div class="text-lg font-semibold"><span>Product Name</span></div>
                            <div class="text-[#72c2ff] font-semibold">Rp. <span></span></div>
                            <div  class="my-1">Pembeli : <span></span></div>
                            <div class="my-1">Tanggal : <span></span></div>
                        </div>
                        <div class="flex flex-col justify-center text-center gap-1">
                            <p class="text-left">Status</p>
                            <p class="bg-gray-400 text-white rounded px-4 py-1">Dipesan</p>
                            {{-- <p class="bg-blue-500 text-white rounded px-4 py-1">Diproses</p> --}}
                            {{-- <p class="bg-green-500 text-white rounded px-4 py-1">Berhasil</p> --}}
                            {{-- <p class="bg-red-600 text-white rounded px-4 py-1">Dibatalkan</p> --}}
                        </div>
                </div>
            </div>
            <div class="flex flex-row justify-center text-center mt-2 gap-2">
                <button class="bg-blue-500 text-white rounded px-4 py-2">Terima</button>
                <button class="bg-green-500 text-white rounded px-4 py-2">Berhasil</button>
                <button class="bg-red-600 text-white rounded px-4 py-2">Batalkan</button>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
