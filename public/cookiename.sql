-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-07-2022 a las 02:01:06
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.4.1

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
  `local` int(11) NOT NULL,
  `visita` int(11) NOT NULL,
  `logoL` text NOT NULL,
  `logoV` text NOT NULL,
  `canal` text,
  `canal2` text,
  `canal3` text,
  `canal4` text,
  `canal5` text,
  `canal6` text,
  `fecha` datetime DEFAULT NULL,
  `liga` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `local`, `visita`, `logoL`, `logoV`, `canal`, `canal2`, `canal3`, `canal4`, `canal5`, `canal6`, `fecha`, `liga`, `status`) VALUES
(1, 10, 17, 'https://www.movistarplus.es/recorte/e/encuentro/e5bff5a3306429baad76de5d61e5fe8f', 'https://www.movistarplus.es/recorte/e/encuentro/f563af76d915a778dbd1e0e9d4eb427e', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-06 21:00:00', 1, 1),
(2, 1, 19, 'https://www.movistarplus.es/recorte/e/encuentro/4c1c17c61805ee51bd99c4da9e4edda6', 'https://www.movistarplus.es/recorte/e/encuentro/f23c8c1092dab48c202a401f3caf7a9a', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-07 16:15:00', 1, 1),
(3, 12, 5, 'https://www.movistarplus.es/recorte/e/encuentro/3b3f47fd00d31f49417c89ffa526cf39', 'https://www.movistarplus.es/recorte/e/encuentro/2539aab1560f0900943b08eae56caa40', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-07 18:30:00', 1, 1),
(4, 4, 6, 'https://www.movistarplus.es/recorte/e/encuentro/8ecec5088fa45e9e2b99f04ad6ba0a69', 'https://www.movistarplus.es/recorte/e/encuentro/2da95fe3a5a1e7b265a75268fdd17b58', 'M+ LaLiga 1', '', NULL, NULL, NULL, NULL, '2022-05-07 18:30:00', 1, 1),
(5, 15, 7, 'https://www.movistarplus.es/recorte/e/encuentro/eacadad4c273961ddbe24d7d63f27d53', 'https://www.movistarplus.es/recorte/e/encuentro/5aac54d28c9e144ac90a2f6fdd2d12fb', 'M+ LaLiga', 'M+ LaLiga 1', NULL, NULL, NULL, NULL, '2022-05-07 21:00:00', 1, 1),
(6, 8, 11, 'https://www.movistarplus.es/recorte/e/encuentro/9d2029f62626e66df435bd65a714a547', 'https://www.movistarplus.es/recorte/e/encuentro/ffea1dc7f9a26ec87011a54977dd83bc', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-08 14:00:00', 1, 1),
(7, 20, 18, 'https://www.movistarplus.es/recorte/e/encuentro/dd8ac7c76232934108847493e685ec54', 'https://www.movistarplus.es/recorte/e/encuentro/04ec4c467eb7bdcb1bafa5e0ec812160', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-08 16:15:00', 1, 1),
(8, 13, 3, 'https://www.movistarplus.es/recorte/e/encuentro/0ff812a82970ee3419a4cf91cca97f0c', 'https://www.movistarplus.es/recorte/e/encuentro/3e0bde3f3d29c424343c42e0aa819793', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-08 18:30:00', 1, 1),
(9, 2, 16, 'https://www.movistarplus.es/recorte/e/encuentro/99c50712d20ba5e5fa430ed714d97955', 'https://www.movistarplus.es/recorte/e/encuentro/4ce17a2143b4cdf075458c63c4b2feae', 'M+ LaLiga', 'M+ LaLiga 1', NULL, NULL, NULL, NULL, '2022-05-08 21:00:00', 1, 1),
(10, 19, 15, 'https://www.movistarplus.es/recorte/e/encuentro/f23c8c1092dab48c202a401f3caf7a9a', 'https://www.movistarplus.es/recorte/e/encuentro/eacadad4c273961ddbe24d7d63f27d53', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-10 19:00:00', 1, 1),
(11, 9, 1, 'https://www.movistarplus.es/recorte/e/encuentro/6fc276b44e8bea436d900c9294c9d428', 'https://www.movistarplus.es/recorte/e/encuentro/4c1c17c61805ee51bd99c4da9e4edda6', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-10 20:00:00', 1, 1),
(12, 7, 12, 'https://www.movistarplus.es/recorte/e/encuentro/5aac54d28c9e144ac90a2f6fdd2d12fb', 'https://www.movistarplus.es/recorte/e/encuentro/3b3f47fd00d31f49417c89ffa526cf39', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-10 21:30:00', 1, 1),
(13, 5, 13, 'https://www.movistarplus.es/recorte/e/encuentro/2539aab1560f0900943b08eae56caa40', 'https://www.movistarplus.es/recorte/e/encuentro/0ff812a82970ee3419a4cf91cca97f0c', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-11 19:00:00', 1, 1),
(14, 3, 8, 'https://www.movistarplus.es/recorte/e/encuentro/3e0bde3f3d29c424343c42e0aa819793', 'https://www.movistarplus.es/recorte/e/encuentro/cd4e260ddac5a04701e80c92ad7bd675', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-11 19:00:00', 1, 1),
(15, 18, 14, 'https://www.movistarplus.es/recorte/e/encuentro/04ec4c467eb7bdcb1bafa5e0ec812160', 'https://www.movistarplus.es/recorte/e/encuentro/49b664c85568db81b87b78d483246fea', 'GOL', '', NULL, NULL, NULL, NULL, '2022-05-11 20:30:00', 1, 1),
(16, 6, 2, 'https://www.movistarplus.es/recorte/e/encuentro/2da95fe3a5a1e7b265a75268fdd17b58', 'https://www.movistarplus.es/recorte/e/encuentro/99c50712d20ba5e5fa430ed714d97955', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-11 21:30:00', 1, 1),
(17, 17, 4, 'https://www.movistarplus.es/recorte/e/encuentro/f563af76d915a778dbd1e0e9d4eb427e', 'https://www.movistarplus.es/recorte/e/encuentro/8ecec5088fa45e9e2b99f04ad6ba0a69', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-12 19:00:00', 1, 1),
(18, 11, 20, 'https://www.movistarplus.es/recorte/e/encuentro/ffea1dc7f9a26ec87011a54977dd83bc', 'https://www.movistarplus.es/recorte/e/encuentro/dd8ac7c76232934108847493e685ec54', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-12 20:00:00', 1, 1),
(19, 16, 10, 'https://www.movistarplus.es/recorte/e/encuentro/4ce17a2143b4cdf075458c63c4b2feae', 'https://www.movistarplus.es/recorte/e/encuentro/e5bff5a3306429baad76de5d61e5fe8f', 'M+ LaLiga', '', NULL, NULL, NULL, NULL, '2022-05-12 21:30:00', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(60) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`) VALUES
(1, 'Noticias'),
(2, 'AcciÃ³n'),
(3, 'Sin CategorÃ­a'),
(4, 'Religioso'),
(5, 'Outdoor'),
(6, 'Infantil'),
(7, 'Auto'),
(8, 'MÃºsica'),
(9, 'Cocina'),
(10, 'General'),
(11, 'Deportes'),
(12, 'Series'),
(13, 'Comedia'),
(14, 'Entretenimiento'),
(15, 'EducaciÃ³n'),
(16, 'Ciencia'),
(17, 'PelÃ­culas'),
(18, 'Negocios'),
(19, 'Legislativo'),
(20, 'Documentales'),
(21, 'Familia'),
(22, 'Adultos'),
(24, 'Cine'),
(25, 'Premium'),
(27, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `channels`
--

CREATE TABLE `channels` (
  `channelId` int(11) NOT NULL,
  `channelName` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `channelUrl` text COLLATE utf8_spanish2_ci NOT NULL,
  `epg` text COLLATE utf8_spanish2_ci NOT NULL,
  `channelImg` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `category` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `channels`
--

INSERT INTO `channels` (`channelId`, `channelName`, `channelUrl`, `epg`, `channelImg`, `category`, `country`, `type`) VALUES
(1, 'ESPN [GEO]', 'https://cdn.cvattv.com.ar/live/c3eds/ESPN2HD/SA_SAGEMCOM/ESPN2HD.m3u8', 'espn_sur', 'https://images.ctfassets.net/ugxciox4nyye/3NCwVCRCmBEov5n6ou5hAA/c4270c0c6d2988c47c6350ca36175180/13_ESPN.png?fm=webp&q=80', 11, 4, 1),
(2, 'ESPN 2 [GEO]', 'https://cdn.cvattv.com.ar/live/c6eds/ESPN2_Arg/SA_SAGEMCOM/ESPN2_Arg.m3u8', 'espn_2_sur', 'https://images.ctfassets.net/ugxciox4nyye/4mdSmIihFejWNGVPiIMkvz/d76a823f16543c95ec31e0cea741201a/14_ESPN2.png?fm=webp&q=80', 11, 4, 1),
(3, 'ESPN 3 [GEO]', 'https://edge4-sl.cvattv.com.ar/live/c3eds/ESPN3/SA_SAGEMCOM/ESPN3.m3u8', 'espn_3_sur', 'https://images.ctfassets.net/ugxciox4nyye/3NCwVCRCmBEov5n6ou5hAA/c4270c0c6d2988c47c6350ca36175180/13_ESPN.png?fm=webp&q=80', 11, 4, 1),
(4, 'ESPN + [GEO]', 'https://edge4-sl.cvattv.com.ar/live/c3eds/ESPNHD/SA_SAGEMCOM/ESPNHD.m3u8', 'espn_extra_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/3NCwVCRCmBEov5n6ou5hAA/c4270c0c6d2988c47c6350ca36175180/13_ESPN.png?fm=webp&q=80', 11, 4, 1),
(5, 'Fox Sports [GEO]', 'https://edge4-sl.cvattv.com.ar/live/c3eds/FoxSports/SA_SAGEMCOM/FoxSports.m3u8', 'fox_sports_sur', 'https://images.ctfassets.net/ugxciox4nyye/4ldZDRBks3tZobn7OFbJFv/0299b77cf058f80501f191bb27f9573f/17_FoxSports.png?fm=webp&q=80', 11, 4, 1),
(6, 'Fox Sports 2 [GEO]', 'https://edge4-sl.cvattv.com.ar/live/c3eds/FoxSports2HD/SA_SAGEMCOM/FoxSports2HD.m3u8', 'fox_sports_2_sur', 'https://images.ctfassets.net/ugxciox4nyye/4aUalIxOYo8Wm9dBLL4Jc/645dbbb7edb8db65c14c9fa3a0f6ef40/18_FoxSports2.png?fm=webp&q=80', 11, 4, 1),
(7, 'Fox Sports 3 [GEO]', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(FOX_SPORTS_3)/index.m3u8', 'fox_sports_3_sur', 'https://images.ctfassets.net/ugxciox4nyye/240XGo19vZRnYoMKvObsC6/965379e7c2e8003dbc580d7c41ef0bef/19_FoxSports3.png?fm=webp&q=80', 11, 4, 1),
(8, 'Fox Sports + [GEO]', 'https://edge-live15-hr.cvattv.com.ar/live/c3eds/Fox_Sports_Premiun_HD/SA_SAGEMCOM/Fox_Sports_Premiun_HD.m3u8', 'fox_sports_premium_argentina', 'https://images.ctfassets.net/ugxciox4nyye/6sXhIs62R8cjNTvmWtvGmG/c5694f0d5987ad0c7c1b9fc00be42d7d/Canal_-_Fox_Sport_Premium.png?fm=webp&q=80', 11, 4, 1),
(9, 'TNT Sports [GEO]', 'https://cdn.cvattv.com.ar/live/c3eds/TNT_Sports_HD/SA_SAGEMCOM/TNT_Sports_HD.m3u8', 'tnt_sports', 'https://images.ctfassets.net/ugxciox4nyye/6iImzHdrQ2ec0JbRAFKEDG/354cf6196b96de87f6bc2e195e7e866b/Premium_02_TNTSports-color.png?fm=webp&q=80', 11, 4, 1),
(10, 'TV Max', 'https://bcovlive-a.akamaihd.net/7482a528b34142c9a11b4285307632d0/us-west-2/6058004209001/playlist_dvr.m3u8', 'tvmax', 'https://imagenes.gatotv.com/logos/canales/claros/9_de_panama.png', 11, 4, 1),
(11, 'Depor TV', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(DEPORTV)/index.m3u8', 'deportv', 'https://images.ctfassets.net/ugxciox4nyye/29KPKoeTvsx3PuHk5maUui/2fb421fbd5c8059d6575330ee6ec7d85/20_DeporteTV.png?fm=webp&q=80', 11, 4, 1),
(12, 'Turbo [GEO]', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(DISCOVERY_TURBO)/index.m3u8', 'discovery_turbo_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/526LGpaFoXNUdk1j6WA0Hb/78dae648589cac8f4d3339186eb5e49f/22_DiscoveryTurbo.png?fm=webp&q=80', 11, 4, 1),
(13, 'Tooncast [GEO]', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TOONCAST)/index.m3u8', 'tooncast', 'https://images.ctfassets.net/ugxciox4nyye/7IRItnDZbY1YV1Zf8NA0eu/24b16ed7317309e358903eaaea4f7e57/39_Tooncast.png?fm=webp&q=80', 6, 4, 1),
(14, 'Disney Channel [GEO]', 'https://edge4-sl.cvattv.com.ar/live/c3eds/DisneyChannelHD/SA_SAGEMCOM/DisneyChannelHD.m3u8', 'disney_channel_argentina', 'https://images.ctfassets.net/ugxciox4nyye/7H6alRacRfnIWHdk0ycMid/e109bddeed0558c386272c6c2d597604/26_DisneyCh.png?fm=webp&q=80', 6, 4, 1),
(15, 'Disney JR [GEO]', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(DISNEY_JUNIOR)/index.m3u8', 'disney_junior_argentina', 'https://images.ctfassets.net/ugxciox4nyye/2jh9KUAX0pFmFIQdx0hYAN/755b89fb275f55001259b7386904495d/28_DisneyJr.png?fm=webp&q=80', 6, 4, 1),
(16, 'Cartoon Network [GEO]', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(CARTOON_NETWORK_HD)/index.m3u8', 'cartoon_network_argentina', 'https://images.ctfassets.net/ugxciox4nyye/12DDQ6rj1D1XJgbfFJlE7Y/25ac07e1aba869cb590ecece1418a9f4/35_CartoonNetworkHD.png?fm=webp&q=80', 6, 4, 1),
(17, 'Nickelodeon [GEO]', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(NICK_HD)/index.m3u8', 'nickelodeon_argentina', 'https://images.ctfassets.net/ugxciox4nyye/4FfqGZIakO1SIpDRZH4EZE/08f366576db2f3d05b7e56e2197454cc/31_NickHD.png?fm=webp&q=80', 6, 4, 1),
(18, 'Paka Paka [GEO]', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(PAKA_PAKA)/index.m3u8', 'pakapaka', 'https://images.ctfassets.net/ugxciox4nyye/1ye90QHOL28MkyJ6Q1s2UH/0f564b84b0ad99997a44cd34b7c6122c/36_PakaPaka.png?fm=webp&q=80', 6, 4, 1),
(19, 'Baby TV [GEO]', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(BABY_TV)/index.m3u8', 'baby_tv_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/3uX75Uy298axY2CNWmBjdX/9b3bcc5728d57e876a2d41ac8357dfa3/40_BabyTV.png?fm=webp&q=80', 6, 4, 1),
(20, 'TLC', 'https://edge4-sl.cvattv.com.ar/live/c6eds/TLC/SA_SAGEMCOM/TLC.m3u8', 'tlc_argentina', 'https://images.ctfassets.net/ugxciox4nyye/3MQOt9I55Djj4QJ6S8CHll/35993083e010f6578912712b754f94a9/Canal_-_DiscoveryTLC.png?fm=webp&q=80', 14, 4, 1),
(21, 'HTV', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(HTV)/index.m3u8', 'htv', 'https://images.ctfassets.net/ugxciox4nyye/QYsFZTANMLqngS1NuqlDV/2d74d66512950c64c662bdf3be99ee7f/121_HTV.png?fm=webp&q=80', 14, 4, 1),
(22, 'FX', '\"http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(FX_HD)/index.m3u8', 'fx_argentina', 'https://images.ctfassets.net/ugxciox4nyye/27qdyEGErOYlZ0ZIJ9NzCg/aaa55232741d8e6cd434c8e96309feaf/45_FXHD.png?fm=webp&q=80', 24, 4, 1),
(23, 'Cine Canal', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(CINECANAL_HD)/index.m3u8', 'cinecanal_argentina', 'https://images.ctfassets.net/ugxciox4nyye/6pmMToHcLZH3cxt2homSk6/8fc78b9f2aa45a7cca4f21aebbfe8809/47_Cinecanal.png?fm=webp&q=80', 24, 4, 1),
(24, 'TCM', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TCM)/index.m3u8', 'tcm_argentina', 'https://images.ctfassets.net/ugxciox4nyye/4g2vJw5NXP7oDqfSP3jwLg/48fe2c3b9582624afcb12e4f1b082f09/48_TCM.png?fm=webp&q=80', 24, 4, 1),
(25, 'TNT', 'https://edge2-ccast-sl.cvattv.com.ar/live/c3eds/TNT_HD_Arg/SA_SAGEMCOM/TNT_HD_Arg.m3u8', 'tnt_argentina', 'https://images.ctfassets.net/ugxciox4nyye/1Xi29R82K8IWwZlBPRdGMz/209d344e76cd15a2ad8031892f9715b5/49_TNTHD.png?fm=webp&q=80', 24, 4, 1),
(26, 'TNT Series', 'https://edge2-ccast-sl.cvattv.com.ar/live/c3eds/TNTSeries/SA_SAGEMCOM/TNTSeries.m3u8', 'tnt_series_argentina', 'https://images.ctfassets.net/ugxciox4nyye/7ELLroSkVJCu1mlad72bNT/0d38b46c9d952bce0ddbc02b46119d40/50_TNTSeries.png?fm=webp&q=80', 24, 4, 1),
(27, 'Space', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(SPACE_HD)/index.m3u8', 'space_argentina', 'https://images.ctfassets.net/ugxciox4nyye/767olJ7V8RQkQZkhwA2PUd/c4081adb1d380eb81b2d631b50d7f22b/51_Space.png?fm=webp&q=80', 24, 4, 1),
(28, 'AXN', '//cdn.prepro.cvattv.com.ar/live/vod/AXNHD/SA_Live_WebVTT_FTA/AXNHD.m3u8', 'axn_argentina', 'https://images.ctfassets.net/ugxciox4nyye/5ACGfVlFTHfyv2ktSrDufK/32e9f43dd323e82dbf42b7169ed1a5ff/53_AXNHD.png?fm=webp&q=80', 25, 4, 1),
(29, 'Cinemax', '//cdn.cvattv.com.ar/live/c6eds/Cinemax/SA_SAGEMCOM/Cinemax.m3u8', 'cinemax_argentina', 'https://images.ctfassets.net/ugxciox4nyye/6RYXhIj8X3iJXwJPaFpvuJ/519fc4b700613824c5b9f5fe2d35915e/54_Cinemax.png?fm=webp&q=80', 25, 4, 1),
(30, 'Universal', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERSAL_HD)/index.m3u8', 'studio_universal_argentina', 'https://images.ctfassets.net/ugxciox4nyye/3xbmRhqiIzmq92SsYm9qdb/4746ff2397a15eca1cea47c50eebffd4/57_Universal.png?fm=webp&q=80', 24, 4, 1),
(31, 'SyFy', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(SYFY_HD)/index.m3u8', 'syfy_argentina', 'https://images.ctfassets.net/ugxciox4nyye/1DYLLjssPwaKSUZcHCvYSc/370fcadeb79594c94da41eaf50d76c4f/58_SYFY.png?fm=webp&q=80', 24, 4, 1),
(32, 'Telemundo', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TELEMUNDO)/index.m3u8', 'telemundo_argentina', 'https://rndserv.xyz/images/telemundo.png', 10, 4, 1),
(33, 'Volver', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(VOLVER)/index.m3u8', 'htv', 'https://images.ctfassets.net/ugxciox4nyye/Mq0oDJsOGLGwmqR3jljjd/3b623163d3192f59a41720d0418c2813/canal-volver.png?fm=webp&q=80', 24, 4, 1),
(34, 'TVE', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(TVE)/index.m3u8', 'tve', 'https://images.ctfassets.net/ugxciox4nyye/7jOLhFfEgvIJD81fcVjRpD/95fddfd8e7b896ea3dca3c6ee63fbe42/62_TVE.png?fm=webp&q=80', 24, 4, 1),
(35, 'Star TVE', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(STAR_TVE_HD)/index.m3u8', 'star_tve', 'https://images.ctfassets.net/ugxciox4nyye/5HmX5Cx0URS2hZ4HkRI9YR/0911e4b7507cad496b28c8e2051e289a/63_StarTVE.png?fm=webp&q=80', 24, 4, 1),
(36, 'AMC', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(AMC_HD)/index.m3u8', 'amc_argentina', 'https://images.ctfassets.net/ugxciox4nyye/rbHuH1zjZ5kt0WupDBqWO/d6a34cf574515559d2754d4d8a4d961e/65_AMC.png?fm=webp&q=80', 24, 4, 1),
(37, 'Europa', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(EUROPA_EUROPA_HD)/index.m3u8', 'europa_europa', 'https://images.ctfassets.net/ugxciox4nyye/1sB4rWsE3tpUxTIH7Bykf8/40497fcccd89b75d19f8a44cac4314eb/66_EuropaEuropa.png?fm=webp&q=80', 24, 4, 1),
(38, 'Paramount', 'https://chromecast.cvattv.com.ar/live/c7eds/Paramount/SA_SAGEMCOM/Paramount.m3u8', 'paramount_argentina', 'https://images.ctfassets.net/ugxciox4nyye/76LedPqmnaFTMC5WzIuHaj/985f557cf7d4b35aeb5340a5978d2e98/70_ParamountChannel.png?fm=webp&q=80', 24, 4, 1),
(39, 'Comedy Central', '//cdn.prepro.cvattv.com.ar/live/vod/ComedyCentral/SA_Live_WebVTT_FTA/ComedyCentral.m3u8', 'comedy_central_argentina', 'https://images.ctfassets.net/ugxciox4nyye/3SbL9dYy1msHrR6CNYnqcE/01d4b5df1c775d40721449f71aadeda5/71_ComedyCentral.png?fm=webp&q=80', 24, 4, 1),
(40, 'Pasiones', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(PASIONES_HD)/index.m3u8', 'pasiones_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/iEmoAG070AQj6Z04qanWm/eb443a668d8bb7ef8cf1c9f49cae701a/73_Pasiones.png?fm=webp&q=80', 24, 4, 1),
(41, 'HBO', 'https://edge4-sl.cvattv.com.ar/live/c3eds/HBOHD/SA_SAGEMCOM/HBOHD.m3u8', 'hbo_argentina', 'https://images.ctfassets.net/ugxciox4nyye/7icW4eGEsDwYW0SGbEizl0/11e491f83fef667f6b5242efe73ce4c5/Premium_04_HBO.png?fm=webp&q=80', 25, 4, 1),
(42, 'HBO 2', 'https://edge4-sl.cvattv.com.ar/live/c6eds/HBO_2/SA_SAGEMCOM/HBO_2.m3u8', 'hbo_2_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/69ZCAfInUfsT4Q4HKNqenB/e663327079caa7727a6c92f421375c47/Premium_08_HBO2.png?fm=webp&q=80', 25, 4, 1),
(43, 'HBO Family', '//cdn.cvattv.com.ar/live/c6eds/HBO_Family/SA_SAGEMCOM/HBO_Family.m3u8', 'hbo_family_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/5bKzSwd0Mu1shRgqL7xwWD/80c78ad02cdc722d2035cbe4395fb5f8/Premium_03_HBOFamily.png?fm=webp&q=80', 25, 4, 1),
(44, 'HBO Plus', '//cdn.cvattv.com.ar/live/c6eds/HBO_Plus/SA_SAGEMCOM/HBO_Plus.m3u8', 'hbo_family_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/5bKzSwd0Mu1shRgqL7xwWD/80c78ad02cdc722d2035cbe4395fb5f8/Premium_03_HBOFamily.png?fm=webp&q=80', 25, 4, 1),
(45, 'HBO Signature', '//cdn.cvattv.com.ar/live/c6eds/HBO_Signature/SA_SAGEMCOM/HBO_Signature.m3u8', 'hbo_signature_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/77tiTKhe5p80XL5mgv2GX4/17c2b387b7a33cb13dbd5abbec8fe5ba/Premium_07_HBOSignature.png?fm=webp&q=80', 25, 4, 1),
(46, 'Universal Premiere', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERESAL_PREMIERE_HD)/index.m3u8', 'universal_premiere', 'https://images.ctfassets.net/ugxciox4nyye/6ZzSgskyQeKxH1jVARP4Be/f5e9c9bd641b4b6b524a2677e0f60842/universal-premiere.png?fm=webp&q=80', 25, 4, 1),
(47, 'Universal Cinema', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERSAL_CINEMA_HD)/index.m3u8', 'universal_cinema', 'https://images.ctfassets.net/ugxciox4nyye/60dStMuZCfyo3DqEMD0RFa/aa4713364373db825f7983a2086890b5/universal-cinema.png?fm=webp&q=80', 25, 4, 1),
(48, 'Universal Comedy', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERSAL_COMEDY_HD)/index.m3u8', 'universal_comedy', 'https://images.ctfassets.net/ugxciox4nyye/3E162p4ysAkaik0txYYN0k/66dc9be0cc3d18c163e5d9f1f8b97b78/universal-comedy.png?fm=webp&q=80', 25, 4, 1),
(49, 'Universal Crime', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERSAL_CRIME_HD)/index.m3u8', 'universal_crime', 'https://images.ctfassets.net/ugxciox4nyye/3gBoVelP3w7EOJ9cF2AFxL/b7a0f9e1db82041c815a8754ed9abd05/universal-crime.png?fm=webp&q=80', 25, 4, 1),
(50, 'Universal Reality', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(UNIVERSAL_REALITY_HD)/index.m3u8', 'universal_reality', 'https://images.ctfassets.net/ugxciox4nyye/26kcx0bBMEXfcFCR7gea7t/1c1b48583ea217a1a21020d12a8e0d3a/universal-reality.png?fm=webp&q=80', 25, 4, 1),
(51, 'Penthouse', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(PENTHOUSE)/index.m3u8', 'penthouse', 'https://images.ctfassets.net/ugxciox4nyye/6FJ6qwalqD61P1dCugzmnh/926e824e73ad5d3d5d553b290969c0b8/Premium_21_Penthouse.png?fm=webp&q=80', 25, 4, 1),
(52, 'Brazzers', '\"http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(BRAZZERS)/index.m3u8', 'brazers', 'https://images.ctfassets.net/ugxciox4nyye/MIH0nuMzgv498Fp71F48p/a895dc3894cf3e66005123faed05a6aa/Premium_20_Brazzers.png?fm=webp&q=80', 25, 4, 1),
(53, 'PlayBoy', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(PLAYBOY_HD)/index.m3u8', 'playboy', 'https://images.ctfassets.net/ugxciox4nyye/5MuRMAvv3VDdgRF8UZxs6a/03e0c37dec9ff76ca5c9b2b40ad57c63/Premium_22_PlayboyHD.png?fm=webp&q=80', 25, 4, 1),
(54, 'Sextreme', '//cdn.prepro.cvattv.com.ar/live/vod/Sextreme/SA_Live_WebVTT_FTA/Sextreme.m3u8', 'sextreme', 'https://images.ctfassets.net/ugxciox4nyye/5ykA3w0nH0p6kgWoUhfTdp/64048aa59e26565580b42c6880c0ffdf/Premium_23_Sextreme.png?fm=webp&q=80', 22, 4, 1),
(55, 'Venus', '\"http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(VENUS)/index.m3u8', 'venus', 'https://images.ctfassets.net/ugxciox4nyye/7olIHQjlSCrk9kFneXLllk/0182018d0d8f32a49188f3b30ba0b6d6/Premium_24_Venus.png?fm=webp&q=80', 25, 4, 1),
(56, 'MTV Hits', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(MTV_HITS)/index.m3u8', 'mtv_hits', 'https://images.ctfassets.net/ugxciox4nyye/33QT9mcUIUX6ezV5xXA61r/6da57dc09d602d6ba128357517588d3c/115_MTVHits.png?fm=webp&q=80', 14, 4, 1),
(57, 'Discovery Science', '//cdn.cvattv.com.ar/live/4/DISCOVERY-SCIENCE-HD/SA_SAGEMCOM/DISCOVERY-SCIENCE-HD.m3u8', 'discovery_science_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/2Epkdd93g9ercbqDzKQFoe/36c820d026574873c07232d83a9e9cd1/89_DiscoveryScience.png?fm=webp&q=80', 14, 4, 1),
(58, 'Discovery Theater', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(DISCOVERY_THEATER_HD)/index.m3u8', 'discovery_theater_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/eg0Qo0QB4c3KAVMz6lZIU/4b374c4a0dc4ae278db863e404364285/91_DiscoveryTheater.png?fm=webp&q=80', 14, 4, 1),
(59, 'Atreseries', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(ATRES_SERIES_HD)/index.m3u8', 'atreseries_internacional', 'https://images.ctfassets.net/ugxciox4nyye/34c67hv0nOq5BrBaEcSqDx/710f3144ad00783b2499a54737334199/64_Atreseries.png?fm=webp&q=80', 14, 4, 1),
(60, 'Discovery World', '//cdn.cvattv.com.ar/live/c6eds/Discovery_World_HD/SA_SAGEMCOM/Discovery_World_HD.m3u8', 'discovery_world_latinoamerica', 'https://images.ctfassets.net/ugxciox4nyye/1Np2cHnQxvzXiPeMMxuJpn/0d128c7aad11e845b0af560b64207aba/90_DiscoveryWorld.png?fm=webp&q=80', 14, 4, 1),
(61, 'HBO Mundi', '//cdn.cvattv.com.ar/live/c6eds/HBO_Mundi/SA_SAGEMCOM/HBO_Mundi.m3u8', 'hbo_mundi', 'https://images.ctfassets.net/ugxciox4nyye/26mE7OYl09nkFyQcGMv4mo/4190f92a6b036b9c6f710a6849490376/Premium_05_HBOMundi.png?fm=webp&q=80', 25, 4, 1),
(62, 'HBO Xtreme', '//cdn.prepro.cvattv.com.ar/live/vod/HBO_Extreme/SA_Live_WebVTT_FTA/HBO_Extreme.m3u8', 'hbo_xtreme', 'https://images.ctfassets.net/ugxciox4nyye/6jfONrEkrlw7SiKxsIsZr1/dea17656d92bae154876d07dc1391863/Premium_09_HBOExtreme.png?fm=webp&q=80', 25, 4, 1),
(63, 'HBO Pop', '//cdn.cvattv.com.ar/live/c7eds/HBO_POP/SA_SAGEMCOM/HBO_POP.m3u8', 'hbo_pop', 'https://images.ctfassets.net/ugxciox4nyye/3OamYggD5kfGpnHPj6LcN6/c06f94dbe8efe062bd7d85825acb283e/Premium_10_HBOPOP.png?fm=webp&q=80', 25, 4, 1),
(64, 'Gourmet', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(EL_GOURMET_HD)/index.m3u8', 'elgourmet', 'https://images.ctfassets.net/ugxciox4nyye/1YidEkapW8T04qZBXENP7N/2505de77bd51eb0ed539eda83f2687f3/79_ElGourmet.png?fm=webp&q=80', 14, 4, 1),
(65, 'A&E', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(AE_MUNDO_HD)/index.m3u8', 'a_y_e_argentina', 'https://images.ctfassets.net/ugxciox4nyye/2WywBmAu4XrHLK8Env2Yys/84a7f4f36e45ba0cff53ae674ede27f8/52_A_E.png?fm=webp&q=80', 14, 4, 1),
(66, 'CNN Internacional', 'https://cnn-cnninternational-1-gb.samsung.wurl.com/playlist.m3u8', 'cnn_internacional', 'https://images.ctfassets.net/ugxciox4nyye/13QrJSn2wmGrz5dnQPIQAM/e939099ee2df6a99bd6979e0f8d90dd3/98_CNN.png?fm=webp&q=80', 1, 4, 1),
(67, 'Lifetime', 'http://arlocaltstvhls.lcdn.clarotv.com.ar/Content/HLS_HLS_FK/Live/channel(LIFETIME)/index.m3u8', 'lifetime_argentina', 'https://images.ctfassets.net/ugxciox4nyye/7i5CrejCWabjUYrVseESoJ/f1d42841c60b42a98d92fd73bfa03d0d/84_Lifetime.png?fm=webp&q=80', 14, 4, 1),
(68, 'ADN 40', 'http://mdstrm.com/live-stream-playlist/60b578b060947317de7b57ac.m3u8', 'adn_40', 'https://imagenes.gatotv.com/logos/canales/claros/adn_40.png', 1, 2, 1),
(69, 'Caracol', 'http://mdstrm.com/live-stream-playlist_800/58dc3d471cbe05ff3c8e463e.m3u8', 'caracol_internacional', 'https://imagenes.gatotv.com/logos/canales/claros/caracol_colombia.png', 1, 6, 1),
(70, 'Sur TV', 'https://cdn.cvattv.com.ar/live/c4eds/SUR_TV_C4/SA_SAGEMCOM/SUR_TV_C4.m3u8', 'sur_tv_itapua_paraguay', 'https://imagenes.gatotv.com/logos/canales/claros/sur_tv_itapua_paraguay.png', 14, 7, 1),
(71, 'Cartoonito', 'http://bgapp.live/play/14-414.php?c=11&token=blacccckgh0st&f=.m3u8', 'cartoonito_argentina', 'https://imagenes.gatotv.com/logos/canales/claros/cartoonito.png', 6, 4, 1),
(72, 'TSi', 'https://www.dailymotion.com/embed/video/k3uinUP9AHKH4AxHRoW	', 'tsi_honduras', 'https://rndserv.xyz/images/tvc.png', 1, 5, 2),
(73, 'Canal 5 El LÃ­der', 'https://www.dailymotion.com/embed/video/k6BJTswKAXQsl6xHQGd', '5_el_lider_honduras', 'https://rndserv.xyz/images/tvc.png', 1, 5, 2),
(74, 'Telecadena 7 y 4', 'https://www.dailymotion.com/embed/video/k2cFg0RH8TpV0lxHRoW', 'telecadena_7_y_4_honduras', 'https://rndserv.xyz/images/tvc.png', 1, 5, 2),
(75, 'TDTV+', 'https://conceptoweb-studio.com/radio/video/tododeportesplus/', '11_de_honduras', 'https://dd7tel2830j4w.cloudfront.net/f1560359694028x167785582725733730/Group%2012.svg', 11, 5, 2),
(76, 'BeIN Sports 1', 'https://futbollatam.com/embed/bein1.html', 'bein_sport_en_espanol', 'https://imagenes.gatotv.com/logos/canales/claros/bein_sports_espana.png', 11, 1, 3),
(77, 'TyC Sports', 'https://cdn.cvattv.com.ar/live/c3eds/TyCSport/SA_SAGEMCOM/TyCSport.m3u8', 'tyc_sports', 'https://imagenes.gatotv.com/logos/canales/claros/tyc_sports.png', 11, 4, 1),
(78, 'Los Simpsons', 'https://srv5.zcast.com.br/simpsons/simpsons/playlist.m3u8', 'los_simpson', 'https://rndserv.xyz/images/simpsons.png', 14, 1, 1),
(79, 'Padre de Familia', 'https://www.blogger.com/video.g?token=AD6v5dzaCPU01mjCzQLluaIAAaWw9NMueCXb-tW7Q-nYDhMhTQQ1M0_85B6q_NxaO36DJwc6hncl1fEAx71XY37HWuYOW3EZ7Tuvs9_EogCnYXP1rCHL6E3Y4ne3JBfFe923IhNp6Rs', 'family_guy', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi1.wp.com%2Foggiscienza.it%2Fwp-content%2Fuploads%2F2015%2F12%2Ffamily_guy_logo-svg.png%3Fssl%3D1&f=1&nofb=1', 14, 1, 3),
(80, 'DirecTV Sports', 'https://viperplay.net/iframes/star24.html?view', 'directv_sports', 'https://iconape.com/wp-content/png_logo_vector/directv-sports.png', 11, 4, 3),
(81, 'CNN EspaÃ±ol', '//edge-live12-sl.cvattv.com.ar/live/c6eds/CNN_en_Espanol/SA_SAGEMCOM/CNN_en_Espanol.m3u8', 'cnn_en_espanol', 'https://images.ctfassets.net/ugxciox4nyye/6ON8A9RJLupcBvYnw9uKhN/e2163b8f88b1bcf59259e328a0457698/97_CNNEspanol.png?fm=webp&q=80', 1, 1, 1),
(82, 'Discovery Channel', 'https://edge4-sl.cvattv.com.ar/live/c3eds/DiscoveryHD/SA_SAGEMCOM/DiscoveryHD.m3u8', 'discovery_channel_argentina', 'https://images.ctfassets.net/ugxciox4nyye/2jxD6xBgfDYuGl4ObVKjCA/713c91824c8b6ead6a48a9faff844441/87_Discovery.png?fm=webp&q=80', 14, 4, 1),
(83, 'Home & Health', '//cdn.prepro.cvattv.com.ar/live/vod/DiscoveryHomeHealthHD/SA_Live_WebVTT_FTA/DiscoveryHomeHealthHD.m3u8', 'home_and_health', 'https://images.ctfassets.net/ugxciox4nyye/2Tyd8Wxc1Y48d3Fz2myu9B/ddc2167ceef311d17e10efdf5b131eec/76_DiscoveryH_H.png?fm=webp&q=80', 14, 4, 1),
(84, 'NASA', '21X5lGlDOfg', 'nasa', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/NASA_logo.svg/110px-NASA_logo.svg.png', 16, 1, 1),
(85, 'Claro Sports 1', '//dai.google.com/linear/hls/event/MErimHzcQJyFY4sABtO2Lg/master.m3u8', 'claro_sports', 'https://images.ctfassets.net/ugxciox4nyye/HACpPafOQ9Yj5f8T8Ey1Y/fe9b0f454657b8c4812a138c5870239e/12_ClaroSports.png?fm=webp&q=80', 11, 4, 1),
(86, 'Claro Sports 2', '//claro-jw.cdn.vustreams.com/live/channel05/live.isml/master.m3u8', 'https://www.gatotv.com/canal/claro_sports', 'https://images.ctfassets.net/ugxciox4nyye/HACpPafOQ9Yj5f8T8Ey1Y/fe9b0f454657b8c4812a138c5870239e/12_ClaroSports.png?fm=webp&q=80', 11, 4, 1),
(87, 'Claro Sports 3', '//claro-jw.cdn.vustreams.com/live/channel07/live.isml/master.m3u8', 'claro_sports', 'https://images.ctfassets.net/ugxciox4nyye/HACpPafOQ9Yj5f8T8Ey1Y/fe9b0f454657b8c4812a138c5870239e/12_ClaroSports.png?fm=webp&q=80', 11, 4, 1),
(88, 'Claro Sports 4', '//claro-jw.cdn.vustreams.com/live/channel08/live.isml/master.m3u8', 'claro_sports', 'https://images.ctfassets.net/ugxciox4nyye/HACpPafOQ9Yj5f8T8Ey1Y/fe9b0f454657b8c4812a138c5870239e/12_ClaroSports.png?fm=webp&q=80', 11, 4, 1),
(89, 'VTV', 'https://cdn.cvattv.com.ar/live/c3eds/VTV_HD/SA_SAGEMCOM/VTV_HD.m3u8', 'vtv', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/VTV%2BUruguay.svg/512px-VTV%2BUruguay.svg.png?20190607234142', 11, 7, 1),
(90, 'AmÃ©rica Sports', 'rBZZSmWJcAo', 'america_sports', 'https://www.amsports.com.ar/img/logo-americasports.png', 11, 4, 1),
(91, 'HCH TV', 'https://www.dailymotion.com/embed/video/x81za5c', 'hch', 'https://hch.tv/wp-content/uploads/2021/09/logos-hch-bueno-1.png', 1, 5, 2),
(92, 'Be mad', 'mt?ch=bemad', 'be_mad', 'http://rndserv.xyz/images/bemad.png', 14, 1, 4),
(93, 'La 1 [geo eventual]', 'l1?ch=la1', 'epg', 'http://rndserv.xyz/images/la1.png', 10, 1, 4),
(94, '4 Cuatro', 'mt?ch=cuatro', 'epg', 'http://rndserv.xyz/images/cuatro.png', 10, 1, 4),
(95, 'Telecinco 5', 'mt?ch=telecinco', 'epg', 'http://rndserv.xyz/images/telecinco.png', 10, 1, 4),
(96, '24h', 'l1?ch=24h', 'epg', 'http://rndserv.xyz/images/24h.png', 10, 1, 4),
(97, 'TDP [geo]', 'l1?ch=tdp', 'epg', 'http://rndserv.xyz/images/teledeporte.png', 11, 1, 4),
(98, 'Clan [geo]', 'l1?ch=clan', 'epg', 'http://rndserv.xyz/images/clan.png', 10, 1, 4),
(99, 'Neox [geo]', 'a3?ch=neox', 'epg', 'http://rndserv.xyz/images/neox.png', 14, 1, 4),
(100, 'Mega [geo]', 'a3?ch=mega_ini', 'epg', 'http://rndserv.xyz/images/mega.png', 10, 1, 4),
(101, 'A3S Atreseries [geo]', 'a3?ch=atreseries', 'epg', 'http://rndserv.xyz/images/atreseries.png', 14, 1, 4),
(102, 'FDF FactorÃ­a de FicciÃ³n', 'mt?ch=fdf', 'epg', 'http://rndserv.xyz/images/fdf.png', 14, 1, 4),
(103, 'Energy', 'mt?ch=energy', 'epg', 'http://rndserv.xyz/images/energy.png', 14, 1, 4),
(104, 'Be Mad', 'mt?ch=bemad', 'epg', 'http://rndserv.xyz/images/bemad.png', 14, 1, 4),
(105, 'Divinity', 'mt?ch=divinity', 'epg', 'http://rndserv.xyz/images/divinity.png', 14, 1, 4),
(106, 'Boing', 'mt?ch=boing', 'epg', 'http://rndserv.xyz/images/boing.png', 14, 1, 4),
(107, 'Mtmad', 'l1?ch=trece', 'epg', 'http://rndserv.xyz/images/mtmad.png', 14, 1, 4),
(108, 'El Toro TV', 'l1?ch=eltorotv', 'epg', 'http://rndserv.xyz/images/eltorotv.png', 14, 1, 4),
(109, '7NN 7 Noticias', 'l1?ch=8tv', 'epg', 'http://rndserv.xyz/images/7nn.png', 1, 1, 4),
(110, 'Teve.cat (CataluÃ±a)', 'ccma?ch=tv3', 'epg', 'http://rndserv.xyz/images/tevecat.png', 10, 1, 4),
(111, 'Telemadrid', 'l1?ch=telemadrid', 'epg', 'http://rndserv.xyz/images/33.png', 14, 1, 4),
(112, 'Canal Sur (AndalucÃ­a)', 'l1?ch=canalsur', 'sur_andalucia', 'http://rndserv.xyz/images/canalsur.png', 3, 1, 4),
(113, 'TVG Europa', 'l1?ch=tvg_europa', 'epg', 'http://rndserv.xyz/images/tvg.png', 10, 1, 4),
(114, 'TVG AmÃ©rica', 'l1?ch=tvg_america', 'epg', 'http://rndserv.xyz/images/tvg.png', 10, 1, 4),
(115, 'ETB 1', 'l1?ch=etb_1', 'epg', 'http://rndserv.xyz/images/eitb.png', 10, 1, 4),
(116, 'ETB 2', 'l1?ch=etb_2', 'epg', 'http://rndserv.xyz/images/eitb.png', 10, 1, 4),
(117, 'AragÃ³n TV', 'l1?ch=aragontv', 'epg', 'http://rndserv.xyz/images/aragontv.png', 10, 1, 4),
(118, 'AragÃ³n TV', 'l1?ch=aragontv_d', 'epg', 'http://rndserv.xyz/images/aragontv.png', 10, 1, 4),
(119, 'CMM Castilla-La Mancha Media', 'l1?ch=cmm', 'epg', 'http://rndserv.xyz/images/cmm.png', 10, 1, 4),
(120, 'RTVC RadiotelevisiÃ³n Canaria (Canarias)', 'l1?ch=rtvc', 'epg', 'http://rndserv.xyz/images/rtvc.png', 10, 1, 4),
(121, '7RM RadiotelevisiÃ³n de la RegiÃ³n de Murcia', 'l1?ch=la8_avila', 'epg', 'http://rndserv.xyz/images/7rm.png', 10, 1, 4),
(122, 'Ã Punt (EPG)', 'yt?ch=ib3', 'epg', 'http://rndserv.xyz/images/apunt.png', 10, 1, 4),
(123, 'Ã Punt (Noticias)', 'yt?ch=ib3_noticies', 'epg', 'http://rndserv.xyz/images/apunt.png', 1, 1, 4),
(124, 'Ã Punt (eSports)', 'yt?ch=ib3_esports', 'epg', 'http://rndserv.xyz/images/apunt.png', 11, 1, 4),
(125, '7TV AndalucÃ­a', 'l1?ch=rtpa', 'epg', 'http://rndserv.xyz/images/7tv.png', 10, 1, 4),
(126, 'DKISS', 'yt?ch=dkiss', 'epg', 'http://rndserv.xyz/images/dkiss.png', 14, 1, 4),
(127, 'DMAX', 'dp?ch=dmax', 'epg', 'http://rndserv.xyz/images/dmax.png', 14, 1, 4),
(128, 'Paramount Plus', 'pl?ch=paramount_plus', 'epg', 'http://rndserv.xyz/images/paramount.png', 14, 1, 4),
(129, 'Paramount Movies', 'pl?ch=paramount_movie', 'epg', 'http://rndserv.xyz/images/paramount.png', 17, 1, 4),
(130, 'Paramount Picks', 'pl?ch=paramount_picks', 'epg', 'http://rndserv.xyz/images/paramount.png', 14, 1, 4),
(131, 'Real Madrid TV', 'l1?ch=rm_es', 'epg', 'http://rndserv.xyz/images/rm.png', 11, 1, 4),
(132, 'Real Madrid TV', 'l1?ch=rm_en', 'epg', 'http://rndserv.xyz/images/rm.png', 11, 1, 4),
(133, 'ABC (News)', 'l1?ch=abcnews', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(134, 'ABC (WPVI)', 'l1?ch=abc6_wpvi', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(135, 'ABC (KABC)', 'l1?ch=abc7_kabc', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(136, 'ABC (KGP)', 'l1?ch=abc7_kgo', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(137, 'ABC (WLS)', 'l1?ch=abc7_wls', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(138, 'ABC (WXYZ)', 'l1?ch=abc7_wxyz', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(139, 'ABC (KOLO)', 'l1?ch=abc8_kolo', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(140, 'ABC (KCRG)', 'l1?ch=abc9_kcrg', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(141, 'ABC (WSRY)', 'l1?ch=abc9_wsyr', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(142, 'ABC (WTEN)', 'l1?ch=abc10_wten', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(143, 'ABC (WTVD)', 'l1?ch=abc11_wtvd', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(144, 'ABC (WTVG)', 'l1?ch=abc13_wtvg', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(145, 'ABC (KNXV)', 'l1?ch=abc15_knxv', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(146, 'ABC (WNEP)', 'l1?ch=abc16_wnep', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(147, 'ABC (WPTA)', 'l1?ch=abc21_wpta', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(148, 'ABC (WHTM)', 'l1?ch=abc27_whtm', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(149, 'ABC (WFTS)', 'l1?ch=abc28_wfts', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(150, 'ABC (KFSN)', 'l1?ch=abc30_kfsn', 'epg', 'http://rndserv.xyz/images/abc.png', 1, 8, 4),
(151, 'CBS (CBSN)', 'l1?ch=cbsn', 'epg', 'http://rndserv.xyz/images/cbs.png', 11, 8, 4),
(152, 'CBS', 'us?ch=cbs', 'epg', 'http://rndserv.xyz/images/cbs.png', 1, 8, 4),
(153, 'CBS Sports HQ', 'l1?ch=cbssportshq', 'epg', 'http://rndserv.xyz/images/cbs.png', 11, 8, 4),
(154, 'CBS Sports Network', 'l1?ch=cbssn', 'epg', 'http://rndserv.xyz/images/cbs.png', 3, 1, 4),
(155, 'FOX News', 'us_f?ch=foxnews', 'epg', 'http://rndserv.xyz/images/fox.png', 1, 8, 4),
(156, 'FOX News Now', 'l1?ch=foxnewsnow', 'epg', 'http://rndserv.xyz/images/fox.png', 1, 8, 4),
(157, 'FOX Business', 'l1?ch=foxbusiness', 'epg', 'http://rndserv.xyz/images/fox.png', 10, 8, 4),
(158, 'FOX Weather', 'l1?ch=foxweather', 'epg', 'http://rndserv.xyz/images/fox.png', 10, 8, 4),
(159, 'FOX', 'us_f?ch=fox', 'epg', 'http://rndserv.xyz/images/fox.png', 10, 8, 4),
(160, 'FOX Soul', 'l1?ch=fox_soul', 'epg', 'http://rndserv.xyz/images/fox.png', 10, 8, 4),
(161, 'FOX (TR)', 'l1?ch=fox_tr', 'epg', 'http://rndserv.xyz/images/fox.png', 1, 8, 4),
(162, 'FOX (KTVU)', 'l1?ch=fox2_ktvu', 'epg', 'http://rndserv.xyz/images/fox.png', 1, 8, 4),
(163, 'FOX (WNYW)', 'l1?ch=fox5_wnyw', 'epg', 'http://rndserv.xyz/images/fox.png', 1, 8, 4),
(164, 'NBC News', 'l1?ch=nbcnews', 'epg', 'http://rndserv.xyz/images/nbc.png', 1, 8, 4),
(165, 'BBC World', 'ftv?ch=bbcworld', 'epg', 'http://rndserv.xyz/images/bbc.png', 1, 10, 4),
(166, 'BBC America Parliament Alba S4C (Reino Unido)', 'us?ch=bbc_america', 'epg', 'http://rndserv.xyz/images/bbc.png', 1, 10, 4),
(167, 'BBC Food', 'pl?ch=bbc_food', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(168, 'BBC Home', 'pl?ch=bbc_home', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(169, 'BBC Drama', 'pl?ch=bbc_drama', 'epg', 'http://rndserv.xyz/images/bbc.png', 14, 10, 4),
(170, 'BBC News', 'ftv?ch=bbcnews', 'epg', 'http://rndserv.xyz/images/bbc.png', 1, 10, 4),
(171, 'BBC One', 'ftv?ch=bbcone', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(172, 'BBC Two', 'ftv?ch=bbctwo', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(173, 'BBC Four', 'ftv?ch=bbcfour', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(174, 'CBBC', 'ftv?ch=cbbc', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(175, 'CBeebies', 'ftv?ch=cbeebies', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(176, 'BBC Scotland', 'ftv?ch=bbcscotland', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(177, 'BBC Parliament', 'ftv?ch=bbcparliament', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(178, 'BBC Alba', 'l1?ch=bbcalba', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(179, 'BBC S4C', 'l1?ch=s4c', 'epg', 'http://rndserv.xyz/images/bbc.png', 10, 10, 4),
(180, 'Sky News', 'l1?ch=skynews', 'epg', 'http://rndserv.xyz/images/skynews.png', 1, 10, 4),
(181, 'Sky Sport', 'l1?ch=skysport', 'epg', 'http://rndserv.xyz/images/skynews.png', 11, 10, 4),
(182, 'Euronews', 'yt?ch=euronews_es', 'epg', 'http://rndserv.xyz/images/euronews.png', 1, 10, 4),
(183, 'Euronews', 'yt?ch=euronews_en', 'epg', 'http://rndserv.xyz/images/euronews.png', 1, 10, 4),
(184, 'RT Russia Today', 'https://vk.com/actualidadrt?z=video-61174019_456240097?view', 'epg', 'http://rndserv.xyz/images/rt.png', 1, 11, 3),
(185, 'Reuters Now', 'l1?ch=reutersnow', 'epg', 'http://rndserv.xyz/images/reuters.png', 1, 10, 4),
(186, 'Reuters', 'yt?ch=reuters', 'epg', 'http://rndserv.xyz/images/reuters.png', 1, 10, 4),
(187, 'Reuters 2', 'yt?ch=reuters_2', 'epg', 'http://rndserv.xyz/images/reuters.png', 1, 10, 4),
(188, 'DW', 'l1?ch=dw_es', 'epg', 'http://rndserv.xyz/images/dw.png', 1, 9, 4),
(189, 'DW', 'l1?ch=dw_en', 'epg', 'http://rndserv.xyz/images/dw.png', 1, 9, 4),
(190, 'The Weather Channel', 'l1?ch=weatherchannel', 'epg', 'http://rndserv.xyz/images/weather.png', 1, 10, 4),
(191, 'Newsmax TV', 'l1?ch=newsmax', 'epg', 'http://rndserv.xyz/images/newsmax.png', 1, 10, 4),
(192, 'CBC News [geo]', 'l1?ch=cbc_news', 'epg', 'http://rndserv.xyz/images/cbc.png', 1, 10, 4),
(193, 'CBC Sports [geo]', 'l1?ch=cbc_sports', 'epg', 'http://rndserv.xyz/images/cbc.png', 10, 11, 4),
(194, 'Univision', 'us_f?ch=univision', 'epg', 'http://rndserv.xyz/images/univision.png', 10, 2, 4),
(195, 'Estrella TV', 'l1?ch=estrellatv', 'epg', 'http://rndserv.xyz/images/estrellatv.png', 10, 2, 4),
(196, 'Estrella News', 'l1?ch=estrellanews', 'epg', 'http://rndserv.xyz/images/estrellatv.png', 1, 2, 4),
(197, 'Estrella Games', 'l1?ch=estrellagames', 'epg', 'http://rndserv.xyz/images/estrellatv.png', 10, 2, 4),
(198, 'Azteca Uno', 'l1?ch=az_uno', 'epg', 'http://rndserv.xyz/images/azteca.png', 10, 2, 4),
(199, 'Azteca 7', 'l1?ch=az_7', 'epg', 'http://rndserv.xyz/images/azteca.png', 10, 2, 4),
(200, 'Azteca +', 'l1?ch=a_plus', 'epg', 'http://rndserv.xyz/images/azteca.png', 10, 2, 4),
(201, 'ADN 40', 'l1?ch=adn40', 'epg', 'http://rndserv.xyz/images/azteca.png', 10, 2, 4),
(202, '3ABN', 'l1?ch=3abn', 'epg', 'http://rndserv.xyz/images/3abn.png', 10, 2, 4),
(203, 'UEFA Europa League Liga', 'l1_f2?ch=match_tv', 'epg', 'http://rndserv.xyz/images/europa.png', 11, 10, 4),
(204, 'Formula 1', 'dm_f?ch=band', 'epg', 'http://rndserv.xyz/images/formula1.png', 11, 10, 4),
(205, 'MotoGP', 'l1?ch=servus_motogp', 'epg', 'http://rndserv.xyz/images/motogp.png', 11, 10, 4),
(206, 'Servus', 'l1?ch=servus_de_', 'epg', 'http://rndserv.xyz/images/motogp.png', 10, 9, 4),
(207, 'L Ã‰quipe', 'dm3?ch=lequipe', 'epg', 'http://rndserv.xyz/images/euroleague.png', 11, 1, 4),
(208, 'Tennis Channel', 'l1?ch=tennis_channel', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(209, 'Tennis Channel 2', 'l1?ch=tennis_2', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(210, 'Tennis TT', 'l1?ch=tennis_tt', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(211, 'Tennis Plus', 'l1?ch=tennis_plus_1', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(212, 'Tennis Plus 2', 'l1?ch=tennis_plus_2', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(213, 'Tennis Plus 3', 'l1?ch=tennis_plus_3', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(214, 'Tennis Plus 4', 'l1?ch=tennis_plus_4', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(215, 'Tennis Plus 5', 'l1?ch=tennis_plus_5', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(216, 'Tennis Plus 6', 'l1?ch=tennis_plus_6', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(217, 'Tennis Plus 7', 'l1?ch=tennis_plus_7', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(218, 'Tennis Plus 8', 'l1?ch=tennis_plus_8', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(219, 'Tennis Plus 9', 'l1?ch=tennis_plus_9', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(220, 'Tennis Plus 10', 'l1?ch=tennis_plus_10', 'epg', 'http://rndserv.xyz/images/atpwta.png', 3, 1, 4),
(221, 'Tennis INTL', 'l1?ch=tennis_int_en', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(222, 'Super Tennis', 'l1?ch=supertennis', 'epg', 'http://rndserv.xyz/images/atpwta.png', 11, 8, 4),
(223, 'World Padel Tour', 'padel?ch=es', 'epg', 'http://rndserv.xyz/images/padel.png', 11, 8, 4),
(224, 'World Padel Tour', 'padel?ch=en', 'epg', 'http://rndserv.xyz/images/padel.png', 11, 8, 4),
(225, 'NBA TV', 'us2?ch=nbatv', 'epg', 'http://rndserv.xyz/images/nba.png', 11, 8, 4),
(226, 'NFL Network', 'us?ch=nfl_network', 'epg', 'http://rndserv.xyz/images/nfl.png', 11, 8, 4),
(227, 'A3 Cine', 'https://live.atresmediainternacional.com/ATRESMEDIA/a3cine-1080.m3u8', 'atreseries_espana', 'https://upload.wikimedia.org/wikipedia/commons/e/e1/A3Cine.png', 14, 1, 1),
(228, 'Â¡Hola! Tv', 'https://live.atresmediainternacional.com/ATRESMEDIA/holatv-1080.m3u8', 'hola_tv', 'https://mma.prnewswire.com/media/1199606/HOLA_TV_Logo.jpg', 14, 1, 1),
(229, 'History [GEO LAT]', '//cdn.prepro.cvattv.com.ar/live/vod/HistoryHD/SA_Live_WebVTT_FTA/HistoryHD.m3u8', 'history_argentina', 'https://rndserv.xyz/images/history.png', 25, 4, 1),
(230, 'Star Channel', 'https://edge4-sl.cvattv.com.ar/live/c3eds/FOXHD/SA_SAGEMCOM/FOXHD.m3u8', 'star_channel_argentina', 'https://rndserv.xyz/images/starchannel.png', 14, 4, 1),
(231, 'BeIN Sports BR', 'https://viperplay.net/iframes/bein1br.html', 'a', 'https://imagenes.gatotv.com/logos/canales/claros/bein_sports_espana.png', 11, 1, 3),
(232, 'tv2x2 eventos (VP)', '', 'vp', 'https://www.unfe.org/wp-content/uploads/2019/04/SM-placeholder.png', 11, 1, 5),
(233, 'Cartoon Network [Lat 1]', 'l1?ch=cn_es_1', 'cartoon_network_argentina', 'https://images.ctfassets.net/ugxciox4nyye/12DDQ6rj1D1XJgbfFJlE7Y/25ac07e1aba869cb590ecece1418a9f4/35_CartoonNetworkHD.png?fm=webp&q=80', 6, 4, 4),
(234, 'Cartoon Network [Lat 2]', 'l1?ch=cn_es_2', 'cartoon_network_argentina', 'https://images.ctfassets.net/ugxciox4nyye/12DDQ6rj1D1XJgbfFJlE7Y/25ac07e1aba869cb590ecece1418a9f4/35_CartoonNetworkHD.png?fm=webp&q=80', 6, 4, 4),
(235, 'Warner Kids', 'CxsXg22188U', 'warner_tv_argentina', 'https://rndserv.xyz/images/wbkids.png', 6, 8, 1),
(236, 'Liverpool TV', 'l1?ch=liverpool', 'liverpool', 'https://rndserv.xyz/images/liverpool.png', 11, 10, 4),
(237, 'Barca TV [CAT]', 'fcb?ch=ca', 'barca', 'https://rndserv.xyz/images/fcb.png', 11, 1, 4),
(238, 'Barca TV [ESP]', 'fcb?ch=es', 'barca', 'https://rndserv.xyz/images/fcb.png', 11, 1, 4),
(239, 'Barca TV [ENG]', 'fcb?ch=en', 'barca', 'https://rndserv.xyz/images/fcb.png', 11, 1, 4),
(240, 'Sevilla TV', 'l1?ch=sfc', 'sevilla', 'https://rndserv.xyz/images/sfc.png', 11, 1, 4),
(241, 'Betis TV', 'l1?ch=betis', 'betis', 'https://rndserv.xyz/images/betis.png', 11, 1, 4),
(242, 'UD TV', 'https://ccdn.fractalmedia.es:9443/live015/stream/live/cudtv/index.m3u8', 'laspalmas', 'https://rndserv.xyz/images/udlp.png', 11, 1, 1),
(243, 'Galatasaray TV', 'l1?ch=galatasaray', 'galatasaray', 'https://rndserv.xyz/images/galatasaray.png', 11, 8, 4),
(244, 'Investigation Discovery', '//cdn.cvattv.com.ar/live/c7eds/ID/SA_SAGEMCOM/ID.m3u8', 'investigation_discovery_argentina', 'https://images.ctfassets.net/ugxciox4nyye/4On8gxcQzbBZU0e3km6KXH/4334e9a223f6e57e6f91cbbe96fd90a0/Canal_-_DiscoveryID.png?fm=webp&q=80', 25, 4, 1),
(245, 'Discovery Kids', '//cdn.cvattv.com.ar/live/c6eds/Discovery_Kids/SA_SAGEMCOM/Discovery_Kids.m3u8', 'discovery_kids_argentina', 'https://imagenes.gatotv.com/logos/canales/claros/discovery_kids.png', 6, 4, 1),
(246, 'NatGeo', '//cdn.prepro.cvattv.com.ar/live/vod/NatGeoHD/SA_Live_WebVTT_FTA/NatGeoHD.m3u8', 'natgeo', 'https://rndserv.xyz/images/natgeo.png', 25, 4, 1),
(247, 'History 2 [H2 GEO LAT]', '//cdn.cvattv.com.ar/live/c6eds/History_2/SA_SAGEMCOM/History_2.m3u8', 'history_2_argentina', 'https://rndserv.xyz/images/history.png', 25, 4, 1),
(248, 'Caillou [ES]', 'https://dhx-caillou-1-es.samsung.wurl.tv/playlist.m3u8', 'caillou', 'https://rndserv.xyz/images/caillou.png', 6, 1, 1),
(249, 'ESPN [US]', 'https://stream2.grandma.fit/fs2.m3u8', 'espn_internacional', 'https://images.ctfassets.net/ugxciox4nyye/3NCwVCRCmBEov5n6ou5hAA/c4270c0c6d2988c47c6350ca36175180/13_ESPN.png?fm=webp&q=80', 11, 8, 1),
(250, 'BeIN Xtra', 'https://siloh.pluto.tv/lilo/production/bein/1/master.m3u8', 'bein_sport_en_espanol', 'https://imagenes.gatotv.com/logos/canales/claros/bein_sports_espana.png', 11, 8, 1),
(251, 'BeIN Xtra Ã‘', 'https://siloh.pluto.tv/lilo/production/BEIN/ES/master.m3u8', 'bein_sport_en_espanol', 'https://imagenes.gatotv.com/logos/canales/claros/bein_sports_espana.png', 11, 1, 1),
(252, 'Golden', 'golden', 'golden_mexico', 'https://imagenes.gatotv.com/logos/canales/claros/golden.png', 25, 2, 6),
(253, 'eSport3 [GEO]', 'ccma?ch=e3', 'e3', 'https://rndserv.xyz/images/e3.png', 10, 1, 4),
(254, 'Los Simpsons HD', 'https://videostreaming.cloudserverlatam.com/CSTV/CSTV/playlist.m3u8', 'simpsons', 'https://rndserv.xyz/images/simpsons.png', 14, 8, 1),
(255, 'PelÃ­culas 24/7', 'https://videostreaming.cloudserverlatam.com:443/cloudservertv/cloudservertv/playlist.m3u8', 'pelis', 'pelis', 17, 1, 1),
(256, 'Telemax', 'https://live-edge01.telecentro.net.ar/live/smil:tlx.smil/playlist.m3u8', 'telemax', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Telemax.png/1200px-Telemax.png', 14, 4, 1),
(257, 'TyC Sports', 'https://dbdspnsi7bxk.cloudfront.net/out/v1/543996f2ca9149a5a984db778af87c7f/index_9.m3u8', 'tyc_sports', 'https://imagenes.gatotv.com/logos/canales/claros/tyc_sports.png', 11, 4, 1),
(258, 'FS1 [USA]', 'http://stream2.grandma.fit/fs1.m3u8', 'fs1', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/2015_Fox_Sports_1_logo.svg/2560px-2015_Fox_Sports_1_logo.svg.png', 11, 8, 1),
(259, 'Cartoon Network [Lat]', 'https://playout.cdn.cartoonnetwork.com.br/playout_02/playlist.m3u8', 'cartoon_network_argentina', 'https://images.ctfassets.net/ugxciox4nyye/12DDQ6rj1D1XJgbfFJlE7Y/25ac07e1aba869cb590ecece1418a9f4/35_CartoonNetworkHD.png?fm=webp&q=80', 6, 4, 1),
(260, 'Eurosport', 'http://213.151.233.20:8000/dna-6069-tv-pc/hls/4001v105.m3u8', 'eurosport_1_espana', 'https://imagenes.gatotv.com/logos/canales/claros/eurosport_1.png', 11, 1, 1),
(261, 'Sky Sports 24', 'https://skyanywhere3-i.akamaihd.net/hls/live/510697/interactive/playlist.m3u8', 'sky_sports_24', 'https://imagenes.gatotv.com/logos/canales/claros/sky_sports_24.png', 11, 10, 1),
(262, 'MEGA', 'http://154.62.74.29:1935/live/mega/chunklist_w1555082919.m3u8', 'mega', 'http://rndserv.xyz/images/mega.png', 10, 1, 1),
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
(279, 'Star+ Kun Madrid', 'https://viperplay.net/iframes/star25.html', 's', 's', 11, 4, 3),
(280, 'Chiringuito', 'PS8iwk62edo', 'mega', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.winudf.com%2Fv2%2Fimage%2FY29tLmlvbmljZnJhbWV3b3JrLmVsY2hpcmluZ3VpdG83MTgyMTBfaWNvbl8wX2Y1ODJiZTZm%2Ficon.png%3Fw%3D170%26fakeurl%3D1%26type%3D.png&f=1&nofb=1', 11, 1, 1),
(281, 'Afizzionados [PC]', 'ak?ch=afizzionados', 'afizzionados', 'https://imagenes.gatotv.com/logos/canales/claros/afizzionados.png', 11, 2, 7),
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
(301, 'B Cine', 'ak?ch=bcine', 'bcine', 'bcine', 10, 2, 7);

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
(7, 'Blim Photocall [PC]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `countries`
--

CREATE TABLE `countries` (
  `countryId` int(11) NOT NULL,
  `countryName` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `countryImg` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `countries`
--

INSERT INTO `countries` (`countryId`, `countryName`, `countryImg`) VALUES
(1, 'EspaÃ±a', 'es'),
(2, 'MÃ©xico', 'mx'),
(3, 'Andorra', 'ad'),
(4, 'Argentina', 'ar'),
(5, 'Honduras', 'hn'),
(6, 'Colombia', 'co'),
(7, 'Paraguay', 'py'),
(8, 'USA', 'us'),
(9, 'Alemania', 'de'),
(10, 'Reino Unido', 'gb'),
(11, 'Rusia', 'ru'),
(12, 'Francia', 'fr'),
(13, 'Prueba', 'hn');

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
(3, 'Telecadena', 'https://www.dailymotion.com/embed/video/k2cFg0RH8TpV0lxHRoW', 0),
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
(11, 'Prueba', 'https://api.sofascore.app/api/v1/unique-tournament/329/image', 1, 'http://iraffle.live/agenda/nba.php');

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
  `canalSolicitado` varchar(60) NOT NULL,
  `usuarioSolicitado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `pKey` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `photocall`
--

INSERT INTO `photocall` (`pId`, `pKey`) VALUES
(1, 'w9gr');

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
(63, 'FC Bayern München', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000G.svg', 'Allianz Arena', 6),
(64, 'RB Leipzig', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000017.svg', 'Red Bull Arena', 6),
(65, 'Borussia Dortmund', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000007.svg', 'SIGNAL IDUNA PARK', 6),
(66, 'VfL Wolfsburg', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000003.svg', 'Volkswagen Arena', 6),
(67, 'Eintracht Frankfurt', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000F.svg', 'Deutsche Bank Park', 6),
(68, 'Bayer 04 Leverkusen', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000B.svg', 'BayArena', 6),
(69, '1. FC Union Berlin', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000V.svg', 'An der Alten Försterei', 6),
(70, 'Borussia Mgladbach', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000004.svg', 'BORUSSIA-PARK', 6),
(71, 'VfB Stuttgart', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000D.svg', 'Mercedes-Benz Arena', 6),
(72, 'SC Freiburg', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000A.svg', 'Europa-Park Stadion', 6),
(73, 'TSG Hoffenheim', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000002.svg', 'PreZero Arena', 6),
(74, '1. FSV Mainz 05', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000006.svg', 'MEWA ARENA', 6),
(75, 'FC Augsburg', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000010.svg', 'WWK ARENA', 6),
(76, 'Hertha Berlin', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000Z.svg', 'Olympiastadion', 6),
(77, 'Arminia Bielefeld', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000015.svg', 'SchücoArena', 6),
(78, '1. FC Köln', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-000008.svg', 'RheinEnergieSTADION', 6),
(79, 'VfL Bochum 1848', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000S.svg', 'Vonovia Ruhrstadion', 6),
(80, 'SpVgg Greuther Fürth', 'https://www.bundesliga.com/assets/clublogo/DFL-CLU-00000W.svg', 'Sportpark Ronhof | Thomas Sommer', 6),
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
(101, 'ANGERS SCO', '', 'stade raymond-kopa', 10),
(102, 'AS MONACO', '', 'stade louis-ii', 10),
(103, 'AS SAINT-ÉTIENNE', '', 'stade geoffroy-guichard', 10),
(104, 'CLERMONT FOOT 63', '', 'stade gabriel-montpied', 10),
(105, 'ESTAC TROYES', '', 'stade de laube', 10),
(106, 'FC GIRONDINS DE BORDEAUX', '', 'matmut atlantique', 10),
(107, 'FC LORIENT', '', 'stade yves-allainmat', 10),
(108, 'FC METZ', '', 'stade saint-symphorien', 10),
(109, 'FC NANTES', '', 'stade de la beaujoire-louis fonteneau', 10),
(110, 'LOSC LILLE', '', 'stade pierre-mauroy', 10),
(111, 'MONTPELLIER HÉRAULT SC', '', 'stade de la mosson et du mondial 98', 10),
(112, 'OGC NICE', '', 'allianz riviera', 10),
(113, 'OLYMPIQUE DE MARSEILLE', '', 'orange vélodrome', 10),
(114, 'OLYMPIQUE LYONNAIS', '', 'groupama stadium', 10),
(115, 'PARIS SAINT-GERMAIN', '', 'parc des princes', 10),
(116, 'RC LENS', '', 'stade bollaert-delelis', 10),
(117, 'RC STRASBOURG ALSACE', '', 'stade de la meinau', 10),
(118, 'STADE BRESTOIS 29', '', 'stade francis-le blé', 10),
(119, 'STADE DE REIMS', '', 'stade auguste-delaune', 10),
(120, 'STADE RENNAIS FC', '', 'roazhon park', 10);

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
(1, 'Programar juegos de UCL', 0),
(2, 'Programar juegos de UEL', 0),
(6, 'Pruebade trabajo', 0),
(7, 'Pruebade trabajo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `fullname` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `fullname`, `fecha`, `type`) VALUES
(1, 'slowdmelendez360', 'admin', 'Alexander', '2022-07-30', 1),
(2, 'eduardo', 'perdomo', 'Eduardo', '2022-12-31', 1),
(3, 'David', 'Anton', 'David', '2022-06-28', 0),
(4, 'Lorenmo', 'Lorenmo', 'Lorenmo', '2022-05-27', 0),
(5, 'Joser', 'Romero', 'Jose', '2022-12-31', 0),

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
  ADD KEY `fk_liga` (`liga`),
  ADD KEY `fk_local` (`local`),
  ADD KEY `fk_visita` (`visita`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `channels`
--
ALTER TABLE `channels`
  MODIFY `channelId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT de la tabla `channeltype`
--
ALTER TABLE `channeltype`
  MODIFY `typeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `countries`
--
ALTER TABLE `countries`
  MODIFY `countryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `ligaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `trabajoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_liga` FOREIGN KEY (`liga`) REFERENCES `ligas` (`ligaId`),
  ADD CONSTRAINT `fk_local` FOREIGN KEY (`local`) REFERENCES `teams` (`teamId`),
  ADD CONSTRAINT `fk_visita` FOREIGN KEY (`visita`) REFERENCES `teams` (`teamId`);

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
