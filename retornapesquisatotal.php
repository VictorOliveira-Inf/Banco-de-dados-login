<?php

require "bancodedados.php";


$selecionar = mysqli_query($conexao, "SELECT * FROM tblcadastro");

while ($dados =mysqli_fetch_array($selecionar)){
	
	echo $id = $dados['id']."<br/>";
	echo $nome = $dados['nome']."<br/>";
	echo $idade = $dados['idade']."<br/><br/>";
}
	echo"<a href='pesquisar.html'>Voltar<a/>";
	
	if($id ==""){
		echo "<script>alert('Nenhum Registro Encontrado');</script>";
        echo "<script>document.location.href='pesquisar.html';</script>";
	}
?>