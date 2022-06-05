@extends('layouts.auth')

@section('title')
    <title>eCanteen - Masuk</title>
@endsection

@section('head')
@endsection

@section('content')
    <!-- Authorization -->
    <div class="flex flex-col md:flex-col justify-center items-center mb-24 md:my-[60px]">
        <div class="text-[52px] font-bold text-white my-8 "><a href="{{ route('welcome') }}">
                eCanteen</a>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="container w-[300px] md:w-[380px] px-3 py-3 bg-white rounded-md shadow-xl">
                <div class="flex flex-col gap-2">
                    <p class="text-sm text-slate-500">Email</p>
                    <input class="border border-gray-300 rounded-lg h-[32px] text-gray-600 text-sm px-2" type="email"
                        id="email" name="email">
                    <p class="text-sm text-slate-500">Password</p>
                    <input class="border border-gray-300 rounded-lg h-[32px] text-gray-600 text-sm px-2" type="password"
                        id="password" name="password">
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="flex flex-col items-center mt-4">

                    <button
                        class="rounded-lg bg-gradient-to-r from-[#72c2ff] to-[#7277ff] font-semibold text-white w-[108px] h-[38px]"
                        href="{{ __('Log in') }}">Masuk</button>

                    <p class="text-[12px] text-slate-500 mt-3 text-center">Belum mempunyai akun eCanteen? coba <span><a
                                href="{{ route('register') }}" class="font-semibold text-blue-500">Daftar</a></span>
                        terlebih
                        dahulu!</p>

                    @if (Route::has('password.request'))
                        <p class="text-[12px] text-slate-500 text-center">Lupa dengan password anda? coba <span><a
                                    href="{{ route('password.request') }}" class="font-semibold text-blue-500">Lupa
                                    Password</a></span> sekarang!</p>
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
