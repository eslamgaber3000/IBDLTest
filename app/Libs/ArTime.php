<?php

namespace App\Libs;

class ArTime
{

    /**
     * Return a list of all countries
     * 
     * @return array  Array of all listed countries
     */
    public static function Time($i)
    {
        $western_arabic = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        if ($i < 10) {
            // $eastern_arabic = array('٠', '٠١', '٠٢', '٠٣', '٠٤', '٠٥', '٠٦', '٠٧', '٠٨', '٠٩');
            $eastern_arabic = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        } else {
            // $eastern_arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
            $eastern_arabic = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        }
        $str_count = $i;
        $str_count = str_replace($western_arabic, $eastern_arabic, $str_count);
        return $str_count;
    }
    public static function Number($num_questions){
        $western_arabic = array('0','1','2','3','4','5','6','7','8','9');
        $eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');
        $str=$num_questions+1;
        $str2=$num_questions;
        $str = str_replace($western_arabic, $eastern_arabic, $str);
        $str2 = str_replace($western_arabic, $eastern_arabic, $str2);
        return [$str .'من'. $str2];
    }
}
