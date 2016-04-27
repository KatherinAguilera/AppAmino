# Instalación AppAmino

+ Después de descargar o clonar el proyecto 

        $ cd nombreRepositorio

+ Ejecutar comando

        $ composer install
    
+ Modificar el nombre del archivo __.env.example.__ por __.env__ y agregar credenciales.
+ Script BD Mysql 

-- Base de datos: `cinema`
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `genres`
--
CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- Volcado de datos para la tabla `genres`
--
INSERT INTO `genres` (`id`, `genre`, `created_at`, `updated_at`) VALUES
(3, 'Terror', '2016-04-26 19:36:53', '2016-04-26 19:36:53'),
(6, 'Comedia', '2016-04-26 22:09:00', '2016-04-26 22:09:00'),
(7, 'Accion', '2016-04-26 22:09:21', '2016-04-26 22:09:56');
-- -------------------------------------------------------
--
-- Estructura de tabla para la tabla `migrations`
--
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- Volcado de datos para la tabla `migrations`
--
INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_09_21_183449_create_genres_table', 1),
('2015_09_21_183456_create_movies_table', 1),
('2015_09_22_190717_add_deleted_to_users_table', 2);
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `movies`
--
CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cast` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `genre_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `password_resets`
--
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- -------------------------------------------------------
--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
--
-- Volcado de datos para la tabla `users`
--
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'administrador', 'admin@gmail.com', '$2y$10$nFxNaeUv.QXkPMcJdokUK.80FKqvsBUTBmkLOhLHG7PDL/6G5gRCe', 'rnXMSLD2TB38HjIqxAsqq0fqHj1jY7t8uJvQwgCildDbLFiLJSbnJpSkxPsZ', '2016-04-25 21:38:16', '2016-04-26 22:07:37', NULL),
(4, 'Katherine', 'katherinam35@gmail.com', '$2y$10$Kaw90/AdAXwU9hxPJI/ceuQUA/rPPy8xJR1Ggzhv5FxqCjU.J2Xge', NULL, '2016-04-26 22:13:22', '2016-04-26 22:14:47', NULL),
(5, 'Jorge', 'jorge@example.com', '$2y$10$PmbIGgG8Dk2xOm5pbuJOgeaUUdZNYoVRP8/fElyQQMCghz1E9LOwS', NULL, '2016-04-26 18:10:19', '2016-04-26 18:10:19', NULL),
(6, 'Maria', 'maria@example.com', '$2y$10$XkCbx9TJj0jqvWOAmAvzdenReH0Gm2ba9swPlALWAKoTgzXMbnjcO', NULL, '2016-04-26 18:12:18', '2016-04-26 18:12:18', NULL),
(7, 'Wilson', 'wilson@example.com', '$2y$10$c0pjuwzEvmHs0roHgSYLvOToSRwwU4wmVT7dks0VcjCKgs.D3MOhS', NULL, '2016-04-26 18:13:06', '2016-04-26 18:13:06', NULL),
(8, 'Lina S', 'lina@example.com', '$2y$10$SGN9lumNzKisruZK/L6nQ.S8gobdv30xRAynNjTW5KMtU8RScOX/a', NULL, '2016-04-26 18:13:47', '2016-04-26 21:33:01', NULL),
(9, 'Gabriel  D', 'gabriel@gmail.com', '$2y$10$dNzkYa5C5cltFJFUuJ6CueGf33DZKU6OPfEnF1OSoEZIvB0KjrHgG', NULL, '2016-04-26 21:18:37', '2016-04-26 21:19:00', NULL),
(10, 'Alejandra', 'ale@aaa.com', '$2y$10$hEZroDij0YOWtOmJ9nMWXuvfLnHbHhQsa/F34TjvfOCmcc/qPTtI2', NULL, '2016-04-26 22:08:26', '2016-04-26 22:08:26', NULL);

--
-- Índices para tablas volcadas
--
--
-- Indices de la tabla `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_genre_id_foreign` (`genre_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


+ Ejecutar las migraciones.
        $ php artisan migrate

+ Por ultimo generar una key .

         $ php artisan key:generate

+ ejecutar el proyecto.

        $ php artisan serve
