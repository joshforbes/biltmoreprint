<?php

namespace BiltmorePrint\Forms;

use Laracasts\Validation\FormValidator;

class WorkForm extends FormValidator{

    /**
     * Validation rules for the quote request form
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'image' => 'required|image'
    ];
}