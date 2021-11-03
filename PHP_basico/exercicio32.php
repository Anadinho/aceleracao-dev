<?php
include 'cardapioFunctions.php';

$cardapio = [
            "salgados" => ["coxinha", "empada",],
            "acompanhamentos" => ["Feijao", "Arroz", "Farofa"],
            "refrigerantes" => ["coca-cola", "Guarana", "Mineiro", "sukita"
                                , "fanta","skoll", "agua"],
             ];

//verifica  o cardapio        
foreach($cardapio as $c => $cardapios){
    verificaCardapio($cardapio, $c);
    echo "<br><br>";
}

// adicionar um novo item em um determinado produto
$item = "fritos";
$produto = "salgados";
$cardapio = insereItemCardapio($cardapio, $produto, $item);

echo "<br><br>";

echo mostraCardapio($cardapio);

?>