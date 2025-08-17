use Illuminate\Support\Facades\Route;

// Halaman Statis menggunakan Blade biasa
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/tentang-kami', function () {
    return view('pages.about');
})->name('about');

// Halaman Dinamis menggunakan Livewire Full-Page Component
Route::get('/katalog', \App\Livewire\Katalog::class)->name('catalog');
Route::get('/kontak', \App\Livewire\ContactForm::class)->name('contact');