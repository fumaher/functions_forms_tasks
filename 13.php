<?php
countSame("яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня");
function countSame($a)
{
    $arr = array();
    $arr = explode(" ", $a);
    $arr2 = array();
    foreach ($arr as $value) {
        $arr2[$value] = substr_count($a, $value);
    }
    arsort($arr2);
    foreach ($arr2 as $key => $val) {
        echo $key . " " . $val . "<br>";
    }
}