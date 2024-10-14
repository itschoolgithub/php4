<?php
    $a = "Hello World!";
    $b = (int)$a;
    $c = [1, 2, 3, 4];
    settype($a, "int");
    echo gettype($a);
    unset($a);
    echo $a;
    unset($c[0]);
    echo $c[1];