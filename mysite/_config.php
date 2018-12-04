<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'PostgreSQLDatabase',
	'server' => 'localhost',
	'username' => 'niv.suresh',
	'password' => 'ch411c0n',
	'database' => 'niv.suresh',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');
