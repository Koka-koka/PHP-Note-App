<?php

use Core\Response;

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

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}