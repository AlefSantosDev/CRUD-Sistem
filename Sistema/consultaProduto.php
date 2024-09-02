<?php
 
	$conexao = new PDO("mysql:host=localhost:3306;dbname=sistema","root","usbw");
 
	$select = $conexao->prepare('SELECT * FROM tb_produto');
 
	$select->execute();
 
	while ($row = $select->fetch()) 
	{
		echo "<p>";
		echo "<br><b>Codigo: </b>".$row['codigo'];
		echo "<br><b>Nome: </b>".$row['nome'];
		echo "<br><b>descricao: </b>".$row['descricao'];
		echo "<br><b>especificacoes: </b>".$row['especificacoes'];
		echo "<br><b>categoria: </b>".$row['categoria'];
		echo "<br><b>serie: </b>".$row['serie'];
		echo "<br><b>estoque: </b>".$row['estoque'];
		echo "<br><b>preco: </b>".$row['preco'];
		echo "<br><b>contato: </b>".$row['contato'];
		echo "<br><b>Email: </b>".$row['email'];
		echo "<hr>";
	}
?>