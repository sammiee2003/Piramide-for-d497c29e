<?php


$piramide = readline("hoeveel lagen wilt u hebben?");


for ($i = 1; $i <= $piramide; $i++) {
    for ($j = $i; $j <= 5; $j++) {
        echo " "; 
    }
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo "\n";
}
?>
