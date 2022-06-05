@extends('layouts.blog')

@section('title')
<title>Tentang Kami</title>
@endsection

@section('head')
@endsection

@section('content')
<div class="flex flex-col gap-4 items-center my-2 md:mt-12 mb-24">
    <h1 class="text-4xl font-semibold text-center ">Tentang eCanteen</h1>
    <div class="flex flex-col text-left mt-4 md:mt-12 w-[280px] md:w-[600px] lg:w-[720px] px-2">
        <h2 class="text-xl font-semibold">Apa Itu eCanteen?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis dapibus lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean tempor erat risus, ut viverra sapien suscipit sit amet. Quisque malesuada porttitor massa eget scelerisque. Ut dapibus, enim vehicula viverra commodo, neque augue viverra eros, sed dictum leo diam et risus. Aliquam sem odio, tincidunt et sapien a, mollis pulvinar leo. Praesent lacinia dui et ante mollis, in pulvinar velit consequat.
        </p>
    </div>
    <div class="flex flex-col text-left mt-2 md:mt-8 w-[280px] md:w-[600px] lg:w-[720px] px-2">
        <h2 class="text-xl font-semibold">Cara Menggunakan eCanteen?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis dapibus lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean tempor erat risus, ut viverra sapien suscipit sit amet. Quisque malesuada porttitor massa eget scelerisque. Ut dapibus, enim vehicula viverra commodo, neque augue viverra eros, sed dictum leo diam et risus. Aliquam sem odio, tincidunt et sapien a, mollis pulvinar leo. Praesent lacinia dui et ante mollis, in pulvinar velit consequat.
        </p>
    </div>
    <div class="flex flex-col text-left mt-2 md:mt-8 w-[280px] md:w-[600px] lg:w-[720px] px-2">
        <h2 class="text-xl font-semibold">Keuntungan Menggunakan eCanteen?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis dapibus lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean tempor erat risus, ut viverra sapien suscipit sit amet. Quisque malesuada porttitor massa eget scelerisque. Ut dapibus, enim vehicula viverra commodo, neque augue viverra eros, sed dictum leo diam et risus. Aliquam sem odio, tincidunt et sapien a, mollis pulvinar leo. Praesent lacinia dui et ante mollis, in pulvinar velit consequat.
        </p>
    </div>

    <h1 class="text-4xl font-semibold text-center mt-12">Tentang Developers</h1>
    <div class="flex flex-row text-left mt-4 md:mt-12 w-[320px] md:w-[600px] lg:w-[720px] px-2">
        <img src="{{ asset ('img/dev1.jpg') }}" alt="" class="w-24 h-24 rounded-xl mx-2">
        <div>
            <h2 class="text-xl font-semibold">Aaauuuggg Aeeuggh</h2>
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
            <h2 class="text-xl font-semibold">Aaauuuggg Aeeuggh</h2>
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
            <h2 class="text-xl font-semibold">Aaauuuggg Aeeuggh</h2>
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
            <h2 class="text-xl font-semibold">Aaauuuggg Aeeuggh</h2>
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
