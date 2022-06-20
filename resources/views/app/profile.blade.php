@extends('layouts.app')
@section('head')
    <title>eCanteen - {{ Auth::user()->name }}</title>
@endsection


@section('content')
    <div class="flex justify-center">
        @auth
            @if (Auth::user())
                <div class="mx-auto my-auto mt-32 md:mt-20 lg:mt-24 text-center w-[320px] px-1">
                    <div>
                        <span class="fa fa-user-circle text-[128px]"></span>
                    </div>
                    <div class="flex flex-col text-center mt-8">
                        <span class="font-bold text-2xl">{{ Auth::user()->name }}</span>
                        <span class="font-bold  mt-2 text-lg text-[#72c2ff]">{{ Auth::user()->nim }}</span>
                        <span class="flex justify-between font-bold my-2 rounded-lg border-2 px-2 py-2">
                            <span>SALDO :</span>
                            <span>Rp. {{ number_format(Auth::user()->saldo, 0, '.', '.'), Auth::user()->saldo }},-</span>
                        </span>
                        @if (Auth::user()->role == 'Admin')
                            <a class="flex font-bold justify-center mt-2 px-2 py-2 rounded-lg text-white border-2 border-slate-600 hover:border-slate-200 hover:bg-slate-200 hover:text-slate-600 bg-slate-600"
                                href="{{ route('dashboard') }}">DASHBOARD</a>
                        @endif
                        @if (Auth::user()->role == 'Seller')
                            <a class="flex font-bold justify-center mt-2 px-2 py-2 rounded-lg text-white border-2 border-slate-600 hover:border-slate-200 hover:bg-slate-200 hover:text-slate-600 bg-slate-600"
                                href="{{ route('dashboard') }}">DASHBOARD</a>
                        @endif

                    </div>
                    <div class="flex flex-wrap gap-16 mt-12 justify-center">
                        <a href="{{ route('historys') }}" class="flex flex-col hover:text-blue-300 transition"><span class="fa fa-history text-6xl mb-1"></span>Riwayat</a>
                        <a href="{{ route('transactions') }}" class="flex flex-col hover:text-blue-300 transition"><span
                                class="fa fa-exchange text-6xl mb-1"></span>Transaksi</a>
                        <a class="flex flex-col text-slate-200"><span class="fa fa-gear text-6xl mb-1"></span>Settings</a>
                        <a href="{{ route('app') }}" class="flex flex-col hover:text-blue-300 transition"><span
                                class="fa fa-bucket text-6xl mb-1"></span>Belanja</a>
                        <a class="flex flex-col text-slate-200"><span class="fa fa-phone text-6xl mb-1"></span>Bantuan</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button href="{{ route('logout') }}" class="flex flex-col hover:text-blue-300 transition">
                                <span class="fa fa-sign-out text-6xl mb-1"></span>Keluar</button>
                        </form>
                    </div>
                </div>
            @endif
        @endauth
    </div>
@endsection
