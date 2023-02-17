<?php
$i=0;
$palabra=("TEGNOLOGO ADSO");
while ($i <=strlen($palabra)-1)
{
    echo "la palabra:\n" .$palabra [$i.""]."\n<br>";
    $i++;
}
?>


<?php
$i=0;
$palabra=("TEGNOLOGO ADSO");
while ($i <=strlen($palabra)-1)
        {
            echo"[".substr($palabra, $i)."]<br>"; 
            $i++;
        }
?>