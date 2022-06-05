@extends('layouts.auth')

@section('title')
    <title>eCanteen - Daftar</title>
@endsection

@section('head')
@endsection

@section('content')
    <!-- Authorization -->
    <div class="flex flex-col md:flex-col justify-center items-center mb-12">
        <div class="text-[52px] font-bold text-white my-8 "><a href="{{ route('welcome') }}">
                eCanteen</a>
        </div>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="container w-[300px] md:w-[380px] px-3 py-3 bg-white rounded-md shadow-xl">
                <div class="flex flex-col gap-2">

                    <p class="text-sm text-slate-500">Nama Lengkap</p>
                    <input class="border border-gray-300 rounded-lg h-[32px] text-gray-600 text-sm px-2" type="text"
                        id='name' name='name'>

                    <p class="text-sm text-slate-500">Nama Panggilan</p>
                    <input class="border border-gray-300 rounded-lg h-[32px] text-gray-600 text-sm px-2" type="text"
                        id='nickname' name='nickname' maxlength="9">

                    <p class="text-sm text-slate-500">Email</p>
                    <input class="border border-gray-300 rounded-lg h-[32px] text-gray-600 text-sm px-2" type="email"
                        id='email' name='email'>

                    <p class="text-sm text-slate-500">NIM</p>
                    <input class="border border-gray-300 rounded-lg h-[32px] text-gray-600 text-sm px-2" type="number"
                        id='nim' name='nim'>

                    <p class="text-sm text-slate-500">Password</p>
                    <input class="border border-gray-300 rounded-lg h-[32px] text-gray-600 text-sm px-2" type="password"
                        id='password' name='password'>

                    <p class="text-sm text-slate-500">Konfirmasi Password</p>
                    <input class="border border-gray-300 rounded-lg h-[32px] text-gray-600 text-sm px-2" type="password"
                        id='password_confirmation' name='password_confirmation'>

                </div>
                <div class="flex flex-col items-center mt-4">
                    <button
                        class="rounded-lg bg-gradient-to-r from-[#72c2ff] to-[#7277ff] font-semibold text-white w-[108px] h-[38px]"
                        href="{{ __('Register') }}">Daftar</button>

                    <p class="text-[12px] text-slate-500 mt-3 text-center">Sudah mempunyai akun eCanteen? lakukan <span><a
                                href="{{ route('login') }}" class="font-semibold text-blue-500">Login</a></span> untuk
                        menggunakan eCanteen!</p>
                </div>
        </form>
    </div>
    </div>
@endsection
