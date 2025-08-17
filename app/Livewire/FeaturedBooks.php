// app/Livewire/FeaturedBooks.php
namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class FeaturedBooks extends Component
{
    public function render()
    {
        // Ambil 3 buku terbaru sebagai unggulan
        $books = Book::latest()->take(3)->get();
        return view('livewire.featured-books', ['books' => $books]);
    }
}