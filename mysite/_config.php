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
    'type' => 'MySQLDatabase',
    'server' => 'wyqk6x041tfxg39e.chr7pe7iynqr.eu-west-1.rds.amazonaws.com',
    'username' => 'f1h5s554zydvo4mj',
    'password' => 'gdltv1ru5ay2404y',
    'database' => 'ovf13fr54nf2zuvm',
);
// Set the site locale
i18n::set_locale('en_US');
