<?php

class QuotesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /quotes
	 *
	 * @return Response
	 */
	public function index()
	{
		//fetch all quotes
        $quotes = Quote::all();

        //load a view to display them
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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /quotes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /quotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$quote = Quote::findOrFail($id);

        return View::make('quotes.show', compact('quote'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /quotes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /quotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /quotes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}