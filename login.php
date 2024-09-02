<meta charset="utf-8">
<?php


	$login = $_POST['login'];
	$senha = $_POST['senha'];


	if(($login == "admin")&&($senha == "admin"))
	{
		header('Location:menu.php');
	}
	else
	{
		echo "<script>alert('Usuário ou senha incorreto');</script>";
	}



?>