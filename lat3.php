<?php
$cars = array("Ferrary", "Lamborghini Aventador", "Audi");
$negara = ["Singapura", "Indonesia" , "Jepang"];
$kota = array("Singaparna", "Indramayu", "Jepara");

// echo  "I like " . $cars[0] .", " . $cars[1] . " and " . $cars[2] . ".";
// echo "<br>";
// var_dump($negara);
// echo "<br>";
// print_r($kota);

var_dump($kota);
$kota[] = "Bogor";
echo"<br>";
var_dump($kota);
$kota[4] = "Jayapura";
echo"<br>";
var_dump($kota);

?>