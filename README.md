# gradiweb

Desarrollo de prueba para empresa chairama spa.

1. Cree base de datos servicios

con estructura:

CREATE TABLE `servicio` (
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `dias` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


2. Desarrollo de archivo con los metodos post, get, put, delete

 archivo service.php

3. Desarrollo de utils.

Gestión entre conexión de base de datos

4. Conexión de Base de datos

Archivo de conexión config.php

5. desarrollo de index.php

Archivo para visualizar el servicio y ejecutar metodos.
