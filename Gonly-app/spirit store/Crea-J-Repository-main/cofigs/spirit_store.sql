-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2021 a las 06:41:30
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spirit_store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorian1`
--

CREATE TABLE `categorian1` (
  `IdCategoria` int(11) NOT NULL,
  `ModeloCarro` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` varchar(250) NOT NULL,
  `ImagenCarro` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorian1`
--

INSERT INTO `categorian1` (`IdCategoria`, `ModeloCarro`, `Descripcion`, `Precio`, `ImagenCarro`) VALUES
(1, 'Ford Scape Titanium 2013', 'La mejor version de la Scape en los ultimos años, totalmente renovada y lista para el uso.\r\n\r\nFicha Tecnica\r\n\r\nMarca: Ford\r\nModelo: Scape\r\nAño: 2013\r\nMotor: Transversal 2.0 4 cilindros turbo\r\nTren de transmision: FF Secuencial 6 velocidades', '11.000', '../resource/categories/Categoria1/imagenes-portada/ford-scape.jpg'),
(2, 'Chevrolet Tahoe 2015', 'Una SUV de extravagante tamaño llena de lujos y comomidad por sus filas de asiento expandibles.\r\n\r\nFicha Tecnica\r\n\r\nMarca: Chevrolet\r\nModelo: Tahoje\r\nAño: 2015\r\nMotor: LM7 V8 5.3 N / A\r\nTren de transmisión: 4WD Automatica 4 velocidades', '32.500', '../resource/categories/Categoria1/imagenes-portada/chev-tahoe.jpg'),
(3, 'Toyota Rav4 2011', 'Nadie frena a la máxima expresión SUV por parte de Toyota, ideal para mover su propio peso o el doble.\r\n\r\nFicha Tecnica\r\n\r\nMarca: Toyota\r\nModelo: Rav4\r\nAño: 2011\r\nMotor: Transversal V6 N / A\r\nTren de transmisión: 4WD Automatica', '12.700', '../resource/categories/Categoria1/imagenes-portada/toyota-rav.jpg'),
(4, 'Nissan Rogue 2013', 'Ofrece comodidad y cumple su objetivo de llegar del punto A al punto B sin problemas.\r\n\r\nFicha Tecnica\r\n\r\nMarca: Nissan\r\nModelo: Rogue\r\nAño: 2013\r\nMotor: QR 25 2.5 4 cilindros transversal N/A\r\nTren de transmision: FF Automatica\r\n', '8.600', '../resource/categories/Categoria1/imagenes-portada/nissan-rogue.jpg'),
(5, 'Mitsubishi Outlander 2014', 'Con frente de Lancer actualizado esta camioneta tiene sus raices en la deportividad y tranquilidad.\r\n\r\nFicha Tecnica\r\n\r\nMarca: Mitsubishi\r\nModelo: Outlander Sport\r\nAño: 2014\r\nMotor: 2.0 4 cilindros transversal\r\nTren de transmision: 4WD Automatica', '11.500', '../resource/categories/Categoria1/imagenes-portada/Outlander.jpg'),
(6, 'Mazda CX-5 2013', 'Con tecnologia Skyactiv esta SUV japonesa hace temblar a cualquier SUV de lujo de su año. Comoda y potente.\r\n\r\nFicha Tecnica\r\n\r\nMarca: Mazda\r\nModelo: CX-5\r\nAño: 2013\r\nMotor: 2.4 4 cilindros transversal\r\nTren de transmision: FF automatica', '12.200', '../resource/categories/Categoria1/imagenes-portada/Mazda.jpg'),
(7, 'Honda CRV 2004', 'Comoda y espaciosa, una buena SUV con un precio accesible para los primeros pasos de un conductor principiante.\r\n\r\nFicha Tecnica\r\n\r\nMarca: Honda\r\nModelo: CRV\r\nAño: 2004\r\nMotor: 2.0 cilindros N/A\r\nTren de transmision: 4WD automatica', '5.700', '../resource/categories/Categoria1/imagenes-portada/Honda.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorian2`
--

CREATE TABLE `categorian2` (
  `IdCategoria` int(11) NOT NULL,
  `ModeloCarro` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` varchar(250) NOT NULL,
  `ImagenCarro` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorian2`
--

INSERT INTO `categorian2` (`IdCategoria`, `ModeloCarro`, `Descripcion`, `Precio`, `ImagenCarro`) VALUES
(1, 'Toyota Land Cruiser 1990', '', '12.200', '../resource/categories/Categoria2/imagenes-portada/toyota-land.jpg'),
(2, 'Nissan Patrol 1990', '', '4.800', '../resource/categories/Categoria2/imagenes-portada/nissan-patrol.jpg'),
(3, 'Mitsubishi Nativa 2006', '', '12.000', '../resource/categories/Categoria2/imagenes-portada/mitsubishi-nativa.jpg'),
(4, 'Nissan Xterra 2005', '', '6.100', '../resource/categories/Categoria2/imagenes-portada/nissan-xterra.jpg'),
(5, 'Mitsubishi Montero XL', '', '12.500', '../resource/categories/Categoria2/imagenes-portada/mitsubishi-montero.jpg'),
(6, 'Jeep Grand Cherokee', '', '25.100', '../resource/categories/Categoria2/imagenes-portada/jeep-cherokee.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorian3`
--

CREATE TABLE `categorian3` (
  `IdCategoria` int(11) NOT NULL,
  `ModeloCarro` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` varchar(250) NOT NULL,
  `ImagenCarro` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorian3`
--

INSERT INTO `categorian3` (`IdCategoria`, `ModeloCarro`, `Descripcion`, `Precio`, `ImagenCarro`) VALUES
(1, 'Dodge Dart 2015', '', '6.500', '../resource/categories/Categoria3/imagenes-portada/dodge-dart.jpg'),
(2, 'Toyota Corolla 2006', '', '7.000', '../resource/categories/Categoria3/imagenes-portada/toyota-corolla.jpg'),
(3, 'Nissan Sentra SER 2002', '', '6.800', '../resource/categories/Categoria3/imagenes-portada/nissan-sentra.jpg'),
(4, 'Mitsubishi Lancer 2009', '', ' 6.000', '../resource/categories/Categoria3/imagenes-portada/mi-lancer.jpg'),
(5, 'Mazda 322', '', '3.000', '../resource/categories/Categoria3/imagenes-portada/mazda.jpg'),
(6, 'Hyundai Elantra 2010', '', ' 5.500', '../resource/categories/Categoria3/imagenes-portada/elantra.jpg'),
(7, 'Kia Forte 2014', '', ' 7.995', '../resource/categories/Categoria3/imagenes-portada/kia-forte.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorian4`
--

CREATE TABLE `categorian4` (
  `IdCategoria` int(11) NOT NULL,
  `ModeloCarro` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` varchar(250) NOT NULL,
  `ImagenCarro` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorian4`
--

INSERT INTO `categorian4` (`IdCategoria`, `ModeloCarro`, `Descripcion`, `Precio`, `ImagenCarro`) VALUES
(1, 'Ford Fiesta 2011', '', '5.000', '../resource/categories/Categoria4/imagenes-portada/fiesta.jpg'),
(2, 'Chevrolet Spark 2015', '', '5.800', '../resource/categories/Categoria4/imagenes-portada/chev-spark.jpg'),
(3, 'Toyota Yaris 2012', '', '6.900', '../resource/categories/Categoria4/imagenes-portada/yaris.jpg'),
(4, 'Mitsubishi Mirage 2015', '', '6.300', '../resource/categories/Categoria4/imagenes-portada/mirage.jpg'),
(5, 'Honda Civic EG 1993', '', '4.000', '../resource/categories/Categoria4/imagenes-portada/honda.jpg'),
(6, 'Renault Clio 2002', '', '2.500', '../resource/categories/Categoria4/imagenes-portada/renault.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorian5`
--

CREATE TABLE `categorian5` (
  `IdCategoria` int(11) NOT NULL,
  `ModeloCarro` varchar(250) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Precio` varchar(250) NOT NULL,
  `ImagenCarro` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorian5`
--

INSERT INTO `categorian5` (`IdCategoria`, `ModeloCarro`, `Descripcion`, `Precio`, `ImagenCarro`) VALUES
(1, 'Subaru WRX Base', '', '18.900', '../resource/categories/Categoria5/imagenes-portada/subaru.jpg'),
(2, 'Honda Civic Si', '', '19.997', '../resource/categories/Categoria5/imagenes-portada/honda-civic.jpg'),
(3, 'Audi 2.0T Premium Plus', '', '19.000', '../resource/categories/Categoria5/imagenes-portada/audi.jpg'),
(4, 'Scion FR-S Base', '', ' 17.00', '../resource/categories/Categoria5/imagenes-portada/scion.jpg'),
(5, 'Hyundai Genesis Coupe', '', '13.000', '../resource/categories/Categoria5/imagenes-portada/hyundai-genesis.jpg'),
(6, 'Mercedes-Benz S-Class 63 AMG', '', '16.000', '../resource/categories/Categoria5/imagenes-portada/mercedes.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Id`, `usuario`, `password`, `telefono`, `email`) VALUES
(1, 'alvin melendez', '162169d18ecfd9704f15916994becca7af85aeb7078bd43313d2c7c5f735ea62d7725a5906b27cccf6db67427ac30be52921522902ff037426133a764e84d924', '7458-5215', 'yolomeme444@gmail.com'),
(3, 'javithor360', 'c5d73b564d40e734bc251a0e659cd97b3691ea6dd5571a89bd8891bcb76c7d9969e32c124e84f584b6c58def1ba55738c31c5583646c286e006e1489fccd1357', '7256-6325', 'floresmejia004@gmail.com'),
(4, 'mateo', '756fb120b6ac5a817fbf698b4c5acefcaaed747cd1b957f69e7f3ad172ebb57d5b447dc53c285162564199cffd2e7153eadb053925491560f682a951d11947b7', '6050 5363', 'oscarmateoelias@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `IdVenta` int(11) NOT NULL,
  `NombreUsuario` varchar(250) NOT NULL,
  `CorreoUsuario` varchar(250) NOT NULL,
  `TarjetaCredito` varchar(250) NOT NULL,
  `MunicipioUsuario` varchar(250) NOT NULL,
  `ColoniaUsuario` varchar(250) NOT NULL,
  `CalleCasaUsuario` varchar(250) NOT NULL,
  `ModeloComprado` varchar(250) NOT NULL,
  `PrecioProducto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`IdVenta`, `NombreUsuario`, `CorreoUsuario`, `TarjetaCredito`, `MunicipioUsuario`, `ColoniaUsuario`, `CalleCasaUsuario`, `ModeloComprado`, `PrecioProducto`) VALUES
(1, 'alvin melendez', 'yolomeme444@gmail.com', '4102-5256-6820-8565', 'ilopango', 'nuevos horizontes', 'calle 1 casa 2 ', 'Dodge Dart 2015', '6.500'),
(2, 'alvin melendez', 'yolomeme444@gmail.com', 'x', 'x', 'x', 'x', 'Mitsubishi Nativa 2006', '12.000'),
(3, 'alvin melendez', 'yolomeme444@gmail.com', '4444444444444444', 'x', 'x', 'x', 'Toyota Corolla 2006', '7.000'),
(4, 'alvin melendez', 'yolomeme444@gmail.com', '5525-5265-6548-6325', 'Ilopango', 'Nuevos horizontes 3', 'calle vida, casa 99', 'Subaru WRX Base', '18.900'),
(5, 'alvin melendez', 'yolomeme444@gmail.com', '4525-5265-6548-6325', 'a', 'a', 'a', 'Chevrolet Spark 2015', '5.800'),
(6, 'alvin melendez', 'yolomeme444@gmail.com', '5525-5265-6548-6325', 'Ilopango', 'Nuevos horizontes 3', 'calle vida, casa 99', 'Toyota Corolla 2006', '7.000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorian1`
--
ALTER TABLE `categorian1`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `categorian2`
--
ALTER TABLE `categorian2`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `categorian3`
--
ALTER TABLE `categorian3`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `categorian4`
--
ALTER TABLE `categorian4`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `categorian5`
--
ALTER TABLE `categorian5`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`IdVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorian1`
--
ALTER TABLE `categorian1`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `categorian2`
--
ALTER TABLE `categorian2`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categorian3`
--
ALTER TABLE `categorian3`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `categorian4`
--
ALTER TABLE `categorian4`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `categorian5`
--
ALTER TABLE `categorian5`
  MODIFY `IdCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `IdVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
