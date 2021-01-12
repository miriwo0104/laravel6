<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppMail extends Mailable
{
    use Queueable, SerializesModels;

    private $postData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($postData)
    {
        $this->postData = $postData;
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
            if (isset($this->postData['filePath']) && isset($this->postData['fileName'])) {
                // 添付ファイルある時
                return $this->from('app@example')
                            ->subject($this->postData['subject'])
                            ->view('mails.html_mail', ['postData' => $this->postData])
                            ->attachFromStorage($this->postData['filePath'], $this->postData['fileName']);
            } else {
                # 添付ファイル無い時
                return $this->from('app@example')
                            ->subject($this->postData['subject'])
                            ->view('mails.html_mail', ['postData' => $this->postData]);
            }
                        //下記はだめ！
/*                         ->attachFromStorage(asset($this->postData['filePath'])); */
        } else {
            // TEXTメール
            return $this->from('app@example')->subject($this->postData['subject'])->text('mails.text_mail', ['postData' => $this->postData]);
        }
    }
}
