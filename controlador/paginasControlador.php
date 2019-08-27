<?php

require_once "modelo/produtoModelo.php";

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

function index() { 
    echo "<img class='banner' src='./publico/imagens/banners/banner3.jpg'>";
    
    $dados["produtos"]= pegarTodosProdutos();
    
    exibir("paginas/inicial", $dados);
    
    echo "<img class='banner' src='./publico/imagens/banners/banner4.jpg'>";
}

function sobre(){
	exibir("paginas/sobre");
}

function mapa(){
	exibir("paginas/mapa");
}
