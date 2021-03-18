<?php 
	include '../database/connection.php';
	//print_r($_GET);
	If(!isset($_GET['id'])){
		exit();
	}
	// obtener id de la fila
	$id3 = $_GET['id'];
	// obtener datos de la fila
	$sentencia = $bd->prepare('SELECT * FROM formulario WHERE id_f = ?;');
	$sentencia->execute([$id3]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//eliminar datos de la base de datos
	$sentencia = $bd->prepare("DELETE FROM formulario WHERE id_f = ?;");
	$resultado = $sentencia->execute([$id3]);
	if($resultado === TRUE){
		header('Location: index.php');
	}else{
		echo "Error" ;
	}
	//elimnar archivos de la base de datos
    unlink($syllabu);
    unlink($guia);
    unlink($plan);
?>

