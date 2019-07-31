<?php

header('Content-Type: application/json');

$randomArray = [];

for ($i = 0; $i <= $_GET['length'] ; $i++){
$randomNumber = mt_rand(0,20);
$genArray = [$i, $randomNumber];
array_push($randomArray, $genArray);
}

echo json_encode($randomArray);



?>