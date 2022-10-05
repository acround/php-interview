<?php

/**
 * Class to save settings
 *
 * @author acround
 */
class Settings
{

    private static $settings = [];

    public static function setItem($name, $value)
    {
        self::$settings[$name] = $value;
    }

    public static function getItem($name)
    {
        $settings = self::$settings;
        return isset($settings[$name]) ? $settings[$name] : null;
    }

}
