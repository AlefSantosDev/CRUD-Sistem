<?php
 
	$conexao = new PDO("mysql:host=localhost:3306;dbname=sistema","root","usbw");
 
	$select = $conexao->prepare('SELECT * FROM tb_funcionario');
 
	$select->execute();
 
	while ($row = $select->fetch()) 
	{
		echo "<p>";
		echo "<br><b>Codigo: </b>".$row['codigo'];
		echo "<br><b>Nome: </b>".$row['nome'];
		echo "<br><b>CPF: </b>".$row['cpf'];
		echo "<br><b>RG: </b>".$row['rg'];
		echo "<br><b>CEP: </b>".$row['cep'];
		echo "<br><b>Numero: </b>".$row['numero'];
		echo "<br><b>Celular: </b>".$row['celular'];
		echo "<br><b>Email: </b>".$row['email'];
		echo "<br><b>carteira: </b>".$row['carteira'];
		echo "<br><b>pis: </b>".$row['pis'];
		echo "<br><b>cargo: </b>".$row['cargo'];
		echo "<br><b>setor: </b>".$row['setor'];
		echo "<hr>";
	}
?>