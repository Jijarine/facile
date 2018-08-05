<?php 

error_reporting(E_ALL & ~E_STRICT & ~E_DEPRECATED & ~E_NOTICE);

if (!ini_get('display_errors')) {
	ini_set('display_errors', '1');
}

$config = [
	'db' => [
		'host' => 'localhost',
		'user' => 'coleds_faciledev',
		'pass' => '1Ptrxp_0t^k%',
		'name' => 'coleds_faciledev',
	]
];

?>