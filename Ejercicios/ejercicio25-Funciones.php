<?php
function cuadrado ($numero=1) //*Si la funcion esta vacina me imprima 1 o cualquier valor que se le asigne
{
    return($numero * $numero); //*Retormene el resultado de las variables
}
$a=cuadrado(3)+cuadrado(); //*Multimpliqueme la primera variable y luego sumela por la segunda variable
    print($a); //*Imprimame el resultado del retorno   
?>