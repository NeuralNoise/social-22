<?php namespace Socializer\Forms;

use Laracasts\FormValidator;

class RegistrationForm extends FormValidator {

	/**
	  * Validation rules for the registration form
	  * @var array
	  */
	protected $rules = [
		'email' 	=> 'required|unique:users',
		'password'	=> 'required|confirmed'
	];
}