<?php

namespace BiltmorePrint\Forms;

use Laracasts\Validation\FormValidator;

class ClientFileForm extends FormValidator{

    /**
     * Validation rules for the quote request form
     * @var array
     */
    protected $rules = [
        'file' => 'mimes:pdf,jpeg,jpg,png,doc,tiff,bmp'
    ];
}