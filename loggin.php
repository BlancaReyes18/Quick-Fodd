<body><center>
    <body style="background-color:beige">
    </body>    
    <header class ="header">
        <div class="container">
            <div class="row">
            <div class="four colums">
                <h1 class="titulo"><img src="img/Logo.jpg"width="250" height="200" class="titulo-logo"></h1>
            </div>

                    </li>
                </ul>
            </div> 
            </div>
        </div>
    </header>
    <div class="hero">
        <div class="container">
            <div class="row">
            <div class="six columns">
                <div class="contenido-hero">
                    <h2>Prueba una Hamburguesa</h2>
                    <p>Prueba lo mejor de la comida rapida solo en Quick Food</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <br></br>
<header>-Inicio de Sesión-</header>
<link rel="stylesheet" href="Usuario.inc.php">
<link rel="stylesheet" href="config.inc.php">
        <form enctype="text/plain" method="POST" action="index.php">
            <br></br>
            <?php
            include_once ´app/conexion.inc.php´;
            Conexion :: abrir_conexion();
            Conexion :: cerrar_conexion();
            ?>
            Nombre de Usuario: <input type="text" name="User" placeholder="User" minlength="10" required=true><br></br>
             Contraseña: <input type="password" name="direccion" placeholder="Password" minlength="10" required=true><br></br>
             Correo: <input type="email" name="correo" placeholder="E-mail" minlength="20" required=true><br></br>
        <button  name="button" ><a href="C:/Users/Usuario/Downloads/BLANCA/quickfood1/index.html">INGRESAR</a></button>
       
        </form>
    </center>