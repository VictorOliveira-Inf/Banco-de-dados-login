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
        echo "<script>document.location.href='deletar.html';</script>";
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">

<title> Cadastrar Online </title>
</head>
	<body>
	
	Deletar registro:
	
	<form method="POST" action = "deletarregistro.php">
	<input name="id" value="<?php echo $id ?>" hidden /><br/>
	Nome: <?php echo $nome ?><br/>
	Idade:<?php echo $idade ?><br/>
		<input type="submit"/>
	</form>
	
		<br/><a href="deletar.html">Voltar</a>
	
</body>
</html>
	