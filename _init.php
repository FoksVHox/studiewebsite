<?php

// This file defines our used traits and autoloading for our classes, and should be included in all other PHP files in the project.
// Singleton trait for classes. Read here for more info on Singleton patterns in PHP https://stackoverflow.com/a/24852235
trait Singleton
{
    private static $instance;

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }

    final private function __wakeup()
    {
    }

    final public static function i()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
// Set our timezone
date_default_timezone_set('Europe/Copenhagen');
// Register the class autoloading function
spl_autoload_register(function ($class_name) {
    include 'modules/'.strtolower($class_name).'.php';
});
// Cookie parameters
session_set_cookie_params(
    0, // Time
    '/', // Location
    $_SERVER['HTTP_HOST'], // Domain
    1, // Secure
    1 // Httponly
);
// Create new session
if (!isset($_SESSION)) {
    session_name('APP_SESSION');
    session_start();
}
// If app is in development, echo all errors
if (Config::i()->isDevelopment()) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
if($_SERVER['REQUEST_URI'] == '/2020/jimmih20/docs'){
    Converter::i()->run();
}