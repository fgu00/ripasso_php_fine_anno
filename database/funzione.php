<?php

//funzione function nome_funzione(-dati da inserire-){-cio che deve fare- } tra le parentesi mettere return

function connDB($nome_server,$username,$password,$nome_databse){
    $conn=new mysqli($nome_server, $username, $password, $nome_databse);
    return $conn;
}

?>