@extends('layouts.blog')


@section('title')
    <title>Tentang Kami</title>
@endsection

@section('head')
@endsection

@section('content')
    <div class="flex flex-col gap-4 items-center my-2 md:mt-12 mb-24">
        <h1 class="text-4xl font-semibold text-center ">Kontak Kami</h1>
        <div class="flex flex-cols justify-center text-left mt-4 md:mt-12 w-[280px] md:w-[600px] lg:w-[720px] px-2">
            <div>
                <div class="flex flex-row mb-12">
                    <a href="https://wa.wizard.id/ba580c"><span class="fab fa-whatsapp text-5xl mr-3"></span></a>
                    <div class="flex flex-col">
                        <a href="https://wa.wizard.id/ba580c">
                            <h2 class="text-xl font-semibold">WhatsApp</h2>
                        </a>
                        <p>+62 896-2772-1320
                    </div>
                </div>
                <div class="flex flex-row">
                    <a href="https://t.me/Expl123">
                        <span class="fab fa-telegram text-5xl mr-3"></span>
                    </a>
                    <div class="flex flex-col">
                        <a href="https://t.me/Expl123">
                            <h2 class="text-xl font-semibold">Telegram</h2>
                        </a>
                        <p>+62 896-2772-1320
                    </div>
                </div>
            </div>
            <div class="ml-12">
                <div class="flex flex-row mb-12">
                    <span class="fa fa-envelope text-5xl mr-3"></span>
                    <div class="flex flex-col">
                        <h2 class="text-xl font-semibold">Email</h2>
                        <p>mochrazesds@gmail.com
                    </div>
                </div>
                <div class="flex flex-row">
                    <span class="fa fa-phone text-5xl mr-3"></span>
                    <div class="flex flex-col">
                        <h2 class="text-xl font-semibold">Phone</h2>
                        <p>+62 896-2772-1320
                    </div>
                </div>
            </div>
            </p>
        </div>

    </div>
@endsection
