<?php

function display($value) 
{
	echo "<pre>";
	print_r($value);
	echo "</pre>";

	die();
}

function url_is($value)
{
	return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
	if (!$condition) {
		abort($status);
	}
}