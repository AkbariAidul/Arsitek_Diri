// resources/views/livewire/contact-form.blade.php
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-center mb-8">Hubungi Kami</h1>
    
    @if ($successMessage)
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <strong class="font-bold">Terima kasih!</strong>
            <span class="block sm:inline">Pesan Anda telah berhasil dikirim.</span>
        </div>
    @endif

    <form wire:submit.prevent="submit" class="bg-white p-8 rounded-lg shadow-md">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
            <input type="text" id="name" wire:model="name" class="w-full px-3 py-2 border rounded">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="mb-6">
            <label for="body" class="block text-gray-700 font-bold mb-2">Pesan</label>
            <textarea id="body" wire:model="body" rows="5" class="w-full px-3 py-2 border rounded"></textarea>
            @error('body') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700">
                <span wire:loading.remove>Kirim Pesan</span>
                <span wire:loading>Mengirim...</span>
            </button>
        </div>
    </form>
</div>