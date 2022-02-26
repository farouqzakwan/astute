<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //create a setter to set verification url
        $this->url = 'https://google.com.my';
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'),config('mail.from.name'))
                ->view('mails.register_verification')
                ->with([
                    'url' => $this->url
                ]);
    }
}
