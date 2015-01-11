<?php

namespace BiltmorePrint\Uploads;

use BiltmorePrint\ClientFiles\ClientFileRepository;

class DeleteUploadHandler {

    /**
     * @var UploadRepository
     */
    private $uploadRepository;
    /**
     * @var ClientFileRepository
     */
    private $clientFileRepository;

    function __construct(UploadRepository $uploadRepository, ClientFileRepository $clientFileRepository)
    {

        $this->uploadRepository = $uploadRepository;
        $this->clientFileRepository = $clientFileRepository;
    }

    public function handle($id)
    {
        $upload = $this->uploadRepository->getUploadWithFiles($id);

        foreach ($upload->clientFiles as $clientFile)
        {
            $this->clientFileRepository->delete($clientFile);
        }

        $upload->delete();
    }


} 