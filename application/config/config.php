<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);


define('URL', 'http://localhost:80/ditra/');

define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'ditrabd');
define('DB_USER', 'root');
define('DB_PASS', '');
