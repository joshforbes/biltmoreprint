<?php

use BiltmorePrint\ClientFiles\ClientFileRepository;

class ClientFilesController extends BaseController {

    /**
     * @var ClientFileRepository
     */
    protected $clientFileRepository;

    function __construct(ClientFileRepository $clientFileRepository)
    {
        $this->clientFileRepository = $clientFileRepository;
    }

    /**
     * @param $clientFileId
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function download($clientFileId)
    {
        $clientFile = $this->clientFileRepository->findById($clientFileId);
        return Response::download($clientFile->path);
    }

}
