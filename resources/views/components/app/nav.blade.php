<nav class="flex justify-center">
    <div class="container fixed bg-gradient-to-r from-[#72c2ff] to-[#7277ff] text-white rounded-b-xl pb-2 md:pt-2 px-6">
        <div class="flex flex-col md:items-center md:flex-row">

            <!-- Logo -->
            <div class="flex items-center invisible md:visible font-bold text-xl">
                <a href="{{ route('app') }}">eCanteen</a>
            </div>

            <!-- Search bar -->
            <div class="flex justify-center -mt-3 grow mb-1 px-2 md:mt-1">
                <input type="text" placeholder=""
                    class="px-2 rounded-lg text-sm border-white text-slate-500 h-[32px] w-[300px] md:w-[400px] lg:w-[600px] object-cover mx-2">
                <button class="text-lg fa fa-search hover:text-indigo-700 transition delay-50 duration-300"></button>
            </div>

            <!-- Navigation Button -->
            <div class="md:w-[152px] md:h-[44px]">
                @auth
                    @if (Auth::user())
                        <div class="flex flex-row md:flex-col-reverse gap-2 justify-between mb-1 mt-2">
                            <div class=" md:invisible">
                                <p class="text-sm">Halo, kak <span
                                        class="font-semibold hover:text-indigo-700 transition delay-50 duration-300 "><a
                                            href="">{{ Auth::user()->nickname }}</a></span></p>
                            </div>
                            <div class="flex justify-center gap-6">
                                <a class="text-lg fa fa-shopping-cart hover:text-indigo-700 transition delay-50 duration-300"></a>
                                <a href="" class="text-lg fa fa-user hover:text-indigo-700 transition delay-50 duration-300"></a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class=" text-lg fa fa-right-from-bracket hover:text-indigo-700 transition delay-50 duration-300" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                    </a>
                                </form>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="flex flex-row gap-2 justify-center mb-1 mt-2">
                        <a class="flex justify-center bg-transparent rounded font-semibold border-2 border-white text-white text-sm h-[32px] w-[72px] items-center"
                            href="{{ route('login') }}">Masuk</a>
                        <a class="flex justify-center bg-white rounded font-semibold text-[#7277ff] text-sm h-[32px] w-[72px] items-center"
                            href="{{ route('register') }}"><span>Daftar</span></a>
                    </div>
                @endauth

            </div>

        </div>
    </div>
</nav>
