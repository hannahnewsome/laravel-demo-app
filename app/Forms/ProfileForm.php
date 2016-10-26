<?php

namespace App\Forms;

use Laracasts\Validation\FormValidator;

class ProfileForm extends FormValidator {
  protected $rules = [
    'location'         => 'required',
    'bio'              => 'required',
    'twitter_username' => 'required',
    'github_username'  => 'required'
  ];

}
