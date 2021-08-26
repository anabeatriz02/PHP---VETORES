<?php

function calcularMedia($turma){
    $soma = 0;
    foreach($turma as $aluno){
       $soma = $soma + $aluno["nota"];
    }


$media = $soma / count($turma);

return $media;

}

//Escreve uma função que retorne o nome do aluno que tem a maior nota

function alunoMaiorNota(array $turma){
    $melhorAluno = null;
    foreach($turma as $aluno){
        if($melhorAluno == null){
            $melhorAluno = $aluno;
        }elseif($aluno["nota"] > $melhorAluno["nota"]){
            $melhorAluno = $aluno;
        }
     }

     return $melhorAluno;
}

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


//Atividade do prof
$media = calcularMedia($alunos);
echo "A média da sala é: $media";


echo "<br> <br>";

$melhorAluno = alunoMaiorNota($alunos);
echo "Melhor estudante é, a " . $melhorAluno["nome"] . " com a nota " . $melhorAluno["nota"] . " . ";



$alunosTurmaB = [
    "1" => [
        "nome" => "Kelly",
        "idade" => 17,
        "nota" => 100
    ],

    "2" => [
        "nome" => "Paulo",
        "idade" => 16,
        "nota" => 85
    ],

    "3" => [
        "nome" => "Gabriel",
        "idade" => 16,
        "nota" => 82
    ],

    "4" => [
        "nome" => "Matheus",
        "idade" => 16,
        "nota" => 83
    ],

    "5" => [
        "nome" => "Bruna",
        "idade" => 16,
        "nota" => 90
    ]
];
echo "<br> <br>";

$mediaTurmaB = calcularMedia($alunosTurmaB);
echo "A média dos alunos da turma B é: $mediaTurmaB";

echo "<br> <br>";

$melhorAluno = alunoMaiorNota($alunosTurmaB);
echo "Melhor estudante da turma B é, a " . $melhorAluno["nome"] . " com a nota " . $melhorAluno["nota"] . " . ";

echo "<br> <br>";

//Escreva uma função que altere a nota de um aluuno especifico - Minha Atividade

function alterarNotaAluno(array $turma){
    $alterarNota = null;
    foreach($turma as $aluno){
        if($alterarNota == null){
            $alterarNota = $aluno;
        }elseif($aluno["nota"] > $alterarNota["nota"]){
            $alterarNota = $aluno;
        }
     }

     return $alterarNota;
}

$alterarNota = alterarNotaAluno($alunos);
echo "A nota " . $alterarNota["nota"] . " deve ser alterada para 100 " .  " . ";

//Escreva uma função que altere a nota de um aluuno especifico - Atividade do professor
//escreva uma que inclua a situação de todos os alunos
//caso a nota for menor que 50, situação = reprovado
//caso a nota for maior que 50, situação = aprovado

// function alterarNotaAluno(array $turma, $nome, $alterarNota){
//     $alterarNota = null;
//     foreach($turma as $nome){
//         if($alterarNota == null){//             $alterarNota = $nome;
//         }elseif($nome["nota"] > $alterarNota["nota"]){
//             $alterarNota = $nome;
//         }
//      }

//      return $alterarNota;
// }
// $alterarNota = alterarNotaAluno($nome);
// echo "A nota " . $alterarNota["nota"] . " deve ser alterada para 100 " .  " . ";
 
?>