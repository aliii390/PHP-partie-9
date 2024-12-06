<?php 


echo date('d/m/Y');


echo "<br>";
// date avec un objet

$date = new DateTime('2016-05-16');
echo $date->format('d/m/Y');




?>