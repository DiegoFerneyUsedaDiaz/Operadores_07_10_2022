<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');
$res = new stdClass ();
$num1 = 15;
$num2 = 4;

//operador Suma
$suma = $num1 + $num2;
$res -> suma = $suma;

//operador resta
$resta = $num1 - $num2;
$res -> resta = $resta;

//operador multiplicar
$multiplicacion = $num1 * $num2;
$res -> multiplicacion = $multiplicacion;

//operador division
$division = $num1 / $num2;
$res -> division = $division;

//operador elevar
$elevar = $num1 ** $num2;
$res -> elevar = $elevar;

//operador modulo "residuo"
$modulo = $num1 % $num2;
$res -> modulo = $modulo;

//operador raiz cuadrada"
$raizCuadrada = sqrt ($num1);
$res -> raizCuadrada = $raizCuadrada;

//operador raiz cubica
$raizCubica = pow ($num1, (1/3));
$res -> raizCubica = $raizCubica;

//operador aleatorio
$aleatorio = rand (1, $num1);
$res -> aleatorio = $aleatorio;

//operador redondear
$redondear = round ($division,0);
$res -> redondear = $redondear;



echo json_encode ($res, JSON_PRETTY_PRINT);




?>