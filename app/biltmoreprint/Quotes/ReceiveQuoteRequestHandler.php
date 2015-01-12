<?php

namespace BiltmorePrint\Quotes;

use BiltmorePrint\ClientFiles\ClientFileRepository;
use Event;

class ReceiveQuoteRequestHandler {

    /**
     * @var QuoteRepository
     */
    private $quoteRepository;
    /**
     * @var ClientFileRepository
     */
    private $clientFileRepository;

    function __construct(QuoteRepository $quoteRepository, ClientFileRepository $clientFileRepository)
    {
        $this->quoteRepository = $quoteRepository;
        $this->clientFileRepository = $clientFileRepository;
    }

    public function handle($input)
    {
        $quote = $this->quoteRepository->create($input);

        if ($input['file'][0])
        {
            foreach ($input['file'] as $file)
                $this->clientFileRepository->create($file, $quote);
        }

        Event::fire('quote.received', [$quote->toArray()]);
    }

} 