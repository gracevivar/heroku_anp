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
            <input type="text" id="usu"/>
            <br>
            <br>
            <label>Ingrese su contraseña</label>
            <br>
            <input type="password" id='pass'/>
            <br>
            <br>
            <label>Elija tipo de perfil</label>
            <br>
            <select id='perfil'>
                <option value="cliente">Cliente</option>
                <option value="empleado">Empleado</option>
                <option value="administrador">Administrador</option>
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