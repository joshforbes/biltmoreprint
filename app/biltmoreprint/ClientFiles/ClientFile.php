<?php namespace BiltmorePrint\ClientFiles;

class ClientFile extends \Eloquent {

    protected $fillable = ['path'];

    public function fileable()
    {
        return $this->morphTo();
    }

}