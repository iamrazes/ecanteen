@extends('layouts.blog')

@section('title')
<title>Tentang Kami</title>
@endsection

@section('head')
@endsection

@section('content')
<div class="flex flex-col gap-4 items-center my-2 md:mt-12 mb-24">
    <h1 class="text-4xl font-semibold text-center">Tentang eCanteen</h1>
    <div class="flex flex-col text-left mt-4 md:mt-12 w-[280px] md:w-[600px] lg:w-[720px] px-2">
        <h2 class="text-xl font-semibold text-center">Apa Itu eCanteen?</h2><br>
        <p>
            eCanteen adalah singkatan dari Electronic Canteen. eCanteen merupakan sebuah platform jual beli online yang menyediakan kemudahan bagi para pengguna dalam melakukan pemesanan maupun pembelian makanan dan minuman.
        </p>
    </div>
    <div class="flex flex-col text-left mt-2 md:mt-8 w-[280px] md:w-[600px] lg:w-[720px] px-2">
        <h2 class="text-xl font-semibold text-center">Cara Menggunakan eCanteen?</h2><br>
        <ol class="angka">
            <li>
                Login/Register
            </li>
            <p>Pertama-tama hal yang harus di lakukan oleh penguna yaitu dengan melakukan login (bagi yang sudah melakukan registrasi)</p>
            <li>Pemesanan</li>
            <p>setelah login pemgguna akan di arahkan ke halaman utama dan dihalaman utama ini juga para pengguna dapat memilih produk yang akan di pesan sesuai kategorinya</p>
            <p>setelah melakukan pemesanan pengguna tinggal melakukan pembayaran dengan nominal yang sudah tertera</p>
        </ol>
    </div>
    <div class="flex flex-col text-left mt-2 md:mt-8 w-[280px] md:w-[600px] lg:w-[720px] px-2">
        <h2 class="text-xl font-semibold text-center">Keuntungan Menggunakan eCanteen?</h2><br>
        <ol class="angka">
            <li>Mempercepat dan mempermudah pemesanan makanan dan minuman</li>
            <li>Pembelian makan dan minuman tidak lagi menggunakan uang tunai (cash)</li>
            <li>Mempermudah pengguna dalam melihat dan menentukan stock produk</li>
        </ol>
    </div>

    <h1 class="text-4xl font-semibold text-center mt-12">Tentang Developers</h1>
    <div class="flex flex-row text-left mt-4 md:mt-12 w-[320px] md:w-[600px] lg:w-[720px] px-2">
        <img src="{{ asset ('img/dev1.jpg') }}" alt="" class="w-24 h-24 rounded-xl mx-2">
        <div>
            <h2 class="text-xl font-semibold">Muhammad Dagistan Silawane</h2>
            <p class="flex flex-wrap gap-2 ">
                <a href="https://twitter.com" class="hover:text-blue-300"><span class="fab fa-twitter mr-1"></span>twitter</a>
                <a href="https://facebook.com" class="hover:text-blue-300"><span class="fab fa-facebook mr-1"></span>facebook</a>
                <a href="https://instagram.com" class="hover:text-blue-300"><span class="fab fa-instagram mr-1"></span>instagram</a>
                <a href="https://youtube.com" class="hover:text-blue-300"><span class="fab fa-youtube mr-1"></span>YouTube</a>
            </p>
            <p>
                CEO & Senior Programmer
            </p>
        </div>
    </div>
    <div class="flex flex-row text-left mt-4 md:mt-8 w-[320px] md:w-[600px] lg:w-[720px] px-2">
        <img src="{{ asset ('img/dev1.jpg') }}" alt="" class="w-24 h-24 rounded-xl mx-2">
        <div>
            <h2 class="text-xl font-semibold">Harya Noga Nagara</h2>
            <p class="flex flex-wrap gap-2">
                <a href="https://twitter.com" class="hover:text-blue-300"><span class="fab fa-twitter mr-1"></span>twitter</a>
                <a href="https://facebook.com" class="hover:text-blue-300"><span class="fab fa-facebook mr-1"></span>facebook</a>
                <a href="https://instagram.com" class="hover:text-blue-300"><span class="fab fa-instagram mr-1"></span>instagram</a>
                <a href="https://youtube.com" class="hover:text-blue-300"><span class="fab fa-youtube mr-1"></span>YouTube</a>
            </p>
            <p>
                CEO & Senior Programmer
            </p>
        </div>
    </div>
    <div class="flex flex-row text-left mt-4 md:mt-8 w-[320px] md:w-[600px] lg:w-[720px] px-2">
        <img src="{{ asset ('img/dev1.jpg') }}" alt="" class="w-24 h-24 rounded-xl mx-2">
        <div>
            <h2 class="text-xl font-semibold">Sulistiawaty</h2>
            <p class="flex flex-wrap gap-2">
                <a href="https://twitter.com" class="hover:text-blue-300"><span class="fab fa-twitter mr-1"></span>twitter</a>
                <a href="https://facebook.com" class="hover:text-blue-300"><span class="fab fa-facebook mr-1"></span>facebook</a>
                <a href="https://instagram.com" class="hover:text-blue-300"><span class="fab fa-instagram mr-1"></span>instagram</a>
                <a href="https://youtube.com" class="hover:text-blue-300"><span class="fab fa-youtube mr-1"></span>YouTube</a>
            </p>
            <p>
                CEO & Senior Programmer
            </p>
        </div>
    </div>
    <div class="flex flex-row text-left mt-4 md:mt-8 w-[320px] md:w-[600px] lg:w-[720px] px-2">
        <img src="{{ asset ('img/dev1.jpg') }}" alt="" class="w-24 h-24 rounded-xl mx-2">
        <div>
            <h2 class="text-xl font-semibold">M. Aliyansyah Arsy Darryl</h2>
            <p class="flex flex-wrap gap-2">
                <a href="https://twitter.com" class="hover:text-blue-300"><span class="fab fa-twitter mr-1"></span>twitter</a>
                <a href="https://facebook.com" class="hover:text-blue-300"><span class="fab fa-facebook mr-1"></span>facebook</a>
                <a href="https://instagram.com" class="hover:text-blue-300"><span class="fab fa-instagram mr-1"></span>instagram</a>
                <a href="https://youtube.com" class="hover:text-blue-300"><span class="fab fa-youtube mr-1"></span>YouTube</a>
            </p>
            <p>
                CEO & Senior Programmer
            </p>
        </div>
    </div>
</div>
@endsection
