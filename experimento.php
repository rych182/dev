<?php

class Nombres
{
	public $nombres;
	function __construct()
	{
		$this->nombres = array('Perro1' => 'Dalmata','Perro2' => 'Chihuahua' ,'Perro3' => 'Sharpei');
	}

	public function imprimir()
	{
		foreach ($this->nombres as $key => $value) {
			echo "$value<br>";
		}
	}
}
$a = new Nombres;
echo $a->imprimir();













































/*---------------------------------------------
Ejercicio foreach POO

class Datos
{
	protected $nombres;
	
	public function __construct()
	{
		$this->nombres = array('valor1' =>'perengano' ,'valor2' => 'sutano','valor3' => 'el peje');
	}
	function imprimir()
	{
		foreach ($this->nombres as $key => $value) {
			echo $value . "<br>";
		}
	}
}
$a = new Datos;
echo $a->imprimir();

*/

/* ------------------------------------------------
Foreach con objetos
class padre
{
		
	function __construct()
	{
		$nombre = array('nombre' =>'Sutano',
						'Edad' =>'25',
						'Sexo' =>'Machin', );
		foreach ($nombre as $key => $value) {
			echo "$key : $value " . "<br>";
		}
	}
}
$a = new padre;
*/



/*---------------------------------------------------------------------------------
Una pinshi clase con un for dentro
class padre
{
	
	function __construct()
	{
		for ($i=1; $i <= 10 ; $i++) { 
			echo "$i" . "<br>";
		}
	}
}
$a = new padre;
*/





/*------------------------------------------------------------------
$n = 1;

Con cadenas dobles busca la variable, con cadenas simples lo imprime literal

echo "Esto es una cadena con comillas dobles $n <br>";
echo 'Esto es una cadena con comillas simples $n';
*/
?>