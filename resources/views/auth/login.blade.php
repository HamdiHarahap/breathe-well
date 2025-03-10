<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
</head>
<body>
    <section class="flex min-h-screen items-center flex-col justify-center">
        <div class="flex flex-col items-center">
            <h2 class="font-bold text-xl">Admin DoctorBot</h2>
            @if (session('error'))
            <div class="bg-red-500 rounded-lg mx-auto py-3 w-full mt-6 px-3 text-white">
                <p>{{session('error')}}</p>
            </div>
            @endif
            <form action="{{route('login.post')}}" class="mx-auto mt-6 flex flex-col gap-3" method="POST">
                @csrf
                <div class="flex flex-col gap-1">
                    <label for="email" class="font-semibold">Username</label>
                    <input type="text" id="username" name="username" class="border-2 bg-transparent rounded-md px-2 py-1 w-[25rem] outline-blue-600">
                    @error('username')
                    <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password" class="font-semibold">Password</label>
                    <input type="password" id="password" name="password" class="border-2 bg-transparent rounded-md px-2 py-1 w-[25rem] outline-blue-600">
                    @error('password')
                    <p class="text-red-600">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-800 rounded-lg text-white font-semibold py-2 mt-3">Login</button>
            </form>
        </div>
    </section>  
</body>
</html>