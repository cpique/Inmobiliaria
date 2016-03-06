-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 13, 2014 at 11:22 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a8990087_hol`
--

-- --------------------------------------------------------

--
-- Table structure for table `inmuebles`
--

CREATE TABLE `inmuebles` (
  `id` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(15) NOT NULL,
  `estado` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` int(20) NOT NULL,
  `provincia` int(20) NOT NULL,
  `imagen` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `inmuebles`
--

INSERT INTO `inmuebles` VALUES('202', 'Avenida Colón', 2, 'Disponible', 2, 2, 'Cordoba2.jpg');
INSERT INTO `inmuebles` VALUES('201', 'Sarmiento 1051', 2, 'Disponible', 2, 2, 'Cordoba1.jpg');
INSERT INTO `inmuebles` VALUES('104', 'La Pampa 5421', 1, 'Disponible', 1, 1, 'BsAsCasa1.jpg');
INSERT INTO `inmuebles` VALUES('203', 'La Cordillera 2240', 2, 'Disponible', 2, 2, 'Cordoba3.jpg');
INSERT INTO `inmuebles` VALUES('101', ' Güemes 535 5A', 2, 'Disponible', 1, 1, 'BsAs1.jpg');
INSERT INTO `inmuebles` VALUES('102', 'Serrano 1125 2B', 2, 'Disponible', 1, 1, 'BsAs2.jpg');
INSERT INTO `inmuebles` VALUES('103', 'Honduras 555 2C', 2, 'Disponible', 1, 1, 'BsAs3.jpg');
INSERT INTO `inmuebles` VALUES('105', 'Neuquén 501', 1, 'Disponible', 1, 1, 'BsAsCasa2.jpg');
INSERT INTO `inmuebles` VALUES('106', 'Potosi 6512', 3, 'Disponible', 1, 1, 'BsAsTerreno1.jpg');
INSERT INTO `inmuebles` VALUES('204', 'Manuel Lainez 1500', 1, 'Disponible', 2, 2, 'CordobaCasa1.jpg');
INSERT INTO `inmuebles` VALUES('205', 'Nazaret 600', 1, 'Disponible', 2, 2, 'CordobaCasa2.jpg');
INSERT INTO `inmuebles` VALUES('206', 'Formosa 500', 3, 'Disponible', 2, 2, 'CordobaTerreno1.JPG');
INSERT INTO `inmuebles` VALUES('207', 'Tres Cruces 1100', 3, 'Disponible', 2, 2, 'CordobaTerreno2.jpg');
INSERT INTO `inmuebles` VALUES('301', 'San Juan 1840 4D', 2, 'Disponible', 3, 3, 'Rosario1.JPG');
INSERT INTO `inmuebles` VALUES('302', 'Avenida Fracia 3600 2B', 2, 'Disponible', 3, 3, 'Rosario2.jpg');
INSERT INTO `inmuebles` VALUES('303', 'Avenida Pellegrini 1500 5E', 2, 'Disponible', 3, 3, 'Rosario3.jpg');
INSERT INTO `inmuebles` VALUES('304', 'Moreno 2600', 2, 'Disponible', 3, 3, 'Rosario4.jpg');
INSERT INTO `inmuebles` VALUES('305', 'Entre Ríos 2512', 1, 'Disponible', 3, 3, 'RosarioCasa1.jpg');
INSERT INTO `inmuebles` VALUES('306', 'Avenida Morrison 7763', 1, 'Disponible', 3, 3, 'RosarioCasa2.jpg');
INSERT INTO `inmuebles` VALUES('307', 'Jacobacci 9300', 3, 'Disponible', 3, 3, 'RosarioTerreno1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `localidad`
--

CREATE TABLE `localidad` (
  `idLocalidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombreLocalidad` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `idProvincia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idLocalidad`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `localidad`
--

INSERT INTO `localidad` VALUES('1', 'Buenos Aires', '1');
INSERT INTO `localidad` VALUES('2', 'Cordoba', '2');
INSERT INTO `localidad` VALUES('3', 'Rosario', '3');

-- --------------------------------------------------------

--
-- Table structure for table `precio`
--

CREATE TABLE `precio` (
  `idInmueble` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechaDesde` date NOT NULL,
  `precio` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idInmueble`,`fechaDesde`,`precio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `precio`
--

INSERT INTO `precio` VALUES('101', '2014-10-01', '$2800');
INSERT INTO `precio` VALUES('102', '2014-10-01', '$3000');
INSERT INTO `precio` VALUES('103', '2014-10-02', '$2700');
INSERT INTO `precio` VALUES('104', '2014-10-06', '$425000');
INSERT INTO `precio` VALUES('105', '2014-10-05', '$230000');
INSERT INTO `precio` VALUES('106', '2014-10-07', '$330000');
INSERT INTO `precio` VALUES('201', '2014-10-06', '$1700');
INSERT INTO `precio` VALUES('202', '2014-10-06', '$2600');
INSERT INTO `precio` VALUES('203', '2014-10-07', '$2500');
INSERT INTO `precio` VALUES('204', '2014-10-03', '$325000');
INSERT INTO `precio` VALUES('205', '2014-10-04', '$500000');
INSERT INTO `precio` VALUES('206', '2014-10-04', '$390000');
INSERT INTO `precio` VALUES('207', '2014-10-07', '$400000');
INSERT INTO `precio` VALUES('301', '2014-10-08', '$2900');
INSERT INTO `precio` VALUES('302', '2014-10-04', '$2600');
INSERT INTO `precio` VALUES('303', '2014-10-06', '$1950');
INSERT INTO `precio` VALUES('304', '2014-10-05', '$3100');
INSERT INTO `precio` VALUES('305', '2014-10-03', '$250000');
INSERT INTO `precio` VALUES('306', '2014-10-09', '$610000');
INSERT INTO `precio` VALUES('307', '2014-10-09', '$535000');

-- --------------------------------------------------------

--
-- Table structure for table `provincia`
--

CREATE TABLE `provincia` (
  `idProvincia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idProvincia`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `provincia`
--

INSERT INTO `provincia` VALUES('1', 'Buenos Aires');
INSERT INTO `provincia` VALUES('2', 'Córdoba');
INSERT INTO `provincia` VALUES('3', 'Santa Fe');

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `idTipo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionTipo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idTipo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` VALUES('1', 'Casa');
INSERT INTO `tipo` VALUES('2', 'Departamento');
INSERT INTO `tipo` VALUES('3', 'Terreno');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `provincia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` VALUES('Juan', 'Pérez', 34578651, '3', 'Venado Tuerto', 'jperez@gmail.com', 'a', '1', 'usu');
INSERT INTO `usuarios` VALUES('Nora', 'Cabello', 30000000, '3', 'Rosario', 'ncabello@e-style.com.ar', 'norausu', 'norausu', 'usu');
INSERT INTO `usuarios` VALUES('Cristian Andrés', 'Piqué', 34578644, '3', 'Los Toldos, Buenos Aires', 'cristian.pique@hotmail.com', 'cap', 'pass', 'admin');
INSERT INTO `usuarios` VALUES('Fabricio', 'Montes', 34965835, '3', 'Rosario', 'fabri_3089@hotmail.com', 'fabri89', '1234', 'usu');
INSERT INTO `usuarios` VALUES('Gabriel', 'Pique', 40000000, 'Buenos Aires', 'Los Toldos', 'gp@hotmail.com', 'gop', 'pass', 'usu');
INSERT INTO `usuarios` VALUES('Nora', 'Cabello', 30000001, '3', 'Rosario', 'ncabello@e-style.com.ar', 'noraadmin', 'noraadmin', 'admin');
INSERT INTO `usuarios` VALUES('Rodríguez', 'Martín', 34578654, '2', 'Córdoba', 'rm@gmail.com', 'martinr', 'rm', 'usu');
INSERT INTO `usuarios` VALUES('Pedro', 'Sánchez', 34965838, '3', 'Junín', 'ps@hotmail.com', 'pedros', 'pedros', 'usu');
INSERT INTO `usuarios` VALUES('Fabricio ', 'Montes', 34965835, '3', 'Corral de Bustos', 'fabri_3089@hotmail.com', 'fmontes', 'fmontes', 'admin');
