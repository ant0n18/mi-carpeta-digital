<html>

<?php
$var1=10;
$var2=10;
$var3=10;

if($var1>=$var2 && $var1 >= $var3){
echo "el mayor es $var1";
} elseif ($var2>=$var1 && $var2 >= $var3){
    echo "el mayor es $var2";
} elseif ($var3>=$var1 && $var3 >= $var2){
    echo "el mayor es $var3";
} else {
    echo "hay un empate";
}
?>
</hmtl>