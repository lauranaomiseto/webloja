<?php

//function uploadImagem($arquivo, $caminhoImagem = "publico/upload/imagens/") {
//    $imagem_tmp = $arquivo["tmp_name"];
//    $imagem = basename($arquivo["name"]);

//    move_uploaded_file($imagem_tmp, $caminhoImagem . $imagem);
//    $diretorio_da_imagem = $caminhoImagem . $imagem;

//    return $diretorio_da_imagem;
//}

    function uploadImagem($nome_tmp_imagem, $nome_imagem){
        $extensao=strtolower(substr($nome_imagem, -4));
        $novo_nome=md5(time()).$extensao;
        $diretorio="publico/imagens/produtos/";
        move_uploaded_file($nome_tmp_imagem, $diretorio.$novo_nome);
        return $diretorio.$novo_nome;
    }
    