<?php
echo "hola mundo!!!".'<br>';

$nombre = 'Pepe';

echo "hola".$nombre.'<br>';
echo "Hola $nombre<br>";

$edad = 30;
$altura = 1.84;
$estudia = TRUE; //FALSE
$numeros =[1,2,3,4,5,6,7,8,9,10];

$ejemplo =[1,'texto', 15.6,TRUE,[]];

echo $numeros[1].'<br>';

$persona =[
    "nombre"=>'Pepe',
    "apellido"=> 'Gomez',
    "edad"=> 35,];

$jobs = null;
define("CIEN",100); //Constantes

echo $persona['apellido'];
echo CIEN.'<br>';
/**
 * && => y = and
 * || => or
 * == => igual que
 * !=  => diferente
 * >    => mayor que
 * <    => menor que
 * >=   => mayor o igual
 * <=   => menor o igual
 */
$edad = 24;
if($edad>0 && $edad<=12){
    ///
}elseif($edad>12 && $edad<=17){
    ///
}else if($edad>18 && $edad<=28){
    ///
}else{
    ///
}

$categoria = 'a';
switch($categoria)
{
    case 'a':
        ///
        break;
    case 'b':
        ///
        break;
    default:
        ///
        break;
}

$esMayorEdad = $edad >= 18 && $edad<= 150? 'si': 'no';

$pares=[];
$impares =[];

for($i=0;$i<10;$i++){
    $numero = $numeros [$i];
    if(($numero % 2)==1){
        array_push($impares,$numero);
    } else{
        array_push($pares,$numero);
    }
}

var_dump($impares);
echo '<br>';
var_dump($pares);

$pares = [];
$impares = [];
$i =0;
while ($i < 10){
    $numero = $numeros [$i];
    if(($numero % 2)==1){
        array_push($impares,$numero);
    } else{
        array_push($pares,$numero);
    }
    $i++;
}

var_dump($impares);
echo '<br>';
var_dump($pares);
$i =0;
do{
    $numero = $numeros [$i];
    if(($numero % 2)==1){
        array_push($impares,$numero);
    } else{
        array_push($pares,$numero);
    }
    $i++;
} while ($i < 10);

var_dump($impares);
echo '<br>';
var_dump($pares);


foreach($numeros as $numero) {
    if(($numero % 2)==1){
        array_push($impares,$numero);
    } else{
        array_push($pares,$numero);
    }
}

var_dump($impares);
echo '<br>';
var_dump($pares);

foreach($numeros as $index => $numero) {
    if(($numero % 2)==1){
        array_push($impares,$numero);
    } else{
        array_push($pares,$numero);
    }
}

?>