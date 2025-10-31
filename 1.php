<?php
$city="Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London"; 

$cityArray = explode(",", $city);
$capitals = [];

foreach ($cityArray as $element){
    $countryCity["city"] = $element;
    $capitals[]=$countryCity;
}
var_dump($capitals);