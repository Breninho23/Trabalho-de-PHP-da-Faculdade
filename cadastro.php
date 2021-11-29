<?php
include("conexao.php");

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$dd=$_POST['dd'];
$telefone=$_POST['telefone'];


$sql="INSERT INTO login(nome,sobrenome,email,dd,telefone)
VALUES ('$nome', '$sobrenome', '$email', '$dd','$telefone')";
if(mysqli_query($conexao,$sql)){
    echo "Deu certo";
}
else{
    echo"Deu certo não".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>