<?php

Event::listen('quote.received', 'BiltmorePrint\Mailers\QuoteMailer@sendQuoteConfirmationTo');
Event::listen('quote.received', 'BiltmorePrint\Mailers\QuoteMailer@sendQuoteNotificationTo');

Event::listen('upload.received', 'BiltmorePrint\Mailers\UploadMailer@sendUploadConfirmationTo');
Event::listen('upload.received', 'BiltmorePrint\Mailers\UploadMailer@sendUploadNotificationTo');
