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
	'server' => 'ec2-63-32-205-164.eu-west-1.compute.amazonaws.com',
	'username' => 'u9igksm5sum5f5',
	'password' => 'paf1cb70638cd21b3adc06199d9582ba8a800763c25f94a885c34267e21a36b24',
	'database' => 'd72l1pp4sq208l'
 );

// Set the site locale
i18n::set_locale('en_US');
