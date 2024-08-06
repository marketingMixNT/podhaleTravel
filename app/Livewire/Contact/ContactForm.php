<?php

namespace App\Livewire\Contact;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{

    public $name;
    public $phone;
    public $email;

    public $content;

    public $successMessage;



    // public $captcha = 0;

    // public function updatedCaptcha($token)
    // {
    //     $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . env('CAPTCHA_SECRET_KEY') . '&response=' . $token);
    //     $this->captcha = $response->json()['score'];

    //     if (!$this->captcha > .3) {
    //         $this->store();
    //     } else {
    //         return session()->flash('success',  __('home.contact.success-message'));
    //     }

    // }


    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'email' => 'required|email',
        'content' => 'required',
        // 'captcha' => ['required'],

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact = $this->validate();

        Mail::send('emails.contact-form-email', [
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'content' => $this->content,
        ], function ($message) {
            $message->from(env('MAIL_USERNAME'))
                ->to(env('MAIL_TO'))
                ->subject('Nowa wiadomość ze strony Kocham Ząb');
        });

        $this->successMessage =  "Dziękujemy za wiadomość";

        $this->resetForm();

        session()->flash('success_message', $this->successMessage);
    }

    public function resetForm()
    {
        $this->name = '';
        $this->phone = '';
        $this->email = '';
        $this->content = '';
        // $this->captcha = 0;
    }
   
}
