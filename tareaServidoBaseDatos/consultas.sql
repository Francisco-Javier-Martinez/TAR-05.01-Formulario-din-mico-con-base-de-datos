//Crear tabla recomendaciones
CREATE TABLE recomendaciones(
	idRecomendacion tinyint AUTO_INCREMENT,
    nombre varchar(150) not null,
    PRIMARY KEY(idRecomendacion)
);
//Meter recomendaciones
INSERT INTO recomendaciones (nombre) VALUES ('Me lo recomendó Google'),
('Anuncio'),
('Me lo recomendó un amigo'),
('Otros...');