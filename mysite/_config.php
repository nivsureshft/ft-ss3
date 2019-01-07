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
    'server' => getenv('HOST'),
    'username' => 'f1h5s554zydvo4mj',
    'password' => 'gdltv1ru5ay2404y',
    'database' => 'ovf13fr54nf2zuvm',
);
// Set the site locale
i18n::set_locale('en_US');
