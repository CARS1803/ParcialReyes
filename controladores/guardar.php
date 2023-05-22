<?php
//Aca se usa el requiere para indicar que se va a agragar el archivo Cursos.php
require '../../modelos/Cursos.php';

//Colocamos un TRY que sirve para poner en alerta al programa sobre el código que puede lanzar una excepción.
//tambien colocaremos un catch que sirve para capturar y manejar cada excepción que se lance.
try {
    $curso = new Curso($_POST);
    $resultado = $curso->guardar();
    $error = "NO se guardó correctamente los datos";
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e1->getMessage();
}


?>
<!-- Aca se genero la estructura html para idicar al usuario si algo sale mal al
guardar la informacion. -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Guardado de datos</title>
</head>
<body>
<center>
    <!-- Aca generamos html para idicar al usuario si todo salio bien o hubo error al guardar datos -->
<div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php if($resultado): ?>
                    <div class="alert alert-success" role="alert">
                        Los datos se Guardaron con Exito!
                    </div>
                <?php else :?>
                    <div class="alert alert-danger" role="alert">
                        Ocurrió un error: <?= $error ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="/ParcialReyes/vistas/formulario/index.php" class="btn btn-info">Volver al formulario</a>
            </div>
        </div>
    </div>
</center>
</body>
</html>