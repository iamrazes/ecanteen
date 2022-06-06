    <!-- Footer -->
    <div class=" bg-gradient-to-r from-[#72c2ff] to-[#7277ff] md:mt-24 pt-12 pb-12 rounded-t-2xl text-slate-300 mt-12 text-slate-600 ">
        <div class="container mx-auto my-auto">
            <div class="flex justify-center my-8">
                <div class="grid grid-cols-2 md:grid-cols-2 items-start text-right justify-between px-3 pt-3 gap-0 md:gap-12 lg:gap-72">

                    <div class="flex flex-col mx-2 gap-1 text-left mr-12">
                        <h1 class="text-3xl md:text-5xl text-white font-bold">eCanteen</h1>
                        <p class="text-sm text-white ">Sekarang Jajan di Kantin Bisa Online!</p>
                        <div class="flex flex-wrap gap-4 mt-2 text-xl">
                            <a href="https://www.facebook.com" class="fab fa-facebook text-white hover:text-indigo-300"></a>
                            <a href="https://www.instagram.com" class="fab fa-instagram text-white hover:text-indigo-300"></a>
                            <a href="https://www.twitter.com" class="fab fa-twitter text-white hover:text-indigo-300"></a>
                            <a href="https://www.youtube.com" class="fab fa-youtube text-white hover:text-indigo-300"></a>
                        </div>
                    </div>

                    <div class="flex flex-col mx-2 gap-1 mb-2 md:ml-12 ">
                        <h1 class="font-semibold text-white border-b border-blue-200">Bantuan</h1>
                        <span><a class="text-white hover:text-indigo-300" href="{{ route('privacy') }}">Kebijakan Privasi</a></span>
                        <span><a class="text-white hover:text-indigo-300" href="{{ route('service') }}">Sayarat dan Ketentuan</a></span>
                        <span><a class="text-white hover:text-indigo-300" href="{{ route('submission') }}">Pengajuan Dagangan</a></span>
                        <span><a class="text-white hover:text-indigo-300" href="{{ route('about') }}">Tentang Kami</a></span>
                        <span class="mb-3 md:mb-8" ><a href="{{ route('contact') }}"  class="text-white">Kontak</a></span>
                        <h1 class="font-semibold text-white border-b border-blue-200">Sosial Media</h1>
                        <span><a class="text-white hover:text-indigo-300" href="https://www.facebook.com">Facebook</a></span>
                        <span><a class="text-white hover:text-indigo-300" href="https://www.instagram.com">Instagram</a></span>
                        <span><a class="text-white hover:text-indigo-300" href="https://www.youtube.com">Youtube</a></span>
                        <span><a class="text-white hover:text-indigo-300" href="https://www.twitter.com">Twitter</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white text-slate-600  -mt-6">
        <div class="container mx-auto my-auto py-4">
            <div class="flex justify-center">
                <p class="mx-2">Copyright © 2022 <a href="{{ route('welcome') }}"
                        class="hover:text-blue-400 transition delay-50 duration-300 ease-in-out">eCanteen</a> . All
                    Right
                    Reserved</p>
            </div>
        </div>
    </div>
