<?php

		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$especificacoes = $_POST['especificacoes'];
		$categoria = $_POST['categoria'];
		$serie = $_POST['serie'];
		$estoque = $_POST['estoque'];
		$preco = $_POST['preco'];
		$contato = $_POST['contato'];
		$email = $_POST['email'];

		$conexao = new PDO("mysql:host=localhost:3306;dbname=sistema",
							"root",
							"usbw");

		$sql = "INSERT INTO tb_produto (nome,
								descricao,
								especificacoes,
								categoria,
								serie,
								estoque,
								preco,
								contato,
								email)
						VALUES ('$nome',
								'$descricao',
								'$especificacoes',
								'$categoria',
								'$serie',
								'$estoque',
								'$preco',
								'$contato',
								'$email')";


	if($conexao->exec($sql))
	{
		echo "Cadastrado com sucesso";
	}
	else
	{
		echo "Erro ao cadastrar!!!!!";
	}

?>
