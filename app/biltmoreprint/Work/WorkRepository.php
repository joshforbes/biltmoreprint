<?php

namespace BiltmorePrint\Work;

class WorkRepository {

    /**
     * fetch all Work from database
     *
     * @return mixed
     */
    public function getAllWork()
    {
        return Work::all();
    }

    /**
     * @param $id
     * @return \Illuminate\Support\Collection|static
     */
    public function getWork($id)
    {
        return Work::findOrFail($id);
    }

    /**
     * Create new work based on supplied input
     *
     * @param $input
     * @return static
     */
    public function create($input)
    {
        return Work::create($input);
    }

    /**
     * @param Work $work
     * @return Work
     */
    public function deleteAssociatedImages(Work $work)
    {
        \File::delete($work->image);
        \File::delete($work->thumbnail);

        return $work;
    }

    public function getMostRecentWork($quantity = 6)
    {
        return Work::orderBy('created_at', 'desc')->take($quantity)->get();
    }

    public function getPaginatedWork($perPage = 20)
    {
        return Work::orderBy('created_at', 'desc')->paginate($perPage);
    }



} 