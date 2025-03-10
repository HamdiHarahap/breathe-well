<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body class="bg-gray-200">
    <div class="h-screen">
        <aside class="w-64 bg-gray-800 text-white space-y-6 fixed h-screen z-20">
            <h1 class="text-xl font-bold p-4 bg-gray-900 h-16">BreatheWell</h1>
            <nav class="flex flex-col">
                <a href="/admin/dashboard" class="{{$title == 'Dashboard' ? 'bg-gray-700' : ''}} flex items-center gap-3 py-[0.7rem] px-4 hover:bg-gray-700 font-semibold text-gray-300">
                    <img src="{{ asset('/assets/icons/dashboard.svg') }}" alt="" class="w-5">
                    Dashboard
                </a>
                <a href="/admin/indication" class="{{$title == 'Indikasi' ? 'bg-gray-700' : ''}} flex items-center gap-3 py-[0.7rem] px-4 hover:bg-gray-700 font-semibold text-gray-300">
                    <img src="{{ asset('/assets/icons/indication.svg') }}" alt="" class="w-5">
                    Indikasi
                </a>
                <a href="/admin/disease" class="{{$title == 'Penyakit' ? 'bg-gray-700' : ''}} flex items-center gap-3 py-[0.7rem] px-4 hover:bg-gray-700 font-semibold text-gray-300">
                    <img src="{{ asset('/assets/icons/disease.svg') }}" alt="" class="w-5">
                    Penyakit
                </a>
            </nav>
        </aside>

        <main class="min-h-[200vh]">
            <header class="bg-white h-16 fixed w-full flex items-center justify-between pe-8 ps-72 z-10">
                <div class="flex items-center gap-2">
                    <div class="rounded-full bg-gray-800 p-2 w-fit">
                        <img src="{{ asset('/assets/icons/profile.svg') }}" alt="" class="w-5">
                    </div>
                    <p class="font-semibold text-sm">{{Auth::user()->name}}</p>  
                </div>
                <a href="/logout">
                    <img src="{{ asset('/assets/icons/logout.svg') }}" alt="" class="w-6 cursor-pointer">
                </a>
            </header>

            <div class="ps-72 pt-24 pe-8 z-0">
                {{$slot}}
            </div>
        </main>
    </div>
</body>
</html>
