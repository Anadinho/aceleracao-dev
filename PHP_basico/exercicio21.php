<?php

    $variavel1 = "Gabriel";
    $variavel2 = "Natalia";
    $variavel3 = 13;
    $variavel4 = null;
    $variavel5 = [$variavel1, $variavel2, $variavel3];

    // var_export ($variavel5);
    for ($i=1; $i <6 ; $i++) {
        $variavel=${'variavel'.$i};

        verificaVariavel($variavel);
        echo "<br><br>";
    }
    
    function verificaVariavel($variavel){
        if(is_null($variavel)){
            echo "Varivel nula";
        }elseif(is_array($variavel)){
            echo var_export($variavel);
        }else{
            echo $variavel;
        }
    }

?>
