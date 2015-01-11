<?php

use BiltmorePrint\Forms\ClientFileForm;
use BiltmorePrint\Forms\ClientRequestForm;
use BiltmorePrint\Quotes\DeleteQuoteHandler;
use BiltmorePrint\Quotes\ReceiveQuoteRequestHandler;
use BiltmorePrint\Quotes\QuoteRepository;

class QuotesController extends \BaseController {

    /**
     * @var ClientRequestForm
     */
    private $clientRequestForm;
    /**
     * @var QuoteRepository
     */
    private $quoteRepository;

    /**
     * @var DeleteQuoteHandler
     */
    private $deleteQuoteHandler;
    /**
     * @var ReceiveQuoteRequestHandler
     */
    private $receiveQuoteRequestHandler;
    /**
     * @var ClientFileForm
     */
    private $clientFileForm;

    function __construct(ClientRequestForm $clientRequestForm, ClientFileForm $clientFileForm, QuoteRepository $quoteRepository, ReceiveQuoteRequestHandler $receiveQuoteRequestHandler, DeleteQuoteHandler $deleteQuoteHandler)
    {
        $this->clientRequestForm = $clientRequestForm;
        $this->clientFileForm = $clientFileForm;
        $this->quoteRepository = $quoteRepository;
        $this->deleteQuoteHandler = $deleteQuoteHandler;
        $this->receiveQuoteRequestHandler = $receiveQuoteRequestHandler;
    }


    /**
     * Display a listing of the resource.
     * GET /quotes
     *
     * @return Response
     */
    public function index()
    {
        $quotes = $this->quoteRepository->getAllQuotes();

        return View::make('quotes.index', compact('quotes'));

    }

    /**
     * Show the form for creating a new resource.
     * GET /quotes/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('quotes.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /quotes
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();

        $this->clientRequestForm->validate($input);

        foreach ($input['file'] as $file)
            $this->clientFileForm->validate(['file' => $file]);

        $this->receiveQuoteRequestHandler->handle($input);

        Flash::success('Your quote has been submitted');

        return Redirect::home();
    }

    /**
     * Display the specified resource.
     * GET /quotes/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $quote = $this->quoteRepository->getQuoteWithFiles($id);

        return View::make('quotes.show', compact('quote'));
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /quotes/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->deleteQuoteHandler->handle($id);

        Flash::overlay('Quote has been successfully deleted');

        return Redirect::route('quotes.index');
    }

}