<?php
print 'hola mundo<br>';
echo 'hola','mundo<br>';
//es un comentario
$variable='variable';
$numero= 2;
echo 'este es numero: $numero';//solo texto
echo 'este es numero:'. $numero;//texto y numero
echo "este es numero: $numero";//texto y numero

//constantes
define('curso','php');
echo curso.'<br>';


//condicionales
$v_uno=1;
$v_dos=2;
if($v_uno<$v_dos){echo "$v_uno es menor a $v_dos<br>";}
elseif($v_uno==$v_dos){echo 'los numeros son iguales<br>';}
else {echo "\n $v_uno es mayor a $v_dos<br>";}

//switch case

switch ($v_uno){
  case 1:
    echo 'el valor es uno <br>';
    break;
  case 2:
    echo 'el valor es dos <br>';
     break;
  default:
    echo 'no existe valor <br>';
    break;}



  //ciclos  
//while
while ($v_uno<$v_dos) {
    echo "$v_uno es menor a $v_dos <br>";
    $v_uno=$v_uno+1;
}

//do while
do{
echo $v_uno.'<br>';
$v_uno++;
}
while ($v_uno <= 10); 

//for
for ($i=0; $i < 3; $i++) { 
    echo $i.'<br>';
}


//array
$dias = array('lunes<br>','martes<br>','miercoles');//<br> realiza el salto de linea

var_dump($dias);//devuelve tipo de dato y cantidad de caracteres
print_r($dias);//posicion y contenido

//array asociativo

$d = array('L'=>'lunes','MA'=>'martes<br>','MI'=>'miercoles');//<br> realiza el salto de linea

echo "<br>hoy es:".$d['L'];

//funciones de array
echo count ($dias);//cuenta el numero de elementos

asort($dias);//ordena de forma alfabetica
rsort($dias);//ordena de forma alfabetica invertida

$funcion=array_chunk($dias,2);//divide el array de dos en dos
$funcion=array_slice($dias,2);//hace que se elimine desde la posicion 2
$funcion=array_merge($dias,$d);//realiza la union de dos arrays
$funcion=array_pop($dias);//elimina el ultimo valor
$funcion=array_search('lunes',$dias);//busca elementos en el vector
$funcion=array_reverse($dias);//invierte el array


//array dimensional
$matriz=array(
   array(1,2,3,4,5),
   array(1,2,3,4,5),
   array(1,2,3,4,5));

   echo $matriz[2][4];

//ciclo foreach

$futbol=array('barcelona'=>'messi','totteham'=>'kane',"juventus"=>"cr7");

foreach($futbol as $dato=> $valor)
{
  echo $dato.'<br>';}


  //funciones

  function suma($v1,$v2){
    $r=$v1+$v2;
  }
 suma(4,6);

 //return
 function suma1($v1,$v2){
  return $v1+$v2;
}
$resultado=suma1(4,8);

//variable global
$v=4;
function s(){
  global $v;
}

//GET
$numero=$_GET['numero'];
echo "el numero es: ".$numero;
?>