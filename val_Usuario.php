<?php

error_reporting(0);
//         $url = parse_url(getenv("CLEARDB_DATABASE_URL "));
$server = "us-cdbr-iron-east-02.cleardb.net";
$username = "b67c482eab4854";
$password = "c79d499e";
$db = "heroku_5da25e9f877d6fc";
$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error)
    die($conn->connect_error);
else
    echo 'Conexion exitosa' . '<br>' . '<br>';
session_start();
$usu = addslashes($_POST['usuario']);
$pass = addslashes($_POST['contrasena']);
$area = addslashes($_POST['perfil']);

$usuario = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usu'");
if (mysql_num_rows($usuario) < 1) {
    echo 'usuario';
} else {
    $area = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usu' AND idperfils = '$area'");
    if (mysql_num_rows($area) < 1) {
        echo 'area';
    } else {
        $consulta = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usu' AND contrasena = '$pass'");
        if (mysql_num_rows($consulta) < 1) {
            echo 'password';
        } else {
            $consulta2 = mysql_fetch_array($consulta);
            $_SESSION['usuario'] = $consulta2['usuario'];
            $_SESSION['idperfils'] = $consulta2['idperfils'];
            switch ($consulta2['idperfils']) {
                case 'administrador':
                    echo 'administrador';
                    break;
                case 'cliente':
                    echo 'cliente';
                    break;
            }
        }
    }
}
?>
