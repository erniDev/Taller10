<?php
    include '../db/conexion.php';


    $filtro = isset($_GET['filtro']) ? $_GET['filtro'] : '';

    // Consulta SQL con filtro
    $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula LIKE '%$filtro%'");

    // Consulta para obtener las cédulas para el formulario de actualización
    $query2 = mysqli_query($conexion, "SELECT cedula FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../css/style_5.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <title>Solución quinto punto</title>

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
        <div class="wrapper">
            <div class="container">
                <div class="filter">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="search-row">
                                <!-- Formulario de búsqueda -->
                                <form action="" method="GET">
                                    <input type="text" name="filtro" class="form-control" placeholder="Filtrar por Cédula" value="<?= $filtro ?>">
                                    <input type="submit" value="Buscar">
                                </form>
                            </div>
                        </div>

                        <table id="music" class="table table-responsive table-hover">
                            <thead>
                                <tr class="myHead">
                                    <th>#</th>
                                    <th>id</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Cédula</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($datos = mysqli_fetch_array($query)) {
                                        $id = $datos['id'];
                                        $nombre = $datos['nombre'];
                                        $apellido = $datos['apellido'];
                                        $cedula = $datos['cedula'];

                                        echo '
                                        <tr data-url="FQS7i2z1CoA">
                                            <td></td>
                                            <td>'.$id.'</td>
                                            <td>'.$nombre.'</td>
                                            <td>'.$apellido.'</td>
                                            <td>'.$cedula.'</td>
                                        </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>

                        <div class="text-center controller">
                        <ul class="pagination"></ul>
                        <ul class="pager">
                            <li ><a href="javascript:void(0)" class="prev">Previous</a></li>
                            <li><a href="javascript:void(0)" class="next">Next</a></li>
                        </ul>
                    </div>  

                </div>

            </div>

            <h3>FORMULARIO DE INSERT</h3>
            <form action="back/almacenar_datos.php" method="POST">
                <input type="text" name="nombre" placeholder="Digite el nombre">
                <input type="text" name="apellido" placeholder="Digite apellido">
                <input type="number" name="cedula" placeholder="Digite la número de cedula">
                <input type="submit" name="almacenar" value="guardar">
            </form>

            <h3>FORMULARIO DE UPDATE</h3>
            <form action="" method="POST">
                <select name="id_consulta">
                    <?php
                        while ($datos2 = mysqli_fetch_array($query2)) {
                            $cedula_query = $datos2['cedula'];
                            echo '<option value="'.$cedula_query.'">'.$cedula_query.'</option>';
                        }
                    ?>
                </select>
                <input type="submit" name="buscar" value="buscar">
            </form>

            <?php
                if (isset($_POST['buscar'])) {
                    $id_cc_query = $_POST['id_consulta'];
                    echo '
                    <h4>Ingrese los nuevos datos para la cedula='.$id_cc_query.'</h4>
                    <form action="back/actualizar_datos.php" method="POST">
                        <input type="text" name="nombre_act" placeholder="Digite nuevo nombre">
                        <input type="hidden" value="'.$id_cc_query.'" name="cc">
                        <input type="text" name="apellido_act" placeholder="Digite nuevo apellido">
                        <input type="submit" name="act" value="actualziar">
                    </form>';
                }
            ?>

            <script src="js/script.js"></script>
            <script>
                <script type="text/javascript">
                    function upperCase() {
                    var x=document.getElementById("fname").value
                    document.getElementById("fname").value=x.toUpperCase()
                    }
                </script>
            </script>
        </div>
    </body>
</html>