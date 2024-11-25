<?php
require "bancodedados.php";

$nome = $_POST['nome'];

$selecionar = mysqli_query($conexao, "SELECT * FROM tblcadastro WHERE '$nome' = nome");

while($dados = mysqli_fetch_array($selecionar)){

$id = $dados['id'];
$nome = $dados['nome'];
$idade = $dados['idade'];
}

if($id ==""){
		echo "<script>alert('Nenhum Registro Encontrado');</script>";
        echo "<script>document.location.href='pesquisar.html';</script>";
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">

<title> Cadastrar Online </title>
</head>
	<body>
	
	Alterar registro:
	
	<form method="POST" action = "alterarregistro.php">
	ID: <input name="id" value="<?php echo $id ?>" readonly /><br/>
	Nome: <input name="nome" value="<?php echo $nome ?>" /><br/>
	Idade: <input name="idade" value="<?php echo $idade ?>" /><br/>
		<input type="submit"/>
	</form>
	
		<br/><a href="index.html">Voltar</a>
	
</body>
</html>
	