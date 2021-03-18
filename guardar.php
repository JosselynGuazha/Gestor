<?php  
	include 'database/connection.php';
	
	//mostrar errores 
	

	//var_dump($_POST);
	//fecha y hora
	date_default_timezone_set("America/Mexico_City");

	$fecha = date('Y-m-d');
	$hora = date('H-i-s');
	$fechayhora ="$fecha $hora";
	//echo "La hora actual es: $fechahora";
	//nombre, materia,  evento,
	$docente = $_POST["dnombre"];
	$materia = $_POST["dmateria"];
	$evento = $_POST["devento"];
	$ciclo = $_POST["dciclo"];

	//nombre original del archivo
	$nombrearchivo1 = basename($_FILES["syllabu"]["name"]);
	$nombrearchivo2 = basename($_FILES["guia"]["name"]);
	$nombrearchivo3 = basename($_FILES["plan"]["name"]);
	$nombrearchivo4 = basename($_FILES["nota"]["name"]);
	$nombrearchivo5 = basename($_FILES["asistencia"]["name"]);

	//echo "$nombrefinal1";
	//extension de archivos
	$tipodearchivo1 = strtolower(pathinfo($nombrearchivo1, PATHINFO_EXTENSION));
	$tipodearchivo2 = strtolower(pathinfo($nombrearchivo2, PATHINFO_EXTENSION));
	$tipodearchivo3 = strtolower(pathinfo($nombrearchivo3, PATHINFO_EXTENSION));
	$tipodearchivo4 = strtolower(pathinfo($nombrearchivo4, PATHINFO_EXTENSION));
	$tipodearchivo5 = strtolower(pathinfo($nombrearchivo5, PATHINFO_EXTENSION));
	//nombre final

	$nombrefinal1 = "syllabu.$materia.$evento$docente.$fecha.H.$hora.$tipodearchivo1";
	$nombrefinal2 = "guia.$materia.$evento.$docente.$fecha.H.$hora.$tipodearchivo2";
	$nombrefinal3 = "plan.$materia.$evento.$docente.$fecha.H.$hora.$tipodearchivo3";
	$nombrefinal4 = "nota.$materia.$evento.$docente.$fecha.H.$hora.$tipodearchivo4";
	$nombrefinal5 = "asistencia.$materia.$evento.$docente.$fecha.H.$hora.$tipodearchivo5";
	print_r($nombrefinal1);
	//directorio guardado




	//echo "qpeso de archvio plan".$_FILES["plan"]["size"];

	$directorio1 = "archivos/$nombrefinal1";
	$directorio2 = "archivos/$nombrefinal2";
	$directorio3 = "archivos/$nombrefinal3";
	$directorio4 = "archivos/$nombrefinal4";
	$directorio5 = "archivos/$nombrefinal5";

	//dsyllabu
	if(move_uploaded_file($_FILES["syllabu"]["tmp_name"],"$directorio1")){
		echo "El archivo syllabu subio correctamente";

	}else{
		echo "El archivo dsyllabu no subio";

	}

	//dguia
	if(move_uploaded_file($_FILES["guia"]["tmp_name"],"$directorio2")){
		echo "El archivo guia subio correctamente";

	}else{
		echo "El archivo dguia no subio";

	}
	//dplan
	if(move_uploaded_file($_FILES["plan"]["tmp_name"],"$directorio3")){
		echo "El archivo plan subio correctamente";

	}else{
		echo "El archivo plan no subio";

	}

	//dnota
	if(move_uploaded_file($_FILES["nota"]["tmp_name"],"$directorio4")){
		echo "El archivo nota subio correctamente";

	}else{
		echo "El archivo notas no subio";

	}
	//dasistencia
	if(move_uploaded_file($_FILES["asistencia"]["tmp_name"],"$directorio5")){
		echo "El archivo asistencia subio correctamente";

	}else{
		echo "El archivo dasistencia no subio";

	}




	//guardar en la base de datos

	print_r($_POST);
	if(!isset($_POST['oculto'])){
		exit();
	}

	$sentencia = $bd->prepare("INSERT INTO formulario (fecha, nombre_docente, materia, ciclo, evento, syllabu, guia, plan, nota, asistencia) VALUES (?,?,?,?,?,?,?,?,?,?);");


	$resultado = $sentencia->execute([$fechayhora, $docente, $materia, $ciclo, $evento, $nombrefinal1, $nombrefinal2, $nombrefinal3, $nombrefinal4, $nombrefinal5]);


		print_r($resultado);

	if ($resultado === TRUE) {
		//echo "Datos guardados correctamente";
		header('Location: confirmacion.php');
	}else{
		echo "Error desconocido";
	}

?>
