<?php namespace BiltmorePrint\Quotes;

class Quote extends \Eloquent {

    protected $fillable = ['name', 'company', 'email', 'phone', 'project', 'quantity', 'due', 'description'];

    public function clientFiles()
    {
        return $this->morphMany('BiltmorePrint\ClientFiles\ClientFile', 'fileable');
    }
}