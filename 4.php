<?php
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$ciudad=explode(",", $city);
$pais=explode(",", $country);
$cuenta=count($ciudad);
$arr=[];
for ($i=0;$i<$cuenta;$i++){
        $arr[$i]=['country' => $pais[$i], 'city' => $ciudad[$i]];
}
var_dump($arr);