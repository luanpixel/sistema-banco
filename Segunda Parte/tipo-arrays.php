<?php

//OLHAT MANUAL DO PHP (https://www.php.net/manual/en/language.types.array.php)
$array = [
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
];

foreach ($array as $item) {
     echo $item;
}

?>