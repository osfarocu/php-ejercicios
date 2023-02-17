<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET" >
    <label for="">DIGITE SU EDAD</label>
    <input type="number" name="edad" min="1" max="28">
    <input type="submit">
    </form>
</body>
</html>





<?php
$_i=$_GET['edad'];
while  ($_i<=15)
{
    print ("no apto para menores de edad\n");
    break;
}
print ("bienvenido mi viejo amigo");

?>
