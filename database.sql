-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS NombreDeTuBaseDeDatos;

-- Usar la base de datos recién creada
USE NombreDeTuBaseDeDatos;

-- Crear la tabla 'registros' en la base de datos
CREATE TABLE IF NOT EXISTS registros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    contrasena VARCHAR(100) NOT NULL
);

-- Insertar registros en la tabla 'registros'
INSERT INTO registros (nombre, correo, telefono, contrasena)
VALUES ('Juan Perez', 'juan@example.com', '123456789', 'contraseña123');

INSERT INTO registros (nombre, correo, telefono, contrasena)
VALUES ('María García', 'maria@example.com', '987654321', 'qwerty456');
