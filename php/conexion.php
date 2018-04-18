<?php

//clase conexion atru¿ibutos y metodos
//mysqli_connect obsoleto........
//mysql_connect re obsoleto......
//API PDO


class Conexion
{
	private $db = 'mysql:host=localhost;dbname=base_juego';
	private $user = 'root';
	private $pass = '';

	//metodo

	public function Conectar()
	{
		$base = new PDO($this->db,$this->user,$this->pass);
		return $base;
	}
}
?>




