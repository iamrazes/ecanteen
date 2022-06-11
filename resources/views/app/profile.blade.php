@extends('layouts.app')
@section('head')
{{-- <title>eCanteen - {{  $users->name }}</title> --}}
@endsection


@section('content')
<div class="flex justify-center">
    <div class="mx-auto my-auto mt-32 md:mt-20 lg:mt-24 text-center w-[320px] px-1">
        <div>
            <span class="fa fa-user-circle text-[128px]"></span>
        </div>
        <div class="flex flex-col text-center mt-8">
            {{-- <span class="font-bold text-2xl">MUHAMMAD DAGISTAN SILAWANE</span> --}}
            <span class="font-bold text-2xl">{{ $dtusers->name }}</span>
            {{-- <span class="font-bold text-lg text-[#72c2ff]">207200000</span> --}}
            <span class="font-bold text-lg text-[#72c2ff]">{{  $dtusers->nim }}</span>
            <span class="flex justify-between font-bold my-2 rounded-lg border-2 px-2 py-2">
                <span>SALDO :</span>
                {{-- <span>Rp. 420.690</span> --}}
                <span>{{  $dtusers->saldo }}</span>
            </span>
        </div>
        <div class="flex flex-wrap gap-16 mt-12 justify-center">
            <a href="#" class="flex flex-col"><span class="fa fa-bucket text-6xl mb-1"></span>Belanja</a>
            <a href="#" class="flex flex-col"><span class="fa fa-exchange text-6xl mb-1"></span>Transaksi</a>
            <a href="#" class="flex flex-col"><span class="fa fa-phone text-6xl mb-1"></span>Bantuan</a>
            <a class="flex flex-col text-slate-200"><span class="fa fa-history text-6xl mb-1"></span>Riwayat</a>
            <a class="flex flex-col text-slate-200"><span class="fa fa-message text-6xl mb-1"></span>Chat</a>
            <a href="#" class="flex flex-col"><span class="fa fa-sign-out text-6xl mb-1"></span>Keluar</a>
        </div>
    </div>
</div>

@endsection
