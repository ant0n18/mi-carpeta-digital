<?php
$servidor="localhort";
$usuarioBD="root";
$password="";
$base_DATOS="login";

$conn= new mysqli($servidor,$usuarioBD,$passwordBD,$base_datos);

IF($conn->connect_error){
    die("conexion fallida: ". $conn->connect_error);
}
$nombre=$_POST[`nombre`]
$apellido=$_POST[`apellido`]


$sql="SELECT* FROM usuario WHERE usuario=`$usuario` AND password =`password`";

$resultado=$conn->query($sql);

if($resultado->num_rows>0){
    $_SESSION[`usuario`]= $usuario;
    echo"sesion iniciada correctamente".$_SESION[`usuario`];
    echo"<br><a href=`perfil.php`>ir a tu perfil</a>";
}else{
    echo"usuario o contraseña incorrectas";
    echo "<br><a href=`pagina1.html`>ontectar nuevamente</a>";
}
$conn->close();
?>