<?php
/* Conectar a una base de datos de MySQL invocando al controlador */
$dsn = 'mysql:dbname=crud;host=127.0.0.1';
$usuario = 'root';
$contraseña = '';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

$nombre = $_POST['txtusuario'];
$pass = $_POST['txtpassword'];

$query = mysqli_query($conn, "SELECT * FROM users = '".$nombre."' and password = '".$pass ."'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
    header("Location: index.php");
}
else if ($nr == 0){
    echo "<script>alert('Usuario no existe');window.location='registro.php'</script>";
}
