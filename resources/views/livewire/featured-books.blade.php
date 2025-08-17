<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    @forelse($books as $book)
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="{{ Storage::url($book->cover) }}" alt="{{ $book->title }}" class="w-full h-64 object-cover">
            <div class="p-6">
                <h3 class="font-bold text-xl mb-2">{{ $book->title }}</h3>
                <p class="text-gray-700 text-base">
                    {{ Str::limit($book->description, 100) }}
                </p>
                @if($book->link_buy)
                    <a href="{{ $book->link_buy }}" target="_blank" class="mt-4 inline-block bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Beli Sekarang</a>
                @endif
            </div>
        </div>
    @empty
        <p class="text-center col-span-3">Belum ada buku unggulan.</p>
    @endforelse
</div>