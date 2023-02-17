<?php
$v ='Oscar'; unset ($v);
if (!isset($v)) print('la variable ya no existe');


print (empty($v)); //devuelve true
$v=" "; print (empty ($v));//devuelve tb. true

?>