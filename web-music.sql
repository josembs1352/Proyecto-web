create table Usuario(   
	id_usuario int not null primary key,
	nombre varchar (40)  not null,
	apellidos varchar (40) not null,
	direccion varchar (20) not null,
	correo varchar (40) not null,
	password varchar (40) null,
        tipoUsuario varchar(40) null
	);
create table artista(
        id_artista int not null auto_increment  primary key ,
        normbre varchar(40) not null

      );
create table dato(
        id_usuario int not null,
	id_artista int not null,
	foreign key (id_usuario) references Usuario (id_usuario) on delete cascade on update cascade ,
	foreign key (id_artista) references artista (id_artista)
	on delete cascade on update cascade 
);
create table audio(
	id_cancion int not null auto_increment primary key,
        id_usuario int not null,
        id_artista int not null,
	nombre varchar (40) not null,
	formato varchar (40) not null,
	fecha_ingreso date not null,
        dir_audio varchar (40) not null,
	foreign key(id_usuario)references Usuario(id_usuario) on delete cascade on update cascade,
        foreign key (id_artista) references artista (id_artista) on delete cascade on update cascade 
);
create table carrito(
        id_carrito int not null auto_increment primary key,
        id usuario int not null,
        id_audio int not null,
        foreign key (id_cancion) references audio (id_cancion) on delete cascade in update cascade
);
create table video(
	id_video int not null auto_increment primary key,
        id_usuario int not null,
	nombre varchar (40) not null,
	formato varchar (40) not null,
	fecha_ingreso date not null,
        dirvideo varchar (40) not null,
	foreign key(id_usuario)references Usuario(id_usuario) on delete cascade on update cascade
);
create table gallery(
        id_imagen int not null auto_increment primary key,
        id_usuario int not null,
	nombre varchar (40) not null,
	formato varchar (40) not null,
	fecha_ingreso date not null,
        dirimg varchar (40) not null,
	foreign key(id_usuario)references usuario(id_usuario) on delete cascade on update cascade
);

create table tour_date(
	id_tour int not null auto_increment primary key,
        id_usuario int not null,
	lugar varchar (40) not null,
	dia varchar (40) not null,
	fecha date not null,
        hora varchar (40) not null,
	foreign key(id_usuario)references Usuario(id_usuario) on delete cascade on update cascade);

create table Contacto(
	id_mensaje int not null auto_increment primary key,
        id_usuario int not null,
	nombres varchar (40) not null,
	apellidos varchar (40) not null,
	correo varchar (40) not null,
        mensaje varchar (40) not null,
	foreign key(id_usuario)references Usuario(id_usuario) on delete cascade on update cascade
);