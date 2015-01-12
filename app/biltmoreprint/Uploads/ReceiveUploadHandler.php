<?php

namespace BiltmorePrint\Uploads;

use BiltmorePrint\ClientFiles\ClientFileRepository;
use Event;

class ReceiveUploadHandler {

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

    public function handle($input)
    {
        $upload = $this->uploadRepository->create($input);

        if ($input['file'][0])
        {
            foreach ($input['file'] as $file)
                $this->clientFileRepository->create($file, $upload);
        }

        Event::fire('upload.received', [$upload->toArray()]);
    }

} 