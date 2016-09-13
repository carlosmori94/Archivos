<?php
/**
* 
*/
	require_once('C:\xampp\htdocs\Archivos\php\Estacionamiento.php');
	$patente = $_POST['Patente'];
	var_dump($_POST);

	if($_POST["Entrar"]== "Entrar")
	{;
		//Estacionamiento::Guardar($patente)
		$miListado = Estacionamiento::Leer();	
		var_dump($miListado);
	}
	else
	{
		Estacionamiento::Sacar($patente);
	}


?>