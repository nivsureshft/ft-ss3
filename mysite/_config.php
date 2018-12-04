<?php

global $project;
$project = 'mysite';

global $databaseConfig;
/*$databaseConfig = array(
	'type' => 'PostgreSQLDatabase',
	'server' => 'localhost',
	'username' => 'niv.suresh',
	'password' => 'ch411c0n',
	'database' => 'niv.suresh',
	'path' => ''
);*/
$databaseConfig = array(
	'type' => 'PostgreSQLDatabase',
	'server' => 'ec2-54-75-231-156.eu-west-1.compute.amazonaws.com',
	'username' => 'ctxvthrqdqrbfi',
	'password' => 'e642c895de5fe4bbfab21925dacc657b9f891bbe4d267cbc6607fb29b039a139',
	'database' => 'df5211dbj57t0d',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');
