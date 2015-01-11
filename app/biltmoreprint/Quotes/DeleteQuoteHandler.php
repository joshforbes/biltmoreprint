<?php

namespace BiltmorePrint\Quotes;

use BiltmorePrint\ClientFiles\ClientFileRepository;

class DeleteQuoteHandler {

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

    public function handle($id)
    {
        $quote = $this->quoteRepository->getQuoteWithFiles($id);

        foreach ($quote->clientFiles as $clientFile)
        {
            $this->clientFileRepository->delete($clientFile);
        }

        $quote->delete();
    }


} 