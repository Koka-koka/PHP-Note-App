<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {

	$auth = new Authenticator();

	if ($auth->attempt($email, $password)) {

		redirect('./');

	}

	$form->error('email', 'No matching account found');

}

Session::flash('errors', $form->errors());

Session::flash('old', [
	'email' => $_POST['email'],
]);

return redirect('./login');
