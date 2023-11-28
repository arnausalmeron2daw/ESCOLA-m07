-- Tabla de Alumnos
CREATE TABLE alumnos (
    id_alumno INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    email VARCHAR(20) ,
    password VARCHAR(10) ,
    fecha_nacimiento DATE,
    direccion VARCHAR(100),
    telefono VARCHAR(15)
);

-- Tabla de Profesores
CREATE TABLE profesores (
    id_profesor INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) , 
    apellido VARCHAR(50),
    email VARCHAR(20) ,
    password VARCHAR(10) ,
    fecha_nacimiento DATE,
    direccion VARCHAR(100),
    telefono VARCHAR(15)
);



-- Tabla de Asignaturas
CREATE TABLE asignatura (
    id_asignatura INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT
);

-- Tabla de Profesores_Asignatura

CREATE TABLE profesores_asignaturas (
    id_profesor_asignatura INT AUTO_INCREMENT PRIMARY KEY,
    id_profesor INT,
    id_asignatura INT,
    FOREIGN KEY (id_profesor) REFERENCES profesores(id_profesor),
    FOREIGN KEY (id_asignatura) REFERENCES asignatura(id_asignatura)
);


-- Tabla de Matrícula (para registrar la relación entre alumnos y asignaturas)
CREATE TABLE matricula (
    id_matricula INT AUTO_INCREMENT PRIMARY KEY,
    id_alumno INT,
    id_asignatura INT,
    FOREIGN KEY (id_alumno) REFERENCES alumnos(id_alumno),
    FOREIGN KEY (id_asignatura) REFERENCES asignatura(id_asignatura)
);

-- Tabla de Calificaciones (para registrar las calificaciones de los alumnos en las asignaturas)
CREATE TABLE calificaciones (
    id_calificacion INT AUTO_INCREMENT PRIMARY KEY,
    id_matricula INT,
    calificacion FLOAT,
    FOREIGN KEY (id_matricula) REFERENCES matricula(id_matricula)
);

-- TABLAS DE ROLES Y USERS

-- Tabla de Roles
CREATE TABLE roles (
    id_role INT  PRIMARY KEY,
    role_name VARCHAR(50) UNIQUE
);

-- Insertar los roles disponibles
INSERT INTO roles (id_role, role_name) VALUES
    (1, 'teacher'),
    (2, 'student'),
    (3, 'admin');

-- Tabla de Usuarios
CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    id_role INT,
    FOREIGN KEY (id_role) REFERENCES roles(id_role)
);