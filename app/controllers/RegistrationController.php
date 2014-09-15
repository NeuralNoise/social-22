<?php

use Socializer\Forms\RegistrationForm;

class RegistrationController extends \BaseController {

	/**
	 * @var RegistrationForm
	 */
	private $registrationForm;

	function __contruct(RegistrationForm $registrationForm)
	{
		$this->registrationForm = $registrationForm;
	}

	/**
	 * Show form to register the user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}

	/**
	 * Creates a new user
	 *
	 * @return String
	 */
	public function store ()
	{
		$this->RegistrationForm->validate(Input::all());
		
		$user = User::create(
			Input::only('email', 'password')
		);

		Auth::login($user);

		return Redirect::home();
	}
}
