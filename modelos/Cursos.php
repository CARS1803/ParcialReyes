<!-- Crecion de las Clases para los objetos -->
<?php
//Conectamos a Conexion.php
require 'Conexion.php';
//y cremoas la clase de curso.
class Cursos extends Conexion{
    public $nombre_curso;
    public $cantidad_periodos;
    public $modulo_impartido;
    public $nombre_instructor;
    public $creditos_curso;
}

    
