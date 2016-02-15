<?php
namespace app\models;

class Hash
{
    public static function make($string)
    {
        return hash('md5', $string);
    }

    public static function salt($length)
    {
        return mcrypt_create_iv($length);
    }

    public static function unique()
    {
        return self::make(uniqid());
    }
}