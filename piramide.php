<?php

$count = readline("Hoe hoog wordt de piramide: ");

for($i = 1;$i<=$count;$i++){
    $line = "";
    for($j = 0;$j<$i;$j++){
        $line .= "*";
    }
    echo($line . PHP_EOL);
}

?>