-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2024 at 09:10 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ventaservicios`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_servicios`
--

CREATE TABLE `table_servicios` (
  `id_servicios` int(11) NOT NULL,
  `tipo_servicios` varchar(30) NOT NULL,
  `nombre_servicio` varchar(30) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `nombre_rentor` varchar(30) NOT NULL,
  `precio_servicio` int(10) NOT NULL,
  `img_servicio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_servicios`
--

INSERT INTO `table_servicios` (`id_servicios`, `tipo_servicios`, `nombre_servicio`, `fecha_ingreso`, `nombre_rentor`, `precio_servicio`, `img_servicio`) VALUES
(4, 'Piso', 'Casa Fin de semana', '2024-05-02', 'polas', 230, 'casa.jpg'),
(6, 'Piso', 'Casa de Verano', '2024-05-12', 'polas', 800, 'verano.jpg'),
(10, 'Local', 'Local Centro', '2024-05-06', 'polas', 600, 'local.jpg'),
(11, 'Edificio', 'Edificio Laureles', '2024-05-11', 'polas', 1200, 'edificio.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_usuarios`
--

CREATE TABLE `table_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `tipo_usuario` int(10) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `direccion_usuario` varchar(100) NOT NULL,
  `celular_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_usuarios`
--

INSERT INTO `table_usuarios` (`id_usuario`, `usuario`, `contrasena`, `tipo_usuario`, `nombre_usuario`, `direccion_usuario`, `celular_usuario`) VALUES
(1, 'jos41', '123', 1, 'josefa', 'centro tuxtla', 12345678),
(2, 'polas', 'polas123', 2, 'EdifPolas', 'Calle velasco ente diamente y zafiro', 961234567),
(3, 'banessa', 'ban1', 3, 'banesaa vazquez', 'unach', 233434124),
(4, 'joys41', '1234', 2, 'josefa', 'centro tuxtla', 12345678);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_servicios`
--
ALTER TABLE `table_servicios`
  ADD PRIMARY KEY (`id_servicios`);

--
-- Indexes for table `table_usuarios`
--
ALTER TABLE `table_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_servicios`
--
ALTER TABLE `table_servicios`
  MODIFY `id_servicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_usuarios`
--
ALTER TABLE `table_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
