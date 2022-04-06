create database dbproyectox

use dbproyectox
--creación tabla producto--
create table producto (

     id int not null primary key auto_increment,
     nombre varchar(50) not null,
     empresa varchar(50) not null,
     precio decimal(5) not null,
     categoria varchar(50) not null,
     descripcion varchar(100) null
);

--creación tabla clientes--
create table cliente (

     id int not null primary key auto_increment,
     nombre varchar(50) not null,
     apellido varchar(50) not null,
     telefono int(10)  null,
     edad int(10) null
     );
--creacion tabla venta--
create table venta (
     id int not null primary key auto_increment,
     producto_id int  not null,
     cliente_id int  not null,
     monto_venta decimal(10) not null,
     numero_items int(10) not null, 
     foreign key (producto_id) references producto(id) on delete cascade on update cascade,
     foreign key (cliente_id) references cliente(id) on delete cascade on update cascade
);

--insercion de datos a producto --
insert into producto (nombre,empresa,precio,categoria,descripcion) 
values('Mesa','Taboada',1500,'muebles','mesa de 8 sillas');

insert into producto (nombre,empresa,precio,categoria,descripcion) 
values('silla','Taboada',500,'muebles',' silla de comedor');

insert into producto (nombre,empresa,precio,categoria,descripcion) 
values('lavadora','Samsung',5000,'electrodomestico',' capacidad de 10k');

insert into producto (nombre,empresa,precio,categoria,descripcion) 
values('vestido','versalles',2500,'ropa',' color azul con detalles flores');

insert into producto (nombre,empresa,precio,categoria,descripcion) 
values('Leche','Pil',120,'Articulos hogar',' Leche de 1k')

-- insercion de datos a tabla clientes--

insert into cliente (nombre,apellido,telefono,edad) 
values('Carlos','Gomez',7854623,'21')

insert into cliente (nombre,apellido,telefono,edad) 
values('Maria','Lopez',7882623,'15')

insert into cliente (nombre,apellido,telefono,edad) 
values('Sebastian','Rivera',6854623,'54')

insert into cliente (nombre,apellido,telefono,edad) 
values('Marcela','Zelaya',7254836,'36')

--insertar valores en ventas--

 insert into venta (producto_id,cliente_id,monto_venta,numero_items) 
values(1,2,2000,2)
 insert into venta (producto_id,cliente_id,monto_venta,numero_items) 
values(3,3,25000,10)
insert into venta (producto_id,cliente_id,monto_venta,numero_items) 
values(2,1,600,5)