<!DOCTYPE html>
<html>
    <head>
        <title>Guestaugant</title>
        <meta charset="utf-8">
        <LINK REL=StyleSheet HREF="estilo.css" TITLE="Contemporaneo">
    </head>
    <body>
        <div id="box">
            <br /><br />
            <font size="25">Registrar Nuevo Usuario</font><hr />
            <form action="registro.php" method="POST">
                <?php
                    require('registroDB.php');
                ?>
                <br />
                <p><label for="cedula">Cedula de identidad: </label><br />
                <input class="text" type="text" name="cedula" maxlength="50" required> <br /><br />
                
                <label for="nombre">Nombre: </label><br />
                <input class="text" type="text" name="nombre" maxlength="50" required> <br /><br />
                
                <label for="Apellido">Apellido: </label><br />
                <input class="text" type="text" name="apellido" maxlength="100" required> <br /><br />

                <label for="nUsuario">Nombre de usuario:</label><br />
                <input class="text" type="text" name="nUsuario" maxlength="100" required> <br /><br />

                <label for="password">Contraseña:</label> <br />
                <input class="text" type="password" name="password" maxlength="8" required><br /><br /></p>

                <input class="botones" type="submit" value="Confirmar">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input class="botones" type="reset" value="Borrar"><br /><br />
            </form>
        </div>
    </body>
</html>