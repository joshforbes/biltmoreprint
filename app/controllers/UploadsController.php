<?php

use BiltmorePrint\Forms\ClientFileForm;
use BiltmorePrint\Forms\ClientRequestForm;
use BiltmorePrint\Uploads\DeleteUploadHandler;
use BiltmorePrint\Uploads\ReceiveUploadHandler;
use BiltmorePrint\Uploads\UploadRepository;

class UploadsController extends \BaseController {

    /**
     * @var ClientRequestForm
     */
    private $clientRequestForm;
    /**
     * @var UploadRepository
     */
    private $uploadRepository;

    /**
     * @var DeleteUploadHandler
     */
    private $deleteUploadHandler;
    /**
     * @var ReceiveUploadHandler
     */
    private $receiveUploadHandler;
    /**
     * @var ClientFileForm
     */
    private $clientFileForm;

    function __construct(ClientRequestForm $clientRequestForm, ClientFileForm $clientFileForm, UploadRepository $uploadRepository, ReceiveUploadHandler $receiveUploadHandler, DeleteUploadHandler $deleteUploadHandler)
    {
        $this->clientRequestForm = $clientRequestForm;
        $this->clientFileForm = $clientFileForm;
        $this->uploadRepository = $uploadRepository;
        $this->deleteUploadHandler = $deleteUploadHandler;
        $this->receiveUploadHandler = $receiveUploadHandler;
    }


    /**
     * Display a listing of the resource.
     * GET /uploads
     *
     * @return Response
     */
    public function index()
    {
        $uploads = $this->uploadRepository->getAllUploads();

        return View::make('uploads.index', compact('uploads'));

    }

    /**
     * Show the form for creating a new resource.
     * GET /uploads/create
     *
     * @return Response
     */
    public function create()
    {
        return View::make('uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     * POST /uploads
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();

        $this->clientRequestForm->validate($input);

        foreach ($input['file'] as $file)
            $this->clientFileForm->validate(['file' => $file]);

        $this->receiveUploadHandler->handle($input);

        Flash::success('Your file has been successfully uploaded');

        return Redirect::home();
    }

    /**
     * Display the specified resource.
     * GET /uploads/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $upload = $this->uploadRepository->getUploadWithFiles($id);

        return View::make('uploads.show', compact('upload'));
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /uploads/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->deleteUploadHandler->handle($id);

        Flash::overlay('Upload has been successfully deleted');

        return Redirect::route('uploads.index');
    }

}