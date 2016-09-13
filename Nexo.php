<?php
/**
* 
*/
	require"php\Estacionamiento.php";
	$patente = $_POST["Patente"];
	$accion = $_POST["Estacionamiento"];
	var_dump($_POST);

	if($accion== "Entrar")
	{
		//Estacionamiento::Guardar($patente);
		$miListado = Estacionamiento::Leer();	
		var_dump($miListado);
	}
	else
	{
		echo "Entre a sacar auto";
		Estacionamiento::Sacar($patente);
	}


?>