<?php

$Frutas = [
    "Melancia",
    "Abacaxi",
    "Uva",
    "Maçã",
    "Limão",
    "Laranja",
    "Banana",
    "Pessêgo",
    "Cereja",
    "Mexerica",
    "Caju",
    "Pitaia"
];

$frutaAProcurar = "Pitaia";

$encontrei = false;
foreach($Frutas as $chave => $fruta){
    if($fruta == $frutaAProcurar){
        echo "Fruta deletada $fruta";

        echo "<br> <br>";

        unset($Frutas[$chave]);
        $encontrei = true;
    }
}

if(!$encontrei){
    echo "Fruta não encontrada";
}

echo "<br> <br>";

print_r($Frutas);

?>
