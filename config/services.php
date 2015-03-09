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
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
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

	'google' => [
		'client_id'     => '763672080471-g6s8ak4sjhl4u8tolhsdfjnt14nc8nuv.apps.googleusercontent.com',
		'client_secret' => '2PC1eef3OOAOODkGOLTIRBgX',
		'redirect'      => 'http://localhost:8000/login',
	],

];
