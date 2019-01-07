<?php

//see:
// /framework/conf/ConfigureFromEnv.php
// http://doc.silverstripe.org/framework/en/topics/environment-management


define('SS_ENVIRONMENT_TYPE', 'dev'); //dev/test/live
 
/* Database connection */

define('SS_DATABASE_CLASS', 'MySQLDatabase');
define('SS_DATABASE_SERVER', 'localhost');
define('SS_DATABASE_NAME', 'niv.suresh');
define('SS_DATABASE_USERNAME', 'niv.suresh');
define('SS_DATABASE_PASSWORD', 'ch411c0n');

/* Configure a default username and password to access the CMS on all sites in this environment. */
define('SS_DEFAULT_ADMIN_USERNAME', 'niv.suresh@ft.com');
define('SS_DEFAULT_ADMIN_PASSWORD', 'ch411c0n');

define('SS_SEND_ALL_EMAILS_TO', 'niv.suresh@ft.com'); //useful for testing
define('SS_SEND_ALL_EMAILS_FROM', 'niv.suresh@ft.com'); //useful for testing

define('SS_ERROR_LOG', '/log/ss/silverstripe.log');

//custom definitions
define('ADMIN_EMAIL_FROM', 'niv.suresh@ft.com');
define('ADMIN_EMAIL_TO', 'niv.suresh@ft.com');
