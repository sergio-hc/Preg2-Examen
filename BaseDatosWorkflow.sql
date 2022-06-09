create table FlujoProceso
(        
Flujo varchar(3),
Proceso varchar(3),
ProcesoSiguiente varchar(3),
Tipo varchar(1),
Pantalla varchar(50),
Rol varchar(20)
)

create table FlujoProcesoCondicionante      
(
Flujo  varchar(3),
Proceso  varchar(3),
ProcesoSI  varchar(3),
ProcesoNO varchar(3)
)

insert into FlujoProceso values('F1','P1','P2','I','Inicio','Frente');
insert into FlujoProceso values('F1','P2','P3','P','Documentos','Frente');
insert into FlujoProceso values('F1','P3','P4','P','Recepcionar','Comite');
insert into FlujoProceso values('F1','P5','P6','P','Confirmar','Comite');
insert into FlujoProceso values('F1','P5',null,'F','Notificacion','Comite');


create table FlujoProcesoSeguimiento
(
    flujo varchar(3),
    Proceso varchar(3),
    Tramite varchar(10),
    usuario varchar(30),
    FechaInicio date,
    HoraInicio  Time,
    FechaFin date,
    HoraFin Time

);

insert into FlujoProcesoSeguimiento values('F1','P1','1000','iot123','2022/04/20','10:00:00','2022/04/20','14:00:00');
insert into FlujoProcesoSeguimiento values('F1','P1 ','1000','open123','2022/04/20','14:01:00','2022/04/22','10:00:00');
insert into FlujoProcesoSeguimiento values('F2','P1','2020','msilva','2022/04/20','10:10:00','2022/04/21','11:10:00');
insert into FlujoProcesoSeguimiento values('F2','P2','2020','msilva','2022/04/21','11:11:00',null,null);
insert into FlujoProcesoSeguimiento values('F1','P1','1000','iot123','2022/04/20','10:00:00',null, null);
insert into FlujoProcesoSeguimiento values('F1','P2','2000','iot123','2022/04/20','10:00:00',null, null);
insert into FlujoProcesoSeguimiento values('F1','P1','1010','jhuaranca','2022/04/11','09:00:00','2022/04/11','09:10:00');
insert into FlujoProcesoSeguimiento values('F1','P2','10','jhuaranca','2022/04/11','09:11:00',null,null);



create table datos
(nombre varchar(30),
desc varchar(100),
nomDir varchar(50),
ci int,
fechaC datetime
);

create table acceso
(
    usuario varchar(30),
    password varchar(30)
);

insert into datos values('IOT', 'Informatica Orientada a la Transformacion', 'Aldo Valdez', 1234567, '2022-04-04');
insert into datos values('OPEN-INF', 'Open Informatica', 'Jose Maria Tapia', 1234321, '2022-05-04');

insert into acceso values('iot123', '123456');
insert into acceso values('open123','123456');


create table registrados
(
     frente varchar(50),
     dir varchar(50),
     fechaR datetime
);

create table datosElec
(
    dia varchar(20),
    descrip varchar(100),

);
 insert into datosElec values('01 de junio', 'Elecciones para director, Carrera de Informatica');