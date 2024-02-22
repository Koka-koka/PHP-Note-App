<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$form = LoginForm::validate($attributes = [
	'email' => $_POST['email'],
	'password' => $_POST['password'],

]);

$auth = new Authenticator();

$loggedIn = $auth->attempt($attributes['email'], $attributes['password']);

if (!$loggedIn) {

	$form->error('email', 'No matching account found')->throw();

}

redirect('./');
