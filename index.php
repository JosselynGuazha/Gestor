
<?php 
	include 'estilo.php';
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Material cursos</title>
</head>
<body>
	<div style="background: #F4F6F7; height: 10%;" class="container col-12">
		<div align="center">
		<img src="/imagenes/LogoAndesFin.png" >
		</div>
	</div>
	
	<form method="POST" enctype="multipart/form-data" action="guardar.php" class="container col-8">
		<br>
		<h2 class="text-center">FORMULARIO PARA LA ENTREGA DE DOCUMENTOS DOCENTE</h2>
		<br>
		<p>
		<b>Instrucciones:</b> el siguiente formulario se encargará de recolectar los datos correspondientes al periodo Octubre 2020 – febrero 2021
		</p>
		<p>- Todos los campos tienen que estar llenos antes de realizar él envió.</p>
		<p><b>Archivo admitidos: </b>.xlsx, .xls, .csv,.pdf, .doc,.docx.</p>
		<br>
		<label><b>Nombre del docente</b></label>
		<input class="form-control" type="text" name="dnombre" placeholder="Ingrese su nombre completo" required>

		<label><b>Materia</b></label>
		<input class="form-control" type="text" name="dmateria" placeholder="Ingrese el nombre de la materia" required>

		<label><b>Ciclo</b></label>
		<div>
			<select class="custom-select" name="dciclo" required>
				<option value="">Seleccione el ciclo</option>
                <option value="1">Primer ciclo</option>
                <option value="2">Segundo ciclo</option>
                <option value="3">Tercer ciclo</option>
                <option value="4">Cuarto ciclo</option>
                <option value="5">Quinto ciclo</option>
                <option value="6">Sexto ciclo</option>
            </select>
		</div>
		<br>

		<label><b>Evento</b></label>
		<div>
			<select class="custom-select" name="devento" required>
				<option value="">Seleccione el evento</option>
                <option value="1">Primer evento</option>
                <option value="2">Segundo evento</option>
                <option value="3">Tercer evento</option>
            </select>
		</div>
		<br>

		<label><b>Syllabu</b></label>
		<input class="input-group" type="file" name="syllabu" required accept=".xlsx, .xls, .csv,.pdf, .doc,.docx,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
		<FONT SIZE=1>Tamaño máximo del archivo es 30 MB</font>
		<br>

		<label><b>Guia</b></label>
		<input class="input-group-prepend" type="file" name="guia" required accept=".xlsx, .xls, .csv,.pdf, .doc,.docx,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
		<FONT SIZE=1>Tamaño máximo del archivo es 30 MB</font>
		<br>

		<label><b>Plan de clase</b></label>
		<input class="input-group" type="file" name="plan" required accept=".xlsx, .xls, .csv,.pdf, .doc,.docx,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
		<FONT SIZE=1>Tamaño máximo del archivo es 30 MB</font>
		<br>


		<label><b>Notas</b></label>
		<input class="input-group" type="file" name="nota" required accept=".xlsx, .xls, .csv,.pdf, .doc,.docx,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
		<FONT SIZE=1>Tamaño máximo del archivo es 30 MB</font>
		<br>

		<label><b>Asistencias</b></label>
		<input class="input-group" type="file" name="asistencia" required accept=".xlsx, .xls, .csv,.pdf, .doc,.docx,application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
		<FONT SIZE=1>Tamaño máximo del archivo es 30 MB</font>
		<br>

		<input type="hidden" class="form-control" name="oculto" value="1">
		<br>
		<input class="btn btn-success mx-auto" type="submit" class="btn btn-primary" value="Registar informacion">
		<input class="mx-auto btn btn-danger" type="reset" value="Limpiar">
	</form>
</body>

</html>
