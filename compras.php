<?php
echo'compras';
$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error)
    die($conn->connect_error);
else
    echo 'Conexion exitosa' . '<br>' . '<br>';
session_start();
if (isset($_SESSION['cedulaEmpleado']) == false or isset($_SESSION['idperfilac']) == false) {
    header('Location: login.php');
} else {
    if ($_SESSION['idperfilac'] == 2) {
        header('Location:empleado.php');
    } else {
        $nombre = mysql_query("SELECT * FROM empleado WHERE cedulaEmpleado = '" . $_SESSION['cedulaEmpleado'] . "'");
        $nombre2 = mysql_fetch_array($nombre);
    }
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Compras</title>
        <link href="../css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <img id="fondo" src="../recursos/almacen_fondo.jpg" />
        <header>
            <table align="left" border="0" height="100%" width="100%">
                <tr>
                    <td><b>AREA DE ALMACEN</b></td>
                    <td width="300" align="left"><label>Bienvenido/a: <?php echo $nombre2['nomb_usu']; ?></label></td>
                    <td width="50"><a href="../rpc/logout.php">Salir</a></td>
                </tr>
            </table>
        </header>
        <a href="index.php">Regresar</a>

        <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/vallogin.js"></script>

    </body>
</html>
