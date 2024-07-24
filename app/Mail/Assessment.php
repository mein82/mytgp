<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Assessment extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $user, $talent;

    public function __construct($user, $talent)
    {
        //
        $this->user = $user;
        $this->talent = $talent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mytgp.nih@gmail.com','MyTGP')
            ->subject('MyTGP - Please complete your assessment for applicant')
            ->markdown('email.assessment-referee')
            ->with([
            'user' => $this->user,
            'talent' => $this->talent
            ]);
    }
}
