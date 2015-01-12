<?php

namespace BiltmorePrint\Mailers;


class UploadMailer extends Mailer{

    public function sendUploadConfirmationTo($upload) {
        $subject = 'Your file upload has been received';
        $view = 'emails.uploads.confirm';

        $this->sendTo($upload['email'], $subject, $view);

    }

    public function sendUploadNotificationTo($upload) {
        $subject = 'A file upload has been received';
        $view = 'emails.uploads.notify';

        $this->sendTo(ADMIN_EMAIL, $subject, $view, $upload);
    }
}