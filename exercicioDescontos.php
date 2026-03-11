<?php

function calcularDesconto ($valor, $categoria) {

    $porcentagemEletronicos = 0.1;
    $porcentagemVestuario = 0.2;
    $porcentagemAlimentos = 0.05;

    if ($categoria === "eletrônicos") {
        $calculo = $valor - ($valor * $porcentagemEletronicos);
        
        return $calculo;
    } else if ($categoria === "vestuário") {
        $calculo2 = $valor - ($valor * $porcentagemVestuario);
        return $calculo2;
    } else if ($categoria === "alimentos") {
        $calculo3 = $valor - ($valor * $porcentagemAlimentos);
        return $calculo3;
    } else {
        return $valor;
    }


}
