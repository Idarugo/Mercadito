create table administrador(
id_adm int(5) not null AUTO_INCREMENT,
nom_adm varchar(50),
email_adm varchar(100),
tel_adm varchar(20),
pas_adm varchar(30),
primary key(id_adm)
);  

create table categoria(
id_categoria int(5) not null AUTO_INCREMENT,
nom_categoria varchar(50),
primary key(id_categoria)
);  

insert into categoria (id_categoria, nom_categoria) values (1,'Plantas de Interior');
insert into categoria (id_categoria, nom_categoria) values (2,'Plantas de Exterior ');
insert into categoria (id_categoria, nom_categoria) values (3,'Plantas Medicinales');
insert into categoria (id_categoria, nom_categoria) values (4,'Maceteros');
insert into categoria (id_categoria, nom_categoria) values (5,'Accesorios');
insert into categoria (id_categoria, nom_categoria) values (6,'Ofertas');
insert into categoria (id_categoria, nom_categoria) values (7,'Nuevos Productos');
insert into categoria (id_categoria, nom_categoria) values (8,'Insumos');

create table entrega(
id_entrega int(5) not null AUTO_INCREMENT,
nom_entrega varchar(50),
primary key(id_entrega)
);  

insert into entrega (id_entrega, nom_entrega) values (1,'Despacho a Domicilio');
insert into entrega (id_entrega, nom_entrega) values (2,'Retira tu Compra');

create table planta(
id_planta int(5) not null AUTO_INCREMENT,
nom_planta varchar(50),
id_categoria int(5) not null,
descripcion_planta varchar(50),
precio_plantas varchar(50),
cantidades_planta int(5) not null,
entrega_id int(5) not null,
imagen_planta 
foreign key(id_categoria) references categoria(id_categoria),
foreign key(id_entrega) references entrega(id_entrega),
primary key(id_planta)
);  

create table clientes(
id_clie int(5) not null AUTO_INCREMENT,
nom_clie varchar(50),
email_clie varchar(100),
pas_clie varchar(30),
primary key(id_clie)
);  

create table compra(
id_com int(5) not null AUTO_INCREMENT,
nom_com varchar(50),
dire_com varchar(50),
nom_com varchar(50),
id_planta int(5) not null,
foreign key(id_planta) references planta(id_planta),
primary key(id_clie)
);  

create table contactos(
id int AUTO_INCREMENT,
nombres varchar(20),
correo varchar(80),
mensaje varchar(80),
primary key(id)
);


