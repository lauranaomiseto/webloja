<?php

function conn() {
    $arq = fopen("./biblioteca/local.txt", "a+");
    
        $infos = fgets($arq);
        $infoss = explode(";", $infos);
    
    $cnx = mysqli_connect("$infoss[0]", "$infoss[1]", "$infoss[2]", "$infoss[3]");
    if (!$cnx)
        die('Deu errado a conexao!');
    fclose($arq);
    return $cnx;
}


