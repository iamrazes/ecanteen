@extends('layouts.app')

@section('title')
    <title>eCanteen - Transaksi</title>
@endsection

@section('content')


    @forelse ($transactions as $transaction)
        {{-- Tampilan Pembeli --}}
        @if (Auth::user()->role == 'Buyer')
            <div class="flex justify-center">
                <div class="mx-auto my-auto mt-28 md:mt-20 lg:mt-24">
                    <h1 class="text-xl mb-2 mx-1 font-semibold">TRANSAKSI</h1>
                    {{-- loop --}}
                    @foreach ($transactions as $transaction)
                        <div class="rounded-lg shadow-lg px-4 py-4 my-2 bg-white">
                            <div class="flex">
                                <div class="flex flex-row justify-between items-start py-4 gap-4">
                                    <div>
                                        <img src="{{ asset('storage/ProductCoverImages/' . $transaction->product->cover) }}"
                                            alt="" class="w-32 h-32 rounded-lg object-cover">
                                    </div>
                                    <div class="flex flex-col w-[160px] md:w-[480px] ">
                                        <p class="text-lg font-semibold"><span>{{ $transaction->product->name }}</span>
                                        </p>
                                        <p class="text-[#72c2ff] font-semibold">Rp. <span>{{ $transaction->price }}</span>
                                        </p>
                                        <p class="my-1">Pembeli : <span>{{ $transaction->buyer->name }}</span></p>
                                        <p class="my-1">Tanggal : <span>{{ $transaction->created_at }}</span></p>
                                    </div>
                                    <div class="flex flex-col justify-center text-center gap-1">
                                        <p class="text-left">Status :</p>
                                        @if ($transaction->status == 'Dipesan')
                                            <p class="bg-gray-400 w-32 text-white rounded px-4 py-1">Dipesan</p>
                                        @endif
                                        @if ($transaction->status == 'Diproses')
                                            <p class="bg-blue-500 w-32 text-white rounded px-4 py-1">Diproses</p>
                                        @endif
                                        @if ($transaction->status == 'Berhasil')
                                            <p class="bg-green-500 w-32 text-white rounded px-4 py-1">Berhasil</p>
                                        @endif
                                        @if ($transaction->status == 'Dibatalkan')
                                            <p class="bg-red-600 w-32 text-white rounded px-4 py-1">Dibatalkan</p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <form action="{{ route('transactions.dibatalkan') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $transaction->product->id }}">
                                <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                <button class="bg-red-600 w-32 text-white rounded px-4 py-2">Batalkan</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif


        @if (Auth::user()->role == 'Seller')
            {{-- Tampilan Pedagang --}}
            <div class="flex justify-center">
                <div class="mx-auto my-auto mt-28 md:mt-20 lg:mt-24">

                    <h1 class="text-xl mb-2 mx-1 font-semibold">TRANSAKSI</h1>
                    {{-- loop --}}
                    @foreach ($sellerTransactions as $transaction)
                        <div class="rounded-lg shadow-lg px-4 py-4 bg-white my-2">
                            <div class="flex">
                                <div class="flex flex-row justify-between items-start py-4 gap-4">
                                    <div>
                                        <img src="{{ asset('storage/ProductCoverImages/' . $transaction->product->cover) }}"
                                            alt="" class="w-32 h-32 rounded-lg object-cover">
                                    </div>
                                    <div class="flex flex-col w-[160px] md:w-[480px] ">
                                        <div class="text-lg font-semibold"><span>{{ $transaction->product->name }}</span>
                                        </div>
                                        <div class="text-[#72c2ff] font-semibold">Rp.
                                            <span>{{ $transaction->price }}</span>
                                        </div>
                                        <div class="my-1">Pembeli : <span>{{ $transaction->buyer->name }}</span>
                                        </div>
                                        <div class="my-1">Tanggal : <span>{{ $transaction->created_at }}</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col justify-center text-center gap-1">
                                        <p class="text-left">Status :</p>
                                        @if ($transaction->status == 'Dipesan')
                                            <p class="bg-gray-400 w-32 text-white rounded px-4 py-1">Dipesan</p>
                                        @endif
                                        @if ($transaction->status == 'Diproses')
                                            <p class="bg-blue-500 w-32 text-white rounded px-4 py-1">Diproses</p>
                                        @endif
                                        @if ($transaction->status == 'Berhasil')
                                            <p class="bg-green-500 w-32 text-white rounded px-4 py-1">Berhasil</p>
                                        @endif
                                        @if ($transaction->status == 'Dibatalkan')
                                            <p class="bg-red-600 w-32 text-white rounded px-4 py-1">Dibatalkan</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row justify-center text-center mt-2 gap-2">
                                <form action="{{ route('transactions.diterima') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $transaction->product->id }}">
                                    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                    <button class="bg-blue-500 w-32 text-white rounded px-4 py-2">Terima</button>
                                </form>
                                <form action="{{ route('transactions.berhasil') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $transaction->product->id }}">
                                    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                    <button class="bg-green-500 w-32 text-white rounded px-4 py-2">Berhasil</button>
                                </form>
                                <form action="{{ route('transactions.dibatalkan') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $transaction->product->id }}">
                                    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                    <button class="bg-red-600 w-32 text-white rounded px-4 py-2">Batalkan</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    @empty
        <div class="flex flex-col text-center items-center justify-center my-48 md:my-48 lg:my-48">
            <h1 class="font-semibold  mx-8 text-3xl text-slate-400">TIDAK ADAK TRANSAKSI BERLANGSUNG</h1>
            <p class="text-slate-400 mt-2">Segera berbelanja di eCanteen!</p>
        </div>
    @endforelse


@endsection
