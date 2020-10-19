<?php
// This is our config class. This file contains the SQL passwords and API keys and the version of the app.
// You can add other things as needed here as well. Make sure to update the details inside of here, if you update the apps keys/passwords, or are just cloning from git yourself.
class Config
{
    use Singleton;

    // Is the app in development?
    private static $InDevelopment = true;

    private static $path = '/wwwroot/2020/jimmih20';

    // Everything below is simply some functions to get the data out from this file
    public function getSQL()
    {
        return self::$SQL;
    }
    public function getVersion()
    {
        if (self::$InDevelopment) {
            $this->Version = bin2hex(random_bytes(8));
        }
        return $this->Version;
    }
    public function isDevelopment()
    {
        return self::$InDevelopment;
    }

    public function path()
    {
        return self::$path;
    }
}