<?php
include("conexao.php");

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];

$sql="INSERT INTO login(nome,sobrenome,email,telefone)
VALUES ('$nome', '$sobrenome', '$email','$telefone')";
if(mysqli_query($conexao,$sql)){
    echo "Deu certo";
}
else{
    echo"Deu certo não".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>