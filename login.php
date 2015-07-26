<?php
echo'Login'
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>

        <div  align="center">
            <h2>Inicie Sesion</h2>
            <label>Ingrese usuario</label>
            <br>
            <input type="text" id="usuario" name="usuario"/>
            <br>
            <br>
            <label>Ingrese su contraseña</label>
            <br>
            <input type="password" id='contraseña' name="contraseña"/>
            <br>
            <br>
            <label>Elija tipo de perfil</label>
            <br>
            <select id='perfil' name="perfil">
                <option value="1">Empleado</option>
                <option value="2">Administrador</option>
                <option value="3">Cliente</option>
            </select>
            <br>
            <a href="registro.php" >Registrar Nuevo Usuario</a>
            <br>
            <input type="submit" value="Ingresar" name="ingresar" id="ingresar">
            <br>
            <br>
            <div id="mensaje"></div>
        </div>
        <a href="index.php">Regresar</a>
    </body>
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/vallogin.js"></script>
</html>