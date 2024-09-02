<?php

		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$rg = $_POST['rg'];
		$cep = $_POST['cep'];
		$numero = $_POST['numero'];
		$celular = $_POST['celular'];
		$email = $_POST['email'];

		$conexao = new PDO("mysql:host=localhost:3306;dbname=sistema",
							"root",
							"usbw");

		$sql = "INSERT INTO tb_cliente (nome,
								cpf,
								rg,
								cep,
								numero,
								celular,
								email)
						VALUES ('$nome',
								'$cpf',
								'$rg',
								'$cep',
								'$numero',
								'$celular',
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
