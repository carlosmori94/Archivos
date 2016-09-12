<?php
/**
* 
*/
	require_once('C:\xampp\htdocs\Archivos\php\Estacionamiento.php');
	$patente= $_POST['Patente'];
	


	if(true)
	{
		//Estacionamiento::Guardar($patente)
		$miListado = Estacionamiento::Leer();	
		var_dump($miListado);
	}
	

?>