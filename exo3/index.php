<?php
// la je définis le fuseau horraire donc europe paris
date_default_timezone_set('Europe/Paris');

// donc la je créer un objet pour mettre les info dont j'ai besoin heure date et je precise que je veut en fr
$formatter = new IntlDateFormatter(
    'fr_FR', 
    IntlDateFormatter::FULL, 
    IntlDateFormatter::NONE
);

// donc la je definie le format
$formatter->setPattern('EEEE d MMMM yyyy');

// et la j'obtien la datee
$dateCourante = $formatter->format(new DateTime());


echo ucfirst($dateCourante);
?>
