<?php

function calcular_frete($cep_origem, //8 numeros sem caracteres esp (18202000)
    $cep_destino, //tbm 8 nmr sem caracteres esp
    $peso, // em quilogramas, float
    $valor, // valor de serviço adicionais, float
    $tipo_do_frete, // Se é PAC ou Sedex
    $altura = 6, 
    $largura = 20,
    $comprimento = 20 ){


    $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?";
    $url .= "nCdEmpresa=";
    $url .= "&sDsSenha=";
    $url .= "&sCepOrigem=" . $cep_origem;
    $url .= "&sCepDestino=" . $cep_destino;
    $url .= "&nVlPeso=" . $peso;
    $url .= "&nVlLargura=" . $largura;
    $url .= "&nVlAltura=" . $altura;
    $url .= "&nCdFormato=1";
    $url .= "&nVlComprimento=" . $comprimento;
    $url .= "&sCdMaoProria=n";
    $url .= "&nVlValorDeclarado=" . $valor;
    $url .= "&sCdAvisoRecebimento=n";
    $url .= "&nCdServico=" . $tipo_do_frete;
    $url .= "&nVlDiametro=0";
    $url .= "&StrRetorno=xml";

    //Sedex: 40010
    //Pac: 41106

    $xml = simplexml_load_file($url);

    return $xml->cServico;

}

