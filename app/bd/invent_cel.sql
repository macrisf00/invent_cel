-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-12-2019 a las 04:34:13
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `invent_cel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t002_movimientos`
--

CREATE TABLE `t002_movimientos` (
  `f002_id_movto` int(11) NOT NULL,
  `f002_imei` varchar(16) DEFAULT NULL,
  `f002_fecha_entrada` date NOT NULL,
  `f002_id_asesor_e` varchar(15) DEFAULT NULL,
  `f002_id_local_e` smallint(3) DEFAULT NULL,
  `f002_id_proveedor` varchar(15) DEFAULT NULL,
  `f002_fecha_salida` date DEFAULT NULL,
  `f002_id_asesor_s` varchar(15) DEFAULT NULL,
  `f002_id_local_s` smallint(3) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t002_movimientos`
--

INSERT INTO `t002_movimientos` (`f002_id_movto`, `f002_imei`, `f002_fecha_entrada`, `f002_id_asesor_e`, `f002_id_local_e`, `f002_id_proveedor`, `f002_fecha_salida`, `f002_id_asesor_s`, `f002_id_local_s`, `updated_at`, `created_at`) VALUES
(1, '1234567890', '2019-12-23', 'c1', 2, 'c2', NULL, NULL, NULL, '2019-12-24 03:03:20', '2019-12-24 03:03:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t003_productos`
--

CREATE TABLE `t003_productos` (
  `f003_imei` varchar(16) NOT NULL,
  `f003_referencia` varchar(30) NOT NULL,
  `f003_precio_compra` double DEFAULT NULL,
  `f003_precio_venta` double DEFAULT NULL,
  `f003_iva` double DEFAULT NULL,
  `f003_descuento` double DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t003_productos`
--

INSERT INTO `t003_productos` (`f003_imei`, `f003_referencia`, `f003_precio_compra`, `f003_precio_venta`, `f003_iva`, `f003_descuento`, `updated_at`, `created_at`) VALUES
('1234567890', 'IPHONE 6', 200, 300, 2, 0, '2019-12-16 04:26:54', '2019-12-16 04:26:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t004_caracteristicas`
--

CREATE TABLE `t004_caracteristicas` (
  `f004_id_atributo` smallint(3) NOT NULL,
  `f004_descripcion` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t004_caracteristicas`
--

INSERT INTO `t004_caracteristicas` (`f004_id_atributo`, `f004_descripcion`, `updated_at`, `created_at`) VALUES
(1, 'Capacidad', '2019-12-15 23:05:49', '2019-12-15 23:05:49'),
(2, 'Color', '2019-12-15 23:17:38', '2019-12-15 23:17:38'),
(3, 'Ram', '2019-12-15 23:35:10', '2019-12-15 23:35:10'),
(4, 'Marca', '2019-12-16 10:36:56', '2019-12-16 10:35:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t005_detalle_producto`
--

CREATE TABLE `t005_detalle_producto` (
  `f005_id` int(11) NOT NULL,
  `f005_imei` varchar(16) DEFAULT NULL,
  `f005_id_atributo` smallint(3) DEFAULT NULL,
  `f005_valor` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t005_detalle_producto`
--

INSERT INTO `t005_detalle_producto` (`f005_id`, `f005_imei`, `f005_id_atributo`, `f005_valor`, `updated_at`, `created_at`) VALUES
(1, '1234567890', 2, 'Negro', '2019-12-16 09:43:02', '2019-12-16 09:43:02'),
(2, '1234567890', 1, '120 GB', '2019-12-16 10:25:34', '2019-12-16 10:20:13'),
(3, '1234567890', 1, '120', '2019-12-17 06:02:22', '2019-12-17 06:02:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t006_auditoria`
--

CREATE TABLE `t006_auditoria` (
  `f006_id` smallint(6) NOT NULL,
  `f006_id_usuario` varchar(15) DEFAULT NULL,
  `f006_fecha_ingreso` date DEFAULT NULL,
  `f006_fecha_logout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t007_tipos_usuarios`
--

CREATE TABLE `t007_tipos_usuarios` (
  `f007_id_tipo_usuario` smallint(3) NOT NULL,
  `f007_descripcion` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t007_tipos_usuarios`
--

INSERT INTO `t007_tipos_usuarios` (`f007_id_tipo_usuario`, `f007_descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Asesor', '2019-12-23 00:58:10', '2019-12-23 00:58:10'),
(2, 'Proveedor', '2019-12-23 00:58:10', '2019-12-23 00:58:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t008_usuarios`
--

CREATE TABLE `t008_usuarios` (
  `f008_id_usuario` varchar(15) NOT NULL,
  `f008_id_tipo_usuario` smallint(3) DEFAULT NULL,
  `f008_nombres` varchar(50) DEFAULT NULL,
  `f008_apellidos` varchar(50) DEFAULT NULL,
  `f008_id_tipo_documento` smallint(3) DEFAULT NULL,
  `f008_numero_doc` varchar(15) DEFAULT NULL,
  `f008_id_tipo_telefono` smallint(3) DEFAULT NULL,
  `f008_numero_tel` varchar(15) DEFAULT NULL,
  `f008_id_local` smallint(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t008_usuarios`
--

INSERT INTO `t008_usuarios` (`f008_id_usuario`, `f008_id_tipo_usuario`, `f008_nombres`, `f008_apellidos`, `f008_id_tipo_documento`, `f008_numero_doc`, `f008_id_tipo_telefono`, `f008_numero_tel`, `f008_id_local`) VALUES
('c1', 1, 'Zoila', 'Garces Sanchez', 1, '1111111111', 2, '3432332', 2),
('c2', 2, 'James ', 'Junior', 1, '222222222', 1, '2222222222', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t009_tipos_documentos`
--

CREATE TABLE `t009_tipos_documentos` (
  `f009_id_tipo_documento` smallint(3) NOT NULL,
  `f009_descripcion` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t009_tipos_documentos`
--

INSERT INTO `t009_tipos_documentos` (`f009_id_tipo_documento`, `f009_descripcion`, `updated_at`, `created_at`) VALUES
(1, 'Cedula', '2019-12-23 00:59:37', '2019-12-23 00:59:37'),
(2, 'Pasaporte', '2019-12-23 00:59:37', '2019-12-23 00:59:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t010_locales`
--

CREATE TABLE `t010_locales` (
  `f010_id_local` smallint(3) NOT NULL,
  `f010_nombre` varchar(30) NOT NULL,
  `f010_pais` varchar(30) DEFAULT NULL,
  `f010_departamento` varchar(30) DEFAULT NULL,
  `f010_ciudad` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t010_locales`
--

INSERT INTO `t010_locales` (`f010_id_local`, `f010_nombre`, `f010_pais`, `f010_departamento`, `f010_ciudad`, `created_at`, `updated_at`) VALUES
(1, 'UNICO', 'COLOMBIA', 'VALLE', 'PALMIRA', '2019-12-16 11:37:53', '2019-12-16 11:38:31'),
(2, 'COSMOCENTRO', 'COLOMBIA', 'VALLE', 'CALI', '2019-12-16 11:38:15', '2019-12-16 11:38:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t011_tipos_telefonos`
--

CREATE TABLE `t011_tipos_telefonos` (
  `f011_id_tipo_telefono` smallint(3) NOT NULL,
  `f011_descripcion` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t011_tipos_telefonos`
--

INSERT INTO `t011_tipos_telefonos` (`f011_id_tipo_telefono`, `f011_descripcion`, `updated_at`, `created_at`) VALUES
(1, 'Celular', '2019-12-23 01:00:45', '2019-12-23 01:00:45'),
(2, 'Casa', '2019-12-23 01:00:45', '2019-12-23 01:00:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t012_login`
--

CREATE TABLE `t012_login` (
  `f012_id` smallint(6) NOT NULL,
  `f012_id_usuario` varchar(15) DEFAULT NULL,
  `f012_password` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t013_roles`
--

CREATE TABLE `t013_roles` (
  `f013_id_rol` smallint(3) NOT NULL,
  `f013_descripcion` varchar(50) DEFAULT NULL,
  `f013_crear` tinyint(1) DEFAULT NULL,
  `f013_eliminar` tinyint(1) DEFAULT NULL,
  `f013_editar` tinyint(1) DEFAULT NULL,
  `f013_consultar` tinyint(1) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t014_usuario_rol`
--

CREATE TABLE `t014_usuario_rol` (
  `f014_id` smallint(3) NOT NULL,
  `f014_id_usuario` varchar(15) DEFAULT NULL,
  `f014_id_rol` smallint(3) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `api_token`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cristian', 'cristian@gmail.com', NULL, '$2y$10$sfIdGvaR.MMj2nxYeGWEg.JJsiRIrl2h/L11cljDTbni04zEZOcYq', '$2y$10$sfIdGvaR.MMj2nxYeGWEg.JJsiRIrl2h/L11cljDTbni04zEZOcYq', '0CxwX7N8jdM2zxhMBVHd6IQGNkkttsQqaY6YCzW5nrgrrbBwg1pWqndB4wAj', '2019-12-14 06:17:53', '2019-12-14 06:17:53'),
(2, 'julian', 'julian@gmail.com', NULL, NULL, '$2y$10$CAxYxtnmkoLYRs/DMPZlI.5T6K68N1BoooHTBRuPS7q5HgAcvsa4q', NULL, '2019-12-24 06:29:37', '2019-12-24 06:29:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `t002_movimientos`
--
ALTER TABLE `t002_movimientos`
  ADD PRIMARY KEY (`f002_id_movto`),
  ADD KEY `f002_imei` (`f002_imei`),
  ADD KEY `f002_id_asesor_e` (`f002_id_asesor_e`),
  ADD KEY `f002_id_local_e` (`f002_id_local_e`),
  ADD KEY `f002_id_proveedor` (`f002_id_proveedor`),
  ADD KEY `f002_id_asesor_s` (`f002_id_asesor_s`),
  ADD KEY `f002_id_local_s` (`f002_id_local_s`);

--
-- Indices de la tabla `t003_productos`
--
ALTER TABLE `t003_productos`
  ADD PRIMARY KEY (`f003_imei`);

--
-- Indices de la tabla `t004_caracteristicas`
--
ALTER TABLE `t004_caracteristicas`
  ADD PRIMARY KEY (`f004_id_atributo`);

--
-- Indices de la tabla `t005_detalle_producto`
--
ALTER TABLE `t005_detalle_producto`
  ADD PRIMARY KEY (`f005_id`),
  ADD KEY `f005_imei` (`f005_imei`);

--
-- Indices de la tabla `t006_auditoria`
--
ALTER TABLE `t006_auditoria`
  ADD PRIMARY KEY (`f006_id`),
  ADD KEY `f006_id_usuario` (`f006_id_usuario`);

--
-- Indices de la tabla `t007_tipos_usuarios`
--
ALTER TABLE `t007_tipos_usuarios`
  ADD PRIMARY KEY (`f007_id_tipo_usuario`);

--
-- Indices de la tabla `t008_usuarios`
--
ALTER TABLE `t008_usuarios`
  ADD PRIMARY KEY (`f008_id_usuario`),
  ADD KEY `f008_id_tipo_usuario` (`f008_id_tipo_usuario`),
  ADD KEY `f008_id_tipo_documento` (`f008_id_tipo_documento`),
  ADD KEY `f008_id_tipo_telefono` (`f008_id_tipo_telefono`),
  ADD KEY `f008_id_local` (`f008_id_local`);

--
-- Indices de la tabla `t009_tipos_documentos`
--
ALTER TABLE `t009_tipos_documentos`
  ADD PRIMARY KEY (`f009_id_tipo_documento`);

--
-- Indices de la tabla `t010_locales`
--
ALTER TABLE `t010_locales`
  ADD PRIMARY KEY (`f010_id_local`);

--
-- Indices de la tabla `t011_tipos_telefonos`
--
ALTER TABLE `t011_tipos_telefonos`
  ADD PRIMARY KEY (`f011_id_tipo_telefono`);

--
-- Indices de la tabla `t012_login`
--
ALTER TABLE `t012_login`
  ADD PRIMARY KEY (`f012_id`),
  ADD KEY `f012_id_usuario` (`f012_id_usuario`);

--
-- Indices de la tabla `t013_roles`
--
ALTER TABLE `t013_roles`
  ADD PRIMARY KEY (`f013_id_rol`);

--
-- Indices de la tabla `t014_usuario_rol`
--
ALTER TABLE `t014_usuario_rol`
  ADD PRIMARY KEY (`f014_id`),
  ADD KEY `f014_id_usuario` (`f014_id_usuario`),
  ADD KEY `f014_id_rol` (`f014_id_rol`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `t002_movimientos`
--
ALTER TABLE `t002_movimientos`
  MODIFY `f002_id_movto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `t004_caracteristicas`
--
ALTER TABLE `t004_caracteristicas`
  MODIFY `f004_id_atributo` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t005_detalle_producto`
--
ALTER TABLE `t005_detalle_producto`
  MODIFY `f005_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `t006_auditoria`
--
ALTER TABLE `t006_auditoria`
  MODIFY `f006_id` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `t007_tipos_usuarios`
--
ALTER TABLE `t007_tipos_usuarios`
  MODIFY `f007_id_tipo_usuario` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t009_tipos_documentos`
--
ALTER TABLE `t009_tipos_documentos`
  MODIFY `f009_id_tipo_documento` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t010_locales`
--
ALTER TABLE `t010_locales`
  MODIFY `f010_id_local` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t011_tipos_telefonos`
--
ALTER TABLE `t011_tipos_telefonos`
  MODIFY `f011_id_tipo_telefono` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t012_login`
--
ALTER TABLE `t012_login`
  MODIFY `f012_id` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `t013_roles`
--
ALTER TABLE `t013_roles`
  MODIFY `f013_id_rol` smallint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `t014_usuario_rol`
--
ALTER TABLE `t014_usuario_rol`
  MODIFY `f014_id` smallint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t002_movimientos`
--
ALTER TABLE `t002_movimientos`
  ADD CONSTRAINT `t002_movimientos_ibfk_1` FOREIGN KEY (`f002_imei`) REFERENCES `t003_productos` (`f003_imei`),
  ADD CONSTRAINT `t002_movimientos_ibfk_2` FOREIGN KEY (`f002_id_asesor_e`) REFERENCES `t008_usuarios` (`f008_id_usuario`),
  ADD CONSTRAINT `t002_movimientos_ibfk_3` FOREIGN KEY (`f002_id_local_e`) REFERENCES `t010_locales` (`f010_id_local`),
  ADD CONSTRAINT `t002_movimientos_ibfk_4` FOREIGN KEY (`f002_id_proveedor`) REFERENCES `t008_usuarios` (`f008_id_usuario`),
  ADD CONSTRAINT `t002_movimientos_ibfk_5` FOREIGN KEY (`f002_id_asesor_s`) REFERENCES `t008_usuarios` (`f008_id_usuario`),
  ADD CONSTRAINT `t002_movimientos_ibfk_6` FOREIGN KEY (`f002_id_local_s`) REFERENCES `t010_locales` (`f010_id_local`);

--
-- Filtros para la tabla `t005_detalle_producto`
--
ALTER TABLE `t005_detalle_producto`
  ADD CONSTRAINT `t005_detalle_producto_ibfk_1` FOREIGN KEY (`f005_imei`) REFERENCES `t003_productos` (`f003_imei`);

--
-- Filtros para la tabla `t006_auditoria`
--
ALTER TABLE `t006_auditoria`
  ADD CONSTRAINT `t006_auditoria_ibfk_1` FOREIGN KEY (`f006_id_usuario`) REFERENCES `t008_usuarios` (`f008_id_usuario`);

--
-- Filtros para la tabla `t008_usuarios`
--
ALTER TABLE `t008_usuarios`
  ADD CONSTRAINT `t008_usuarios_ibfk_1` FOREIGN KEY (`f008_id_tipo_usuario`) REFERENCES `t007_tipos_usuarios` (`f007_id_tipo_usuario`),
  ADD CONSTRAINT `t008_usuarios_ibfk_2` FOREIGN KEY (`f008_id_tipo_documento`) REFERENCES `t009_tipos_documentos` (`f009_id_tipo_documento`),
  ADD CONSTRAINT `t008_usuarios_ibfk_3` FOREIGN KEY (`f008_id_tipo_telefono`) REFERENCES `t011_tipos_telefonos` (`f011_id_tipo_telefono`),
  ADD CONSTRAINT `t008_usuarios_ibfk_4` FOREIGN KEY (`f008_id_local`) REFERENCES `t010_locales` (`f010_id_local`);

--
-- Filtros para la tabla `t012_login`
--
ALTER TABLE `t012_login`
  ADD CONSTRAINT `t012_login_ibfk_1` FOREIGN KEY (`f012_id_usuario`) REFERENCES `t008_usuarios` (`f008_id_usuario`);

--
-- Filtros para la tabla `t014_usuario_rol`
--
ALTER TABLE `t014_usuario_rol`
  ADD CONSTRAINT `t014_usuario_rol_ibfk_1` FOREIGN KEY (`f014_id_usuario`) REFERENCES `t008_usuarios` (`f008_id_usuario`),
  ADD CONSTRAINT `t014_usuario_rol_ibfk_2` FOREIGN KEY (`f014_id_rol`) REFERENCES `t013_roles` (`f013_id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
