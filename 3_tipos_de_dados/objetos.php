<?php

    class Person {

        function talk()
        {
            echo "Olá, pessoal!";
        }
    }

    $pedro = new Person();
    $pedro->name = "Pedro";

    echo $pedro->name;

    echo "<br>";

    $pedro->talk();
