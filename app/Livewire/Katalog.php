// app/Livewire/Katalog.php
namespace App\Livewire;

use App\Models\Article;
use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class Katalog extends Component
{
    use WithPagination;

    public string $search = '';

    public function render()
    {
        $books = Book::where('title', 'like', '%'.$this->search.'%')
                     ->latest()
                     ->paginate(6);

        $articles = Article::where('title', 'like', '%'.$this->search.'%')
                           ->latest()
                           ->paginate(5);

        return view('livewire.katalog', [
            'books' => $books,
            'articles' => $articles,
        ])->layout('layouts.app', ['title' => 'Katalog Buku & Artikel']);
    }
}