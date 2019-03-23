<?php
//CRIANDO CONSTANTE
define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;
/////////////////////////////////////

//CRIANDO ARRAY COM CONSTANTES
echo "<br>";
define("BANCO_DE_DADOS", [
   '127.0.0.1',
    'roost',
    'password',
    'test'

]);

print_r(BANCO_DE_DADOS);
?>