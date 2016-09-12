<?php
/**
* 
*/
class Estacionamiento
{
	

	 static function Guardar($patente)

	{
		$archivo=fopen("Estacionados.txt", "a");
		$ahora = date("Y-m-d H-i-s");
		$renglon = $patente."=>".$ahora."\n";
		fwrite($archivo, $renglon);
		fclose($archivo);
	}

	public static function Leer()
	{
		$listadoDeAutos = array();
		//$listaDeAutosLeida[]= "Primer elemento";
		$archivo=fopen("Estacionados.txt", "r");
		while ( !FeoF($archivo)) 
		{
			$renglon =  fgets($archivo);
			$listadoDeAutos[]=$renglon;
		}
		fclose($archivo);
		return $listadoDeAutos;
		
	}
	
}

?>