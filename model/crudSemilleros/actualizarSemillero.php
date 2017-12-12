<?php 
	// se reciben las variables
$titulo = $_POST['titulo'];
$autores = $_POST['autores'];
$resumen = $_POST['resumen'];
$fecha = $_POST['fecha'];
$link_pagina = $_POST['link_pagina'];
$link_video	 = $_POST['link_video'];

$archivo = $_POST['archivo'];
$idP = $_POST['idP'];

require('../conexion.php');

$con =Conectar();
$sql = 'UPDATE grupo SET titulo=:titulo, autores=:autores, resumen=:resumen, fecha=:fecha, link_pagina=:link_pagina, link_video	=:link_video, archivo=:archivo WHERE id_grupos=:idtitulo';
$q = $con->prepare($sql);
$q->execute(array(':titulo'=>$titulo, ':autores'=>$autores,':resumen'=>$resumen,':fecha'=>$fecha,':link_pagina'=>$link_pagina,':link_video'=>$link_video, ':archivo'=>$archivo, ':idtitulo'=>$idP));
 ?>