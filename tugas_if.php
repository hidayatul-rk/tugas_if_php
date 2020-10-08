<h1>TUGAS IF</h1>

<?php

$a = 50;
$b = 7;

if ($a % 2 == 0) { //Kondisi
    echo "$a Merupakan Bilangan Genap";
} else {
    echo "$a Merupakan Bilangan Ganjil";
}
if ($b % 2 === 0) :
    echo "<br> $b Merupakan Bilangan Genap";
else :
    echo "<br> $b Merupakan Bilangan Ganjil";
endif;
