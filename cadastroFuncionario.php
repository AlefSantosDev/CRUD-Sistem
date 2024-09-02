<?php

		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$rg = $_POST['rg'];
		$cep = $_POST['cep'];
		$numero = $_POST['numero'];
		$celular = $_POST['celular'];
		$email = $_POST['email'];
		$carteira = $_POST['carteira'];
		$pis = $_POST['pis'];
		$cargo = $_POST['cargo'];
		$setor = $_POST['setor'];

		$conexao = new PDO("mysql:host=localhost:3306;dbname=sistema",
							"root",
							"usbw");

		$sql = "INSERT INTO tb_funcionario (nome,
								cpf,
								rg,
								cep,
								numero,
								celular,
								email,
							  carteira,
								pis,
							  cargo,
								setor)
								
						VALUES ('$nome',
								'$cpf',
								'$rg',
								'$cep',
								'$numero',
								'$celular',
								'$email',
								'$carteira',
								'$pis',
								'$cargo',
								'$setor')";


	if($conexao->exec($sql))
	{
		echo "Cadastrado com sucesso";
	}
	else
	{
		echo "Erro ao cadastrar!!!!!";
	}

?>
