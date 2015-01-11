<?php

namespace BiltmorePrint\Mailers;

class ContactMailer extends Mailer{

    public function sendContactMessageToAdmin($data) {
        $subject = "A message has been received";
        $view = 'emails.contact.message';

        $this->sendTo(ADMIN_EMAIL, $subject, $view, $data);
    }
}