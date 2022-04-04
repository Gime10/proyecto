create database dbproyectox

use dbproyectox

create table producto (

     id int not null primary key auto_increment,
     nombre varchar(50) not null,
     empresa varchar(50) not null,
     precio decimal(5) not null,
     categoria varchar(50) not null,
     descripcion varchar(100) null
)

insert into producto (nombre,empresa,precio,categoria,descripcion) 
values('Mesa','Taboada',1500,'muebles','mesa de 8 sillas')

insert into producto (nombre,empresa,precio,categoria,descripcion) 
values('silla','Taboada',500,'muebles',' silla de comedor')

insert into producto (nombre,empresa,precio,categoria,descripcion) 
values('lavadora','Samsung',5000,'electrodomestico',' capacidad de 10k')

insert into producto (nombre,empresa,precio,categoria,descripcion) 
values('vestido','versalles',2500,'ropa',' color azul con detalles flores')

insert into producto (nombre,empresa,precio,categoria,descripcion) 
values('Leche','Pil',120,'Articulos hogar',' Leche de 1k')