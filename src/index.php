<?php

require_once ('Apartment.php');

$newHome = new Apartment("Old Street","Richard Seemthon");

echo "Hello class Apartment!";
$newHome->addRoom('Child room');
$newHome->addRoom('Kitchen');
$newHome->addRoom('BadRoom');
foreach ($newHome->getInfo() as $value) {
    echo "<pre>";
    if (! is_array($value)) {echo $value;}
    else{
        foreach ($value as $roomInfo) {
            echo "<pre>";
            echo '-'.$roomInfo;
            echo "</pre>";

        }
    }
    echo "</pre>";

}

