<?php
class Route
{
    static $routers = [];
    static $_instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$_instance instanceof self) {
            self::$_instance = new self;
            self::readRoutes();
        }
        return self::$_instance;
    }

    public static function get($url, $function)
    {
        self::$routers[$url] = explode('@', $function);
    }

    private static function readRoutes()
    {
        require(ROOT_DIR .'routes.php');
    }

    public static function getController($url)
    {
        $pureUrl = explode('?', $url)[0];
        if (empty($pureUrl)) {
            $pureUrl = '/';
        }
        if (!array_key_exists($pureUrl, self::$routers)) {
            return false;
        }
        return self::$routers[$pureUrl];
    }
}
