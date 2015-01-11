<?php

namespace BiltmorePrint\Quotes;

class QuoteRepository {

    /**
     * fetch all Quotes from database
     *
     * @return mixed
     */
    public function getAllQuotes() {
        return Quote::all();
    }

    /**
     * Create a new quote based on supplied input
     *
     * @param $input
     * @return static
     */
    public function create($input) {
        return Quote::create($input);
    }

    /**
     * find a quote and eager load all associated client files
     *
     * @param $id
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection|null|static
     */
    public function getQuoteWithFiles($id)
    {
        return $quote = Quote::with('clientFiles')->findOrFail($id);
    }
} 