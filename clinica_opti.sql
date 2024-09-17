-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 08:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica_opti`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividadesrealizadas`
--

CREATE TABLE `actividadesrealizadas` (
  `IdActividad` int(11) NOT NULL,
  `Fecha` date DEFAULT curdate(),
  `Hora` time DEFAULT curtime(),
  `NombreUsuario` varchar(255) NOT NULL,
  `ApellidoUsuario` varchar(255) NOT NULL,
  `CargoDeUsuario` varchar(100) NOT NULL,
  `Accion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actividadesrealizadas`
--

INSERT INTO `actividadesrealizadas` (`IdActividad`, `Fecha`, `Hora`, `NombreUsuario`, `ApellidoUsuario`, `CargoDeUsuario`, `Accion`) VALUES
(1, '2024-04-14', '00:00:00', 'nombreUsuario', 'apellidoUsuario', 'Encargado', 'Se ingresó un nuevo paciente: Montura Hola'),
(2, '0000-00-00', '00:00:00', 'Gokuu', 'Hola', 'Encargado', 'Se ingresó un nuevo paciente: Montura Hola'),
(3, '0000-00-00', '00:00:00', 'HenfyY', 'Magallanes', 'Gerente', 'Se ingresó un nuevo paciente: Vidalia Magallanes'),
(4, '0000-00-00', '00:00:00', 'HenfyY', 'Magallanes', 'Gerente', 'Se ingresó un nuevo paciente: Hency Magallanes'),
(5, '0000-00-00', '00:00:00', 'Hency', 'Magallanes', 'Gerente', 'Se ingresó un nuevo paciente: Hency Magallanes'),
(6, '0000-00-00', '00:00:00', 'MonturaAAAAAA', 'Magallanes', 'Gerente', 'Se ingresó un nuevo paciente: MonturaAAAAAA Magallanes'),
(7, '0000-00-00', '00:00:00', 'MonturaAAAAAA', 'Magallanes', 'Gerente', 'Se ingresó un nuevo paciente: MonturaAAAAAA Magallanes'),
(8, '0000-00-00', '00:00:00', 'MonturaAAAAAA', 'Magallanes', 'Gerente', 'Se ingresó un nuevo paciente: MonturaAAAAAA Magallanes'),
(9, '0000-00-00', '00:00:00', 'HenfyY', 'Magallanes', 'Gerente', 'Se ingresó un nuevo paciente: MonturaAAAAAA '),
(10, '0000-00-00', '00:00:00', 'HenfyY', 'Magallanes', 'Gerente', 'Se ingresó un nuevo paciente: MonturaAA kk'),
(11, '0000-00-00', '00:00:00', 'HenfyY', 'Magallanes', 'Gerente', 'Se ingresó un nuevo paciente: Aire De Electricidad'),
(12, '0000-00-00', '00:00:00', 'Gokuu', 'Hola', 'Encargado', 'Se ingresó un nuevo paciente: TV Negra'),
(13, '0000-00-00', '00:00:00', 'Gokuu', 'Hola', 'Encargado', 'Se elimino un paciente:  '),
(14, '0000-00-00', '00:00:00', 'Gokuu', 'Hola', 'Encargado', 'Se elimino un paciente: Montura kk'),
(15, '0000-00-00', '00:00:00', 'Gokuu', 'Hola', 'Encargado', 'Se eliminó paciente: MonturaAA kk'),
(16, '0000-00-00', '00:00:00', 'Gokuu', 'Hola', 'Encargado', 'Se editó paciente: Sigui '),
(17, '0000-00-00', '00:00:00', 'Gokuu', 'Hola', 'Encargado', 'Se editó paciente: PerlaA de la Rosa Franco'),
(18, '2024-04-15', '22:14:54', 'Gokuu', 'Hola', 'Encargado', 'Se editó paciente: [Hola [Santos'),
(19, '2024-04-15', '22:17:54', 'Gokuu', 'Hola', 'Encargado', 'Se editó paciente: Sigui EEEEEAA MagallanesSS'),
(20, '2024-04-16', '09:04:45', 'HenfyY', 'Magallanes', 'Gerente', 'Se editaron los datos del paciente Sigui EEEEEAA MagallanesSSs'),
(21, '2024-04-16', '09:07:12', 'HenfyY', 'Magallanes', 'Gerente', 'Se eliminó paciente: PerlaA de la Rosa Franco'),
(22, '2024-04-16', '09:11:52', '', '', 'Gerente', 'Usuario HenfyY  inicia sesión'),
(23, '2024-04-16', '09:12:31', '', '', 'Gerente', 'Usuario HenfyY  inicia sesión'),
(24, '2024-04-16', '09:14:12', '', '', 'Gerente', 'Usuario HenfyY Magallanes inicia sesión'),
(25, '2024-04-16', '09:16:35', '', '', 'Gerente', 'Usuario HenfyY Magallanes inicia sesión'),
(26, '2024-04-16', '09:42:02', '', '', 'Encargado', 'Usuario Gokuu Hola inicia sesión'),
(27, '2024-04-16', '09:58:10', '', '', '', 'Usuario migel@gmail.com 402852589 8098748562 hace cambio de contraseña'),
(28, '2024-04-16', '10:24:11', '', '', '', 'Usuario donde correo electronico es: migel@gmail.com Cedula: 402852589 y Celular: 8098748562 realizó cambio de contraseña+'),
(29, '2024-04-16', '10:35:31', '', '', '', 'Nuevo Usuario Sonia de los Santos Cedula: 00133150745, registrado como Encargado '),
(30, '2024-04-16', '10:35:32', '', '', '', 'Nuevo Usuario Sonia de los Santos Cedula: 00133150745, registrado como Encargado '),
(31, '2024-04-16', '10:37:17', '', '', 'Encargado', 'Usuario Sonia de los Santos inicia sesión'),
(32, '2024-04-16', '10:38:29', '', '', 'Encargado', 'Usuario Sonia de los Santos inicia sesión'),
(33, '2024-04-16', '10:51:17', '', '', '', 'Nuevo Usuario Hencyy Magallanes Cedula: 8098555, registrado como Encargado '),
(34, '2024-04-16', '10:51:55', '', '', 'Encargado', 'Usuario Hencyy Magallanes inicia sesión'),
(35, '2024-04-16', '10:53:40', '', '', 'Encargado', 'Usuario Hencyy Magallanes inicia sesión'),
(36, '2024-04-16', '10:58:05', '', '', 'Encargado', 'Usuario Hencyy Magallanes inicia sesión'),
(37, '2024-04-16', '11:09:31', '', '', 'Encargado', 'Usuario Gokuu Hola inicia sesión'),
(38, '2024-04-16', '11:10:50', 'Gokuu', 'HolaAA', '', 'Nuevo Usuario, Gokuu HolaAA Cedula: 0000000000, registrado como , actualizo sus datos.'),
(39, '2024-04-16', '14:29:51', '', '', 'Gerente', 'Usuario HenfyY Magallanes inicia sesión'),
(40, '2024-04-16', '14:30:05', 'HenfyY', 'Magallanes', '', 'Usuario, HenfyY Magallanes Cedula: 40241666649, registrado como , actualizo sus datos.'),
(41, '2024-04-16', '14:30:33', '', '', 'Gerente', 'Usuario HenfyY Magallanes inicia sesión'),
(42, '2024-04-16', '14:39:01', '', '', 'Gerente', 'Usuario HenfyY Magallanes inicia sesión'),
(43, '2024-04-16', '14:39:16', 'HenfyY', 'Magallanes', '', 'Usuario, HenfyY Magallanes, Cedula: 40241666649, registrado como , actualizó sus datos.'),
(44, '2024-04-16', '14:40:06', '', '', 'Gerente', 'Usuario HenfyY Magallanes inicia sesión'),
(45, '2024-04-16', '14:40:56', 'HenfyY', 'Magallanes', '', 'Usuario, HenfyY Magallanes, Cedula: 40241666649, registrado como , actualizó sus datos.'),
(46, '2024-04-16', '14:42:06', 'HenfyY', 'Magallanes', '', 'Usuario, HenfyY Magallanes, Cedula: 40241666649, registrado como , actualizó sus datos.'),
(47, '2024-04-16', '14:44:52', '', '', 'Gerente', 'Usuario HenfyY Magallanes inicia sesión'),
(48, '2024-04-16', '14:47:06', 'HenfyY', 'Magallanes', '', 'Usuario, HenfyY Magallanes, Cedula: 40241666649, registrado como , actualizó sus datos.'),
(49, '2024-04-16', '14:48:08', 'HenfyY', 'Magallanes', 'Gerente', 'Usuario, HenfyY Magallanes, Cedula: 40241666649, registrado como Gerente, actualizó sus datos.'),
(50, '2024-04-16', '15:18:54', '', '', 'Encargado', 'Usuario Gokuu HolaAA inicia sesión'),
(51, '2024-04-16', '15:24:14', 'Gokuu', 'HolaAA', 'Encargado', 'Se editaron los datos del paciente TVvVV NegraAA'),
(52, '2024-04-16', '15:24:59', 'Gokuu', 'HolaAA', 'Encargado', 'Se eliminó paciente: Sigui Magallanes'),
(53, '2024-04-16', '15:32:18', 'Gokuu', 'HolaAA', 'Encargado', 'Se agrego un nuevo Servicio de tipo (Servicio) al inventario.'),
(54, '2024-04-16', '16:21:36', 'Gokuu', 'HolaAA', 'Encargado', 'Se agrego un nuevo articulo de tipo (Producto) al inventario. articulo: Montura '),
(55, '2024-04-16', '16:33:32', 'Gokuu', 'HolaAA', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Producto en inventario. Articulo: Montura Marca: La Mejor.'),
(56, '2024-04-16', '16:34:46', 'Gokuu', 'HolaAA', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Producto en inventario. Articulo: Montura, marca: N/A.'),
(57, '2024-04-16', '16:35:31', 'Gokuu', 'HolaAA', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Otro en inventario. Articulo: Cristal, marca: La Mejor.'),
(58, '2024-04-16', '16:36:07', '', '', 'Gerente', 'Usuario HenfyY Magallanes inicia sesión'),
(59, '2024-04-16', '16:36:27', 'HenfyY', 'Magallanes', 'Gerente', 'Se actualizó un nuevo articulo de tipo: Producto en inventario. Articulo: Montura, marca: La Mejor.'),
(60, '2024-04-16', '16:36:57', 'HenfyY', 'Magallanes', 'Gerente', 'Se actualizó un nuevo articulo de tipo: Producto en inventario. Articulo: Montura, marca: La Mejor.'),
(61, '2024-04-16', '17:24:09', 'HenfyY', 'Magallanes', 'Gerente', 'Se eliminó un articulo de tipo:  en inventario. Articulo: 8, categoria: Lentes, marca: 8.'),
(62, '2024-04-16', '20:31:13', 'HenfyY', 'Magallanes', 'Gerente', 'Se eliminó un articulo de tipo:  en inventario. Articulo: Montura, categoria: Accesorio, marca: La Mejor.'),
(63, '2024-04-16', '20:35:01', 'HenfyY', 'Magallanes', 'Gerente', 'Se eliminó un articulo de tipo:  en inventario. Articulo: Montura, categoria: ServicioQQQ, marca: N/A.'),
(64, '2024-04-16', '20:35:44', 'HenfyY', 'Magallanes', 'Gerente', 'Se eliminó un articulo de tipo:  en inventario. Articulo: Montura, categoria: Accesorio, marca: La Mejor.'),
(65, '2024-04-16', '20:37:47', 'HenfyY', 'Magallanes', 'Gerente', 'Se agregó  un nuevo articulo de tipo: Servicio al inventario. Articulo: Montura, marca: La Mejor, en estado: Usado'),
(66, '2024-04-16', '20:38:45', 'HenfyY', 'Magallanes', 'Gerente', 'Se eliminó un articulo de tipo: Servicio en inventario. Articulo: Montura, categoria: Accesorio, marca: La Mejor.'),
(67, '2024-04-16', '20:47:18', 'HenfyY', 'Magallanes', 'Gerente', 'Se editaron los datos del usuario HenfyY Magallanes'),
(68, '2024-04-16', '20:57:59', '', '', '', 'Se eliminó el usuario:  '),
(69, '2024-04-16', '21:01:39', '', '', '', 'Se eliminó el usuario:  '),
(70, '2024-04-16', '21:03:23', 'HenfyY', 'Magallanes', 'Gerente', 'Se editaron los datos del usuario Miguel de Leon'),
(71, '2024-04-17', '00:53:21', 'HenfyY', 'Magallanes', 'Gerente', 'Se ingresó un nuevo usuario: Montura Magallanes de los Santos, Contable'),
(72, '2024-04-17', '00:56:48', 'HenfyY', 'Magallanes', 'Gerente', 'Se ingresó un nuevo usuario: hhh Magallanes de los Santos, Encargado'),
(73, '2024-04-17', '00:57:44', '', '', 'Encargado', 'Usuario Gokuu HolaAA inicia sesión'),
(74, '2024-04-17', '01:03:06', 'Gokuu', 'HolaAA', 'Encargado', 'Se ingresó un nuevo usuario: Hola TT, Contable'),
(75, '2024-04-17', '01:08:35', 'Gokuu', 'HolaAA', 'Encargado', 'Se ingresó un nuevo usuario: Montura Magallanes de los Santos, Contable'),
(76, '2024-04-17', '01:10:56', 'Gokuu', 'HolaAA', 'Encargado', 'Se ingresó un nuevo usuario: UU UU, Contable'),
(77, '2024-04-17', '01:13:24', 'Gokuu', 'HolaAA', 'Encargado', 'Se editaron los datos del usuario UU UU'),
(78, '2024-04-17', '01:14:24', 'Gokuu', 'HolaAA', 'Encargado', 'Se editaron los datos del usuario UU UU'),
(79, '2024-04-17', '01:17:34', 'Gokuu', 'HolaAA', 'Encargado', 'Se editaron los datos del usuario UU UU'),
(80, '2024-04-17', '01:19:56', 'Gokuu', 'HolaAA', 'Encargado', 'Se editaron los datos del usuario UU UU'),
(81, '2024-04-17', '01:22:12', '', '', '', 'Se eliminó el usuario:  '),
(82, '2024-04-17', '01:31:41', 'Gokuu', 'HolaAA', 'Contable', 'Se eliminó el usuario: TT 402, Cedula: Hola'),
(83, '2024-04-17', '01:33:04', 'Gokuu', 'HolaAA', 'Contable', 'Se eliminó el usuario: UU UU, Cedula: 402'),
(84, '2024-04-17', '14:14:50', '', '', 'Encargado', 'Usuario Gokuu HolaAA inicia sesión'),
(85, '2024-04-17', '20:35:35', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha emitido una nueva receta para el paciente TVvVV NegraAA'),
(86, '2024-04-17', '20:39:56', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha emitido una nueva receta para el paciente Aire De Electricidad, por motivos de: 898'),
(87, '2024-04-17', '21:04:32', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha modificado la receta del paciente  '),
(88, '2024-04-17', '21:06:58', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha modificado la receta del paciente  '),
(89, '2024-04-17', '22:44:35', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha modificado la receta del paciente   Cedula: '),
(90, '2024-04-17', '22:47:16', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha modificado la receta del paciente 402000000 de la Rosa Franco Cedula: '),
(91, '2024-04-17', '22:49:03', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha modificado la receta del paciente Perla de la Rosa Franco Cedula: 402000000'),
(92, '2024-04-17', '22:50:14', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha modificado la receta del paciente Perla de la Rosa Franco, Cedula: 402000000'),
(93, '2024-04-18', '15:26:15', 'Gokuu', 'HolaAA', 'Encargado', 'Se editaron los datos del usuario HenfyYR Magallanes'),
(94, '2024-04-18', '20:04:58', 'Gokuu', 'HolaAA', 'Encargado', 'Se ingresó un nuevo usuario: Montura qq, Secretaria'),
(95, '2024-04-18', '20:05:10', 'Gokuu', 'HolaAA', 'Secretaria', 'Se eliminó el usuario: Montura qq, Cedula: 8888'),
(96, '2024-04-18', '20:55:20', '', '', 'Gerente', 'Usuario HenfyYR Magallanes inicia sesión'),
(97, '2024-04-19', '00:37:04', '', '', 'Gerente', 'Usuario HenfyYR Magallanes inicia sesión'),
(98, '2024-04-19', '00:37:18', 'HenfyYR', 'Magallanes', 'Gerente', 'Se editaron los datos del paciente SiguiRRR MagallanesS'),
(99, '2024-04-19', '00:37:30', 'HenfyYR', 'Magallanes', 'Gerente', 'Se editaron los datos del paciente Sigui WWWW MagallanesSSs'),
(100, '2024-04-19', '01:45:11', '', '', 'Encargado', 'Usuario Gokuu HolaAA inicia sesión'),
(101, '2024-04-19', '02:15:39', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha emitido una nueva receta para el paciente TVvVV NegraAA, por motivos de: oooooo, Lo cual se le manda a facturar: -Gotas para los ojos\r\n-Montura \r\n-Antireglejos\r\n-Adicion\r\n-Todooooo coño \r\n-Que se lleve To!!'),
(102, '2024-04-19', '02:41:22', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha modificado la receta del paciente TVvVV NegraAA, Cedula: 40241666649'),
(103, '2024-04-22', '12:47:59', 'Gokuu', 'HolaAA', 'Encargado', 'Se agregó  un nuevo articulo de tipo: Producto al inventario. Articulo: Montura, marca: La Mejor, en estado: Nuevo'),
(104, '2024-04-22', '13:07:31', 'Gokuu', 'HolaAA', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Servicio en inventario. Articulo: Montura, marca: La Mejor.'),
(105, '2024-04-22', '14:35:36', 'Gokuu', 'HolaAA', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Servicio en inventario. Articulo: Montura, marca: La Mejor.'),
(106, '2024-04-22', '14:37:55', 'Gokuu', 'HolaAA', 'Encargado', 'Se agregó  un nuevo articulo de tipo: Otro al inventario. Articulo: Combo, marca: La Mejor, en estado: Nuevo'),
(107, '2024-04-22', '14:38:16', 'Gokuu', 'HolaAA', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Otro en inventario. Articulo: Combo, marca: La Mejor.'),
(108, '2024-04-23', '01:27:11', 'Gokuu', 'HolaAA', 'Encargado', 'Se ha emitido una nueva receta para el paciente TVvVV NegraAA, cedula: 40241666649, por motivos de: 88, Lo cual se le manda a facturar: Hola\r\nHolaHola\r\nHolaHolaHola\r\nHolaHolaHolaHola\r\nHolaHolaHolaHolaHolaHola\r\nHolaHolaHolaHolaHolaHolaHolaHola\r\nHolaHolaHol'),
(109, '2024-04-23', '13:03:11', '', '', 'Gerente', 'Usuario HenfyYR Magallanes inicia sesión'),
(110, '2024-04-23', '13:59:49', '', '', 'Secretaria', 'Usuario Miguel de Leon inicia sesión'),
(111, '2024-04-23', '17:38:10', '', '', 'Gerente', 'Usuario HenfyYR Magallanes inicia sesión'),
(112, '2024-04-23', '22:59:25', '', '', 'Gerente', 'Usuario HenfyYR Magallanes inicia sesión'),
(113, '2024-04-24', '02:55:10', '', '', 'Gerente', 'Usuario HenfyYR Magallanes inicia sesión'),
(114, '2024-04-24', '12:10:32', 'HenfyYR', 'Magallanes', 'Gerente', 'Se ha emitido una nueva receta para el paciente TVvVV NegraAA, cedula: 40241666649, por motivos de: 777, Lo cual se le manda a facturar: Hola\r\nHolaHola\r\nHolaHolaHolaHola\r\nHolaHolaHolaHolaHolaHola\r\nHolaHolaHolaHolaHolaHolaHolaHola\r\nHolaHolaHolaHolaHolaHola'),
(115, '2024-04-24', '18:02:59', 'HenfyYR', 'Magallanes', 'Gerente', 'Se ha emitido una nueva receta para el paciente MonturaAAAAAA Magallanes de los Santos, cedula: 40241666649, por motivos de: ppp, Lo cual se le manda a facturar: Hola; Dios nunca llega tarde !!'),
(116, '2024-04-25', '03:15:08', '', '', 'Secretaria', 'Usuario Miguel de Leon inicia sesión'),
(117, '2024-04-25', '22:50:41', '', '', 'Gerente', 'Usuario HenfyYR Magallanes inicia sesión'),
(118, '2024-04-26', '19:48:04', '', '', '', 'Usuario donde correo electronico es: H@gmail.com Cedula: 0000000000 y Celular: 0000000000 realizó cambio de contraseña'),
(119, '2024-04-26', '19:48:16', '', '', 'Encargado', 'Usuario Gokuu HolaAA inicia sesión'),
(120, '2024-04-26', '22:41:57', '', '', 'Gerente', 'Usuario HenfyYR Magallanes inicia sesión'),
(121, '2024-04-27', '20:23:20', '', '', 'Gerente', 'Usuario HenfyYR Magallanes inicia sesión'),
(122, '2024-04-29', '02:16:19', '', '', 'Gerente', 'Usuario HenfyYR Magallanes inicia sesión'),
(123, '2024-04-30', '19:45:32', 'HenfyYR', 'Magallanes', 'Gerente', 'Se actualizó un nuevo articulo de tipo: Producto en inventario. Articulo: Montura, marca: La Mejor.'),
(124, '2024-04-30', '20:46:19', 'HenfyYR', 'Magallanes', 'Gerente', 'Se editaron los datos del usuario HenfyYR Magallanes'),
(125, '2024-04-30', '20:46:29', 'HenfyYR', 'Magallanes', 'Gerente', 'Se editaron los datos del usuario HenfyYR Magallanes'),
(126, '2024-04-30', '20:46:49', 'HenfyYR', 'Magallanes', 'Gerente', 'Se editaron los datos del usuario HenfyYR Magallanes'),
(127, '2024-05-02', '01:52:27', 'HenfyYR', 'Magallanes', 'Gerente', 'Se editaron los datos del usuario Miguel de Leon'),
(128, '2024-05-02', '22:16:28', 'HenfyYR', 'Magallanes', 'Gerente', 'Se eliminó paciente: Hency Magallanes'),
(129, '2024-05-02', '22:16:40', 'HenfyYR', 'Magallanes', 'Gerente', 'Se eliminó paciente: SiguiRRR MagallanesS'),
(130, '2024-05-02', '22:46:09', 'HenfyYR', 'Magallanes', 'Gerente', 'Se editaron los datos del paciente Sigui Magallanes'),
(131, '2024-05-02', '23:31:27', 'HenfyYR', 'Magallanes', 'Gerente', 'Se eliminó paciente: [Hola [Santos'),
(132, '2024-05-02', '23:48:06', '', '', 'Encargado', 'Usuario Gokuu HolaAA inicia sesión'),
(133, '2024-05-03', '02:12:26', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(134, '2024-05-03', '03:44:48', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(135, '2024-05-05', '13:44:22', '', '', 'Encargado', 'Usuario Gokuu HolaAA inicia sesión'),
(136, '2024-05-05', '13:44:57', 'Gokuu', 'HolaAA', 'Encargado', 'Se ingresó un nuevo paciente: Sigui Magallanes '),
(137, '2024-05-05', '15:37:35', 'Gokuu', 'HolaAA', 'Encargado', 'Se realiza una venta al paciente Sigui Magallanes con cedula de indentidad 4024100000000, metodo de pago: Efectivo-Tajarjeta-Depósito, producto/servicio: Producto, cantidad: 2, con un total a paga: 4504.00, el cliente realiza pago por una cantidad de 4504'),
(138, '2024-05-05', '15:37:35', 'Gokuu', 'HolaAA', 'Encargado', 'Se realiza una venta al paciente Sigui Magallanes con cedula de indentidad 4024100000000, metodo de pago: Efectivo-Tajarjeta-Depósito, producto/servicio: Otro, cantidad: 3, con un total a paga: 4504.00, el cliente realiza pago por una cantidad de 4504.00 '),
(139, '2024-05-05', '15:37:35', 'Gokuu', 'HolaAA', 'Encargado', 'Se realiza una venta al paciente Sigui Magallanes con cedula de indentidad 4024100000000, metodo de pago: Efectivo-Tajarjeta-Depósito, producto/servicio: uuuuu, cantidad: 4, con un total a paga: 4504.00, el cliente realiza pago por una cantidad de 4504.00'),
(140, '2024-05-06', '15:36:19', 'Gokuu', 'HolaAA', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 8 Producto, pagó en.: Tarjeta, Total: 6864.00, total a devolver.: 136.00'),
(141, '2024-05-06', '15:54:44', 'Gokuu', 'HolaAA', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Otro, pagó en.: Tarjeta, Total: 11124.00, total a devolver.: 876.00'),
(142, '2024-05-06', '15:54:44', 'Gokuu', 'HolaAA', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Producto, pagó en.: Tarjeta, Total: 11124.00, total a devolver.: 876.00'),
(143, '2024-05-06', '15:54:44', 'Gokuu', 'HolaAA', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Tarjeta, Total: 11124.00, total a devolver.: 876.00'),
(144, '2024-05-06', '16:42:45', 'Gokuu', 'HolaAA', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Otro en inventario. Articulo: Montura, marca: La Mejor.'),
(145, '2024-05-06', '16:43:02', 'Gokuu', 'HolaAA', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Producto en inventario. Articulo: Montura, marca: La Mejor.'),
(146, '2024-05-06', '16:45:46', 'Gokuu', 'HolaAA', 'Encargado', 'Se eliminó un articulo de tipo: uuuuu en inventario. Articulo: uuuu, categoria: uuu, marca: uu.'),
(147, '2024-05-06', '16:56:42', 'Gokuu', 'HolaAA', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo-Tarjeta, Total: 1716.00, total a devolver.: 284.00'),
(148, '2024-05-06', '20:32:43', 'Gokuu', 'HolaAA', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Producto en inventario. Articulo: Montura, marca: La Mejor.'),
(149, '2024-05-06', '20:44:52', 'Gokuu', 'HolaAA', 'Encargado', 'Se agregó  un nuevo articulo de tipo: Servicio al inventario. Articulo: G, marca: a, en estado: Nuevo'),
(150, '2024-05-06', '20:45:32', 'Gokuu', 'HolaAA', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Servicio en inventario. Articulo: G, marca: a.'),
(151, '2024-05-07', '00:45:36', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(152, '2024-05-07', '01:04:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Servicio en inventario. Articulo: G, marca: a.'),
(153, '2024-05-07', '01:35:26', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Producto, pagó en.: Depósito, Total: 8550.00, total a devolver.: 450.00'),
(154, '2024-05-07', '01:35:26', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Otro, pagó en.: Depósito, Total: 8550.00, total a devolver.: 450.00'),
(155, '2024-05-07', '01:48:19', 'HenfyYR', 'Magallanes', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Producto en inventario. Articulo: Montura, marca: La Mejor.'),
(156, '2024-05-07', '01:48:48', 'HenfyYR', 'Magallanes', 'Encargado', 'Se actualizó un nuevo articulo de tipo: Producto en inventario. Articulo: Montura, marca: La Mejor.'),
(157, '2024-05-07', '01:53:24', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(158, '2024-05-07', '01:59:52', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(159, '2024-05-07', '02:04:00', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(160, '2024-05-07', '02:17:14', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(161, '2024-05-07', '02:27:16', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(162, '2024-05-07', '02:33:07', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(163, '2024-05-07', '22:25:01', '', '', 'Encargado', 'Usuario Gokuu HolaAA inicia sesión'),
(164, '2024-05-07', '23:06:32', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(165, '2024-05-07', '23:57:46', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Depósito, Total: 3855.00, total a devolver.: 145.00'),
(166, '2024-05-07', '23:57:46', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Otro, pagó en.: Depósito, Total: 3855.00, total a devolver.: 145.00'),
(167, '2024-05-07', '23:57:46', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Servicio, pagó en.: Depósito, Total: 3855.00, total a devolver.: 145.00'),
(168, '2024-05-08', '00:06:24', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(169, '2024-05-08', '00:17:46', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(170, '2024-05-08', '00:36:10', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(171, '2024-05-08', '00:47:53', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(172, '2024-05-08', '01:17:23', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(173, '2024-05-08', '01:23:06', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(174, '2024-05-08', '01:33:34', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(175, '2024-05-08', '01:52:41', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(176, '2024-05-08', '01:59:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Producto, pagó en.: Depósito, Total: 758.00, total a devolver.: 42.00'),
(177, '2024-05-08', '01:59:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Depósito, Total: 758.00, total a devolver.: 42.00'),
(178, '2024-05-08', '02:13:45', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Depósito, Total: 3855.00, total a devolver.: 145.00'),
(179, '2024-05-08', '02:13:45', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Otro, pagó en.: Depósito, Total: 3855.00, total a devolver.: 145.00'),
(180, '2024-05-08', '02:13:45', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Servicio, pagó en.: Depósito, Total: 3855.00, total a devolver.: 145.00'),
(181, '2024-05-08', '02:15:08', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Depósito, Total: 11565.00, total a devolver.: 435.00'),
(182, '2024-05-08', '02:15:08', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Otro, pagó en.: Depósito, Total: 11565.00, total a devolver.: 435.00'),
(183, '2024-05-08', '02:15:08', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Servicio, pagó en.: Depósito, Total: 11565.00, total a devolver.: 435.00'),
(184, '2024-05-08', '02:30:28', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Efectivo-Depósito, Total: 5248.00, total a devolver.: 52.00'),
(185, '2024-05-08', '02:30:28', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Servicio, pagó en.: Efectivo-Depósito, Total: 5248.00, total a devolver.: 52.00'),
(186, '2024-05-08', '02:37:48', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(187, '2024-05-08', '02:40:35', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Efectivo, Total: 758.00, total a devolver.: 42.00'),
(188, '2024-05-08', '02:49:27', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(189, '2024-05-08', '02:51:24', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Depósito, Total: 6534.00, total a devolver.: 466.00'),
(190, '2024-05-08', '02:51:24', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Otro, pagó en.: Depósito, Total: 6534.00, total a devolver.: 466.00'),
(191, '2024-05-08', '02:52:41', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Efectivo, Total: 758.00, total a devolver.: 42.00'),
(192, '2024-05-08', '02:57:47', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Depósito, Total: 27698.00, total a devolver.: 2302.00'),
(193, '2024-05-08', '02:57:47', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 12 Servicio, pagó en.: Depósito, Total: 27698.00, total a devolver.: 2302.00'),
(194, '2024-05-08', '03:03:19', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Efectivo-Tarjeta, Total: 758.00, total a devolver.: 242.00'),
(195, '2024-05-08', '03:04:42', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Depósito, Total: 3003.00, total a devolver.: 997.00'),
(196, '2024-05-08', '03:04:42', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Servicio, pagó en.: Depósito, Total: 3003.00, total a devolver.: 997.00'),
(197, '2024-05-08', '03:06:04', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 6 Producto, pagó en.: Efectivo, Total: 15313.00, total a devolver.: 687.00'),
(198, '2024-05-08', '03:06:04', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 10 Otro, pagó en.: Efectivo, Total: 15313.00, total a devolver.: 687.00'),
(199, '2024-05-08', '03:06:04', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Servicio, pagó en.: Efectivo, Total: 15313.00, total a devolver.: 687.00'),
(200, '2024-05-08', '03:06:51', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Depósito, Total: 5018.00, total a devolver.: 982.00'),
(201, '2024-05-08', '03:06:51', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Otro, pagó en.: Depósito, Total: 5018.00, total a devolver.: 982.00'),
(202, '2024-05-08', '03:07:39', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Depósito, Total: 6764.00, total a devolver.: 236.00'),
(203, '2024-05-08', '03:07:39', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Servicio, pagó en.: Depósito, Total: 6764.00, total a devolver.: 236.00'),
(204, '2024-05-08', '03:11:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 10266.00, total a devolver.: 734.00'),
(205, '2024-05-08', '03:11:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Otro, pagó en.: Efectivo, Total: 10266.00, total a devolver.: 734.00'),
(206, '2024-05-08', '03:11:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Servicio, pagó en.: Efectivo, Total: 10266.00, total a devolver.: 734.00'),
(207, '2024-05-08', '03:22:05', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Depósito, Total: 1516.00, total a devolver.: 484.00'),
(208, '2024-05-08', '03:23:32', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Depósito, Total: 1516.00, total a devolver.: 484.00'),
(209, '2024-05-08', '03:26:42', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a TVvVV NegraAA (Cedula.: 40241666649 ) por 5 Producto, pagó en.: Efectivo, Total: 15015.00, total a devolver.: 985.00'),
(210, '2024-05-08', '03:26:42', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a TVvVV NegraAA (Cedula.: 40241666649 ) por 5 Servicio, pagó en.: Efectivo, Total: 15015.00, total a devolver.: 985.00'),
(211, '2024-05-08', '03:30:53', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 Producto, pagó en.: Efectivo, Total: 15015.00, total a devolver.: 985.00'),
(212, '2024-05-08', '03:30:53', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 Servicio, pagó en.: Efectivo, Total: 15015.00, total a devolver.: 985.00'),
(213, '2024-05-08', '19:42:10', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Depósito, Total: 7710.00, total a devolver.: 290.00'),
(214, '2024-05-08', '19:42:10', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Otro, pagó en.: Depósito, Total: 7710.00, total a devolver.: 290.00'),
(215, '2024-05-08', '19:42:10', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Servicio, pagó en.: Depósito, Total: 7710.00, total a devolver.: 290.00'),
(216, '2024-05-08', '19:47:44', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 3 Producto, pagó en.: Efectivo-Tarjeta, Total: 11565.00, total a devolver.: 435.00'),
(217, '2024-05-08', '19:47:44', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 3 Otro, pagó en.: Efectivo-Tarjeta, Total: 11565.00, total a devolver.: 435.00'),
(218, '2024-05-08', '19:47:44', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 3 Servicio, pagó en.: Efectivo-Tarjeta, Total: 11565.00, total a devolver.: 435.00'),
(219, '2024-05-08', '19:48:43', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Efectivo-Tarjeta, Total: 2274.00, total a devolver.: 8578.00'),
(220, '2024-05-08', '19:49:31', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 484.00'),
(221, '2024-05-08', '19:50:36', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 484.00'),
(222, '2024-05-08', '20:00:25', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Depósito, Total: 5776.00, total a devolver.: 2224.00'),
(223, '2024-05-08', '20:00:25', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Otro, pagó en.: Depósito, Total: 5776.00, total a devolver.: 2224.00'),
(224, '2024-05-08', '20:01:09', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Depósito, Total: 758.00, total a devolver.: 42.00'),
(225, '2024-05-08', '20:03:06', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Efectivo, Total: 758.00, total a devolver.: 42.00'),
(226, '2024-05-08', '20:03:46', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Tarjeta, Total: 758.00, total a devolver.: 7765.00'),
(227, '2024-05-08', '20:05:46', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Depósito, Total: 2274.00, total a devolver.: 726.00'),
(228, '2024-05-08', '20:06:53', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Otro, pagó en.: Tarjeta, Total: 852.00, total a devolver.: 148.00'),
(229, '2024-05-08', '20:07:55', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Otro, pagó en.: Efectivo, Total: 7668.00, total a devolver.: 332.00'),
(230, '2024-05-08', '20:07:55', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 9 Otro, pagó en.: Efectivo, Total: 7668.00, total a devolver.: 332.00'),
(231, '2024-05-08', '20:08:54', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 7 Otro, pagó en.: Depósito, Total: 5964.00, total a devolver.: 36.00'),
(232, '2024-05-08', '20:12:54', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Otro, pagó en.: Depósito, Total: 852.00, total a devolver.: 48.00'),
(233, '2024-05-08', '20:13:59', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Otro, pagó en.: Depósito, Total: 3408.00, total a devolver.: 592.00'),
(234, '2024-05-08', '20:14:52', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(235, '2024-05-08', '20:17:57', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Otro, pagó en.: Efectivo, Total: 4260.00, total a devolver.: 740.00'),
(236, '2024-05-08', '20:18:38', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Otro, pagó en.: Efectivo, Total: 852.00, total a devolver.: 48.00'),
(237, '2024-05-08', '20:19:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Otro, pagó en.: Depósito, Total: 12388.00, total a devolver.: 612.00'),
(238, '2024-05-08', '20:19:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Servicio, pagó en.: Depósito, Total: 12388.00, total a devolver.: 612.00'),
(239, '2024-05-08', '20:20:24', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Otro, pagó en.: Efectivo, Total: 14322.00, total a devolver.: 678.00'),
(240, '2024-05-08', '20:20:24', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 6 Servicio, pagó en.: Efectivo, Total: 14322.00, total a devolver.: 678.00'),
(241, '2024-05-08', '20:21:27', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Otro, pagó en.: Depósito, Total: 9832.00, total a devolver.: 168.00'),
(242, '2024-05-08', '20:21:27', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Servicio, pagó en.: Depósito, Total: 9832.00, total a devolver.: 168.00'),
(243, '2024-05-08', '20:30:51', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Otro, pagó en.: Efectivo, Total: 852.00, total a devolver.: 48.00'),
(244, '2024-05-08', '20:31:26', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Otro, pagó en.: Depósito, Total: 5342.00, total a devolver.: 658.00'),
(245, '2024-05-08', '20:31:26', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Servicio, pagó en.: Depósito, Total: 5342.00, total a devolver.: 658.00'),
(246, '2024-05-08', '20:32:12', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Servicio, pagó en.: Tarjeta, Total: 8980.00, total a devolver.: 20.00'),
(247, '2024-05-08', '20:35:08', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a MonturaAAAAAA kk (Cedula.: 40241666649 ) por 5 Servicio, pagó en.: Depósito, Total: 11225.00, total a devolver.: 775.00'),
(248, '2024-05-08', '20:48:25', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Servicio, pagó en.: Efectivo, Total: 11225.00, total a devolver.: 775.00'),
(249, '2024-05-08', '20:51:29', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Servicio, pagó en.: Efectivo, Total: 11225.00, total a devolver.: 775.00'),
(250, '2024-05-08', '20:52:42', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Servicio, pagó en.: Depósito, Total: 11225.00, total a devolver.: 775.00'),
(251, '2024-05-08', '20:54:11', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Servicio, pagó en.: Depósito, Total: 11225.00, total a devolver.: 775.00'),
(252, '2024-05-08', '20:55:25', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Otro, pagó en.: Depósito, Total: 12077.00, total a devolver.: 923.00'),
(253, '2024-05-08', '20:55:25', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Servicio, pagó en.: Depósito, Total: 12077.00, total a devolver.: 923.00'),
(254, '2024-05-08', '20:56:28', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Servicio, pagó en.: Efectivo, Total: 11225.00, total a devolver.: 775.00'),
(255, '2024-05-08', '20:57:20', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 30 Servicio, pagó en.: Efectivo, Total: 15715.00, total a devolver.: 285.00'),
(256, '2024-05-08', '20:57:20', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 7 Servicio, pagó en.: Efectivo, Total: 15715.00, total a devolver.: 285.00'),
(257, '2024-05-08', '20:59:38', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Servicio, pagó en.: Efectivo, Total: 11225.00, total a devolver.: 775.00'),
(258, '2024-05-08', '21:00:47', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 1 Producto, pagó en.: Depósito, Total: 10496.00, total a devolver.: 504.00'),
(259, '2024-05-08', '21:00:47', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 2 Producto, pagó en.: Depósito, Total: 10496.00, total a devolver.: 504.00'),
(260, '2024-05-08', '21:00:47', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 Servicio, pagó en.: Depósito, Total: 10496.00, total a devolver.: 504.00'),
(261, '2024-05-08', '21:00:47', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 4 Servicio, pagó en.: Depósito, Total: 10496.00, total a devolver.: 504.00'),
(262, '2024-05-08', '21:17:42', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(263, '2024-05-08', '21:38:23', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 6064.00, total a devolver.: 936.00'),
(264, '2024-05-08', '21:38:23', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 8 Producto, pagó en.: Efectivo, Total: 6064.00, total a devolver.: 936.00'),
(265, '2024-05-08', '21:40:50', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 8 Producto, pagó en.: Efectivo, Total: 2274.00, total a devolver.: 726.00'),
(266, '2024-05-08', '21:40:50', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Efectivo, Total: 2274.00, total a devolver.: 726.00'),
(267, '2024-05-08', '22:11:12', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Depósito, Total: 5306.00, total a devolver.: 694.00'),
(268, '2024-05-08', '22:11:12', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 7 Producto, pagó en.: Depósito, Total: 5306.00, total a devolver.: 694.00'),
(269, '2024-05-08', '22:22:28', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 8 Producto, pagó en.: Efectivo, Total: 2274.00, total a devolver.: 726.00'),
(270, '2024-05-08', '22:22:28', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Efectivo, Total: 2274.00, total a devolver.: 726.00'),
(271, '2024-05-08', '22:23:37', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(272, '2024-05-08', '22:24:21', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 7 Producto, pagó en.: Tarjeta, Total: 1516.00, total a devolver.: 484.00'),
(273, '2024-05-08', '22:24:21', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Tarjeta, Total: 1516.00, total a devolver.: 484.00'),
(274, '2024-05-08', '22:30:41', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Depósito, Total: 6064.00, total a devolver.: 936.00'),
(275, '2024-05-08', '22:30:41', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 8 Producto, pagó en.: Depósito, Total: 6064.00, total a devolver.: 936.00'),
(276, '2024-05-08', '22:33:40', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 484.00'),
(277, '2024-05-08', '22:46:14', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(278, '2024-05-08', '22:48:39', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Producto, pagó en.: Efectivo, Total: 758.00, total a devolver.: 101.00'),
(279, '2024-05-08', '22:48:39', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Efectivo, Total: 758.00, total a devolver.: 101.00'),
(280, '2024-05-08', '22:54:05', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 9 Producto, pagó en.: Efectivo, Total: 3032.00, total a devolver.: 968.00'),
(281, '2024-05-08', '22:54:05', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Producto, pagó en.: Efectivo, Total: 3032.00, total a devolver.: 968.00'),
(282, '2024-05-08', '23:02:37', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 84.00'),
(283, '2024-05-08', '23:02:37', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 84.00'),
(284, '2024-05-08', '23:03:10', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(285, '2024-05-08', '23:03:40', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 84.00'),
(286, '2024-05-08', '23:03:40', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 84.00'),
(287, '2024-05-08', '23:11:15', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Tarjeta, Total: 758.00, total a devolver.: 42.00'),
(288, '2024-05-08', '23:11:15', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Tarjeta, Total: 758.00, total a devolver.: 42.00'),
(289, '2024-05-09', '00:33:55', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 7 Producto, pagó en.: Depósito, Total: 25511.00, total a devolver.: 4489.00'),
(290, '2024-05-09', '00:33:55', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 9 Servicio, pagó en.: Depósito, Total: 25511.00, total a devolver.: 4489.00'),
(291, '2024-05-09', '01:05:04', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Producto, pagó en.: Depósito, Total: 758.00, total a devolver.: 101.00'),
(292, '2024-05-09', '01:05:04', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Depósito, Total: 758.00, total a devolver.: 101.00'),
(293, '2024-05-09', '01:20:41', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 484.00'),
(294, '2024-05-09', '01:20:41', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 484.00'),
(295, '2024-05-09', '01:21:26', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(296, '2024-05-09', '01:22:01', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 8 Producto, pagó en.: Efectivo, Total: 2274.00, total a devolver.: 726.00'),
(297, '2024-05-09', '01:22:01', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Efectivo, Total: 2274.00, total a devolver.: 726.00'),
(298, '2024-05-09', '01:38:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 7 Producto, pagó en.: Tarjeta, Total: 5306.00, total a devolver.: 694.00'),
(299, '2024-05-09', '01:41:32', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Producto, pagó en.: Efectivo, Total: 758.00, total a devolver.: 242.00'),
(300, '2024-05-09', '01:41:32', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Producto, pagó en.: Efectivo, Total: 758.00, total a devolver.: 242.00'),
(301, '2024-05-09', '01:41:57', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(302, '2024-05-09', '01:42:32', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 484.00'),
(303, '2024-05-09', '01:42:32', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 484.00'),
(304, '2024-05-09', '01:44:07', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 8 Producto, pagó en.: Tarjeta, Total: 2274.00, total a devolver.: 1726.00'),
(305, '2024-05-09', '01:44:07', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Tarjeta, Total: 2274.00, total a devolver.: 1726.00'),
(306, '2024-05-09', '01:44:49', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(307, '2024-05-09', '01:45:25', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 7 Producto, pagó en.: Depósito, Total: 1516.00, total a devolver.: 7039.00'),
(308, '2024-05-09', '01:45:25', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Depósito, Total: 1516.00, total a devolver.: 7039.00'),
(309, '2024-05-09', '01:53:16', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 8 Producto, pagó en.: Efectivo, Total: 2274.00, total a devolver.: 726.00'),
(310, '2024-05-09', '01:53:16', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Producto, pagó en.: Efectivo, Total: 2274.00, total a devolver.: 726.00'),
(311, '2024-05-09', '01:54:50', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(312, '2024-05-09', '01:55:24', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 3790.00, total a devolver.: 4730.00'),
(313, '2024-05-09', '01:55:24', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Producto, pagó en.: Efectivo, Total: 3790.00, total a devolver.: 4730.00'),
(314, '2024-05-09', '01:57:26', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 1 Servicio, pagó en.: Efectivo, Total: 11225.00, total a devolver.: 775.00'),
(315, '2024-05-09', '01:57:26', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 Servicio, pagó en.: Efectivo, Total: 11225.00, total a devolver.: 775.00');
INSERT INTO `actividadesrealizadas` (`IdActividad`, `Fecha`, `Hora`, `NombreUsuario`, `ApellidoUsuario`, `CargoDeUsuario`, `Accion`) VALUES
(316, '2024-05-09', '02:02:40', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Servicio, pagó en.: Depósito, Total: 8980.00, total a devolver.: 20.00'),
(317, '2024-05-09', '02:02:40', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 4 Servicio, pagó en.: Depósito, Total: 8980.00, total a devolver.: 20.00'),
(318, '2024-05-09', '02:08:34', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 3 Servicio, pagó en.: Efectivo, Total: 17960.00, total a devolver.: 2040.00'),
(319, '2024-05-09', '02:08:34', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 8 Servicio, pagó en.: Efectivo, Total: 17960.00, total a devolver.: 2040.00'),
(320, '2024-05-09', '02:09:49', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 7 Servicio, pagó en.: Depósito, Total: 15715.00, total a devolver.: 4285.00'),
(321, '2024-05-09', '13:34:05', 'HenfyYR', 'Magallanes', 'Encargado', 'Se eliminó paciente: Sigui Magallanes'),
(322, '2024-05-09', '13:35:39', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 3 Producto, pagó en.: Tarjeta, Total: 2274.00, total a devolver.: 726.00'),
(323, '2024-05-09', '13:37:11', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 2 Producto, pagó en.: Depósito, Total: 5306.00, total a devolver.: 694.00'),
(324, '2024-05-09', '13:37:11', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 7 Producto, pagó en.: Depósito, Total: 5306.00, total a devolver.: 694.00'),
(325, '2024-05-09', '14:01:35', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 3 Producto, pagó en.: Efectivo, Total: 2274.00, total a devolver.: 726.00'),
(326, '2024-05-09', '14:02:28', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 1 Producto, pagó en.: Efectivo, Total: 758.00, total a devolver.: 42.00'),
(327, '2024-05-09', '14:11:55', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Montura kk (Cedula.: 40241666649 ) por 4 Producto, pagó en.: Efectivo, Total: 3942.00, total a devolver.: 58.00'),
(328, '2024-05-09', '14:11:55', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Montura kk (Cedula.: 40241666649 ) por 1 Otro, pagó en.: Efectivo, Total: 3942.00, total a devolver.: 58.00'),
(329, '2024-05-09', '14:11:55', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Montura kk (Cedula.: 40241666649 ) por 1 uuuuu, pagó en.: Efectivo, Total: 3942.00, total a devolver.: 58.00'),
(330, '2024-05-10', '16:20:29', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 3 Producto, pagó en.: Efectivo, Total: 2274.00, total a devolver.: 726.00'),
(331, '2024-05-10', '16:22:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 2 Producto, pagó en.: Tarjeta, Total: 5446.00, total a devolver.: 554.00'),
(332, '2024-05-10', '16:22:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 4 Otro, pagó en.: Tarjeta, Total: 5446.00, total a devolver.: 554.00'),
(333, '2024-05-10', '16:22:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 9 uuuuu, pagó en.: Tarjeta, Total: 5446.00, total a devolver.: 554.00'),
(334, '2024-05-10', '16:24:45', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Servicio, pagó en.: Efectivo, Total: 19855.00, total a devolver.: 145.00'),
(335, '2024-05-10', '16:24:45', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Efectivo, Total: 19855.00, total a devolver.: 145.00'),
(336, '2024-05-10', '16:24:45', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Otro, pagó en.: Efectivo, Total: 19855.00, total a devolver.: 145.00'),
(337, '2024-05-10', '16:24:45', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 10 uuuuu, pagó en.: Efectivo, Total: 19855.00, total a devolver.: 145.00'),
(338, '2024-05-10', '16:34:11', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 10 Producto, pagó en.: Depósito, Total: 27905.00, total a devolver.: 2095.00'),
(339, '2024-05-10', '16:34:11', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 10 Otro, pagó en.: Depósito, Total: 27905.00, total a devolver.: 2095.00'),
(340, '2024-05-10', '16:34:11', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 10 uuuuu, pagó en.: Depósito, Total: 27905.00, total a devolver.: 2095.00'),
(341, '2024-05-10', '16:34:11', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Servicio, pagó en.: Depósito, Total: 27905.00, total a devolver.: 2095.00'),
(342, '2024-05-10', '16:56:00', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a TVvVV NegraAA (Cedula.: 40241666649 ) por 10 Producto, pagó en.: Depósito, Total: 39130.00, total a devolver.: 870.00'),
(343, '2024-05-10', '16:56:00', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a TVvVV NegraAA (Cedula.: 40241666649 ) por 10 Otro, pagó en.: Depósito, Total: 39130.00, total a devolver.: 870.00'),
(344, '2024-05-10', '16:56:00', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a TVvVV NegraAA (Cedula.: 40241666649 ) por 10 uuuuu, pagó en.: Depósito, Total: 39130.00, total a devolver.: 870.00'),
(345, '2024-05-10', '16:56:00', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a TVvVV NegraAA (Cedula.: 40241666649 ) por 10 Servicio, pagó en.: Depósito, Total: 39130.00, total a devolver.: 870.00'),
(346, '2024-05-10', '18:34:16', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Servicio, pagó en.: Depósito, Total: 19565.00, total a devolver.: 435.00'),
(347, '2024-05-10', '18:34:16', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Depósito, Total: 19565.00, total a devolver.: 435.00'),
(348, '2024-05-10', '18:34:16', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Otro, pagó en.: Depósito, Total: 19565.00, total a devolver.: 435.00'),
(349, '2024-05-10', '18:34:16', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 uuuuu, pagó en.: Depósito, Total: 19565.00, total a devolver.: 435.00'),
(350, '2024-05-10', '18:57:00', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Tarjeta, Total: 19565.00, total a devolver.: 435.00'),
(351, '2024-05-10', '18:57:00', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Otro, pagó en.: Tarjeta, Total: 19565.00, total a devolver.: 435.00'),
(352, '2024-05-10', '18:57:00', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 uuuuu, pagó en.: Tarjeta, Total: 19565.00, total a devolver.: 435.00'),
(353, '2024-05-10', '18:57:00', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Servicio, pagó en.: Tarjeta, Total: 19565.00, total a devolver.: 435.00'),
(354, '2024-05-10', '19:01:20', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Servicio, pagó en.: Depósito, Total: 24055.00, total a devolver.: 945.00'),
(355, '2024-05-10', '19:01:20', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Depósito, Total: 24055.00, total a devolver.: 945.00'),
(356, '2024-05-10', '19:01:20', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Otro, pagó en.: Depósito, Total: 24055.00, total a devolver.: 945.00'),
(357, '2024-05-10', '19:01:20', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 uuuuu, pagó en.: Depósito, Total: 24055.00, total a devolver.: 945.00'),
(358, '2024-05-10', '19:01:20', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 2 Servicio, pagó en.: Depósito, Total: 24055.00, total a devolver.: 945.00'),
(359, '2024-05-10', '19:44:20', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Efectivo, Total: 12830.00, total a devolver.: 2170.00'),
(360, '2024-05-10', '19:44:21', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Otro, pagó en.: Efectivo, Total: 12830.00, total a devolver.: 2170.00'),
(361, '2024-05-10', '19:44:21', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 uuuuu, pagó en.: Efectivo, Total: 12830.00, total a devolver.: 2170.00'),
(362, '2024-05-10', '19:44:21', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 2 Servicio, pagó en.: Efectivo, Total: 12830.00, total a devolver.: 2170.00'),
(363, '2024-05-11', '01:13:26', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Depósito, Total: 3790.00, total a devolver.: 210.00'),
(364, '2024-05-11', '01:22:18', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Depósito, Total: 3790.00, total a devolver.: 210.00'),
(365, '2024-05-11', '01:23:02', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(366, '2024-05-11', '01:23:22', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Efectivo, Total: 3790.00, total a devolver.: 210.00'),
(367, '2024-05-11', '01:24:07', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 45465 ) por 5 Producto, pagó en.: Depósito, Total: 3790.00, total a devolver.: 81446.00'),
(368, '2024-05-11', '01:26:05', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Efectivo, Total: 3790.00, total a devolver.: 210.00'),
(369, '2024-05-11', '01:27:46', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 45465 ) por 5 Producto, pagó en.: Efectivo, Total: 3790.00, total a devolver.: 210.00'),
(370, '2024-05-11', '01:32:19', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Otro, pagó en.: Efectivo, Total: 4260.00, total a devolver.: 740.00'),
(371, '2024-05-11', '01:34:13', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 Otro, pagó en.: Tarjeta, Total: 4260.00, total a devolver.: 740.00'),
(372, '2024-05-11', '02:03:08', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 45465 ) por 5 Otro, pagó en.: Tarjeta, Total: 4260.00, total a devolver.: 740.00'),
(373, '2024-05-11', '02:06:29', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Otro, pagó en.: Efectivo, Total: 4260.00, total a devolver.: 740.00'),
(374, '2024-05-11', '02:07:38', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 Otro, pagó en.: Depósito, Total: 4260.00, total a devolver.: 740.00'),
(375, '2024-05-11', '02:12:24', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 45465 ) por 5 Otro, pagó en.: Depósito, Total: 4260.00, total a devolver.: 740.00'),
(376, '2024-05-11', '02:15:16', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 Otro, pagó en.: Depósito, Total: 4260.00, total a devolver.: 740.00'),
(377, '2024-05-11', '02:16:04', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Otro, pagó en.: Depósito, Total: 4260.00, total a devolver.: 740.00'),
(378, '2024-05-11', '02:24:53', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 Otro, pagó en.: Depósito, Total: 4260.00, total a devolver.: 740.00'),
(379, '2024-05-11', '02:39:56', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 45465 ) por 5 Otro, pagó en.: Tarjeta, Total: 4260.00, total a devolver.: 740.00'),
(380, '2024-05-11', '02:43:48', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 uuuuu, pagó en.: Efectivo, Total: 290.00, total a devolver.: 10.00'),
(381, '2024-05-11', '02:52:57', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 uuuuu, pagó en.: Efectivo, Total: 290.00, total a devolver.: 10.00'),
(382, '2024-05-11', '02:54:19', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 5 uuuuu, pagó en.: Tarjeta, Total: 290.00, total a devolver.: 210.00'),
(383, '2024-05-11', '03:00:33', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 uuuuu, pagó en.: Depósito, Total: 290.00, total a devolver.: 10.00'),
(384, '2024-05-11', '03:06:52', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 uuuuu, pagó en.: Tarjeta, Total: 290.00, total a devolver.: 562.00'),
(385, '2024-05-11', '03:10:47', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 uuuuu, pagó en.: Efectivo, Total: 290.00, total a devolver.: 10.00'),
(386, '2024-05-11', '03:28:50', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 45465 ) por 5 uuuuu, pagó en.: Efectivo, Total: 290.00, total a devolver.: 510.00'),
(387, '2024-05-11', '03:31:14', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 uuuuu, pagó en.: Efectivo, Total: 290.00, total a devolver.: 10.00'),
(388, '2024-05-11', '03:39:58', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 1 Servicio, pagó en.: Efectivo, Total: 2245.00, total a devolver.: 755.00'),
(389, '2024-05-11', '03:42:22', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 1 Producto, pagó en.: Depósito, Total: 5250.00, total a devolver.: 750.00'),
(390, '2024-05-11', '03:42:22', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Otro, pagó en.: Depósito, Total: 5250.00, total a devolver.: 750.00'),
(391, '2024-05-11', '03:42:22', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 4 uuuuu, pagó en.: Depósito, Total: 5250.00, total a devolver.: 750.00'),
(392, '2024-05-11', '03:44:53', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 45465 ) por 4 Producto, pagó en.: Tarjeta, Total: 7524.00, total a devolver.: 1476.00'),
(393, '2024-05-11', '03:44:53', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 45465 ) por 5 Otro, pagó en.: Tarjeta, Total: 7524.00, total a devolver.: 1476.00'),
(394, '2024-05-11', '03:44:53', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 45465 ) por 4 uuuuu, pagó en.: Tarjeta, Total: 7524.00, total a devolver.: 1476.00'),
(395, '2024-05-11', '03:46:54', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 Producto, pagó en.: Depósito, Total: 12426.00, total a devolver.: 574.00'),
(396, '2024-05-11', '03:46:54', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 10 Otro, pagó en.: Depósito, Total: 12426.00, total a devolver.: 574.00'),
(397, '2024-05-11', '03:46:54', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 2 uuuuu, pagó en.: Depósito, Total: 12426.00, total a devolver.: 574.00'),
(398, '2024-05-11', '03:53:40', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 10 uuuuu, pagó en.: Efectivo, Total: 16680.00, total a devolver.: 320.00'),
(399, '2024-05-11', '03:53:40', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 10 Otro, pagó en.: Efectivo, Total: 16680.00, total a devolver.: 320.00'),
(400, '2024-05-11', '03:53:40', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 10 Producto, pagó en.: Efectivo, Total: 16680.00, total a devolver.: 320.00'),
(401, '2024-05-11', '14:09:37', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 1 Producto, pagó en.: Depósito, Total: 5250.00, total a devolver.: 750.00'),
(402, '2024-05-11', '14:09:37', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Otro, pagó en.: Depósito, Total: 5250.00, total a devolver.: 750.00'),
(403, '2024-05-11', '14:09:37', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 4 uuuuu, pagó en.: Depósito, Total: 5250.00, total a devolver.: 750.00'),
(404, '2024-05-11', '17:22:29', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 9 Producto, pagó en.: Efectivo, Total: 11430.00, total a devolver.: 570.00'),
(405, '2024-05-11', '17:22:29', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 5 Otro, pagó en.: Efectivo, Total: 11430.00, total a devolver.: 570.00'),
(406, '2024-05-11', '17:22:29', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 6 uuuuu, pagó en.: Efectivo, Total: 11430.00, total a devolver.: 570.00'),
(407, '2024-05-11', '17:27:08', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 4 Producto, pagó en.: Efectivo, Total: 3032.00, total a devolver.: 968.00'),
(408, '2024-05-11', '17:27:08', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 4 Producto, pagó en.: Efectivo, Total: 3032.00, total a devolver.: 968.00'),
(409, '2024-05-11', '17:29:34', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 7040.00'),
(410, '2024-05-11', '17:29:34', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 7040.00'),
(411, '2024-05-11', '17:31:08', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 8 Producto, pagó en.: Efectivo, Total: 6064.00, total a devolver.: 936.00'),
(412, '2024-05-11', '17:31:08', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui WWWW MagallanesSSs (Cedula.: 402419 ) por 8 Producto, pagó en.: Efectivo, Total: 6064.00, total a devolver.: 936.00'),
(413, '2024-05-11', '17:35:37', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 484.00'),
(414, '2024-05-11', '17:35:37', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 4024100000000 ) por 2 Producto, pagó en.: Efectivo, Total: 1516.00, total a devolver.: 484.00'),
(415, '2024-05-11', '17:39:21', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 8 Producto, pagó en.: Efectivo, Total: 6064.00, total a devolver.: 936.00'),
(416, '2024-05-11', '17:47:07', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Efectivo, Total: 3790.00, total a devolver.: 210.00'),
(417, '2024-05-11', '17:58:53', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a MonturaAAAAAA Magallanes de los Santos (Cedula.: 40241666649 ) por 5 Producto, pagó en.: Depósito, Total: 8340.00, total a devolver.: 660.00'),
(418, '2024-05-11', '17:58:53', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a MonturaAAAAAA Magallanes de los Santos (Cedula.: 40241666649 ) por 5 Otro, pagó en.: Depósito, Total: 8340.00, total a devolver.: 660.00'),
(419, '2024-05-11', '17:58:53', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a MonturaAAAAAA Magallanes de los Santos (Cedula.: 40241666649 ) por 5 uuuuu, pagó en.: Depósito, Total: 8340.00, total a devolver.: 660.00'),
(420, '2024-05-11', '18:14:03', 'HenfyYR', 'Magallanes', 'Encargado', 'Venta a Sigui Magallanes (Cedula.: 0000000000 ) por 5 Producto, pagó en.: Depósito, Total: 3790.00, total a devolver.: 210.00'),
(421, '2024-05-12', '10:50:38', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(422, '2024-05-12', '11:22:21', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(423, '2024-05-12', '11:33:27', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(424, '2024-05-13', '00:16:01', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(425, '2024-05-14', '20:14:18', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(426, '2024-05-14', '21:28:54', '', '', 'Encargado', 'Usuario HenfyYR Magallanes inicia sesión'),
(427, '2024-05-16', '00:03:55', '', '', 'Secretaria', 'Usuario Miguel de Leon inicia sesión'),
(428, '2024-05-17', '14:04:10', 'Miguel', 'de Leon', 'Secretaria', 'Se ha emitido una nueva receta para el paciente Vidalia De la Rosa, cedula: 40241666649, por motivos de: N/A, Lo cual se le manda a facturar: N/A'),
(429, '2024-05-17', '15:17:50', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Juan Martínez'),
(430, '2024-05-17', '15:18:24', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Luis Rodríguez'),
(431, '2024-05-17', '15:19:08', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Sergio González'),
(432, '2024-05-17', '15:19:28', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Daniel Ramírez'),
(433, '2024-05-17', '15:19:39', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Diego Hernández'),
(434, '2024-05-17', '15:19:57', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Carlos Sánchez'),
(435, '2024-05-17', '15:20:24', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Javier Pérez'),
(436, '2024-05-17', '15:20:44', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Andrés López'),
(437, '2024-05-17', '15:20:57', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente María Magallanes'),
(438, '2024-05-17', '15:21:09', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Gabriel Fernández'),
(439, '2024-05-17', '15:21:26', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Diego Hernández'),
(440, '2024-05-17', '15:22:57', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Sergio González'),
(441, '2024-05-17', '15:23:19', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Javier Pérez'),
(442, '2024-05-17', '15:24:10', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Sigui García'),
(443, '2024-05-17', '15:25:17', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Juan Martínez'),
(444, '2024-05-17', '15:25:43', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Luis Rodríguez'),
(445, '2024-05-17', '15:29:01', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Diego Hernández'),
(446, '2024-05-17', '15:30:13', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Gabriel Fernández'),
(447, '2024-05-17', '15:30:52', 'Miguel', 'de Leon', 'Secretaria', 'Se editaron los datos del paciente Gabriel Fernández'),
(448, '2024-05-17', '15:35:22', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(449, '2024-05-17', '15:40:07', 'Miguel', 'de Leon', 'Encargado', 'Se editaron los datos del usuario Manuel de Jesus'),
(450, '2024-05-17', '15:40:26', 'Miguel', 'de Leon', 'Encargado', 'Se editaron los datos del usuario Manuel de Jesus'),
(451, '2024-05-17', '15:41:23', 'Miguel', 'de Leon', 'Encargado', 'Se editaron los datos del usuario Juana de la Rosa'),
(452, '2024-05-17', '16:10:20', 'Miguel', 'de Leon', 'Encargado', 'Se editaron los datos del usuario Ramona 40241666649'),
(453, '2024-05-17', '16:12:29', 'Miguel', 'de Leon', 'Encargado', 'Se editaron los datos del usuario Manuel Poline'),
(454, '2024-05-17', '16:13:22', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó el usuario: Magallanes de los Santos 40241666649, Cedula: hhh'),
(455, '2024-05-17', '16:15:03', 'Miguel', 'de Leon', 'Encargado', 'Se editaron los datos del usuario Ramona de los Santos'),
(456, '2024-05-19', '07:52:08', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(457, '2024-05-19', '08:44:22', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(458, '2024-05-19', '11:37:57', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(459, '2024-05-19', '15:58:01', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(460, '2024-05-20', '19:16:00', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(461, '2024-05-20', '19:17:15', 'Miguel', 'de Leon', 'Encargado', 'Usuario, Miguel de Leon, Cedula: 402852589, registrado como Encargado, actualizó sus datos.'),
(462, '2024-05-20', '19:17:23', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(463, '2024-05-21', '01:25:23', 'Miguel', 'de Leon', 'Encargado', 'Se ha emitido una nueva receta para el paciente María Magallanes, cedula: 40241666649, por motivos de: n/A, Lo cual se le manda a facturar: n/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/A'),
(464, '2024-05-21', '20:47:56', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(465, '2024-05-22', '00:44:23', 'Miguel', 'de Leon', 'Encargado', 'Venta a Sigui García (Cedula.: 0000000000 ) por 1 Producto, pagó en.: Efectivo, Total: 758.00, total a devolver.: -258.00'),
(466, '2024-05-23', '23:55:40', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(467, '2024-05-24', '01:07:06', 'Miguel', 'de Leon', 'Encargado', 'Se editaron los datos del usuario Manuel Poline'),
(468, '2024-05-24', '19:41:11', 'Miguel', 'de Leon', 'Encargado', 'Se ha emitido una nueva receta para el paciente Aire De Electricidad, cedula: 468, por motivos de: hh, Lo cual se le manda a facturar: Consulta\r\nMontura\r\nCristales anti Reflejos'),
(469, '2024-05-27', '13:50:49', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(470, '2024-05-27', '14:24:41', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(471, '2024-05-27', '16:20:38', 'Miguel', 'de Leon', 'Encargado', 'Se ha emitido una nueva receta para el paciente MonturaAAAAAA Magallanes de los Santos, cedula: 40241666649, por motivos de: kk, Lo cual se le manda a facturar: Hola Vamos a hacer, todo lo posible para determinar estos problemas de ete paciente '),
(472, '2024-05-27', '16:22:20', 'Miguel', 'de Leon', 'Encargado', 'Se ha emitido una nueva receta para el paciente MonturaAAAAAA Magallanes de los Santos, cedula: 40241666649, por motivos de: kk, Lo cual se le manda a facturar: Hola Vamos a hacer, todo lo posible para determinar estos problemas de ete paciente '),
(473, '2024-05-27', '16:24:52', 'Miguel', 'de Leon', 'Encargado', 'Se ha emitido una nueva receta para el paciente MonturaAAAAAA Magallanes de los Santos, cedula: 40241666649, por motivos de: kk, Lo cual se le manda a facturar: Hola Vamos a hacer, todo lo posible para determinar estos problemas de ete paciente '),
(474, '2024-05-27', '18:25:19', 'Miguel', 'de Leon', 'Encargado', 'Se ha emitido una nueva receta para el paciente MonturaAAAAAA Magallanes de los Santos, cedula: 40241666649, por motivos de: jj, Lo cual se le manda a facturar: HolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHo'),
(475, '2024-05-27', '19:04:12', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(476, '2024-05-27', '19:11:47', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(477, '2024-05-27', '19:31:40', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: TVvVV NegraAA'),
(478, '2024-05-27', '19:31:49', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Aire De Electricidad'),
(479, '2024-05-27', '19:31:57', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: MonturaAAAAAA Magallanes de los Santos'),
(480, '2024-05-27', '19:32:11', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: MonturaAAAAAA Magallanes de los Santos'),
(481, '2024-05-27', '19:32:22', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: MonturaAAAAAA kk'),
(482, '2024-05-27', '19:32:31', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: MonturaAAAAAA kk'),
(483, '2024-05-27', '19:33:14', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: MonturaAAAAAA kk'),
(484, '2024-05-27', '19:33:23', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: MonturaAAAAAA Magallanes de los Santos'),
(485, '2024-05-27', '19:33:33', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Hency Magallanes'),
(486, '2024-05-27', '19:33:52', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Vidalia De la Rosa'),
(487, '2024-05-27', '19:34:05', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Montura kk'),
(488, '2024-05-27', '19:35:06', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Montura Magallanes de los Santos'),
(489, '2024-05-27', '19:35:17', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Montura kk'),
(490, '2024-05-27', '19:35:29', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Vidalia De la Rosa'),
(491, '2024-05-27', '19:35:39', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Montura Magallanes de los Santos'),
(492, '2024-05-27', '19:35:55', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Montura kk'),
(493, '2024-05-27', '19:36:05', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Montura kk'),
(494, '2024-05-27', '19:36:28', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Montura kk'),
(495, '2024-05-27', '19:36:37', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Montura kk'),
(496, '2024-05-27', '19:36:48', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Montura kk'),
(497, '2024-05-27', '19:36:59', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Henfy Magallanes'),
(498, '2024-05-27', '19:38:16', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Arelys Franco'),
(499, '2024-05-27', '19:38:25', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: María Magallanes'),
(500, '2024-05-27', '19:38:35', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Gabriel Fernández'),
(501, '2024-05-27', '19:38:45', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Diego Hernández'),
(502, '2024-05-27', '19:39:06', 'Miguel', 'de Leon', 'Encargado', 'Se eliminó paciente: Sergio González'),
(503, '2024-06-02', '14:11:46', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(504, '2024-06-02', '14:19:27', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(505, '2024-06-02', '14:55:36', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión'),
(506, '2024-06-02', '16:51:11', 'Miguel', 'de Leon', 'Encargado', 'Venta a Daniel Ramírez (Cedula.: 45465 ) por 2 Servicio, pagó en.: Depósito, Total: 4490.00, total a devolver.: -2490.00'),
(507, '2024-06-02', '17:00:37', 'Miguel', 'de Leon', 'Encargado', 'Venta a Daniel Ramírez (Cedula.: 45465 ) por 2 Otro, pagó en.: Efectivo, Total: 1704.00, total a devolver.: -704.00'),
(508, '2024-06-02', '17:02:23', 'Miguel', 'de Leon', 'Encargado', 'Venta a Javier Pérez (Cedula.: 4024100000000 ) por 1 Servicio, pagó en.: Efectivo, Total: 2245.00, total a devolver.: -1245.00'),
(509, '2024-06-02', '17:03:04', '', '', 'Encargado', 'Usuario Miguel de Leon inicia sesión');

-- --------------------------------------------------------

--
-- Table structure for table `consultasfacturadas`
--

CREATE TABLE `consultasfacturadas` (
  `IDConsultaFacturada` int(11) NOT NULL,
  `CedulaPaciente` int(25) NOT NULL,
  `NombrePaciente` varchar(100) NOT NULL,
  `ApellidoPaciente` varchar(100) NOT NULL,
  `EdadPaciente` int(11) NOT NULL,
  `FechaConsullta` date NOT NULL,
  `NotasAdicionales` text NOT NULL,
  `DoctorEncargado` varchar(100) NOT NULL,
  `OjoDerechoES` varchar(25) NOT NULL,
  `OjoDerechoCIL` varchar(25) NOT NULL,
  `OjoDerechoEJE` varchar(25) NOT NULL,
  `OjoDerechoADD` varchar(25) NOT NULL,
  `OjoDerechoAVv` varchar(25) NOT NULL,
  `OjoDerechoDP` varchar(25) NOT NULL,
  `OjoIzquierdoES` varchar(25) NOT NULL,
  `OjoIzquierdoCIL` varchar(25) NOT NULL,
  `OjoIzquierdoEJE` varchar(25) NOT NULL,
  `OjoIzquierdoADD` varchar(25) NOT NULL,
  `OjoIzquierdoAVv` varchar(25) NOT NULL,
  `OjoIzquierdoDP` varchar(25) NOT NULL,
  `TipoProductoServicio` varchar(50) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Descuento` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `DescuentoTota` int(11) NOT NULL,
  `TotalAPagar` int(11) NOT NULL,
  `PagoDePaciente` int(11) NOT NULL,
  `MontoADevolver` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultasfacturadas`
--

INSERT INTO `consultasfacturadas` (`IDConsultaFacturada`, `CedulaPaciente`, `NombrePaciente`, `ApellidoPaciente`, `EdadPaciente`, `FechaConsullta`, `NotasAdicionales`, `DoctorEncargado`, `OjoDerechoES`, `OjoDerechoCIL`, `OjoDerechoEJE`, `OjoDerechoADD`, `OjoDerechoAVv`, `OjoDerechoDP`, `OjoIzquierdoES`, `OjoIzquierdoCIL`, `OjoIzquierdoEJE`, `OjoIzquierdoADD`, `OjoIzquierdoAVv`, `OjoIzquierdoDP`, `TipoProductoServicio`, `Descripcion`, `Categoria`, `Precio`, `Cantidad`, `Descuento`, `Total`, `DescuentoTota`, `TotalAPagar`, `PagoDePaciente`, `MontoADevolver`) VALUES
(48, 0, 'MonturaAAAAAA Magallanes de los Santos', '', 89, '0000-00-00', '', 'HenfyYR Magallanes', '-8', '+8', '+8', '5', '5', '89', '25', '52', '53', '45', '78', '62', 'Servicio', 'G', 'TT', 2245, 7, 255, 0, 2235, 30495, 40000, 9505),
(49, 0, 'MonturaAAAAAA Magallanes de los Santos', '', 89, '0000-00-00', '', 'HenfyYR Magallanes', '-8', '+8', '+8', '5', '5', '89', '25', '52', '53', '45', '78', '62', 'Producto', 'Montura', 'Lentes', 758, 9, 50, 0, 2235, 30495, 40000, 9505),
(50, 0, 'MonturaAAAAAA Magallanes de los Santos', '', 89, '0000-00-00', '', 'HenfyYR Magallanes', '-8', '+8', '+8', '5', '5', '89', '25', '52', '53', '45', '78', '62', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 9, 0, 0, 2235, 30495, 40000, 9505),
(51, 0, 'MonturaAAAAAA Magallanes de los Santos', '', 89, '0000-00-00', '', 'HenfyYR Magallanes', '-8', '+8', '+8', '5', '5', '89', '25', '52', '53', '45', '78', '62', 'uuuuu', 'uuuu', 'uuu', 58, 5, 0, 0, 2235, 30495, 40000, 9505),
(52, 0, 'MonturaAAAAAA Magallanes de los Santos', '', 89, '0000-00-00', '', 'HenfyYR Magallanes', '-8', '+8', '+8', '5', '5', '89', '25', '52', '53', '45', '78', '62', 'Producto', 'Montura', 'Lentes', 758, 10, 50, 0, 500, 7580, 8000, 420),
(53, 0, 'TVvVV NegraAA', '', 85, '0000-00-00', '', 'HenfyYR Magallanes', '5', '-5', '-8', '-8', '-7', '-8', '85', '85', '85', '85', '85', '85', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 8000, 7242),
(54, 6649, 'Vidalia De la Rosa', '', 63, '0000-00-00', '', 'Miguel de Leon', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Producto', 'Montura', 'Lentes', 758, 9, 50, 0, 450, 6822, 8000, 1178),
(55, 6649, 'Vidalia De la Rosa', '', 63, '0000-00-00', '', 'Miguel de Leon', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 800, 42),
(56, 6596, 'Juan Paulino', '', 24, '0000-00-00', '', 'Luis del Rosario', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 800, 42),
(57, 6596, 'Juan Paulino', '', 24, '0000-00-00', '', 'Luis del Rosario', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 800, 42),
(58, 6596, 'Juan Paulino', '', 24, '0000-00-00', '', 'Luis del Rosario', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 800, 42),
(59, 6596, 'Juan Paulino', '', 24, '0000-00-00', '', 'Luis del Rosario', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 800, 42),
(60, 6596, 'Juan Paulino', '', 24, '0000-00-00', '', 'Luis del Rosario', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 8000, 7242),
(61, 6649, 'Vidalia De la Rosa', '', 63, '0000-00-00', '', 'Miguel de Leon', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'Producto', 'Montura', 'Lentes', 758, 2, 50, 0, 100, 1516, 2000, 484),
(62, 5264, 'Miguel De los Santos', '', 89, '0000-00-00', '', 'Julian Franco', '-8', '+8', '+8', '5', '5', '89', '25', '52', '53', '45', '78', '62', 'Producto', 'Montura', 'Lentes', 758, 2, 50, 0, 2650, 32486, 40000, 7514),
(63, 5264, 'Miguel De los Santos', '', 89, '0000-00-00', '', 'Julian Franco', '-8', '+8', '+8', '5', '5', '89', '25', '52', '53', '45', '78', '62', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 10, 0, 0, 2650, 32486, 40000, 7514),
(64, 5264, 'Miguel De los Santos', '', 89, '0000-00-00', '', 'Julian Franco', '-8', '+8', '+8', '5', '5', '89', '25', '52', '53', '45', '78', '62', 'Servicio', 'Gotas', 'N/A', 2245, 10, 255, 0, 2650, 32486, 40000, 7514),
(65, 7896, 'Carlos Monegro', '', 85, '0000-00-00', '', 'Ruben Poline', '5', '-5', '-8', '-8', '-7', '-8', '85', '85', '85', '85', '85', '85', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 800, 42),
(66, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 500, -258),
(67, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 900, 142),
(68, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 500, -258),
(69, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Servicio', 'Gotas', 'N/A', 2245, 1, 255, 0, 255, 2245, 1000, -1245),
(70, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Servicio', 'Gotas', 'N/A', 2245, 1, 255, 0, 255, 2245, 2500, 255),
(71, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Servicio', 'Gotas', 'N/A', 2245, 3, 255, 0, 765, 6735, 5000, -1735),
(72, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Servicio', 'Gotas', 'N/A', 2245, 3, 255, 0, 765, 6735, 7000, 265),
(73, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 20, -738),
(74, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 5, 50, 0, 250, 3790, 2000, -1790),
(75, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 5, 50, 0, 250, 3790, 800, -2990),
(76, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 5, 50, 0, 250, 3790, 1000, -2790),
(77, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 3, 50, 0, 150, 2274, 1000, -1274),
(78, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 10, -748),
(79, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 200, -558),
(80, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 4, 50, 0, 200, 3032, 2000, -1032),
(81, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 50, -708),
(82, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 815, 10901, 5000, -5901),
(83, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 4, 0, 0, 815, 10901, 5000, -5901),
(84, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Servicio', 'Gotas', 'N/A', 2245, 3, 255, 0, 815, 10901, 5000, -5901),
(85, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 6, 0, 0, 2695, 31381, 30000, -1381),
(86, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Servicio', 'Gotas', 'N/A', 2245, 9, 255, 0, 2695, 31381, 30000, -1381),
(87, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 8, 50, 0, 2695, 31381, 30000, -1381),
(88, 6649, 'MonturaAAAAAA Magallanes de los Santos', '', 25, '0000-00-00', '', 'Miguel de Leon', '9', '9', '9', '9', '9', '+5', '+7', '+25+', '6', '2', '3', '7', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 305, 3855, 2000, -1855),
(89, 6649, 'MonturaAAAAAA Magallanes de los Santos', '', 25, '0000-00-00', '', 'Miguel de Leon', '9', '9', '9', '9', '9', '+5', '+7', '+25+', '6', '2', '3', '7', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 305, 3855, 2000, -1855),
(90, 6649, 'MonturaAAAAAA Magallanes de los Santos', '', 25, '0000-00-00', '', 'Miguel de Leon', '9', '9', '9', '9', '9', '+5', '+7', '+25+', '6', '2', '3', '7', 'Servicio', 'Gotas', 'N/A', 2245, 1, 255, 0, 305, 3855, 2000, -1855),
(91, 6649, 'MonturaAAAAAA Magallanes de los Santos', '', 25, '0000-00-00', '', 'Miguel de Leon', '9', '9', '9', '9', '9', '+5', '+7', '+25+', '6', '2', '3', '7', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 305, 3855, 852, -3003),
(92, 6649, 'MonturaAAAAAA Magallanes de los Santos', '', 25, '0000-00-00', '', 'Miguel de Leon', '9', '9', '9', '9', '9', '+5', '+7', '+25+', '6', '2', '3', '7', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 305, 3855, 852, -3003),
(93, 6649, 'MonturaAAAAAA Magallanes de los Santos', '', 25, '0000-00-00', '', 'Miguel de Leon', '9', '9', '9', '9', '9', '+5', '+7', '+25+', '6', '2', '3', '7', 'Servicio', 'Gotas', 'N/A', 2245, 1, 255, 0, 305, 3855, 852, -3003),
(94, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 305, 3855, 2000, -1855),
(95, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 305, 3855, 2000, -1855),
(96, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Servicio', 'Gotas', 'N/A', 2245, 1, 255, 0, 305, 3855, 2000, -1855),
(97, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 2462, 500, -1962),
(98, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 50, 2462, 500, -1962),
(99, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 305, 3855, 800, -3055),
(100, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 305, 3855, 800, -3055),
(101, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Servicio', 'Gotas', 'N/A', 2245, 1, 255, 0, 305, 3855, 800, -3055),
(102, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 1610, 100, -1510),
(103, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 50, 1610, 100, -1510),
(104, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 305, 3855, 500, -3355),
(105, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 305, 3855, 500, -3355),
(106, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Servicio', 'Gotas', 'N/A', 2245, 1, 255, 0, 305, 3855, 500, -3355),
(107, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 1610, 20, -1590),
(108, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 50, 1610, 20, -1590),
(109, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 305, 3855, 2000, -1855),
(110, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 305, 3855, 2000, -1855),
(111, 468, 'Aire De Electricidad', '', 5, '0000-00-00', '', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9', 'Servicio', 'Gotas', 'N/A', 2245, 1, 255, 0, 305, 3855, 2000, -1855),
(112, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Producto', 'Montura', 'Lentes', 758, 1, 50, 0, 50, 758, 758, 0),
(113, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 0, 852, 50, -802),
(114, 6649, 'MonturaAAAAAA Magallanes de los Santos', '', 25, '0000-00-00', '', 'Miguel de Leon', '9', '9', '9', '9', '9', '+5', '+7', '+25+', '6', '2', '3', '7', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 0, 852, 50, -802),
(115, 6649, 'María Magallanes', '', 20, '0000-00-00', '', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 852, 1, 0, 0, 0, 852, 50, -802);

-- --------------------------------------------------------

--
-- Table structure for table `consultassinfacturar`
--

CREATE TABLE `consultassinfacturar` (
  `IDConsultaSinFacturar` int(11) NOT NULL,
  `CedulaPaciente` varchar(25) NOT NULL,
  `NombrePaciente` varchar(100) NOT NULL,
  `ApellidoPaciente` varchar(100) NOT NULL,
  `EdadPaciente` int(11) NOT NULL,
  `FechaConsullta` date NOT NULL,
  `NotasAdicionales` text NOT NULL,
  `DoctorEncargado` varchar(100) NOT NULL,
  `OjoDerechoES` varchar(25) NOT NULL,
  `OjoDerechoCIL` varchar(25) NOT NULL,
  `OjoDerechoEJE` varchar(25) NOT NULL,
  `OjoDerechoADD` varchar(25) NOT NULL,
  `OjoDerechoAVv` varchar(25) NOT NULL,
  `OjoDerechoDP` varchar(25) NOT NULL,
  `OjoIzquierdoES` varchar(25) NOT NULL,
  `OjoIzquierdoCIL` varchar(25) NOT NULL,
  `OjoIzquierdoEJE` varchar(25) NOT NULL,
  `OjoIzquierdoADD` varchar(25) NOT NULL,
  `OjoIzquierdoAVv` varchar(25) NOT NULL,
  `OjoIzquierdoDP` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultassinfacturar`
--

INSERT INTO `consultassinfacturar` (`IDConsultaSinFacturar`, `CedulaPaciente`, `NombrePaciente`, `ApellidoPaciente`, `EdadPaciente`, `FechaConsullta`, `NotasAdicionales`, `DoctorEncargado`, `OjoDerechoES`, `OjoDerechoCIL`, `OjoDerechoEJE`, `OjoDerechoADD`, `OjoDerechoAVv`, `OjoDerechoDP`, `OjoIzquierdoES`, `OjoIzquierdoCIL`, `OjoIzquierdoEJE`, `OjoIzquierdoADD`, `OjoIzquierdoAVv`, `OjoIzquierdoDP`) VALUES
(34, '40241666649', 'María', 'Magallanes', 20, '2024-05-21', 'n/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/An/A', 'Miguel de Leon', '-8', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9'),
(35, '468', 'Aire', 'De Electricidad', 5, '2024-05-24', 'Consulta\r\nMontura\r\nCristales anti Reflejos', 'Miguel de Leon', '2', '2', '2', '2', '7', '7', '8', '8', '8', '9', '9', '9'),
(36, '40241666649', 'MonturaAAAAAA', 'Magallanes de los Santos', 25, '2024-05-27', 'Hola Vamos a hacer, todo lo posible para determinar estos problemas de ete paciente ', 'Miguel de Leon', '9', '9', '9', '9', '9', '+5', '+7', '+25+', '6', '2', '3', '7'),
(37, '40241666649', 'MonturaAAAAAA', 'Magallanes de los Santos', 25, '0000-00-00', 'Hola Vamos a hacer, todo lo posible para determinar estos problemas de ete paciente ', 'Miguel de Leon', '9', '9', '9', '9', '9', '+5', '+7', '+25', '6', '2', '3', '7'),
(38, '40241666649', 'MonturaAAAAAA', 'Magallanes de los Santos', 25, '2024-05-27', 'Hola Vamos a hacer, todo lo posible para determinar estos problemas de ete paciente ', 'Miguel de Leon', '9', '9', '9', '9', '9', '+5', '+7', '+25+', '6', '2', '3', '7'),
(39, '40241666649', 'MonturaAAAAAA', 'Magallanes de los Santos', 29, '2024-05-27', 'HolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHolaHola', 'Miguel de Leon', '4', '5', '5', '5', '5', '5', '5', '5', '5+5', '5', '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `cuentasxcobrar`
--

CREATE TABLE `cuentasxcobrar` (
  `IdFacturaPorCobrar` int(11) NOT NULL,
  `Cedula` int(11) NOT NULL,
  `NombrePacientee` varchar(100) NOT NULL,
  `Doctor` varchar(100) NOT NULL,
  `NotasDelDoctor` text NOT NULL,
  `FechaDeConsullta` date NOT NULL,
  `FechaDeExpiracion` varchar(100) NOT NULL,
  `TotalApagar` int(11) NOT NULL,
  `MetodoDePago` varchar(50) NOT NULL,
  `PagoDePaciente` int(11) NOT NULL,
  `RestanteAPagar` int(11) NOT NULL,
  `ProductosFacturados` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuentasxcobrar`
--

INSERT INTO `cuentasxcobrar` (`IdFacturaPorCobrar`, `Cedula`, `NombrePacientee`, `Doctor`, `NotasDelDoctor`, `FechaDeConsullta`, `FechaDeExpiracion`, `TotalApagar`, `MetodoDePago`, `PagoDePaciente`, `RestanteAPagar`, `ProductosFacturados`) VALUES
(1, 85898, 'Henfy Magallanes', 'Heroe', 'hola\nhola\nhola\nHola', '2024-05-19', '2024-06-19', 8000, 'Deposito', 7000, 1000, 'g\r\ng\r\ne\r\ne'),
(2, 6649, 'María Magallanes', 'Miguel de Leon', '', '0000-00-00', '0000-00-00', 2245, 'Tarjeta', 1000, -1245, ''),
(4, 6649, 'María Magallanes', 'Miguel de Leon', '', '0000-00-00', '0000-00-00', 6735, 'Tarjeta', 5000, -1735, ''),
(5, 6649, 'María Magallanes', 'Miguel de Leon', '', '0000-00-00', '0000-00-00', 758, 'Efectivo', 20, -738, ''),
(6, 6649, 'María Magallanes', 'Miguel de Leon', '', '2024-05-21', '0000-00-00', 3790, 'Efectivo', 2000, -1790, ''),
(7, 6649, 'María Magallanes', 'Miguel de Leon', '', '2024-05-21', 'miércoles, 19 de junio de 2024', 3790, 'Tarjeta', 800, -2990, ''),
(8, 6649, 'María Magallanes', 'Miguel de Leon', '', '2024-05-21', 'miércoles, 19 de junio de 2024', 3790, 'Cheque', 1000, -2790, ''),
(9, 6649, 'María Magallanes', 'Miguel de Leon', '', '2024-05-21', 'miércoles, 19 de junio de 2024', 2274, 'Depósito', 1000, -1274, ''),
(10, 6649, 'María Magallanes', 'Miguel de Leon', '', '2024-05-21', 'miércoles, 19 de junio de 2024', 758, 'Efectivo', 10, -748, ''),
(11, 6649, 'María Magallanes', 'Miguel de Leon', '', '2024-05-21', 'miércoles, 19 de junio de 2024', 758, 'Depósito', 200, -558, ''),
(12, 468, 'Aire De Electricidad', 'Miguel de Leon', 'Consulta\r\nMontura\r\nCristales anti Reflejos', '2024-05-24', 'sábado, 22 de junio de 2024', 3032, 'Depósito', 2000, -1032, ''),
(13, 6649, 'María Magallanes', 'Miguel de Leon', 'n/An/An/An/An/An/An/An/\nAn/An/An/An/An/An/An/An\n/An/An/An/An/An/An/An/A', '2024-05-21', 'miércoles, 19 de junio de 2024', 758, 'Depósito', 50, -708, ''),
(15, 468, 'Aire De Electricidad', 'Miguel de Leon', 'Consulta\r\nMontura\r\nCristales anti Reflejos', '2024-05-24', 'sábado, 22 de junio de 2024', 31381, 'Depósito', 30000, -1381, ''),
(16, 6649, 'MonturaAAAAAA Magallanes de los Santos', 'Miguel de Leon', 'Hola Vamos a hacer, todo lo posible para determinar estos problemas de ete paciente ', '2024-05-27', 'martes, 25 de junio de 2024', 3855, 'Depósito', 2000, -1855, ''),
(17, 6649, 'MonturaAAAAAA Magallanes de los Santos', 'Miguel de Leon', 'Hola Vamos a hacer, todo lo posible para determinar estos problemas de ete paciente ', '2024-05-27', 'martes, 25 de junio de 2024', 3855, 'Efectivo', 852, -3003, ''),
(18, 468, 'Aire De Electricidad', 'Miguel de Leon', 'Consulta\r\nMontura\r\nCristales anti Reflejos', '2024-05-24', 'sábado, 22 de junio de 2024', 3855, 'Depósito', 2000, -1855, 'Array\n(\n    [OjoDerechoESs] => 2\n    [OjoDerechoCILl] => 2\n    [OjoDerechoEJEe] => 2\n    [OjoDerechoADDd] => 2\n    [OjoDerechoAVvv] => 7\n    [OjoDerechoDPp] => 7\n    [OjoIzquierdoESs] => 8\n    [OjoIzquierdoCILl] => 8\n    [OjoIzquierdoEJEe] => 8\n    [OjoIzquierdoADDd] => 9\n    [OjoIzquierdoAVvv] => 9\n    [OjoIzquierdoDPp] => 9\n    [notasAdicionalesForm] => Consulta\nMontura\nCristales anti Reflejos\n    [IdConsultaSinFacturar] => 35\n    [doctor] => Miguel de Leon\n    [edad] => 5 años\n    [nombre] => Aire De Electricidad\n    [cedula] => 468\n    [fecha] => 2024-05-24\n    [dni] => 8526\n    [fechaConsulta] => 2024-05-24\n    [fechaExpiracion] => sábado, 22 de junio de 2024\n    [TotalAPagar] => 3855.00\n    [metodoPago] => Depósito\n    [PagoRealizado] => 2000\n    [PagoADevolver] => -1855.00\n    [valorNegativo] => 0\n    [fila0] => <td>Producto</td><td>Montura</td><td>Lentes</td><td>758.00</td><td>1</td><td>50.00</td><td>758.00</td><td><div><a href=\"\" class=\"eliminar\" style=\"color:red; text-decoration: none; cursor: pointer;\"><span style=\"font-weight: bold;\"><strong>Eliminar</strong></span></a></div></td>\n    [fila1] => <td>Otro</td><td>Combo</td><td>Lestes + Ex de la Vista</td><td>852.00</td><td>1</td><td>0.00</td><td>852.00</td><td><div><a href=\"\" class=\"eliminar\" style=\"color:red; text-decoration: none; cursor: pointer;\"><span style=\"font-weight: bold;\"><strong>Eliminar</strong></span></a></div></td>\n    [fila2] => <td>Servicio</td><td>Gotas</td><td>N/A</td><td>2245.00</td><td>1</td><td>255.00</td><td>2245.00</td><td><div><a href=\"\" class=\"eliminar\" style=\"color:red; text-decoration: none; cursor: pointer;\"><span style=\"font-weight: bold;\"><strong>Eliminar</strong></span></a></div></td>\n)\n\n'),
(19, 468, 'Aire De Electricidad', 'Miguel de Leon', 'Consulta\r\nMontura\r\nCristales anti Reflejos', '2024-05-24', 'sábado, 22 de junio de 2024', 2462, 'Depósito', 500, -1962, ''),
(20, 468, 'Aire De Electricidad', 'Miguel de Leon', 'Consulta\r\nMontura\r\nCristales anti Reflejos', '2024-05-24', 'sábado, 22 de junio de 2024', 3855, 'Efectivo', 800, -3055, ''),
(21, 468, 'Aire De Electricidad', 'Miguel de Leon', 'Consulta\r\nMontura\r\nCristales anti Reflejos', '2024-05-24', 'sábado, 22 de junio de 2024', 1610, 'Efectivo', 100, -1510, ''),
(22, 468, 'Aire De Electricidad', 'Miguel de Leon', 'Consulta\r\nMontura\r\nCristales anti Reflejos', '2024-05-24', 'sábado, 22 de junio de 2024', 3855, 'Efectivo', 500, -3355, ''),
(23, 468, 'Aire De Electricidad', 'Miguel de Leon', 'Consulta\r\nMontura\r\nCristales anti Reflejos', '2024-05-24', 'sábado, 22 de junio de 2024', 1610, 'Efectivo', 20, -1590, ''),
(24, 468, 'Aire De Electricidad', 'Miguel de Leon', 'Consulta\r\nMontura\r\nCristales anti Reflejos', '2024-05-24', 'sábado, 22 de junio de 2024', 3855, 'Tarjeta', 2000, -1855, ''),
(25, 6649, 'María Magallanes', 'Miguel de Leon', 'n/An/An/An/An/An/An/A\nn/An/An/An/An/An/An\n/An/An/An/An/An/An/An/An/An/A', '2024-05-21', 'miércoles, 19 de junio de 2024', 852, 'Efectivo', 50, -802, ''),
(26, 6649, 'MonturaAAAAAA Magallanes de los Santos', 'Miguel de Leon', 'Hola Vamos a hacer, todo lo posible para determinar estos problemas de ete paciente ', '2024-05-27', 'martes, 25 de junio de 2024', 852, 'Efectivo', 50, -802, ''),
(28, 45465, 'Daniel Ramírez', '', '', '0000-00-00', 'Martes, 2 De Julio De 2024', 1704, 'Efectivo', 1000, -704, ''),
(29, 2147483647, 'Javier Pérez', '', '', '0000-00-00', 'Martes, 2 De Julio De 2024', 2245, 'Efectivo', 1000, -1245, '');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `ID` int(100) NOT NULL,
  `DepartmentId` varchar(50) NOT NULL,
  `Cedula` varchar(25) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `EMail` varchar(50) NOT NULL,
  `PassWord` varchar(100) NOT NULL,
  `Sex` varchar(100) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `BirthDate` varchar(100) NOT NULL,
  `NameLastName` varchar(100) NOT NULL,
  `PhonePerContact` varchar(25) NOT NULL,
  `RealtionShip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`ID`, `DepartmentId`, `Cedula`, `Name`, `LastName`, `Phone`, `Address`, `EMail`, `PassWord`, `Sex`, `Age`, `BirthDate`, `NameLastName`, `PhonePerContact`, `RealtionShip`) VALUES
(19, 'Gerente', '4020000000', 'Manuel', 'Poline', '80985885669', 'San Martin, Casa #15 Segundo Nivel.', 'manuel@gmail.com', 'HolaHola', 'Masculino', '24', '1999-05-14', 'Perla Maxiel', '80985', 'Esposa'),
(39, 'Encargado', '402852589', 'Miguel', 'de Leon', '8098748562', 'Seremos Grandes, En el nombre de Dios', 'migel@gmail.com', '12345', 'Masculino', '52', '1999-05-12', 'Henfy de los Santos', '8585058', 'Hermano'),
(40, 'Secretaria', '0000000000', 'Juana', 'de la Rosa', '0000000000', 'Los 3 Brazossss', 'H@gmail.com', '1234567890', 'Femenino', '30', '1999-05-13', 'Henfy Magallanes', '8098559971', 'Amigo de Confianza'),
(45, 'Contable', '40858585858', 'Ramona', 'de los Santos', '80929292929', 'San Jose Casa 8B Segundo Nivel', 'RamonaT@gmail.com', 'Femenino', 'Femenino', '25', '2024-05-17', '852', '85985415', '8523');

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE `factura` (
  `IddFactura` int(11) NOT NULL,
  `CodigoFactura` int(11) NOT NULL,
  `Paciente` varchar(200) NOT NULL,
  `CedulaPaciente` varchar(50) NOT NULL,
  `EdadPaciente` int(11) NOT NULL,
  `Usuario` varchar(200) NOT NULL,
  `RNC` varchar(100) NOT NULL,
  `NCF` varchar(100) NOT NULL,
  `TipoDePago` varchar(100) NOT NULL,
  `FechaCrecion` date NOT NULL,
  `FechaExpiracion` date NOT NULL,
  `Comentario` text NOT NULL,
  `ProductoServicio` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `DescuentoUnitario` int(11) NOT NULL,
  `TotalAPagar` int(11) NOT NULL,
  `PagoRealizado` int(11) NOT NULL,
  `PagoADevolver` int(11) NOT NULL,
  `Descuento` int(11) NOT NULL,
  `ITBIS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `factura`
--

INSERT INTO `factura` (`IddFactura`, `CodigoFactura`, `Paciente`, `CedulaPaciente`, `EdadPaciente`, `Usuario`, `RNC`, `NCF`, `TipoDePago`, `FechaCrecion`, `FechaExpiracion`, `Comentario`, `ProductoServicio`, `Descripcion`, `Categoria`, `Cantidad`, `Precio`, `DescuentoUnitario`, `TotalAPagar`, `PagoRealizado`, `PagoADevolver`, `Descuento`, `ITBIS`) VALUES
(1, 0, 'MonturaAAAAAA Magallanes de los Santos', '40241666649', 0, '', '7894', '', 'Depósito', '0000-00-00', '0000-00-00', '', 'Producto', 'Montura', 'Lentes', 5, 758, 50, 8340, 9000, 660, 0, 0),
(2, 0, 'MonturaAAAAAA Magallanes de los Santos', '40241666649', 0, '', '7894', '', 'Depósito', '0000-00-00', '0000-00-00', '', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 5, 852, 0, 8340, 9000, 660, 0, 0),
(3, 0, 'MonturaAAAAAA Magallanes de los Santos', '40241666649', 0, '', '7894', '', 'Depósito', '0000-00-00', '0000-00-00', '', 'uuuuu', 'uuuu', 'uuu', 5, 58, 0, 8340, 9000, 660, 0, 0),
(4, 0, 'Sigui Magallanes', '0000000000', 15, '', '8526', '', 'Depósito', '0000-00-00', '0000-00-00', '', 'Producto', 'Montura', 'Lentes', 5, 758, 50, 3790, 4000, 210, 0, 0),
(5, 0, 'Sigui García', '0000000000', 15, '', '8526', '', 'Efectivo', '0000-00-00', '0000-00-00', '', 'Producto', 'Montura', 'Lentes', 1, 758, 50, 758, 500, -258, 0, 0),
(6, 0, 'Daniel Ramírez', '45465', 15, '', '85226', '', 'Depósito', '0000-00-00', '0000-00-00', '', 'Servicio', 'Gotas', 'N/A', 2, 2245, 255, 4490, 2000, -2490, 0, 0),
(7, 0, 'Daniel Ramírez', '45465', 15, '', '7412', '', 'Efectivo', '0000-00-00', '0000-00-00', '', 'Otro', 'Combo', 'Lestes + Ex de la Vista', 2, 852, 0, 1704, 1000, -704, 0, 0),
(8, 0, 'Javier Pérez', '4024100000000', 15, '', '7412', '', 'Efectivo', '0000-00-00', '0000-00-00', '', 'Servicio', 'Gotas', 'N/A', 1, 2245, 255, 2245, 1000, -1245, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `formulariorecetar`
--

CREATE TABLE `formulariorecetar` (
  `IdReporte` int(250) NOT NULL,
  `FechaCreacionReporte` date NOT NULL,
  `CedulaPaciente` varchar(50) NOT NULL,
  `NombrePaciente` varchar(50) NOT NULL,
  `ApellidoPaciente` varchar(100) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `EdadPaciente` int(10) NOT NULL,
  `NumeroDeTelefono` varchar(50) NOT NULL,
  `EmailPaciente` varchar(100) NOT NULL,
  `MotivoConsulta` text NOT NULL,
  `HisDeEnfermeActuales` text NOT NULL,
  `UltimoControlVisual` date NOT NULL,
  `AntecePatoloPersonales` text NOT NULL,
  `AntePatoloOculares` text NOT NULL,
  `AntePatoloSisYOculaFamiliares` text NOT NULL,
  `SCOjoDerechoVisionLejana` varchar(25) NOT NULL,
  `SCOjoDerechoVisionCercana` varchar(25) NOT NULL,
  `SCOjoIzquierdoVisionLejana` varchar(25) NOT NULL,
  `SCOjoIzquierdoVisionCercana` varchar(25) NOT NULL,
  `SCAmbosOjosVL` varchar(25) NOT NULL,
  `SCAmbosOjosVC` varchar(25) NOT NULL,
  `CCOjoDerechoVisionLejana` varchar(25) NOT NULL,
  `CCOjoDerechoVisionCercana` varchar(25) NOT NULL,
  `CCOjoIzquierdoVisionLejana` varchar(25) NOT NULL,
  `CCOjoIzquierdoVisionCercana` varchar(25) NOT NULL,
  `CCAmbosOjosVL` varchar(25) NOT NULL,
  `CCAmbosOjosVC` varchar(25) NOT NULL,
  `ObservacionesExSub` varchar(100) NOT NULL,
  `ObservacionesOjoDerecho` varchar(200) NOT NULL,
  `ObservacionesOjoIzquierdo` varchar(200) NOT NULL,
  `ReflejoPupilar` varchar(20) NOT NULL,
  `PosiPriDeMiraPPM` varchar(5) NOT NULL,
  `OjoDerechoRM` varchar(5) NOT NULL,
  `OjoDerechoRL` varchar(5) NOT NULL,
  `OjoDerechoRI` varchar(5) NOT NULL,
  `OjoDerechoRS` varchar(5) NOT NULL,
  `OjoDerechoOI` varchar(5) NOT NULL,
  `OjoDerechoOS` varchar(5) NOT NULL,
  `OjoIzquierdoRM` varchar(5) NOT NULL,
  `OjoIzquierdoRL` varchar(5) NOT NULL,
  `OjoIzquierdoRI` varchar(5) NOT NULL,
  `OjoIzquierdoRS` varchar(5) NOT NULL,
  `OjoIzquierdoOI` varchar(5) NOT NULL,
  `OjoIzquierdoOS` varchar(5) NOT NULL,
  `OjoDerePapilaObservvacion` varchar(50) NOT NULL,
  `OjoDereExcavacionObservvacion` varchar(50) NOT NULL,
  `OjoDereVasosObvacion` varchar(100) NOT NULL,
  `OjoDereMaculaObvacion` varchar(50) NOT NULL,
  `OjoDereFoveaObvacion` varchar(50) NOT NULL,
  `OjoDereRenitaObvacion` varchar(50) NOT NULL,
  `OjoIzquiPapilaObservvacion` varchar(50) NOT NULL,
  `OjoIzquiExcavacionObservvacion` varchar(50) NOT NULL,
  `OjoIzquiVasosObvacion` varchar(50) NOT NULL,
  `OjoIzquiMaculaObvacion` varchar(50) NOT NULL,
  `OjoIzquiFoveaObvacion` varchar(50) NOT NULL,
  `OjoIzquiRenitaObvacion` varchar(50) NOT NULL,
  `RXOjoDerecho` varchar(50) NOT NULL,
  `RXOjoIzquierdo` varchar(50) NOT NULL,
  `RXAdd` varchar(50) NOT NULL,
  `RXDX` varchar(50) NOT NULL,
  `RXTTO` varchar(50) NOT NULL,
  `OjoDerechoAV` varchar(50) NOT NULL,
  `OjoIzquierdoAV` varchar(50) NOT NULL,
  `ObservacionesOjoIzOjoDer` varchar(250) NOT NULL,
  `OjoDerechoES` varchar(50) NOT NULL,
  `OjoDerechoCIL` varchar(50) NOT NULL,
  `OjoDerechoEJE` varchar(50) NOT NULL,
  `OjoDerechoADD` varchar(50) NOT NULL,
  `OjoDerechoAVv` varchar(50) NOT NULL,
  `OjoDerechoDP` varchar(50) NOT NULL,
  `OjoIzquierdoES` varchar(50) NOT NULL,
  `OjoIzquierdoCIL` varchar(50) NOT NULL,
  `OjoIzquierdoEJE` varchar(50) NOT NULL,
  `OjoIzquierdoADD` varchar(50) NOT NULL,
  `OjoIzquierdoAVv` varchar(50) NOT NULL,
  `OjoIzquierdoDP` varchar(50) NOT NULL,
  `AFacturar` text NOT NULL,
  `ProxiControlFecha` date NOT NULL,
  `ProxiControlHora` time(6) NOT NULL,
  `TipoDeCita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formulariorecetar`
--

INSERT INTO `formulariorecetar` (`IdReporte`, `FechaCreacionReporte`, `CedulaPaciente`, `NombrePaciente`, `ApellidoPaciente`, `FechaNacimiento`, `EdadPaciente`, `NumeroDeTelefono`, `EmailPaciente`, `MotivoConsulta`, `HisDeEnfermeActuales`, `UltimoControlVisual`, `AntecePatoloPersonales`, `AntePatoloOculares`, `AntePatoloSisYOculaFamiliares`, `SCOjoDerechoVisionLejana`, `SCOjoDerechoVisionCercana`, `SCOjoIzquierdoVisionLejana`, `SCOjoIzquierdoVisionCercana`, `SCAmbosOjosVL`, `SCAmbosOjosVC`, `CCOjoDerechoVisionLejana`, `CCOjoDerechoVisionCercana`, `CCOjoIzquierdoVisionLejana`, `CCOjoIzquierdoVisionCercana`, `CCAmbosOjosVL`, `CCAmbosOjosVC`, `ObservacionesExSub`, `ObservacionesOjoDerecho`, `ObservacionesOjoIzquierdo`, `ReflejoPupilar`, `PosiPriDeMiraPPM`, `OjoDerechoRM`, `OjoDerechoRL`, `OjoDerechoRI`, `OjoDerechoRS`, `OjoDerechoOI`, `OjoDerechoOS`, `OjoIzquierdoRM`, `OjoIzquierdoRL`, `OjoIzquierdoRI`, `OjoIzquierdoRS`, `OjoIzquierdoOI`, `OjoIzquierdoOS`, `OjoDerePapilaObservvacion`, `OjoDereExcavacionObservvacion`, `OjoDereVasosObvacion`, `OjoDereMaculaObvacion`, `OjoDereFoveaObvacion`, `OjoDereRenitaObvacion`, `OjoIzquiPapilaObservvacion`, `OjoIzquiExcavacionObservvacion`, `OjoIzquiVasosObvacion`, `OjoIzquiMaculaObvacion`, `OjoIzquiFoveaObvacion`, `OjoIzquiRenitaObvacion`, `RXOjoDerecho`, `RXOjoIzquierdo`, `RXAdd`, `RXDX`, `RXTTO`, `OjoDerechoAV`, `OjoIzquierdoAV`, `ObservacionesOjoIzOjoDer`, `OjoDerechoES`, `OjoDerechoCIL`, `OjoDerechoEJE`, `OjoDerechoADD`, `OjoDerechoAVv`, `OjoDerechoDP`, `OjoIzquierdoES`, `OjoIzquierdoCIL`, `OjoIzquierdoEJE`, `OjoIzquierdoADD`, `OjoIzquierdoAVv`, `OjoIzquierdoDP`, `AFacturar`, `ProxiControlFecha`, `ProxiControlHora`, `TipoDeCita`) VALUES
(56, '2024-03-10', '402000000', 'Perla', 'de la Rosa Franco', '1997-11-18', 26, '80929292929', 'pmaxiel18@gmail.com', 'TE LO JALoOOoQQo', 'Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para ', '2024-04-01', 'Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un ', 'Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para ', 'Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para \r\nUn texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido. También es una composición de caracteres imprimibles (con grafema) generados por un algoritmo de cifrado que, aunque no tienen sentido para ', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '9999', '99', '99', '99', '12', '12', 'RM', 'RL', '', '', '', '', '', '', '', '', 'OI', 'OS', '2', '22', '22', '22', '22', '22', '22', '22', '22', '22', '22', '22', '88', '88', '88', '88', '', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-27', '15:00:00.000000', 'Seguimiento'),
(57, '2024-03-10', '402000000', 'Perla', 'de la Rosa Franco', '1997-11-18', 26, '80929292929', 'pmaxiel18@gmail.com', 'vamosGGGGG', 'GGGGGvamos', '2024-04-30', 'Hola', 'Tu P madre', 'T lo jala', '88', '88', '88', '88', '96', '96', '1', '2', '11', '22', '111', '222', '809855', 'QUE HAYYYYY?', 'HOLA TUUUUUUUU', '6', '12', 'RM', '', '', '', '', 'OS', 'RM', '', '', '', '', 'OS', '1', '2', '3', '4', '5', '6', '1', '1', '2', '2', '3', '3', '1', '2', '3', '4', '5', '1', '2', '333', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-03-31', '02:00:00.000000', 'Seguimiento'),
(58, '0000-00-00', '402000000', 'Perla', 'de la Rosa Franco', '1997-11-18', 26, '80929292929', 'pmaxiel18@gmail.com', 'vamos', 'vamos', '1999-05-13', 'vamos', 'vamos', 'vamos', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '6', '12', 'RM', '', '', 'RS', 'OI', '', 'RM', 'RL', 'RI', '', '', 'OS', '88', '88', '88', '8', '88', '88', '88', '88', '88', '88', '88', '88', '22', '22', '22', '22', '22', '22', '22', '22', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-02-13', '20:25:00.000000', 'seguimiento'),
(59, '0000-00-00', '402000000', 'Perla', 'de la Rosa Franco', '1997-11-18', 26, '80929292929', 'pmaxiel18@gmail.com', 'vamos', 'vamos', '2024-05-13', 'vamos', 'vamos', 'vamos', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '6', '12', 'RM', '', '', 'RS', 'OI', '', 'RM', 'RL', 'RI', '', '', 'OS', '88', '88', '88', '8', '88', '88', '88', '88', '88', '88', '88', '88', '22', '22', '22', '22', '22', '22', '22', '22', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-06-13', '20:25:00.000000', 'seguimiento'),
(60, '0000-00-00', '40241666649', 'Henfy', 'Magallanes', '1999-12-13', 24, '8098559971', 'henfi.014@gmmail.com', 'vamos', 'vamos', '8099-09-09', 'vamos', 'vamos', 'vamos', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '6', '12', 'RM', '', '', 'RS', 'OI', '', 'RM', 'RL', 'RI', '', '', 'OS', '88', '88', '88', '8', '88', '88', '88', '88', '88', '88', '88', '88', '22', '22', '22', '22', '22', '22', '22', '22', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-05-13', '20:25:00.000000', 'seguimiento'),
(61, '2024-03-10', '0000000000', 'Sigui', 'Magallanes', '1999-12-29', 15, '0000000000', 'sigui@gmail.com', 'uu', 'uu', '1999-05-13', 'jj', 'jj', 'jjj', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '44', '44', '12', '6', 'RM', '', '', '', '', '', '', '', '', 'RS', 'OI', '', '999', '99', '99', '99', '9', '99', '9', '9', '9', '9', '9', '9', '88', '88', '88', '88', '88', '88', '88', '888', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-03-13', '05:08:00.000000', 'consulta'),
(62, '2024-03-10', '402000000', 'Perla', 'de la Rosa Franco', '1997-11-18', 26, '80929292929', 'pmaxiel18@gmail.com', 'jj', 'jj', '1999-09-08', 'kkk', 'kkk', 'kkkk', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', 'hhh', 'hhh', 'hhh', '12', '6', '', '', 'RI', '', '', '', '', '', '', 'RS', '', '', '99', '999', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '888', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '2025-04-01', '08:25:00.000000', 'Consulta'),
(63, '2024-03-10', '402000000', 'Perla', 'de la Rosa Franco', '1997-11-18', 26, '80929292929', 'pmaxiel18@gmail.com', 'ooo', 'ooo', '1999-05-13', 'll', 'll', 'll', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '12', '12', 'RM', '', '', '', 'OI', 'OS', '', '', '', '', 'OI', 'OS', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-06-02', '08:15:00.000000', 'Seguimiento'),
(64, '2024-03-13', '40241666649', 'Henfy', 'Magallanes', '1999-12-13', 24, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'ppp', '2024-03-13', 'ooo', 'oo', 'oo', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', 'jjj', 'j', '12', '6', 'RM', '', 'RI', '', '', '', '', '', '', 'RS', 'OI', '', '88', '88', '88', '88', '88', '88', '88888', '888', '888', '88', '88', '88', '99', '99', '99', '99', '99', '99', '999', '9999', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-03-14', '09:43:00.000000', 'Examen'),
(65, '2024-03-13', '40241666649', 'Henfy', 'Magallanes', '1999-12-13', 24, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'ppp', '2024-03-13', 'ooo', 'oo', 'oo', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', 'jjj', 'j', '12', '6', 'RM', '', 'RI', '', '', '', '', '', '', 'RS', 'OI', '', '88', '88', '88', '88', '88', '88', '88888', '888', '888', '88', '88', '88', '99', '99', '99', '99', '99', '99', '999', '9999', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-03-14', '09:43:00.000000', 'Examen'),
(66, '2024-03-20', '40241666649', 'Hency', 'Magallanes de los Santos', '2024-03-18', 26, '8098559971', 'pmaxiel18@gmail.com', 'jjjjj', 'jjj', '2024-03-20', 'kkk', 'kk', 'kk', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '12', '6', '', '', '', 'RS', '', '', 'RM', '', '', 'RS', 'OI', '', '99', '99', '99', '99', '99', '99', '9', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-03-21', '06:01:00.000000', 'Examen'),
(67, '2024-03-20', '0000000000', 'Sigui', 'Magallanes', '1999-12-29', 15, '0000000000', 'sigui@gmail.com', 'ooo', 'oo', '2024-03-20', 'kk', 'kkk', 'kkk', '88', '88', '88', '88', '88', '88', '88', '8', '88', '88', '88', '88', '99', '99', '99', '6', '12', 'RM', 'RL', '', '', '', '', '', '', 'RI', '', '', 'OS', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '88', '8', '888', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-03-21', '19:40:00.000000', 'Seguimiento'),
(68, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(69, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(70, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-27', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(71, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(72, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(73, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(74, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(75, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-03-14', '00:00:00.000000', 'Consulta'),
(76, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(77, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(78, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(79, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(80, '2024-03-20', '40241666649', 'HENFY TLMM', 'Magallanes', '1999-05-13', 20, '8098559971', 'henfi.014@gmmail.com', 'ppp', 'pp', '2024-03-20', 'ii', 'ii', 'ii', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '555', '55', '22', '12', '6', 'RM', '', 'RI', '', '', '', '', '', 'RI', 'RS', '', '', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '00:00:00.000000', 'Consulta'),
(81, '2024-03-21', '40241666649', 'Hency', 'Magallanes de los Santos', '2024-03-18', 26, '8098559971', 'pmaxiel18@gmail.com', 'ooo', 'oo', '2024-03-21', 'kkk', 'kklll', 'lll', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '9', 'kk', 'kk', 'kk', '12', '6', 'RM', 'RL', '', '', '', '', '', '', '', '', 'OI', 'OS', '999', '99', '99', '99', '99', '99', '99', '99', '99', '9', '9', '9', '99', '99', '99', '99', '99', '99', '99', '99', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-03-21', '01:02:00.000000', 'Consulta'),
(82, '2024-03-21', '40241666649', 'Hency', 'Magallanes de los Santos', '2024-03-18', 26, '8098559971', 'pmaxiel18@gmail.com', 'ooo', 'oo', '2024-03-21', 'kkk', 'kklll', 'lll', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '9', 'kk', 'kk', 'kk', '12', '6', 'RM', 'RL', '', '', '', '', '', '', '', '', 'OI', 'OS', '999', '99', '99', '99', '99', '99', '99', '99', '99', '9', '9', '9', '99', '99', '99', '99', '99', '99', '99', '99', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-03-21', '01:02:00.000000', 'Consulta'),
(83, '2024-03-23', '0000000000', 'Sigui', 'Magallanes', '0001-01-01', 15, '0000000000', 'sigui@gmail.com', 'kkk', 'kk', '2024-03-23', 'jj', 'jjj', 'jjj', '9', '99', '9', '9', '9', '9', '99', '99', '99', '99', '9', '99', '44', '44', '44', '12', '6', 'RM', 'RL', '', '', '', '', '', 'RL', 'RI', '', '', '', '21', '22', '23', '24', '25', '26', '26', '25', '24', '23', '22', '21', '66', '66', '66', '66', '66', '66', '6', '66', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-03-23', '00:16:00.000000', 'Consulta'),
(84, '0000-00-00', '40241666649', 'Hola', 'Magallanes', '2024-03-30', 24, 'N/A', 'pmaxiel18@gmail.com', 'HABLAR', 'NINGUNA', '0000-00-00', 'TODOS', 'KK', 'KKK', '1', '2', '1', '2', '4', '5', '5', '5', '5', '2', '5', '5', 'KKK', 'KKK', 'KKK', '12', '6', 'RM', '', '', '', '', '', '', '', '', '', '', 'OS', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-05', '13:07:00.000000', 'Examen'),
(85, '2024-04-02', '402000000', 'Perla', 'de la Rosa Franco', '1997-11-18', 26, '80929292929', 'pmaxiel18@gmail.com', '5', '8', '2024-04-02', '8', '8', '2', '-5', '+8', '+8', '+l6', '+5', '+8', '+6', '+9', '-8', '-5', '+8', '-6', 'o', 'o', 'o', '12', '6', 'RM', 'RL', '', '', '', '', 'RM', 'RL', '', '', '', '', '+8', '-8', '-8', '+8', '+8', '+8', '+9', '+6', '-6', '-8', '-5', '-4', '8', '8', '9', '6', '-9', '-8', '6', '-9', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-02', '16:58:00.000000', 'Seguimiento'),
(86, '0000-00-00', '402000000', 'Perla', 'de la Rosa Franco', '1997-11-18', 26, '80929292929', 'pmaxiel18@gmail.com', '5', '8', '2024-04-02', '8', '8', '2', '-5', '+8', '+8', '+l6', '+5', '+8', '+6', '+9', '-8', '-5', '+8', '-6', 'o', 'o', 'o', '12', '6', 'RM', 'RL', '', '', '', '', 'RM', 'RL', '', '', '', '', '+8', '-8', '-8', '+8', '+8', '+8', '+9', '+6', '-6', '-8', '-5', '-4', '8', '8', '9', '6', '-9', '-8', '6', '-9', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-02', '16:58:00.000000', 'Seguimiento'),
(87, '0000-00-00', '402000000', 'Perla', 'de la Rosa Franco', '1997-11-18', 26, '80929292929', 'pmaxiel18@gmail.com', '5', '8', '2024-04-02', '8', '8', '2', '-5', '+8', '+8', '+l6', '+5', '+8', '+6', '+9', '-8', '-5', '+8', '-6', 'o', 'o', 'o', '12', '6', 'RM', 'RL', '', '', '', '', 'RM', 'RL', '', '', '', '', '+8', '-8', '-8', '+8', '+8', '+8', '+9', '+6', '-6', '-8', '-5', '-4', '7', '-8', '-9', '6', '-9', '-8', '6', '-9', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-02', '16:58:00.000000', 'Seguimiento'),
(88, '2024-04-03', '402000000', 'Perla', 'de la Rosa Franco', '1997-11-18', 26, '80929292929', 'pmaxiel18@gmail.com', '999', '999', '2024-04-03', '88', '88', '88', '+8', '+9', '+6', '+6', '-8', '-8', '+9', '+9', '+9', '+9', '-8', '-9', 'hh', 'hh', 'hh', '6', '12', 'RM', 'RL', '', '', '', '', '', '', '', '', 'OI', 'OS', '+6', '+6', '+9', '+8', '+7', '+9', '-8', '-8', '+5', '+9', '+9', '+8', '+9', '-9', '+5', '+6', '+4', '+6', '+6', '+6', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-03', '02:02:00.000000', 'Seguimiento'),
(89, '2024-04-17', '40241666649', 'TVvVV', 'NegraAA', '2024-04-15', 85, 'hhh', 'TV@gmail.com', 'Hola', 'EEEEEE', '2024-04-17', 'TTTTT', 'TTTT', 'TTTT', '+8', '8', '+8', '+l6', '+5', '-8', '+6', '-4', '+7', '8', '+8', '8', 'kkkk', 'kkk', 'kkk', '6', '12', 'RM', '', '', '', '', '', '', 'RL', '', '', '', 'OS', '999', '99', '999', '99', '99', '99', '99', '99', '99', '99', '99', '99', '88', '88', '88', '88', '88', '88', '88', '88', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-17', '21:36:00.000000', 'Seguimiento'),
(90, '2024-04-17', '468', 'Aire', 'De Electricidad', '2024-04-15', 5, '00000000000', 'aire@gmail.com', '898', '989', '2024-04-17', '89', '99', '99', '7', '77', '77', '7', '77', '77', '77', '77', '77', '77', '77', '77', '88', '88', '88', '6', '6', '', '', 'RI', 'RS', '', '', '', '', 'RI', '', '', 'OS', '88', '88', '88', '88', '88', '88', '8', '88', '8', '8', '8', '8', '889', '99', '99', '99', '9', '99', '99', '9', '', '', '', '', '', '', '', '', '', '', '', '', '', '0520-09-09', '20:40:00.000000', 'Examen'),
(91, '2024-04-19', '40241666649', 'TVvVV', 'NegraAA', '2024-04-15', 85, 'hhh', 'TV@gmail.com', 'oooooo', 'oooo', '2024-04-19', 'ppp', 'pppp', 'ooio', '88', '88', '888', '88', '8', '8', '8', '8', '88', '55', '8', '8', '78', '9', '99', '12', '6', 'RM', '', '', 'RS', '', '', '', '', '', 'RS', '', '', '88', '88', '88', '88', '88', '88', '88', '88', '88', '8', '88', '8', '88', '88', '8', '88', '8', '8', '9', '8', '', '', '', '', '', '', '', '', '', '', '', '', '-Gotas para los ojos\r\n-Montura \r\n-Antireglejos\r\n-Adicion\r\n-Todooooo coño \r\n-Que se lleve To!!\r\n-AAAAAAAAA\r\nTodo bien !!!', '2024-04-19', '08:20:00.000000', 'Consulta');

-- --------------------------------------------------------

--
-- Table structure for table `inventario`
--

CREATE TABLE `inventario` (
  `IdProductoServicio` int(11) NOT NULL,
  `ProductoOServicio` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `Marca` varchar(100) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `CantidadEnStock` int(255) NOT NULL,
  `PrecioUnitario` int(255) NOT NULL,
  `Proveedor` varchar(100) NOT NULL,
  `FechaDeCompra` date NOT NULL,
  `FechaDeVencimiento` date NOT NULL,
  `UbicacionEnInventario` varchar(100) NOT NULL,
  `EstadoDelProducto` varchar(100) NOT NULL,
  `NotasAdicionales` varchar(255) NOT NULL,
  `CantidadMinimaRequeridaEnStock` int(100) NOT NULL,
  `AlertaDeReordenamiento` tinyint(1) NOT NULL,
  `CostoTotal` decimal(10,0) NOT NULL,
  `PrecioParaCliente` int(11) NOT NULL,
  `Descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventario`
--

INSERT INTO `inventario` (`IdProductoServicio`, `ProductoOServicio`, `Descripcion`, `Categoria`, `Marca`, `Modelo`, `CantidadEnStock`, `PrecioUnitario`, `Proveedor`, `FechaDeCompra`, `FechaDeVencimiento`, `UbicacionEnInventario`, `EstadoDelProducto`, `NotasAdicionales`, `CantidadMinimaRequeridaEnStock`, `AlertaDeReordenamiento`, `CostoTotal`, `PrecioParaCliente`, `Descuento`) VALUES
(11, 'Producto', 'Montura', 'Lentes', 'La Mejor', '4545', 0, 88, 'La tuya', '2024-04-22', '2024-04-22', 'tramo', 'Nuevo', 'jjjj', 0, 0, 2500, 808, 50),
(12, 'Otro', 'Combo', 'Lestes + Ex de la Vista', 'La Mejor', 'Hola', 46, 1000, 'Tu Madre', '2024-04-22', '2024-04-22', 'Tramo Izquierdo', 'Nuevo', 'Montura Comprada.', 0, 0, 1500, 852, 0),
(33, 'Servicio', 'Gotas', 'N/A', 'a', '8', 11, 2500, 'Tu Madre', '2024-05-06', '2024-05-06', 'B2', 'Nuevo', 'Montura Comprada.', 0, 0, 25000, 2500, 255);

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE `pacientes` (
  `IdPaciente` int(110) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Cedula` varchar(15) NOT NULL,
  `Celular` varchar(20) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Edad` varchar(100) NOT NULL,
  `Sexo` varchar(25) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `NombreYApellido` varchar(100) NOT NULL,
  `Celular1` varchar(20) NOT NULL,
  `Parentesco` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`IdPaciente`, `Nombre`, `Apellido`, `Cedula`, `Celular`, `Direccion`, `Edad`, `Sexo`, `FechaNacimiento`, `Email`, `NombreYApellido`, `Celular1`, `Parentesco`) VALUES
(28, 'Sigui', 'García', '0000000000', '0000000000', 'C/ Maria, Santo Domingo Este', '15', 'Femenino', '1997-01-16', 'sigui@gmail.com', 'Jordany Magallanes', '111', 'Padre'),
(29, 'Juan', 'Martínez', '45465', '0000000000', 'La Nacional, Prados', '18', 'Selecciona Sexo...', '2005-05-18', 'G@gmail.com', 'Jordany Magallanes', '2', '221'),
(30, 'Luis', 'Rodríguez', '45465', '0000000000', 'Manzana 89, Casa 3, Santo Domingo Este', '18', 'Masculino', '2003-02-14', 'luis@gmail.com', 'Jordany Magallanes', '00', 'Padre'),
(34, 'Carlos', 'Sánchez', '402419', '00000000009', 'Santo Domingo Este', '25', 'Masculino', '2024-05-05', 'carlos@gmail.com', 'Jordany Magallanes', '809855', 'Padre'),
(35, 'Javier', 'Pérez', '4024100000000', '0000000000', 'Calle interior H, los 3 Ojos', '15', 'Masculino', '2002-01-18', 'javier@gmail.com', 'Jordany Magallanes', '4', 'Padre'),
(37, 'Andrés', 'López', '4024100000000', '0000000000', 'Santo Domingo Este', '18', 'Masculino', '2024-05-20', 'andres@gmail.com', 'Jordany Magallanes', '5', 'Padre'),
(38, 'Daniel', 'Ramírez', '45465', '0000000000', 'Santo Domingo Este', '15', 'Femenino', '2024-05-17', 'daniel@gmail.com', 'Jordany Magallanes', '2', 'Padre');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividadesrealizadas`
--
ALTER TABLE `actividadesrealizadas`
  ADD PRIMARY KEY (`IdActividad`);

--
-- Indexes for table `consultasfacturadas`
--
ALTER TABLE `consultasfacturadas`
  ADD PRIMARY KEY (`IDConsultaFacturada`);

--
-- Indexes for table `consultassinfacturar`
--
ALTER TABLE `consultassinfacturar`
  ADD PRIMARY KEY (`IDConsultaSinFacturar`);

--
-- Indexes for table `cuentasxcobrar`
--
ALTER TABLE `cuentasxcobrar`
  ADD PRIMARY KEY (`IdFacturaPorCobrar`);

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`IddFactura`);

--
-- Indexes for table `formulariorecetar`
--
ALTER TABLE `formulariorecetar`
  ADD PRIMARY KEY (`IdReporte`);

--
-- Indexes for table `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`IdProductoServicio`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`IdPaciente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actividadesrealizadas`
--
ALTER TABLE `actividadesrealizadas`
  MODIFY `IdActividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=510;

--
-- AUTO_INCREMENT for table `consultasfacturadas`
--
ALTER TABLE `consultasfacturadas`
  MODIFY `IDConsultaFacturada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `consultassinfacturar`
--
ALTER TABLE `consultassinfacturar`
  MODIFY `IDConsultaSinFacturar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `cuentasxcobrar`
--
ALTER TABLE `cuentasxcobrar`
  MODIFY `IdFacturaPorCobrar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `factura`
--
ALTER TABLE `factura`
  MODIFY `IddFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `formulariorecetar`
--
ALTER TABLE `formulariorecetar`
  MODIFY `IdReporte` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `inventario`
--
ALTER TABLE `inventario`
  MODIFY `IdProductoServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `IdPaciente` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
