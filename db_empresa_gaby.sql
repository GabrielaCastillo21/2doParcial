-- se crea la base de datos
create database db_empresa;
-- se estable como predeterminada la base de datos
use db_empresa;

-- se crea la tabla de marcas
create table marcas(
    id                  smallint not null auto_increment,
    marca               varchar(50) not null,
    created_at          timestamp,
    updated_at          timestamp,
    deleted_at          timestamp,
     constraint PK_MARCA primary key (id)
);

insert into marcas(marca,created_at,updated_at) values('Samsung',NOW(),NOW());
insert into marcas(marca,created_at,updated_at) values('Xiaomi',NOW(),NOW());
insert into marcas(marca,created_at,updated_at) values('Motorola',NOW(),NOW());
insert into marcas(marca,created_at,updated_at) values('LG',NOW(),NOW());

-- se crea la tabla de productos
create table productos(
    id                  int not null auto_increment,
    producto            varchar(50) not null,
    marca_id            smallint not null ,
    descripcion         varchar(100) not null,
    precio_costo        decimal(8,2) not null,
    precio_venta        decimal(8,2) not null,
    existencia          int not null,
    created_at          timestamp,
    updated_at          timestamp,
    deleted_at          timestamp,
    constraint PK_PRODUCTO primary key (id),
    constraint FK_PROD_MARCA foreign key (marca_id) references marcas(id)
);
