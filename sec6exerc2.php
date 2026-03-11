<?php 

$carSpeed = 80;

if ($carSpeed < 40) {
    echo "O carro está muito lento <br>";
} elseif ($carSpeed == 40) {
    echo "O carro está na velocidade permitida <br>";
} else {
    echo "Multa por excesso de velocidade <br>";
}



?>