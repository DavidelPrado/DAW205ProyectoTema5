--Creacion de base de datos DB205DWESProyectoTema5
create database if not exists DB205DWESProyectoTema5;

--Creacion de la tabla Departamento en la base de datos DB205DWESProyectoTema5
create table DB205DWESProyectoTema5.Usuario(
    CodUsuario varchar(15),
    DescUsuario varchar(255),
    Password sha2(codsusuario&password, 256),
    Perfil enum("administrador", "usuario"),
    NumConexiones integer,
    FechaHoraUltimaConexion timestamp,
    ImagenUsuario blob,
    primary key(CodUsuario)
)ENGINE=INNODB;

--Creacion de usuario
create user 'user205DWESProyectoTema5'@'%' identified by 'P@ssw0rd';
grant all privileges on DB205DWESProyectoTema5.* to 'user205DWESProyectoTema5'@'%';
