<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => 'sandbox175b7e3bad2a402bbf23cf1366abe70b.mailgun.org',
		'secret' => 'key-dd3a1145794df12b51d41c5e40f2832f',
	],

	'mandrill' => [
		'secret' => 'Z2NYnk8qBH8bPTA33rCG7A',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],

];
