<?php namespace BiltmorePrint\Uploads;

class Upload extends \Eloquent {

    protected $fillable = ['name', 'company', 'email', 'phone', 'project', 'quantity', 'due', 'description'];

    public function clientFiles()
    {
        return $this->morphMany('BiltmorePrint\ClientFiles\ClientFile', 'fileable');
    }
}