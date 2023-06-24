<?php

namespace App\Helpers;

class CommonHelper
{
    public static function convertToCode($string)
    {
        return strtoupper('G_' . str_replace(' ', '_', $string));
    }

    public static function convertToArrayCode($listName)
    {
        foreach ($listName as $string) {
            $result[] = [
                'name' => $string,
                'code' => self::convertToCode($string)
            ];
        }

        return $result;
    }
}