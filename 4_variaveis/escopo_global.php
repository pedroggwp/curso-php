<?php

    $teste = "abc";

    echo "$teste global 1 <br>";

    if (5 > 2) {
        $teste = "dsa";

        echo "$teste if <br>";
    }

    echo "$teste global 2 <br>";

    function funcao()
    {
        $teste = "xasdasdad ";
        echo "$teste local 2 <br>";
        //Warning: Undefined variable $teste in C:\xampp\htdocs\curso_php\4_variaveis\escopo_global.php on line 17
        //local 2
    }

    funcao();

    function testandoGlobal()
    {
        global $teste;

        $teste = 2;

        echo "$teste global função <br>";
    }

    testandoGlobal();

    echo "$teste global 3 <br>";