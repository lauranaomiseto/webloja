<?php

function conn() {
    $cnx = mysqli_connect("localhost", "id9921669_lauramaju", "123456789", "id9921669_webloja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}
