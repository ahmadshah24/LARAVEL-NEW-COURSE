<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Laravel 10 task List App</title>
    @yield('styles')
</head>
<body class="container mx-auto mb-10 mt-10 max-w-lg">
    <h1 class="text-2xl bold mb-4">@yield('title')</h1>
    <div x-data="{flash:true}">
        @if(session('success'))
            <div>
                
                <div x-show="flash" class="mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700 relative" role="alert">
                    
                    <strong class="font-bold">Succuess!</strong>
                    <div>{{ session('success') }}</div>
                    <span class="absolute top-0 bottom-0  px-4 py-3 right-0">
                        <svg xmlns="http://www.w3.org/2000/svg" @click=" flash = false" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </span>
                      
                </div>
            </div>
        @endif
        @yield('content')

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>