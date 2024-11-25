<?php

require "bancodedados.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$alterar = mysqli_query($conexao, "UPDATE tblcadastro SET nome = '$nome', idade = '$idade' WHERE id = '$id'");

        echo "<script>alert('Registro alterado com Sucesso');</script>";
        echo "<script>document.location.href='alterar.html';</script>";
?>