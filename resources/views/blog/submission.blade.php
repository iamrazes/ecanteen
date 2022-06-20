@extends('layouts.blog')


@section('title')
    <title>Pengajuan Dagangan</title>
@endsection

@section('head')
@endsection

@section('content')
    <!-- Body -->
    <div class="flex flex-col items-center my-2 md:my-12">
        <h1 class="text-4xl font-semibold text-center">Pengajuan Dagangan</h1>
        <p class="my-4 text-center px-8">
            Anda mempunyai bisnis kecil? dan ingin barang anda dijual di aplikasi eCanteen?
            <br>
            eCanteen memfasilitasi setiap bisnis kecil dari anggota Universitas Putra Indonesia dan pasarkan segera
            bisnismu!
        </p>

        @if (session('status'))
            <div class="alert bg-green-600  rounded-xl mt-2 py-3 px-4 text-white text-lg alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                {{-- <h5><i class="icon fas fa-check"></i> Alert!</h5> --}}
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('blog.submission.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap mt-4 md:mt-8 gap-4 px-2 justify-center items-center">
                <div>
                    <p class="text-sm mb-1">Nama Lengkap</p>
                    <input type="text" name="name" class="rounded-lg py-2 px-2 border-2 border-slate-500 w-64 md:w-80">
                </div>
                <div>
                    <p class="text-sm mb-1">Nama Barang</p>
                    <input type="text" name="product" class="rounded-lg py-2 px-2 border-2 border-slate-500 w-64 md:w-80">
                </div>
            </div>
            <div class="flex flex-wrap mt-4 gap-4 px-2 justify-center items-center">
                <div>
                    <p class="text-sm mb-1">Harga Barang</p>
                    <input type="text" name="price" class="rounded-lg py-2 px-2 border-2 border-slate-500 w-64 md:w-80">
                </div>
                <div>
                    <p class="text-sm mb-1">No. WhatsApp</p>
                    <input type="text" name="whatsapp" class="rounded-lg py-2 px-2 border-2 border-slate-500 w-64 md:w-80">
                </div>
            </div>
            <div class="flex flex-col mt-4 justify-center items-center">
                <p class="text-sm mb-1 text-left">Keterangan</p>
                <textarea name="description" id="" cols="30" rows="10"
                    class="py-2 px-2 rounded-lg border-2 border-slate-500 w-64 md:w-[655px]">
                </textarea>
                <button
                    class="mt-4  mb-4 w-[120px] py-2 bg-gradient-to-r from-[#72c2ff] to-[#7277ff] text-white rounded font-semibold"
                    type="submit">SUBMIT
                </button>
            </div>
        </form>
    </div>
@endsection
