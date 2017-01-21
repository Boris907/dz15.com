<?php
/**
 * Created by PhpStorm.
 * User: bori
 * Date: 11.01.2017
 * Time: 14:30
 */

function search($words, $strings){

    $res = "";
    foreach ($strings as $key => $str){
        $res .= "В предложении №".($key+1)." есть слова: ";

        foreach ($words as $word){
            $reg = "/$word/ui";
            preg_match($reg,$str,$matches);
            if(is_string($matches[0])){
                $res .= $matches[0].", ";
            }
        }
        $res = substr($res,0,-2);
        $res.=".<br>";
    }
    return $res;
}

$search_words = array('php','html','интернет','web');

$search_strings = array('Интернет - большая сеть компьютеров, которые могут взаимодействовать друг с другом.',
    'PHP - это распространенный язык программирования  с открытым исходным кодом.',
    'PHP сконструирован специально для ведения Web-разработок и его код может внедряться непосредственно в HTML');

echo search($search_words,$search_strings);
//echo $res;
