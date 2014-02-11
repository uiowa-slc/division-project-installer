<?php

global $project;
$project = 'mysite';

global $database;
//!!! YOU HAVE TO DEFINE YOUR DATABASE FIRST, MAN. !!!
//$database = 'homecoming';
 
// Use _ss_environment.php file for configuration
require_once("conf/ConfigureFromEnv.php");


// Set the site locale
i18n::set_locale('en_US');