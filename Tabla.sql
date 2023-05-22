--Creacion de tabla para la base de datos
CREATE TABLE cursos(
    nombre_curso CHAR(50) not null,
    cantidad_periodos INT not null,
    modulo_impartido INT not null,
    nombre_instructor CHAR(50) not null,
    creditos_curso DECIMAL not null
);