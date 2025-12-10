-- ======================================================
--   CREACIÓN DE BASE DE DATOS
-- ======================================================
CREATE DATABASE panaderia_ana
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE panaderia_ana;


-- ======================================================
--   TABLA: USUARIOS
-- ======================================================
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(120) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol ENUM('admin','cliente') DEFAULT 'cliente'
);

INSERT INTO usuarios (nombre, correo, password, rol) VALUES
('Administrador', 'admin@panaderia.com', 'Admin321!', 'admin');


-- ======================================================
--   TABLA: PRODUCTOS
-- ======================================================
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2) NOT NULL,
    imagen VARCHAR(255),
    categoria ENUM('Panadería','Repostería','Pastelería','Promoción') NOT NULL,
    existencia INT DEFAULT 0
);

INSERT INTO productos (nombre, descripcion, precio, imagen, categoria, existencia) VALUES
('Bonetes Dulces', 'Con crema pastelera en el centro y azúcar encima.', 100, 'publics/img/bonetesdulces.png', 'Panadería', 20),
('Dona de Chocolate', 'Dona con chocolate oscuro y relleno de dulce de leche.', 500, 'publics/img/dona.png', 'Repostería', 15),
('Tamal Asado', 'Cremoso y tradicional.', 100, 'publics/img/tamalasado.png', 'Panadería', 30),
('Piña de Pan', '10 bollitos tipo baguette con queso.', 100, 'publics/img/piña.png', 'Panadería', 25),
('Tres Leches', 'Pastel con chispas y cereza.', 1200, 'publics/img/tresleches.png', 'Pastelería', 10),
('Baguette', 'Pan con queso esparcido por encima.', 500, 'publics/img/baguet.png', 'Panadería', 40),

-- PROMOCIONES
('Combo Baguette + Café',
 'Promoción: Antes ₡2500. Ahora ₡1800. Disfrutá tu café favorito con una baguette recién horneada.',
 1800, 'publics/img/baguet.png', 'Promoción', 50),

('2x1 en Pastel de Chocolate',
 'Promoción: Antes ₡4000. Ahora ₡2000. Solo por esta semana. ¡El postre favorito al doble de amor!',
 2000, 'publics/img/quequeChocolate.png', 'Promoción', 30),

('Pack de Galletas Artesanales',
 'Promoción: Antes ₡3000. Ahora ₡2000. Llévate 3 paquetes y pagá solo 2. ¡Crocantes y deliciosas!',
 2000, 'publics/img/galletas.jpg', 'Promoción', 40);


-- ======================================================
--   TABLA: INVENTARIO (MOVIMIENTOS)
-- ======================================================
CREATE TABLE inventario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto_id INT NOT NULL,
    movimiento ENUM('entrada','salida') NOT NULL,
    cantidad INT NOT NULL,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (producto_id) REFERENCES productos(id) ON DELETE CASCADE
);


-- ======================================================
--   TABLA: PEDIDOS
-- ======================================================
CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NULL,
    nombre_cliente VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    direccion TEXT NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    estado ENUM('pendiente','preparando','enviado','entregado','cancelado') DEFAULT 'pendiente',
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
);


-- ======================================================
--   TABLA: PEDIDO DETALLES
-- ======================================================
CREATE TABLE pedido_detalles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    subtotal DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (pedido_id) REFERENCES pedidos(id) ON DELETE CASCADE,
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);


-- ======================================================
--   TABLA: RECETAS
-- ======================================================
CREATE TABLE recetas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT,
    ingredientes TEXT,
    imagen VARCHAR(255)
);

INSERT INTO recetas (nombre, descripcion, ingredientes, imagen) VALUES
('Pastel de chocolate', 'Bizcocho húmedo con cobertura de cacao y relleno de crema.', 'Harina, cacao, azúcar, crema, huevos', 'publics/img/quequeChocolate.png'),
('Queque seco', 'Receta clásica de vainilla.', 'Harina, azúcar, huevos, mantequilla, vainilla', 'publics/img/quequeSeco.png'),
('Pizzita', 'Mini pizzas de masa artesanal con salsa casera.', 'Harina, salsa de tomate, queso, levadura', 'publics/img/pizzita.png');


-- ======================================================
--   TABLA: SOBRE NOSOTROS
-- ======================================================
CREATE TABLE nosotros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    historia TEXT,
    mision TEXT,
    vision TEXT,
    imagen VARCHAR(255)
);

INSERT INTO nosotros (historia, mision, vision, imagen) VALUES (
    'Somos una panadería con más de 10 años de experiencia.',
    'Brindar productos frescos y de calidad.',
    'Ser la panadería favorita de la comunidad.',
    'publics/img/fondoVertical.png'
);


-- ======================================================
--   TABLA: PREGUNTAS FRECUENTES
-- ======================================================
CREATE TABLE preguntas_frecuentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pregunta VARCHAR(255) NOT NULL,
    respuesta TEXT NOT NULL
);

INSERT INTO preguntas_frecuentes (pregunta, respuesta) VALUES
('¿Hacen envíos a domicilio?', 'Sí, contamos con envíos express y normales dentro de la zona.'),
('¿Cuál es el horario?', 'Lunes a sábado de 7:00 a.m. a 7:00 p.m.'),
('¿Aceptan tarjeta?', 'Sí, tarjetas y Sinpe Móvil.');


-- ======================================================
--   TABLA: RESEÑAS
-- ======================================================
CREATE TABLE resenas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    comentario TEXT NOT NULL,
    calificacion INT CHECK (calificacion BETWEEN 1 AND 5),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- ======================================================
--   TABLA: CONTACTENOS
-- ======================================================
CREATE TABLE contactenos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(120) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- ======================================================
--   TABLA: PREGUNTAS (CLIENTES)
-- ======================================================
CREATE TABLE preguntas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(120) NOT NULL,
    pregunta TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
