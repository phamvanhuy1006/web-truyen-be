<?php

namespace App\Helpers;

require_once 'vendor/autoload.php';
use Cocur\Slugify\Slugify;

class CommonHelper
{
    public static function convertToCode($string)
    {
        return strtoupper('G_' . str_replace(' ', '_', $string));
    }

    public static function convertToArrayCode($listName)
    {
        $slugify = new Slugify();
        foreach ($listName as $string) {
            $result[] = [
                'name' => $string,
                'slug' => $slugify->slugify($string)
            ];
        }

        return $result;
    }
}
