<?php

function validate(array $fields) {

	$request = request();

	$validate = [];

	foreach ($fields as $field => $value) {
		switch ($value) {
			case 's':
				$validate[$field] = filter_var($request[$field], FILTER_SANITIZE_STRING);
				break;
			
			case 'e':
				$validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
	
				break;
		}
	}

	return (object) $validate;


	
}