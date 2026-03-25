CREATE TABLE alumnos (
  idAlumno smallint NOT NULL,
  nombre varchar(80) NOT NULL,
  correo varchar(200) NOT NULL,
  nomJesuita varchar(80) NOT NULL,
  descripcion varchar(200) NOT NULL,
);



--INSERT MASIVO NOMBRES --
INSERT INTO alumnos (idAlumno, nombre, correo, nomJesuita, descripcion) VALUES
(1, 'Alejandro Mendoza Cano', 'alejandro.mendoza@correo.com', 'San Ignacio de Loyola', 'Especialista en desarrollo de software y optimización de sistemas computacionales.'),
(2, 'Beatriz Soler Vaca', 'beatriz.soler@correo.com', 'San Francisco Javier', 'Orientada a la gestión de proyectos de impacto social y mediación cultural.'),
(3, 'Ricardo Ortiz Lara', 'ricardo.ortiz@correo.com', 'San Pedro Canisio', 'Destacado por su capacidad de oratoria y gestión de equipos multidisciplinarios.'),
(4, 'Sofía Méndez Duarte', 'sofia.mendez@correo.com', 'San Roberto Belarmino', 'Enfocada en la investigación clínica y el desarrollo de políticas de bienestar.'),
(5, 'Hugo Valentín Ríos', 'hugo.valentin@correo.com', 'San Ignacio de Loyola', 'Analista con sólida formación en lógica formal y dilemas éticos contemporáneos.');





ALTER TABLE alumnos
  ADD PRIMARY KEY (idAlumno);