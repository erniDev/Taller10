<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/style_1.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/tZ1XaXGiCA3l5Rot/hjBbBb2CMBaTPXWlI/BE=" crossorigin="anonymous"></script>

        <title>Solución primer punto</title>   
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
            <form action="" method="POST" >
                <div class="form-container">
                    <h3 class="h3">Por favor indique que números, y que operación va a realizar</h3>
                    
                    <label for="primer">Escribe el Primer numero</label>
                    <input type="number" name="numero_1" value="0" class="primer-numero" 
                    placeholder="123" id="primer" required>
                    
                    <label for="segundo">Escribe el segundo numero</label>
                    <input type="number" name="numero_2" value="0" class="segundo-numero" 
                    placeholder="456" id="segundo" required>
                    <!--Coloque la opción de las operaciones en forma de botones-->
                    <div>
                        <input type="radio" class="btn-check" name="options-base" id="option1" value="+" autocomplete="on">
                        <label class="btn" for="option1">Suma</label>
                        
                        <input type="radio" class="btn-check" name="options-base" id="option2" value="-" autocomplete="off">
                        <label class="btn" for="option2">Resta</label>
                        
                        <input type="radio" class="btn-check" name="options-base" id="option3" value="/" autocomplete="off">
                        <label class="btn" for="option3">División</label>
                        
                        <input type="radio" class="btn-check" name="options-base" id="option4" value="*" autocomplete="off">
                        <label class="btn" for="option4">Multiplicación</label>       
                    </div>
                    <button id="obtenerRespuesta" name="igual" class="btn btn-outline-light">Igual</button>  
                    <!--Comienza el código php-->
                    <?php
                        $n1 = $n2 = $tipo = $result = 0;
                        if (isset($_POST['options-base'])) {
                            $tipo = $_POST['options-base'];
                            
                            if (isset($_POST['igual'])) {
                                $n1 = $_POST['numero_1'];
                                $n2 = $_POST['numero_2'];

                                switch ($tipo) {
                                    case '+':
                                        $result = $n1 + $n2;
                                        break;
                                    case '-':
                                        $result = $n1 - $n2;
                                        break;
                                    case '/':
                                        if ($n2 != 0) {
                                            $result = $n1 / $n2;
                                        } else {
                                            echo "No es posible dividir entre cero.";
                                        }
                                        break;
                                    
                                    case '*':
                                        $result = $n1 * $n2;
                                        break;
                                }
                                $mensaje = "El resultado de $n1 $tipo $n2";
                                echo"<h4>". $mensaje ."</h4>";
                                echo "<h3>".$result."</h3>";
                            }
                        }
                    ?>
                    <!--Termina el código php-->
                </div>  
            </form>
        </section>    
    </body>
</html>