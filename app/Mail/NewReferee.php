<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewReferee extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $user, $talent, $random;

    public function __construct($random, $user, $talent)
    {
        //
        $this->user = $user;
        $this->talent = $talent;
        $this->random = $random;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mytgp.nih@gmail.com','MyTGP')
            ->subject('Welcome to MyTGP System - You have been recommended as a referee')
            ->markdown('email.propose-new-referee')
            ->with([
            'user' => $this->user,
            'talent' => $this->talent,
            'random' => $this->random
            ]);
    }
}
