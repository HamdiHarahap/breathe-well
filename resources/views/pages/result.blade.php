<x-user.layout>
    <section class="py-28 px-44 flex items-center justify-center">
        <div class="h-[60vh] w-full bg-[#215aa9] absolute text-transparent top-0">s</div>
        <div class="flex shadow-lg mx-auto rounded-md px-12 z-20 bg-white mt-20">
            <div class="p-10 text-center flex flex-col justify-center items-center gap-8 w-[40rem] text-base font-semibold text-zinc-800">
                <h2 class="text-3xl font-bold">Hasil Tes</h2>

                @php
                    $penyakit = session('penyakit');
                    $isObject = is_object($penyakit);
                @endphp

                <div class="flex flex-col justify-between gap-6">
                    <div class="flex {{ $isObject ? 'flex-row' : 'flex-col' }} justify-between gap-6 w-full">
                        <div class="w-[18rem] flex flex-col gap-2 bg-gray-200 rounded-md p-3 shadow-md">
                            <h4 class="font-semibold text-xl">Gejala:</h4>
                            <p class="text-justify">
                                Berdasarkan pertanyaan yang Anda jawab, Anda memiliki gejala: {{ session('gejala') }}
                            </p>
                        </div>
                        
                        @if ($isObject)
                        <div class="w-[18rem] flex flex-col gap-2 bg-gray-200 rounded-md p-3 shadow-md">
                            <h4 class="font-semibold text-xl">Penyakit: {{ $penyakit->penyakit }}</h4>
                            <p class="text-justify">{{ $penyakit->deskripsi }}</p>
                        </div>
                    </div>
                    <p class="text-justify text-lg">
                        Kami menyarankan Anda untuk {{ $penyakit->penanganan }}
                    </p>
                    @else
                        <h4 class="font-semibold text-xl">Penyakit: {{ $penyakit }}</h4>
                    @endif
                </div>

                <a href="/cek-kesehatan" class="w-full">
                    <button class="bg-[#215aa9] text-white font-semibold border-2 border-blue-600 rounded-xl text-sm w-full py-2 hover:bg-gray-200 hover:text-blue-600">
                        KEMBALI
                    </button>
                </a>
            </div>
        </div>
    </section>
</x-user.layout>
