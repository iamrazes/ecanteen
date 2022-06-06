@extends('layouts.app')

@section('title')
    <title>eCanteen | Jajan di Kantin Sekarang Bisa Online!</title>
@endsection

@section('content')
    <!-- Slideshow -->
    <!-- Aspect Ratio 1280x300 Format PNG -->
    <div class="flex justify-center">
        <div class="">
            <div class="mt-28 md:mt-20 lg:mt-24">
                <div class="slideshow">
                    <img src="{{ asset('img/1.png') }}"
                        class="object-cover rounded-xl invisible md:visible md:h-[240px] lg:w-[1024px] xl:w-[1280px] lg:h-[240px] xl:h-[300px]">
                </div>
                <div class="slideshow">
                    <img src="{{ asset('img/2.png') }}"
                        class="object-cover rounded-xl invisible md:visible md:h-[240px] lg:w-[1024px] xl:w-[1280px] lg:h-[240px] xl:h-[300px]">
                </div>
                <div class="slideshow">
                    <img src="{{ asset('img/3.png') }}"
                        class="object-cover rounded-xl invisible md:visible md:h-[240px] lg:w-[1024px] xl:w-[1280px] lg:h-[240px] xl:h-[300px]">
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <main>
        <!-- Terbaru -->
        <div class="flex justify-center mt-20 md:mt-4 lg:mt-8">
            <div class="container mx-auto my-auto">
                <div class="mx-2 py-2">
                    <h1 class="font-semibold text-lg">
                        TERBARU!!! <a href="#" class="text-sm text-[#72c2ff] font-bold">Lihat Semua</a>
                    </h1>
                </div>
                <div class="container mx-auto my-auto mt-4 shadow-md rounded-xl pb-8">
                    <div class="flex">
                        <div class="">
                            <img class="" src="{{ asset('img/trending.png') }}" alt="">
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-5 px-2 -ml-60 md:-ml-32 mt-8 md:mt-6 gap-2 md:gap-3 pr-3">
                            @foreach ( $productsNewest as $product )
                            <div class="flex flex-col justify-between bg-white border md:rounded-b-lg rounded-b-md shadow rounded-t-lg">
                                <img src="{{ asset('storage/ProductCoverImages/' . $product->cover) }}" alt=""
                                    class="rounded-br-xl rounded-t-lg object-cover h-[160px] w-[620px] md:h-[120px] md:w-[720px] lg:h-[200px]">
                                <p class="px-2 pt-2 font-semibold text-[14px]">{{$product->name}}</p>
                                <p class="px-2 pt-1 pb-2 font-bold text-[14px] text-[#72c2ff]">Rp. {{$product->price}}</p>
                                <div class="flex flex-wrap justify-center mb-2 mt-3 mx-2">
                                    <a
                                        href="{{route('show', ['category' => $product->category, 'name' => $product->name])}}"
                                        class="flex items-center justify-center bg-gradient-to-r from-[#72c2ff] to-[#7277ff] hover:bg-white text-white text-sm rounded-md h-[32px] w-[128px]"><span class="fa fa-shopping-cart"></span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Makanan -->
        <div class="flex justify-center mt-20 md:mt-4 lg:mt-8">
            <div class="container mx-auto my-auto">
                <div class="mx-2 py-2">
                    <h1 class="font-semibold text-lg">
                        MAKANAN <a href="#" class="text-sm text-[#72c2ff] font-bold">Lihat Semua</a>
                    </h1>
                </div>
                <div class="container mx-auto my-auto mt-4 shadow-md rounded-xl pb-8">
                    <div class="flex">
                        <div class="">
                            <img class="" src="{{ asset('img/trending.png') }}" alt="">
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-5 px-2 -ml-60 md:-ml-32 mt-8 md:mt-6 gap-2 md:gap-3 pr-3">
                            @foreach ( $foods as $product )
                            <div class="flex flex-col justify-between bg-white md:rounded-b-lg border rounded-b-md shadow rounded-t-lg">
                                <img src="{{ asset('storage/ProductCoverImages/' . $product->cover) }}" alt=""
                                    class="rounded-br-xl rounded-t-lg object-cover h-[160px] w-[620px] md:h-[120px] md:w-[720px] lg:h-[200px]">
                                <p class="px-2 pt-2 font-semibold text-[14px]">{{$product->name}}</p>
                                <p class="px-2 pt-1 pb-2 font-bold text-[14px] text-[#72c2ff]">Rp. {{$product->price}}</p>
                                <div class="flex flex-wrap justify-center mb-2 mt-3 mx-2">
                                    <a
                                        href="{{route('show', ['category' => $product->category, 'name' => $product->name])}}"
                                        class="flex items-center justify-center bg-gradient-to-r from-[#72c2ff] to-[#7277ff] text-white text-sm rounded-md h-[32px] w-[128px]"><span class="fa fa-shopping-cart"></span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Minuman -->
        <div class="flex justify-center mt-20 md:mt-4 lg:mt-8">
            <div class="container mx-auto my-auto">
                <div class="mx-2 py-2">
                    <h1 class="font-semibold text-lg">
                        MINUMAN <a href="#" class="text-sm text-[#72c2ff] font-bold">Lihat Semua</a>
                    </h1>
                </div>
                <div class="container mx-auto my-auto mt-4 shadow-md rounded-xl pb-8">
                    <div class="flex">
                        <div class="">
                            <img class="" src="{{ asset('img/trending.png') }}" alt="">
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-5 px-2 -ml-60 md:-ml-32 mt-8 md:mt-6 gap-2 md:gap-3 pr-3">
                            @foreach ( $drinks as $product )
                            <div class="flex flex-col justify-between bg-white md:rounded-b-lg border rounded-b-md shadow rounded-t-lg">
                                <img src="{{ asset('storage/ProductCoverImages/' . $product->cover) }}" alt=""
                                    class="rounded-br-xl rounded-t-lg object-cover h-[160px] w-[620px] md:h-[120px] md:w-[720px] lg:h-[200px]">
                                <p class="px-2 pt-2 font-semibold text-[14px]">{{$product->name}}</p>
                                <p class="px-2 pt-1 pb-2 font-bold text-[14px] text-[#72c2ff]">Rp. {{$product->price}}</p>
                                <div class="flex flex-wrap justify-center mb-2 mt-3 mx-2">
                                    <a
                                        href="{{route('show', ['category' => $product->category, 'name' => $product->name])}}"
                                        class="flex items-center justify-center bg-gradient-to-r from-[#72c2ff] to-[#7277ff] text-white text-sm rounded-md h-[32px] w-[128px]"><span class="fa fa-shopping-cart"></span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("slideshow");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 6000); // Change image every 2 seconds
    }
</script>
@endsection
