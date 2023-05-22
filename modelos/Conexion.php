<!-- Establecer Conexion con la base de Datos -->
<?php
abstract class Conexion{
    public static $conexion = null;

    private static function conectar(){
        try{
            //Aca se realiza la conexion a la BD usando este enlace.
            self::$conexion = new PDO('informix:host=host.docker.internal; service=9088; database=mdn; server=informix; protocol=onsoctcp;EnableScrollableCursors = 1','informix','in4mix'); 
            // Definimos el manejo de las excepecones.
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            // Si existira un error aparecera lo siguiente.
            echo "Error de conexion de BD";
            echo "<br>";
            echo $e->getMessage();
            exit;
        }
            //Colamos return para obtener un resultaddo.
        return self::$conexion;
    }

    public static function ejecutar($sql){
        // Conectamos la base de datos con el metodo conectar.
        self::conectar();
        // Creamos una sentencia y la ejecutamos.
        $sentencia = self::$conexion->prepare($sql);
        $resultado = $sentencia->execute();
        // Cerramos la conexion y devolvemos un resutaldo.
        self::$conexion = null;
        return $resultado;
    }

    public static function servir($sql){
        // conectamos a la bd
        self::conectar();
        // Preparamos y eejecutamos la sentencia
        $sentencia = self::$conexion->prepare($sql);
        $sentencia->execute();
        $resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        // Cerramos la conexion y devolvemos el resutaldo
        self::$conexion = null;
        return $resultados;

}}