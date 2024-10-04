-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2024 a las 05:56:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `optica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_citas` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `fecha_de_cita` date DEFAULT NULL,
  `hora_de_cita` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_citas`, `nombre`, `apellido`, `email`, `telefono`, `fecha_de_cita`, `hora_de_cita`) VALUES
(1, 'ROBERTO', 'leon', 'betitoleon1@gmail.com', '45654334', '2024-04-10', '02:41:00'),
(2, 'Alexis', 'Armas', 'alexis@gmail.com', '4613245676', '2024-06-04', '17:50:00'),
(3, 'Daniela', 'venegas', 'Garcia@gmail.com', '4613245677', '2024-06-06', '12:14:00'),
(4, 'Fernanda', 'Garcia', 'Fernanda@gmail.com', '4613245676', '2024-06-14', '13:18:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `primer_apellido` varchar(50) DEFAULT NULL,
  `segundo_apellido` varchar(50) DEFAULT NULL,
  `rfc` varchar(13) DEFAULT 'XXAX000000XXX',
  `fotografia` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `primer_apellido`, `segundo_apellido`, `rfc`, `fotografia`, `id_usuario`) VALUES
(1, 'America', 'Leon', 'Rodriguez1', 'ABCD123456XYZ', 'default.jpg', 1),
(2, 'Patricia', 'Leon', 'Rodriguez', 'ABCD123456XYZ', 'default.jpg', 2),
(3, 'Alexa', 'perez', 'hernandez', 'AXLD123456XYZ', 'default.jpg', NULL),
(4, 'ROBERTO', 'LEON', 'GARCIA', 'GGGD123456XYZ', 'default.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `primer_apellido` varchar(50) DEFAULT NULL,
  `segundo_apellido` varchar(50) DEFAULT NULL,
  `curp` varchar(18) NOT NULL,
  `rfc` varchar(13) DEFAULT 'XXAX000000XXX',
  `id_usuario` int(11) DEFAULT NULL,
  `fotografia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `primer_apellido`, `segundo_apellido`, `curp`, `rfc`, `id_usuario`, `fotografia`) VALUES
(1, 'EDUARDO', 'GARCIA', 'PEREZ', 'LEEE731218HGTNRB88', 'EEED123456XYZ', NULL, 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACWCAYAAABkW7XSAAAAAXNSR0IArs4c6QAAIABJREFUeF5cvW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id_envio` int(11) NOT NULL,
  `metodo_envio` varchar(100) DEFAULT NULL,
  `fecha_envio` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `estado_envio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`id_envio`, `metodo_envio`, `fecha_envio`, `fecha_entrega`, `estado_envio`) VALUES
(1, 'paqueteria ', '2024-04-13', '2024-04-16', 'CELAYA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `fotografia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `marca`, `fotografia`) VALUES
(1, 'Bak-ley', '0e65004481cfc2ac59f83cf17b2e8a33.png'),
(3, 'Carrera', '142a3aeb830653178859debe47f703b4.png'),
(4, 'Channel', 'd7f8d0276d7969263a5fa74c1797148a.png'),
(5, 'D&G', '106edecf214dcb241b7a6416e6e45e80.png'),
(6, 'Dior', 'd76172dc496cb4f9b223b40799c6e4ea.png'),
(7, 'Fendi', '9330c137d5b5aa1628e45ac36654e807.png'),
(8, 'Gucci', '5366dbbb6d28476668b5a8b8f7f98727.png'),
(9, 'Guess', '3e7f46e8c6c8d85a658e281142459e4c.png'),
(10, 'Prada', 'd0f6203b332a0469d29f1db3a706dcf5.png'),
(11, 'Tom Forn', 'c0200148cbaefce2ed6dc7bbba21cc60.png'),
(12, 'Versage', '99135cc18c574c1d3062c3bba0ac3c9c.png'),
(13, 'Vogue', '0b224bd42c4a1c96321a0146716e09e3.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oftalmologo`
--

CREATE TABLE `oftalmologo` (
  `id_oftalmologo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `especialidad` varchar(100) DEFAULT NULL,
  `horario_disponible` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `oftalmologo`
--

INSERT INTO `oftalmologo` (`id_oftalmologo`, `nombre`, `apellido`, `especialidad`, `horario_disponible`) VALUES
(1, 'JORGE DAVID', 'TIERRABLANCA CABRERA', 'oftalmologo ', '24 horas');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `orders`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `orders` (
`id_usuario` int(11)
,`id_venta` bigint(20) unsigned
,`fecha` date
,`nombre` varchar(50)
,`primer_apellido` varchar(50)
,`segundo_apellido` varchar(50)
,`cantidad` decimal(32,2)
,`monto` decimal(42,4)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `order_detail`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `order_detail` (
`id_usuario` int(11)
,`id_venta` bigint(20) unsigned
,`fecha` date
,`id_producto` int(11)
,`producto` varchar(100)
,`cantidad` decimal(32,2)
,`monto` decimal(42,4)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegio`
--

CREATE TABLE `privilegio` (
  `id_privilegio` int(11) NOT NULL,
  `privilegio` varchar(52) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `privilegio`
--

INSERT INTO `privilegio` (`id_privilegio`, `privilegio`) VALUES
(1, 'Producto'),
(2, 'Tienda'),
(3, 'Marca'),
(4, 'Empleado'),
(5, 'Comprar'),
(6, 'Ver');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL DEFAULT 0.00,
  `id_marca` int(11) NOT NULL,
  `fotografia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `producto`, `precio`, `id_marca`, `fotografia`) VALUES
(1, 'Lentes Prada transparentes', 230.00, 10, '71b372a0b4d1e22aa219cdce0455cbad.png'),
(2, 'Lentes Gucci', 300.00, 8, '0fbfea15ec1eddfbad4d8d5ff53e06b4.png'),
(3, 'Lentes guess blancos', 499.00, 9, '167fa63344001efd4146b494f0a39c55.png'),
(4, 'Lentes Bak-Ley Negros', 399.00, 1, 'bf2f97090e8fb5e759d399aca3e1072a.png'),
(5, 'Lentes Bak-Ley Corazon 123', 399.99, 1, '4e36418ad9f1cc76381496b0df8c43ae.png'),
(6, 'Lentes Dior Corazon pastel', 299.99, 6, '52c61530abd8ff384c85edac1347e41a.png'),
(7, 'Lentes Dior Metalicos', 399.99, 6, '4664c8f6f15c28fd1533c25088724109.png'),
(8, 'Lentes channel Aviador negros', 400.00, 4, '504eab234627435670900260ffbe0547.png'),
(9, 'Lentes Dior chinita', 199.99, 6, '9727e000f52b346c148e964bbaf6547b.png'),
(10, 'Lentes prada', 2000.00, 10, '99b6aef9a3bb8c0b2e99790a4301a994.png'),
(11, 'Lentes Vogue Elegancia', 99.99, 13, '15875db087d4266bf47df355012d3f27.png'),
(12, 'Lentes Versage bety', 169.98, 12, '3205ec72360bd950521c3e80d56784c4.png'),
(13, 'Lentes Corazon Ardiente Prada', 199.99, 10, '94e3cc4dfffc6796b3a76357bfb9ba0f.png'),
(14, 'Lentes Gato Dior ', 199.99, 6, '18241e784b7d0a68c3ba600aba6a48df.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `direccion`, `telefono`, `correo`) VALUES
(1, 'daniela', 'condesa #345', '45267272', 'adelaidaramosrodriguez75@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_privilegio`
--

CREATE TABLE `rol_privilegio` (
  `id_rol` int(11) NOT NULL,
  `id_privilegio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol_privilegio`
--

INSERT INTO `rol_privilegio` (`id_rol`, `id_privilegio`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id_tienda` int(11) UNSIGNED NOT NULL,
  `tienda` varchar(100) DEFAULT NULL,
  `fotografia` varchar(100) DEFAULT 'defalt.jpg',
  `latitud` varchar(100) DEFAULT '20.52353',
  `longitud` varchar(100) DEFAULT '-100.8157'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id_tienda`, `tienda`, `fotografia`, `latitud`, `longitud`) VALUES
(1, 'Optica los Angeles Queretaro ', '62aab702933290c63693b4719085a1d2.png', '20.5847956', '-100.3971139');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `correo` varchar(56) NOT NULL,
  `password` varchar(52) NOT NULL,
  `token` varchar(64) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `correo`, `password`, `token`, `id_rol`) VALUES
(1, '20031883@itcelaya.edu.mx', '202cb962ac59075b964b07152d234b70', '5bbdcfb52516125c020c57e4c1a20573c91c1a87696824f89fa718188fb536cf', 1),
(2, 'americapleonr16@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 2),
(3, 'alexa@gmail.com', '123', NULL, 2),
(4, 'betito@gmail.com', '123', NULL, 2),
(5, 'fernanda@gmail.com', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_rol`
--

CREATE TABLE `usuario_rol` (
  `id_usuario` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario_rol`
--

INSERT INTO `usuario_rol` (`id_usuario`, `id_rol`) VALUES
(1, 1),
(2, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` bigint(20) UNSIGNED NOT NULL,
  `id_tienda` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `fecha` date DEFAULT current_timestamp(),
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_tienda`, `id_empleado`, `id_cliente`, `fecha`, `id_usuario`) VALUES
(1, 1, 4, 1, '2024-06-03', 2),
(2, 1, 4, 2, '2024-06-03', NULL),
(3, 1, 4, 2, '2024-06-03', NULL),
(4, 1, 4, 4, '2024-06-03', NULL),
(5, 1, 4, 2, '2024-06-05', NULL),
(6, 1, 4, 2, '2024-06-05', NULL),
(7, 1, 4, 2, '2024-06-05', NULL),
(8, 1, 4, 2, '2024-06-05', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalle`
--

CREATE TABLE `venta_detalle` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `venta_detalle`
--

INSERT INTO `venta_detalle` (`id_venta`, `id_producto`, `cantidad`) VALUES
(0, 2, 4.00),
(2, 2, 1.00),
(3, 5, 2.00),
(3, 2, 2.00),
(4, 8, 1.00),
(5, 2, 2.00),
(6, 3, 1.00),
(7, 4, 1.00),
(8, 7, 1.00);

-- --------------------------------------------------------

--
-- Estructura para la vista `orders`
--
DROP TABLE IF EXISTS `orders`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `orders`  AS SELECT `u`.`id_usuario` AS `id_usuario`, `v`.`id_venta` AS `id_venta`, `v`.`fecha` AS `fecha`, `c`.`nombre` AS `nombre`, `c`.`primer_apellido` AS `primer_apellido`, `c`.`segundo_apellido` AS `segundo_apellido`, sum(`vd`.`cantidad`) AS `cantidad`, sum(`vd`.`cantidad` * `p`.`precio`) AS `monto` FROM ((((`venta_detalle` `vd` join `venta` `v` on(`vd`.`id_venta` = `v`.`id_venta`)) join `cliente` `c` on(`c`.`id_cliente` = `v`.`id_cliente`)) join `usuario` `u` on(`u`.`id_usuario` = `c`.`id_usuario`)) join `producto` `p` on(`vd`.`id_producto` = `p`.`id_producto`)) GROUP BY `u`.`id_usuario`, `v`.`id_venta`, `v`.`fecha`, `c`.`nombre`, `c`.`primer_apellido`, `c`.`segundo_apellido` ORDER BY `v`.`fecha` DESC ;

-- --------------------------------------------------------

--
-- Estructura para la vista `order_detail`
--
DROP TABLE IF EXISTS `order_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `order_detail`  AS SELECT `u`.`id_usuario` AS `id_usuario`, `v`.`id_venta` AS `id_venta`, `v`.`fecha` AS `fecha`, `p`.`id_producto` AS `id_producto`, `p`.`producto` AS `producto`, sum(`vd`.`cantidad`) AS `cantidad`, sum(`vd`.`cantidad` * `p`.`precio`) AS `monto` FROM ((((`venta_detalle` `vd` join `venta` `v` on(`vd`.`id_venta` = `v`.`id_venta`)) join `cliente` `c` on(`c`.`id_cliente` = `v`.`id_cliente`)) join `usuario` `u` on(`u`.`id_usuario` = `c`.`id_usuario`)) join `producto` `p` on(`vd`.`id_producto` = `p`.`id_producto`)) GROUP BY 1, 2, 3, 4, 5 ORDER BY `p`.`producto` ASC ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_citas`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_envio`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `oftalmologo`
--
ALTER TABLE `oftalmologo`
  ADD PRIMARY KEY (`id_oftalmologo`);

--
-- Indices de la tabla `privilegio`
--
ALTER TABLE `privilegio`
  ADD PRIMARY KEY (`id_privilegio`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fkmarca` (`id_marca`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `rol_privilegio`
--
ALTER TABLE `rol_privilegio`
  ADD PRIMARY KEY (`id_rol`,`id_privilegio`),
  ADD KEY `id_privilegio` (`id_privilegio`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_tienda`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `usuario_ibfk_1` (`id_rol`);

--
-- Indices de la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD PRIMARY KEY (`id_usuario`,`id_rol`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_citas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `oftalmologo`
--
ALTER TABLE `oftalmologo`
  MODIFY `id_oftalmologo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `privilegio`
--
ALTER TABLE `privilegio`
  MODIFY `id_privilegio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `id_tienda` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fkmarca` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`);

--
-- Filtros para la tabla `rol_privilegio`
--
ALTER TABLE `rol_privilegio`
  ADD CONSTRAINT `rol_privilegio_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `rol_privilegio_ibfk_2` FOREIGN KEY (`id_privilegio`) REFERENCES `privilegio` (`id_privilegio`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `usuario_rol`
--
ALTER TABLE `usuario_rol`
  ADD CONSTRAINT `usuario_rol_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuario_rol_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
