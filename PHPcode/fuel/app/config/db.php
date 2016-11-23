<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
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
