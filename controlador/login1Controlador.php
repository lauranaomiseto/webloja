<?php

function index(){
    if (ehPost()){
        $nomeCliente= $_POST["nomeCliente"];
        $emailCliente= $_POST["emailCliente"];
        $senhaCliente= $_POST["senhaCliente"];
        $confirmaSenhaCliete= $_POST["confirmaSenhaCliente"];
        
        echo $nomeCliente."<br>"; 
        echo $emailCliente."<br>";
        echo $senhaCliente."<br>";
        echo $confirmaSenhaCliete."<br>";
    }else{
        exibir("login/formularioLogin1");
    }
}