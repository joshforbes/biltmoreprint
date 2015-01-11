<?php

namespace BiltmorePrint\Mailers;

class QuoteMailer extends Mailer{

    /**
     * @param $clientEmailAddress
     */
    public function sendQuoteConfirmationTo($clientEmailAddress) {
        $subject = 'Your Quote Request has been received';
        $view = 'emails.quotes.confirm';

        $this->sendTo($clientEmailAddress, $subject, $view);

    }

    public function sendQuoteNotificationTo() {
        $subject = 'A Quote request has been submitted';
        $view = 'emails.quotes.notify';

        $this->sendTo(ADMIN_EMAIL, $subject, $view);
    }
} 