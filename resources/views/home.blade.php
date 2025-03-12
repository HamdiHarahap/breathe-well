<x-user.layout>
    <section class="pt-52 pb-12 bg-[#215aa9] flex flex-col items-center gap-16">
        <h1 class="text-5xl font-bold text-white text-center">"Cek Kondisi Keshatanmu Sekarang <br> Bersama BreatheWell"</h1>
        <a href="/cek-kesehatan" class="bg-white px-5 py-2 rounded-xl text-blue-600 font-semibold hover:bg-gray-300">IKUTI TES SEKARANG</a>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#215aa9" fill-opacity="1" d="M0,160L26.7,154.7C53.3,149,107,139,160,138.7C213.3,139,267,149,320,154.7C373.3,160,427,160,480,144C533.3,128,587,96,640,106.7C693.3,117,747,171,800,186.7C853.3,203,907,181,960,160C1013.3,139,1067,117,1120,112C1173.3,107,1227,117,1280,106.7C1333.3,96,1387,64,1413,48L1440,32L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>

    <section id="tentang-kami" class="px-44 pt-12 pb-16">
        <div class="flex justify-between gap-16 items-center">
            <div class="w-[40rem] flex flex-col gap-5">
                <h2 class="text-4xl font-bold text-black">Tentang BreatheWell</h2>
                <p class="text-lg font-semibold text-justify">BreatheWell adalah sebuah sistem pakar yang dirancang untuk membantu pengguna dalam mendeteksi kemungkinan penyakit paru-paru berdasarkan gejala yang dialami. Website ini menggunakan teknologi berbasis kecerdasan buatan untuk menganalisis gejala dan memberikan diagnosa awal secara cepat dan akurat.</p>
            </div>
            <div class="flex flex-col gap-3 w-[40rem]">
                <div class="bg-gray-200 p-3 rounded-md flex items-center gap-4">
                    <img src="{{ asset('/assets/images/searching.svg') }}" alt="" class="w-24">
                    <div>
                        <h4 class="font-semibold text-xl">Mengidentifikasi Gejala</h4>
                        <p>BreatheWell dapat mengidentifikasi penyakit paru-paru berdasakan gejala yang sedang dialami</p>
                    </div>
                </div>
                <div class="bg-gray-200 p-3 rounded-md flex items-center gap-4">
                    <img src="{{ asset('/assets/images/information.svg') }}" alt="" class="w-24">
                    <div>
                        <h4 class="font-semibold text-xl">Mendapatkan Informasi Penyakit</h4>
                        <p>Berdasarkan analisis gejala yang telah kami terima, anda mendaptkan informasi tentang penyakit itu</p>
                    </div>
                </div>
                <div class="bg-gray-200 p-3 rounded-md flex items-center gap-4">
                    <img src="{{ asset('/assets/images/recomendation.svg') }}" alt="" class="w-24">
                    <div>
                        <h4 class="font-semibold text-xl">Menerima Rekomendasi Tindakan</h4>
                        <p>Kami memberikan rekomendasi tindakan setelah anda mendapat informasi tentang penyakit</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-44 py-16 mb-5 bg-[#215aa9] flex flex-col items-center gap-12">
        <h2 class="text-4xl font-bold text-center text-white">Penyakit Paru-Paru Umum</h2>
        <div class="grid grid-cols-3 w-[85%]">
            <div class="bg-gray-200 p-3 rounded-md w-[20rem]">
                <h3 class="text-xl font-semibold">Asma</h3>
                <p class="text-gray-600 mt-2 text-sm">Kondisi di mana saluran udara menyempit dan menghasilkan lendir berlebih.</p>
            </div>
            <div class="bg-gray-200 p-3 rounded-md w-[20rem]">
                <h3 class="text-xl font-semibold">Bronkitis</h3>
                <p class="text-gray-600 mt-2 text-sm">Infeksi yang menyebabkan peradangan pada saluran udara ke paru-paru.</p>
            </div>
            <div class="bg-gray-200 p-3 rounded-md w-[20rem]">
              <h3 class="text-xl font-semibold">Tuberkulosis (TBC)</h3>
              <p class="text-gray-600 mt-2 text-sm">Infeksi bakteri yang menyerang paru-paru dan bisa menyebar ke organ lain.</p>
            </div>
        </div>
    </section>
    <section class="flex flex-col px-52 py-32 items-center text-center gap-16 max-[520px]:px-6">
        <article class="flex flex-col gap-4">        
            <div class="flex flex-col gap-2">
                <h1 class="text-4xl font-bold text bg-center">Testimoni</h1>
                <div class="w-32 bg-blue-600 h-1 m-auto"></div>
            </div>
        </article>
        <article>
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="flex flex-col justify-center items-center relative pt-12">
                                <img src="{{ asset('/assets/images/testi-1.jpg') }}" alt="images" class="w-24 rounded-full border-4 border-white absolute top-0 ">
                                <div class="w-[30rem] max-[520px]:w-[20rem] bg-gray-200 text-black pt-14 pb-8 px-12 flex flex-col items-center rounded-lg">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quam minus cumque obcaecati ad natus repellendus distinctio accusantium, ex a delectus commodi nulla in, provident animi, asperiores tempora rem quibusdam?</p>
                                    <h3 class="font font-semibold text-lg mt-2">Hamdi Harahap</h3>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex flex-col justify-center items-center relative pt-12">
                                <img src="{{ asset('/assets/images/testi-1.jpg') }}" alt="images" class="w-24 rounded-full border-4 border-white absolute top-0">
                                <div class="w-[30rem] max-[520px]:w-[20rem] bg-gray-200 text-black pt-14 pb-8 px-12 flex flex-col items-center rounded-lg">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quam minus cumque obcaecati ad natus repellendus distinctio accusantium, ex a delectus commodi nulla in, provident animi, asperiores tempora rem quibusdam?</p>
                                    <h3 class="font font-semibold text-lg mt-2">Hamdi Harahap</h3>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex flex-col justify-center items-center relative pt-12">
                                <img src="{{ asset('/assets/images/testi-1.jpg') }}" alt="images" class="w-24 rounded-full border-4 border-white absolute top-0">
                                <div class="w-[30rem] max-[520px]:w-[20rem] bg-gray-200 text-black pt-14 pb-8 px-12 flex flex-col items-center rounded-lg">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quam minus cumque obcaecati ad natus repellendus distinctio accusantium, ex a delectus commodi nulla in, provident animi, asperiores tempora rem quibusdam?</p>
                                    <h3 class="font font-semibold text-lg mt-2">Hamdi Harahap</h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </article>
     </section>
</x-userlayout>
