<?php
$conexion = new mysqli("localhost", "root", "", "liga");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else {
    $resultado = $conexion->query("SELECT * FROM jugador");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <a href="equipo.php">Equipos</a>
</head>
<body>
<table>
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Top 5 alturas</td>
    </tr>
<?php
    foreach ($resultado as $jugador) {
        echo "<tr>";
        echo "<td>".$jugador['id_jugador']."</td>";
        echo "<td>".$jugador['nombre']."</td>";
        echo "<td>".$jugador['apellido']."</td>";
        echo "<tr>";
    }
?>
</table>
</body>
</html>
