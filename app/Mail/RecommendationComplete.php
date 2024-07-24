<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecommendationComplete extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $talent;
    public $referee;
    public function __construct($talent,$referee)
    {
        //
         $this->talent = $talent;
         $this->referee = $referee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mytgp.nih@gmail.com','MyTGP')
            ->subject('MyTGP - Recommendation Complete')
            ->markdown('email.recommendation-complete')
            ->with([
            'referee' => $this->referee,
            'talent' => $this->talent
            ]);
    }
}
