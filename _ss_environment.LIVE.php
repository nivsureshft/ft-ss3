<?php

//see:
// /framework/conf/ConfigureFromEnv.php
// http://doc.silverstripe.org/framework/en/topics/environment-management


define('SS_ENVIRONMENT_TYPE', 'dev'); //dev/test/live
 
/* Database connection */

define('SS_DATABASE_CLASS', 'MySQLDatabase');
define('SS_DATABASE_SERVER', getenv('DBHOST'));
define('SS_DATABASE_NAME', getenv('DBNAME'));
define('SS_DATABASE_USERNAME', getenv('DBUSER'));
define('SS_DATABASE_PASSWORD', getenv('DBPASS'));

/* Configure a default username and password to access the CMS on all sites in this environment. */
define('SS_DEFAULT_ADMIN_USERNAME', 'niv.suresh@ft.co.uk');
define('SS_DEFAULT_ADMIN_PASSWORD', 'ch411c0n');
