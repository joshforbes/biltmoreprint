<?php

namespace BiltmorePrint\Forms;

use Laracasts\Validation\FormValidator;

class ClientRequestForm extends FormValidator{

    /**
     * Validation rules for the quote request form
     * @var array
     */
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|alpha_dash',
        'quantity' => 'required|numeric',
    ];
} 