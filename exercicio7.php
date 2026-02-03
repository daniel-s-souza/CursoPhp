<?php 

$arrPerson = ["nome" => "Daniel", "anoNascimento" => 1994, "altura" => 171, "peso" => 120];
$anoNascimento = $arrPerson["anoNascimento"];
$nome= $arrPerson["nome"];
$idade = date('Y') - $anoNascimento;

if(date('Y') - $anoNascimento >= 18){
    echo "$nome é maior de idade, tem $idade anos";
} else {
    echo "É menor de idade";
}

?>