<!DOCTYPE html>
<html>
    <head>
        <title>Guestaugant</title>
        <meta charset="utf-8">
        <LINK REL=StyleSheet HREF="estilo.css" TITLE="Contemporaneo">
    </head>
    <body>
        <?php

            if(isset($_GET['mensaje'])){
                echo "<br /><center><div class='correcto'>Usuario Registrado exitosamente</div><center>";
            }

        ?>
        <div id="box">
            <br /><br />
            <font size="25">Iniciar sesión</font><hr />
            <form action="" method="POST">
                <?php
                    if(isset($errorLogin)){
                        echo "<br /><center><div class='error'>" . $errorLogin . "</div></center><br />";
                    }
                ?>
                <label for="username">Nombre de usuario:</label><br />
                <input class="text" type="text" name="username" maxlength="100" required> <br /><br />

                <label for="contraseña">Contraseña:</label> <br />
                <input class="text" type="password" name="contraseña" maxlength="8" required><br /><br /></p>

                <input class="botones" type="submit" value="Confirmar">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input class="botones" type="reset" value="Borrar"><br /><br />
            </form>
        </div>
        <div id="r">
            <h1>¿No tienes cuenta?</h1>
            Registrate <a href="vistas/registro.php">aqui</a>
        </div>
    </body>
</html>