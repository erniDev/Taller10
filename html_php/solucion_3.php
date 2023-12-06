<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/style_3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <title>Solución tercer punto</title>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                    <a href="javascript:history.back()">
                        <span class="material-symbols-outlined">
                            arrow_back
                        </span>
                    </a>
                </li>
                <li>
                    <a href="../index.html">
                        <span class="material-symbols-outlined">
                            home
                        </span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="solucion_1.php"><span>Punto 1</span></a></li>
                <li>
                    <a href="solucion_2.php"><span>Punto 2</span></a></li>
                <li>
                    <a href="solucion_3.php"><span>Punto 3</span></a></li>
                <li>
                    <a href="solucion_4.php"><span>Punto 4</span></a></li>
                <li>
                    <a href="solucion_5.php"><span>Punto 5</span></a></li>
            </ul>
        </nav>    
        <section>
            <div class="div-container">
                <form action="" method="GET">
                    <h2>Por favor ingrese sus datos</h2>

                    <h3><label for="exampleFormControlInput1">Nombre</label></h3>    
                    <input type="text" name="nombre" class="form-control"  placeholder="Erick Nicolas" required>

                    <h3><label for="exampleFormControlInput1">Apellido</label></h3>
                    <input type="text" name="apellido" class="form-control"  placeholder="Gonzalez Rojas" required>

                    <h3><label for="exampleFormControlInput1">Cédula</label></h3>
                    <input type="number" name="cc" class="form-control"  placeholder="123456789" required>

                    <button type="submit" name="enviar" class="btn btn-outline-info">Evíar</button>
                </form>
                <!--Comienza el código php-->
                <?php
                    if (isset($_GET['enviar'])) {
                        $nombre = $_GET['nombre'];
                        $apellido = $_GET['apellido'];
                        $cedula = $_GET['cc'];
                        //Imprime las variables indicadas
                        echo "Nombre : ".$nombre."<br>";
                        echo "Apellido : ".$apellido."<br>";
                        echo "Cédula : ".$cedula."<br>";
                    }
                ?>
                <!--Termina el código php-->
            </div>
        </section>
    </body>
</html>