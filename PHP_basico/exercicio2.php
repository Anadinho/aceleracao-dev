<?php


$array1=["PHP",  "Java", "Python" ];
$array2=["Joao", "Pedro","Clara" ];
$array3=["Centro", "Zona Sul", "Zona Oeste" ];

$array4=["Curso" =>"PHP", "Curso" => "Java","Curso" => "Python" ];
$array5=["Pessoa" =>"Joao", "Pessoa" =>"Pedro","Pessoa" => "Clara" ];
$array6=["Loja" => "Centro", "Loja" => "Zona Sul", "Loja" => "Zona Oeste" ];


echo "<br>";
echo "Indice igual mostra apenas o ultimo, logica do exercicio :";
echo "<br>";echo "<br>";

foreach($array4 as $c => $array4){
    echo 'valor: '.$array4.'<br>';
    echo 'indice: '.$c.'<br>';
    // echo $array1;
    echo "<br>";
}
echo "<hr>";

foreach($array5 as $c => $array5){
    echo 'valor: '.$array5.'<br>';
    echo 'indice: '.$c.'<br>';
    // echo $array1;
    echo "<br>";
}
echo "<hr>";

foreach($array6 as $c => $array6){
    echo 'valor: '.$array6.'<br>';
    echo 'indice: '.$c.'<br>';
    // echo $array1;
    echo "<br>";
}
echo "<hr>";echo "<hr>";
echo "<br>"; echo "<br>";
echo "Cursor <br>";

foreach($array1 as $c => $array1){
    echo 'valor: '.$array1.'<br>';
    echo 'indice: '.$c.'<br>';
    // echo $array1;
    echo "<br>";
}
echo "<hr>";

echo "Pessoas <br>";
foreach($array2 as $c => $array2){
    echo 'valor: '.$array2.'<br>';
    echo 'indice: '.$c.'<br>';
    // echo $array1;
    echo "<br>";
}
echo "<hr>";

echo "Loja <br>";
foreach($array3 as $c => $array3){
    echo 'valor: '.$array3.'<br>';
    echo 'indice: '.$c.'<br>';
    // echo $array1;
    echo "<br>";
}

echo "<hr>";echo "<hr>";




//    //array
//    $curso = ["dev"=> "PHP", "função" => "Design Patterns"];

//    foreach($curso as $c => $curso){
//        echo 'valor: '.$curso.'<br>';
//        echo 'indice: '.$c.'<br>';
//     //    echo $curso;
//        echo "<hr>";
//    }

?>

