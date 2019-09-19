<?php

$var1 = readline("> Welke operatie wil je uitvoeren? (+, -)" .PHP_EOL);
$var2 = readline("> Eerste getal?" .PHP_EOL);
$var3 = readline("> Tweede getal?" .PHP_EOL);
if ($var1 == '+'){
$var4 = $var2 + $var3;
echo"Uw resultaat is: " .$var4;
}
elseif ($var1 == '-'){
$var5 = $var2 - $var3;
echo"Uw resultaat is: " .$var5;
}