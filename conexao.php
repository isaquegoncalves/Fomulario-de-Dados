<?php
##### Conexão do PHP ao MySQL #####
define('host', '127.0.0.1');
define('user', 'root');
define('pass', "");
define('dbname', 'dados-formulario');

$conn = mysqli_connect(host, user, pass, dbname);

if(!$conn) {
    die('A conexão falhou' .mysqli_connect_error());
}; 
##### Fim da Conexão #####