<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformSupervisor extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $talent;
    public $category;

    public function __construct($talent, $category)
    {
        //
         $this->talent = $talent;
         $this->category = $category;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mytgp.nih@gmail.com','MyTGP')
            ->subject('MyTGP - A new updates on '.$this->category.' from your Talent')
            ->markdown('email.inform-supervisor');
    }
}