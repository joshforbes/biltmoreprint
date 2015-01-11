<?php

namespace BiltmorePrint\Uploads;

class UploadRepository {

    /**
     * fetch all Uploads from database
     *
     * @return mixed
     */
    public function getAllUploads() {
        return Upload::all();
    }

    /**
     * Create a new quote based on supplied input
     *
     * @param $input
     * @return static
     */
    public function create($input) {
        return Upload::create($input);
    }

    /**
     * find a quote and eager load all associated client files
     *
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection|null|static
     */
    public function getUploadWithFiles($id)
    {
        return $quote = Upload::with('clientFiles')->findOrFail($id);
    }
} 