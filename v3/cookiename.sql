-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-08-2022 a las 09:10:09
-- Versión del servidor: 5.7.38-cll-lve
-- Versión de PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cookiename`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'slowdmelendez360', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'eduveel19', 'd8c5b5761e0c87da1c7d1ace750f6c0b'),
(3, 'adri', '40c0add9095bbf9e42c61c7341a18029');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `local` varchar(60) NOT NULL,
  `visita` varchar(60) NOT NULL,
  `logoL` text NOT NULL,
  `logoV` text NOT NULL,
  `canal` text,
  `canal2` text,
  `canal3` text,
  `canal4` text,
  `canal5` text,
  `canal6` text NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `liga` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `local`, `visita`, `logoL`, `logoV`, `canal`, `canal2`, `canal3`, `canal4`, `canal5`, `canal6`, `fecha`, `liga`, `status`) VALUES
(112, 'ibiza', 'alavs', 'https://www.movistarplus.es/recorte/e/encuentro/3daaff177231386cfabc2db7868903c8', 'https://www.movistarplus.es/recorte/e/encuentro/2539aab1560f0900943b08eae56caa40', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-08-28 22:00:00', 2, 1),
(113, 'granada', 'villarrealb', 'https://www.movistarplus.es/recorte/e/encuentro/6fc276b44e8bea436d900c9294c9d428', 'https://www.movistarplus.es/recorte/e/encuentro/8fa2c22bd7963ed98c56d2f04e202710', 'M+ #Vamos', 'LaLiga SmartbankTV', NULL, NULL, NULL, '', '2022-08-29 20:00:00', 2, 1),
(114, 'laspalmas', 'andorra', 'https://www.movistarplus.es/recorte/e/encuentro/366e4e8d7bb88dbd4dbf6761d656755d', 'https://www.movistarplus.es/recorte/e/encuentro/deeedb735c5cb769266f86ff48c4f090', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-08-29 22:00:00', 2, 1),
(115, 'legans', 'eibar', 'https://www.movistarplus.es/recorte/e/encuentro/7514b89c4693a5f7615a3f409f80d70f', 'https://www.movistarplus.es/recorte/e/encuentro/d7169620bef2aae499bf3b31bf6f1451', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-02 21:00:00', 2, 1),
(116, 'alavs', 'laspalmas', 'https://www.movistarplus.es/recorte/e/encuentro/2539aab1560f0900943b08eae56caa40', 'https://www.movistarplus.es/recorte/e/encuentro/366e4e8d7bb88dbd4dbf6761d656755d', 'M+ #Vamos', 'LaLiga SmartbankTV', NULL, NULL, NULL, '', '2022-09-03 14:00:00', 2, 1),
(117, 'villarrealb', 'mirands', 'https://www.movistarplus.es/recorte/e/encuentro/8fa2c22bd7963ed98c56d2f04e202710', 'https://www.movistarplus.es/recorte/e/encuentro/d0ea05ce5f4096a00c3cc4b155915cc0', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-03 16:15:00', 2, 1),
(118, 'ponferradina', 'sporting', 'https://www.movistarplus.es/recorte/e/encuentro/35ae5234150c8cc74334647f55553d3e', 'https://www.movistarplus.es/recorte/e/encuentro/270bc034c86b4e6c295c0bcc11e3c496', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-03 18:30:00', 2, 1),
(119, 'tenerife', 'racing', 'https://www.movistarplus.es/recorte/e/encuentro/8326fd6f7488790cd7682874768fcc56', 'https://www.movistarplus.es/recorte/e/encuentro/b738a6e10f50de1887f7549ac8d42aeb', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-03 21:00:00', 2, 1),
(120, 'andorra', 'granada', 'https://www.movistarplus.es/recorte/e/encuentro/deeedb735c5cb769266f86ff48c4f090', 'https://www.movistarplus.es/recorte/e/encuentro/6fc276b44e8bea436d900c9294c9d428', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-04 14:00:00', 2, 1),
(121, 'mlaga', 'albacete', 'https://www.movistarplus.es/recorte/e/encuentro/6a1b42a92c7f8bc102e4ff1ca67f3960', 'https://www.movistarplus.es/recorte/e/encuentro/ffc9e6bbf752115b5692fee401ee196a', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-04 16:15:00', 2, 1),
(122, 'huesca', 'ibiza', 'https://www.movistarplus.es/recorte/e/encuentro/0ebb7a71218ee3cf093beefe9606d312', 'https://www.movistarplus.es/recorte/e/encuentro/3daaff177231386cfabc2db7868903c8', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-04 18:30:00', 2, 1),
(123, 'burgos', 'cartagena', 'https://www.movistarplus.es/recorte/e/encuentro/48ec900cd08ab93634942f1cfaddc54c', 'https://www.movistarplus.es/recorte/e/encuentro/cd6eb3e825b4188f5bbd3ead9ece7fbe', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-04 18:30:00', 2, 1),
(124, 'realzaragoza', 'lugo', 'https://www.movistarplus.es/recorte/e/encuentro/a49339b9a88cc4cd493a4efda52b649c', 'https://www.movistarplus.es/recorte/e/encuentro/78fc413ce6837abbeff564aa197634d1', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-04 21:00:00', 2, 1),
(125, 'realoviedo', 'levante', 'https://www.movistarplus.es/recorte/e/encuentro/abbe803c52646fdc3104e600ab7aa932', 'https://www.movistarplus.es/recorte/e/encuentro/e5bff5a3306429baad76de5d61e5fe8f', 'M+ #Vamos', 'LaLiga SmartbankTV', NULL, NULL, NULL, '', '2022-09-05 21:00:00', 2, 1),
(126, 'lugo', 'alavs', 'https://www.movistarplus.es/recorte/e/encuentro/78fc413ce6837abbeff564aa197634d1', 'https://www.movistarplus.es/recorte/e/encuentro/2539aab1560f0900943b08eae56caa40', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-10 14:00:00', 2, 1),
(127, 'burgos', 'realoviedo', 'https://www.movistarplus.es/recorte/e/encuentro/48ec900cd08ab93634942f1cfaddc54c', 'https://www.movistarplus.es/recorte/e/encuentro/abbe803c52646fdc3104e600ab7aa932', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-10 16:15:00', 2, 1),
(128, 'cartagena', 'albacete', 'https://www.movistarplus.es/recorte/e/encuentro/cd6eb3e825b4188f5bbd3ead9ece7fbe', 'https://www.movistarplus.es/recorte/e/encuentro/ffc9e6bbf752115b5692fee401ee196a', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-10 18:30:00', 2, 1),
(129, 'levante', 'villarrealb', 'https://www.movistarplus.es/recorte/e/encuentro/e5bff5a3306429baad76de5d61e5fe8f', 'https://www.movistarplus.es/recorte/e/encuentro/8fa2c22bd7963ed98c56d2f04e202710', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-10 21:00:00', 2, 1),
(130, 'sporting', 'racing', 'https://www.movistarplus.es/recorte/e/encuentro/270bc034c86b4e6c295c0bcc11e3c496', 'https://www.movistarplus.es/recorte/e/encuentro/b738a6e10f50de1887f7549ac8d42aeb', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-11 14:00:00', 2, 1),
(131, 'ibiza', 'tenerife', 'https://www.movistarplus.es/recorte/e/encuentro/3daaff177231386cfabc2db7868903c8', 'https://www.movistarplus.es/recorte/e/encuentro/8326fd6f7488790cd7682874768fcc56', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-11 16:15:00', 2, 1),
(132, 'mirands', 'andorra', 'https://www.movistarplus.es/recorte/e/encuentro/d0ea05ce5f4096a00c3cc4b155915cc0', 'https://www.movistarplus.es/recorte/e/encuentro/deeedb735c5cb769266f86ff48c4f090', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-11 16:15:00', 2, 1),
(133, 'ponferradina', 'realzaragoza', 'https://www.movistarplus.es/recorte/e/encuentro/35ae5234150c8cc74334647f55553d3e', 'https://www.movistarplus.es/recorte/e/encuentro/a49339b9a88cc4cd493a4efda52b649c', 'LaLiga SmartbankTV', '', NULL, NULL, NULL, '', '2022-09-11 18:30:00', 2, 1),
(134, 'huesca', 'mlaga', 'https://www.movistarplus.es/recorte/e/encuentro/0ebb7a71218ee3cf093beefe9606d312', 'https://www.movistarplus.es/recorte/e/encuentro/6a1b42a92c7f8bc102e4ff1ca67f3960', 'M+ #Vamos', 'LaLiga SmartbankTV', NULL, NULL, NULL, '', '2022-09-11 21:00:00', 2, 1),
(135, 'eibar', 'granada', 'https://www.movistarplus.es/recorte/e/encuentro/d7169620bef2aae499bf3b31bf6f1451', 'https://www.movistarplus.es/recorte/e/encuentro/6fc276b44e8bea436d900c9294c9d428', 'M+ #Vamos', 'LaLiga SmartbankTV', NULL, NULL, NULL, '', '2022-09-12 21:00:00', 2, 1),
(162, 'arsenal', 'aston villa', 'arsenal', 'aston villa', '', '', '', '', '', '', '2022-08-31 12:30:00', 5, 1),
(163, 'manchestercity', 'nottingham forest', 'manchestercity', 'nottingham forest', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-08-31 12:30:00', 5, 1),
(164, 'bournemouth', 'wolves', 'bournemouth', 'wolves', '', '', '', '', '', '', '2022-08-31 12:30:00', 5, 1),
(165, 'westham', 'tottenham', 'westham', 'tottenham', '', '', '', '', '', '', '2022-08-31 11:45:00', 5, 1),
(166, 'liverpool', 'newcastle', 'liverpool', 'newcastle', 'dazn2es', 'espnextra', '', '', '', '', '2022-08-31 13:00:00', 5, 1),
(168, 'leicestercity', 'manchester utd.', 'leicestercity', 'manchester utd.', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-01 13:00:00', 5, 1),
(170, 'everton', 'liverpool', 'everton', 'liverpool', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-03 05:30:00', 5, 1),
(171, 'tottenham', 'fulham', 'tottenham', 'fulham', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-03 08:00:00', 5, 1),
(172, 'newcastle', 'crystal palace', 'newcastle', 'crystal palace', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-03 08:00:00', 5, 1),
(173, 'nottinghamforest', 'bournemouth', 'nottinghamforest', 'bournemouth', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-03 08:00:00', 5, 1),
(174, 'brentford', 'leeds utd', 'brentford', 'leeds utd', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-03 08:00:00', 5, 1),
(175, 'wolves', 'southampton', 'wolves', 'southampton', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-03 08:00:00', 5, 1),
(176, 'astonvilla', 'manchester city', 'astonvilla', 'manchester city', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-03 10:30:00', 5, 1),
(178, 'chelsea', 'west ham', 'chelsea', 'west ham', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-03 08:00:00', 5, 1),
(179, 'brighton', 'leicester city', 'brighton', 'leicester city', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-04 07:00:00', 5, 1),
(180, 'manchesterutd.', 'arsenal', 'manchesterutd.', 'arsenal', 'DAZN (RegÃ­strate)', '', '', '', '', '', '2022-09-04 09:30:00', 5, 1),
(182, 'Giants', 'Bengals', 'https://logodownload.org/wp-content/uploads/2020/09/new-york-giants-logo-2.png', 'https://logodownload.org/wp-content/uploads/2020/07/cincinnati-bengals-logo-2.png', '', '', '', '226', '', '', '2022-08-21 17:19:00', 14, 1),
(203, 'cdiz', 'athletic', 'https://www.movistarplus.es/recorte/e/encuentro/8ecec5088fa45e9e2b99f04ad6ba0a69', 'https://www.movistarplus.es/recorte/e/encuentro/4c1c17c61805ee51bd99c4da9e4edda6', 'DAZN LaLiga', 'directv2', '', '', '', '', '2022-08-29 20:00:00', 1, 1),
(204, 'valencia', 'at.madrid', 'https://www.movistarplus.es/recorte/e/encuentro/f23c8c1092dab48c202a401f3caf7a9a', 'https://www.movistarplus.es/recorte/e/encuentro/5e7c6358dc4144e358e296007ee0818f', 'M+ LaLiga', 'directv1', '', '', '', '', '2022-08-29 22:00:00', 1, 1),
(205, 'celta', 'cdiz', 'https://www.movistarplus.es/recorte/e/encuentro/3b3f47fd00d31f49417c89ffa526cf39', 'https://www.movistarplus.es/recorte/e/encuentro/8ecec5088fa45e9e2b99f04ad6ba0a69', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-02 21:00:00', 1, 1),
(206, 'mallorca', 'girona', 'https://www.movistarplus.es/recorte/e/encuentro/49b664c85568db81b87b78d483246fea', 'https://www.movistarplus.es/recorte/e/encuentro/daba4f0f24601e08342dd5aa29eec554', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-03 14:00:00', 1, 1),
(207, 'realmadrid', 'betis', 'https://www.movistarplus.es/recorte/e/encuentro/4ce17a2143b4cdf075458c63c4b2feae', 'https://www.movistarplus.es/recorte/e/encuentro/eacadad4c273961ddbe24d7d63f27d53', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-03 16:15:00', 1, 1),
(208, 'realsociedad', 'at.madrid', 'https://www.movistarplus.es/recorte/e/encuentro/f563af76d915a778dbd1e0e9d4eb427e', 'https://www.movistarplus.es/recorte/e/encuentro/5e7c6358dc4144e358e296007ee0818f', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-03 18:30:00', 1, 1),
(209, 'sevilla', 'barcelona', 'https://www.movistarplus.es/recorte/e/encuentro/04ec4c467eb7bdcb1bafa5e0ec812160', 'https://www.movistarplus.es/recorte/e/encuentro/5aac54d28c9e144ac90a2f6fdd2d12fb', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-03 21:00:00', 1, 1),
(210, 'osasuna', 'rayovallecano', 'https://www.movistarplus.es/recorte/e/encuentro/3e0bde3f3d29c424343c42e0aa819793', 'https://www.movistarplus.es/recorte/e/encuentro/ffea1dc7f9a26ec87011a54977dd83bc', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-04 14:00:00', 1, 1),
(211, 'athletic', 'espanyol', 'https://www.movistarplus.es/recorte/e/encuentro/4c1c17c61805ee51bd99c4da9e4edda6', 'https://www.movistarplus.es/recorte/e/encuentro/0ff812a82970ee3419a4cf91cca97f0c', 'GOL PLAY', '', NULL, NULL, NULL, '', '2022-09-04 16:15:00', 1, 1),
(212, 'villarreal', 'elche', 'https://www.movistarplus.es/recorte/e/encuentro/dd8ac7c76232934108847493e685ec54', 'https://www.movistarplus.es/recorte/e/encuentro/2da95fe3a5a1e7b265a75268fdd17b58', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-04 18:30:00', 1, 1),
(213, 'valencia', 'getafe', 'https://www.movistarplus.es/recorte/e/encuentro/f23c8c1092dab48c202a401f3caf7a9a', 'https://www.movistarplus.es/recorte/e/encuentro/cd4e260ddac5a04701e80c92ad7bd675', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-04 21:00:00', 1, 1),
(214, 'valladolid', 'almera', 'https://www.movistarplus.es/recorte/e/encuentro/6f46350f0f5cb86a33568278535b09bc', 'https://www.movistarplus.es/recorte/e/encuentro/0197e03ebdce564e0104aedd5af4953c', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-05 21:00:00', 1, 1),
(215, 'girona', 'valladolid', 'https://www.movistarplus.es/recorte/e/encuentro/daba4f0f24601e08342dd5aa29eec554', 'https://www.movistarplus.es/recorte/e/encuentro/6f46350f0f5cb86a33568278535b09bc', 'DAZN LaLiga', '', NULL, NULL, NULL, '', '2022-09-09 21:00:00', 1, 1),
(216, 'rayovallecano', 'valencia', 'https://www.movistarplus.es/recorte/e/encuentro/ffea1dc7f9a26ec87011a54977dd83bc', 'https://www.movistarplus.es/recorte/e/encuentro/f23c8c1092dab48c202a401f3caf7a9a', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-10 14:00:00', 1, 1),
(217, 'espanyol', 'sevilla', 'https://www.movistarplus.es/recorte/e/encuentro/0ff812a82970ee3419a4cf91cca97f0c', 'https://www.movistarplus.es/recorte/e/encuentro/04ec4c467eb7bdcb1bafa5e0ec812160', 'DAZN LaLiga', '', NULL, NULL, NULL, '', '2022-09-10 16:15:00', 1, 1),
(218, 'cdiz', 'barcelona', 'https://www.movistarplus.es/recorte/e/encuentro/8ecec5088fa45e9e2b99f04ad6ba0a69', 'https://www.movistarplus.es/recorte/e/encuentro/5aac54d28c9e144ac90a2f6fdd2d12fb', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-10 18:30:00', 1, 1),
(219, 'realmadrid', 'mallorca', 'https://www.movistarplus.es/recorte/e/encuentro/4ce17a2143b4cdf075458c63c4b2feae', 'https://www.movistarplus.es/recorte/e/encuentro/49b664c85568db81b87b78d483246fea', 'DAZN LaLiga', '', NULL, NULL, NULL, '', '2022-09-10 21:00:00', 1, 1),
(220, 'getafe', 'realsociedad', 'https://www.movistarplus.es/recorte/e/encuentro/cd4e260ddac5a04701e80c92ad7bd675', 'https://www.movistarplus.es/recorte/e/encuentro/f563af76d915a778dbd1e0e9d4eb427e', 'DAZN LaLiga', '', NULL, NULL, NULL, '', '2022-09-11 14:00:00', 1, 1),
(221, 'elche', 'athletic', 'https://www.movistarplus.es/recorte/e/encuentro/2da95fe3a5a1e7b265a75268fdd17b58', 'https://www.movistarplus.es/recorte/e/encuentro/4c1c17c61805ee51bd99c4da9e4edda6', 'M+ LaLiga', 'GOL PLAY', NULL, NULL, NULL, '', '2022-09-11 16:15:00', 1, 1),
(222, 'at.madrid', 'celta', 'https://www.movistarplus.es/recorte/e/encuentro/5e7c6358dc4144e358e296007ee0818f', 'https://www.movistarplus.es/recorte/e/encuentro/2a624b4987bb849d5c6a21b4c394d722', 'DAZN LaLiga', '', NULL, NULL, NULL, '', '2022-09-11 18:30:00', 1, 1),
(223, 'betis', 'villarreal', 'https://www.movistarplus.es/recorte/e/encuentro/eacadad4c273961ddbe24d7d63f27d53', 'https://www.movistarplus.es/recorte/e/encuentro/dd8ac7c76232934108847493e685ec54', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-11 21:00:00', 1, 1),
(224, 'almera', 'osasuna', 'https://www.movistarplus.es/recorte/e/encuentro/0197e03ebdce564e0104aedd5af4953c', 'https://www.movistarplus.es/recorte/e/encuentro/3e0bde3f3d29c424343c42e0aa819793', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-12 21:00:00', 1, 1),
(225, 'valladolid', 'cdiz', 'https://www.movistarplus.es/recorte/e/encuentro/6f46350f0f5cb86a33568278535b09bc', 'https://www.movistarplus.es/recorte/e/encuentro/8ecec5088fa45e9e2b99f04ad6ba0a69', 'DAZN LaLiga', 'GOL PLAY', NULL, NULL, NULL, '', '2022-09-16 21:00:00', 1, 1),
(226, 'mallorca', 'almera', 'https://www.movistarplus.es/recorte/e/encuentro/49b664c85568db81b87b78d483246fea', 'https://www.movistarplus.es/recorte/e/encuentro/0197e03ebdce564e0104aedd5af4953c', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-17 14:00:00', 1, 1),
(227, 'barcelona', 'elche', 'https://www.movistarplus.es/recorte/e/encuentro/5aac54d28c9e144ac90a2f6fdd2d12fb', 'https://www.movistarplus.es/recorte/e/encuentro/2da95fe3a5a1e7b265a75268fdd17b58', 'DAZN LaLiga', '', NULL, NULL, NULL, '', '2022-09-17 16:15:00', 1, 1),
(228, 'valencia', 'celta', 'https://www.movistarplus.es/recorte/e/encuentro/f23c8c1092dab48c202a401f3caf7a9a', 'https://www.movistarplus.es/recorte/e/encuentro/3b3f47fd00d31f49417c89ffa526cf39', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-17 18:30:00', 1, 1),
(229, 'athletic', 'rayovallecano', 'https://www.movistarplus.es/recorte/e/encuentro/4c1c17c61805ee51bd99c4da9e4edda6', 'https://www.movistarplus.es/recorte/e/encuentro/ffea1dc7f9a26ec87011a54977dd83bc', 'DAZN LaLiga', '', NULL, NULL, NULL, '', '2022-09-17 21:00:00', 1, 1),
(230, 'betis', 'girona', 'https://www.movistarplus.es/recorte/e/encuentro/eacadad4c273961ddbe24d7d63f27d53', 'https://www.movistarplus.es/recorte/e/encuentro/daba4f0f24601e08342dd5aa29eec554', 'DAZN LaLiga', '', NULL, NULL, NULL, '', '2022-09-18 14:00:00', 1, 1),
(231, 'villarreal', 'sevilla', 'https://www.movistarplus.es/recorte/e/encuentro/dd8ac7c76232934108847493e685ec54', 'https://www.movistarplus.es/recorte/e/encuentro/04ec4c467eb7bdcb1bafa5e0ec812160', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-18 16:15:00', 1, 1),
(232, 'realsociedad', 'espanyol', 'https://www.movistarplus.es/recorte/e/encuentro/f563af76d915a778dbd1e0e9d4eb427e', 'https://www.movistarplus.es/recorte/e/encuentro/0ff812a82970ee3419a4cf91cca97f0c', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-18 18:30:00', 1, 1),
(233, 'osasuna', 'getafe', 'https://www.movistarplus.es/recorte/e/encuentro/3e0bde3f3d29c424343c42e0aa819793', 'https://www.movistarplus.es/recorte/e/encuentro/9d2029f62626e66df435bd65a714a547', 'DAZN LaLiga', '', NULL, NULL, NULL, '', '2022-09-18 18:30:00', 1, 1),
(234, 'at.madrid', 'realmadrid', 'https://www.movistarplus.es/recorte/e/encuentro/99c50712d20ba5e5fa430ed714d97955', 'https://www.movistarplus.es/recorte/e/encuentro/4ce17a2143b4cdf075458c63c4b2feae', 'M+ LaLiga', '', NULL, NULL, NULL, '', '2022-09-18 21:00:00', 1, 1),
(236, 'barcelonasc', 'ldu quito', 'barcelonasc', 'ldu quito', 'GolTV Play', '', '', '', '', '', '2022-04-18 02:00:00', 17, 1),
(238, 'tcnicouniversitario', 'orense sc', 'tcnicouniversitario', 'orense sc', 'GolTV Play', '', '', '', '', '', '2022-04-19 02:00:00', 17, 1),
(240, 'lduquito', 'orense sc', 'lduquito', 'orense sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(241, 'emelec', 'cumbay fc', 'emelec', 'cumbay fc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(242, 'u.catlica', 'aucas', 'u.catlica', 'aucas', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(243, 'deportivocuenca', 'independiente del valle', 'deportivocuenca', 'independiente del valle', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(244, 'delfnsc', 'tcnico universitario', 'delfnsc', 'tcnico universitario', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(245, 'guayaquilcity', '9 de octubre', 'guayaquilcity', '9 de octubre', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(246, 'macar', 'mushuc runa', 'macar', 'mushuc runa', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(247, 'gualaceo', 'barcelona sc', 'gualaceo', 'barcelona sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(250, 'barcelonasc', 'macar', 'barcelonasc', 'macar', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(251, 'independientedelvalle', 'delfn sc', 'independientedelvalle', 'delfn sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(252, 'mushucruna', 'ldu quito', 'mushucruna', 'ldu quito', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(253, 'aucas', 'emelec', 'aucas', 'emelec', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(254, 'tcnicouniversitario', 'u. catlica', 'tcnicouniversitario', 'u. catlica', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(255, 'orensesc', 'gualaceo', 'orensesc', 'gualaceo', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(256, '9deoctubre', 'deportivo cuenca', '9deoctubre', 'deportivo cuenca', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(257, 'cumbayfc', 'guayaquil city', 'cumbayfc', 'guayaquil city', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(259, 'lduquito', 'independiente del valle', 'lduquito', 'independiente del valle', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(260, 'emelec', 'barcelona sc', 'emelec', 'barcelona sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(261, 'u.catlica', 'orense sc', 'u.catlica', 'orense sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(262, 'deportivocuenca', 'cumbay fc', 'deportivocuenca', 'cumbay fc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(263, 'aucas', 'tcnico universitario', 'aucas', 'tcnico universitario', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(264, 'delfnsc', '9 de octubre', 'delfnsc', '9 de octubre', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(265, 'guayaquilcity', 'mushuc runa', 'guayaquilcity', 'mushuc runa', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(266, 'macar', 'gualaceo', 'macar', 'gualaceo', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(268, 'barcelonasc', 'guayaquil city', 'barcelonasc', 'guayaquil city', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(269, 'independientedelvalle', 'macar', 'independientedelvalle', 'macar', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(270, 'mushucruna', 'emelec', 'mushucruna', 'emelec', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(271, 'tcnicouniversitario', 'deportivo cuenca', 'tcnicouniversitario', 'deportivo cuenca', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(272, 'gualaceo', 'u. catlica', 'gualaceo', 'u. catlica', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(273, 'orensesc', 'delfn sc', 'orensesc', 'delfn sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(274, '9deoctubre', 'ldu quito', '9deoctubre', 'ldu quito', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(275, 'cumbayfc', 'aucas', 'cumbayfc', 'aucas', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(277, 'emelec', 'orense sc', 'emelec', 'orense sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(278, 'independientedelvalle', 'tcnico universitario', 'independientedelvalle', 'tcnico universitario', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(279, 'deportivocuenca', 'barcelona sc', 'deportivocuenca', 'barcelona sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(280, 'aucas', 'mushuc runa', 'aucas', 'mushuc runa', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(281, 'delfnsc', 'ldu quito', 'delfnsc', 'ldu quito', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(282, 'guayaquilcity', 'gualaceo', 'guayaquilcity', 'gualaceo', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(283, 'macar', '9 de octubre', 'macar', '9 de octubre', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(284, 'cumbayfc', 'u. catlica', 'cumbayfc', 'u. catlica', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(286, 'lduquito', 'guayaquil city', 'lduquito', 'guayaquil city', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(287, 'barcelonasc', 'aucas', 'barcelonasc', 'aucas', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(288, 'u.catlica', 'emelec', 'u.catlica', 'emelec', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(289, 'mushucruna', 'independiente del valle', 'mushucruna', 'independiente del valle', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(290, 'tcnicouniversitario', 'macar', 'tcnicouniversitario', 'macar', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(291, 'gualaceo', 'delfn sc', 'gualaceo', 'delfn sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(292, 'orensesc', 'deportivo cuenca', 'orensesc', 'deportivo cuenca', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(293, '9deoctubre', 'cumbay fc', '9deoctubre', 'cumbay fc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(295, 'emelec', 'tcnico universitario', 'emelec', 'tcnico universitario', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(296, 'independientedelvalle', '9 de octubre', 'independientedelvalle', '9 de octubre', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(297, 'deportivocuenca', 'mushuc runa', 'deportivocuenca', 'mushuc runa', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(298, 'aucas', 'gualaceo', 'aucas', 'gualaceo', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(299, 'delfnsc', 'u. catlica', 'delfnsc', 'u. catlica', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(300, 'guayaquilcity', 'orense sc', 'guayaquilcity', 'orense sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(301, 'macar', 'ldu quito', 'macar', 'ldu quito', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(302, 'cumbayfc', 'barcelona sc', 'cumbayfc', 'barcelona sc', 'GolTV Play', '', '', '', NULL, '', '2022-04-18 00:00:00', 17, 1),
(303, 'empoli', 'hellas', '', '', '', '', '', '', '', '', '2022-08-31 10:30:00', 7, 1),
(304, 'sampdoria', 'lazio', '', '', 'espnsur', '', '', '', '', '', '2022-08-31 10:30:00', 7, 1),
(305, 'udinese', 'fiorentina', '', '', '', '', '', '', '', '', '2022-08-31 10:30:00', 7, 1),
(306, 'juventus', 'spezia', '', '', 'espnsur', '', '', '', '', '', '2022-08-31 12:45:00', 7, 1),
(307, 'napoli', 'lecce', '', '', '', '', '', '', '', '', '2022-08-31 12:45:00', 7, 1),
(308, 'viktoria', 'bayern', '', '', '/', '/', '/', '', '', '', '2022-08-31 12:46:00', 18, 1),
(309, 'toulouse', 'PSG', '', '', 'espn3sur', '', '', '', '', '', '2022-08-31 13:00:00', 10, 1),
(311, 'mxico', 'paraguay', 'mxico', 'paraguay', 'espn3sur', 'mlcamp', '', '278', '', '', '2022-08-31 19:00:00', 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `categoryIcon` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`, `categoryIcon`) VALUES
(1, 'Noticias', 'newspaper'),
(2, 'AcciÃ³n', 'skull'),
(3, 'Sin CategorÃ­a', 'triangle'),
(4, 'Religioso', 'add'),
(5, 'Outdoor', 'log-out'),
(6, 'Infantil', 'color-palette'),
(7, 'Auto', 'browsers'),
(8, 'MÃºsica', 'musical-notes'),
(9, 'Cocina', 'fast-food'),
(10, 'General', 'bonfire'),
(11, 'Deportes', 'bicycle'),
(12, 'Series', 'albums'),
(13, 'Comedia', 'happy'),
(14, 'Entretenimiento', 'albums'),
(15, 'EducaciÃ³n', 'book'),
(16, 'Ciencia', 'telescope'),
(17, 'PelÃ­culas', 'videocam'),
(18, 'Negocios', 'bag-handle'),
(19, 'Legislativo', 'book'),
(20, 'Documentales', 'school'),
(21, 'Familia', 'accessibility'),
(22, 'Adultos', 'bug'),
(24, 'Cine', 'videocam'),
(25, 'Premium', 'sparkles'),
(26, 'Cultura', 'book');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `channels`
--

CREATE TABLE `channels` (
  `channelId` int(11) NOT NULL,
  `channelName` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `channelUrl` text COLLATE utf8_spanish2_ci NOT NULL,
  `epg` text COLLATE utf8_spanish2_ci,
  `channelImg` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `category` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `channels`
--

INSERT INTO `channels` (`channelId`, `channelName`, `channelUrl`, `epg`, `channelImg`, `category`, `country`, `type`) VALUES
(1, 'ESPN', 'https://irpc.ga/mg/?url=espn-en-vivo', 'espn_sur', 'https://images.ctfassets.net/ugxciox4nyye/3NCwVCRCmBEov5n6ou5hAA/c4270c0c6d2988c47c6350ca36175180/13_ESPN.png?fm=webp&q=80', 11, 4, 3),
(2, 'ESPN 2', 'https://irpc.ga/mg/?url=espn-2-en-vivo', 'espn_2_sur', 'https://images.ctfassets.net/ugxciox4nyye/4mdSmIihFejWNGVPiIMkvz/d76a823f16543c95ec31e0cea741201a/14_ESPN2.png?fm=webp&q=80', 11, 4, 3),
(3, 'ESPN 3', 'https://irpc.ga/mg/?url=espn-3-en-vivo', 'espn_3_sur', 'https://images.ctfassets.net/ugxciox4nyye/3NCwVCRCmBEov5n6ou5hAA/c4270c0c6d2988c47c6350ca36175180/13_ESPN.png?fm=webp&q=80', 11, 4, 3),
(4, 'ESPN +', 'https://irpc.ga/mg/?url=espn-extra-en-vivo', 'espn_extra_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/3NCwVCRCmBEov5n6ou5hAA/c4270c0c6d2988c47c6350ca36175180/13_ESPN.png?fm=webp&q=80', 11, 4, 3),
(5, 'Fox Sports', 'https://irpc.ga/mg/?url=fox-sports-en-vivo', 'fox_sports_sur', 'https://images.ctfassets.net/ugxciox4nyye/4ldZDRBks3tZobn7OFbJFv/0299b77cf058f80501f191bb27f9573f/17_FoxSports.png?fm=webp&q=80', 11, 4, 3),
(6, 'Fox Sports 2', 'https://irpc.ga/mg/?url=fox-sports-2-en-vivo', 'fox_sports_2_sur', 'https://images.ctfassets.net/ugxciox4nyye/4aUalIxOYo8Wm9dBLL4Jc/645dbbb7edb8db65c14c9fa3a0f6ef40/18_FoxSports2.png?fm=webp&q=80', 11, 4, 3),
(7, 'Fox Sports 3', 'https://irpc.ga/mg/?url=fox-sports-3-en-vivo', 'fox_sports_3_sur', 'https://images.ctfassets.net/ugxciox4nyye/240XGo19vZRnYoMKvObsC6/965379e7c2e8003dbc580d7c41ef0bef/19_FoxSports3.png?fm=webp&q=80', 11, 4, 3),
(8, 'Fox Sports +', 'https://irpc.ga/mg/?url=fox-sports-en-vivo', 'fox_sports_premium_argentina', 'https://images.ctfassets.net/ugxciox4nyye/6sXhIs62R8cjNTvmWtvGmG/c5694f0d5987ad0c7c1b9fc00be42d7d/Canal_-_Fox_Sport_Premium.png?fm=webp&q=80', 11, 4, 3),
(9, 'TNT Sports [GEO]', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9lZGdlLWxpdmUxNS1zbC5jdmF0dHYuY29tLmFyL2xpdmUvYzNlZHMvVE5UX1Nwb3J0c19IRC9TQV9MaXZlX2Rhc2hfZW5jL1ROVF9TcG9ydHNfSEQubXBk&key=ZjdjOGQzZWE0MmYyYTRkYTNiMTQyM2EzMjM5N2JkM2E=&key2=OTBlNmUwZDhiMWQ5ODhiNjE1MTIyMGVlNmViMmU1NmU=', 'tnt_sports', 'https://images.ctfassets.net/ugxciox4nyye/6iImzHdrQ2ec0JbRAFKEDG/354cf6196b96de87f6bc2e195e7e866b/Premium_02_TNTSports-color.png?fm=webp&q=80', 11, 4, 3),
(10, 'TV Max', 'https://bcovlive-a.akamaihd.net/7482a528b34142c9a11b4285307632d0/us-west-2/6058004209001/playlist_dvr.m3u8', 'tvmax', 'https://imagenes.gatotv.com/logos/canales/claros/9_de_panama.png', 11, 4, 1),
(11, 'Depor TV', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(DEPORTV)/index.m3u8', 'deportv', 'https://images.ctfassets.net/ugxciox4nyye/29KPKoeTvsx3PuHk5maUui/2fb421fbd5c8059d6575330ee6ec7d85/20_DeporteTV.png?fm=webp&q=80', 11, 4, 1),
(12, 'Turbo', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtY2JjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEwODEvbWFuaWZlc3QubXBk&key=ZDMyZDgxNWQxZjdmNTMyNWJhNzM1NjI1MzQ2NjJjOTI=&key2=NzVlNjZhNGVkNzg4MGM3MTY1NWQyNGU1MmNhZDNiZDM=', 'discovery_turbo_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/526LGpaFoXNUdk1j6WA0Hb/78dae648589cac8f4d3339186eb5e49f/22_DiscoveryTurbo.png?fm=webp&q=80', 11, 4, 3),
(13, 'Tooncast', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9Ub29uY2FzdC9TQV9MaXZlX2Rhc2hfZW5jXzJBL1Rvb25jYXN0Lm1wZA==&key=MTA2MzhhNzIyZWI1NGM2NGJmYjBlN2E3NzQ4MzY4NmE=&key2=NDFhN2QzZDUyMmUxOTIxNWI3ZThmNjExYjY5MDJkNjE=', 'tooncast', 'https://images.ctfassets.net/ugxciox4nyye/7IRItnDZbY1YV1Zf8NA0eu/24b16ed7317309e358903eaaea4f7e57/39_Tooncast.png?fm=webp&q=80', 6, 4, 3),
(14, 'Disney Channel', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEwODQvbWFuaWZlc3QubXBk&key=N2QwYzQ5Nzc4YmM0NTFkMmI1ZWE0NDM0NmU3MmE4NWQ=&key2=ZDVkNWVkNDA3ODhlMDdlYWYzYjA2MTZiNmFiYzllMWU=', 'disney_channel_argentina', 'https://images.ctfassets.net/ugxciox4nyye/7H6alRacRfnIWHdk0ycMid/e109bddeed0558c386272c6c2d597604/26_DisneyCh.png?fm=webp&q=80', 6, 4, 3),
(15, 'Disney JR [GEO]', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEwODcvbWFuaWZlc3QubXBk&key=YTA3ZDhiZmUyZjk5NTZmMjhjYTExNDY2YjRmNTIwZDU=&key2=MTFmZGQ4OTAwZDFlYmE5YTZjOTU1NTFmNDE4ZGJmMDc=', 'disney_junior_argentina', 'https://images.ctfassets.net/ugxciox4nyye/2jh9KUAX0pFmFIQdx0hYAN/755b89fb275f55001259b7386904495d/28_DisneyJr.png?fm=webp&q=80', 6, 4, 3),
(16, 'Cartoon Network [GEO]', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtY2JjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEwMzcvbWFuaWZlc3QubXBk&key=ZWRjNjZiZTVkY2FjNWNkZmFjNWNjMjJhOTQxM2FlZjk=&key2=OTQ4NjhkMTQ3ODlmMGFlYzM4ODY3ZTUzYzkxMWQwYTg=', 'cartoon_network_argentina', 'https://images.ctfassets.net/ugxciox4nyye/12DDQ6rj1D1XJgbfFJlE7Y/25ac07e1aba869cb590ecece1418a9f4/35_CartoonNetworkHD.png?fm=webp&q=80', 6, 4, 3),
(17, 'Nickelodeon', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzExNzUvbWFuaWZlc3QubXBk&key=Y2ZjYWVkZjY3NTc0NWI5YzgxZTVhNTViZGU4ZjUzMGI=&key2=MjQwZWMyMTlkZDcxNjcwNzUwZjM3YWZlODNmZWFkMTY=', 'nickelodeon_argentina', 'https://images.ctfassets.net/ugxciox4nyye/4FfqGZIakO1SIpDRZH4EZE/08f366576db2f3d05b7e56e2197454cc/31_NickHD.png?fm=webp&q=80', 6, 4, 3),
(20, 'TLC', 'https://edge4-sl.cvattv.com.ar/live/c6eds/TLC/SA_SAGEMCOM/TLC.m3u8', 'tlc_argentina', 'https://images.ctfassets.net/ugxciox4nyye/3MQOt9I55Djj4QJ6S8CHll/35993083e010f6578912712b754f94a9/Canal_-_DiscoveryTLC.png?fm=webp&q=80', 14, 4, 1),
(22, 'FX', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jM2Vkcy9GWEhEL1NBX0xpdmVfZGFzaF9lbmMvRlhIRC5tcGQ=&key=OWFiOWM0MmM3MTNlMGZiNTUxN2RjNzdjYzE5ZDY3NTU=&key2=ZDhjMjcxYjgyMzg3ZTYwOWI2YzE5ZTVlNzkyNDBhZmY=', 'fx_argentina', 'https://images.ctfassets.net/ugxciox4nyye/27qdyEGErOYlZ0ZIJ9NzCg/aaa55232741d8e6cd434c8e96309feaf/45_FXHD.png?fm=webp&q=80', 24, 4, 3),
(23, 'Cine Canal', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jM2Vkcy9DaW5lY2FuYWxIRC9TQV9MaXZlX2Rhc2hfZW5jL0NpbmVjYW5hbEhELm1wZA==&key=NjAwM2U5MmRkMGQ5ZjU0ODMyOTAxNWM5ZTE1ZGQ1Nzg=&key2=MjEzY2Y4NWNiNWY5ZmU1Njk3NTcwMDRhNzdlMDU5NDg=', 'cinecanal_argentina', 'https://images.ctfassets.net/ugxciox4nyye/6pmMToHcLZH3cxt2homSk6/8fc78b9f2aa45a7cca4f21aebbfe8809/47_Cinecanal.png?fm=webp&q=80', 24, 4, 3),
(24, 'TCM', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9UQ00vU0FfTGl2ZV9kYXNoX2VuY18yQS9UQ00ubXBk&key=YTVmNDRhNWUzMDcxNGNmM2JjZWU3YzdmMTVhMDhiNGU=&key2=YzNjMTQxYWU5NDFhYjk3NTAzMzljM2FmNDVhNjVjZTI=', 'tcm_argentina', 'https://images.ctfassets.net/ugxciox4nyye/4g2vJw5NXP7oDqfSP3jwLg/48fe2c3b9582624afcb12e4f1b082f09/48_TCM.png?fm=webp&q=80', 24, 4, 3),
(25, 'TNT', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jM2Vkcy9UTlRfSERfQXJnL1NBX0xpdmVfZGFzaF9lbmMvVE5UX0hEX0FyZy5tcGQ=&key=ZmFhZDE3MjJhNTc1ZjRkOWVjN2I3NzRkYjYzYzg3OWM=&key2=Y2YwMTg0ODMwMzQ0YmEzNmFkMmZmZWY5ZGQyZGQ5ZDA=', 'tnt_argentina', 'https://images.ctfassets.net/ugxciox4nyye/1Xi29R82K8IWwZlBPRdGMz/209d344e76cd15a2ad8031892f9715b5/49_TNTHD.png?fm=webp&q=80', 24, 4, 3),
(26, 'TNT Series', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jM2Vkcy9UTlRTZXJpZXMvU0FfTGl2ZV9kYXNoX2VuYy9UTlRTZXJpZXMubXBk&key=NWMxNGQ2YWViMTliZjExM2VkZjkxYTdiNTQ0MjUzY2I=&key2=OGQ3NzZkNmY5YzVjODQwZWJlODhkNzY3ZGQ3MzE2OTI=', 'tnt_series_argentina', 'https://images.ctfassets.net/ugxciox4nyye/7ELLroSkVJCu1mlad72bNT/0d38b46c9d952bce0ddbc02b46119d40/50_TNTSeries.png?fm=webp&q=80', 24, 4, 3),
(27, 'Space', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jM2Vkcy9TcGFjZS9TQV9MaXZlX2Rhc2hfZW5jL1NwYWNlLm1wZA==&key=MDk0MmU0ZWNkMWJkMzU2N2U4Zjk0NDdmNDVjMjBhMTI=&key2=ZWZjYTYyNjRmMDRjZjczNzNkZTBjMzBlYzc5ZmU5MDk=', 'space_argentina', 'https://images.ctfassets.net/ugxciox4nyye/767olJ7V8RQkQZkhwA2PUd/c4081adb1d380eb81b2d631b50d7f22b/51_Space.png?fm=webp&q=80', 24, 4, 3),
(28, 'AXN', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jN2Vkcy9BWE5IRC9TQV9MaXZlX2Rhc2hfZW5jXzJBL0FYTkhELm1wZA==&key=MDNlNzdiNWJiZjUxMzVhODVkNTg3YzVhZjJmMmY3MzA=&key2=MWRkMWFiMTkzOGE3OTFkMDNmMDllYjg4NDc4YjQ4ODA=', 'axn_argentina', 'https://images.ctfassets.net/ugxciox4nyye/5ACGfVlFTHfyv2ktSrDufK/32e9f43dd323e82dbf42b7169ed1a5ff/53_AXNHD.png?fm=webp&q=80', 25, 4, 3),
(29, 'Cinemax', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly8xMDQ2LXZvcy5kdHZvdHQuY29tL0RBU0gvbWFuaWZlc3QubXBk&key=YTdiMDVlMzY2NzkwMzcwMGFmMzUzNTZkZDA0ZGM1NDE=&key2=NjJiNTlmMDYxODQ4NDQ1MmE3ZTczNWQxZmFmM2UzYTQ=', 'cinemax_argentina', 'https://images.ctfassets.net/ugxciox4nyye/6RYXhIj8X3iJXwJPaFpvuJ/519fc4b700613824c5b9f5fe2d35915e/54_Cinemax.png?fm=webp&q=80', 25, 4, 3),
(30, 'Universal', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9TdHVkaW9fVW5pdmVyc2FsL1NBX0xpdmVfZGFzaF9lbmMvU3R1ZGlvX1VuaXZlcnNhbC5tcGQ=&key=ZDliNTQxZTNjZDA2NGQ1Njk4NDNkYTQyNzg4ZDQyNjM=&key2=YmJhNWQyNmFkNTA1MWZiM2YyY2Y3ZTNkZDhhNGE3ZDg=', 'studio_universal_argentina', 'https://images.ctfassets.net/ugxciox4nyye/3xbmRhqiIzmq92SsYm9qdb/4746ff2397a15eca1cea47c50eebffd4/57_Universal.png?fm=webp&q=80', 24, 4, 3),
(31, 'SyFy', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtY2JjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEyMTEvbWFuaWZlc3QubXBk&key=M2Y5MGFhZmQwYWI4NWM2ZDkyZTkzMTE0ZTI3ODkxN2I=&key2=OWIxZTQxZThhNTVhMTgyZjY5MDAwYmRjOTMwNGUzY2M=', 'syfy_argentina', 'https://images.ctfassets.net/ugxciox4nyye/1DYLLjssPwaKSUZcHCvYSc/370fcadeb79594c94da41eaf50d76c4f/58_SYFY.png?fm=webp&q=80', 24, 4, 3),
(32, 'Telemundo', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly8xMjE3LXZvcy5kdHZvdHQuY29tL0RBU0gvbWFuaWZlc3QubXBk&key=NTc2YjUzNjFiNjI3M2QyZmJiMTRhYWU2ZThlYjY0NmE=&key2=MWUwYzU1OTFmNTcwMTE2ZGJmOWYyMmRhMjZkMTcyMjY=', 'telemundo_argentina', 'https://rndserv.xyz/img/telemundo.png', 10, 4, 3),
(33, 'Volver', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9Wb2x2ZXIvU0FfTGl2ZV9kYXNoX2VuYy9Wb2x2ZXIubXBk&key=MTk0ZTUzMTg0YTQyNGNlNjk4OWFkODJjNWYyOGZiYzU=&key2=NjVkNjBjNWNjNGRlMDMxMTcyYmUwYTZhNTFlZGJkZmU=', 'htv', 'https://images.ctfassets.net/ugxciox4nyye/Mq0oDJsOGLGwmqR3jljjd/3b623163d3192f59a41720d0418c2813/canal-volver.png?fm=webp&q=80', 24, 4, 3),
(34, 'TVE', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9UVl9Fc3BhbmEvU0FfTGl2ZV9kYXNoX2VuYy9UVl9Fc3BhbmEubXBk&key=NTNlMGEzNzQxZTJlNGZmNTg0M2YxNjViNTMzMDkwODg=&key2=NDUwOTVjYWFiZDlhMzU5Y2Q3ZWEzOTEwZDg2NWQ2NDM=', 'tve', 'https://images.ctfassets.net/ugxciox4nyye/7jOLhFfEgvIJD81fcVjRpD/95fddfd8e7b896ea3dca3c6ee63fbe42/62_TVE.png?fm=webp&q=80', 24, 4, 3),
(35, 'Star TVE', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(STAR_TVE_HD)/index.m3u8', 'star_tve', 'https://images.ctfassets.net/ugxciox4nyye/5HmX5Cx0URS2hZ4HkRI9YR/0911e4b7507cad496b28c8e2051e289a/63_StarTVE.png?fm=webp&q=80', 24, 4, 1),
(36, 'AMC', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jM2Vkcy9BTUMvU0FfTGl2ZV9kYXNoX2VuYy9BTUMubXBk&key=MWZhNmE4NmZkODBiNmQxNDI1ZGRlNzQ0ODJiNWRjOWM=&key2=NzQ0YzM2MzZkNTdhNjUxYWI0NDRjZjlmZTVmOTViMzM=', 'amc_argentina', 'https://images.ctfassets.net/ugxciox4nyye/rbHuH1zjZ5kt0WupDBqWO/d6a34cf574515559d2754d4d8a4d961e/65_AMC.png?fm=webp&q=80', 24, 4, 3),
(38, 'Paramount', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtY2JjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzExODEvbWFuaWZlc3QubXBk&key=NjgxODhiM2JiNzk0NTNjYWI3YjI2ZWU5MjlhMjVlZDQ=&key2=NjEwYzk1MTczN2NiOWUyMjFmMDdjOTg2YjZjNjZmN2Q=', 'paramount_argentina', 'https://images.ctfassets.net/ugxciox4nyye/76LedPqmnaFTMC5WzIuHaj/985f557cf7d4b35aeb5340a5978d2e98/70_ParamountChannel.png?fm=webp&q=80', 24, 4, 3),
(39, 'Comedy Central', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtY2JjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEwNTMvbWFuaWZlc3QubXBk&key=Y2VmNDhlN2NmZGJkNTcwMTg3YTM5YmZmM2U0MzNmMDU=&key2=ODNmYmM4MTk4OTI3ZmRjNDY5ZTc5NjhkNzUwM2M0ZjY=', 'comedy_central_argentina', 'https://images.ctfassets.net/ugxciox4nyye/3SbL9dYy1msHrR6CNYnqcE/01d4b5df1c775d40721449f71aadeda5/71_ComedyCentral.png?fm=webp&q=80', 24, 4, 3),
(41, 'HBO', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jM2Vkcy9IQk9IRC9TQV9MaXZlX2Rhc2hfZW5jL0hCT0hELm1wZA==&key=ZDIxMzUyZGFkZjY4YTY1MGU2ZTIzNzU4NWMzYTFiODk=&key2=MTNjMTYzYTFlMDdlYmRkMGI3NWIwNzliZDU2Yjg0ZWI=', 'hbo_argentina', 'https://images.ctfassets.net/ugxciox4nyye/7icW4eGEsDwYW0SGbEizl0/11e491f83fef667f6b5242efe73ce4c5/Premium_04_HBO.png?fm=webp&q=80', 25, 4, 3),
(42, 'HBO 2', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9IQk9fMi9TQV9MaXZlX2Rhc2hfZW5jL0hCT18yLm1wZA==&key=YzkwY2M1N2FkMmM0MzZlNWE3N2RiMmY4ZDlkYjJkODU=&key2=MDRmNmM3Mzk4NGJkY2ZmZDAxMzA1MDYwODQ5NzkzNWQ=', 'hbo_2_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/69ZCAfInUfsT4Q4HKNqenB/e663327079caa7727a6c92f421375c47/Premium_08_HBO2.png?fm=webp&q=80', 25, 4, 3),
(43, 'HBO Family', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9IQk9fRmFtaWx5L1NBX0xpdmVfZGFzaF9lbmMvSEJPX0ZhbWlseS5tcGQ=&key=NTM1NDczMTMyZjY4MDgyMTYwYjQ4OTQ4MmNhMzVmOGU=&key2=ZTkwZmQ5MWZjZDNmYzgwOWJlZDJiMWMwZDM3ZjcyOTc=', 'hbo_family_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/5bKzSwd0Mu1shRgqL7xwWD/80c78ad02cdc722d2035cbe4395fb5f8/Premium_03_HBOFamily.png?fm=webp&q=80', 25, 4, 3),
(44, 'HBO Plus', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9IQk9fUGx1cy9TQV9MaXZlX2Rhc2hfZW5jXzJBL0hCT19QbHVzLm1wZA==&key=ZjBlN2Y3ZDQ1ODk5MGVkZmFiN2I5OGI0MTI1NjQ2MTU=&key2=NzkyMDU3NTRiN2Y4NGE2MjY2MWMyZGJlOWRlNWRkNWQ=', 'hbo_family_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/5bKzSwd0Mu1shRgqL7xwWD/80c78ad02cdc722d2035cbe4395fb5f8/Premium_03_HBOFamily.png?fm=webp&q=80', 25, 4, 3),
(45, 'HBO Signature', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9IQk9fU2lnbmF0dXJlL1NBX0xpdmVfZGFzaF9lbmMvSEJPX1NpZ25hdHVyZS5tcGQ=&key=ZTg2NjQ5OWZiYzExNDlmNDk5ODk2NzIwNzVhYTNhNjg=&key2=ZDJkZDVjOTU2MjNjNjM0MzI0MDk4MWMyMjAyZmMzMTE=', 'hbo_signature_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/77tiTKhe5p80XL5mgv2GX4/17c2b387b7a33cb13dbd5abbec8fe5ba/Premium_07_HBOSignature.png?fm=webp&q=80', 25, 4, 3),
(46, 'Universal Premiere', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEyNTYvbWFuaWZlc3QubXBk&key=ZDA4MGJlMjhhMGZjNTk3MGJmMWRlODk3ZjgwZDQwYmQ=&key2=YWI4MTg3ZDUwZDMxMWQzMGJjMGQ3ZGM2ZWI1Njk3ZDE=', 'universal_premiere', 'https://images.ctfassets.net/ugxciox4nyye/6ZzSgskyQeKxH1jVARP4Be/f5e9c9bd641b4b6b524a2677e0f60842/universal-premiere.png?fm=webp&q=80', 25, 4, 3),
(47, 'Universal Cinema', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEyNTMvbWFuaWZlc3QubXBk&key=Y2UwYTdjODgzZTJhNTQzMGJiYTk3YTNkNjhlMGRhZjg=&key2=ZTMwZGQ0OTA4ZTY2NzYzNzM2OWRmYjY1ODJmNTRkNjQ=', 'universal_cinema', 'https://images.ctfassets.net/ugxciox4nyye/60dStMuZCfyo3DqEMD0RFa/aa4713364373db825f7983a2086890b5/universal-cinema.png?fm=webp&q=80', 25, 4, 3),
(48, 'Universal Comedy', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEyNTIvbWFuaWZlc3QubXBk&key=MjUyZGRiNmU3OWRkNTM1MWJiOTVlYWMxMTE1ZDQxOTE=&key2=ZjIwNTFmMzg2MTJmMGE3MWNkZTcxNzRhM2M2YzQ1MjY=', 'universal_comedy', 'https://images.ctfassets.net/ugxciox4nyye/3E162p4ysAkaik0txYYN0k/66dc9be0cc3d18c163e5d9f1f8b97b78/universal-comedy.png?fm=webp&q=80', 25, 4, 3),
(49, 'Universal Crime', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEyNTQvbWFuaWZlc3QubXBk&key=ZTI0MDJlZTM3MzZjNTZiM2JkNWQ1MGFjZjIzMDA5NjE=&key2=MzI5OTM3ZTVkMjM2YTM1ZmZlOTFkNmNkNzEyNWJlY2M=', 'universal_crime', 'https://images.ctfassets.net/ugxciox4nyye/3gBoVelP3w7EOJ9cF2AFxL/b7a0f9e1db82041c815a8754ed9abd05/universal-crime.png?fm=webp&q=80', 25, 4, 3),
(50, 'Universal Reality', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEyNTUvbWFuaWZlc3QubXBk&key=YzA0MDJiYTA3ZGFkNWIwY2IyMjdhZjI0OGVhMmM1ZWU=&key2=YWI0NjNmYjc4ZTdlMTdiNWUwZWU0ZWE4YmNhMzVlYzk=', 'universal_reality', 'https://images.ctfassets.net/ugxciox4nyye/26kcx0bBMEXfcFCR7gea7t/1c1b48583ea217a1a21020d12a8e0d3a/universal-reality.png?fm=webp&q=80', 25, 4, 3),
(51, 'Penthouse', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(PENTHOUSE)/index.m3u8', 'penthouse', 'https://images.ctfassets.net/ugxciox4nyye/6FJ6qwalqD61P1dCugzmnh/926e824e73ad5d3d5d553b290969c0b8/Premium_21_Penthouse.png?fm=webp&q=80', 25, 4, 1),
(52, 'Brazzers', 'https://videos.pornworms.com/media/videos/mp4/2289.mp4', 'brazers', 'https://images.ctfassets.net/ugxciox4nyye/MIH0nuMzgv498Fp71F48p/a895dc3894cf3e66005123faed05a6aa/Premium_20_Brazzers.png?fm=webp&q=80', 25, 4, 1),
(53, 'PlayBoy', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9QbGF5Ym95Ly9TQV9MaXZlX2Rhc2hfZW5jL1BsYXlib3kubXBk&key=ODU3N2Q4MWVhZjMzNDM2ZDlmMWU0ODIzNjA2ODVhN2M=&key2=ZjYwOGEwYWM3MDNjZmFhZjk0NDI1NzRkOWEyYjg3ZmI=', 'playboy', 'https://images.ctfassets.net/ugxciox4nyye/5MuRMAvv3VDdgRF8UZxs6a/03e0c37dec9ff76ca5c9b2b40ad57c63/Premium_22_PlayboyHD.png?fm=webp&q=80', 22, 4, 3),
(54, 'Sextreme', '//cdn.prepro.cvattv.com.ar/live/vod/Sextreme/SA_Live_WebVTT_FTA/Sextreme.m3u8', 'sextreme', 'https://images.ctfassets.net/ugxciox4nyye/5ykA3w0nH0p6kgWoUhfTdp/64048aa59e26565580b42c6880c0ffdf/Premium_23_Sextreme.png?fm=webp&q=80', 22, 4, 1),
(55, 'Venus', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9WZW51cy9TQV9MaXZlX2Rhc2hfZW5jXzJBL1ZlbnVzLm1wZA==&key=MzQyMzdkMmFlNjY4NGVlN2EwMTFmNWI5YzdjNDNlNmQ=&key2=MDVkOTczZDk4NzkxNTEyMGU1Njc4ODBmNTBhNDIyYWY=', 'venus', 'https://images.ctfassets.net/ugxciox4nyye/7olIHQjlSCrk9kFneXLllk/0182018d0d8f32a49188f3b30ba0b6d6/Premium_24_Venus.png?fm=webp&q=80', 22, 4, 3),
(56, 'MTV Hits', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9NVFZfSGl0cy9TQV9MaXZlX2Rhc2hfZW5jL01UVl9IaXRzLm1wZA==&key=NjEwMDhkZmM4Njc1NDRjZDg3MmRlOTliMWYyYjgyY2Y=&key2=NzE2NDQ5NzU2MzE2YjkxYzU0ODAzYWFhMjJhMmZiZjA=', 'mtv_hits', 'https://images.ctfassets.net/ugxciox4nyye/33QT9mcUIUX6ezV5xXA61r/6da57dc09d602d6ba128357517588d3c/115_MTVHits.png?fm=webp&q=80', 14, 4, 3),
(57, 'Discovery Science', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9EaXNjb3ZlcnlfU2NpZW5jZS9TQV9MaXZlX2Rhc2hfZW5jXzJBL0Rpc2NvdmVyeV9TY2llbmNlLm1wZA==&key=NDZiYTQwOWZiMDRlNDBmYjg2YjQ2NmQ5N2UzYTk1ODg=&key2=ZjEyOWZiOWI1ZDIxM2UyMGUyYWJlNTI5YjhjZjI1OTc=', 'discovery_science_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/2Epkdd93g9ercbqDzKQFoe/36c820d026574873c07232d83a9e9cd1/89_DiscoveryScience.png?fm=webp&q=80', 14, 4, 3),
(58, 'Discovery Theater', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9UaGVhdGVyX0hEL1NBX0xpdmVfZGFzaF9lbmMvVGhlYXRlcl9IRC5tcGQ=&key=NTI3OWMwNWVhNTFjNGRhZThlN2ZhNmJlODg0NDgwODk=&key2=YjI4ZGZhZmJhNGI4NDhkZmQ1ZDdjMTc3ZWJmMTkxMDg=', 'discovery_theater_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/eg0Qo0QB4c3KAVMz6lZIU/4b374c4a0dc4ae278db863e404364285/91_DiscoveryTheater.png?fm=webp&q=80', 14, 4, 3),
(60, 'Discovery World', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9EaXNjb3ZlcnlfV29ybGRfSEQvU0FfTGl2ZV9kYXNoX2VuY18yQS9EaXNjb3ZlcnlfV29ybGRfSEQubXBk&key=MzRlZTk0YzIyNjMzNDVmN2EzYTU5MDY2MTI2NGU0OTA=&key2=NTY3NTdkNjU2YTY5N2FiN2EyZTVlMDgzYjVkMjFiYjU=', 'discovery_world_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/1Np2cHnQxvzXiPeMMxuJpn/0d128c7aad11e845b0af560b64207aba/90_DiscoveryWorld.png?fm=webp&q=80', 14, 4, 3),
(61, 'HBO Mundi', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9IQk9fTXVuZGkvU0FfTGl2ZV9kYXNoX2VuYy9IQk9fTXVuZGkubXBk&key=NzgyMWIyNjYyMTQ4ZmUzMzNkNTE5MWFjYmI4YTVjMWY=&key2=YWU0M2YzZTI1NDUyMzdlYmRhNThiMTM4MTNiNWQzMjg=', 'hbo_mundi', 'https://images.ctfassets.net/ugxciox4nyye/26mE7OYl09nkFyQcGMv4mo/4190f92a6b036b9c6f710a6849490376/Premium_05_HBOMundi.png?fm=webp&q=80', 25, 4, 3),
(62, 'HBO Xtreme', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9IQk9fRXh0cmVtZS9TQV9MaXZlX2Rhc2hfZW5jL0hCT19FeHRyZW1lLm1wZA==&key=ZDUwNDAxMWJiZWY0NjdjMGRlM2E3NTM0ZTMwMmE2ZDQ=&key2=MzM0MTAzZTJhYmUxNmZhYTdmOWFiMmUzMDk3YzVhNTg=', 'hbo_xtreme', 'https://images.ctfassets.net/ugxciox4nyye/6jfONrEkrlw7SiKxsIsZr1/dea17656d92bae154876d07dc1391863/Premium_09_HBOExtreme.png?fm=webp&q=80', 25, 4, 3),
(63, 'HBO Pop', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jN2Vkcy9IQk9fUE9QL1NBX0xpdmVfZGFzaF9lbmMvSEJPX1BPUC5tcGQ=&key=ZjRlMWNlNWNlZjdlOWExMTBmZTk2OGY4ODgxYjIxZmE=&key2=NmJiZTIwNjJiMTUwYjExNDk2Y2RkNWZiZGQ5Yzg5ZDY=', 'hbo_pop', 'https://images.ctfassets.net/ugxciox4nyye/3OamYggD5kfGpnHPj6LcN6/c06f94dbe8efe062bd7d85825acb283e/Premium_10_HBOPOP.png?fm=webp&q=80', 25, 4, 3),
(64, 'Gourmet', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly8xMDkzLXZvcy5kdHZvdHQuY29tL0RBU0gvbWFuaWZlc3QubXBk&key=YWZiMzc4ZWZjNGM5Mzc5OTlhOTIzN2E3MzRmOWE2N2E=&key2=M2I2Y2EwMmU1YjA1ODljYWIwZGQzMmRiNDUzMDg4ODQ=', 'elgourmet', 'https://images.ctfassets.net/ugxciox4nyye/1YidEkapW8T04qZBXENP7N/2505de77bd51eb0ed539eda83f2687f3/79_ElGourmet.png?fm=webp&q=80', 14, 4, 3),
(65, 'A&E', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jN2Vkcy9BRUhEL1NBX0xpdmVfZGFzaF9lbmMvQUVIRC5tcGQ=&key=ZGIxMjAzNTYyN2E0YjNkNzE5OGI3NjFmMzZiNGEyOTA=&key2=ODBjYTc2MWE4NzU5OTJhYzBlNTBiMDg1MWQ1NTYzZmU=', 'a_y_e_argentina', 'https://images.ctfassets.net/ugxciox4nyye/2WywBmAu4XrHLK8Env2Yys/84a7f4f36e45ba0cff53ae674ede27f8/52_A_E.png?fm=webp&q=80', 14, 4, 3),
(66, 'CNN Internacional', 'https://cnn-cnninternational-1-gb.samsung.wurl.com/playlist.m3u8', 'cnn_internacional', 'https://images.ctfassets.net/ugxciox4nyye/13QrJSn2wmGrz5dnQPIQAM/e939099ee2df6a99bd6979e0f8d90dd3/98_CNN.png?fm=webp&q=80', 1, 4, 1),
(67, 'Lifetime', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jNmVkcy9MaWZldGltZS9TQV9MaXZlX2Rhc2hfZW5jL0xpZmV0aW1lLm1wZA==&key=ZWFlNTFiMWQ2N2ZmNDdhZGFjN2I2YmQzYTRiMTEyMGE=&key2=YjRkNmJiNDcxOTNmMzNmZmMxMjM3OWNkYzQ0NzQ1NWQ=', 'lifetime_argentina', 'https://images.ctfassets.net/ugxciox4nyye/7i5CrejCWabjUYrVseESoJ/f1d42841c60b42a98d92fd73bfa03d0d/84_Lifetime.png?fm=webp&q=80', 14, 4, 3),
(69, 'Caracol', 'http://mdstrm.com/live-stream-playlist_800/58dc3d471cbe05ff3c8e463e.m3u8', 'caracol_internacional', 'https://imagenes.gatotv.com/logos/canales/claros/caracol_colombia.png', 1, 6, 1),
(70, 'Sur TV', 'https://cdn.cvattv.com.ar/live/c4eds/SUR_TV_C4/SA_SAGEMCOM/SUR_TV_C4.m3u8', 'sur_tv_itapua_paraguay', 'https://imagenes.gatotv.com/logos/canales/claros/sur_tv_itapua_paraguay.png', 14, 7, 1),
(71, 'Cartoonito', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtY2JjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEwMjcvbWFuaWZlc3QubXBk&key=NmQ4NDIyMjJmMTcxNWE1OWFkMjQ2MjNjMjE3NDUzNDQ=&key2=ODcwNjE0NjlkYWQ5Njc1NzA3ODcwNGEwM2VlM2M2N2Y=', 'cartoonito_argentina', 'https://imagenes.gatotv.com/logos/canales/claros/cartoonito.png', 6, 4, 3),
(72, 'TSi', 'https://www.dailymotion.com/embed/video/k3u9QlN4lQ5YycxHRoW', 'tsi_honduras', 'https://rndserv.xyz/img/tvc.png', 1, 5, 2),
(73, 'Canal 5 El LÃ­der', 'https://www.dailymotion.com/embed/video/k6BJTswKAXQsl6xHQGd', '5_el_lider_honduras', 'https://rndserv.xyz/img/tvc.png', 1, 5, 2),
(74, 'Telecadena 7 y 4', 'https://www.dailymotion.com/embed/video/k101LzeW3LTSErxHRoW', 'telecadena_7_y_4_honduras', 'https://rndserv.xyz/img/tvc.png', 1, 5, 2),
(75, 'TDTV+', 'https://conceptoweb-studio.com/radio/video/tododeportesplus/', '11_de_honduras', 'https://dd7tel2830j4w.cloudfront.net/f1560359694028x167785582725733730/Group%2012.svg', 11, 5, 2),
(76, 'BeIN Sports 1', 'https://futbollatam.com/embed/bein1.html', 'bein_sport_en_espanol', 'https://imagenes.gatotv.com/logos/canales/claros/bein_sports_espana.png', 11, 1, 3),
(78, 'Los Simpsons', 'https://srv5.zcast.com.br/simpsons/simpsons/playlist.m3u8', 'los_simpson', 'https://rndserv.xyz/img/simpsons.png', 14, 1, 1),
(79, 'Padre de Familia', 'https://www.blogger.com/video.g?token=AD6v5dzaCPU01mjCzQLluaIAAaWw9NMueCXb-tW7Q-nYDhMhTQQ1M0_85B6q_NxaO36DJwc6hncl1fEAx71XY37HWuYOW3EZ7Tuvs9_EogCnYXP1rCHL6E3Y4ne3JBfFe923IhNp6Rs', 'family_guy', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi1.wp.com%2Foggiscienza.it%2Fwp-content%2Fuploads%2F2015%2F12%2Ffamily_guy_logo-svg.png%3Fssl%3D1&f=1&nofb=1', 14, 1, 3),
(80, 'DirecTV Sports', 'https://viperplay.net/iframes/star24.html?view', 'directv_sports', 'https://iconape.com/wp-content/png_logo_vector/directv-sports.png', 11, 4, 3),
(81, 'CNN EspaÃ±ol', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEwNTAvbWFuaWZlc3QubXBk&key=MzViMTM4MzEyMGRhNTk5OTgyZGJhN2Q1YjQ1NjVmMGU=&key2=NTBjNThkNTY4OTkxNzc3ZDBiYzNmZmM4ZjY4MDNjOTI=', 'cnn_en_espanol', 'https://images.ctfassets.net/ugxciox4nyye/6ON8A9RJLupcBvYnw9uKhN/e2163b8f88b1bcf59259e328a0457698/97_CNNEspanol.png?fm=webp&q=80', 1, 1, 3),
(82, 'Discovery Channel', 'https://irpc.ga/mg/play/index.php?get=LmN2YXR0di5jb20uYXIvbGl2ZS9jM2Vkcy9EaXNjb3ZlcnlIRC9TQV9MaXZlX2Rhc2hfZW5jXzJBL0Rpc2NvdmVyeUhELm1wZA==&key=YzI4M2M4NGE3YWYwZDdjOGI5YjYxMmE4ZmIyMmEwMDE=&key2=ZjQ1NTEwYzcyMWVlYmQ2ZWFhODZhMmUxNmNjYmQ3N2Q=', 'discovery_channel_argentina', 'https://images.ctfassets.net/ugxciox4nyye/2jxD6xBgfDYuGl4ObVKjCA/713c91824c8b6ead6a48a9faff844441/87_Discovery.png?fm=webp&q=80', 14, 4, 3),
(84, 'NASA', '21X5lGlDOfg', 'nasa', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/NASA_logo.svg/110px-NASA_logo.svg.png', 16, 1, 1),
(85, 'Claro Sports 1', '//dai.google.com/linear/hls/event/MErimHzcQJyFY4sABtO2Lg/master.m3u8', 'claro_sports', 'https://images.ctfassets.net/ugxciox4nyye/HACpPafOQ9Yj5f8T8Ey1Y/fe9b0f454657b8c4812a138c5870239e/12_ClaroSports.png?fm=webp&q=80', 11, 4, 1),
(86, 'Claro Sports 2', '//claro-jw.cdn.vustreams.com/live/channel05/live.isml/master.m3u8', 'https://www.gatotv.com/canal/claro_sports', 'https://images.ctfassets.net/ugxciox4nyye/HACpPafOQ9Yj5f8T8Ey1Y/fe9b0f454657b8c4812a138c5870239e/12_ClaroSports.png?fm=webp&q=80', 11, 4, 1),
(87, 'Claro Sports 3', '//claro-jw.cdn.vustreams.com/live/channel07/live.isml/master.m3u8', 'claro_sports', 'https://images.ctfassets.net/ugxciox4nyye/HACpPafOQ9Yj5f8T8Ey1Y/fe9b0f454657b8c4812a138c5870239e/12_ClaroSports.png?fm=webp&q=80', 11, 4, 1),
(88, 'Claro Sports 4', '//claro-jw.cdn.vustreams.com/live/channel08/live.isml/master.m3u8', 'claro_sports', 'https://images.ctfassets.net/ugxciox4nyye/HACpPafOQ9Yj5f8T8Ey1Y/fe9b0f454657b8c4812a138c5870239e/12_ClaroSports.png?fm=webp&q=80', 11, 4, 1),
(90, 'AmÃ©rica Sports', 'rBZZSmWJcAo', 'america_sports', 'https://www.amsports.com.ar/img/logo-americasports.png', 11, 4, 1),
(91, 'HCH TV', 'https://www.dailymotion.com/embed/video/x81za5c', 'hch', 'https://hch.tv/wp-content/uploads/2021/09/logos-hch-bueno-1.png', 1, 5, 2),
(92, 'Be mad', 'mt?ch=bemad', 'be_mad', 'http://rndserv.xyz/img/bemad.png', 14, 1, 4),
(93, 'La 1 [geo eventual]', 'l1?ch=la1', 'epg', 'http://rndserv.xyz/img/la1.png', 10, 1, 4),
(94, '4 Cuatro', 'mt?ch=cuatro', 'epg', 'http://rndserv.xyz/img/cuatro.png', 10, 1, 4),
(95, 'Telecinco 5', 'mt?ch=telecinco', 'epg', 'http://rndserv.xyz/img/telecinco.png', 10, 1, 4),
(96, '24h', 'l1?ch=24h', 'epg', 'http://rndserv.xyz/img/24h.png', 10, 1, 4),
(97, 'TDP [geo]', 'l1?ch=tdp', 'epg', 'http://rndserv.xyz/img/teledeporte.png', 11, 1, 4),
(98, 'Clan [geo]', 'l1?ch=clan', 'epg', 'http://rndserv.xyz/img/clan.png', 10, 1, 4),
(99, 'Neox [geo]', 'a3?ch=neox', 'epg', 'http://rndserv.xyz/img/neox.png', 14, 1, 4),
(100, 'Mega [geo]', 'a3?ch=mega_ini', 'epg', 'http://rndserv.xyz/img/mega.png', 10, 1, 4),
(101, 'A3S Atreseries [geo]', 'a3?ch=atreseries', 'epg', 'http://rndserv.xyz/img/atreseries.png', 14, 1, 4),
(102, 'FDF FactorÃ­a de FicciÃ³n', 'mt?ch=fdf', 'epg', 'http://rndserv.xyz/img/fdf.png', 14, 1, 4),
(103, 'Energy', 'mt?ch=energy', 'epg', 'http://rndserv.xyz/img/energy.png', 14, 1, 4),
(104, 'Be Mad', 'mt?ch=bemad', 'epg', 'http://rndserv.xyz/img/bemad.png', 14, 1, 4),
(105, 'Divinity', 'mt?ch=divinity', 'epg', 'http://rndserv.xyz/img/divinity.png', 14, 1, 4),
(106, 'Boing', 'mt?ch=boing', 'epg', 'http://rndserv.xyz/img/boing.png', 14, 1, 4),
(107, 'Mtmad', 'l1?ch=trece', 'epg', 'http://rndserv.xyz/img/mtmad.png', 14, 1, 4),
(108, 'El Toro TV', 'l1?ch=eltorotv', 'epg', 'http://rndserv.xyz/img/eltorotv.png', 14, 1, 4),
(109, '7NN 7 Noticias', 'l1?ch=8tv', 'epg', 'http://rndserv.xyz/img/7nn.png', 1, 1, 4),
(110, 'Teve.cat (CataluÃ±a)', 'ccma?ch=tv3', 'epg', 'http://rndserv.xyz/img/tevecat.png', 10, 1, 4),
(111, 'Telemadrid', 'l1?ch=telemadrid', 'epg', 'http://rndserv.xyz/img/33.png', 14, 1, 4),
(112, 'Canal Sur (AndalucÃ­a)', 'l1?ch=canalsur', 'sur_andalucia', 'http://rndserv.xyz/img/canalsur.png', 3, 1, 4),
(113, 'TVG Europa', 'l1?ch=tvg_europa', 'epg', 'http://rndserv.xyz/img/tvg.png', 10, 1, 4),
(114, 'TVG AmÃ©rica', 'l1?ch=tvg_america', 'epg', 'http://rndserv.xyz/img/tvg.png', 10, 1, 4),
(115, 'ETB 1', 'l1?ch=etb_1', 'epg', 'http://rndserv.xyz/img/eitb.png', 10, 1, 4),
(116, 'ETB 2', 'l1?ch=etb_2', 'epg', 'http://rndserv.xyz/img/eitb.png', 10, 1, 4),
(117, 'AragÃ³n TV', 'l1?ch=aragontv', 'epg', 'http://rndserv.xyz/img/aragontv.png', 10, 1, 4),
(118, 'AragÃ³n TV', 'l1?ch=aragontv_d', 'epg', 'http://rndserv.xyz/img/aragontv.png', 10, 1, 4),
(119, 'CMM Castilla-La Mancha Media', 'l1?ch=cmm', 'epg', 'http://rndserv.xyz/img/cmm.png', 10, 1, 4),
(120, 'RTVC RadiotelevisiÃ³n Canaria (Canarias)', 'l1?ch=rtvc', 'epg', 'http://rndserv.xyz/img/rtvc.png', 10, 1, 4),
(121, '7RM RadiotelevisiÃ³n de la RegiÃ³n de Murcia', 'l1?ch=la8_avila', 'epg', 'http://rndserv.xyz/img/7rm.png', 10, 1, 4),
(122, 'Ã Punt (EPG)', 'yt?ch=ib3', 'epg', 'http://rndserv.xyz/img/apunt.png', 10, 1, 4),
(123, 'Ã Punt (Noticias)', 'yt?ch=ib3_noticies', 'epg', 'http://rndserv.xyz/img/apunt.png', 1, 1, 4),
(124, 'Ã Punt (eSports)', 'yt?ch=ib3_esports', 'epg', 'http://rndserv.xyz/img/apunt.png', 11, 1, 4),
(125, '7TV AndalucÃ­a', 'l1?ch=rtpa', 'epg', 'http://rndserv.xyz/img/7tv.png', 10, 1, 4),
(126, 'DKISS', 'yt?ch=dkiss', 'epg', 'http://rndserv.xyz/img/dkiss.png', 14, 1, 4),
(127, 'DMAX', 'dp?ch=dmax', 'epg', 'http://rndserv.xyz/img/dmax.png', 14, 1, 4),
(128, 'Paramount Plus', 'pl?ch=paramount_plus', 'epg', 'http://rndserv.xyz/img/paramount.png', 14, 1, 4),
(129, 'Paramount Movies', 'pl?ch=paramount_movie', 'epg', 'http://rndserv.xyz/img/paramount.png', 17, 1, 4),
(130, 'Paramount Picks', 'pl?ch=paramount_picks', 'epg', 'http://rndserv.xyz/img/paramount.png', 14, 1, 4),
(131, 'Real Madrid TV', 'l1?ch=rm_es', 'epg', 'http://rndserv.xyz/img/rm.png', 11, 1, 4),
(132, 'Real Madrid TV', 'l1?ch=rm_en', 'epg', 'http://rndserv.xyz/img/rm.png', 11, 1, 4),
(133, 'ABC (News)', 'l1?ch=abcnews', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(134, 'ABC (WPVI)', 'l1?ch=abc6_wpvi', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(135, 'ABC (KABC)', 'l1?ch=abc7_kabc', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(136, 'ABC (KGP)', 'l1?ch=abc7_kgo', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(137, 'ABC (WLS)', 'l1?ch=abc7_wls', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(138, 'ABC (WXYZ)', 'l1?ch=abc7_wxyz', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(139, 'ABC (KOLO)', 'l1?ch=abc8_kolo', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(140, 'ABC (KCRG)', 'l1?ch=abc9_kcrg', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(141, 'ABC (WSRY)', 'l1?ch=abc9_wsyr', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(142, 'ABC (WTEN)', 'l1?ch=abc10_wten', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(143, 'ABC (WTVD)', 'l1?ch=abc11_wtvd', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(144, 'ABC (WTVG)', 'l1?ch=abc13_wtvg', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(145, 'ABC (KNXV)', 'l1?ch=abc15_knxv', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(146, 'ABC (WNEP)', 'l1?ch=abc16_wnep', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(147, 'ABC (WPTA)', 'l1?ch=abc21_wpta', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(148, 'ABC (WHTM)', 'l1?ch=abc27_whtm', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(149, 'ABC (WFTS)', 'l1?ch=abc28_wfts', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(150, 'ABC (KFSN)', 'l1?ch=abc30_kfsn', 'epg', 'http://rndserv.xyz/img/abc.png', 1, 8, 4),
(151, 'CBS (CBSN)', 'l1?ch=cbsn', 'epg', 'http://rndserv.xyz/img/cbs.png', 11, 8, 4),
(152, 'CBS', 'us?ch=cbs', 'epg', 'http://rndserv.xyz/img/cbs.png', 1, 8, 4),
(153, 'CBS Sports HQ', 'l1?ch=cbssportshq', 'epg', 'http://rndserv.xyz/img/cbs.png', 11, 8, 4),
(154, 'CBS Sports Network', 'l1?ch=cbssn', 'epg', 'http://rndserv.xyz/img/cbs.png', 3, 1, 4),
(155, 'FOX News', 'us_f?ch=foxnews', 'epg', 'http://rndserv.xyz/img/fox.png', 1, 8, 4),
(156, 'FOX News Now', 'l1?ch=foxnewsnow', 'epg', 'http://rndserv.xyz/img/fox.png', 1, 8, 4),
(157, 'FOX Business', 'l1?ch=foxbusiness', 'epg', 'http://rndserv.xyz/img/fox.png', 10, 8, 4),
(158, 'FOX Weather', 'l1?ch=foxweather', 'epg', 'http://rndserv.xyz/img/fox.png', 10, 8, 4),
(159, 'FOX', 'us_f?ch=fox', 'epg', 'http://rndserv.xyz/img/fox.png', 10, 8, 4),
(160, 'FOX Soul', 'l1?ch=fox_soul', 'epg', 'http://rndserv.xyz/img/fox.png', 10, 8, 4),
(161, 'FOX (TR)', 'l1?ch=fox_tr', 'epg', 'http://rndserv.xyz/img/fox.png', 1, 8, 4),
(162, 'FOX (KTVU)', 'l1?ch=fox2_ktvu', 'epg', 'http://rndserv.xyz/img/fox.png', 1, 8, 4),
(163, 'FOX (WNYW)', 'l1?ch=fox5_wnyw', 'epg', 'http://rndserv.xyz/img/fox.png', 1, 8, 4),
(164, 'NBC News', 'l1?ch=nbcnews', 'epg', 'http://rndserv.xyz/img/nbc.png', 1, 8, 4),
(165, 'BBC World', 'ftv?ch=bbcworld', 'epg', 'http://rndserv.xyz/img/bbc.png', 1, 10, 4),
(166, 'BBC America Parliament Alba S4C (Reino Unido)', 'us?ch=bbc_america', 'epg', 'http://rndserv.xyz/img/bbc.png', 1, 10, 4),
(167, 'BBC Food', 'pl?ch=bbc_food', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(168, 'BBC Home', 'pl?ch=bbc_home', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(169, 'BBC Drama', 'pl?ch=bbc_drama', 'epg', 'http://rndserv.xyz/img/bbc.png', 14, 10, 4),
(170, 'BBC News', 'ftv?ch=bbcnews', 'epg', 'http://rndserv.xyz/img/bbc.png', 1, 10, 4),
(171, 'BBC One', 'ftv?ch=bbcone', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(172, 'BBC Two', 'ftv?ch=bbctwo', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(173, 'BBC Four', 'ftv?ch=bbcfour', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(174, 'CBBC', 'ftv?ch=cbbc', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(175, 'CBeebies', 'ftv?ch=cbeebies', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(176, 'BBC Scotland', 'ftv?ch=bbcscotland', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(177, 'BBC Parliament', 'ftv?ch=bbcparliament', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(178, 'BBC Alba', 'l1?ch=bbcalba', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(179, 'BBC S4C', 'l1?ch=s4c', 'epg', 'http://rndserv.xyz/img/bbc.png', 10, 10, 4),
(180, 'Sky News', 'l1?ch=skynews', 'epg', 'http://rndserv.xyz/img/skynews.png', 1, 10, 4),
(181, 'Sky Sport', 'l1?ch=skysport', 'epg', 'http://rndserv.xyz/img/skynews.png', 11, 10, 4),
(182, 'Euronews', 'yt?ch=euronews_es', 'epg', 'http://rndserv.xyz/img/euronews.png', 1, 10, 4),
(183, 'Euronews', 'yt?ch=euronews_en', 'epg', 'http://rndserv.xyz/img/euronews.png', 1, 10, 4),
(184, 'RT Russia Today', 'https://vk.com/actualidadrt?z=video-61174019_456240097?view', 'epg', 'http://rndserv.xyz/img/rt.png', 1, 11, 3),
(185, 'Reuters Now', 'l1?ch=reutersnow', 'epg', 'http://rndserv.xyz/img/reuters.png', 1, 10, 4),
(186, 'Reuters', 'yt?ch=reuters', 'epg', 'http://rndserv.xyz/img/reuters.png', 1, 10, 4),
(187, 'Reuters 2', 'yt?ch=reuters_2', 'epg', 'http://rndserv.xyz/img/reuters.png', 1, 10, 4),
(188, 'DW', 'l1?ch=dw_es', 'epg', 'http://rndserv.xyz/img/dw.png', 1, 9, 4),
(189, 'DW', 'l1?ch=dw_en', 'epg', 'http://rndserv.xyz/img/dw.png', 1, 9, 4),
(190, 'The Weather Channel', 'l1?ch=weatherchannel', 'epg', 'http://rndserv.xyz/img/weather.png', 1, 10, 4),
(191, 'Newsmax TV', 'l1?ch=newsmax', 'epg', 'http://rndserv.xyz/img/newsmax.png', 1, 10, 4),
(192, 'CBC News [geo]', 'l1?ch=cbc_news', 'epg', 'http://rndserv.xyz/img/cbc.png', 1, 10, 4),
(193, 'CBC Sports [geo]', 'l1?ch=cbc_sports', 'epg', 'http://rndserv.xyz/img/cbc.png', 10, 11, 4),
(194, 'Univision', 'us_f?ch=univision', 'epg', 'http://rndserv.xyz/img/univision.png', 10, 2, 4),
(195, 'Estrella TV', 'l1?ch=estrellatv', 'epg', 'http://rndserv.xyz/img/estrellatv.png', 10, 2, 4),
(196, 'Estrella News', 'l1?ch=estrellanews', 'epg', 'http://rndserv.xyz/img/estrellatv.png', 1, 2, 4),
(197, 'Estrella Games', 'l1?ch=estrellagames', 'epg', 'http://rndserv.xyz/img/estrellatv.png', 10, 2, 4),
(198, 'Azteca Uno', 'l1?ch=az_uno', 'epg', 'http://rndserv.xyz/img/azteca.png', 10, 2, 4),
(199, 'Azteca 7', 'l1?ch=az_7', 'epg', 'http://rndserv.xyz/img/azteca.png', 10, 2, 4),
(200, 'Azteca +', 'l1?ch=a_plus', 'epg', 'http://rndserv.xyz/img/azteca.png', 10, 2, 4),
(201, 'ADN 40', 'l1?ch=adn40', 'epg', 'http://rndserv.xyz/img/azteca.png', 10, 2, 4),
(202, '3ABN', 'l1?ch=3abn', 'epg', 'http://rndserv.xyz/img/3abn.png', 10, 2, 4),
(203, 'UEFA Europa League Liga', 'l1_f2?ch=match_tv', 'epg', 'http://rndserv.xyz/img/europa.png', 11, 10, 4),
(204, 'Formula 1', 'dm_f?ch=band', 'epg', 'http://rndserv.xyz/img/formula1.png', 11, 10, 4),
(205, 'MotoGP', 'l1?ch=servus_motogp', 'epg', 'http://rndserv.xyz/img/motogp.png', 11, 10, 4),
(206, 'Servus', 'l1?ch=servus_de_', 'epg', 'http://rndserv.xyz/img/motogp.png', 10, 9, 4),
(207, 'L Ã‰quipe', 'dm3?ch=lequipe', 'epg', 'http://rndserv.xyz/img/euroleague.png', 11, 1, 4),
(208, 'Tennis Channel', 'l1?ch=tennis_channel', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(209, 'Tennis Channel 2', 'l1?ch=tennis_2', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(210, 'Tennis TT', 'l1?ch=tennis_tt', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(211, 'Tennis Plus', 'l1?ch=tennis_plus_1', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(212, 'Tennis Plus 2', 'l1?ch=tennis_plus_2', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(213, 'Tennis Plus 3', 'l1?ch=tennis_plus_3', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(214, 'Tennis Plus 4', 'l1?ch=tennis_plus_4', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(215, 'Tennis Plus 5', 'l1?ch=tennis_plus_5', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(216, 'Tennis Plus 6', 'l1?ch=tennis_plus_6', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(217, 'Tennis Plus 7', 'l1?ch=tennis_plus_7', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(218, 'Tennis Plus 8', 'l1?ch=tennis_plus_8', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(219, 'Tennis Plus 9', 'l1?ch=tennis_plus_9', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(220, 'Tennis Plus 10', 'l1?ch=tennis_plus_10', 'epg', 'http://rndserv.xyz/img/atpwta.png', 3, 1, 4),
(221, 'Tennis INTL', 'l1?ch=tennis_int_en', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(222, 'Super Tennis', 'l1?ch=supertennis', 'epg', 'http://rndserv.xyz/img/atpwta.png', 11, 8, 4),
(223, 'World Padel Tour', 'padel?ch=es', 'epg', 'http://rndserv.xyz/img/padel.png', 11, 8, 4),
(224, 'World Padel Tour', 'padel?ch=en', 'epg', 'http://rndserv.xyz/img/padel.png', 11, 8, 4),
(225, 'NBA TV', 'us2?ch=nbatv', 'epg', 'http://rndserv.xyz/img/nba.png', 11, 8, 4),
(226, 'NFL Network', 'us?ch=nfl_network', 'epg', 'http://rndserv.xyz/img/nfl.png', 11, 8, 4),
(227, 'A3 Cine', 'https://live.atresmediainternacional.com/ATRESMEDIA/a3cine-1080.m3u8', 'atreseries_espana', 'https://upload.wikimedia.org/wikipedia/commons/e/e1/A3Cine.png', 14, 1, 1),
(228, 'Â¡Hola! Tv', 'https://live.atresmediainternacional.com/ATRESMEDIA/holatv-1080.m3u8', 'hola_tv', 'https://mma.prnewswire.com/media/1199606/HOLA_TV_Logo.jpg', 14, 1, 1),
(229, 'History', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtY2JjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzExNDgvbWFuaWZlc3QubXBk&key=MGRjNjRmOWIxOWFiNTFhZTg4OTU5YWZlYzk2ZTc2MzE=&key2=ZWYxZDA4OTRhOTM2ZjczOTNlYzdiZmEzOGZmNjE4Y2I=', 'history_argentina', 'https://rndserv.xyz/img/history.png', 25, 4, 3),
(230, 'Star Channel', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzExOTYvbWFuaWZlc3QubXBk&key=N2MzOGQ5MzEwZDNjNWI0NmEzN2EzOWJiZWM2ZGQ2OGE=&key2=ZjQzMzNkZmIwZTcwOGVjOTg2NWI5YTZmZjJhOGUwNjg=', 'star_channel_argentina', 'https://rndserv.xyz/img/starchannel.png', 14, 4, 3),
(231, 'BeIN Sports BR', 'https://viperplay.net/iframes/bein1br.html', 'a', 'https://imagenes.gatotv.com/logos/canales/claros/bein_sports_espana.png', 11, 1, 3),
(232, 'tv2x2 eventos (VP)', 'https://prod-ec-us-west-2.video.pscp.tv/Transcoding/v1/hls/t61R2pNPb7SixlpEf2qr5v3dLORYf1USBhslXJWC4syIkL7S_WekmE62mmBhzvNmgjsGCsXjziamz4FruzOewQ/transcode/us-west-2/periscope-replay-direct-prod-us-west-2-public/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsInZlcnNpb24iOiIyIn0.eyJFbmNvZGVyU2V0dGluZyI6ImVuY29kZXJfc2V0dGluZ180ODBwMzBfMTAiLCJIZWlnaHQiOjQ4MCwiS2JwcyI6MTIwMCwiV2lkdGgiOjg0OH0.0LJi1usWbiPqp0QIcpq7Md5g1WxvJcPqVWNqsKw5nhA/tw_dynamic_highlatency.m3u8?type=live', 'vp', 'https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder.png', 11, 1, 1),
(233, 'Cartoon Network [Lat 1]', 'l1?ch=cn_es_1', 'cartoon_network_argentina', 'https://images.ctfassets.net/ugxciox4nyye/12DDQ6rj1D1XJgbfFJlE7Y/25ac07e1aba869cb590ecece1418a9f4/35_CartoonNetworkHD.png?fm=webp&q=80', 6, 4, 4),
(234, 'Cartoon Network [Lat 2]', 'l1?ch=cn_es_2', 'cartoon_network_argentina', 'https://images.ctfassets.net/ugxciox4nyye/12DDQ6rj1D1XJgbfFJlE7Y/25ac07e1aba869cb590ecece1418a9f4/35_CartoonNetworkHD.png?fm=webp&q=80', 6, 4, 4),
(235, 'Warner Kids', 'CxsXg22188U', 'warner_tv_argentina', 'https://rndserv.xyz/img/wbkids.png', 6, 8, 1),
(236, 'Liverpool TV', 'l1?ch=liverpool', 'liverpool', 'https://rndserv.xyz/img/liverpool.png', 11, 10, 4),
(237, 'Barca TV [CAT]', 'fcb?ch=ca', 'barca', 'https://rndserv.xyz/img/fcb.png', 11, 1, 4),
(238, 'Barca TV [ESP]', 'fcb?ch=es', 'barca', 'https://rndserv.xyz/img/fcb.png', 11, 1, 4),
(239, 'Barca TV [ENG]', 'fcb?ch=en', 'barca', 'https://rndserv.xyz/img/fcb.png', 11, 1, 4),
(240, 'Sevilla TV', 'l1?ch=sfc', 'sevilla', 'https://rndserv.xyz/img/sfc.png', 11, 1, 4),
(241, 'Betis TV', 'l1?ch=betis', 'betis', 'https://rndserv.xyz/img/betis.png', 11, 1, 4),
(242, 'UD TV', 'https://ccdn.fractalmedia.es:9443/live015/stream/live/cudtv/index.m3u8', 'laspalmas', 'https://rndserv.xyz/img/udlp.png', 11, 1, 1),
(243, 'Galatasaray TV', 'l1?ch=galatasaray', 'galatasaray', 'https://rndserv.xyz/img/galatasaray.png', 11, 8, 4),
(244, 'Investigation Discovery', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtY2JjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEwNzYvbWFuaWZlc3QubXBk&key=YWFiNmI0ZmRiMmUxNWJlZjhlZjA3YzM5N2IwNTdlNjA=&key2=ZTQyYzM3NWY4MzA0YmUwNTYzYWVhOWIzOGVkYTFmNzY=', 'investigation_discovery_argentina', 'https://images.ctfassets.net/ugxciox4nyye/4On8gxcQzbBZU0e3km6KXH/4334e9a223f6e57e6f91cbbe96fd90a0/Canal_-_DiscoveryID.png?fm=webp&q=80', 25, 4, 3),
(245, 'Discovery Kids', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzEwNzkvbWFuaWZlc3QubXBk&key=YTNiOTFmOTVkYzkxNTJjZThmYTM0YTdmZWQxMDNiNzA=&key2=Njk0ZWIxMmM2Y2E0MDFiNDU0YmQ3NDJjMzc0YTUwYzA=', 'discovery_kids_argentina', 'https://imagenes.gatotv.com/logos/canales/claros/discovery_kids.png', 6, 4, 3),
(246, 'NatGeo', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzExNjkvbWFuaWZlc3QubXBk&key=OGUzZWQ4ODAwZjkwNThiNWFmNzQ4MzA4MWU3ZjdmNTU=&key2=NThhYzc5NGY2ZWFhNDVmYmYzMTk3ODcxZjRiMzNhZWE=', 'natgeo', 'https://rndserv.xyz/img/natgeo.png', 25, 4, 3),
(247, 'History 2 [H2 GEO LAT]', 'https://irpc.ga/mg/play/mlaliga.php?get=Ly9kdHZvdHQtY2JjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzExNDcvbWFuaWZlc3QubXBk&key=OThiZjFkNTEwY2I0NTE0NTk0MmU1ZDRjMWQ1ZjIxMWQ=&key2=ZDZkNTE4OTQ5Y2Y3MzRjM2UwMzMyOGRkYTViNDU5NjY=', 'history_2_argentina', 'https://rndserv.xyz/img/history.png', 25, 4, 3),
(248, 'Caillou [ES]', 'https://dhx-caillou-1-es.samsung.wurl.tv/playlist.m3u8', 'caillou', 'https://rndserv.xyz/img/caillou.png', 6, 1, 1),
(249, 'ESPN [US]', 'https://stream2.grandma.fit/fs2.m3u8', 'espn_internacional', 'https://images.ctfassets.net/ugxciox4nyye/3NCwVCRCmBEov5n6ou5hAA/c4270c0c6d2988c47c6350ca36175180/13_ESPN.png?fm=webp&q=80', 11, 8, 1),
(250, 'BeIN Xtra', 'https://siloh.pluto.tv/lilo/production/bein/1/master.m3u8', 'bein_sport_en_espanol', 'https://imagenes.gatotv.com/logos/canales/claros/bein_sports_espana.png', 11, 8, 1),
(251, 'BeIN Xtra Ã‘', 'https://siloh.pluto.tv/lilo/production/BEIN/ES/master.m3u8', 'bein_sport_en_espanol', 'https://imagenes.gatotv.com/logos/canales/claros/bein_sports_espana.png', 11, 1, 1),
(252, 'Golden', 'ak?ch=golden', 'golden_mexico', 'https://imagenes.gatotv.com/logos/canales/claros/golden.png', 25, 2, 7),
(253, 'eSport3 [GEO]', 'ccma?ch=e3', 'e3', 'https://rndserv.xyz/img/e3.png', 10, 1, 4),
(254, 'Los Simpsons HD', 'https://videostreaming.cloudserverlatam.com/CSTV/CSTV/playlist.m3u8', 'simpsons', 'https://rndserv.xyz/img/simpsons.png', 14, 8, 1),
(255, 'PelÃ­culas 24/7', 'https://videostreaming.cloudserverlatam.com:443/cloudservertv/cloudservertv/playlist.m3u8', 'pelis', 'pelis', 17, 1, 1),
(256, 'Telemax', 'https://live-edge01.telecentro.net.ar/live/smil:tlx.smil/playlist.m3u8', 'telemax', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Telemax.png/1200px-Telemax.png', 14, 4, 1),
(257, 'TyC Sports', 'https://dbdspnsi7bxk.cloudfront.net/out/v1/543996f2ca9149a5a984db778af87c7f/index_9.m3u8', 'tyc_sports', 'https://imagenes.gatotv.com/logos/canales/claros/tyc_sports.png', 11, 4, 1),
(258, 'FS1 [USA]', 'http://stream2.grandma.fit/fs1.m3u8', 'fs1', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/2015_Fox_Sports_1_logo.svg/2560px-2015_Fox_Sports_1_logo.svg.png', 11, 8, 1),
(259, 'Cartoon Network [Lat]', 'https://playout.cdn.cartoonnetwork.com.br/playout_02/playlist.m3u8', 'cartoon_network_argentina', 'https://images.ctfassets.net/ugxciox4nyye/12DDQ6rj1D1XJgbfFJlE7Y/25ac07e1aba869cb590ecece1418a9f4/35_CartoonNetworkHD.png?fm=webp&q=80', 6, 4, 1),
(260, 'Eurosport', 'http://213.151.233.20:8000/dna-6069-tv-pc/hls/4001v105.m3u8', 'eurosport_1_espana', 'https://imagenes.gatotv.com/logos/canales/claros/eurosport_1.png', 11, 1, 1),
(261, 'Sky Sports 24', 'https://skyanywhere3-i.akamaihd.net/hls/live/510697/interactive/playlist.m3u8', 'sky_sports_24', 'https://imagenes.gatotv.com/logos/canales/claros/sky_sports_24.png', 11, 10, 1),
(262, 'MEGA', 'http://154.62.74.29:1935/live/mega/chunklist_w1555082919.m3u8', 'mega', 'http://rndserv.xyz/img/mega.png', 10, 1, 1),
(263, 'Animal Planet', 'http://vips-livecdn.fptplay.net/hda2/animalplanet_vhls.smil/chunklist_b5000000.m3u8', 'animal_planet_argentina', 'https://images.ctfassets.net/ugxciox4nyye/2VZSYkkMoux2WhaqexQF9U/8bcaa85e77c536532b15dd6e18879cc0/86_AnimalPlanet.png?fm=webp&q=80', 25, 8, 1),
(264, 'RedBull TV', 'https://rbmn-live.akamaized.net/hls/live/590964/BoRB-AT/master_3360.m3u8', 'redbull', 'https://cdn.freebiesupply.com/logos/large/2x/red-bull-tv-logo-png-transparent.png', 11, 10, 1),
(265, 'Novelas 24/7', 'https://spt-novelas-1-us.samsung.wurl.tv/3000.m3u8', 'novelas', 'novelas', 14, 1, 1),
(266, 'LEGO Toons', 'https://stitcheraws.unreel.me/wse-node02.powr.com/live/5bf22549d5eeee0f5a4094ba/playlist.m3u8', 'lego', 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fgetdrawings.com%2Fcliparts%2Flego-robot-clipart-3.png&f=1&nofb=1', 6, 1, 1),
(267, 'Angry Birds', 'https://stream.ads.ottera.tv/playlist.m3u8', 'angrybirds', 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpluspng.com%2Fimg-png%2Fangry-birds-png-pile-of-angry-birds-by-gav-imp-1532.png&f=1&nofb=1', 6, 1, 1),
(268, 'Teletubbies', 'https://dhx-teletubbies-1-gb.samsung.wurl.tv/3000.m3u8', 'teletubbies', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fs-media-cache-ak0.pinimg.com%2Foriginals%2Fed%2F5c%2F13%2Fed5c13d68b783d31ba157e4a13d4dfd1.png&f=1&nofb=1', 6, 10, 1),
(269, 'Baby Shark', 'https://newidco-babysharktv-2-mx.samsung.wurl.tv/3000.m3u8', 'babyshark', 'https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fpngimg.com%2Fuploads%2Fbaby_shark%2Fbaby_shark_PNG22.png&f=1&nofb=1', 6, 1, 1),
(270, 'ESPN 2 [USA]', 'http://38.127.211.18/live/c2eds/ESPN2USA/HLS/index.m3u8', 'espn2', 'https://images.ctfassets.net/ugxciox4nyye/4mdSmIihFejWNGVPiIMkvz/d76a823f16543c95ec31e0cea741201a/14_ESPN2.png?fm=webp&q=80', 11, 8, 1),
(271, 'MMA Junkie', 'https://a.jsrdn.com/broadcast/80f6ba72c8/+0000/c.m3u8', 'mma', 'https://mmajunkie.usatoday.com/wp-content/uploads/sites/91/2017/07/mmaj-header-logo.png?w=659', 11, 8, 1),
(272, 'Starz East', 'http://lvod-akc-sa-east-4.media.spliktv.xyz:8082/24167/video.m3u8?token=SplikTV&caster', 'starz_encore_espanol', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Starz_2016.svg/799px-Starz_2016.svg.png?20160405142026', 25, 4, 1),
(273, 'Starz West', 'http://lvod-akc-sa-east-4.media.spliktv.xyz:8082/24193/video.m3u8?token=SplikTV&caster', 'starz_encore_espanol', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Starz_2016.svg/799px-Starz_2016.svg.png?20160405142026', 25, 4, 1),
(274, 'Starz Encore', 'http://lvod-akc-sa-east-4.media.spliktv.xyz:8082/24310/video.m3u8?token=SplikTV&caster', 'starz_encore_espanol', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Starz_2016.svg/799px-Starz_2016.svg.png?20160405142026', 1, 1, 1),
(275, 'Nickelodeon', 'https://cdn.digital.com.bo/__cl/cg:sworigin2/__c/NICKELODEONHD/__op/hls-default/__f/index.m3u8', 'nickelodeon_argentina', 'https://images.ctfassets.net/ugxciox4nyye/4FfqGZIakO1SIpDRZH4EZE/08f366576db2f3d05b7e56e2197454cc/31_NickHD.png?fm=webp&q=80', 6, 4, 1),
(276, 'Zona TUDN', 'https://linear-356.frequency.stream/dist/localnow/356/hls/master/playlist.m3u8', 'tudn_centroamerica', 'https://imagenes.gatotv.com/logos/canales/claros/tudn.png', 11, 4, 1),
(277, 'Afizzionados', 'https://linear-348.frequency.stream/dist/localnow/348/hls/master/playlist.m3u8', 'afizzionados', 'https://imagenes.gatotv.com/logos/canales/claros/afizzionados.png', 11, 2, 1),
(278, 'TDN', 'ak?ch=tdn', 'univision_tdn', 'https://imagenes.gatotv.com/logos/canales/claros/tudn.png', 11, 2, 7),
(279, 'Star+ Kun Madrid', 'https://viperplay.net/iframes/star25.html', 's', 's', 11, 4, 3);
INSERT INTO `channels` (`channelId`, `channelName`, `channelUrl`, `epg`, `channelImg`, `category`, `country`, `type`) VALUES
(280, 'Chiringuito', 'Y0sAYIJdpgA', 'mega', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.winudf.com%2Fv2%2Fimage%2FY29tLmlvbmljZnJhbWV3b3JrLmVsY2hpcmluZ3VpdG83MTgyMTBfaWNvbl8wX2Y1ODJiZTZm%2Ficon.png%3Fw%3D170%26fakeurl%3D1%26type%3D.png&f=1&nofb=1', 11, 1, 1),
(281, 'Afizzionados', 'ak?ch=afizzionados', 'afizzionados', 'https://imagenes.gatotv.com/logos/canales/claros/afizzionados.png', 11, 2, 7),
(282, 'De PelÃ­cula', 'ak?ch=depelicula', 'de_pelicula', 'https://imagenes.gatotv.com/logos/canales/claros/de_pelicula.png', 17, 2, 7),
(283, 'De PelÃ­cula +', 'ak?ch=depeliculaplus', 'de_pelicula', 'https://imagenes.gatotv.com/logos/canales/claros/de_pelicula.png', 17, 2, 1),
(284, 'Bandamax', 'ak?ch=bandamax', 'bandamax', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Bandamax_logo.svg/100px-Bandamax_logo.svg.png?20210311022557', 8, 2, 7),
(285, 'Canal 5', 'ak?ch=canal5', '5_mexico', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Canal_5_2016.svg/640px-Canal_5_2016.svg.png', 10, 2, 7),
(286, 'Estrellas', 'ak?ch=estrellas', 'de_las_estrellas_-1h_mexico', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Canal_2_%28Las_Estrellas_2017%29.svg/640px-Canal_2_%28Las_Estrellas_2017%29.svg.png', 10, 2, 7),
(287, 'Estrellas D1', 'ak?ch=estrellasd1', 'de_las_estrellas_-1h_mexico', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Canal_2_%28Las_Estrellas_2017%29.svg/640px-Canal_2_%28Las_Estrellas_2017%29.svg.png', 10, 2, 7),
(288, 'Estrellas D2', 'ak?ch=afizzionados', 'de_las_estrellas_-1h_mexico', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Canal_2_%28Las_Estrellas_2017%29.svg/640px-Canal_2_%28Las_Estrellas_2017%29.svg.png', 10, 1, 7),
(289, 'Foro TV', 'ak?ch=forotv', 'foro_tv', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Foro_TV_2020.svg/640px-Foro_TV_2020.svg.png', 10, 2, 7),
(290, 'Telehit', 'ak?ch=telehit', 'telehit', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Telehit_logo_2020.png/640px-Telehit_logo_2020.png', 8, 2, 7),
(291, 'Telehit +', 'ak?ch=telehitplus', 'telehit_musica_plus', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Telehit_logo_2020.png/640px-Telehit_logo_2020.png', 8, 2, 7),
(292, 'Golden', 'ak?ch=golden', 'golden_mexico', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Golden_TV_logo.png/640px-Golden_TV_logo.png', 17, 2, 7),
(293, 'Golden Edge', 'ak?ch=goldenedge', 'golden_edge', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Golden_Edge_Logo_2020.png/640px-Golden_Edge_Logo_2020.png', 17, 2, 7),
(294, 'Golden Multiplex', 'ak?ch=forotv', 'golden_mpx', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Golden_TV_logo.png/496px-Golden_TV_logo.png?20210727234851', 17, 2, 7),
(295, 'Golden +', 'ak?ch=goldenplus', 'golden_plus', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Golden_TV_logo.png/496px-Golden_TV_logo.png?20210727234851', 17, 2, 7),
(296, 'Tlnovelas', 'ak?ch=tlnovelas', 'tlnovelas', 'https://upload.wikimedia.org/wikipedia/commons/6/62/Tlnovelas_logo_2021.png', 14, 2, 7),
(297, 'Unicable', 'ak?ch=unicable', 'unicable', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Unicable_logo.svg/640px-Unicable_logo.svg.png', 14, 2, 7),
(298, 'Clan', 'ak?ch=clan', 'clan_tve', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Tve_clan.png/640px-Tve_clan.png', 10, 2, 7),
(299, 'Distrito Comedia', 'ak?ch=distritocomedia', 'distrito_comedia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/DistritoComediaLOGO2018.png/640px-DistritoComediaLOGO2018.png', 13, 2, 7),
(300, 'Star TVE', 'ak?ch=startve', 'star_tve', 'https://upload.wikimedia.org/wikipedia/commons/0/08/Star-TVE-logo.png', 10, 2, 7),
(301, 'B Cine', 'ak?ch=bcine', 'bcine', 'bcine', 10, 2, 7),
(302, '(1) Barcelona Eventos [VP]', 'https://1l1l.to/ch19', 'espn_sur', 'https://i.postimg.cc/d34hZkDX/Ednar33-TV.png', 11, 1, 2),
(303, '(1) Sevilla Eventos [VP]', 'https://viperplay.net/iframes/bein2br', 'espn_sur', 'https://i.postimg.cc/d34hZkDX/Ednar33-TV.png', 11, 1, 3),
(304, '(1) Real Madrid Eventos [VP]', 'https://prod-ec-us-west-1.video.pscp.tv/Transcoding/v1/hls/Fr5TylhRB4maoiKsJuHOfL8OgBy3c3X8bzGpzUqg5ut3sgsaEM4ZSkkYz0o67GFmw_mdppHjhUuJsUpW-2Q1iw/non_transcode/us-west-1/periscope-replay-direct-prod-us-west-1-public/tw_master_dynamic_highlatency.m3u8?type=live', 'espn_sur', 'https://i.postimg.cc/d34hZkDX/Ednar33-TV.png', 11, 1, 1),
(305, '(1) Athletic Eventos [VP]', 'https://viperplay.net/iframes/bein9', 'espn_sur', 'https://i.postimg.cc/d34hZkDX/Ednar33-TV.png', 11, 1, 3),
(306, '(1) Betis Eventos [VP]', 'https://viperplay.net/iframes/bein6br', 'espn_sur', 'https://i.postimg.cc/d34hZkDX/Ednar33-TV.png', 11, 1, 3),
(307, 'GOL TV [GEO]', 'http://goltelevision.com/en-directo', 'goltv', 'https://rndserv.xyz/img/gol.png', 11, 1, 3),
(308, '(2) Real Madrid Eventos [VP]', 'https://prod-ec-us-west-1.video.pscp.tv/Transcoding/v1/hls/Fr5TylhRB4maoiKsJuHOfL8OgBy3c3X8bzGpzUqg5ut3sgsaEM4ZSkkYz0o67GFmw_mdppHjhUuJsUpW-2Q1iw/non_transcode/us-west-1/periscope-replay-direct-prod-us-west-1-public/tw_master_dynamic_highlatency.m3u8?type=live', 'rm', 'https://cdnapisec.kaltura.com/p/4618003/sp/461800300/playManifest/entryId/1_pc5prdld/format/applehttp/protocol/https/uiConfId/50195093/a.m3u8?play', 11, 1, 1),
(309, '(2) Barcelona Eventos [VP]', 'https://cloud.odysee.live/live/116ef6b7d409049de4427a013938d2a83eef278d.m3u8', 'espn_sur', 'https://rndserv.xyz/img/tvc.png', 11, 1, 1),
(310, 'Movistar LaLiga [Eventual]', 'https://live-ak.vimeocdn.com/exp=1661028342~acl=%2F9f25d5de-f886-47f7-bafa-8b1719b124db%2F%2A~hmac=023daf027979661f63d1d887f27e010ca2c2926e4b05220be5922c633b8e15ec/9f25d5de-f886-47f7-bafa-8b1719b124db/chunklist_b416000.m3u8?Pericopalotes135', '', '', 11, 1, 1),
(311, 'DAZN LaLiga [Eventual]', 'https://cloud.odysee.live/live/116ef6b7d409049de4427a013938d2a83eef278d.m3u8', '', '', 11, 1, 1),
(312, 'Premier 1 [VP]', 'http://popops.azureedge.net:80/stream/NDk5Mw==/1080p.m3u8', '', '', 11, 1, 1),
(313, 'DirecTV Sports [EVENTUAL]', 'https://silencio.luxerplayer.org/drtv.html', '', '', 11, 4, 3),
(314, 'Ziggo Select [Eventual]', 'https://viperplay.net/premium/zselect', '', '', 11, 10, 3),
(315, 'DirecTV 2 Sports [EVENTUAL]', 'https://silencio.luxerplayer.org/drtv2.html', '', '', 11, 4, 3),
(316, 'CINE CLASICO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/609059dc63be6e0007b4eca6/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff111e2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=f9d5191c-e833-44e1-b5c5-067f5a57a102&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/609059dc63be6e0007b4eca6/colorLogoPNG.png', 24, 8, 8),
(317, 'SERIES RETRO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5de802659167b10009e7deba/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1ae21-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=efb5479a-1735-4d57-9b8e-16487d9760c3&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5de802659167b10009e7deba/colorLogoPNG.png', 24, 8, 8),
(318, 'ESTRELLAS DE ACCIÓN', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e972a21ad709d00074195ba/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff22351-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=988908ef-9cb1-4bfd-9346-d817932e3a37&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e972a21ad709d00074195ba/colorLogoPNG.png', 24, 8, 8),
(319, 'THRILLERS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ac8a87cd38d000745d7cf/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44a3bb2-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=bec2cd61-c8bf-4269-8475-9b5cdf24d1f0&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ac8a87cd38d000745d7cf/colorLogoPNG.png', 24, 8, 8),
(320, 'SCI-FI', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f2817d3d7573a00080f9175/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=ef4d2891-7255-11eb-a983-9335ded533f7&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=bd9d9781-2910-4dd2-9b1f-a1fd662d0cc3&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f2817d3d7573a00080f9175/colorLogoPNG.png', 24, 8, 8),
(321, 'SCI-FI 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f6a38eaa5b68b0007a00e7a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=ef4d2891-7255-11eb-a983-9335ded533f7&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=bd9d9781-2910-4dd2-9b1f-a1fd662d0cc3&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f6a38eaa5b68b0007a00e7a/colorLogoPNG.png', 24, 8, 8),
(322, 'CINE COMEDIA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcdde78f080d900098550e4/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bfefd960-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=91842cfa-96ff-4c3a-b034-234b53b31245&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcdde78f080d900098550e4/colorLogoPNG.png', 24, 8, 8),
(323, 'CINE COMEDIA 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ac8099c49f600076579b2/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44a3bb0-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=9679f680-433b-41b5-b65b-d3f9c407f275&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ac8099c49f600076579b2/colorLogoPNG.png', 24, 8, 8),
(324, 'CINE ROMANCE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dd7ea2aeab5230009986735/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff111e2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=f9d5191c-e833-44e1-b5c5-067f5a57a102&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd7ea2aeab5230009986735/colorLogoPNG.png', 24, 8, 8),
(325, 'CINE ROMÁNTICO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ac9a2d3611d0007a844bb/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44a89d0-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=b946b5ad-df98-4df0-a5c3-637b325d942e&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ac9a2d3611d0007a844bb/colorLogoPNG.png', 24, 8, 8),
(326, 'CINE PREMIERE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5cf968040ab7d8f181e6a68b/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c7df7a0-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=0592c791-fce9-4adb-b161-20f61b7145ae&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5cf968040ab7d8f181e6a68b/colorLogoPNG.png', 24, 8, 8),
(327, 'CINE ADRENALINA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d8d164d92e97a5e107638d2/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c804192-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=d0b46a48-3e72-4c90-a658-826f98daa8a9&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5d8d164d92e97a5e107638d2/colorLogoPNG.png', 24, 8, 8),
(328, 'PARAMOUNT+ PRESENTA', 'https://stitcher.pluto.tv/stitch/hls/channel/600728952b1776000776526d/master.m3u8?deviceType=web&servertSideAds=false&deviceMake=safari&deviceVersion=1&deviceId=spencer&appVersion=1&deviceDNT=0&deviceModel=web&sid=yasirProd', NULL, 'https://images.pluto.tv/channels/600728952b1776000776526d/colorLogoPNG.png', 24, 8, 8),
(329, 'CINE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5defde6d6c07b50009cf0757/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1ae24-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=b1c7f116-fa08-488b-a213-5bb1f7ee5ad2&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5defde6d6c07b50009cf0757/colorLogoPNG.png', 24, 8, 8),
(330, 'CINE DRAMA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcddfcb229eff00091b6bdf/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff00072-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6e24734a-39dc-48e4-8068-40d233385993&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcddfcb229eff00091b6bdf/colorLogoPNG.png', 24, 8, 8),
(331, 'CINE DRAMA 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ac947dcd00d0007937c08/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44a62c1-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=99870be5-05f2-48d8-b695-39dfabde3232&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ac947dcd00d0007937c08/colorLogoPNG.png', 24, 8, 8),
(332, 'CINE LATINO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f984c1dc54853000797a5e8/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44b4d22-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=7915058d-f10f-499c-be51-3669a8f4bd35&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f984c1dc54853000797a5e8/colorLogoPNG.png', 24, 8, 8),
(333, 'SEPTIMO ARTE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5cf96b1c4f1ca3f0629f4bf0/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c7df7a1-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=3548ea01-ec9a-4077-95c1-67068b0dfecd&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5cf96b1c4f1ca3f0629f4bf0/colorLogoPNG.png', 24, 8, 8),
(334, 'CINE ESTELAR', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcde437229eff00091b6c30/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff0c3c1-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=20f53e04-9cb8-454e-ad8b-838686c353e7&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcde437229eff00091b6c30/colorLogoPNG.png', 24, 8, 8),
(335, 'CINE ESTELAR 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f59f50cc36a94000749fd3f/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44aff04-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=236222be-74f0-4d28-b58b-70f75ce8319a&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcde437229eff00091b6c30/colorLogoPNG.png', 24, 8, 8),
(336, 'CINE ESTELAR 3', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ac1f1b66c76000790ef27/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44a14a1-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=e0810bdb-3103-4d41-9950-68244def5c07&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ac1f1b66c76000790ef27/colorLogoPNG.png', 24, 8, 8),
(337, 'CINE FAMILIA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dd6ddb30a1d8a000908ed4c/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff111e0-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=fa508f20-2870-486b-a716-7a14ab7ab7fb&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd6ddb30a1d8a000908ed4c/colorLogoPNG.png', 24, 8, 8),
(338, 'CINE ACCIÓN', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcb62e63d4d8f0009f36881/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bfef8b40-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=787d09fb-c219-46d0-b022-07fb4d7f7395&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcb62e63d4d8f0009f36881/colorLogoPNG.png', 24, 8, 8),
(339, 'CINE ACCIÓN 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ac2591dd8880007bb7d6d/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=ef4ba1f1-7255-11eb-a983-9335ded533f7&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=2ef6bc3f-95cc-43bd-98df-11ffd10b28fc&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ac2591dd8880007bb7d6d/colorLogoPNG.png', 24, 8, 8),
(340, 'CINE SUSPENSO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ddc4e8bcbb9010009b4e84f/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff18710-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6602c30d-29cf-40ea-9379-390b2d9b72bb&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ddc4e8bcbb9010009b4e84f/colorLogoPNG.png', 24, 8, 8),
(341, 'CINE TERROR', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcddf1ed95e740009fef7ab/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff00070-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=c808f376-3c51-4ce4-8dc1-f9b1e9c494cc&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcddf1ed95e740009fef7ab/colorLogoPNG.png', 24, 8, 8),
(342, 'CINE TERROR 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d8d180092e97a5e107638d3/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c8068a0-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=31d6ed5a-e18e-40e7-86c3-072f2b86df3c&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5d8d180092e97a5e107638d3/colorLogoPNG.png', 24, 8, 8),
(343, 'SERIES', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcde1317578340009b751d0/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff04e90-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=7937749a-cec8-47cd-b6d9-43b0c4fea6c8&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcde1317578340009b751d0/colorLogoPNG.png', 24, 8, 8),
(344, 'SERIES 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ac8f49205650007bc15f1/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44a62c0-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=59508532-73e8-480a-a7ac-ca658e672783&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ac8f49205650007bc15f1/colorLogoPNG.png', 24, 8, 8),
(345, 'SERIES 3', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f5a2b4b1ad8fd000795ac87/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44b2616-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=0cab4396-5ed7-45d4-8608-8045b2eae51f&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ac8f49205650007bc15f1/colorLogoPNG.png', 24, 8, 8),
(346, 'SERIES COMEDIA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f9853138d19af0007104a8d/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44b4d24-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=7b6b94ee-3d86-4a59-b406-f3548f232fe2&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f9853138d19af0007104a8d/colorLogoPNG.png', 24, 8, 8),
(347, 'SERIES LATINAS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dd837642c6e9300098ad484/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff138f1-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=66035293-500c-4b3d-8f02-dc855d5f476d&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd837642c6e9300098ad484/colorLogoPNG.png', 24, 8, 8),
(348, 'THE WALKING DEAD', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5e82bb378601b80007b4bd78/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&genre=ROKU_ADS_CONTENT_GENRE&content_rating=ROKU_ADS_CONTENT_RATING&studio_id=viacom&channel_id=channel', NULL, 'http://images.pluto.tv/channels/5e82bb378601b80007b4bd78/colorLogoPNG.png', 24, 8, 8),
(349, 'WIPE OUT', 'https://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ed6828192e8b3000743ef61/master.m3u8?advertisingId=&appName=web&appVersion=5.14.0-0f5ca04c21649b8c8aad4e56266a23b96d73b83a&app_name=web&clientDeviceType=0&clientID=6fbead95-26b1-415d-998f-1bdef62d10be&clientModelNumber=na&deviceDNT=false&deviceId=6fbead95-26b1-415d-998f-1bdef62d10be&deviceLat=19.4358&deviceLon=-99.1441&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=88.0.4324.150&marketingRegion=VE&serverSideAds=false&sessionID=b8e5a857-714a-11eb-b532-0242ac110002&sid=b8e5a857-714a-11eb-b532-0242ac110002&userId=', NULL, 'https://images.pluto.tv/channels/5ed6828192e8b3000743ef61/colorLogoPNG.png', 24, 8, 8),
(350, 'MUTANTE X', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5f1acc91cc9e1b000711ff21/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&content_rating=ROKU_ADS_CONTENT_RATING', NULL, 'https://images.pluto.tv/channels/5f1acc91cc9e1b000711ff21/colorLogoPNG.png', 24, 8, 8),
(351, 'LA CHICA INVISIBLE', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5f1abe3ffcd659000770d88d/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&content_rating=ROKU_ADS_CONTENT_RATING', NULL, 'https://images.pluto.tv/channels/5f1abe3ffcd659000770d88d/colorLogoPNG.png', 24, 8, 8),
(352, 'ANDROMEDA', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5e8db96bccae160007c71eec/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&genre=ROKU_ADS_CONTENT_GENRE&content_rating=ROKU_ADS_CONTENT_RATING&studio_id=viacom&channel_id=channel', NULL, 'https://images.pluto.tv/channels/5e8db96bccae160007c71eec/colorLogoPNG.png', 24, 8, 8),
(353, 'LOS ASESINATOS DE MIDSOMER', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5f1aca8310a30e00074fab92/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&content_rating=ROKU_ADS_CONTENT_RATING', NULL, 'https://images.pluto.tv/channels/5f1aca8310a30e00074fab92/colorLogoPNG.png', 24, 8, 8),
(354, 'NUESTRA VISION', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5e6690befbdf780007f78158/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&genre=ROKU_ADS_CONTENT_GENRE&content_rating=ROKU_ADS_CONTENT_RATING&studio_id=viacom&channel_id=channel', NULL, 'http://images.pluto.tv/channels/5e6690befbdf780007f78158/colorLogoPNG.png', 24, 8, 8),
(355, 'CINE JAJA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f513564e4622a0007c578c0/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5f513564e4622a0007c578c0/colorLogoPNG.png', 24, 8, 8),
(356, 'CINE XOXO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f5136317aedfb0007016f93/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5f5136317aedfb0007016f93/colorLogoPNG.png', 24, 8, 8),
(357, 'NASHVILLE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/604928030aa8a70007c1f213livestitch/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/604928030aa8a70007c1f213/colorLogoPNG.png', 24, 8, 8),
(358, 'CSI', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/604928d54a4f730007ff76bc/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/604928d54a4f730007ff76bc/colorLogoPNG.png', 24, 8, 8),
(359, 'VIAJE A LAS ESTRELLAS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/6049295e7dcef800073c2499/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/6049295e7dcef800073c2499/colorLogoPNG.png', 24, 8, 8),
(360, 'NARCOS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f7b47f12a45590007821749/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c8a2ca4-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=db32e708-3f49-4116-9202-54e60c2967ae&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f7b47f12a45590007821749/colorLogoPNG.png', 24, 8, 8),
(361, 'NARCOS 2', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5f7274806621ff00072651ff/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&genre=ROKU_ADS_CONTENT_GENRE&content_rating=ROKU_ADS_CONTENT_RATING&studio_id=viacom&channel_id=channel', NULL, 'http://images.pluto.tv/channels/5f7274806621ff00072651ff/colorLogoPNG.png', 24, 8, 8),
(362, 'SIN TETAS NO HAY PARAISO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/604bdf4e6d0abc0007ba77ad/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/604bdf4e6d0abc0007ba77ad/colorLogoPNG.png', 24, 8, 8),
(363, 'TOKUSATO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ff608e60e2996000768c366/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ff608e60e2996000768c366/colorLogoPNG.png', 24, 8, 8),
(364, 'DOUG EL CAZARRECOMPENZA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f9992c685a2a80007fa414a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f9992c685a2a80007fa414a/colorLogoPNG.png', 24, 8, 8),
(365, 'ANA Y LOS 7', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1acce7f17797000718f9be/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1acce7f17797000718f9be/colorLogoPNG.png', 24, 8, 8),
(366, 'CURRO JIMENEZ', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1acd36779de70007a680d1/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1acd36779de70007a680d1/colorLogoPNG.png', 24, 8, 8),
(367, 'FÚTBOL PARA FANS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e3ddd1a3ef73b00091d5779/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1d533-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=04baab3a-5f85-4e2b-9112-e0c2b16014ce&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e3ddd1a3ef73b00091d5779/colorLogoPNG.png', 24, 8, 8),
(368, 'DEGRASSI', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5de58ef515635d00091f605d/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1ae20-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=4c93798e-e952-447f-a365-6bf6f3f1ab9a&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5de58ef515635d00091f605d/colorLogoPNG.png', 24, 8, 8),
(369, 'ARCHIVOS FORENSES', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5efb8c19b2678b000780d032/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5efb8c19b2678b000780d032/colorLogoPNG.png', 14, 8, 8),
(370, 'ARCHIVOS FBI', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e67d41b93312100076f3fca/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e67d41b93312100076f3fca/colorLogoPNG.png', 14, 8, 8),
(371, 'THE NEWS DETECTIVES', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ea71d48af1d0b0007d837f4/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ea71d48af1d0b0007d837f4/colorLogoPNG.png', 14, 8, 8),
(372, 'HISTORIAS DE ULTRATUMBA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f4d3696d938c900072679fd/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f4d3696d938c900072679fd/colorLogoPNG.png', 14, 8, 8),
(373, 'MISTERIOS SIN RESOLVER', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f610042272f68000867685b/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f610042272f68000867685b/colorLogoPNG.png', 14, 8, 8),
(374, 'MISTERIOS MEDICOS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f230e416b68ff00075b0139/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f230e416b68ff00075b0139/colorLogoPNG.png', 14, 8, 8),
(375, 'MISTERIOS', 'https://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcde2f53449c50009b2b4dc/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=46d6f678-e5e4-4c2d-b6ae-02fbc5444cb0&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=d2e65dce-93c5-11eb-939c-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcde2f53449c50009b2b4dc/colorLogoPNG.png', 14, 8, 8),
(376, 'HELL\'S KITCHEN', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492b2794116800073e32dc/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492b2794116800073e32dc/colorLogoPNG.png', 14, 8, 8),
(377, 'INVESTIGA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5cf96b8f4f1ca3f0629f4bf1/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5cf96b8f4f1ca3f0629f4bf1/colorLogoPNG.png', 14, 8, 8),
(378, 'CRIMENES IMPERFECTOS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e94cd036cc69d0007e8a1ba/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5e94cd036cc69d0007e8a1ba/colorLogoPNG.png', 14, 8, 8),
(379, 'EMERGENCIAS 911', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492a1e6361250007679665/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492a1e6361250007679665/colorLogoPNG.png', 14, 8, 8),
(380, 'MUNDO PARANORMAL', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492a9bbca75b0007b1bfd5/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492a9bbca75b0007b1bfd5/colorLogoPNG.png', 14, 8, 8),
(381, 'MISTERIO SIN RESOLVER 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f4d882d5233170007ee880e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5f4d882d5233170007ee880e/colorLogoPNG.png', 14, 8, 8),
(382, 'EL CONQUISTADOR DEL FIN', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5f280149cec6be00072ab1fc/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&content_rating=ROKU_ADS_CONTENT_RATING', NULL, 'https://images.pluto.tv/channels/5f280149cec6be00072ab1fc/colorLogoPNG.png', 14, 8, 8),
(383, 'MUNDO GEEK', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/6051201a0aa8a70007c24a2a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/6051201a0aa8a70007c24a2a/colorLogoPNG.png', 14, 8, 8),
(384, 'ESCAPE PERFECTO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/605e479d5b8229000763e697/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/605e479d5b8229000763e697/colorLogoPNG.png', 14, 8, 8),
(385, 'NOSEY ESCANDALOS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f9afb01816137000737f799/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f9afb01816137000737f799/colorLogoPNG.png', 14, 8, 8),
(386, 'NOSEY CASOS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f9b005b66d1950007857df6/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f9b005b66d1950007857df6/colorLogoPNG.png', 14, 8, 8),
(387, 'MINUTOS PARA GANAR', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e46e64dc73db400094b5f0b/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e46e64dc73db400094b5f0b/colorLogoPNG.png', 14, 8, 8),
(388, 'NOSEY ESCANDALOS 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492ee6375a3900079a158c/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492ee6375a3900079a158c/colorLogoPNG.png', 14, 8, 8),
(389, 'NOSEY CASOS 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492f6c4a4f730007ff76c5/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492f6c4a4f730007ff76c5/colorLogoPNG.png', 14, 8, 8),
(390, 'EMPEÑOS A LO BESTIA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f23102d5e239d00074b092a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f23102d5e239d00074b092a/colorLogoPNG.png', 14, 8, 8),
(391, 'LAS REGLAS DEL JUEGO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1acb4eebe0f0000767b40f/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1acb4eebe0f0000767b40f/colorLogoPNG.png', 14, 8, 8),
(392, 'TV MADE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1aaefb96f755000733c11a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aaefb96f755000733c11a/colorLogoPNG.png', 14, 8, 8),
(393, 'VAYA SEMANITA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f28009b150b2500077766b8/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f28009b150b2500077766b8/colorLogoPNG.png', 14, 8, 8),
(394, 'TV VIDA REAL', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5df265697ec3510009df1ef0/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1d530-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=ec2383fd-6e28-4df5-9d1c-b66eee700e0c&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5df265697ec3510009df1ef0/colorLogoPNG.png', 14, 8, 8);
INSERT INTO `channels` (`channelId`, `channelName`, `channelUrl`, `epg`, `channelImg`, `category`, `country`, `type`) VALUES
(395, 'TV VIDA REAL 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f5a0b44cc331900075e7769/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44b2614-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=90ce9a24-5441-43cd-b47a-9bf118213407&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5df265697ec3510009df1ef0/colorLogoPNG.png', 14, 8, 8),
(396, 'REAL LIFE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1abdceddf6a20007f8ccd2/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b449c682-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=8d96b811-f975-445c-a6de-0af8c9a1816e&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1abdceddf6a20007f8ccd2/colorLogoPNG.png', 14, 8, 8),
(397, 'TV MUNDO REAL', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1acdfda84c970007e750b5/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44aff01-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=88807768-141f-4fbd-b153-6f5257129b8c&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1acdfda84c970007e750b5/colorLogoPNG.png', 14, 8, 8),
(398, 'MI OBSESION FAVORITA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d93b4d71754e6a4298d086e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c8068a1-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=8f99b228-251b-4230-bbe0-7bc14292a7e0&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5d93b4d71754e6a4298d086e/colorLogoPNG.png', 14, 8, 8),
(399, 'TV AVENTURA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ddc266f80e3550009136843/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff16001-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=4420bd28-3750-4503-ab32-d76a0c1ec97d&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ddc266f80e3550009136843/colorLogoPNG.png', 14, 8, 8),
(400, 'SPIKE EXTREMO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d8d11baeb31c5a43b77bf59/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c804191-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=18c982c0-0d7b-4cf8-bf92-6eaec6a491c2&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5d8d11baeb31c5a43b77bf59/colorLogoPNG.png', 14, 8, 8),
(401, 'MTV CLASSICS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5de91b7ea86ee60009d89e75/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1ae22-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=660d0b2a-7fb6-45ce-9752-4b5be4f0e398&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5de91b7ea86ee60009d89e75/colorLogoPNG.png', 14, 8, 8),
(402, 'MTV PRANKS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e98a911c881310007d7aae2/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff22352-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=1ac7d946-bd48-4171-91bf-2030c4d3b690&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e98a911c881310007d7aae2/colorLogoPNG.png', 14, 8, 8),
(403, 'MTV PLUTO TV', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fab088b3279760007d4e4fd/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=a7e64375-725e-11eb-8572-a154f88ef305&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=1ae43b29-e0ce-4a28-90a5-107a512d1569&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5fab088b3279760007d4e4fd/colorLogoPNG.png', 14, 8, 8),
(404, 'MTV LATINO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5cf96d351652631e36d4331f/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c7e1eb0-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=180d9c2e-993f-4454-ac06-0f43e4f8058c&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5cf96d351652631e36d4331f/colorLogoPNG.png', 14, 8, 8),
(405, 'MTV ORIGINALS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1aadf373bed3000794d1d7/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b4495152-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=c371865e-69ac-45d8-80b7-62e5b4982b87&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aadf373bed3000794d1d7/colorLogoPNG.png', 14, 8, 8),
(406, 'MTV ORIGINALS 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f59f5b7cc331900075e7767/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44aff05-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=515c9042-50ef-465d-8e07-385e27e4cdaf&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aadf373bed3000794d1d7/colorLogoPNG.png', 14, 8, 8),
(407, 'MTV CRIBS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ab9c6d8f1300007f54e30/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b449c680-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=a40f774d-360e-44d5-8490-935e6ac7b98a&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ab9c6d8f1300007f54e30/colorLogoPNG.png', 14, 8, 8),
(408, 'MTV CRIBS 2 @PlutoTV    ', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f5a0a5ea82f7200075cb926/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44b2612-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=786f8457-42a5-48f9-8833-bffe6bb92508&userId=&serverSideAds=true', NULL, 'hhttps://images.pluto.tv/channels/5f1ab9c6d8f1300007f54e30/colorLogoPNG.png', 14, 8, 8),
(409, 'MTV CATFISH', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ab3c7778230000735cf41/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b4497861-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=233b67dc-c1e8-4702-97db-01e491dfcc9b&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ab3c7778230000735cf41/colorLogoPNG.png', 14, 8, 8),
(410, 'MTV CATFISH 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f59f661f68f9200078870d4/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44aff06-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=807d26b3-dae4-4895-b8e0-c9e4ab926b6d&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ab3c7778230000735cf41/colorLogoPNG.png', 14, 8, 8),
(411, 'MTV DATING', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/600169ec77e6f70008fa9cf0/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44b4d27-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=74a78902-e6fb-4524-b3af-ed5282ffbf6e&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/600169ec77e6f70008fa9cf0/colorLogoPNG.png', 14, 8, 8),
(412, 'MTV EMBARAZADA A LOS 16', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5f98537a5a4341000733aefe/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&content_rating=ROKU_ADS_CONTENT_RATING', NULL, 'https://images.pluto.tv/channels/5f98537a5a4341000733aefe/colorLogoPNG.png', 14, 8, 8),
(413, 'BEBESITO BUM Y SUS AMIGOS', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/60493283ffc52f000710edae/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&genre=ROKU_ADS_CONTENT_GENRE&content_rating=ROKU_ADS_CONTENT_RATING&studio_id=viacom&channel_id=channel', NULL, 'https://images.pluto.tv/channels/60493283ffc52f000710edae/colorLogoPNG.png', 6, 8, 8),
(414, 'MTV ANIMACIONES', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5efb8ce2e426140007c78fd1/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=ef4c3e30-7255-11eb-a983-9335ded533f7&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=2122e9a3-0ffd-41e4-bb57-eb51058728f6&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5efb8ce2e426140007c78fd1/colorLogoPNG.png', 6, 8, 8),
(415, 'ANIME CLASICO', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/6054acc871ec430007f54c7d/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&genre=ROKU_ADS_CONTENT_GENRE&content_rating=ROKU_ADS_CONTENT_RATING&studio_id=viacom&channel_id=channel', NULL, 'https://images.pluto.tv/channels/6054acc871ec430007f54c7d/colorLogoPNG.png', 6, 8, 8),
(416, 'BOB ESPONJA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1aca0b4e448e00075e7c5e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=ef4c3e30-7255-11eb-a983-9335ded533f7&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=2122e9a3-0ffd-41e4-bb57-eb51058728f6&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aca0b4e448e00075e7c5e/colorLogoPNG.png', 6, 8, 8),
(417, 'BOB ESPONJA PLUS', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5fd87d882574170007fac022/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&content_rating=ROKU_ADS_CONTENT_RATING', NULL, 'https://images.pluto.tv/channels/5f1aca0b4e448e00075e7c5e/colorLogoPNG.png', 6, 8, 8),
(418, 'TV ANIME', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcde17bf6591d0009839e02/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff04e91-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=bf9f2657-23e0-4f9a-aed5-1895900d08da&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcde17bf6591d0009839e02/colorLogoPNG.png', 6, 8, 8),
(419, 'TV ANIME ACCIÓN', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e6a4d875d7ccf0007cc2cf1/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1fc43-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=0102247d-6255-454b-b42a-4ed18335dc86&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e6a4d875d7ccf0007cc2cf1/colorLogoPNG.png', 6, 8, 8),
(420, 'YU-GI-OH!', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fceaab478f2af00080ff51f/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=c04e45b2-630a-11eb-8d9f-f313ae1a2a61&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=681f0ed2-2ad0-493f-9d9a-c9491e58c9ff&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5fceaab478f2af00080ff51f/colorLogoPNG.png', 6, 8, 8),
(421, 'YU-GI-OH 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/604930bc28b24d0007e0e171/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/604930bc28b24d0007e0e171/colorLogoPNG.png', 6, 8, 8),
(422, 'NARUTO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ee92e72fb286e0007285fec/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff27170-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=d1372261-d71b-427e-b9b7-e0afe4a6974b&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ee92e72fb286e0007285fec/colorLogoPNG.png', 6, 8, 8),
(423, 'NARUTO 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60493045fbb5e50007b36f4d/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60493045fbb5e50007b36f4d/colorLogoPNG.png', 6, 8, 8),
(424, 'ONE PIECE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ff4b9ccf938f8000779eb99/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=79573c14-77dd-11eb-a61c-2f38487b60c0&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=c4c4d3a3-dc88-49b4-9fda-30049d73b3f2&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ff4b9ccf938f8000779eb99/colorLogoPNG.png', 6, 8, 8),
(425, 'NICK JR. LATINO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d8d0ec7b0f7015fbe0a3bf7/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c7ff372-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=508efa49-44d3-42fd-8d4d-75f10b4e7cc7&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5d8d0ec7b0f7015fbe0a3bf7/colorLogoPNG.png', 6, 8, 8),
(426, 'NICK CLÁSICO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ddd7c348520b40009c347e2/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff18711-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=e8d15965-7824-4eee-a6c8-345e488692b7&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ddd7c348520b40009c347e2/colorLogoPNG.png', 6, 8, 8),
(427, 'NICK LATINO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d8d08395f39465da6fb3ec4/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c7ff371-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=c59413c7-c50b-4407-b45a-db56bbc21724&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5d8d08395f39465da6fb3ec4/colorLogoPNG.png', 6, 8, 8),
(428, 'NICK TEEN', 'https://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fab09a8749b1a00077d35d2/master.m3u8?advertisingId=&appName=web&appVersion=5.15.0-cb3de003a5ed7a595e0e5a8e1a8f8f30ad8ed23a&app_name=web&clientDeviceType=0&clientID=c9e73ae3-bf04-4f52-a57d-c955d6cbef86&clientModelNumber=na&deviceDNT=false&deviceId=c9e73ae3-bf04-4f52-a57d-c955d6cbef86&deviceLat=-34.6011&deviceLon=-58.3847&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=89.0.4389.90&marketingRegion=VE&serverSideAds=true&sessionID=aec89e2d-8415-11eb-850e-0242ac110002&sid=aec89e2d-8415-11eb-850e-0242ac110002&userId=', NULL, 'https://images.pluto.tv/channels/5fab09a8749b1a00077d35d2/colorLogoPNG.png', 6, 8, 8),
(429, 'ANIMAKIDS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1aabee6f4a2c00076a322c/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=ef4a9081-7255-11eb-a983-9335ded533f7&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=0c9000f4-d30c-416a-8bcb-5aa42bc26c6b&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aabee6f4a2c00076a322c/colorLogoPNG.png', 6, 8, 8),
(430, 'BARNEY', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f29ada4bdaebd000708d49d/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff29882-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=daaec956-b0c6-4701-a551-d3b7bab3a563&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f29ada4bdaebd000708d49d/colorLogoPNG.png', 6, 8, 8),
(431, 'BABAR', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e67e20c93312100076f3ffe/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1fc42-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=4dd50492-4fb9-436b-9efe-56335cf7502f&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e67e20c93312100076f3ffe/colorLogoPNG.png', 6, 8, 8),
(432, 'TV JUNIOR', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcde2ac4bc6c500094ab45b/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff09cb2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=8363a179-73ed-45ee-8927-75d6fecf5c50&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcde2ac4bc6c500094ab45b/colorLogoPNG.png', 6, 8, 8),
(433, 'TV JUNIOR 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1aa9bcd8160700076d45d1/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b4492a41-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=8ae70f51-5e3c-4e72-b4fa-e5c3a3ced6ae&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aa9bcd8160700076d45d1/colorLogoPNG.png', 6, 8, 8),
(434, 'BABYFIRST', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ebac49ce4dc8b00078b23bc/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff22356-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=9245c0c5-80d7-43b0-a132-df93fca90821&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ebac49ce4dc8b00078b23bc/colorLogoPNG.png', 6, 8, 8),
(435, 'EL REINO INFANTIL', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f4d3d06fb60d8000781fce8/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c0-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=51f247aa-de6a-4551-a331-ffa4c5dc6b64&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f4d3d06fb60d8000781fce8/colorLogoPNG.png', 6, 8, 8),
(436, 'TV KIDS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dd6dae8ce788b0009eaf77b/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff0ead1-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=ef84427d-008b-4c14-b485-09f974e5056f&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd6dae8ce788b0009eaf77b/colorLogoPNG.png', 6, 8, 8),
(437, 'TV KIDS 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f5a09b16cd4ab0007d24fb8/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=ef4cb362-7255-11eb-a983-9335ded533f7&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=afa8239d-eea1-4295-b421-43f3852ddc10&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd6dae8ce788b0009eaf77b/colorLogoPNG.png', 6, 8, 8),
(438, 'ACTION KIDS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60218c2a32f9c40007c2f7cc/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=80606d41-7bcc-11eb-86a4-8df5e66ea440&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=d7fc0a51-2f1d-448b-8546-5071095e4b90&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/60218c2a32f9c40007c2f7cc/colorLogoPNG.png', 6, 8, 8),
(439, 'NICK JR. CLUB', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ddd7cb2cbb9010009b4fe32/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff18712-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6796fdc2-2bb5-4e80-a717-366aa2433636&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ddd7cb2cbb9010009b4fe32/colorLogoPNG.png', 6, 8, 8),
(440, 'TV TEEN', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dd6de52b9914200091f047a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff111e1-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=fe342837-658e-4c01-af1b-63c86a3ccece&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd6de52b9914200091f047a/colorLogoPNG.png', 6, 8, 8),
(441, 'TV TEEN STARS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60016a60a8e3520008e0d331/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44b7430-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=e0a77951-0789-4708-b820-e6bcefa8ee82&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/60016a60a8e3520008e0d331/colorLogoPNG.png', 6, 8, 8),
(442, 'KENAN & KEL', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fcea93ffcf94500071c4b2f/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff4bb60-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=7bb7672d-32f3-4e6a-9ff0-3e2488d68da1&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5fcea93ffcf94500071c4b2f/colorLogoPNG.png', 6, 8, 8),
(443, 'BIG TIME RUSH', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1aa7aab66c76000790ee7e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=ef4a1b50-7255-11eb-a983-9335ded533f7&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=ae85d69e-9291-4dd1-a2b4-facd888e7465&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aa7aab66c76000790ee7e/colorLogoPNG.png', 6, 8, 8),
(444, 'RUGRATS CRECIDOS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ea7215005d66d0007e8128a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff22355-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=d4d35c3c-b9bc-4c57-92f3-6ec7da17e471&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ea7215005d66d0007e8128a/colorLogoPNG.png', 6, 8, 8),
(445, 'LAS PISTAS DE BLUE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f9996533c9de3000759ccb5/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff49450-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=2dab1e46-b757-41f4-af9a-7a988974b383&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f9996533c9de3000759ccb5/colorLogoPNG.png', 6, 8, 8),
(446, 'LAS PISTAS DE BLUE 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1aa82c150b2500077733d7/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b4490330-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=35438e12-0256-4671-8505-e75782804dc9&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aa82c150b2500077733d7/colorLogoPNG.png', 6, 8, 8),
(447, 'GO DIEGO GO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1aa89d42a0500007363ea3/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=ef4a6970-7255-11eb-a983-9335ded533f7&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=792b48f4-9e17-4498-a864-053b445aef6a&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aa89d42a0500007363ea3/colorLogoPNG.png', 6, 8, 8),
(448, 'ESR 24X7 NETWORK', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fb554d87a0c480007c8dada/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=79573c11-77dd-11eb-a61c-2f38487b60c0&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=8c67fb7c-fcd9-41e1-baba-8fefef855e17&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5fb554d87a0c480007c8dada/colorLogoPNG.png', 6, 8, 8),
(449, 'TV GAMER', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ca7f16c37b88b2694731c79/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c7d5b62-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=a8311f10-8c2e-45bb-a408-7e2c579d7adb&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ca7f16c37b88b2694731c79/colorLogoPNG.png', 6, 8, 8),
(450, 'TV VIAJES', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcddfbdb7cf0e0009ae09ea/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff00071-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=ef6ea5a4-5004-451b-bbdc-9dd3d9cc8614&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcddfbdb7cf0e0009ae09ea/colorLogoPNG.png', 26, 8, 8),
(451, 'TV CIENCIA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dd8364ea1d6780009929902/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff138f0-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=1f0bad78-81a8-4ec0-bca7-e97463a2cc94&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd8364ea1d6780009929902/colorLogoPNG.png', 26, 8, 8),
(452, 'TV MUNDO', 'https://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d8d103f031154a4172d262b/master.m3u8?terminate=false&deviceType=web&deviceMake=web&deviceModel=web&sid=959&deviceId=5d8d103f031154a4172d262b&deviceVersion=DNT&appVersion=DNT&deviceDNT=0&userId=&advertisingId=&deviceLat=&deviceLon=&app_name=&appName=web&buildVersion=&appStoreUrl=&architecture=&includeExtendedEvents=false&marketingRegion=US&serverSideAds=false', NULL, 'https://images.pluto.tv/channels/5d8d103f031154a4172d262b/colorLogoPNG.png', 26, 8, 8),
(453, 'TV HISTORIA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5de5758e1a30dc00094fcd6c/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff18713-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=3efb2623-4d66-4ffa-b1f5-4b9d5f63d16c&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5de5758e1a30dc00094fcd6c/colorLogoPNG.png', 26, 8, 8),
(454, 'TV NATURALEZA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dd85eac039bba0009e86d1d/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff16000-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=d26f2f3a-e8be-493e-9e88-d9c8f6a4b80c&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd85eac039bba0009e86d1d/colorLogoPNG.png', 26, 8, 8),
(455, 'TV NATURALEZA 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d8d10ce06a9665fe54bf74a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c804190-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=c17b587b-1c4b-4113-806a-81298e54678e&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5d8d10ce06a9665fe54bf74a/colorLogoPNG.png', 26, 8, 8),
(456, 'TV ANIMALES', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dd834c66fe2ca0009303b8d/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff111e3-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=f8b00032-b77c-4a09-85aa-2efb870d9032&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd834c66fe2ca0009303b8d/colorLogoPNG.png', 26, 8, 8),
(457, 'TV ANIMALES 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/600ae6a78d801e0007117d21/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=80604634-7bcc-11eb-86a4-8df5e66ea440&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=1735a645-8fe1-4cf4-96a3-62c1e4c43743&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/600ae6a78d801e0007117d21/colorLogoPNG.png', 26, 8, 8),
(458, 'CBS REALITY', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcde197f6591d0009839e04/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5dcde197f6591d0009839e04/colorLogoPNG.png', 26, 8, 8),
(459, 'MUNDO VIAJERO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60511efd71ec430007f50d97/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60511efd71ec430007f50d97/colorLogoPNG.png', 26, 8, 8),
(460, 'ENTRE NOSOTRAS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492c67f4c48700075b5d37/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492c67f4c48700075b5d37/colorLogoPNG.png', 14, 8, 8),
(461, 'LATIN ANGELS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5df41355939756000921d15b/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5df41355939756000921d15b/colorLogoPNG.png', 14, 8, 8),
(462, 'TV HUMOR', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e8397936791b30007ebb5a7/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e8397936791b30007ebb5a7/colorLogoPNG.png', 14, 8, 8),
(463, 'SONY COMEDIAS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492bb931054f00073c0b4e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492bb931054f00073c0b4e/colorLogoPNG.png', 14, 8, 8),
(464, 'LOUPE ARTE + MUSICA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ffcc38adbc38100073511f2/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ffcc38adbc38100073511f2/colorLogoPNG.png', 14, 8, 8),
(465, 'TV COCINA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcde0657444a40009cd2422/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff02780-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=8850b362-804f-4cf0-a920-4f711796663f&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcde0657444a40009cd2422/colorLogoPNG.png', 14, 8, 8),
(466, 'FOODIES', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d8d0fbaa8742fa3093899da/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c801a80-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=0e0dc4ab-902e-4ad1-a9d5-748727626eaa&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5d8d0fbaa8742fa3093899da/colorLogoPNG.png', 14, 8, 8),
(467, 'MASTER CHEF', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e3ddbd27091820009f86dd9/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1d532-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=3935b7bb-6c42-4a74-a1c0-19d91d4ea3b7&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e3ddbd27091820009f86dd9/colorLogoPNG.png', 14, 8, 8),
(468, 'TV COCINA 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1acdaa8ba90f0007d5e760/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=ef4c6543-7255-11eb-a983-9335ded533f7&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=1fc7e1c7-88d8-4d19-915b-02a6745f031d&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1acdaa8ba90f0007d5e760/colorLogoPNG.png', 14, 8, 8),
(469, 'COMEDY CENTRAL', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ffcc21a432945000762d06b/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=79573c15-77dd-11eb-a61c-2f38487b60c0&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=bd904709-6614-46f7-80bd-de128553e6f3&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ffcc21a432945000762d06b/colorLogoPNG.png', 14, 8, 8),
(470, 'COMEDY CENTRAL LATINO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5cf96dad1652631e36d43320/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c7e1eb1-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=21b9ab81-ee95-4efe-8594-158f8ea6d0c7&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5cf96dad1652631e36d43320/colorLogoPNG.png', 14, 8, 8),
(471, 'COMEDIA MADE IN SPAIN', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1abce155a03d0007718834/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b449c681-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=01d86952-90df-4d0a-b9ae-c63701be5b5c&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1abce155a03d0007718834/colorLogoPNG.png', 14, 8, 8),
(472, 'FAILARMY', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ebaccf1734aaf0007142c86/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff24a62-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=b9ea5930-45f6-4bd0-bca2-db4f4ca9fbc2&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ebaccf1734aaf0007142c86/colorLogoPNG.png', 14, 8, 8),
(473, 'TROL', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1aae8c65727d0007d15a17/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b4495153-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=7a2764e7-63c5-42d1-b852-912658276538&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aae8c65727d0007d15a17/colorLogoPNG.png', 14, 8, 8),
(474, 'PET COLLECTIVE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ebacbcae43a6d000787b88e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ebacbcae43a6d000787b88e/colorLogoPNG.png', 14, 8, 8),
(475, 'OH MY PET', 'https://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f2acdab16f5b3000721ae2c/master.m3u8?advertisingId=&appName=web&appVersion=5.14.0-0f5ca04c21649b8c8aad4e56266a23b96d73b83a&app_name=web&clientDeviceType=0&clientID=6fbead95-26b1-415d-998f-1bdef62d10be&clientModelNumber=na&deviceDNT=false&deviceId=6fbead95-26b1-415d-998f-1bdef62d10be&deviceLat=19.4358&deviceLon=-99.1441&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=88.0.4324.150&marketingRegion=VE&serverSideAds=false&sessionID=b8e5a857-714a-11eb-b532-0242ac110002&sid=b8e5a857-714a-11eb-b532-0242ac110002&userId=', NULL, 'https://images.pluto.tv/channels/5f2acdab16f5b3000721ae2c/colorLogoPNG.png', 14, 8, 8),
(476, 'PEOPLE ARE AWESONE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ebac65911406400078b8993/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ebac65911406400078b8993/colorLogoPNG.png', 14, 8, 8),
(477, 'TASTEMADE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f998c1fc54853000797bacd/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff35bd1-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=b54be6f9-df4b-4c83-b6ff-d2c9a847569e&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f998c1fc54853000797bacd/colorLogoPNG.png', 14, 8, 8),
(478, 'TV HOGAR', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dd6ab8056beb000091fc6b6/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff0c3c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=83815638-64f0-4bf4-8cd2-92feb27f8740&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd6ab8056beb000091fc6b6/colorLogoPNG.png', 14, 8, 8),
(479, 'FASHIONBOX', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ee8d84bfb286e0007285aad/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff24a64-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dcad69d9-cbe2-4e00-a9bc-3c865cdc4424&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ee8d84bfb286e0007285aad/colorLogoPNG.png', 14, 8, 8),
(480, 'TV NOVELAS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcde0cc2efd2700090b7ff4/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff02782-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=22b78acb-0a00-4b76-bfa7-4f50b2916c32&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcde0cc2efd2700090b7ff4/colorLogoPNG.png', 14, 8, 8),
(481, 'TELEMUNDO TELENOVELAS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5cf96cc422df39f1a338d165/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c7df7a3-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=a164a5e2-21e7-49e8-a7e9-bbc4785c7386&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5cf96cc422df39f1a338d165/colorLogoPNG.png', 14, 8, 8),
(482, 'AMANTES DEL ROMANCE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e84db2db3851800077c871e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c839cf2-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=9a7995e2-90ca-4ea0-82a2-c34af9dc3d4e&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e84db2db3851800077c871e/colorLogoPNG.png', 14, 8, 8),
(483, 'NOVELAS CON LA ABUELA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e84dbf4a838b60007ffbba1/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c83c400-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=1feeb0e2-4545-4706-9038-7ed5ff515781&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e84dbf4a838b60007ffbba1/colorLogoPNG.png', 14, 8, 8),
(484, 'BADASS NOVELAS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e84dc59026b9b000766f9a2/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c83c401-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=ffbb9a2c-01a5-4d7e-9f19-6c9247bdee77&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e84dc59026b9b000766f9a2/colorLogoPNG.png', 14, 8, 8),
(485, 'Vaya semanita', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5f28009b150b2500077766b8/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&content_rating=ROKU_ADS_CONTENT_RATING', NULL, 'https://images.pluto.tv/channels/5f28009b150b2500077766b8/colorLogoPNG.png', 14, 8, 8);
INSERT INTO `channels` (`channelId`, `channelName`, `channelUrl`, `epg`, `channelImg`, `category`, `country`, `type`) VALUES
(486, 'CRIMENES IMPERFECTOS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e94cd036cc69d0007e8a1ba/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5e94cd036cc69d0007e8a1ba/colorLogoPNG.png', 14, 8, 8),
(487, 'EMERGENCIAS 911', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492a1e6361250007679665/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492a1e6361250007679665/colorLogoPNG.png', 14, 8, 8),
(488, 'MUNDO PARANORMAL', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492a9bbca75b0007b1bfd5/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492a9bbca75b0007b1bfd5/colorLogoPNG.png', 14, 8, 8),
(489, 'MISTERIO SIN RESOLVER 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f4d882d5233170007ee880e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5f4d882d5233170007ee880e/colorLogoPNG.png', 14, 8, 8),
(490, 'MUNDO VIAJERO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60511efd71ec430007f50d97/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60511efd71ec430007f50d97/colorLogoPNG.png', 14, 8, 8),
(491, 'EL CONQUISTADOR DEL FIN', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5f280149cec6be00072ab1fc/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&content_rating=ROKU_ADS_CONTENT_RATING', NULL, 'https://images.pluto.tv/channels/5f280149cec6be00072ab1fc/colorLogoPNG.png', 14, 8, 8),
(492, 'CBS REALITY', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcde197f6591d0009839e04/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5dcde197f6591d0009839e04/colorLogoPNG.png', 14, 8, 8),
(493, 'MUNDO GEEK', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/6051201a0aa8a70007c24a2a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/6051201a0aa8a70007c24a2a/colorLogoPNG.png', 14, 8, 8),
(494, 'MASTER CHEF', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e3ddbd27091820009f86dd9/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1d532-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=3935b7bb-6c42-4a74-a1c0-19d91d4ea3b7&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e3ddbd27091820009f86dd9/colorLogoPNG.png', 14, 8, 8),
(495, 'HELL\'S KITCHEN', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492b2794116800073e32dc/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492b2794116800073e32dc/colorLogoPNG.png', 14, 8, 8),
(496, 'SONY COMEDIAS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492bb931054f00073c0b4e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492bb931054f00073c0b4e/colorLogoPNG.png', 14, 8, 8),
(497, 'ENTRE NOSOTRAS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492c67f4c48700075b5d37/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492c67f4c48700075b5d37/colorLogoPNG.png', 14, 8, 8),
(498, 'ESTRELLA TV', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5cf0622da00ca1e2f6fac712livestitch/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5cf0622da00ca1e2f6fac712/colorLogoPNG.png', 14, 8, 8),
(499, 'ESCAPE PERFECTO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/605e479d5b8229000763e697/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/605e479d5b8229000763e697/colorLogoPNG.png', 14, 8, 8),
(500, 'NOSEY ESCANDALOS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f9afb01816137000737f799/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f9afb01816137000737f799/colorLogoPNG.png', 14, 8, 8),
(501, 'NOSEY CASOS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f9b005b66d1950007857df6/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f9b005b66d1950007857df6/colorLogoPNG.png', 14, 8, 8),
(502, 'MINUTOS PARA GANAR', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e46e64dc73db400094b5f0b/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e46e64dc73db400094b5f0b/colorLogoPNG.png', 14, 8, 8),
(503, 'NOSEY ESCANDALOS 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492ee6375a3900079a158c/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492ee6375a3900079a158c/colorLogoPNG.png', 14, 8, 8),
(504, 'NOSEY CASOS 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/60492f6c4a4f730007ff76c5/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/60492f6c4a4f730007ff76c5/colorLogoPNG.png', 14, 8, 8),
(505, 'MTV CLASSICS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5de91b7ea86ee60009d89e75/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff1ae22-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=660d0b2a-7fb6-45ce-9752-4b5be4f0e398&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5de91b7ea86ee60009d89e75/colorLogoPNG.png', 14, 8, 8),
(506, 'MTV PRANKS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e98a911c881310007d7aae2/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff22352-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=1ac7d946-bd48-4171-91bf-2030c4d3b690&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e98a911c881310007d7aae2/colorLogoPNG.png', 14, 8, 8),
(507, 'MTV PLUTO TV', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fab088b3279760007d4e4fd/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=a7e64375-725e-11eb-8572-a154f88ef305&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=1ae43b29-e0ce-4a28-90a5-107a512d1569&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5fab088b3279760007d4e4fd/colorLogoPNG.png', 14, 8, 8),
(508, 'MTV LATINO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5cf96d351652631e36d4331f/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c7e1eb0-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=180d9c2e-993f-4454-ac06-0f43e4f8058c&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5cf96d351652631e36d4331f/colorLogoPNG.png', 14, 8, 8),
(509, 'MTV ORIGINALS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1aadf373bed3000794d1d7/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b4495152-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=c371865e-69ac-45d8-80b7-62e5b4982b87&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aadf373bed3000794d1d7/colorLogoPNG.png', 14, 8, 8),
(510, 'MTV ORIGINALS 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f59f5b7cc331900075e7767/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44aff05-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=515c9042-50ef-465d-8e07-385e27e4cdaf&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1aadf373bed3000794d1d7/colorLogoPNG.png', 14, 8, 8),
(511, 'MTV CRIBS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ab9c6d8f1300007f54e30/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b449c680-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=a40f774d-360e-44d5-8490-935e6ac7b98a&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ab9c6d8f1300007f54e30/colorLogoPNG.png', 14, 8, 8),
(512, 'MTV CRIBS 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f5a0a5ea82f7200075cb926/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44b2612-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=786f8457-42a5-48f9-8833-bffe6bb92508&userId=&serverSideAds=true', NULL, 'hhttps://images.pluto.tv/channels/5f1ab9c6d8f1300007f54e30/colorLogoPNG.png', 14, 8, 8),
(513, 'MTV CATFISH', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f1ab3c7778230000735cf41/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b4497861-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=233b67dc-c1e8-4702-97db-01e491dfcc9b&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ab3c7778230000735cf41/colorLogoPNG.png', 14, 8, 8),
(514, 'MTV CATFISH 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f59f661f68f9200078870d4/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44aff06-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=807d26b3-dae4-4895-b8e0-c9e4ab926b6d&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f1ab3c7778230000735cf41/colorLogoPNG.png', 14, 8, 8),
(515, 'MTV DATING', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/600169ec77e6f70008fa9cf0/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b44b4d27-778d-11eb-9fe3-3bf7f4412392&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=74a78902-e6fb-4524-b3af-ed5282ffbf6e&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/600169ec77e6f70008fa9cf0/colorLogoPNG.png', 14, 8, 8),
(516, 'MTV EMBARAZADA A LOS 16', 'https://service-stitcher.clusters.pluto.tv/v1/stitch/embed/hls/channel/5f98537a5a4341000733aefe/master.m3u8?deviceId=channel&deviceModel=web&deviceVersion=1.0&appVersion=1.0&deviceType=rokuChannel&deviceMake=rokuChannel&deviceDNT=1&advertisingId=channel&embedPartner=rokuChannel&appName=rokuchannel&is_lat=1&bmodel=bm1&content=channel&platform=web&tags=ROKU_CONTENT_TAGS&coppa=false&content_type=livefeed&rdid=channel&content_rating=ROKU_ADS_CONTENT_RATING', NULL, 'https://images.pluto.tv/channels/5f98537a5a4341000733aefe/colorLogoPNG.png', 14, 8, 8),
(517, 'PEOPLE ARE AWESONE', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ebac65911406400078b8993/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ebac65911406400078b8993/colorLogoPNG.png', 14, 8, 8),
(518, 'ARCHIVOS FORENSES', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5efb8c19b2678b000780d032/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5efb8c19b2678b000780d032/colorLogoPNG.png', 14, 8, 8),
(519, 'ARCHIVOS FBI', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e67d41b93312100076f3fca/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e67d41b93312100076f3fca/colorLogoPNG.png', 14, 8, 8),
(520, 'THE NEWS DETECTIVES', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ea71d48af1d0b0007d837f4/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ea71d48af1d0b0007d837f4/colorLogoPNG.png', 14, 8, 8),
(521, 'WIPEOUT', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ed6828192e8b3000743ef61/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ed6828192e8b3000743ef61/colorLogoPNG.png', 14, 8, 8),
(522, 'EMPEÑOS A LO BESTIA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f23102d5e239d00074b092a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f23102d5e239d00074b092a/colorLogoPNG.png', 14, 8, 8),
(523, 'TV HUMOR', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e8397936791b30007ebb5a7/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e8397936791b30007ebb5a7/colorLogoPNG.png', 14, 8, 8),
(524, 'LATIN ANGELS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5df41355939756000921d15b/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5df41355939756000921d15b/colorLogoPNG.png', 14, 8, 8),
(525, 'SIN TETAS NO HAY PARAISO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/604bdf4e6d0abc0007ba77ad/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=b8904033-58e7-4560-aaa9-57dc6911f64b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6890d1bc-9854-11eb-a8b4-0242ac110002&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/604bdf4e6d0abc0007ba77ad/colorLogoPNG.png', 14, 8, 8),
(526, 'TV DEPORTES', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dcde07af1c85b0009b18651/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff02781-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6c194052-40df-42cc-9f20-2b709fc61bb8&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dcde07af1c85b0009b18651/colorLogoPNG.png', 11, 8, 8),
(527, 'TV PELEAS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5e98b0447665f200078caded/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff22353-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=b0686c66-1d05-479c-a6d5-c3f2eb338b63&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5e98b0447665f200078caded/colorLogoPNG.png', 11, 8, 8),
(528, 'STADIUM', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/59974b6d7ec5063cb56f24c9/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c760861-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=05184fc6-bf46-4f02-8ffe-2445a75fbebd&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/59974b6d7ec5063cb56f24c9/colorLogoPNG.png', 11, 8, 8),
(529, 'TV VELOCIDAD', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5dd6dc7480e3550009133d4a/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff0ead2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=11b5b1b3-ad58-40ca-90fc-9a19b7125ebc&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5dd6dc7480e3550009133d4a/colorLogoPNG.png', 11, 8, 8),
(530, 'COMBATE WORLD', 'https://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5bb1ac3e268cae539bcedb07/master.m3u8?terminate=false&deviceType=web&deviceMake=web&deviceModel=web&sid=970&deviceId=5bb1ac3e268cae539bcedb07&deviceVersion=DNT&appVersion=DNT&deviceDNT=0&userId=&advertisingId=&deviceLat=&deviceLon=&app_name=&appName=web&buildVersion=&appStoreUrl=&architecture=&includeExtendedEvents=false&marketingRegion=US&serverSideAds=false', NULL, 'https://images.pluto.tv/channels/5bb1ac3e268cae539bcedb07/colorLogoPNG.png', 11, 8, 8),
(531, 'ALL ELITE WRESTLING', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f4d1697f10a0e000798ed8d/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff30db0-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=99bea8e3-f5b3-42e7-a4e7-081bf207b1bc&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f4d1697f10a0e000798ed8d/colorLogoPNG.png', 11, 8, 8),
(532, 'LUCHA LIBRE AAA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f99a772c54853000797bf18/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff49451-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=9aaa87da-0575-49b4-b5a5-36b710bfce58&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f99a772c54853000797bf18/colorLogoPNG.png', 11, 8, 8),
(533, 'LUCHA LIBRE AAA 2', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5c01df1759ee03633e7b272c/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c7aea60-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=9e96a0f6-ac42-4164-a333-6f430bfee437&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5c01df1759ee03633e7b272c/colorLogoPNG.png', 11, 8, 8),
(534, 'IMPACT WRESTLING', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/59b722526996084038c01e1b/master.m3u8?terminate=false&deviceType=web&deviceMake=web&deviceModel=web&sid=734&deviceId=59b722526996084038c01e1b&deviceVersion=DNT&appVersion=DNT&deviceDNT=0&userId=&advertisingId=&deviceLat=&deviceLon=&app_name=&appName=web&buildVersion=&appStoreUrl=&architecture=&includeExtendedEvents=false&marketingRegion=US&serverSideAds=false', NULL, 'https://images.pluto.tv/channels/59b722526996084038c01e1b/colorLogoPNG.png', 11, 8, 8),
(535, 'PRO WRESTLING', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fac431fc1ffbc0007e6b6a7/master.m3u8?terminate=false&deviceType=web&deviceMake=web&deviceModel=web&sid=732&deviceId=5fac431fc1ffbc0007e6b6a7&deviceVersion=DNT&appVersion=DNT&deviceDNT=0&userId=&advertisingId=&deviceLat=&deviceLon=&app_name=&appName=web&buildVersion=&appStoreUrl=&architecture=&includeExtendedEvents=false&marketingRegion=US&serverSideAds=false', NULL, 'https://images.pluto.tv/channels/5fac431fc1ffbc0007e6b6a7/colorLogoPNG.png', 11, 8, 8),
(536, 'BELLATOR MMA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5ebc8688f3697d00072f7cf8/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c854aa0-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=31ed263b-b5a7-46ae-aea6-02a7165119c3&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5ebc8688f3697d00072f7cf8/colorLogoPNG.png', 11, 8, 8),
(537, 'TV FIGHT', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5812b0f2237a6ff45d16c3f9/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c751e00-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=ea3d6036-364f-4958-aca9-ec488a93eafb&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5812b0f2237a6ff45d16c3f9/colorLogoPNG.png', 11, 8, 8),
(538, 'GLORY KICKBOXING TV', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5417a212ff9fba68282fbf5e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c6dcb00-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=d92192c8-c5c3-4bd8-b547-f8e655b4e974&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5417a212ff9fba68282fbf5e/colorLogoPNG.png', 11, 8, 8),
(539, 'FOX SPORTS USA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5a74b8e1e22a61737979c6bf/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5a74b8e1e22a61737979c6bf/colorLogoPNG.png', 11, 8, 8),
(540, 'PAC 12 INSIDER USA', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f84ce2ac265700008d48dcflivestitch/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5f84ce2ac265700008d48dcf/colorLogoPNG.png', 11, 8, 8),
(541, 'TV SPORTS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/56340779a738201b4ccfeac9/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/56340779a738201b4ccfeac9/colorLogoPNG.png', 11, 8, 8),
(542, 'TV FIGHT', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5812b0f2237a6ff45d16c3f9/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5812b0f2237a6ff45d16c3f9/colorLogoPNG.png', 11, 8, 8),
(543, 'ACTION SPORTS', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5db867744f229f0009266784/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5db867744f229f0009266784/colorLogoPNG.png', 11, 8, 8),
(544, 'POKER GO', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fc54366b04b2300072e31af/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=bff334c2-6307-11eb-b3fa-019cb96f121b&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=dffc36b9-57c6-4973-9903-2f83d465ac40&userId=&serverSideAds=true', NULL, 'http://images.pluto.tv/channels/5fc54366b04b2300072e31af/colorLogoPNG.png', 11, 8, 8),
(545, 'VEVO 70\'S', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f32f26bcd8aea00071240e5/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c868321-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=1d158533-4c2c-4f85-8afd-5c0cbcdcb90a&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f32f26bcd8aea00071240e5/colorLogoPNG.png', 8, 8, 8),
(546, 'VEVO 80\'S', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fd7b8bf927e090007685853/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c8aa1d1-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=43501a2e-2968-4f0a-9974-5f5683f1f0db&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5fd7b8bf927e090007685853/colorLogoPNG.png', 8, 8, 8),
(547, 'VEVO 90\'S', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fd7bb1f86d94a000796e2c2/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c8aa1d2-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=350f636b-2a16-48a8-9dfd-208857d4c1a7&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5fd7bb1f86d94a000796e2c2/colorLogoPNG.png', 8, 8, 8),
(548, 'VEVO 2K', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5fd7bca3e0a4ee0007a38e8c/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c8b6520-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=085b69d0-8c20-45f3-b57d-7845972596d9&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5fd7bca3e0a4ee0007a38e8c/colorLogoPNG.png', 8, 8, 8),
(549, 'VEVO POP', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5d93b635b43dd1a399b39eee/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c8068a2-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=f01ebfed-7ad5-4d03-b1ca-023870fcb436&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5d93b635b43dd1a399b39eee/colorLogoPNG.png', 8, 8, 8),
(550, 'VEVO R&B', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5da0d83f66c9700009b96d0e/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c80b6c0-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=6bc0815e-fe9a-464b-9d20-af824e8dcdc5&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5da0d83f66c9700009b96d0e/colorLogoPNG.png', 8, 8, 8),
(551, 'VEVO COUNTRY', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5da0d75e84830900098a1ea0/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c808fb2-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=a7f46d76-39c5-4794-883c-4d22a9c41fde&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5da0d75e84830900098a1ea0/colorLogoPNG.png', 8, 8, 8),
(552, 'VEVO REGGAETÓN & TRAP', 'http://service-stitcher.clusters.pluto.tv/stitch/hls/channel/5f32f397795b750007706448/master.m3u8?advertisingId=&appName=web&appVersion=unknown&appStoreUrl=&architecture=&buildVersion=&clientTime=0&deviceDNT=0&deviceId=1c868322-7089-11eb-842e-ed7bad763363&deviceMake=Chrome&deviceModel=web&deviceType=web&deviceVersion=unknown&includeExtendedEvents=false&sid=fc027a03-e512-45db-98af-879f6889407f&userId=&serverSideAds=true', NULL, 'https://images.pluto.tv/channels/5f32f397795b750007706448/colorLogoPNG.png', 8, 8, 8),
(553, '1l1 40 [Eventual]', 'https://1l1l.to/ch40', '', '', 11, 1, 2),
(554, 'LaLiga TV UK [Eventual]', 'https://1l1l.to/ch65.php', '', '', 11, 10, 2),
(555, 'Premier 2 [VP]', 'http://lokios.azureedge.net:80/stream/NDkzMA==/1080p.m3u8', '', '', 11, 10, 1),
(556, 'Paka Paka', '//5fb24b460df87.streamlock.net/live-cont.ar/pakapaka/playlist.m3u8', '', 'https://images.ctfassets.net/ugxciox4nyye/1ye90QHOL28MkyJ6Q1s2UH/0f564b84b0ad99997a44cd34b7c6122c/36_PakaPaka.png?fm=webp&q=80', 6, 1, 1),
(557, 'NBA TV', 'https://irpc.ga/mg/play/mlaliga.php?get=aHR0cHM6Ly9kdHZvdHQtYWJjLmFrYW1haXplZC5uZXQvZGFzaF9saXZlXzExNzEvbWFuaWZlc3QubXBk&key=MDUzNTU5ZDEyMmI4NWYyYjg5MjVlZThhNjIxMjI1MDI=&key2=ZTFjY2NhYjQwMWE5ZjRjNGQ0OTI2ZWIxM2Q0ZjUzMTU=', '', 'https://rndserv.xyz/img/nba.png', 11, 8, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `channeltype`
--

CREATE TABLE `channeltype` (
  `typeId` int(11) NOT NULL,
  `typeName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `channeltype`
--

INSERT INTO `channeltype` (`typeId`, `typeName`) VALUES
(1, 'm3u'),
(2, 'iframe'),
(3, 'redirect'),
(4, 'photocall'),
(5, 'vyperplay'),
(6, 'blim'),
(7, 'Blim Photocall [PC]'),
(8, 'Pluto TV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `countryId` int(11) NOT NULL,
  `countryName` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `countryImg` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`countryId`, `countryName`, `countryImg`) VALUES
(1, 'España', 'es'),
(2, 'México', 'mx'),
(3, 'Andorra', 'ad'),
(4, 'Argentina', 'ar'),
(5, 'Honduras', 'hn'),
(6, 'Colombia', 'co'),
(7, 'Paraguay', 'py'),
(8, 'USA', 'us'),
(9, 'Alemania', 'de'),
(10, 'Reino Unido', 'gb'),
(11, 'Rusia', 'ru'),
(12, 'Francia', 'fr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iframe`
--

CREATE TABLE `iframe` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_spanish2_ci NOT NULL,
  `iframe` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `iframe`
--

INSERT INTO `iframe` (`id`, `name`, `iframe`, `tipo`) VALUES
(1, 'TSi', 'https://www.dailymotion.com/embed/video/k3uinUP9AHKH4AxHRoW', 0),
(2, 'Canal 5', 'https://www.dailymotion.com/embed/video/k6BJTswKAXQsl6xHQGd', 0),
(3, 'Telecadena', 'https://www.dailymotion.com/embed/video/k101LzeW3LTSErxHRoW', 0),
(4, 'Deportes TVC', 'Prueba_de_edicion', 0),
(5, 'TDTV+', 'https://conceptoweb-studio.com/radio/video/tododeportesplus/', 0),
(6, 'Eleven Sports 1', 'https://futbollatam.com/embed/eleven1.html', 1),
(7, 'Ziggo', 'https://futbollatam.com/embed/bein1.html', 1),
(8, 'TNT Sports', 'https://futbollatam.com/embed/tntmx2.html', 1),
(9, 'ESPN 3', 'https://otulbercycendencepa.me/clappr.html?get=aHR0cHM6Ly9lZGdlLWxpdmUxNS1oci5jdmF0dHYuY29tLmFyL2xpdmUvYzNlZHMvRVNQTjMvU0FfTGl2ZV9kYXNoX2VuYy9FU1BOMy5tcGQ=', 0),
(10, 'WeakSpell', 'http://weakstreams.com/streams/10201175', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `language`
--

INSERT INTO `language` (`id`, `name`) VALUES
(1, 'Spanish'),
(2, 'English'),
(3, 'galician'),
(4, 'Catalan'),
(5, 'Arabic'),
(6, 'French');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ligas`
--

CREATE TABLE `ligas` (
  `ligaId` int(11) NOT NULL,
  `ligaName` varchar(60) NOT NULL,
  `ligaImg` text NOT NULL,
  `scraper` int(11) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ligas`
--

INSERT INTO `ligas` (`ligaId`, `ligaName`, `ligaImg`, `scraper`, `url`) VALUES
(1, 'LaLiga Santander', 'laliga', 1, 'https://www.movistarplus.es/liga-santander/calendario-liga-santander'),
(2, 'LaLiga Smartbank', 'laliga', 1, 'https://www.movistarplus.es/casadelfutbol/horarios/segunda'),
(3, 'Champions', 'ucl', 1, 'https://www.movistarplus.es/champions/calendario-champions'),
(4, 'Europa', 'uel', 2, 'https://www.futbolenlatv.es/competicion/europa-league'),
(5, 'Premier', 'premier', 2, 'https://www.futbolenlatv.es/competicion/premier-league'),
(6, 'Bundesliga', 'bundesliga', 2, 'https://www.futbolenlatv.es/competicion/bundesliga'),
(7, 'Serie A', 'seriea', 2, 'https://www.futbolenlatv.es/competicion/calcio-serie-a'),
(8, 'Supercopa de Espana', 'supercopa', 2, 'https://www.futbolenlatv.es/competicion/supercopa-espana'),
(9, 'Copa del Rey', 'copadelrey', 2, 'https://www.futbolenlatv.es/competicion/copa-del-rey'),
(10, 'Ligue 1', 'ligue1', 2, 'https://www.futbolenlatv.es/competicion/ligue-1'),
(11, 'FA Cup', 'facup', 2, 'https://www.futbolenlatv.es/competicion/fa-cup'),
(12, 'ACB', 'acb', 1, ''),
(13, 'Euroliga', 'euroliga', 1, ''),
(14, 'NFL', '', 2, ''),
(15, 'Amistoso', 'amistosos', 2, ''),
(16, 'Conference', 'conference', 1, 'https://www.futbolenlatv.es/competicion/uefa-europa-conference-league'),
(17, 'Liga Pro', 'ligapro', 2, 'https://www.futbolenlatv.es/competicion/serie-a-ecuador'),
(18, 'DFB Pokal', 'pokal', 2, 'https://www.futbolenlatv.es/competicion/dfb-pokal-alemania'),
(19, 'Amistoso', 'amistoso', 2, 'https://www.futbolenlatv.es/competicion/amistoso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paymenttype`
--

CREATE TABLE `paymenttype` (
  `paymentId` int(11) NOT NULL,
  `paymentName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `peticionId` int(11) NOT NULL,
  `canalSolicitado` varchar(60) CHARACTER SET latin1 NOT NULL,
  `usuarioSolicitado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`peticionId`, `canalSolicitado`, `usuarioSolicitado`) VALUES
(1, 'este', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photocall`
--

CREATE TABLE `photocall` (
  `pId` int(11) NOT NULL,
  `pKey` varchar(4) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `photocall`
--

INSERT INTO `photocall` (`pId`, `pKey`) VALUES
(1, 'l9df');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premium`
--

CREATE TABLE `premium` (
  `username` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `contacto` int(11) NOT NULL,
  `comentario` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `premium`
--

INSERT INTO `premium` (`username`, `contacto`, `comentario`) VALUES
('Manu', 0, ''),
('Gontoa', 0, ''),
('Dani Maziu', 0, ''),
('', 0, ''),
('', 1, ''),
('', 1, ''),
('', 1, ''),
('', 0, ''),
('', 0, ''),
('', 0, ''),
('Garu', 0, ''),
('David saez', 0, ''),
('David saez', 0, ''),
('David saez', 0, ''),
('Andres', 1, ''),
('Andres', 1, 'Muy bueno '),
('Andres', 0, 'Bacano'),
('Gerard', 0, ''),
('', 0, ''),
('', 1, ''),
('', 0, 'Quiero contratar'),
('', 0, ''),
('', 0, ''),
('Javi pantoja', 0, ''),
('eduveel19', 0, ''),
('eduveel19', 0, ''),
('Luistorres10 ', 0, 'Quiero plata'),
('Luistorres10 ', 0, ''),
('Luistorres10 ', 0, 'Ver'),
('dionisio23', 0, ''),
('', 0, ''),
('', 0, ''),
('', 0, ''),
('rubeeenvillee', 0, ''),
('Brayan ruiz', 0, ''),
('Juan', 0, ''),
('Ricardochena', 0, ''),
('paco', 0, 'Los pagos como se realizan???'),
('', 0, ''),
('', 2, ''),
('', 0, ''),
('Juanfriiin', 0, ''),
('Goff0', 0, ''),
('', 0, ''),
('', 0, ''),
('Anxo', 0, ''),
('', 0, ''),
('aitorgg', 0, 'quiero registrarme en irafle'),
('Jabu', 0, ''),
('Jose', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scraper`
--

CREATE TABLE `scraper` (
  `scraperId` int(11) NOT NULL,
  `scraperName` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `scraper`
--

INSERT INTO `scraper` (`scraperId`, `scraperName`) VALUES
(1, 'movistar'),
(2, 'ftv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `teamId` int(11) NOT NULL,
  `teamName` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `teamImg` text COLLATE utf8_spanish2_ci NOT NULL,
  `teamLocation` text COLLATE utf8_spanish2_ci,
  `liga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`teamId`, `teamName`, `teamImg`, `teamLocation`, `liga`) VALUES
(1, 'Athletic Club', 'https://assets.laliga.com/assets/2019/06/07/xsmall/athletic.png', 'Estadio San MamÃ©s', 1),
(2, 'AtlÃ©tico de Madrid', 'https://assets.laliga.com/assets/2019/06/07/xsmall/atletico.png', 'Wanda Metropolitano', 1),
(3, 'Osasuna', 'https://assets.laliga.com/assets/2019/06/07/xsmall/athletic.png', 'Estadio El Sadar', 1),
(4, 'CÃ¡diz', 'https://assets.laliga.com/assets/2019/06/07/xsmall/cadiz.png', 'Estadio Nuevo Mirandilla', 1),
(5, 'Alaves', 'https://assets.laliga.com/assets/2020/09/01/xsmall/27002754a98bf535807fe49a24cc63ea.png', 'Mendizorozza', 1),
(6, 'Elche', 'https://assets.laliga.com/assets/2019/06/07/xsmall/elche.png', 'Estadio Martinez Valero', 1),
(7, 'FC Barcelona', 'https://assets.laliga.com/assets/2019/06/07/xsmall/barcelona.png', 'Camp Nou', 1),
(8, 'Getafe', 'https://assets.laliga.com/assets/2019/06/07/xsmall/getafe.png', 'Coliseum Alfonso PÃ©rez', 1),
(9, 'Granada', 'https://assets.laliga.com/assets/2019/06/07/xsmall/granada.png', 'Nuevo Los CÃ¡rmenes', 1),
(10, 'Levante', 'https://assets.laliga.com/assets/2019/06/07/xsmall/levante.png', 'Estadio Ciutat de Valencia', 1),
(11, 'Rayo Vallecano', 'https://assets.laliga.com/assets/2019/06/07/xsmall/rayo.png', 'Estadio de Vallecas', 1),
(12, 'Celta', 'https://assets.laliga.com/assets/2019/06/07/xsmall/celta.png', 'Balaidos', 1),
(13, 'Espanyol', 'https://assets.laliga.com/assets/2019/06/07/xsmall/espanyol.png', 'RCDE Stadium', 1),
(14, 'Mallorca', 'https://assets.laliga.com/assets/2019/06/07/xsmall/mallorca.png', 'Visit Mallorca Estadi', 1),
(15, 'Real Betis', 'https://assets.laliga.com/assets/2019/06/07/xsmall/betis.png', 'Estadio Benito VillamarÃ­n', 1),
(16, 'Real Madrid', 'https://assets.laliga.com/assets/2019/06/07/xsmall/real-madrid.png', 'Santiago BernabÃ©u', 1),
(17, 'Real Sociedad', 'https://assets.laliga.com/assets/2019/06/07/xsmall/real-sociedad.png', 'Reale Arena', 1),
(18, 'Sevilla', 'https://assets.laliga.com/assets/2019/06/07/xsmall/sevilla.png', 'RamÃ³n SÃ¡nchez-PizjuÃ¡n', 1),
(19, 'Valencia', 'https://assets.laliga.com/assets/2019/06/07/xsmall/valencia.png', 'Camp de Mestalla', 1),
(20, 'Villarreal', 'https://assets.laliga.com/assets/2019/06/07/xsmall/villarreal.png', 'Estadio de la CerÃ¡mica', 1),
(21, 'AD AlcorcÃ³n', 'https://assets.laliga.com/assets/2019/06/07/xsmall/alcorcon.png', 'Santo Domingo', 2),
(22, 'Burgos CF', 'https://assets.laliga.com/assets/2021/06/24/xsmall/8de24d38ab1472bbae1620d36582d7bd.png', 'El PlantÃ­o', 2),
(23, 'CD LeganÃ©s', 'https://assets.laliga.com/assets/2019/06/07/xsmall/leganes.png', 'Estadio Municipal Butarque', 2),
(24, 'CD Lugo', 'https://assets.laliga.com/assets/2019/06/07/xsmall/lugo.png', 'Estadio Ãngel Carro', 2),
(25, 'CD MirandÃ©s', 'https://assets.laliga.com/assets/2019/06/07/xsmall/mirandes.png', 'Estadio Municipal de Anduva', 2),
(26, 'CD Tenerife', 'https://assets.laliga.com/assets/2019/06/07/xsmall/tenerife.png', 'Estadio Heliodoro RodrÃ­guez LÃ³pez', 2),
(27, 'CF Fuenlabrada', 'https://assets.laliga.com/assets/2019/06/07/xsmall/fuenlabrada.png', 'Estadio Fernando Torres', 2),
(28, 'FC Cartagena', 'https://assets.laliga.com/assets/2022/02/11/xsmall/1628caa9b2002a11e564eb84b3677f78.png', 'Municipal Cartagonova', 2),
(29, 'Girona FC', 'https://assets.laliga.com/assets/2019/06/07/xsmall/girona.png', 'Estadio Municipal de Montilivi', 2),
(30, 'MÃ¡laga CF', 'https://assets.laliga.com/assets/2019/06/07/xsmall/malaga.png', 'La Rosaleda', 2),
(31, 'R. Sociedad B', 'https://assets.laliga.com/assets/2019/06/07/xsmall/real-sociedad.png', 'Reale Arena', 2),
(32, 'Real Oviedo', 'https://assets.laliga.com/assets/2019/06/07/xsmall/oviedo.png', 'Estadio Carlos Tartiere', 2),
(33, 'Real Sporting', 'https://assets.laliga.com/assets/2019/06/07/xsmall/sporting.png', 'El MolinÃ³n-Enrique Castro ', 2),
(34, 'Real Valladolid CF', 'https://assets.laliga.com/assets/2019/06/07/xsmall/valladolid.png', 'Estadio Municipal JosÃ© Zorrilla', 2),
(35, 'Real Zaragoza', 'https://assets.laliga.com/assets/2019/06/07/xsmall/zaragoza.png', 'Estadio de La Romareda', 2),
(36, 'SD Amorebieta', 'https://assets.laliga.com/assets/2021/06/24/xsmall/7dcec1604142a8f60f876e4c7e839da7.png', 'Instalaciones de Lezama Campo 2', 2),
(37, 'SD Eibar', 'https://assets.laliga.com/assets/2019/06/07/xsmall/eibar.png', 'Municipal de Ipurua', 2),
(38, 'SD Huesca', 'https://assets.laliga.com/assets/2019/06/07/xsmall/huesca.png', 'El Alcoraz', 2),
(39, 'SD Ponferradina', 'https://assets.laliga.com/assets/2021/06/24/xsmall/20f0382ea9163a771b3e01bbe7cf78b7.png', 'El ToralÃ­n', 2),
(40, 'UD AlmerÃ­a', 'https://assets.laliga.com/assets/2019/06/07/xsmall/almeria.png', 'Estadio de los Juegos MediterrÃ¡neos', 2),
(41, 'UD Ibiza', 'https://assets.laliga.com/assets/2021/06/24/xsmall/d7bc0d2c9bf06afd6b5ace9d62771713.png', 'Estadio Can Misses - Power Electronics', 2),
(42, 'UD Las Palmas', 'https://assets.laliga.com/assets/2019/06/07/xsmall/las-palmas.png', 'Estadio Gran Canaria', 2),
(43, 'Arsenal', 'https://resources.premierleague.com/premierleague/badges/70/t3.png', 'Emirates Stadium', 5),
(44, 'Aston Villa', 'https://resources.premierleague.com/premierleague/badges/70/t7.png', 'Villa Park', 5),
(45, 'Brentford', 'https://resources.premierleague.com/premierleague/badges/70/t94.png', 'Brentford Community Stadium', 5),
(46, 'Brighton and Hove Albion', 'https://resources.premierleague.com/premierleague/badges/70/t36.png', 'Amex Stadium', 5),
(47, 'Burnley', 'https://resources.premierleague.com/premierleague/badges/70/t90.png', 'Turf Moor', 5),
(48, 'Chelsea', 'https://resources.premierleague.com/premierleague/badges/70/t8.png', 'Stamford Bridge', 5),
(49, 'Crystal Palace', 'https://resources.premierleague.com/premierleague/badges/70/t31.png', 'Selhurst Park', 5),
(50, 'Everton', 'https://resources.premierleague.com/premierleague/badges/70/t11.png', 'Goodison Park', 5),
(51, 'Leeds United', 'https://resources.premierleague.com/premierleague/badges/70/t2.png', 'Elland Road', 5),
(52, 'Leicester City', 'https://resources.premierleague.com/premierleague/badges/70/t13.png', 'King Power Stadium', 5),
(53, 'Liverpool', 'https://resources.premierleague.com/premierleague/badges/70/t14.png', 'Anfield', 5),
(54, 'Manchester City', 'https://resources.premierleague.com/premierleague/badges/70/t43.png', 'Etihad Stadium', 5),
(55, 'Manchester United', 'https://resources.premierleague.com/premierleague/badges/70/t1.png', 'Old Trafford', 5),
(56, 'Newcastle United', 'https://resources.premierleague.com/premierleague/badges/70/t4.png', 'St. James Park', 5),
(57, 'Norwich City', 'https://resources.premierleague.com/premierleague/badges/70/t45.png', 'Carrow Road', 5),
(58, 'Southampton', 'https://resources.premierleague.com/premierleague/badges/70/t20.png', 'St. Marys Stadium', 5),
(59, 'Tottenham Hotspur', 'https://resources.premierleague.com/premierleague/badges/70/t6.png', 'Tottenham Hotspur Stadium', 5),
(60, 'Watford', 'https://resources.premierleague.com/premierleague/badges/70/t57.png', 'Vicarage Road', 5),
(61, 'West Ham United', 'https://resources.premierleague.com/premierleague/badges/70/t21.png', 'London Stadium', 5),
(62, 'Wolverhampton Wanderers', 'https://resources.premierleague.com/premierleague/badges/70/t39.png', 'Molineux Stadium', 5),
(63, 'FC Bayern MÃ¼nchen', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000G.svg', 'Allianz Arena', 6),
(64, 'RB Leipzig', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000017.svg', 'Red Bull Arena', 6),
(65, 'Borussia Dortmund', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000007.svg', 'SIGNAL IDUNA PARK', 6),
(66, 'VfL Wolfsburg', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000003.svg', 'Volkswagen Arena', 6),
(67, 'Eintracht Frankfurt', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000F.svg', 'Deutsche Bank Park', 6),
(68, 'Bayer 04 Leverkusen', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000B.svg', 'BayArena', 6),
(69, '1. FC Union Berlin', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000V.svg', 'An der Alten FÃ¶rsterei', 6),
(70, 'Borussia Mgladbach', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000004.svg', 'BORUSSIA-PARK', 6),
(71, 'VfB Stuttgart', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000D.svg', 'Mercedes-Benz Arena', 6),
(72, 'SC Freiburg', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000A.svg', 'Europa-Park Stadion', 6),
(73, 'TSG Hoffenheim', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000002.svg', 'PreZero Arena', 6),
(74, '1. FSV Mainz 05', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000006.svg', 'MEWA ARENA', 6),
(75, 'FC Augsburg', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000010.svg', 'WWK ARENA', 6),
(76, 'Hertha Berlin', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000Z.svg', 'Olympiastadion', 6),
(77, 'Arminia Bielefeld', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000015.svg', 'SchücoArena', 6),
(78, '1. FC KÃ¶ln', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000008.svg', 'RheinEnergieSTADION', 6),
(79, 'VfL Bochum 1848', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000S.svg', 'Vonovia Ruhrstadion', 6),
(80, 'SpVgg Greuther FÃ¼rth', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000W.svg', 'Sportpark Ronhof | Thomas Sommer', 6),
(81, 'INTER', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/8/images/logo/843/original/inter2021.png', '', 7),
(82, 'LAZIO', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/14/images/logo/30/original/lazio.png', '', 7),
(83, 'NAPOLI', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/12/images/logo/795/original/loghi_400x400_0007_napoli.png', '', 7),
(84, 'ATALANTA', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/3/images/logo/810/original/loghi_400x400_0018_atalanta.png', '', 7),
(85, 'HELLAS VERONA', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/19/images/logo/771/original/loghi400x400hellas-verona-blu.png', '', 7),
(86, 'MILAN', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/9/images/logo/620/original/milan.png', '', 7),
(87, 'SASSUOLO', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/18/images/logo/816/original/loghi_400x400_0022_sassuolo.png', '', 7),
(88, 'ROMA', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/20/images/logo/819/original/loghi_400x400_0024_roma.png', '', 7),
(89, 'FIORENTINA', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/15/images/logo/801/original/loghi_400x400_0013_fiorentina.png', '', 7),
(90, 'JUVENTUS', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/1/images/logo/789/original/juve.png', '', 7),
(91, 'UDINESE', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/22/images/logo/648/original/udinese.png', '', 7),
(92, 'EMPOLI', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/11/images/logo/851/original/empoli_400x400.png', '', 7),
(93, 'TORINO', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/17/images/logo/631/original/torino.png', '', 7),
(94, 'SAMPDORIA', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/10/images/logo/626/original/sampdoria.png', '', 7),
(95, 'BOLOGNA', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/6/images/logo/638/original/bologna.png', '', 7),
(96, 'SPEZIA', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/41/images/logo/813/original/loghi_400x400_0021_spezia.png', '', 7),
(97, 'CAGLIARI', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/28/images/logo/606/original/cagliari.png', '', 7),
(98, 'SALERNITANA', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/42/images/logo/856/original/salernitana_400.png', '', 7),
(99, 'VENEZIA', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/133/images/logo/853/original/venezia_400x400.png', '', 7),
(100, 'GENOA', 'https://www.legaseriea.it//uploads/default/attachments/squadre/squadre_m/21/images/logo/798/original/loghi_400x400_0012_genoa.png', '', 7),
(101, 'ANGERS SCO', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/37.png', 'stade raymond-kopa', 10),
(102, 'AS MONACO', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/9.png', 'stade louis-ii', 10),
(103, 'AS SAINT-Ã‰TIENNE', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/31.png', 'stade geoffroy-guichard', 10),
(104, 'CLERMONT FOOT 63', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/40.png', 'stade gabriel-montpied', 10),
(105, 'ESTAC TROYES', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/33.png', 'stade de laube', 10),
(106, 'FC GIRONDINS DE BORDEAUX', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/4.png', 'matmut atlantique', 10),
(107, 'FC LORIENT', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/7.png', 'stade yves-allainmat', 10),
(108, 'FC METZ', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/8.png', 'stade saint-symphorien', 10),
(109, 'FC NANTES', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/12.png', 'stade de la beaujoire-louis fonteneau', 10),
(110, 'LOSC LILLE', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/158.png', 'stade pierre-mauroy', 10),
(111, 'MONTPELLIER', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/10.png', 'stade de la mosson et du mondial 98', 10),
(112, 'OGC NICE', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/30.png', 'allianz riviera', 10),
(113, 'OLYMPIQUE DE MARSEILLE', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/1.png', 'orange vï¿½lodrome', 10),
(114, 'OLYMPIQUE LYONNAIS', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/159.png', 'groupama stadium', 10),
(115, 'PARIS SAINT-GERMAIN', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/13.png', 'parc des princes', 10),
(116, 'RC LENS', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/6.png', 'stade bollaert-delelis', 10),
(117, 'RC STRASBOURG ALSACE', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/15.png', 'stade de la meinau', 10),
(118, 'STADE BRESTOIS 29', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/44.png', 'stade francis-le blï¿½', 10),
(119, 'STADE DE REIMS', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/41.png', 'stade auguste-delaune', 10),
(120, 'STADE RENNAIS FC', 'https://www.ligue1.com/-/media/Project/LFP/shared/Images/Clubs/2021-2022/14.png', 'roazhon park', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `trabajoId` int(11) NOT NULL,
  `trabajoName` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`trabajoId`, `trabajoName`, `status`) VALUES
(4, 'Estadios de equipos de Serie A', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ufc`
--

CREATE TABLE `ufc` (
  `id` int(11) NOT NULL,
  `peleador1` varchar(60) NOT NULL,
  `imagen1` text,
  `peleador2` varchar(60) NOT NULL,
  `imagen2` text,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ufc`
--

INSERT INTO `ufc` (`id`, `peleador1`, `imagen1`, `peleador2`, `imagen2`, `fecha`) VALUES
(1, 'Cyril Gane', 'https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2021-06/71544%252Fprofile-galery%252Ffullbodyleft-picture%252FGANE_CYRIL_L_06-26.png?itok=aiYogJmk', 'Tai Tuivasa', 'https://dmxg5wxfqgb4u.cloudfront.net/styles/event_fight_card_upper_body_of_standing_athlete/s3/2022-03/32507bc1-4747-4eee-8fb0-43733b479e69%252FTUIVASA_TAI_R_02-12.png?itok=-JEMnQ-h', '2022-08-29 17:34:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `fullname` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`userid`, `username`, `email`, `password`, `fullname`, `fecha`, `type`) VALUES
(1, 'slowdmelendez360', '', 'admin', 'Alexander', '2023-12-31', 1),
(2, 'eduardo', '', 'perdomo', 'Eduardo', '2023-12-31', 1),
(3, 'David', '', 'Anton', 'David', '2022-09-11', 2),
(4, 'lorenmo', 'lorenzo.mone.63@gmail.com', 'lorenmo', 'Lorenzo', '2022-09-14', 0),
(6, 'Ignacio', '', 'Seoane', 'Ignacio', '2022-11-11', 0),
(10, 'Javier', '', 'calabon', 'Javier', '2023-01-11', 0),
(14, 'GonzaloEncinas', '', '667003915', 'Gonzalo', '2023-01-11', 0),
(15, 'BERTO', '', 'EnekayToby', 'Berto', '2022-11-11', 0),
(22, 'tonymarinn', '', 'kira1998', 'Tony', '2022-09-11', 0),
(24, 'Jose', 'jose.sabadias@gmail.com', 'Lopez', 'JosÃ©', '2022-09-08', 0),
(25, 'Francisco', '', 'Miralles', 'Francisco', '2022-11-06', 0),
(28, 'joseramon', '', 'R1970M', 'Jose', '2022-11-11', 0),
(34, 'Oscar48', '', '24442508', 'Oscar', '2022-09-10', 0),
(43, 'JAGV', '', '12alessandro', 'Alessandro', '2022-12-24', 0),
(45, 'Alicia', '', '1234', 'Alicia', '2023-01-11', 0),
(46, 'javihn83', '', 'galalopez', 'Javi', '2023-01-01', 0),
(47, 'jdmr', '', 'jdmops', 'MelÃ©ndez', '2022-12-31', 0),
(52, 'delacruz', '', 'godoy', 'JosÃ©', '2022-12-31', 0),
(54, 'Alicia', '', 'Alicia', 'Alicia', '2023-01-11', 0),
(55, 'joseantonio', '', 'muino', 'Jose Antonio', '2022-09-24', 0),
(56, 'ines', '', 'test100822', 'InÃ©s Ruiz', '2022-09-12', 0),
(57, 'Jose', '', 'Romero', 'Jose', '2022-11-11', 0),
(58, 'Jose', 'josej73@hotmail.com', 'Garcia', 'JosÃ© Garcia', '2022-09-20', 0),
(59, 'sandwichll', 'inakichvzz@gmail.com', 'sandwichllps', 'andre', '2022-08-23', 2),
(60, 'alejandro', 'martinra2006@gmail.com', 'Martin2006', 'Martin', NULL, 2),
(62, 'Danielito2000', 'danilopezgarcia691@gmail.com', 'lorena1997sagunto20000', 'Dani', NULL, 2),
(63, 'Manu', 'manuelantezanaga@gmail.com', 'viceemimanu', 'Manu', NULL, 2),
(64, 'Juan', 'chimichurrijjjj@gmail.com', 'elbarriojj1996', 'Jacibto', NULL, 2),
(65, 'Gontoa', 'gonzalo.torregrosa@gmail.com', 'gontoa', 'Gonzalo', NULL, 2),
(69, 'Ruben Vicente', 'ruvigar03@gmail.com', 'Ruvigar03', 'RubÃ©n ', NULL, 2),
(70, 'thedragon', '', 'atletico88', 'Frank ', '2022-09-22', 0),
(71, 'Dani Maziu', 'dmateocaro1@gmail.com', 'kawasaki1000', 'Daniel Mateo', NULL, 2),
(73, 'aitanahm', 'aitaanaherrera@gmail.com', 'draculina07', 'Aitana ', NULL, 2),
(74, 'Ivanosko', 'ivanperezcabanell@gmail.com', '2q052001', 'Ivan', NULL, 2),
(76, 'CÃ¡mara', 'sergiotudela11@gmail.com', 'pili200%', 'Sergio', NULL, 2),
(78, 'Monchoraptor', 'camperobuscaescoba003@gmail.com', 'qwerty1234', 'a', NULL, 2),
(79, '687123812', 'miguelgarciacobos@gmail.com', 'Mike15092003', 'Miguel', NULL, 2),
(80, 'Cachimbolo 69', 'izanandreu2005@gmail.com', 'izanbetxi05', 'Pepemel', NULL, 2),
(81, 'Javier lopez', 'javierlopezromeri@gmail.com', 'javier1967', 'Javier', NULL, 2),
(82, 'amartiinez', 'angelfutbolclase19@gmail.com', 'drivers23', 'Ãngel', NULL, 2),
(83, 'Alejandro Macarro', 'alejandromt1104@gmail.com', '10Bu3DdY55', 'Alejandromt', NULL, 2),
(85, '__saaaul_', 'setuldgz@gmail.com', 'irrafle1', 'Seiul', NULL, 2),
(87, 'Sergio', 'elrena@msn.com', 'Y7101992', 'Sergio', NULL, 2),
(88, 'Geambo4', 'geambo626@gmail.com', 'Motorola39', 'Gregory ', NULL, 2),
(89, 'Alexandra', 'alexandrasereasaez09@gmail.com', 'Umaalexandra22', 'Alexandra serea saez', NULL, 2),
(90, 'Oriol27', 'orioldavilat@gmail.com', '27160706om', 'Oriol', NULL, 2),
(91, 'Ã“scar morales diaz', 'elozky.om@gmail.com', 'fcbarcelona', 'Oscar', NULL, 2),
(92, 'marc502', 'polpage588@gmail.com', 'Molinero1', 'marc', NULL, 2),
(93, 'oscare2005', 'oscarnunezpinolol@gmail.com', 'oscare2005', 'Oscar', NULL, 2),
(94, '+506 88662597', 'diosesfiel75amor@gmail.com', 'Jnpb0705', 'Juan Pablo', NULL, 2),
(95, 'chriiis_ar02', 'tigre15112002@gmail.com', 'isacrisjo', 'KingLewis_11', NULL, 2),
(96, 'Garu', 'romerogary4@gmail.com', 'Gary@2021', 'Gary', NULL, 2),
(97, '@Carmencita14', 'cerrajepablo@gmail.com', 'Pablojesus1974', 'Carmen', NULL, 2),
(99, '@killer0212', 'josepunta96@gmail.com', 'campana', 'Jose', NULL, 2),
(100, '619230030', 'maxfontmillan@gmail.com', 'Max66083', 'Max', NULL, 2),
(103, 'pepe', 'scabrera019@gmail.com', 'Logisber2021', 'pepe', NULL, 2),
(104, 'Victor Mendoza ', 'vjmendoza1956@gmail.com', '4608560', 'Victor julio ', NULL, 2),
(106, 'Fernando ', 'fertj89@gmail.com', 'agosto13', 'Fernando ', NULL, 2),
(107, 'oleguersp.30@gmail.com ', 'oleguersp.30@gmail.com', 'ula.sp2007', 'Oleguer', NULL, 2),
(108, 'alezandra', 'alexandrasereasaez@gmail.com', 'aledanddgy6', 'alexandra', NULL, 2),
(109, 'David CastaÃ±eda', 'davidcrostegui11@gmail.com', 'eldavid123', 'Alejandro', NULL, 2),
(110, '@Robeertt9', 'robeerto11@hotmail.com', 'garrucha', 'Roberto ', NULL, 2),
(111, 'acpeel83', 'pacing2001@hotmail.com', 'mercsrant', 'Antonio ', NULL, 2),
(112, 'jose', 'j.enmo007@gmail.com', 'Astronomia7', 'jose ', NULL, 2),
(114, 'Pablo Ruiz Serrano', 'parru5501@gmail.com', 'eresmutonto', 'Pablo', NULL, 2),
(120, 'Aiman', 'bousalemaiman26@gmail.com', 'FANVEGETA777Xd^', 'Aiman Bousalem', NULL, 2),
(121, 'Pedro sastre', 'sastre.ono@gmail.com', 'pscpsc', 'Pedro', NULL, 2),
(122, '56366622', 'chilepasa@hotmail.com', '56366622@Chile', 'Willy Saquil ', NULL, 2),
(123, 'Rafa', 'mirandadualrafa@gmail.com', 'alexyeremibrayan', 'Rafa', NULL, 2),
(124, 'Juan', 'linditavladi@gmail.com', 'juan62626', 'Juan6262', NULL, 2),
(125, 'David saez', 'davidsaezmartin4572@gmail.com', 'davidmartinez', 'David', NULL, 2),
(127, 'Andres', 'hajalaunico@gmail.com', 'familiacuero', 'Andres', NULL, 2),
(128, 'Manuel', 'man.resendiz.o@gmail.com', 'blinkkman7', 'Manuel', NULL, 2),
(129, '@eomainfo', 'ederkp@gmail.com', 'Deomainfo123', 'Oraldo', NULL, 2),
(133, 'Jorge Cantarero Caracuel', 'jorgec.caracuel@gmail.com', 'Cantarero17â‚¬', 'Jorge', '0000-00-00', 2),
(134, 'Eliecer Rodriguez', 'Eliecerrodriguez02@gmail.com', 'Eliecer1519', 'Eliecer', NULL, 2),
(138, 'Brian', 'brxantrap@gmail.com', '1brian234', 'Brxan', NULL, 2),
(140, '@MariiDQ', 'franjgs5@gmail.com', 'vans95', 'Fran', NULL, 2),
(141, '@MariiDQ', 'franjgs5@gmail.com', 'vans95', 'Fran', NULL, 2),
(142, '@MariiDQ', 'franjgs5@gmail.com', 'vans95', 'Fran', NULL, 2),
(143, '@MariiDQ', 'franjgs5@gmail.com', 'vans95', 'Fran', NULL, 2),
(144, 'Aimar', 'aimarmendia@gmail.com', 'Ai2042005', 'Aimar', NULL, 2),
(145, '@MariiDQ', 'franjgs5@gmail.com', 'vans95', 'Fran', NULL, 2),
(146, '@MariiDQ', 'franjgs5@gmail.com', 'vans95', 'Fran', NULL, 2),
(147, 'Aimar', 'aimarmendia@gmail.com', 'Ai2042005', 'Aimar', NULL, 2),
(148, 'Aimar', 'aimarmendia@gmail.com', 'Ai2042005', 'Aimar', NULL, 2),
(149, '@MariiDQ', 'franjgs5@gmail.com', 'vans95', 'Fran', NULL, 2),
(150, 'Aimar', 'aimarmendia@gmail.com', 'Ai2042005', 'Aimar', NULL, 2),
(151, 'Miguel', 'miguebetis72@gmail.com', 'jajajaja1907', 'Miguel GÃ³mez ', NULL, 2),
(152, 'patricioarellanov', 'miltonpato3@hotmail.com', 'Patotupapi1*', 'Patricio', NULL, 2),
(153, 'patricioarellanov', 'miltonpato3@hotmail.com', 'Patotupapi1*', 'Patricio', NULL, 2),
(157, '3167350169', 'edw404@gmail.com', 'dsaqwer123', 'Eedw', NULL, 2),
(158, 'GarciiXIV ', 'larryluilli@gmail.com', 'cacapedo1', 'Javi', NULL, 2),
(160, '@Gimp16', 'mpgi6744@gmail.com', '4467gimp', 'Gregory ', NULL, 2),
(161, 'Gerard', 'gerardburgoslairana@gmail.com', 'GBL233200', 'Gerard', NULL, 2),
(162, 'Todo$ pre$o$', 'ikerfutbol20@gmail.com', '213572', 'Iker', NULL, 2),
(165, 'jmuggon', 'josemariamuguruza@gmail.com', 'Tejares10', 'JosÃ©', NULL, 2),
(170, '35238096', 'erickyup1985@gmail.com', '123456789', 'Edy', NULL, 2),
(171, 'Axellp', 'axelbarak012@gmail.com', 'e56673583', 'Axel barak ', NULL, 2),
(172, 'Tomas Lemos ramos ', 'tomasdel84@gmail.com', 'estoy1984loco1985', 'Tomas', NULL, 2),
(174, 'alcaco_2009', 'murocapi@gmail.com', 'elmurocapi1', 'Ãlvaro ', NULL, 2),
(176, 'JosuÃ© VL', 'josue.eagle@hotmail.com', 'josueviveros1', 'Josue Viveros', NULL, 2),
(177, 'manu', 'manolinyana@hotmail.com', 'montilla1985', 'manuel', NULL, 2),
(179, 'javipantoja', 'farconetitoledo@hotmail.com', 'Javi1975', 'Javi', '2022-09-25', 2),
(181, '@Javigrua', 'tomtom.javi.jg@gmail.com', 'vida197100', 'Javier ', NULL, 2),
(182, 'juanbelizonn', 'juaniko.0321@gmail.com', 'juanbelsa04', 'juanfran', NULL, 2),
(184, 'Luistorres10 ', 'lt5923513@gmail.com', 'luiscaballo', 'Luis', NULL, 2),
(188, '71750744', 'brayan75258548@gmail.com', 'brayan7175', 'Brayan', NULL, 2),
(189, 'AarÃ³n ', 'venegasmx9@gmail.com', 'america12', 'AarÃ³n ', NULL, 2),
(193, 'IsrRa TÃºchez', 'israeel.tuchez@gmail.com', 'nicolito*2017', 'Israel Tuchez', NULL, 2),
(194, 'Torvic88', 'ciberon4@gmail.com', 'tuning88', 'Victor ', NULL, 2),
(195, 'Luistorres10 ', 'luisabella32@gmail.com', '2351711', 'Luis ', NULL, 2),
(196, 'David34', 'davidrsc99@gmail.com', 'REALmadeid12', 'David', NULL, 2),
(197, 'dionisio23', 'dionisiohn23@gmail.com', 'dionisio23', 'Dionisio', NULL, 2),
(198, '', 'joserrasantos@yahoo.com', 'jrs2270893', 'JRS2', NULL, 2),
(199, '', 'jonasmarcos1973@gmail.com', 'Sanjoce', 'Villaviciosos ', NULL, 2),
(200, '', 'lachohit04@gmail.com', 'Lego2007', 'LÃ¡zaro ', NULL, 2),
(201, '', 'ikerchavez@gmail.com', '290578sc', 'Iker', '0000-00-00', 2),
(202, '', 'pabloalvarrodriguez0@gmail.com', 'cudiseira1', 'Pablo', '0000-00-00', 2),
(203, 'Mmya Ok', 'bonilladaniel203@gmail.com', 'DCaprY09', 'Daniel', NULL, 2),
(204, 'Mmya Ok', 'bonilladaniel203@gmail.com', 'DCaprY09', 'Daniel', NULL, 2),
(205, '', 'jonasmarcos1973@gmail.com', 'Sanjoce2020', 'Villaviciosos', '0000-00-00', 2),
(206, '@Hostilio74', 'alejo.caronte@gmail.com', '123Iskander', 'Alejo MartÃ­nez ', NULL, 2),
(207, 'rubeeenvillee', 'rubenvcuenca39@gmail.com', 'tiburon32', 'Ruben', NULL, 2),
(208, '', 'goalexmora@gmail.com', 'Alex20051972', 'Alex ', '0000-00-00', 2),
(209, 'Albert Perea', 'albertperea728@gmail.com', 'albertperea5', 'Albert', NULL, 2),
(210, '633330007', 'aitorguerrapalencia@gmail.com', '1234578Ag', 'Aitor', NULL, 2),
(211, '', '', '', 'Cheroqui', NULL, 2),
(212, '', 'ikerchavez@gmail.com', '290578sc', 'Iker', NULL, 2),
(213, 'Juanfriin365', '96ea3ac484@boxomail.live', 'zak123', 'Juanfrin', NULL, 2),
(214, 'Tete perreador', 'felixperea75@gmail.com', 'tete121033', 'FÃ©lix ', NULL, 2),
(215, '', '', '', '', NULL, 2),
(216, 'Tony Mtez', 'mteztony@gmail.com', 'Pocofhone22', 'Tony', NULL, 2),
(217, 'Victor Solana', 'desdeelestedeberlin@gmail.com', 'zaragozaco', 'Victor ', NULL, 2),
(218, '', 'sebastianescobar2019@gmail.com', 'alejandro', 'SebastiÃ¡n ', NULL, 2),
(219, '', '', '', '', NULL, 2),
(220, 'Ivan_009go', 'jajajajaja@hotmail.es', 'jskddjsnsns', 'Carlos', NULL, 2),
(221, 'Smsmek', 'kaka24594zo@gmail.com', 'cacateta', 'Hhhj', NULL, 2),
(222, 'Pedro Heredia ', 'pedritoheredia66@gmail.com', '01082000plo', 'Pedro Heredia ', NULL, 2),
(223, '', 'tekop55742@xitudy.com', 'beto20045', 'Pro', NULL, 2),
(224, 'Sergioelbetico ', 'ibanezcanosergio123@gmail.com', 'beyis123', 'Sergio ', NULL, 2),
(225, 'Brayan ruiz', 'brayanruizbarcelona@gmail.com', 'Placetas20', 'Brayan', NULL, 2),
(226, '', 'pabloalvarrodriguez0@gmail.com', '25-07-2006', 'Pablo', NULL, 2),
(227, '@quiquemalo', 'enriquemalo4@gmail.com', 'Contrasenia1', 'Quique', NULL, 2),
(228, 'Anacardo', 'rickymirvidal@gmail.com', 'plumeta2012', 'Anacardo', NULL, 2),
(229, '', '', '', '', NULL, 2),
(230, 'Brayan ruiz', 'brayanruizbarcelona@gmail.com', 'Placetas20', 'Brayan ', NULL, 2),
(231, 'Paquito556', 'pegasuspaquito@gmail.com', 'putamadre00', 'Fran', NULL, 2),
(232, '', 'peruanet07@gmail.com', 'osa', 'Jose', NULL, 2),
(233, '', '', '', '', NULL, 2),
(234, 'Juan', 'juanmanuelsuescun19@gmail.com', 'suescun23/', 'Juan', NULL, 2),
(235, 'David', 'compasech1234@gmail.com', 'julio907', 'David', NULL, 2),
(236, 'Sergioelbetico ', 'sergio.ib.can@gmail.com', 'vetis123', 'Sergio ', NULL, 2),
(237, 'Hansel', 'Hanselopez03@email.com', '58543898', 'Hansel ', NULL, 2),
(238, '', '', '', '', NULL, 2),
(239, '', 'joserrasantos@yahoo.com', 'jrs2270883', 'Jr', NULL, 2),
(240, 'Miguelmartin80', 'miguelrivas1000@hotmail.com', 'migueljames2022', 'Miguel ', NULL, 2),
(241, 'dani2007', 'carroddani@gmail.com', 'dani2007', 'Daniel', NULL, 2),
(242, 'IÃ±aki', 'departamentos.hosteleria@gmail.com', 'omar05', 'IÃ±aki', NULL, 2),
(243, 'Teloru', 'teloru@gmail.com', 'DyZxcPoiL)71/', 'Teo', '0000-00-00', 2),
(244, 'carroddani', 'carroddani@gmail.com', 'dani2007', 'dani', NULL, 2),
(245, 'nashe', 'fifa16cuebntaprueba@gmail.com', 'elbarriojj', 'jasinto', NULL, 2),
(246, 'Ricardochena', 'ricardo.chena@gmail.com', 'ricardin1149', 'Ricardo', NULL, 2),
(247, 'Marti Cogul', 'mcogulf@gmail.com', 'mcogulf2007', 'MartÃ­ Cogul', NULL, 2),
(248, 'kikekike517', 'fkike6530@gmail.com', 'fernandezkike156', 'kike', NULL, 2),
(249, 'Edgarcaasas ', 'edgarcasashernandez@gmail.com', 'Edgar2112', 'Edgar', NULL, 2),
(250, '', 'juanestebanparraordonez49@gmail.com', 'Extremadura', 'Juan Esteban ', NULL, 2),
(251, '', 'paulino321xd@gmail.com', 'paulinojoya', 'Paulino10', NULL, 2),
(252, 'paco', 'erpaco.fmm@gmail.com', 'pacopil', 'Paco', NULL, 2),
(253, 'cecimarcu', 'cecischool@gmail.com', '8413siempre', 'Cecilia', NULL, 2),
(254, 'Shadow Rodriguez', 'thomasjajajajajaja@gmail.com', 'pablothomasc10', 'Fernando Montero ', NULL, 2),
(255, 'Shadow Rodriguez', 'thomasjajajajajaja@gmail.com', 'pablothomasc10', 'Fernando Montero ', NULL, 2),
(256, '', 'marcelogenov@hotmail.com', 'mageca', 'Marcelo', NULL, 2),
(257, '', '', '', '', NULL, 2),
(258, '', 'macliverramos@gmail.com', 'Makito900', 'Makiver ', '0000-00-00', 2),
(259, 'Juanfriiin', 'jacobs2033frankie@gmail.com', 'zak123', 'Juanfriiin', NULL, 2),
(260, 'Pacoalfredo39', 'pacoalfredo39@gmail.com', 'Pacoalfredo39', 'Marco', NULL, 2),
(261, 'Goff0', 'manuelpistolero2013@gmail.com', 'manuelpistolero', 'Manu', NULL, 2),
(262, '', 'mgjmgj48@gmail.com', 'Alameda2021', 'JGM', NULL, 2),
(263, 'quiquemalo', 'enriquemalo4@gmail.com', 'Contrasenia1', 'Quique', NULL, 2),
(264, 'Drissac10 ', 'drissadrissacoul@gmail.com', 'Drissa24', 'Drissa Coulibaly ', NULL, 2),
(265, '', 'perama1944@gmail.com', 'PEconsRU1944', 'Pedro', '0000-00-00', 2),
(266, '@Lore_tp', 'nalore40@gmail.com', 'lorena12', 'Lorena Ribas Valcarcel ', NULL, 2),
(267, 'Luismi', 'luismigueljimenez31122001@gmail.com', 'luismi.161020', 'Luismi', NULL, 2),
(268, '', '', '', '', NULL, 2),
(269, '68413197q', 'alejandro.orozcovelasco@iesrdelgado.org', '606731209a', 'alejandro', NULL, 2),
(270, '', '', '', '', NULL, 2),
(271, '611081487', 'acc170806@gmail.com', 'Koralmar174', 'Ãlvaro ', NULL, 2),
(272, 'Drissac10 ', 'drissadrissacoul@gmail.com', 'Drissa2006', 'Drissa ', NULL, 2),
(273, '@D194c', 'didacrob@gmail.com', 'Brais2015', 'DÃ­dac Rives', NULL, 2),
(274, '', '', '', '', NULL, 2),
(275, 'acpeel', 'pacing2001@hotmail.com', 'mercarant', 'pacing2001', NULL, 2),
(276, '', 'edgar.erm89@gmail.com', 'ribes1234', 'Edgar', NULL, 2),
(277, '...', 'diego01men12@gmail.com', 'olaola', 'Diego ', NULL, 2),
(278, 'cristian', 'cristiangutierrezmuriana@gmail.com', 'Cristiangtav55', 'Cristian ', NULL, 2),
(279, '', 'manuelqc59@yahoo.com', 'cabezondelasal', 'Manuel', NULL, 2),
(280, '', 'willybeer1111@gmail.com', '123456bueno', 'Willian', NULL, 2),
(281, '', '', '', '', NULL, 2),
(282, '', '', '', 'Gol', NULL, 2),
(283, 'aitorgg', 'aitorguerrapalencia@gmail.com', '12345678Agg', 'Aitor GG', NULL, 2),
(284, '', 'hernandezcubillan007@gmail.com', 'Angel007', 'Angel Brayan ', NULL, 2),
(285, 'Ibantxu77', 'ibantxu77@gmail.com', 'Ibantxu77', 'Iban', NULL, 2),
(286, 'Penearo', 'gonalvaro1607@gmail.com', 'Sis99sis', 'DG_Putoamo', NULL, 2),
(287, 'Felix Diez', 'felix.dipar@gmail.com', 'felisin1', 'FÃ©lix ', NULL, 2),
(288, '', 'paulino321xd@gmail.com', 'paulinojoya', 'Paulinoxd', NULL, 2),
(289, '', 'oscarnunezpinolol@gmail.com', 'pokemon2005', 'Oscar', NULL, 2),
(290, 'Abrtoo', 'aprilybdlt@gmail.com', 'VIVAFCB', 'Abbro', NULL, 2),
(291, '', 'ecanales004@gmail.com', '8kRamirez', 'josue', NULL, 2),
(292, '', 'aviossantizoronyariel@gmail.com', 'leslininn', 'Rony', NULL, 2),
(293, 'Manuel', 'M.C.hoyas@hotmail.com', 'Manuelpro51', 'Manuel', NULL, 2),
(294, 'Manuel', 'M.C.hoyas@hotmail.com', 'Manuelpro51', 'Manuel', NULL, 2),
(295, 'Manuel', 'M.C.hoyas@hotmail.com', 'Manuelpro51', 'Manuel', NULL, 2),
(296, 'Manuel', 'M.C.hoyas@hotmail.com', 'Manuelpro51', 'Manuel', NULL, 2),
(297, 'Manuel', 'M.C.hoyas@hotmail.com', 'Manuelpro51', 'Manuel', NULL, 2),
(298, 'Manuel', 'M.C.hoyas@hotmail.com', 'Manuelpro51', 'Manuel', NULL, 2),
(299, 'Rigo Jr', 'jrrigo02@gmail.com', 'Rigo0214', 'Rigoberto ', NULL, 2),
(300, '@bcn191194', 'andonibcn20@gmail.com', 'Ronaldo1.', 'Andoni', NULL, 2),
(301, 'Josue SÃ¡nchez ', 'orlandojosue07@hotmail.com', 'josue310398', 'Josue SÃ¡nchez ', NULL, 2),
(302, '', '', '', '', NULL, 2),
(303, 'El SASKY publite', 'capitasdemascotas@gmail.com', 'cogines2825', 'Manuel ', NULL, 2),
(304, '', '', '', '', NULL, 2),
(305, '@Desedrina', 'bustamante.lorenzo50@gmail.com', 'Junior2019', 'Lorenzo Bustamante ', NULL, 2),
(306, '', 'cristinacfc71@gmail.com', 'cristina71', 'Cristina ', NULL, 2),
(307, 'Vityshelby', 'victorprincipe2@gmail.com', '25070000', 'Victor', NULL, 2),
(308, '', '', '', '', NULL, 2),
(309, 'Sergio Chiva ', 'sergiochiva777@gmail.com', 'sergio23', 'Sergio', NULL, 2),
(310, 'Franjehibe', 'franjehibe@gmail.com', '@d05ma08', 'Franjehibe', NULL, 2),
(311, 'Guille-12', 'guillermo.sanjuanizquierdo@gmail.com', 'GsI_120305', 'Guillermo', NULL, 2),
(312, '', 'ivanmiro34@gmail.com', 'tumadretieneunpolla', 'Jorge', NULL, 2),
(313, '', '', '', 'JosÃ© ', NULL, 2),
(314, 'Anxo', 'anxoaraujo2008@gmail.com', 'cq18cq18', 'anxo', NULL, 2),
(315, 'Manuel', 'M.C.hoyas@hotmail.com', 'manuelpro', 'Manuel', NULL, 2),
(316, '', '', '', '', NULL, 2),
(317, '', 'mbregistros@gmail.com', 'Palansiao2', 'Miguel', NULL, 2),
(318, '', 'kantesaga6@gmail.com', 'Mali2009', 'Saga', NULL, 2),
(319, '', '', '', '', NULL, 2),
(320, '622 51 00 33', 'polcabe18@gmail.com', 'polcabe20q8', 'Pol', NULL, 2),
(321, '622 51 00 33', 'polcabe18@gmail.com', 'polcabe20q8', 'Pol', NULL, 2),
(322, 'Juan C.R', 'carrodjuan@gmail.com', 'juan2002', 'Juan ', NULL, 2),
(323, '94ajac', 'aj_alvarez94@hotmail.com', 'irafflwtv2022', 'Atilio Alvarez', NULL, 2),
(324, 'Valentina', 'jonathanvd2006@gmail.com', 'valentina03', 'Ronald', NULL, 2),
(325, '@CAR_LOSc', 'josuecordoovaa@gmail.com', 'elbananeroXd98', 'Carlos CÃ³rdova ', NULL, 2),
(326, 'Denis RV', 'josue23053@gmail.com', 'valladares12', 'Denis', NULL, 2),
(327, '', '', '', '', NULL, 2),
(328, 'AitorGG', 'aitorguerrapalencia@gmail.com', '12345678Agg', 'aitorgg', NULL, 2),
(329, 'Alvaro', 'alvaromarquezrosa2@gmail.com', 'Alvaroysergio21053011', 'Ãlvaro', NULL, 2),
(330, 'jlrisquez74@gmail.com', 'joseluisrisquezlara@yahoo.es', 'Jlcejoe74', 'Jose Luis ', NULL, 2),
(331, 'Alberto', 'Albertomm40@gmail.com', 'Alvaroysergio21', 'Alvaro', '0000-00-00', 2),
(332, '', 'alexanderanakinail@hotmail.com', 'caca1', 'CacA1', NULL, 2),
(333, '', '', '', '', NULL, 2),
(334, 'llanespy', 'llanespy@gmail.com', 'elpieblo123', 'David Llanes', NULL, 2),
(335, '', 'goalexmora@gmail.com', 'Alex20051972', 'Alex', NULL, 2),
(336, 'Manuel', 'yy.yyy@gmail.com', 'manuelpro51', 'Manuel', NULL, 2),
(337, '', 'goalexmora@gmail.com', 'Alex20051972', 'Alex', NULL, 2),
(338, 'Jabu', 'rayewi4169@vasqa.com', 'tiopepe.01', 'TÃ­o rugrats', NULL, 2),
(339, 'Aldenoto29@gmail.com', 'aldenoto29@gmail.com', 'aldenotoeniÃ±l', 'Alden', NULL, 2),
(340, '', 'goalexmora@gmail.com', 'Alex20051972', 'Alex', NULL, 2),
(341, 'Jose', 'IPTVPARATODOSM3U@GMAIL.COM', '123456789', 'JosÃ© ', NULL, 2),
(342, 'Dario', 'darioesteve49@gmail.com', 'Murcuncu3', 'Dario', NULL, 2),
(343, '', 'jctaravill@yahoo.es', '', 'JuanC', NULL, 2),
(344, '', 'r-ichu@hotmail.com', '666666', 'Jose', NULL, 2),
(345, 'Rober pedrueza', 'roberpedrueza@gmail.com', 'Jonnaia-7', 'Rober ', NULL, 2),
(346, 'Rayocars1', 'nicovehi@gmail.com', 'Rayocars1', 'Nico', NULL, 2),
(347, 'bishsh', 'szaballosg@gmail.com', 'Santiago193', 'Santiago', NULL, 2),
(348, '', 'antartida998810@gmail.com', 'HIELO100', 'Unai', '0000-00-00', 2),
(349, '', 'antartida998810@gmail.com', 'hielo100', 'Unai', NULL, 2),
(350, '', '', '', 'Jhon  castro', NULL, 2),
(351, 'JosÃ© Pizarro ', 'pizarro.es@gmail.com', 'Escorial37', 'JosÃ© Pizarro ', NULL, 2),
(352, '', 'goalexmora@gmail.com', 'Alex2005197Ã—', 'Alex', NULL, 2),
(353, 'Jcicjc', 'astridselene85@gmail.com', 'eltaxiloco11', 'Bastrix', '2023-01-31', 0),
(358, '', 'jhoshuapjhonny181@gmail.com', 'casilacago.com', 'Jhonny', NULL, 2),
(359, 'Omar Aguirre ', 'omaraguirrejr@gmail.com', 'zxzlin3434', 'Omar Aguirre ', NULL, 2),
(360, 'Dav Bar', 'seguidor1001@hotmail.com', '6150casb', 'Cooper', NULL, 2),
(361, 'Al bundy', 'fluff@live.fr', 'opelastra67', 'Fluff67 ', NULL, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_liga` (`liga`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indices de la tabla `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`channelId`),
  ADD KEY `fk_country` (`country`),
  ADD KEY `fk_category` (`category`),
  ADD KEY `fk_type` (`type`);

--
-- Indices de la tabla `channeltype`
--
ALTER TABLE `channeltype`
  ADD PRIMARY KEY (`typeId`);

--
-- Indices de la tabla `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countryId`);

--
-- Indices de la tabla `iframe`
--
ALTER TABLE `iframe`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ligas`
--
ALTER TABLE `ligas`
  ADD PRIMARY KEY (`ligaId`),
  ADD KEY `fk_scraper` (`scraper`);

--
-- Indices de la tabla `paymenttype`
--
ALTER TABLE `paymenttype`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indices de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD PRIMARY KEY (`peticionId`),
  ADD KEY `fk_usuario_peticion` (`usuarioSolicitado`);

--
-- Indices de la tabla `scraper`
--
ALTER TABLE `scraper`
  ADD PRIMARY KEY (`scraperId`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`teamId`),
  ADD KEY `fk_teamLiga` (`liga`);

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`trabajoId`);

--
-- Indices de la tabla `ufc`
--
ALTER TABLE `ufc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `channels`
--
ALTER TABLE `channels`
  MODIFY `channelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=558;

--
-- AUTO_INCREMENT de la tabla `channeltype`
--
ALTER TABLE `channeltype`
  MODIFY `typeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `countryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `iframe`
--
ALTER TABLE `iframe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ligas`
--
ALTER TABLE `ligas`
  MODIFY `ligaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `paymenttype`
--
ALTER TABLE `paymenttype`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  MODIFY `peticionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `scraper`
--
ALTER TABLE `scraper`
  MODIFY `scraperId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `teamId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `trabajoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ufc`
--
ALTER TABLE `ufc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_liga` FOREIGN KEY (`liga`) REFERENCES `ligas` (`ligaId`);

--
-- Filtros para la tabla `channels`
--
ALTER TABLE `channels`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category`) REFERENCES `categories` (`categoryId`),
  ADD CONSTRAINT `fk_country` FOREIGN KEY (`country`) REFERENCES `countries` (`countryId`),
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`type`) REFERENCES `channeltype` (`typeId`);

--
-- Filtros para la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD CONSTRAINT `fk_usuario_peticion` FOREIGN KEY (`usuarioSolicitado`) REFERENCES `user` (`userid`);

--
-- Filtros para la tabla `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `fk_teamLiga` FOREIGN KEY (`liga`) REFERENCES `ligas` (`ligaId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
