<?php

include './functions.php';
// import your image


$genev= array(0=>90,1=>680);
$wallis= array(0=>545,1=>628);
$tessin= array(0=>886,1=>648);
$graubunden= array(0=>1062,1=>518);
$zurich= array(0=>823,1=>188);
$bern= array(0=>506,1=>362);
$basel= array(0=>516,1=>118);

$w = array('Sun','Clowdy','Rain','Thunderstorm','Snow');
$t = array('10/20','0/5','8/23','9/13','4/8');
$b = array('NN-No Wind', 'N-North', 'NO-Nordeast', 'O-East', 'SO-southeast', 'S-south', 'SW-southwest', 'W-west', 'NW-northwest');
$p = array('None', 'Slight', 'Moderate', 'heavy');
$cities= array(0=>90,1=>680,2=>545,3=>628,4=>886,5=>648,6=>1062,7=>518,8=>823,9=>188,10=>506,11=>362,12=>516,13=>118);
/*
 for ($i = 0; $i < count($cities) - 1; $i+=2) {
     echo " X = ".$cities[$i]." Y = ".$cities[$i+1]."</br>";
 }
*/
for($i=1;$i<=7;$i++){
$image = imagecreatefrompng('./img/map.png');
makeImage($image, $cities, $w,'day'.$i,'weather');
$image = imagecreatefrompng('./img/map.png');
makeImage($image, $cities, $t,'day'.$i,'temp');
$image = imagecreatefrompng('./img/map.png');
makeImage($image, $cities, $b,'day'.$i,'breez');
$image = imagecreatefrompng('./img/map.png');
makeImage($image, $cities, $p,'day'.$i,'pollen');
}
//makeMap($image, 'Sun', '0/20', 'NN-No', 'None', 30,$genev[0], $genev[1]);
header('Location: ./page.php');
