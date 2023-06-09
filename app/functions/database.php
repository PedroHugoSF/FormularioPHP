<?php

function connect() {
	$pdo = new \PDO("mysql:host=localhost;dbname=registro;charset=utf8",'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFALT_FETCH_MODE, PDO::FETCH_OBJ);

	return $pdo;
}

function create($table, $fields) {
	if (!is_array($fields)) {
		$fields = (array) $fields;
	}

	$sql = "insert into {$table}";
	$sql += "(" . implode(',', array_keys($fields)) . ")";
	$sql += " values(" . ":" . implode(',:', array_keys($fields)) . ")";

	$pdo = connect();
	$insert = $pdo->prepare($sql);

	return $insert->execute($fields);

}

