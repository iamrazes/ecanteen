    <!-- Footer -->
    <div class="bg-slate-700 md:mt-12 pt-12 pb-12 rounded-t-lg text-slate-300 mt-12">
        <div class="container mx-auto my-auto">
            <div class="flex justify-center my-8">
                <div class="grid grid-cols-2 md:grid-cols-2 items-start text-right justify-between px-3 pt-3 gap-0 md:gap-12 lg:gap-72">

                    <div class="flex flex-col mx-2 gap-1 text-left mr-12">
                        <h1 class="text-2xl md:text-4xl text-white font-bold">eCanteen</h1>
                        <p class="text-sm ">Sekarang Jajan di Kantin Bisa Online!</p>
                        <div class="flex flex-wrap gap-4 mt-2 text-xl">
                            <a href="https://www.facebook.com" class="fab fa-facebook hover:text-blue-300"></a>
                            <a href="https://www.instagram.com" class="fab fa-instagram hover:text-blue-300"></a>
                            <a href="https://www.twitter.com" class="fab fa-twitter hover:text-blue-300"></a>
                            <a href="https://www.youtube.com" class="fab fa-youtube hover:text-blue-300"></a>
                        </div>
                    </div>

                    <div class="flex flex-col mx-2 gap-1 mb-2 md:ml-12 ">
                        <h1 class="font-semibold border-b border-white">Bantuan</h1>
                        <span><a class="hover:text-blue-300" href="{{ route('privacy') }}">Kebijakan Privasi</a></span>
                        <span><a class="hover:text-blue-300" href="{{ route('service') }}">Sayarat dan Ketentuan</a></span>
                        <span><a class="hover:text-blue-300" href="{{ route('submission') }}">Pengajuan Dagangan</a></span>
                        <span><a class="hover:text-blue-300" href="{{ route('about') }}">Tentang Kami</a></span>
                        <span class="mb-3 md:mb-8" ><a href="{{ route('contact') }}"  class="hover:text-blue-300">Kontak</a></span>
                        <h1 class="font-semibold border-b border-white">Sosial Media</h1>
                        <span><a class="hover:text-blue-300" href="https://www.facebook.com">Facebook</a></span>
                        <span><a class="hover:text-blue-300" href="https://www.instagram.com">Instagram</a></span>
                        <span><a class="hover:text-blue-300" href="https://www.youtube.com">Youtube</a></span>
                        <span><a class="hover:text-blue-300" href="https://www.twitter.com">Twitter</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-slate-800 text-gray-300 border-t border-t-slate-700">
        <div class="container mx-auto my-auto py-4">
            <div class="flex justify-center">
                <p class="mx-2">Copyright © 2022 <a href="{{ route('welcome') }}"
                        class="hover:text-blue-300 transition delay-50 duration-300 ease-in-out">eCanteen</a> . All
                    Right
                    Reserved</p>
            </div>
        </div>
    </div>
