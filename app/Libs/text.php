<?php

namespace App\Libs;

class Text
{

    /**
     * Return a list of all countries
     * 
     * @return array  Array of all listed countries
     */
    public static function discription($text)
    {

        $str = $text;
        $str = str_replace("&nbsp;", " ", $str);
        $str = preg_replace('/\s+/', ' ',$str);
        $str = trim($str);
        $str=strip_tags($str);
        return $str ;
    }
}
