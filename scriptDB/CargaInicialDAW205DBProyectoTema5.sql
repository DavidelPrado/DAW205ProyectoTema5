--Insertar datos en la tabla Usuario
use DB205DWESProyectoTema5;

insert into DB205DWESProyectoTema5.Usuario(CodUsuario, Password, DescUsuario) VALUES 
("DavidP", SHA2("DavidPpaso"), "Usuario de David del Prado"),
("User", SHA2("Userpaso"), "Usuario de ejemplo");


