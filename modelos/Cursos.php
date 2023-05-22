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

//Inicializamos nuestros atributos del objeto con construct.
    public function __construct($argumento = [] )
    {
        $this->nombre_curso = $argumento['nombre_curso'] ?? null;
        $this->cantidad_periodos = $argumento['cantidad_periodos'] ?? '';
        $this->modulo_impartido = $argumento['modulo_impartido'] ?? '';
        $this->nombre_instructor = $argumento['nombre_instructor'] ?? '';
        $this->creditos_curso = $argumento['creditos_curso'] ?? '';

    }

}
