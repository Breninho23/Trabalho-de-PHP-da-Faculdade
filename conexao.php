<?php
$servidor='127.0.0.1';
$usuario='root';
$senha='password';
$dbname='Faculdade';

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);
 if(!$conexao){
     die("erro". mysqli_connect_error());
 }
?>