CREATE DOMAIN CI VARCHAR(10) CONSTRAINT valid_identifier
CHECK (VALUE ~’^(V|E)-[0-9]{1,8}$’);

CREATE DOMAIN ESTADOS VARCHAR(10) 
CHECK (
	VALUES IN ('En espera', 'procesando', 'enviado', 'entregado', 'cancelado')
);

CREATE TABLE usuario (
	cedula CI PRIMARY KEY,
	nombre VARCHAR(40),
	apellido VARCHAR(40),
	direccion VARCHAR(80) NOT NULL,
	correo VARCHAR(40),
	contrasena VANCHAR(40) NOT NULL
);

CREATE TABLE local (
	id INT IDENTITY(1,1) PRIMARY KEY,
	nombre VARCHAR(40) NOT NULL,
	direccion VARCHAR(80)
);

CREATE TABLE empleado (
	cedula CI PRIMARY KEY FOREIGN KEY (cedula) REFERENCES usuario(cedula),
	cargo VARCHAR(40),
	idlocal INT NOT NULL FOREIGN KEY (idlocal) REFERENCES local(id)
);

CREATE TABLE cliente (
	cedula CI PRIMARY KEY FOREIGN KEY (cedula) REFERENCES usuario(cedula),
	direccion_de_envio VARCHAR(80),
	telefono int
);

CREATE TABLE pedido (
	codigo INT PRIMARY KEY,
	estado ESTADOS,
	cedulacliente CI NOT NULL FOREIGN KEY (cedulacliente) REFERENCES cliente(cedula)
);

CREATE TABLE transferencia (
	codigo INT FOREIGN KEY (codigo) REFERENCES pedido(codigo) PRIMARY KEY,
	codigo_confirmacion VARCHAR(80) UNIQUE
);

CREATE TABLE gestionapedidos (
	cedulaempleado CI FOREIGN KEY (cedulaempleado) REFERENCES empleado(cedula),
	codigopedido INT FOREIGN KEY (codigopedido) REFERENCES pedido(codigo),
	PRIMARY KEY (cedulaempleado,codigopedido)
);

CREATE TABLE menu (
	id INT IDENTITY(1,1) PRIMARY KEY,
	nombre VARCHAR(40)
);

CREATE TABLE tieneMenu (
	idlocal INT FOREIGN KEY (idlocal) REFERENCES local(id),
	idmenu INT FOREIGN KEY (idmenu) REFERENCES menu(id),
	PRIMARY KEY (idlocal,idmenu) 
);

CREATE TABLE cuentasBancarias (
	numero_de_cuenta INT PRIMARY KEY,
	cedula CI NOT NULL,
	correo VARCHAR(40)
);

CREATE TABLE beneficiario (
	cedula CI FOREIGN KEY (cedula) REFERENCES cuentasBancarias(cedula) PRIMARY KEY,
	nombre VARCHAR(80) NOT NULL
);

CREATE TABLE tieneCuentaBancaria (
	idlocal INT FOREIGN KEY (idlocal) REFERENCES local(id),
	numero_de_cuenta INT FOREIGN KEY (numero_de_cuenta) REFERENCES cuentasBancarias(numero_de_cuenta),
	PRIMARY KEY (idlocal,numero_de_cuenta)
);

CREATE TABLE plato (
	id INT IDENTITY(1,1) PRIMARY KEY,
	nombre VARCHAR(80) NOT NULL,
	descripcion VARCHAR(300),
	precio FLOAT,
	tiempo_estimado TIME
);

CREATE TABLE poseeMenu (
	idplato INT FOREIGN KEY (idplato) REFERENCES plato(id),
	idmenu INT FOREIGN KEY (idmenu) REFERENCES menu(id),
	PRIMARY KEY (idplato,idmenu)
);

CREATE TABLE extra (
	id INT IDENTITY(1,1) PRIMARY KEY,
	nombre VARCHAR(40) NOT NULL,
	precio FLOAT
);

CREATE TABLE tenerExtra (
	idplato INT FOREIGN KEY (idplato) REFERENCES plato(id),
	idextra INT FOREIGN KEY (idextra) REFERENCES extra(id),
	PRIMARY KEY (idplato,idextra)
);

CREATE TABLE PedidosyPlatos (
	idplato INT FOREIGN KEY (idplato) REFERENCES plato(id),
	codigoPedido INT FOREIGN KEY (codigoPedido) REFERENCES pedido(codigo),
	PRIMARY KEY (idplato,codigoPedido)
);

CREATE TABLE venta (
	codigoPedido INT FOREIGN KEY (codigoPedido) REFERENCES pedido(codigo) PRIMARY KEY,
	iva FLOAT (subtotal*0.12) NOT NULL,
	subtotal FLOAT NOT NULL,
	total FLOAT AS subtotal + iva
);


CREATE TABLE bebida (
	id INT IDENTITY(1,1) PRIMARY KEY,
	nombre VARCHAR(40) NOT NULL,
	precio FLOAT
);

CREATE TABLE tieneBebida (
	idbebida INT FOREIGN KEY (idbebida) REFERENCES bebida(id),
	codigoPedido INT FOREIGN KEY (codigoPedido) REFERENCES pedido(codigo),
	PRIMARY KEY (idbebida,codigoPedido)
);

CREATE TABLE MenuExtra (
	idextra INT FOREIGN KEY (idextra) REFERENCES extra(id),
	idmenu INT FOREIGN KEY (idmenu) REFERENCES menu(id),
	PRIMARY KEY (idbebida,idextra)
);

CREATE TABLE MenuBebida (
	idbebida INT FOREIGN KEY (idbebida) REFERENCES bebida(id),
	idmenu INT FOREIGN KEY (idmenu) REFERENCES menu(id),
	PRIMARY KEY (idbebida,idmenu)
);
