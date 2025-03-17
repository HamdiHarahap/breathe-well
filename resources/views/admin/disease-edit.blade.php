<x-admin.layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <h1 class="font-bold text-3xl">{{$title}}</h1>

    <section class="mt-8 flex flex-col gap-5 z- bg-white p-4 rounded-md">
        <h3 class="text-xl font-semibold">Form Tambah Penyakit</h3>
        <form action="{{ route('disease.store') }}" class="flex flex-col gap-2" method="POST">
            @csrf
            <div class="flex flex-col gap-1">
                <label for="penyakit" class="text-sm font-semibold">Penyakit</label>
                <input class="border bg-transparent rounded-md px-3 py-2 w-[30rem]" type="text" id="penyakit" value="{{$disease->penyakit}}" name="penyakit">
            </div>
            <div class="flex flex-col gap-1">
                <label class="text-sm font-semibold">Gejala</label>
                <div class="flex flex-wrap gap-2">
                    @php
                        // Ubah string gejala dari database menjadi array
                        $selectedGejala = array_map('trim', explode(',', $disease->gejala ?? ''));
                    @endphp
                    @foreach ($data as $item)
                        @php
                            $isChecked = in_array($item->gejala, $selectedGejala);
                        @endphp
                        <input type="checkbox" id="gejala-{{$loop->index}}" name="gejala[]" value="{{ $item->gejala }}" 
                            class="hidden" {{ $isChecked ? 'checked' : '' }}>
                        <label for="gejala-{{$loop->index}}" 
                            class="px-6 py-2 rounded-md cursor-pointer text-black font-semibold 
                                {{ $isChecked ? 'bg-orange-500 text-white' : 'bg-gray-300 text-black' }}"
                            onclick="toggleGejala(event, 'gejala-{{$loop->index}}')">
                            {{ $item->gejala }}
                        </label>
                    @endforeach
                </div>
            </div>
                            
            <div class="flex flex-col gap-1">
                <label for="deskripsi" class="text-sm font-semibold">Deskripsi</label>
                <textarea class="border bg-transparent rounded-md px-3 py-2 w-[30rem]" type="text" id="deskripsi" name="deskripsi">{{$disease->deskripsi}}</textarea>
            </div>
            <div class="flex flex-col gap-1">
                <label for="penanganan" class="text-sm font-semibold">Penanganan</label>
                <textarea class="border bg-transparent rounded-md px-3 py-2 w-[30rem]" type="text" id="penanganan" name="penanganan">{{$disease->penanganan}}</textarea>
            </div>
            <button type="submit" class="rounded-md font-semibold text-lg bg-blue-600 text-white py-2 w-fit px-5 mt-3">Submit</button>
        </form>
    </section>
    <script>
        function toggleGejala(event, id) {
            event.preventDefault();
            
            let checkbox = document.getElementById(id);
            let label = event.target;
   
            checkbox.checked = !checkbox.checked;
    
            if (checkbox.checked) {
                label.classList.add('bg-orange-500', 'text-white');
                label.classList.remove('bg-gray-300', 'text-black');
            } else {
                label.classList.add('bg-gray-300', 'text-black');
                label.classList.remove('bg-orange-500', 'text-white');
            }
        }
    </script>
</x-admin.layout>