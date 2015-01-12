<?php

namespace BiltmorePrint\Mailers;


class QuoteMailer extends Mailer{

    public function sendQuoteConfirmationTo($quote) {
        $subject = 'Your Quote Request has been received';
        $view = 'emails.quotes.confirm';

        $this->sendTo($quote['email'], $subject, $view);

    }

    public function sendQuoteNotificationTo($quote) {
        $subject = 'A Quote request has been submitted';
        $view = 'emails.quotes.notify';

        $this->sendTo(ADMIN_EMAIL, $subject, $view, $quote);
    }
} 