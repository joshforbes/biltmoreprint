<?php

namespace BiltmorePrint\Work;


class AddNewWorkHandler {

    /**
     * @var WorkRepository
     */
    private $workRepository;
    /**
     * @var PrepareWorkImageHandler
     */
    private $prepareImage;

    function __construct(WorkRepository $workRepository, PrepareWorkImageHandler $prepareImage)
    {

        $this->workRepository = $workRepository;
        $this->prepareImage = $prepareImage;
    }

    public function handle($input)
    {
        $input = $this->prepareImage->handle($input);

        return $this->workRepository->create($input);
    }

}