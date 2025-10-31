<?php
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$countryArray=explode(",", $country);
$countries=[];

foreach ($countryArray as $pais){
    $cityCountry["country"]=$pais;
    $countries[]=$cityCountry;
}
var_dump($countries);