<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Arsitek Diri' }}</title>
    
    {{-- Baris ini dinonaktifkan/dihapus --}}
    {{-- @vite('resources/css/app.css') --}}

    {{-- Baris ini ditambahkan untuk memuat Tailwind dari CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    @livewireStyles
</head>
<body class="bg-gray-50 font-sans antialiased">

    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-gray-800">Arsitek Diri</a>
            <div class="space-x-4">
                <a href="/" class="text-gray-600 hover:text-gray-800">Home</a>
                <a href="/tentang-kami" class="text-gray-600 hover:text-gray-800">Tentang Kami</a>
                <a href="/katalog" class="text-gray-600 hover:text-gray-800">Katalog</a>
                <a href="/kontak" class="text-gray-600 hover:text-gray-800">Kontak</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-8">
        {{ $slot }}
    </main>

    <footer class="bg-white mt-12 py-6">
        <div class="container mx-auto px-6 text-center text-gray-600">
            &copy; {{ date('Y') }} Arsitek Diri. All Rights Reserved.
        </div>
    </footer>

    @livewireScripts
</body>
</html>