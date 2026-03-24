<?php
include 'configdb.php';

$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
$conexion->set_charset("utf8");

$sql = "SELECT idAlumno, nombre FROM ALUMNOS";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PRUEBA</title>
</head>
<body>

    <select name="alumno" id="alumno">
        <option value="">-- Selecciona un alumno --</option>
        <?php while($fila = $resultado->fetch_array()){ ?>
            <option value="<?php echo $fila["idAlumno"]; ?>">
                <?php echo $fila["nombre"]; ?>
            </option>
        <?php } ?>
    </select>

</body>
</html>