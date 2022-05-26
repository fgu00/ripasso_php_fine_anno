<?php

//method=post/get;
//action mi rimanda ad una altra pagina o alla pagina stessa+
//input type=text mi da un testo
//input tupe submit mi da un bottone
//name è il nome del oggetto

echo "<form action='ripasso_fine_anno.php'method='post'>
frase <input type='text' name='prima'>
<input type='submit'>
</form>";

$uno=$_POST["prima"];
echo $uno;

echo "</br></br>";

//passa ad un altra pagina
echo "<form action='database/connesione_databse.php'method='post'>
<input type='submit'>
</form>";

?>