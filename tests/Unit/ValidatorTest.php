<?php

use Core\Validator;

it('validates a string', function () {
	expect(Validator::string('foobar'))->toBeTrue();
	expect(Validator::string(false))->toBeFalse();
	expect(Validator::string(''))->toBeFalse();
});

it('validate a string with a minimum length', function () {
	expect(Validator::string('foobar', 20))->toBeFalse();
});

it('validates an email', function () {
	expect(Validator::email('foobar'))->toBeFalse();
	expect(Validator::email('foobar@example.com'))->toBeTrue();
});

it('validates that a number is greater than', function () {
	expect(Validator::greater_than(10, 1))->toBeTrue();
	expect(Validator::greater_than(10, 20))->toBeFalse();
})->only();