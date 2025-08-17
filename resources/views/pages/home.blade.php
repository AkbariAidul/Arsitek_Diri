<x-layouts.app title="Selamat Datang di Arsitek Diri">
    <div class="text-center py-16">
        <h1 class="text-4xl font-extrabold text-gray-900">Membangun Diri, Merancang Masa Depan</h1>
        <p class="mt-4 text-lg text-gray-600">Temukan buku-buku self-development terbaik untuk perjalanan Anda.</p>
        <a href="{{ route('catalog') }}" class="mt-8 inline-block bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700">Lihat Katalog Buku</a>
    </div>

    <div class="mt-12">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Buku Unggulan</h2>
        @livewire('featured-books')
    </div>

    <div class="mt-16">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Apa Kata Mereka?</h2>
        @livewire('show-testimonials')
    </div>
</x-layouts.app>