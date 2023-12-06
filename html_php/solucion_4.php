<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/style_4.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <title>Solución cuarto punto</title>
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
                <form action="" method="POST">
                    <h2><label for="exampleFormControlInput1">Por favor seleccione su fecha de nacimiento:</label></h2>
                    <input type="date" name="fecha" required>
                    
                    <button type="submit" name="enviar" class="btn btn-outline-info">Enviar</button>
                </form>
                <!--Comienza el código php-->
                <?php
    
                    if (isset($_POST['enviar'])) {
                        $fecha = new DateTime($_POST['fecha']);
                        $date2 = new DateTime(date("y-m-d"));

                        $diff = $fecha->diff($date2);

                        $edad_actual = $diff->y;
                        $edad_meses = $diff->m;
                        $edad_dias = $diff->d;

                        echo "<h4>"."años: ".$edad_actual." meses: ".$edad_meses." días: ".$edad_dias."</h4>";
                    }
                ?>
                <!--Termina el código php-->
            </div>
        </section> 
    </body>
</html>