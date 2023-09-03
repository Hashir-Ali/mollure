<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProfessionalMails extends Mailable
{
    use Queueable, SerializesModels;
    public $obj;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($obj)
    {
        $this->obj = $obj;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->obj->subject;

        return $this->view('mail.professionalMails')->subject($subject);
        
        /*if($this->obj->type=='verify'){
            return $this->view('mail.verify_email_en')->subject($subject);
        }else{
            return $this->view('mail.professionalMails')->subject($subject);
        }*/
        
    }
}
