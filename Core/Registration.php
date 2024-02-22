<?php

namespace Core;

class Registration {

	public function attempt($email, $password) {

		$user = App::resolve(Database::class)->query('Select * from users where email = :email', [
			'email' => $email,
		])->find();

		if (!$user) {

			$this->register($email, $password);

			return true;

		}

		return false;

	}

	public function register($email, $password) {

		App::resolve(Database::class)->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
			'email' => $email,
			'password' => password_hash($password, PASSWORD_BCRYPT),
		]);

	}

}