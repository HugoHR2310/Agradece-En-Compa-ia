<?php
//Conecta con la base de datos
include 'conexion.php';
 $_GET["id"]=2;
//Obtiene el mensaje de agradecimiento y el id del alumno que agradece
$sql= "select mensaje, idEmisor, idReceptor from agradecimientos
      where idAgradecimiento=".$_GET["id"].";"; 
   // $_GET["id"] es el valor enviado por URL en <a href...>,
   // a continuacion de la ?
   // <a href="webAlumnos/'.$web.'?id='.$idAgradecimiento.'">
$resultado=$conexion->query($sql);
$fila=$resultado->fetch_array(); // Devuelve una sola fila
/* De aquí obtenemos $fila["mensaje"] para poder mostrarlo y
   $fila["idEmisor"], $fila["idReceptor"] para buscar en la tabla alumnos los datos 
   del alumno que ha enviado el mensaje y el que ha recibigo*/
   
$mensaje=$fila["mensaje"]; // Variable para mostrar el mensaje.
$emisor=$fila["idEmisor"]; //Variable que usamos para consultar 
						   //los datos del alumno que envía el mensaje  
$receptor=$fila["idReceptor"]; 						   
						   
 
//Obtiene el nombre del jesuita y su información de la tabla alumnos.
$sql= "select nombreJesuita, infoJesuita from alumnos
      where equipo=".$emisor; //Alumno que envía el mensaje.
$resultado=$conexion->query($sql);
$fila=$resultado->fetch_array(); // Devuelve una sola fila
// ACLARACIÓN: En lugar de realizar dos consultas, lo óptimo sería 
// usar una consulta de 2 tablas que devuelve 1 sola fila.


$jesuita= $fila["nombreJesuita"]; //variable para mostrar el nombre del jesuita
$infoJesuita= $fila["infoJesuita"]; //variable para mostrar la información del jesuita
// Cerramos php y a continuación tenemos el HTML

//Obtiene el nombre alumno al que se le agradece de la tabla alumnos.
$sql= "select nombre from alumnos
      where equipo=".$receptor; //Alumno que envía el mensaje.
$resultado=$conexion->query($sql);
$fila=$resultado->fetch_array(); // Devuelve una sola fila

$receptor=$fila["nombre"]; //NOMBRE DEL ALUMNO QUE RECIBE EL AGRADECIMIENTO

?>
COPIA TODO EL CÓDIGO ANTERIOR ENCIMA DEL HTML
<!DOCTYPE html>
<html lang="es">  
<head>   
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	......
<body>
    ......
	ASÍ DEBES INCLUIR LOS DATOS EN TU WEB. Borra la información correspondiente en el mockup y añade uno de los 
	siguientes fragmentos de php en el sitio correspondiente:
	<?php echo $mensaje ?>
	<?php echo $jesuita?>
	<?php echo $infoJesuita?>
	<?php echo $receptor?>
	
	......
</html>	