<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Guestaugant</title>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <style>
            #menu{
                background-color: #eee;
                padding: 10px;
            }
            #menu ul{
                margin: 0;
                padding: 0;
                list-style: none;
                display: inline-block;
                width: 100%;
            }
            #menu ul li{
                display: inline;
            }
            #menu ul li a{
                color: #1E69E3;
                text-decoration: none;
            }
            #menu ul li a:hover{
                color: rgb(227, 109, 30);
                text-decoration: none;
            }
            .cerrar-sesion{
                float: right;
            }
        </style>
    </head>
    <body>
        <div id="menu">
            <ul>
                <li>Home</li>
                <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
            </ul>  
        </div>
        <h1>Bienvenido <?php echo ($user->getNombre()); ?></h1>
    </body>
</html>