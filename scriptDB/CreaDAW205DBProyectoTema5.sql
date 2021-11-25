--Creacion de base de datos DB205DWESProyectoTema5
create database if not exists DB205DWESProyectoTema5;

--Creacion de la tabla Departamento en la base de datos DB205DWESProyectoTema5
create table if not exists DB205DWESProyectoTema5.Usuario(
    CodUsuario varchar(15),
    Password varchar(64) NOT NULL,
    DescUsuario varchar(255) NOT NULL,
    NumConexiones int default 0,
    FechaHoraUltimaConexion timestamp,
    Perfil enum("administrador", "usuario") default "usuario",
    ImagenUsuario mediumblob NULL,
    primary key(CodUsuario)
)ENGINE=INNODB;

--Creacion de usuario
create user 'user205DWESProyectoTema5'@'%' identified by 'P@ssw0rd';
grant all privileges on DB205DWESProyectoTema5.* to 'user205DWESProyectoTema5'@'%';
