
<?php include 'template/header.php' ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">


            <form action="" method="POST">
                <table>
                    <tr>
                        <td>
                            Usuario
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="txtusuario" placeholder="Ingresar usuario" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Contraseña</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="txtpassword" placeholder="Ingresar contraseña" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="">¿Olvidaste tu contraseña?</a>
                            <br>
                            <a href="">Crear una nueva cuenta</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>
<?php include 'model/conexion.php' ?>