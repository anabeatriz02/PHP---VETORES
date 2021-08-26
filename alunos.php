<?php

$alunos = [
    "1" => [
        "nome" => "Maria",
        "idade" => 16,
        "nota" => 85
    ],

    "2" => [
        "nome" => "Artur",
        "idade" => 16,
        "nota" => 92
    ],

    "3" => [
        "nome" => "Gustavo",
        "idade" => 16,
        "nota" => 80
    ],

    "4" => [
        "nome" => "Isabela",
        "idade" => 17,
        "nota" => 95
    ]
];

//qual o nome do aluno com chave 4
echo $alunos["4"]["nome"];

echo "<br> <br>"; 

//a soma da nota do aluno 1 e 3 
echo $alunos["1"]["nota"] + $alunos["3"]["nota"];

echo "<br> <br>"; 

//imprimir na tela todas as médias dos alunos - Minha atividade
// echo "A nota da aluna: ";
// echo $alunos ["1"]["nome"];
// echo " é ";
// echo $alunos["1"]["nota"];
// echo "<br> <br>"; 

// echo "A nota do aluno: ";
// echo $alunos ["2"]["nome"];
// echo " é ";
// echo $alunos["2"]["nota"];
// echo "<br> <br>";

// echo "A nota do aluno: ";
// echo $alunos ["3"]["nome"];
// echo " é ";
// echo $alunos["3"]["nota"];
// echo "<br> <br>";

// echo "A nota da aluna: ";
// echo $alunos ["4"]["nome"];
// echo " é ";
// echo $alunos["4"]["nota"];
// echo "<br> <br>";


// echo "A média geral dos alunos é de: ";

// echo ($alunos ["1"]["nota"] + $alunos ["2"]["nota"] + $alunos ["3"]["nota"] + $alunos ["4"]["nota"]) / 4;

//Atividade do prof
$soma = 0;
$qtdeAlunos =0;
foreach($alunos as $aluno){
    $soma = $soma + $aluno["nota"];
    $qtdeAlunos++;
}

$media = $soma / count($aluno);

echo "A média da sala é: $media"

// echo "<br> <br>"; 
 
?>