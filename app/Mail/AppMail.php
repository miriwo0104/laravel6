<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (true) {
            // HTMLメール
            return $this->from('app@example')->subject($this->mailData['subject'])->view('mails.text', ['mailData' => $this->mailData]);
        } else {
            // TEXTメール
            return $this->from('app@example')->subject($this->mailData['subject'])->text('mails.text', ['mailData' => $this->mailData]);
        }
    }
}
