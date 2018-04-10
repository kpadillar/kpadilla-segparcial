CREATE DATABASE segundoexamenbd;

CREATE TABLE usuarios(id_usuario serial primary key, 
nombre varchar(40) not null,
ap_paterno varchar(40) not null,
ap_materno varchar(40) not null,
usuario varchar(40) not null);

CREATE TABLE autor(id_autor serial primary key, 
nombre varchar(40) not null,
ap_paterno varchar(40) not null,
ap_materno varchar(40) not null,
nacionalidad varchar(10) not null);

CREATE TABLE libros(id_libro serial primary key, 
titulo varchar(40) not null,
id_autor varchar(40) not null,
anio_publicacion char(4) not null,
FOREIGN KEY (id_libro) REFERENCES autor (id_autor)
);

CREATE USER examen2;
CREATE USER mrojas;

ALTER TABLE usuarios OWNER TO examen2;
ALTER TABLE libros OWNER TO examen2;
ALTER TABLE autor OWNER TO examen2;

GRANT insert ON usuarios TO examen2;
GRANT insert ON libros TO examen2;
GRANT insert ON autor TO examen2;

GRANT insert ON usuarios TO mrojas;
GRANT insert ON libros TO mrojas;
GRANT insert ON autor TO mrojas;

