<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseInvite extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $course;

    public function __construct($course)
    {
        //
         $this->course = $course;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mytgp.nih@gmail.com','MyTGP')
            ->subject('MyTGP - Invitation to join TGP Course::'.$this->course->title)
            ->markdown('email.course-invite');
    }
}
