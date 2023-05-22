<!-- Creacion del formato html para guardar informacion -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Cursos</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Formulario de Informacion Cursos</h1>
        <div class="row justify-content-center">
            <!-- Creacion de la primer entrada de datos y usando la ruta donde se guardara la informacion en nuestra BD. -->
            <form action="/ParcialReyes/controladores/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre">Nombre del curso</label>
                        <input type="text" name="nombre_curso" id="nombre_curso" class="form-control">
                    </div>
                </div>
                <!-- Creaacion de la segunda entrada de datos -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="apellido">Cantidad de periodos</label>
                        <input type="number" name="cantidad_periodos" id="cantidad_periodos" class="form-control">
                    </div>
                </div>
                <!-- Creaacion de la tercera entrada de datos -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="fecha_de_nacimiento">Modulo en que se imparte</label>
                        <input type="number" name="modulo_impartido" id="modulo_impartido" class="form-control">
                    </div>
                </div>
                <!-- Creaacion de la cuarta entrada de datos -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="telefono">Nombres del Instructor encargado</label>
                        <input type="text" name="nombre_instructor" id="nombre_instructor" class="form-control">
                    </div>
                </div>
                <!-- Creaacion de la quinta entrada de datos -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="correo">creditos_curso</label>
                        <input type="decimal" name="creditos_curso" id="creditos_curso" class="form-control">
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>