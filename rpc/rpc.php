<?php

$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error)
    die($conn->connect_error);
else
    echo 'Conexion exitosa' . '<br>' . '<br>';
session_start();

$usu = addslashes($_POST['usu']);
$pass = addslashes($_POST['pass']);
$area = addslashes($_POST['perfil']);

$usuario = mysql_query("SELECT * FROM empleado WHERE cedulaEmpleado = '$usu'");
if (mysql_num_rows($usuario) < 1) {
    echo 'usuario';
} else {
    $area = mysql_query("SELECT * FROM empleado WHERE cedulaEmpleado = '$usu' AND idperfilac = '$area'");
    if (mysql_num_rows($area) < 1) {
        echo 'perfil';
    } else {
        $consulta = mysql_query("SELECT * FROM empleado WHERE cedulaEmpleado = '$usu' AND empleadocol = '$pass'");
        if (mysql_num_rows($consulta) < 1) {
            echo 'password';
        } else {
            $consulta2 = mysql_fetch_array($consulta);
            $_SESSION['cedulaEmpleado'] = $consulta2['cedulaEmpleado'];
            $_SESSION['idperfilac'] = $consulta2['idperfilac'];
            switch ($consulta2['idperfilac']) {
                case 1:
                    echo 'empleado';
                    break;
                case 2:
                    echo 'administrador';
                    break;
            }
        }
    }
}
?>