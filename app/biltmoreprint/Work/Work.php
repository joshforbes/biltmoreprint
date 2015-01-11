<?php namespace BiltmorePrint\Work;

use Eloquent;

class Work extends Eloquent {

    protected $fillable = ['name', 'description', 'image', 'thumbnail'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'work';

    public function imagePath() {
        return str_replace($_SERVER['DOCUMENT_ROOT'], '', $this->image);
    }

    public function thumbnailPath() {
        return str_replace($_SERVER['DOCUMENT_ROOT'], '', $this->thumbnail);
    }

}
