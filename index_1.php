<!DOCTYPE html>
<?php
error_reporting(0);
$conn = new mysqli($host, $usuario, $contrasena, $bdd);
if ($conn->connect_error)
    die($conn->connect_error);
if ($_POST[Ingresar]) {
    $nom = $_POST['nombre'];
    $apell = $_POST['apellido'];
    $fecha = date('Y-m-d', $_POST['fecha_nacimiento']);
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $estado = $_POST['estado_civil'];
    $depart = $_POST['departamento'];

    if ($nom != '' && $apell != '' && $fecha != '' && $direccion != '' && $telefono != '' && $estado != '' && $depart != '') {
        $q_insert = "INSERT INTO empleados(nombre, apellido, fecha_nacimiento, 
            direccion, telefono, estado_civil, departamento) VALUES ('$nom','$apell','$fecha','$direccion','$telefono','$estado','$depart')";
        $res = $conn->query($q_insert);
        if (!$res) {
            echo '<div>Exist&oacute; in error al insertar' . '</div>';
        } else {
            echo '<div>Persona insertado correctamente' . '</div>';
        }
    } else {
        echo '<div>Datos Vacios</div>';
        echo '<div>Inserte Datos</div>';
    }
}
$query = 'SELECT * FROM empleados';
$result = $conn->query($query);
if (!$result)
    die($conn->error);
$num_rows = $result->num_rows;
?>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Empleados</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body >
        <br>    
    <center>
        <h1>Empleados</h1>
        <br>
        <br>
        <form method="POST" onsubmit = "return validar(this)" >
            <div id ="mensaje" class="div1"></div>
            <div>
                <label for="nombre"> Nombre: </label>
                <input type="text"  name="nombre" value="" id="nombre"/>
            </div> 

            <div>
                <label for="apellido"> Apellido: </label>
                <input type="text"  name="apellido" value="" id="apellido"/>
            </div> 
            <div>
                <label for="fecha"> Fecha: </label>
                <input type="date"  name="fecha" value="" id="fecha"/>
            </div> 
            <div>
                <label for="direccion"> Direccion: </label>
                <input type="text"  name="direccion" value="" id="direccion"/>
            </div> 
            <div>
                <label for="telefono"> Telefono: </label>
                <input type="text"  name="telefono" value="" id="telefono"/>
            </div> 
            <div>
                <label for="estado"> Estado Civil: </label>
                <input type="text"  name="estado_civil" value="" id="estado"/>
            </div>
            <div>
                <label for="departamento"> Departamento: </label>
                <input type="text"  name="departamento" value="" id="departamento"/>
            </div>
            <div>
                <input type="submit" value="Ingresar" name="Ingresar" onclick="validar(this.form);" class="ingreso"/>
            </div>
        </form>
    </center>
    <br>
    <br>
    <script type="text/javascript" src="js/validacion.js"></script>
</body>
</html>
<?php
echo '<center>';
echo'<table>';
echo'<tr>';
echo '<th>' . 'Nombre' . '</th>' . '<th>' . 'Apellido' . '</th>' . '<th>' . 'Fecha de nacimiento' .
 '</th>' . '<th>' . 'Direccion' . '</th>' . '<th>' . 'Telefono' . '</th>' . '<th>' . 'estado civil' .
 '</th>' . '<th>' . 'Departemento' . '</th>';
echo'</tr>';
for ($j = 0; $j < $num_rows; ++$j) {
    //coger la siguiente fila
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo'<tr>';
    echo '<td>' . $row['nombre'] . '</td>';
    echo '<td>' . $row['apellido'] . '</td>';
    echo '<td>' . $row['fecha_nacimiento'] . '</td>';
    echo '<td>' . $row['direccion'] . '</td>';
    echo '<td>' . $row['telefono'] . '</td>';
    echo '<td>' . $row['estado_civil'] . '</td>';
    echo '<td>' . $row['departamento'] . '</td>';
    echo '<td>'
    . '<form action="./modificar.php" method="POST">'
    . '<input type="hidden" value="' . $row['id'] . '"  name="id"/>'
    . '<input type="submit" value="Modificar" name="modificar" class="modificar"/>'
    . '</form> </td>';
    echo '<td>'
    . '<form  method="POST" action="./index.php">'
    . '<input type="hidden" value="' . $row['id'] . '"  name="id"/>'
    . '<input type="submit" value="Eliminar" name="Eliminar" class="eliminar"/>'
    . '</form> </td>'; //elementos hide de hatml
    echo'</tr>';
}
echo'</table>';
echo '</center>';
//CERRAR CONEXIONES
$result->close();
$conn->close();
?>


<?php
//Consulta de modificar
$conni = new mysqli($host, $usuario, $contrasena, $bdd);
if ($_POST[Eliminar]) {
    $id = $_POST['id'];
    $q_eliminar = "DELETE FROM empleados WHERE id=$id";
    $resu = $conni->query($q_eliminar);
    if (!$resu) {
        echo '<div>Exist&oacute; in error al eliminar' . '</div>';
    } else {
        echo '<div>Empleado borrado exitosamente' . '</div>';
    }
}
$conni->close();
//Grace Vivar
?>

