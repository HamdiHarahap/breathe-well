<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <style>
        .splide__arrow--prev {
        background: transparent;
        left: 20rem; 
    }

    .splide__arrow--next {
        background: transparent;
        right: 20rem; 
    }

    @media screen and (max-width: 520px) {
        html, body {
            overflow-x: hidden;
        }

        .splide__arrow--next {
            right: 18rem; 
        }

        .splide__arrow--prev {
            left: 18rem;    
        }
    }
    </style>
</head>
<body>
    <x-user.header></x-user.header>

    <main>
        {{$slot}}
    </main>

    <x-user.footer></x-user.footer>
</body>
</html>