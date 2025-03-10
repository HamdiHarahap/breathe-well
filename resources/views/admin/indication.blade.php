<x-admin.layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <h1 class="font-bold text-3xl">{{$title}}</h1>

    <section class="mt-8 flex flex-col gap-5 z-0">
        <div class="bg-white flex items-center justify-between p-4 rounded-md">
            <h3 class="font-semibold text-lg">Daftar Indikasi</h3>
            <a href="/admin/indication-add" class="text-blue-500 hover:text-blue-800 text-sm font-semibold">Tambah Indikasi</a>
        </div>

        <div class="z-0">
            {{ $data->links() }}
        </div>
        <table class="border mr-4 w-full mt-4 bg-white border-gray-300">
            <thead>
                <tr class="border text-left bg-blue-900 text-white">
                    <th class="p-2">No</th>
                    <th class="p-2">Gejala</th>
                    <th class="p-2">Pertanyaan</th>
                    <th class="p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = ($data->currentPage() - 1) * $data->perPage() + 1; ?>
                @foreach ($data as $item) 
                <tr class="border">
                    <td class="p-2 px-3">{{$no++}}</td>
                    <td class="p-2">{{$item->gejala}}</td>
                    <td class="p-2">{{$item->pertanyaan}}</td>
                    <td class="p-2">
                        <div class="flex gap-1">
                            <a href="/admin/edit/{{$item->id}}" class="flex items-center justify-center bg-yellow-300 hover:bg-yellow-500 rounded-lg cursor-pointer p-1 w-fit">
                                <img src="../assets/icons/edit.svg" alt="logo" class="w-6">
                            </a>
                            <form action="{{ route('indication.destroy', ['id' => $item->id ]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="delete-btn flex items-center justify-center bg-red-600 hover:bg-red-800 rounded-lg cursor-pointer p-1 w-fit">
                                    <img src="../assets/icons/trash.svg" alt="logo" class="w-6">
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-admin.layout>