<?php 


//Necesitar hacer include o require del archivo que tiene la conexión
  function conectar(){
	$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
	$conexion->set_charset("utf8"); 
    return $conexion;
  }
  
  //Función para mostrar filas de una tabla
  function mostrar_alumnos(){ 
	//Conecta con la base de datos y crea el objeto $conexión.
	$conexion=conectar();  
	
	//Ejecuta la consulta sql
	$sql="............";
	$resultado=$conexion->query($sql);	
	
	//Extrae cada una fila del resultado de la consulta
	$fila=$resultado->fetch_array();
	
	//Ejemplo que muestra un campo
	   echo '<p>';
	   echo 'Nombre alumno: '.$fila["nombre"]; 
	   echo '</p>';







?>











<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Hugo Hernández Royano">
	<link rel="stylesheet" href="agradecer.css">
    <title>Agradecer</title>
</head>
<body>
    <div>
        <form action="formulario">
            <h2>Mandar mensaje</h2>
            <!-- SELECT PARA PHP -->
            <label for="para">Destinatario:</label>
            <select id="mensaje_para" name="mensaje_para">
                <option value="">Selecciona un nombre</option>
                <option value="jesuita1">Jesuita 1</option>
                <option value="jesuita2">Jesuita 2</option>
                <option value="jesuita3">Jesuita 3</option>
            </select>
            <!-- TEXTAREA PARA EL PHP -->
            <label for="mensaje">Texto:</label>
            <textarea id="mensaje" name="mensaje" rows="6" placeholder="Escribe aqui tu mensaje de agradecimiento... "></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>