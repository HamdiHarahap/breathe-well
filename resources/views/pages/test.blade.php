<x-user.layout>
    <section class="py-28 px-44 flex">
        <div class="flex shadow-lg mx-auto rounded-md px-12">
            <div class="p-10 text-center flex flex-col justify-center items-center gap-5">
                <h2 class="text-3xl font-bold">Cek Penyakit</h2>
                <p class="text-lg text-zinc-800">Mulai tes sekarang untuk mengetahui penyakit <br> yang sedang anda alami</p>
                <img src="{{ asset('/assets/images/check.png') }}" alt="" class="w-80">
                <button id="btn-tes" class="bg-[#215aa9] text-white font-semibold border-2 border-blue-600 rounded-xl text-sm w-full py-2 hover:bg-gray-200 hover:text-blue-600">
                    MULAI TES
                </button>
            </div>
        </div>
    </section>

    <div id="overlay" class="fixed inset-0 bg-black/30 backdrop-blur-sm hidden z-40"></div>

    <section id="instruction" class="bg-gray-200 py-5 px-8 w-[50%] mx-auto rounded-md flex-col gap-3 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 shadow-lg hidden z-50">
        <h3 class="text-xl font-semibold text-center">Instruksi Pengerjaan</h3>
        <ul class="list-disc list-inside mt-2">
            <li>Jawablah sesuai dengan gejala yang Anda alami.</li>
            <li>Pilih jawaban <strong>Ya</strong> atau <strong>Tidak</strong> untuk setiap gejala yang ditampilkan.</li>
            <li>Pastikan Anda mengisi semua pertanyaan sebelum melanjutkan.</li>
            <li>Setelah selesai, klik tombol <strong>Submit</strong>.</li>
            <li>Hasil diagnosa hanya sebagai referensi awal, konsultasikan dengan dokter untuk kepastian medis.</li>
        </ul>
        <a href="/form-cek-kesehatan" class="w-full">
            <button class="bg-[#215aa9] mt-3 text-white font-semibold border-2 border-blue-600 rounded-xl text-sm w-full py-2 hover:bg-gray-200 hover:text-blue-600 transition">
                MULAI SEKARANG
            </button>
        </a>
    </section>    
</x-user.layout>
