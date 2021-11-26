--Insertar datos en la tabla Usuario
use DB205DWESProyectoTema5;

insert into DB205DWESProyectoTema5.Usuario(CodUsuario, Password, DescUsuario) VALUES 
('albertoF',SHA2('albertoFpaso',256),'AlbertoF'),
('outmane',SHA2('outmanepaso',256),'Outmane'),
('rodrigo',SHA2('rodrigopaso',256),'Rodrigo'),
('isabel',SHA2('isabelpaso',256),'Isabel'),
('david',SHA2('davidpaso',256),'David'),
('aroa',SHA2('aroapaso',256),'Aroa'),
('johanna',SHA2('johannapaso',256),'Johanna'),
('oscar',SHA2('oscarpaso',256),'Oscar'),
('sonia',SHA2('soniapaso',256),'Sonia'),
('heraclio',SHA2('heracliopaso',256),'Heraclio'),
('amor',SHA2('amorpaso',256),'Amor'),
('antonio',SHA2('antoniopaso',256),'Antonio'),
('albertoB',SHA2('albertoBpaso',256),'AlbertoB');


