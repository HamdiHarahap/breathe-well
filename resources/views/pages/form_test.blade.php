<?php 
    $no = ($data->currentPage() - 1) * $data->perPage() + 1;
?>

<x-user.layout>
    <section class="px-44 py-28">
        <div class="flex flex-col gap-1 text-center">
            <h2 class="text-2xl font-bold">Diagnosa Penyakit</h2>
            <p class="text-lg font-semibold">Jawab pertanyaan di bawah ini sesuai dengan gejala yang sedang Anda alami</p>
        </div>

        <form action="{{ route('diagnosa') }}" autocomplete="off" method="POST" class="shadow-lg p-8 flex flex-col gap-5 rounded-md" onsubmit="mergeData()">
            @csrf
        
            @foreach($data as $item)
                @php
                    $gejala_snake = strtolower(str_replace(' ', '_', $item->gejala)); 
                @endphp
                <div class="flex flex-col space-y-2">
                    <span class="font-medium">{{ $no++ }}. {{ $item->pertanyaan }}</span>
                    <div class="flex space-x-2">
                        <input type="radio" id="{{ $gejala_snake }}_tidak" name="gejala[{{ $gejala_snake }}]" value="" class="hidden peer/tidak" onchange="saveGejala('{{ $gejala_snake }}', '')">
                        <label for="{{ $gejala_snake }}_tidak" class="px-6 py-2 border-2 border-gray-300 rounded-full cursor-pointer text-black font-semibold peer-checked/tidak:bg-orange-500 peer-checked/tidak:text-white peer-checked/tidak:border-orange-500">
                            TIDAK
                        </label>
                
                        <input type="radio" id="{{ $gejala_snake }}_ya" name="gejala[{{ $gejala_snake }}]" value="{{ $gejala_snake }}" class="hidden peer/ya" onchange="saveGejala('{{ $gejala_snake }}', '{{ $gejala_snake }}')">
                        <label for="{{ $gejala_snake }}_ya" class="px-6 py-2 border-2 border-gray-300 rounded-full cursor-pointer text-black font-semibold peer-checked/ya:bg-orange-500 peer-checked/ya:text-white peer-checked/ya:border-orange-500">
                            YA
                        </label>
                    </div>
                </div>
            @endforeach
        
            {{ $data->links() }}
        
            <button type="submit" id="submit-btn" {{$data->currentPage() == $data->lastPage() ? '' : 'disabled' }} class="{{$data->currentPage() == $data->lastPage() ? 'bg-[#215aa9] border-blue-600 border-2 hover:bg-gray-200 hover:text-blue-600' : 'bg-gray-200' }} text-white rounded-xl font-semibold text-lg mx-auto py-2  w-1/2">
                SUBMIT
            </button>

            <input type="hidden" name="all_gejala" id="all_gejala">
        </form>
        

        @if(session('hasil'))
        <p>Hasil Diagnosa: <strong>{{ session('hasil') }}</strong></p>
        @endif
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            loadSelectedGejala();
   
            if (localStorage.getItem("formSubmitted")) {
                localStorage.removeItem("selectedGejala");
                localStorage.removeItem("formSubmitted");
            }
        });
    
        function saveGejala(gejala, value) {
            let selectedGejala = JSON.parse(localStorage.getItem("selectedGejala")) || {};
            selectedGejala[gejala] = value;
            localStorage.setItem("selectedGejala", JSON.stringify(selectedGejala));
        }
    
        function loadSelectedGejala() {
            let selectedGejala = JSON.parse(localStorage.getItem("selectedGejala")) || {};
            for (let gejala in selectedGejala) {
                let value = selectedGejala[gejala];
                let radio = document.querySelector(`input[name="gejala[${gejala}]"][value="${value}"]`);
                if (radio) radio.checked = true;
            }
        }
    
        function mergeData() {
            let selectedGejala = JSON.parse(localStorage.getItem("selectedGejala")) || {};
            document.getElementById("all_gejala").value = JSON.stringify(selectedGejala);
        }
    
        document.querySelector('form').addEventListener('submit', function() {
            localStorage.setItem("formSubmitted", "true"); 
        });
    </script>
</x-user.layout>
