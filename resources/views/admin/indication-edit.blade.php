<x-admin.layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <h1 class="font-bold text-3xl">{{$title}}</h1>

    <section class="mt-8 flex flex-col gap-5 z- bg-white p-4 rounded-md">
        <h3 class="text-xl font-semibold">Form Tambah Gejala</h3>
        <form action="{{ route('indication.edit', ['id' => $data->id]) }}" class="flex flex-col gap-2" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-col gap-1">
                <label for="gejala" class="text-sm font-semibold">Gejala</label>
                <input class="border bg-transparent rounded-md px-3 py-2 w-[30rem]" value="{{$data->gejala}}" type="text" id="gejala" name="gejala">
            </div>
            <div class="flex flex-col gap-1">
                <label for="pertanyaan" class="text-sm font-semibold">Pertanyaan</label>
                <textarea class="border bg-transparent rounded-md px-3 py-2 w-[30rem]" type="text" id="pertanyaan" name="pertanyaan">{{$data->pertanyaan}}</textarea>
            </div>
            <button type="submit" class="rounded-md font-semibold text-lg bg-blue-600 text-white py-2 w-fit px-5 mt-3">Submit</button>
        </form>
    </section>
</x-admin.layout>