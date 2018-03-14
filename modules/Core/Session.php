<?php
/**
 * Created by PhpStorm.
 * User: ABEEB
 * Date: 8/6/2017
 * Time: 5:48 PM
 */

namespace Modules\Core;


class Session
{
    public static function start(){
        session_start();
    }

    public static function put($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function delete($name)
    {
        if (self::exists($_SESSION[$name])) {
            unset($_SESSION[$name]);
        }
    }

    public static function exists($name)
    {
        $response = isset($_SESSION[$name]) ? true : false;
        return $response;
    }

    public static function get($name)
    {
        $value = isset($_SESSION[$name]) ? $_SESSION[$name] : null;
        return $value;
    }

    public static function destroy()
    {
        session_unset();
        session_destroy();
    }
}