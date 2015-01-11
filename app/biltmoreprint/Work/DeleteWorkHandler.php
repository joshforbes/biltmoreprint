<?php

namespace BiltmorePrint\Work;

class DeleteWorkHandler {

    /**
     * @var WorkRepository
     */
    private $workRepository;

    function __construct(WorkRepository $workRepository)
    {
        $this->workRepository = $workRepository;
    }

    public function handle($id)
    {
        $work = $this->workRepository->getWork($id);

        $this->workRepository->deleteAssociatedImages($work);

        return $work->delete();
    }


} 