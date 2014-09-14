<?php

class RegistrationController extends \BaseController {

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
		User::create(
			Input::only('email', 'password')
		);
		return Redirect::home();
	}
}
