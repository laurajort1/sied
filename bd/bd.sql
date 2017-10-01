drop database if exists proyectosied;

create database proyectosied;

use proyectosied;

-- Tabla tipos de usuarios // OK
create table tipos_usuarios (
id_tipo_usuario int primary key auto_increment,
nombre_tipo_usuario varchar(20) not null,
constraint unique_tipos_usuarios unique (nombre_tipo_usuario);
);

insert into tipos_usuarios (nombre_tipo_usuario) values ('cuentadante'),
('administrador'),
('almacenista'),
('instructor'),
('director');

-- Tabla de tipos de estados // OK
-- Especifica para que clase de cosa es cierto estado, si para un usuario o un elemento
create table tipos_estados (
id_tipo_estado int primary key auto_increment,
nombre_tipo_estado varchar(15) not null,
constraint unique_tipos_estados unique (nombre_tipo_estado)
);

insert into tipos_estados (nombre_tipo_estado) values ('usuario'),
('elemento');

-- Tabla de estados // OK
-- Son los diferentes estados que puede tener una cosa
create table estados (
id_estado int primary key auto_increment,
nombre_estado varchar(20) not null,
constraint unique_estados unique (nombre_estado)
);

insert into estados (nombre_estado) values ('activo'),
('inactivo'),
('mantenimiento'),
('baja');

-- Tabla de los tipos de estado que tiene cierto estado // OK
-- Un estado puede tener varios tipos y asi tambien un tipo puede ser de varios estados
create table estados_tipos_estados (
id_estado int not null,
id_tipo_estado int not null,
constraint pk_estados_tipos_estados primary key (id_estado, id_tipo_estado),
constraint fk_estados foreign key (id_estado) references estados (id_estado),
constraint fk_tipos_estados foreign key (id_tipo_estado) references tipos_estados (id_tipo_estado)
);

insert into estados_tipos_estados values (1, 1),
(1, 2),
(2, 1),
(3, 2),
(4, 2);

-- Tabla de regionales // OK
create table regionales (
id_regional int primary key auto_increment,
nombre_regional varchar(20) not null,
constraint unique_regionales unique (nombre_regional)
);

insert into regionales (nombre_regional) values
('Amazonas'),
('Antioquia'),
('Arauca'),
('Atlantico'),
('Bolivar'),
('Boyaca'),
('Caldas'),
('Caqueta'),
('Casanare'),
('Cauca'),
('Cesar'),
('Choco'),
('Cordoba'),
('Cundinamarca'),
('Guainia'),
('Guajira'),
('Guaviare'),
('Huila'),
('Magdalena'),
('Nariño,'),
('Norte de Santander'),
('Putumayo'),
('Quindio'),
('Risaralda'),
('San Andres'),
('Santander'),
('Sucre'),
('Tolima'),
('Valle'),
('Vaupes'),
('Vichada');

-- Tabla de municipios // OK
create table municipios (
id_municipio int primary key auto_increment,
nombre_municipio varchar(30) not null,
id_regional int not null,
constraint unique_municipios unique (nombre_municipio, id_regional),
constraint fk_municipios_regionales foreign key (id_regional) references regionales (id_regional)
);

insert into municipios (nombre_municipio, id_regional) values ('Piedecuesta', 26),
('Bucaramanga', 26),
('Giron', 26),
('Floridablanca', 26);
	

-- Tabla de centros // OK
create table centros (
id_centro int primary key auto_increment,
nit_centro varchar(20) not null,
nombre_centro varchar(45) not null,
id_municipio int not null,
constraint unique_nit_centro unique (nit_centro),
constraint unique_nombre_centro unique (nombre_centro),
constraint fk_municipios_centros foreign key (id_municipio) references municipios (id_municipio)
);

insert into centros (nit_centro, nombre_centro, id_municipio) values
('1', 'Centro de atención al sector agropecurio' , 1),
('2', 'Centro de servicios empresariales y turisticos', 2),
('3', 'Centro industrial de mantenimiento integral', 3),
('4', 'Centro industrial del diseño y la manofactura', 4);


-- Tabla de usuarios // OK
create table usuarios (
id_usuario int primary key auto_increment,
cedula_usuario varchar(15) not null,
nombres_usuario varchar(45) not null,
apellidos_usuario varchar(45) not null,
correo_usuario varchar(45) not null,
telefono_usuario varchar(12) not null,
fecha_nacimiento_usuario date not null,
extension_usuario varchar(10) not null,
contrasena_usuario varchar(70) not null,
id_estado int not null,
id_tipo int not null,
id_centro int not null,
constraint unique_usuarios_cedula unique (cedula_usuario),
constraint unique_usuarios_correo unique (correo_usuario),
constraint fk_estados_usuarios foreign key (id_estado) references estados (id_estado),
constraint fk_tipos_usuarios foreign key (id_tipo) references tipos_usuarios (id_tipo),
constraint fk_centros_usuarios foreign key (id_centro) references centros (id_centro)
);

insert into usuarios (cedula_usuario, nombres_usuario, apellidos_usuario, correo_usuario,
telefono_usuario, contrasena_usuario, id_estado, id_tipo, id_centro) values
(1098765432, 'Laura', 'Ortegon', 'ljortegon@misena.edu.co', '6431556',
'nnrTyAweLKj/vtNgUDBVUNHWV5DQT9jlbihl05ioi7g=', 1, 2, 1);

-- Tabla de categorias de elementos // OK
create table categorias (
id_categoria int primary key auto_increment,
nombre_categoria varchar(45) not null,
constraint unique_categorias unique (nombre_categoria)
);

-- Tabla de ambientes // OK
create table ambientes(
id_ambiente int primary key auto_increment,
nombre_ambiente varchar(30) not null,
id_cuentadante int not null,
id_estado int not null,
id_centro int not null,
constraint unique_ambientes unique (nombre_ambiente, id_centro),
constraint unique_ambientes_cuentadante unique (id_cuentadante),
constraint fk_usuarios_ambientes foreign key (id_cuentadante) references usuarios (id_usuario),
constraint fk_estados_ambientes foreign key (id_estado) references estados (id_estado),
constraint fk_centros_ambientes foreign key (id_centro) references centros (id_centro)
);
 
-- Tabla de elementos // OK
create table elementos (
id_elemento int primary key auto_increment,
serial_elemento varchar(20) not null,
codigo_elemento varchar(20) not null,
placa_elemento varchar(30) not null,
nombre_elemento varchar(45) not null,
descripcion_elemento varchar(45) not null,
marca_elemento varchar(20) not null,
modelo_elemento varchar(30) not null,
valor_elemento int(40) not null,
fecha_elemento date,
id_estado int not null,
id_categoria int not null,
id_ambiente int not null,
constraint unique_serial_elementos unique (serial_elemento),
constraint unique_codigo_elementos unique (codigo_elemento),
constraint unique_placa_elementos unique (placa_elemento),
constraint fk_estados_elementos foreign key (id_estado) references estados (id_estado),
constraint fk_categorias_elementos foreign key (id_categoria) references categorias (id_categoria),
constraint fk_ambientes_elementos foreign key (id_ambiente) references ambientes (id_ambiente)
);

-- Tabla de reportes
create table reportes (
id_reporte int primary key auto_increment,
texto_reporte varchar(1500) not null,
fecha_reporte date not null,
hora_reporte time not null,
id_instructor int not null,
constraint foreign key (id_instructor) references usuarios (id_usuario)
);

-- Tabla de elementos reporte
create table elementos_reportes (
id_elemento int not null,
id_reporte int not null,
constraint pk_elementos_reportes primary key (id_elemento, id_reporte),
constraint fk_elementos_elementos_reportes foreign key (id_elemento) references elementos (id_elemento),
constraint fk_reportes_elementos_reportes foreign key (id_reporte) references reportes (id_reporte)
);

-- Tabla de imagenes de reportes // OK
create table imagenes_reportes (
id_imagen_reporte int primary key auto_increment,
extension_imagen_reporte varchar(4) not null,
id_reporte int not null,
foreign key (id_reporte) references reportes (id_reporte)
);