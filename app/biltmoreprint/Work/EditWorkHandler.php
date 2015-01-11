<?php

namespace BiltmorePrint\Work;


use BiltmorePrint\Forms\WorkForm;

class EditWorkHandler {

    /**
     * @var WorkRepository
     */
    private $workRepository;
    /**
     * @var PrepareWorkImageHandler
     */
    private $prepareImage;
    /**
     * @var WorkForm
     */
    private $workForm;

    function __construct(WorkRepository $workRepository, PrepareWorkImageHandler $prepareImage, WorkForm $workForm)
    {
        $this->workRepository = $workRepository;
        $this->prepareImage = $prepareImage;
        $this->workForm = $workForm;
    }

    public function handle($id, $input)
    {
        $work = $this->workRepository->getWork($id);

        if (!isset($input['image'])) {
            $input['image'] = $work->image;
            $input['thumbnail'] = $work->thumbnail;
        } else {
            $this->workForm->validate($input);
            $input = $this->prepareImage->handle($input);
            $this->workRepository->deleteAssociatedImages($work);
        }

        $work->fill($input)->save();

        return $work;
    }

}