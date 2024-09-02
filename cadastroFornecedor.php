<?php

		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$rg = $_POST['rg'];
		$cep = $_POST['cep'];
		$numero = $_POST['numero'];
		$celular = $_POST['celular'];
		$email = $_POST['email'];
		$pagamento = $_POST['pagamento'];
		$banco = $_POST['banco'];
		$desconto = $_POST['desconto'];

		$conexao = new PDO("mysql:host=localhost:3306;dbname=sistema",
							"root",
							"usbw");

		$sql = "INSERT INTO tb_fornecedor (nome,
								cpf,
								rg,
								cep,
								numero,
								celular,
								email,
								pagamento,
								banco,
								desconto)

						VALUES ('$nome',
								'$cpf',
								'$rg',
								'$cep',
								'$numero',
								'$celular',
								'$email',
								'$pagamento',
								'$banco',
								'$desconto')";


	if($conexao->exec($sql))
	{
		echo "Cadastrado com sucesso";
	}
	else
	{
		echo "Erro ao cadastrar!!!!!";
	}

?>
