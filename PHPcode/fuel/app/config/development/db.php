<?php
/**
 * The development database settings. These get merged with the global settings.
 */

/* おなか空いた。*/
return array(
	'default' => array(
		'connection' => array(
			'dsn' => 'mysql:host=localhost;dbname=questionnaire;unix_socket=/var/run/mysqld/mysqld.sock',
			'username' => 'root',
			'password' => 'root',
		),
	),
);
