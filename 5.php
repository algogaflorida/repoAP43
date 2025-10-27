<?php
$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";
$paiscapital=explode(";",$data);
$contador=count($paiscapital);
$array=[];
for ($i=0;$i<$contador;$i++){
    $array[$i]=explode(",", $paiscapital[$i]);
}
var_dump($array);    
