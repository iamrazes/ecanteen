@extends('layouts.blog')

@section('title')
    <title>Selamat Datang di eCanteen</title>
@endsection

@section('head')
@endsection

@section('content')
    <!-- Header -->
    <div class="container mx-auto my-auto mt-12">
        <div class="flex justify-center">
            <div class="">
                <div class="mb-12">
                    <div class="flex justify-center">
                        <h1
                            class="text-6xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#72c2ff] to-[#7277ff] ">
                            eCanteen
                        </h1>
                    </div>
                    <div
                        class="flex justify-center text-[16px] font-bold bg-clip-text text-transparent bg-gradient-to-r from-[#72c2ff] to-[#7277ff] pt-1">
                        <p>UNIVERSITAS PUTRA INDONESIA</p>
                    </div>
                    <div class="flex justify-center text-[14px] font-semibold text-gray-400">
                        <p>ONLINE CANTEEN & DIGITAL WALLET</p>
                    </div>
                </div>
                <div class="">
                    <img src="{{ asset('img/header.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Authorization -->
    <div class="bg-slate-300 flex justify-center mt-16 py-12">
        <div class="flex flex-col gap-2 items-center text-center">
            <div class="w-72 h-16">
                <p>
                    Untuk menggunakan eCanteen harap melakukan login terlebih dahulu!
                </p>
            </div>
            <div class="flex flex-row gap-4">
                @auth
                    @if (Auth::user())
                        <a class="w-[320px] py-2 bg-gradient-to-r from-[#72c2ff] to-[#7277ff] text-white rounded font-semibold "
                            href="{{ route('app') }}">
                            Menuju Aplikasi
                        </a>
                    @endif
                @else
                    <a class="w-[120px] py-2 bg-gradient-to-r from-[#72c2ff] to-[#7277ff] text-white rounded font-semibold "
                        href="{{ route('login') }}">
                        Masuk
                    </a>
                    <a class="w-[120px] py-2 bg-gradient-to-r from-[#72c2ff] to-[#7277ff] text-white rounded font-semibold "
                        href="{{ route('register') }}">
                        Daftar
                    </a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="flex mx-auto mt-12 my-auto justify-center">
        <div class="flex flex-col gap-4">
            <div class="flex flex-col md:flex-row lg:flex-row items-center">
                <img src="{{ asset('img/header-a.png') }}" alt=""
                    class="md:-mr-32 invisible md:visible -mb-[22rem] md:mb-0">
                <div>
                    <div
                        class="flex flex-col bg-white drop-shadow-lg rounded-xl pb-4 py-3 w-[320px] md:w-[380px] lg:w-[520px]">
                        <h2 class="text-2xl mx-4 my-3">Apa itu eCanteen?</h2>
                        <p class="mx-4 my-2">eCanteen adalah kantin online dan wallet digital yang berkolaborasi
                            bersama untuk kantin lokal
                            sekitar anda.</p>
                        <div class="flex justify-center">
                            <a class="w-[200px] flex justify-center mx-4 my-3 mt-6 px-6 py-2 bg-gradient-to-r
                            from-[#72c2ff] to-[#7277ff] text-white rounded"
                                href="{{ route('about') }}">
                                Pelajari
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row lg:flex-row items-center">
                <div>
                    <div
                        class="flex flex-col bg-white drop-shadow-lg rounded-xl pb-4 py-3 w-[320px] md:w-[380x] lg:w-[520px]">
                        <h2 class="text-2xl mx-4 my-3">Cara Menggunakan eCanteen?</h2>
                        <p class="mx-4 my-2">Pelajari lebih lanjut tentang menggunakan aplikasi eCanteen dengan menekan
                            tombol berikut!.</p>
                        <div class="flex justify-center">
                            <a class="w-[200px] flex justify-center mx-4 my-3 mt-6 px-6 py-2 bg-gradient-to-r
                            from-[#72c2ff] to-[#7277ff] text-white rounded"
                                href="{{ route('about') }}">
                                Pelajari
                            </a>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('img/header-b.png') }}" alt=""
                    class="md:-ml-32 invisible md:visible -mb-[22rem] md:mb-0">
            </div>
        </div>

    </div>
@endsection
