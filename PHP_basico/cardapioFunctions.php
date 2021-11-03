<?php

function verificaCardapio($cardapio, $key){

    if(count(($cardapio[$key])) >=3 && count(($cardapio[$key])) <=6){

        echo "A Categoria ".$key." esta Ok!"
            ." ".count(($cardapio[$key]))." produtos cadastrados";

    }elseif(count(($cardapio[$key])) <3){
        echo "“A categoria ".$key
             ." não obedece a quantidade mínima de itens, cadastre mais "
             .(3-(count($cardapio[$key])))." produto(s)!!!";
    }else{
        echo "“A categoria ".$key
        ." não obedece a quantidade maxima de itens, retire "
        .((count($cardapio[$key]))-6)." produto(s)!!!";
    }

    
}

function insereItemCardapio($produto, $key, $item){
    array_push($produto[$key], $item);
    return $produto;
}

function mostraCardapio($cardapio){
    $count =0;
    foreach($cardapio as $categorias){ 
        echo array_keys($cardapio)[ $count]." : "; 
        echo "<br>";
        for ($i=0; $i <count($categorias) ; $i++) { 
            echo $categorias[$i];
            echo "<br>";  
        }
        echo "<br>";  
        echo "<br>";  
        $count +=1;
    }
}




?>