CREATE DATABASE IF NOT EXISTS `sistama_oda`;



CREATE TABLE IF NOT EXISTS `tabla_de_prueba` (
	`valor_n` INT NOT NULL,
	`valor_s` VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS `usuarios`(
	`id_usuario` int NOT NULL AUTO_INCREMENT,
	`nombre` varchar(50) NOT NULL,
	PRIMARY KEY(`id_usuario`)
);

CREATE TABLE IF NOT EXISTS `Temas`(
	`id_tema` INT NOT NULL AUTO_INCREMENT,
	`nombre_tema` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`id_tema`)
);
 CREATE TABLE IF NOT EXISTS `lecciones`(
	`id_leccion` INT NOT NULL AUTO_INCREMENT,
	`nombre_lecciones` INT NOT NULL,
	nombre leccion VARCHAR(200) NOT NULL,
	`contenido_leccion` TEXT NOT NULL,
	PRIMARY KEY(`id_leccion`),
 );
 