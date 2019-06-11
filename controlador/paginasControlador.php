<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

function index() { 
    echo "<img class='banner' src='./publico/imagens/banners/banner3.jpg'>";
    exibir("paginas/inicial");
    echo "<img class='banner' src='./publico/imagens/banners/banner4.jpg'>";
}

function sobre(){
	exibir("paginas/sobre");
}

function mapa(){
	exibir("paginas/mapa");
}
