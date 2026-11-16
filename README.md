Para testar basta baixar os arquivos numa basta e com o cmd iniciar o servidor via PHP nesta pasta.
No CMD (prompt de comando) basta iniciar o php com "php -S localhost:8080".
Iniciar navegador na porta escolhida ao iniciar o servidor do PHP.
Exemplo: http://localhost:8080
No arquivo conexao.php é onde será colocada as informações para conectar no database SQL da máquina:
<?php 
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '12345');
define('DB', 'preojetocrud');
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('nao foi possível conectar');

?>
