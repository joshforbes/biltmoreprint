<?php

namespace BiltmorePrint\Mailers;

use Illuminate\Mail\Mailer as Mail;

abstract class Mailer {


    /**
     * @var Mail
     */
    private $mail;

    /**
     * @param Mail $mail
     */
    function __construct(Mail $mail)
    {

        $this->mail = $mail;
    }

    /**
     * @param $client
     * @param $subject
     * @param $view
     * @param $data
     */
    public function sendTo($emailAddress, $subject, $view, $data = [])
    {
        $this->mail->queue($view, $data, function ($message) use($emailAddress, $subject)
        {
            $message->to($emailAddress)->subject($subject);
        });
    }

} 