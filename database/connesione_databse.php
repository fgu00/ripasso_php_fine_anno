<?php
//include altre pagine
include "funzione.php";

//echo per inserire i dati del database

echo "<form action=connesione_databse.php method='POST'>
nome server <input type='text' name='nome'></br>
user name <input type='text' name='user'></br>
password <input type='text' name='pass'></br>
nome database <input type='text' name='nomeDB'></br>
  <input type='submit'>
</form>"

//con if per il  post con al inizio il ! si traduce con il contrario 
    //passo alla funzione i suoi valori
if(empty($_POST['nome'])){
$conn=connDB($_POST['nome'],$_POST['user'],$_POST['pass'],$_POST['nomeBD']);
//verifica la connesione con il database
if($conn->connect_error){
    echo 'Connection error: ' . $conn->connect_error;
} else {
    $querry="SELECT * FROM 'persona'";
    $conn->query($querry);
    echo $conn;
}
}
?>