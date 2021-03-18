
<?php 
	include '../estilo.php';
	include '../database/connection.php';

	$sentencia = $bd->query('select * from formulario;');
	$formulario = $sentencia->fetchAll(PDO::FETCH_OBJ);
?> 

  <table class="table table-striped text-center container">
  	<h2 class="text-center">Registro</h2>
  <thead>
     <tr>
      <td><b>Fecha y hora</b></td>
      <td><b>Nombre del docente</b></td>
      <td><b>Materia</b></td>
      <td><b>Evento</b></td>
      <td><b>Syllabu</b></td>
      <td><b>Guia</b></td>
      <td><b>Plan de clases</b></td>
      <td><b>Notas</b></td>
      <td><b>Asistencias</b></td>
      <td></td>
    </tr>
  </thead>

<?php 
  foreach ($formulario as $dato) {
    ?>
    <tr>
      <td><?php echo $dato->fecha?></td>
      <td><?php echo $dato->nombre_docente?></td>
      <td><?php echo $dato->materia?></td>
      <td><?php echo $dato->evento?></td>
      <td><a href="../archivos/<?php echo $dato->syllabu?>"</a><?php echo $dato->syllabu?></td>
      <td><a href="../archivos/<?php echo $dato->guia?>"</a><?php echo $dato->guia?></td>
      <td><a href="../archivos/<?php echo $dato->plan?>"</a><?php echo $dato->plan?></td>
      <td><a href="../archivos/<?php echo $dato->nota?>"</a><?php echo $dato->nota?></td>
      <td><a href="../archivos/<?php echo $dato->asistencia?>"</a><?php echo $dato->asistencia?></td>
      <td><a href="eliminar.php?id=<?php echo $dato->id_f;?>">Eliminar</a></td>
    </tr>
    <?php
  }
?>
   </table>

