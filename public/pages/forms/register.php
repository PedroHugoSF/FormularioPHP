<?php

require "../../../bootstrap.php";

$validate = validate([

	'name' => 's',
	'email' => 'e',
	'password' => 's',
]);

$cadastrar = create('users', $validate);

dd($fields);






