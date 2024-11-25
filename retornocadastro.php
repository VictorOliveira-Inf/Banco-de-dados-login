<?php

require "bancodedados.php";

$nome = $_POST ['nome'];
$idade = $_POST ['idade'];

$inserir = mysqli_query($conexao, "INSERT INTO tblcadastro (nome,idade) VALUES('$nome','$idade')");

echo "<script>alert('Cadastro realizado com sucesso');</script>";
echo "<script>document.location.href='cadastrar.html';</script>";


?>