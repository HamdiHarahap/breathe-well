<x-admin.layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <h1 class="font-bold text-3xl">{{$title}}</h1>

    <section class="grid grid-cols-3 mt-8">
        <div class="rounded-md flex flex-col gap-3 bg-white w-[23rem] h-[6rem] p-4">
            <h3 class="text-lg font-semibold">Total Indikasi</h3>
            <p class="font-bold text-2xl">{{$totalGejala}}</p>
        </div>
        <div class="rounded-md flex flex-col gap-3 bg-white w-[23rem] h-[6rem] p-4">
            <h3 class="text-lg font-semibold">Total Penyakit</h3>
            <p class="font-bold text-2xl">{{$totalPenyakit}}</p>
        </div>
    </section>
</x-admin.layout>