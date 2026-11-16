<?php 
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '12345');
define('DB', 'preojetocrud');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('nao foi possível conectar');

?>