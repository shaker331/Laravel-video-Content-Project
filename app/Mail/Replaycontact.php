<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Replaycontact extends Mailable
{
    use Queueable, SerializesModels;
protected $mess;
protected $replay;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mess,$replay)
    {
        $this->mess=$mess;
        $this->replay=$replay;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()

    {
$mess2=$this->mess;
$replay=$this->replay;

        return $this->to($mess2->email)
        ->view('back-end.mails.replay-contact',compact('mess2','replay'));
    }
}
