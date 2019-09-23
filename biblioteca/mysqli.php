<?php

/*function conn() {
    $cnx = mysqli_connect("sql111.epizy.com", "epiz_24452752", "KRVpTdOkgrkR", "epiz_24452752_webloja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}*/

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "webloja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}

