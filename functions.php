<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);
//Set content type
header('content-type: image/jpeg');

function drawImage($image, $dir, $filename, $string, $size, $x, $y, $color) {
    $font_path = 'arial.ttf';
    imagettftext($image, $size, 0, $x, $y, $color, $font_path, $string);
    //Create our final image 
    imagejpeg($image, 'maps/' . $dir . '/' . $filename . '.jpeg', 100);
    //Clear up memory;
    imagedestroy($image);
    return 'maps/' . $dir . '/' . $filename . '.jpeg';
}
/*
  $w = array('Sun','Clowdy','Rain','Thunderstorm','Snow');
  $t = array('10/20','0/5','8/23','9/13','4/8');
  $b = array('NN-No Wind', 'N-North', 'NO-Nordeast', 'O-East', 'SO-southeast', 'S-south', 'SW-southwest', 'W-west', 'NW-northwest');
  $p = array('None', 'Slight', 'Moderate', 'heavy');
  $cities= array(0=>90,1=>680,2=>545,3=>628,4=>886,5=>648,6=>1062,7=>518,8=>823,9=>188,10=>506,11=>362,12=>516,13=>118);
 */

function makeImage($image, $cities, $w, $dir, $file) {
// weather
    for ($i = 0; $i < count($cities) - 1; $i+=2) {
        $string = $w[rand(0, count($w))];
        if (strpos($a,'/') !== false) {
        $array = explode("/", $string);
        if (intval($array[0]) <= 0) {
            $color = imagecolorallocate($image, 225, 0, 5);
        } else {
            $color = imagecolorallocate($image, 45, 85, 181);
        }
        }else{
             $color = imagecolorallocate($image, 45, 85, 181);
        }
        $url = drawImage($image, $dir, $file, $string, 30, $cities[$i], $cities[$i + 1], $color);
        //tempurature
        $image = imagecreatefromjpeg($url);
    }
}
