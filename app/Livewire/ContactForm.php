<?php

namespace App\Livewire;

use App\Models\ContactMessage;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{

    #[Validate('required')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $subject = '';

    #[Validate('required')]
    public $message = '';

    public $count = 0;

    public $messageSent = false;

    public function mount($count){
        $this->count = $count;
    }

    public function store(){
        $this->validate();
        $attributes = [
            'sender_name' => $this->name,
            'sender_email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message
        ];

        ContactMessage::create($attributes);
        $this->messageSent = true;
        $this->count++;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
