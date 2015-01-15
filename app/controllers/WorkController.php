<?php

use BiltmorePrint\Work\AddNewWorkHandler;
use BiltmorePrint\Work\DeleteWorkHandler;
use BiltmorePrint\Work\EditWorkHandler;
use BiltmorePrint\Work\WorkRepository;
use BiltmorePrint\Forms\WorkForm;

class WorkController extends \BaseController {

    /**
     * @var WorkRepository
     */
    private $workRepository;
    /**
     * @var WorkForm
     */
    private $workForm;
    /**
     * @var AddNewWorkHandler
     */
    private $addNewWorkHandler;
    /**
     * @var DeleteWorkHandler
     */
    private $deleteWorkHandler;
    /**
     * @var EditWorkHandler
     */
    private $editWorkHandler;

    function __construct(WorkRepository $workRepository, WorkForm $workForm, AddNewWorkHandler $addNewWorkHandler, DeleteWorkHandler $deleteWorkHandler, EditWorkHandler $editWorkHandler)
    {
        $this->workRepository = $workRepository;
        $this->workForm = $workForm;
        $this->addNewWorkHandler = $addNewWorkHandler;
        $this->deleteWorkHandler = $deleteWorkHandler;
        $this->editWorkHandler = $editWorkHandler;
    }

    /**
	 * Display a listing of the resource.
	 * GET /work
	 *
	 * @return Response
	 */
	public function index()
	{
        $paginatedWork = $this->workRepository->getPaginatedWork(9);

        return View::make('work.index', compact('paginatedWork'));
	}

    /**
     * Display a listing of the resource to the admin.
     * GET /work
     *
     * @return Response
     */
    public function adminIndex()
    {
        $work = $this->workRepository->getAllWorkByCreatedDate();

        return View::make('work.admin.index', compact('work'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /work/create
	 *
	 * @return Response
	 */
	public function create()
	{
		Return View::make('work.admin.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /work
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();

        $this->workForm->validate($input);

        $this->addNewWorkHandler->handle($input);

        Flash::overlay('New work has been added');

        return Redirect::route('work.admin.index');
	}

	/**
	 * Display the specified resource.
	 * GET /work/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $work = $this->workRepository->getWork($id);

        return View::make('work.show', compact('work'));
	}

    /**
     * Display the specified resource to the admin.
     * GET /work/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function adminShow($id)
    {
        $work = $this->workRepository->getWork($id);

        return View::make('work.admin.show', compact('work'));
    }

	/**
	 * Show the form for editing the specified resource.
	 * GET /work/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $work = $this->workRepository->getWork($id);
        return View::make('work.admin.edit')->withWork($work);
	}

    public function update($id)
    {
        $input = Input::all();

        $work = $this->editWorkHandler->handle($id, $input);

        Flash::overlay('Work successsfully edited');
        return Redirect::route('work.admin.show', $work->id);
    }

	/**
	 * Remove the specified resource from storage.
	 * DELETE /work/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $this->deleteWorkHandler->handle($id);

        Flash::overlay('Work successfully deleted');

        return Redirect::route('work.admin.index');
	}

}