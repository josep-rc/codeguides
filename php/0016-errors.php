<?php

// https://www.php.net/manual/es/language.errors.basics.php
// Si no definimos manejo de errores
// dependerá de php.ini
// error_reporting
// display_errors
// log_errors
// error_log

// https://diego.com.es/excepciones-en-php
// https://www.php.net/manual/es/book.errorfunc.php

// warnings don't stop script execution

error_reporting(0); // No reporting errors
error_reporting(E_ALL); // All errors reported
error_reporting(E_ALL & E_WARNING); // All except warnings



function errorHandler(int $type, string $msg, ?string $file = null, ?int $line_number = null)
{
    echo $type.': '.$msg.' in '.$file.' on line '.$line_number;
    exit;
}

set_error_handler('errorHandler', E_ALL);

error_log('My error');

trigger_error('Example error', E_USER_ERROR);
