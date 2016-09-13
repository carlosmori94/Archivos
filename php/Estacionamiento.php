<?php
/**
* 
*/
class Estacionamiento
{
	

	 public static function Guardar($patente)

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
			$auto = explode("=>", $renglon);//Me devuelve $auto[0] = patente , $auto[1] tiene la hora de entrada.
			$listadoDeAutos[]=$auto;
		}
		fclose($archivo);
		return $listadoDeAutos;
		
	}
	public static function Sacar($patente)
	{
		$miListadoEstacionados = Estacionamiento::Leer();
		foreach ($miListadoEstacionados as $auto) {
			if($auto[0]==$patente)//Auto[0] tiene la patente, busco la patente el array de arrays $miListadoDeAutos;
			{
				$ahora = date("Y-m-d H-i-s");
				$diferencia = strtotime($ahora)-strtotime($auto[1]);//Las horas vienen en formato string , debo transformalas.
				echo "Tiempo transcurrido ".$diferencia;
				
			}
		}
	}
	
}

?>