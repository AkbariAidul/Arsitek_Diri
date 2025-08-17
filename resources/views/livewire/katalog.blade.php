// resources/views/livewire/katalog.blade.php
<div>
    <div class="mb-8">
        <input 
            wire:model.live.debounce.300ms="search" 
            type="text" 
            placeholder="Cari buku atau artikel..." 
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
        >
    </div>

    <h2 class="text-3xl font-bold text-gray-800 mb-6">Katalog Buku</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($books as $book)
            @empty
            <p class="text-center col-span-3">Tidak ada buku yang cocok dengan pencarian Anda.</p>
        @endforelse
    </div>
    <div class="mt-8">{{ $books->links() }}</div>

    <h2 class="text-3xl font-bold text-gray-800 mt-16 mb-6">Artikel Literasi</h2>
    <div class="space-y-6">
       @forelse($articles as $article)
           <div class="bg-white p-6 rounded-lg shadow">
               <h3 class="font-bold text-xl">{{ $article->title }}</h3>
               <p class="text-sm text-gray-500">Kategori: {{ $article->category }}</p>
               <div class="mt-2 text-gray-700">
                   {!! Str::limit($article->content, 200) !!}
               </div>
               </div>
       @empty
            <p class="text-center">Tidak ada artikel yang cocok dengan pencarian Anda.</p>
       @endforelse
    </div>
    <div class="mt-8">{{ $articles->links() }}</div>
</div>