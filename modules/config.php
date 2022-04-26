<?php
// This is our config class. This file contains the SQL passwords and API keys and the version of the app.
// You can add other things as needed here as well. Make sure to update the details inside of here, if you update the apps keys/passwords, or are just cloning from git yourself.
class Config
{
    use Singleton;
    /* MYSQL CONNECTION */
    private static $SQL = [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'default_database' => '',
    ];
    private $Version = '1.0';
    private static $Name = 'PHP Autoload'; // Name of the name
    private static $Salt = '5e4978dcd24d4'; // Create your own salt key! I suggest you use uniqid() for generating the salt key.
    private static $Est = '2019'; // The establish date of the website

    // Is the app in development?
    private static $InDevelopment = true;
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

    public function getName()
    {
        return self::$Name;
    }

    public function getSaltKey()
    {
        return self::$Salt;
    }

    public function getEstDate()
    {
        return self::$Est;
    }
}