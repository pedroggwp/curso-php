<?php

    $carro = [
        'marca' => 'BMW',
        'modelo' => "X6",
        'valor' => 1000000,
        'qnt_passageiros' => 8,
        'luxo' => true
    ];

    echo $carro['marca'];
    echo "<br>";
    echo $carro['valor'];
    echo "<br>";

    $marca = $carro['marca'];
    echo "O carro é da marca $marca";
