// app/Livewire/ContactForm.php
namespace App\Livewire;

use App\Models\Message;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactForm extends Component
{
    #[Rule('required|min:3')]
    public $name = '';

    #[Rule('required|email')]
    public $email = '';

    #[Rule('required')]
    public $subject = '';

    #[Rule('required|min:10')]
    public $body = '';

    public $successMessage = false;

    public function submit()
    {
        $this->validate();

        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'body' => $this->body,
        ]);

        $this->reset();
        $this->successMessage = true;
    }

    public function render()
    {
        return view('livewire.contact-form')
            ->layout('layouts.app', ['title' => 'Hubungi Kami']);
    }
}   