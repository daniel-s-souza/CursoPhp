<?php 

## Exercicio para estudo do operador de igualdade (==) ##
## com (==) a igualdade é obersada independente do tipo de dados 100 == "100"
$valor1 = 100;
$valor2 = "100";  

if($valor1 == $valor2){
    echo "Os valores são iguais <br>";
} else {
    echo "Os valores são diferentes <br>";
}

## com o operador de identidade (===) a igualdade só é observada se os tipos de dados forem iguais 100 === "100". nesse caso retorna false pois string != de inteiro ##
if($valor1 === $valor2){
    echo "Os valores são iguais <br>";
} else {
    echo "Os valores são diferentes <br>";
}





?>




