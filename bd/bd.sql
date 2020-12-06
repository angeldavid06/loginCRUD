CREATE DATABASE gasto;
USE gasto;

CREATE TABLE t_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    aPaterno VARCHAR(255),
    aMaterno VARCHAR(255),
    email VARCHAR(255),
    usuario VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABLE t_gastos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    concepto VARCHAR(255),
    cantidad INT,
    fecha DATE
);