<?php


date_default_timezone_set('Europe/Paris');


$formatter = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE

);



$formatter->setPattern('EEEE d MMMM yyyy  ');

$dateCourante = $formatter->format(new DateTime());
echo ucfirst($dateCourante);
var_dump($formatter);
die();


?>