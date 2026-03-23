
<?php

//ASIGNAMOS VALOR A USUARIO Y CONTRASEÑA
$usuario=$_POST["usuario"];
$password=$_POST["password"]

//CONSULTA SELECT PARA MOSTRAR LA CONSULTA.
//PONERLO EN GIT Y PROBARLO CON LA BBDD EN CASA
SELECT idAlumno FROM alumno
	WHERE correo="hugo123@gmail.com"            "'$.correo.'";';
	AND password="1214"      "'$.password.'";';
	
	echo $sql; //para mostrar la info en el navegador
	echo '<br/>';//para mostar la info en el navegador



?>









<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Hugo Hernández Royano">
    <title>Agradece en compañía</title>
	<link rel="stylesheet" href="inicio_sesion.css">
</head>
<body>
    <header>
        <h1>Agradece en compañía</h1>
    </header>
    <main>
        <form action="inicio.html">
            <h2>Inicio de Sesion</h2>
            <input type="email" placeholder="Correo electrónico" required>
            <input type="password" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesion</button>
        </form>
    </main>
</body>
</html>
