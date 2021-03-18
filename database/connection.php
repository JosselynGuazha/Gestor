<?php  
	$contrasena = '';
	$usuario = 'root';
	$nombrebd= 'formulario_docentes';

	try {
		$bd = new PDO(
			'mysql:host=localhost;
			dbname='.$nombrebd,
			$usuario,
			$contrasena,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

			echo '<font color="green"><h2><b>-></b></h2></font>';

	} catch (Exception $e) {
		echo '<font color="red"><h2><b>-></b></h2></font>'.$e->getMessage();
	}
	error_reporting(0);
?>