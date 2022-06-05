    <!-- Navigation -->
    <div class="container mx-auto my-auto pb-6 pt-4 md:px-4">
        <div
            class="flex flex-col items-center text-center md:flex-row justify-center lg:justify-between md:justify-between">
            <div class="justify-center">
                <a href="{{ route('welcome') }}"
                    class="font-bold text-2xl lg:text-2xl md:text-xl bg-clip-text text-transparent bg-gradient-to-r from-[#72c2ff] to-[#7277ff] ">eCanteen</a>
            </div>
            <div class="flex flex-row mt-2 justify-center items-center text-center">
                <ul class="flex flex-wrap gap-8 text-slate-400 text-[10px] md:text-[14px]">
                    <li><a href="{{ route('about') }}"
                            class="hover:text-blue-300 transition delay-50 duration-300 ease-in-out font-semibold">
                            About Us
                        </a>
                    </li>
                    <li><a href="{{ route('privacy') }}"
                            class="hover:text-blue-300 transition delay-50 duration-300 ease-in-out font-semibold">Privacy
                            Policy
                        </a>
                    </li>
                    <li><a href="{{ route('service') }}"
                            class="hover:text-blue-300 transition delay-50 duration-300 ease-in-out font-semibold">Terms
                            of Service
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
