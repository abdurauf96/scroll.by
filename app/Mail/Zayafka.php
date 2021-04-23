<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Zayafka extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct($data)
    {   
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if(isset($this->data['file'])){
            return $this->view('mails.zayafka')
                ->subject($this->data['subject'])
                ->attach(public_path('files/'.$this->data['file']));
        }else{
            return $this->view('mails.zayafka')
                ->subject($this->data['subject']);
        }
        
    }
}
