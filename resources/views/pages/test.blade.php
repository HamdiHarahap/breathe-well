<x-user.layout>
    <section class="py-28 px-44 flex">
        <div class="flex shadow-lg mx-auto rounded-md px-12">
            <div class="p-10 text-center flex flex-col justify-center items-center gap-5">
                <h2 class="text-3xl font-bold">Cek Penyakit</h2>
                <p class="text-lg text-zinc-800">Mulai tes sekarang untuk mengetahui penyakit <br> yang sedang anda alami</p>
                <img src="{{ asset('/assets/images/check.png') }}" alt="" class="w-80">
                <a href="/form-cek-kesehatan" class="w-full">
                    <button class="bg-[#215aa9] text-white font-semibold border-2 border-blue-600 rounded-xl text-sm w-full py-2 hover:bg-gray-200 hover:text-blue-600">MULAI TES</button>
                </a>
            </div>
        </div>
    </section>
</x-user.layout>