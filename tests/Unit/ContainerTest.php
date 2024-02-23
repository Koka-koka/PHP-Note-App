<?php

use Core\Container;

test('It resolves something from Container', function () {

	$container = new Container();

	$container->bind('foo', function () {
		return 'bar';
	});

	$result = $container->resolve('foo');

	expect($result)->toEqual('bar');
});
