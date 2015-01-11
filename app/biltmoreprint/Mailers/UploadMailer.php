<?php

namespace BiltmorePrint\Mailers;

class UploadMailer extends Mailer{

    /**
     * @param $clientEmailAddress
     */
    public function sendUploadConfirmationTo($clientEmailAddress) {
        $subject = 'Your file upload has been received';
        $view = 'emails.quotes.confirm';

        $this->sendTo($clientEmailAddress, $subject, $view);

    }

    public function sendUploadNotificationTo() {
        $subject = 'A file upload has been received';
        $view = 'emails.quotes.notify';

        $this->sendTo(ADMIN_EMAIL, $subject, $view);
    }
}