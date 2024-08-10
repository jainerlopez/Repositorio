<?php
#sistaxis de php
#Tipos de variables

#Enteros
$entero = 10;

#Flotantes
$Decimal = 10.5;

#Cadenas
$Cadena = "Hola mundo"

#Booleanos
$Verdadero = true;
$Falso = false;

#Ciclos 
#Ciclo for
for ($i=0; $i < 10; $i++) { 
    echo $i . "br";
}

#ciclos
#Ciclo while
$i = 0;
while ($i <= 10) {
    echo $i . "br";#Para concatenar utilizo punto
    $i++;
}
#Ciclo de white
$i = 0;
do{
    print $i . "br";
    $i++;
} while ($i < 10);
#Estructuras de control
    if($Verdadero){
        echo "verdadero";
}else{
        echo "falso";
}
# if anidado
if($Verdadero){
    if($Falso){
        echo "verdadero";
    }else{
        echo "falso";
    }
 }else{
    echo "falso";
 }
#funciones
function suma($a, $b){
    return  $a + $i;
}
#arrays
$arrays = array(1,2,3,4,5,6,7,8,9,10);
#Arrays de texto
$arrays =  array("uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez");

?>