<?php
namespace JustMoments\Utils;

class String
{
    public static function underscore2camelCase($string, $capitalizeFirstCharacter = false) 
    {

        $str = str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));

        if (!$capitalizeFirstCharacter) {
            $str[0] = strtolower($str[0]);
        }

        return $str;
    }
    public static function camelCase2underscore($string)
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', $string));
    }
}
