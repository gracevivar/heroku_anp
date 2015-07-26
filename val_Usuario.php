<?php
include('./inc/config.php');
$usu = addslashes($_POST['usuario']);
$pass = addslashes($_POST['contrasena']);
$area = addslashes($_POST['idperfilac']);

$usuario = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usu'");
if(mysql_num_rows($usuario)<1){
  echo 'usuario';
}else{
  $area = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usu' AND idperfilac = '$area'");
  if(mysql_num_rows($area)<1){
    echo 'area';
  }else{
    $consulta = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usu' AND contrasena = '$pass'");
    if(mysql_num_rows($consulta)<1){
      echo 'password';
    }else{
      $consulta2 = mysql_fetch_array($consulta);
      $_SESSION['usuario'] = $consulta2['usuario'];
      $_SESSION['idperfilac'] = $consulta2['idperfilac'];
      switch($consulta2['idperfilac']){
        case 'Administrador':
          echo 'Administrador';
        break;
        case 'Cliente':
          echo 'Cliente';
        break;
      }
    }
  }
}
?>
