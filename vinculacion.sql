-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2018 a las 19:20:11
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vinculacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agricultura`
--

CREATE TABLE `agricultura` (
  `id` int(11) NOT NULL,
  `UnidadProduccion_id` int(11) NOT NULL,
  `UsoSuelo_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amenazas`
--

CREATE TABLE `amenazas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areainfluencia`
--

CREATE TABLE `areainfluencia` (
  `id` int(11) NOT NULL,
  `altitud` double DEFAULT NULL,
  `tipoTerrenoDescripcion` text,
  `detalleCalidadAire` text,
  `detalleRuido` text,
  `observacionesEcosistema` text,
  `lat` varchar(45) DEFAULT NULL,
  `long` varchar(45) DEFAULT NULL,
  `ManejoAmbiental_id` int(11) NOT NULL,
  `UsoSuelo_id` int(11) NOT NULL,
  `TipoSuelo_id` int(11) NOT NULL,
  `PermeabilidadSuelo_id` int(11) NOT NULL,
  `Clima_id` int(11) NOT NULL,
  `CondicionesDrenaje_id` int(11) NOT NULL,
  `Ecosistema_id` int(11) NOT NULL,
  `CaracteristicasEtnicas_id` int(11) NOT NULL,
  `nivelTraficoDescripcion` text,
  `recirculacionAireDescripcion` text,
  `organizacionSocialDescripcion` text,
  `tendenciaTierraDescripcion` text,
  `abastecimientoAguaDescripcion` text,
  `evacuacionAguaLluviaDescripcion` text,
  `consolidacionAreasInfluenciaDescripcion` text,
  `evacuacionAguasServidasDescripcion` text,
  `usoVegetacionDescripcion` text,
  `tradicionesDescripcion` text,
  `tipoFuentesDescripcion` text,
  `ruido` double DEFAULT NULL,
  `precipitaciones` double DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areainfluencia_has_lenguaje`
--

CREATE TABLE `areainfluencia_has_lenguaje` (
  `AreaInfluencia_id` int(11) NOT NULL,
  `Lenguaje_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areainfluencia_has_religion`
--

CREATE TABLE `areainfluencia_has_religion` (
  `AreaInfluencia_id` int(11) NOT NULL,
  `Religion_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areainfluencia_has_tipovegetal`
--

CREATE TABLE `areainfluencia_has_tipovegetal` (
  `AreaInfluencia_id` int(11) NOT NULL,
  `TipoVegetal_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociacion`
--

CREATE TABLE `asociacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `personaEncargada` varchar(200) DEFAULT NULL,
  `TipoAsociacion_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biodigestor`
--

CREATE TABLE `biodigestor` (
  `id` int(11) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `tamañoPropiedad` double DEFAULT NULL,
  `imagen` text,
  `video` text,
  `anchoBio` decimal(10,4) DEFAULT NULL,
  `largoBio` decimal(10,4) DEFAULT NULL,
  `profundBio` decimal(10,4) DEFAULT NULL,
  `anchoCaja` decimal(10,4) DEFAULT NULL,
  `largoCaja` decimal(10,4) DEFAULT NULL,
  `profundCaja` decimal(10,4) DEFAULT NULL,
  `temperatura` double DEFAULT NULL,
  `UnidadProduccion_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicasetnicas`
--

CREATE TABLE `caracteristicasetnicas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaproyecto`
--

CREATE TABLE `categoriaproyecto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `Pais_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clima`
--

CREATE TABLE `clima` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `mnsm` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicionesdrenaje`
--

CREATE TABLE `condicionesdrenaje` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desecho`
--

CREATE TABLE `desecho` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `peso` decimal(10,4) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `Biodigestor_id` int(11) NOT NULL,
  `TipoDesecho_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desechot`
--

CREATE TABLE `desechot` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `peso` decimal(10,4) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `Taller_id` int(11) NOT NULL,
  `TipoDesechoT_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destino`
--

CREATE TABLE `destino` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecosistema`
--

CREATE TABLE `ecosistema` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Femenino', '2018-03-18 19:19:37', '2018-03-18 19:19:37', NULL),
(2, 'Masculino', '2018-03-18 19:19:37', '2018-03-18 19:19:37', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lenguaje`
--

CREATE TABLE `lenguaje` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manejoambiental`
--

CREATE TABLE `manejoambiental` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text,
  `TipoProyecto_id` int(11) NOT NULL,
  `CategoriaProyecto_id` int(11) NOT NULL,
  `UnidadProduccion_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='									';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origeningresos`
--

CREATE TABLE `origeningresos` (
  `id` int(11) NOT NULL,
  `UnidadProduccion_id` int(11) NOT NULL,
  `Propietario_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `nacionalidad` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paisaje`
--

CREATE TABLE `paisaje` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text,
  `AreaInfluencia_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peligros`
--

CREATE TABLE `peligros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permeabilidadsuelo`
--

CREATE TABLE `permeabilidadsuelo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandegestionderiesgos`
--

CREATE TABLE `plandegestionderiesgos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `TipoAbono_id` int(11) NOT NULL,
  `TipoControlPlaga_id` int(11) NOT NULL,
  `TipoCultivos_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandegestionderiesgos_has_agricultura`
--

CREATE TABLE `plandegestionderiesgos_has_agricultura` (
  `PlanDeGestionDeRiesgos_id` int(11) NOT NULL,
  `Agricultura_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandegestionderiesgos_has_amenazas`
--

CREATE TABLE `plandegestionderiesgos_has_amenazas` (
  `PlanDeGestionDeRiesgos_id` int(11) NOT NULL,
  `Amenazas_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandegestionderiesgos_has_origeningresos`
--

CREATE TABLE `plandegestionderiesgos_has_origeningresos` (
  `PlanDeGestionDeRiesgos_id` int(11) NOT NULL,
  `OrigenIngresos_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandegestionderiesgos_has_tipoanimales`
--

CREATE TABLE `plandegestionderiesgos_has_tipoanimales` (
  `PlanDeGestionDeRiesgos_id` int(11) NOT NULL,
  `TipoAnimales_id` int(11) NOT NULL,
  `cantidad_animales` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plandegestionderiesgos_has_vulnerabilidades`
--

CREATE TABLE `plandegestionderiesgos_has_vulnerabilidades` (
  `PlanDeGestionDeRiesgos_id` int(11) NOT NULL,
  `Vulnerabilidades_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precuaria`
--

CREATE TABLE `precuaria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `TipoProducto_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `id` int(11) NOT NULL,
  `ci` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `Genero_id` int(11) NOT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `observaciones` text,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `religion`
--

CREATE TABLE `religion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller`
--

CREATE TABLE `taller` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text,
  `riesgo` text,
  `imagen` text,
  `video` text,
  `UnidadProduccion_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoabono`
--

CREATE TABLE `tipoabono` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoanimales`
--

CREATE TABLE `tipoanimales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `Precuaria_id` int(11) NOT NULL,
  `TipoUnidad_id` int(11) NOT NULL,
  `TipoProduccion_id` int(11) NOT NULL,
  `Destino_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoasociacion`
--

CREATE TABLE `tipoasociacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocontrolplaga`
--

CREATE TABLE `tipocontrolplaga` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocultivos`
--

CREATE TABLE `tipocultivos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodesecho`
--

CREATE TABLE `tipodesecho` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodesechot`
--

CREATE TABLE `tipodesechot` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproduccion`
--

CREATE TABLE `tipoproduccion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

CREATE TABLE `tipoproducto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproyecto`
--

CREATE TABLE `tipoproyecto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='			';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposuelo`
--

CREATE TABLE `tiposuelo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipounidad`
--

CREATE TABLE `tipounidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovegetal`
--

CREATE TABLE `tipovegetal` (
  `id` int(11) NOT NULL,
  `nombre_comun` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `nombre_cientifico` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellido` varchar(200) DEFAULT NULL,
  `fechaDeNacimiento` date DEFAULT NULL,
  `Genero_id` int(11) NOT NULL,
  `Pais_id` int(11) NOT NULL,
  `Ciudad_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `instruccionFormal` varchar(200) DEFAULT NULL,
  `horasTrabajo` int(11) DEFAULT NULL,
  `salario` double DEFAULT NULL,
  `PlanDeGestionDeRiesgos_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadproduccion`
--

CREATE TABLE `unidadproduccion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL,
  `observaciones` text,
  `Asociacion_id` int(11) NOT NULL,
  `Producto_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadproduccion_has_propietario`
--

CREATE TABLE `unidadproduccion_has_propietario` (
  `UnidadProduccion_id` int(11) NOT NULL,
  `Propietario_ci` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usosuelo`
--

CREATE TABLE `usosuelo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vulnerabilidades`
--

CREATE TABLE `vulnerabilidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agricultura`
--
ALTER TABLE `agricultura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Agricultura_UnidadProduccion1_idx` (`UnidadProduccion_id`),
  ADD KEY `fk_Agricultura_UsoSuelo1_idx` (`UsoSuelo_id`);

--
-- Indices de la tabla `amenazas`
--
ALTER TABLE `amenazas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `areainfluencia`
--
ALTER TABLE `areainfluencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_AreaInfluencia_ManejoAmbiental1_idx` (`ManejoAmbiental_id`),
  ADD KEY `fk_AreaInfluencia_TipoTerreno1_idx` (`UsoSuelo_id`),
  ADD KEY `fk_AreaInfluencia_TipoSuelo1_idx` (`TipoSuelo_id`),
  ADD KEY `fk_AreaInfluencia_PermeabilidadSuelo1_idx` (`PermeabilidadSuelo_id`),
  ADD KEY `fk_AreaInfluencia_Clima1_idx` (`Clima_id`),
  ADD KEY `fk_AreaInfluencia_CondicionesDrenaje1_idx` (`CondicionesDrenaje_id`),
  ADD KEY `fk_AreaInfluencia_Ecosistema1_idx` (`Ecosistema_id`),
  ADD KEY `fk_AreaInfluencia_CaracteristicasEtnicas1_idx` (`CaracteristicasEtnicas_id`);

--
-- Indices de la tabla `areainfluencia_has_lenguaje`
--
ALTER TABLE `areainfluencia_has_lenguaje`
  ADD PRIMARY KEY (`AreaInfluencia_id`,`Lenguaje_id`),
  ADD KEY `fk_AreaInfluencia_has_Lenguaje_Lenguaje1_idx` (`Lenguaje_id`),
  ADD KEY `fk_AreaInfluencia_has_Lenguaje_AreaInfluencia1_idx` (`AreaInfluencia_id`);

--
-- Indices de la tabla `areainfluencia_has_religion`
--
ALTER TABLE `areainfluencia_has_religion`
  ADD PRIMARY KEY (`AreaInfluencia_id`,`Religion_id`),
  ADD KEY `fk_AreaInfluencia_has_Religion_Religion1_idx` (`Religion_id`),
  ADD KEY `fk_AreaInfluencia_has_Religion_AreaInfluencia1_idx` (`AreaInfluencia_id`);

--
-- Indices de la tabla `areainfluencia_has_tipovegetal`
--
ALTER TABLE `areainfluencia_has_tipovegetal`
  ADD PRIMARY KEY (`AreaInfluencia_id`,`TipoVegetal_id`),
  ADD KEY `fk_AreaInfluencia_has_TipoVegetal_TipoVegetal1_idx` (`TipoVegetal_id`),
  ADD KEY `fk_AreaInfluencia_has_TipoVegetal_AreaInfluencia1_idx` (`AreaInfluencia_id`);

--
-- Indices de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Asociacion_TipoAsociacion1_idx` (`TipoAsociacion_id`);

--
-- Indices de la tabla `biodigestor`
--
ALTER TABLE `biodigestor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Biodigestor_UnidadProduccion1_idx` (`UnidadProduccion_id`);

--
-- Indices de la tabla `caracteristicasetnicas`
--
ALTER TABLE `caracteristicasetnicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoriaproyecto`
--
ALTER TABLE `categoriaproyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Ciudad_Pais1_idx` (`Pais_id`);

--
-- Indices de la tabla `clima`
--
ALTER TABLE `clima`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `condicionesdrenaje`
--
ALTER TABLE `condicionesdrenaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `desecho`
--
ALTER TABLE `desecho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Desecho_Biodigestor1_idx` (`Biodigestor_id`),
  ADD KEY `fk_Desecho_TipoDesecho1_idx` (`TipoDesecho_id`);

--
-- Indices de la tabla `desechot`
--
ALTER TABLE `desechot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_DesechoT_Taller1_idx` (`Taller_id`),
  ADD KEY `fk_DesechoT_TipoDesechoT1_idx` (`TipoDesechoT_id`);

--
-- Indices de la tabla `destino`
--
ALTER TABLE `destino`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ecosistema`
--
ALTER TABLE `ecosistema`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lenguaje`
--
ALTER TABLE `lenguaje`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `manejoambiental`
--
ALTER TABLE `manejoambiental`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ManejoAmbiental_TipoProyecto1_idx` (`TipoProyecto_id`),
  ADD KEY `fk_ManejoAmbiental_CategoriaProyecto1_idx` (`CategoriaProyecto_id`),
  ADD KEY `fk_ManejoAmbiental_UnidadProduccion1_idx` (`UnidadProduccion_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `origeningresos`
--
ALTER TABLE `origeningresos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_OrigenIngresos_UnidadProduccion1_idx` (`UnidadProduccion_id`),
  ADD KEY `fk_OrigenIngresos_Propietario1_idx` (`Propietario_id`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paisaje`
--
ALTER TABLE `paisaje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Paisaje_AreaInfluencia1_idx` (`AreaInfluencia_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `peligros`
--
ALTER TABLE `peligros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permeabilidadsuelo`
--
ALTER TABLE `permeabilidadsuelo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plandegestionderiesgos`
--
ALTER TABLE `plandegestionderiesgos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_TipoAbono1_idx` (`TipoAbono_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_TipoControlPlaga1_idx` (`TipoControlPlaga_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_TipoCultivos1_idx` (`TipoCultivos_id`);

--
-- Indices de la tabla `plandegestionderiesgos_has_agricultura`
--
ALTER TABLE `plandegestionderiesgos_has_agricultura`
  ADD PRIMARY KEY (`PlanDeGestionDeRiesgos_id`,`Agricultura_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_has_Agricultura_Agricultura1_idx` (`Agricultura_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_has_Agricultura_PlanDeGestionDeRi_idx` (`PlanDeGestionDeRiesgos_id`);

--
-- Indices de la tabla `plandegestionderiesgos_has_amenazas`
--
ALTER TABLE `plandegestionderiesgos_has_amenazas`
  ADD PRIMARY KEY (`PlanDeGestionDeRiesgos_id`,`Amenazas_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_has_Amenazas_Amenazas1_idx` (`Amenazas_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_has_Amenazas_PlanDeGestionDeRiesg_idx` (`PlanDeGestionDeRiesgos_id`);

--
-- Indices de la tabla `plandegestionderiesgos_has_origeningresos`
--
ALTER TABLE `plandegestionderiesgos_has_origeningresos`
  ADD PRIMARY KEY (`PlanDeGestionDeRiesgos_id`,`OrigenIngresos_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_has_OrigenIngresos_OrigenIngresos_idx` (`OrigenIngresos_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_has_OrigenIngresos_PlanDeGestionD_idx` (`PlanDeGestionDeRiesgos_id`);

--
-- Indices de la tabla `plandegestionderiesgos_has_tipoanimales`
--
ALTER TABLE `plandegestionderiesgos_has_tipoanimales`
  ADD PRIMARY KEY (`PlanDeGestionDeRiesgos_id`,`TipoAnimales_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_has_TipoAnimales_TipoAnimales1_idx` (`TipoAnimales_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_has_TipoAnimales_PlanDeGestionDeR_idx` (`PlanDeGestionDeRiesgos_id`);

--
-- Indices de la tabla `plandegestionderiesgos_has_vulnerabilidades`
--
ALTER TABLE `plandegestionderiesgos_has_vulnerabilidades`
  ADD PRIMARY KEY (`PlanDeGestionDeRiesgos_id`,`Vulnerabilidades_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_has_Vulnerabilidades_Vulnerabilid_idx` (`Vulnerabilidades_id`),
  ADD KEY `fk_PlanDeGestionDeRiesgos_has_Vulnerabilidades_PlanDeGestio_idx` (`PlanDeGestionDeRiesgos_id`);

--
-- Indices de la tabla `precuaria`
--
ALTER TABLE `precuaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Producto_TipoProducto1_idx` (`TipoProducto_id`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci_UNIQUE` (`ci`),
  ADD KEY `fk_Propietario_Genero1_idx` (`Genero_id`);

--
-- Indices de la tabla `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `taller`
--
ALTER TABLE `taller`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Taller_UnidadProduccion1_idx` (`UnidadProduccion_id`);

--
-- Indices de la tabla `tipoabono`
--
ALTER TABLE `tipoabono`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoanimales`
--
ALTER TABLE `tipoanimales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_TipoAnimales_TipoProduccion1_idx` (`TipoProduccion_id`),
  ADD KEY `fk_TipoAnimales_TipoUnidad1_idx` (`TipoUnidad_id`),
  ADD KEY `fk_TipoAnimales_Destino1_idx` (`Destino_id`),
  ADD KEY `fk_TipoAnimales_Precuaria1_idx` (`Precuaria_id`);

--
-- Indices de la tabla `tipoasociacion`
--
ALTER TABLE `tipoasociacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipocontrolplaga`
--
ALTER TABLE `tipocontrolplaga`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipocultivos`
--
ALTER TABLE `tipocultivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodesecho`
--
ALTER TABLE `tipodesecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodesechot`
--
ALTER TABLE `tipodesechot`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoproduccion`
--
ALTER TABLE `tipoproduccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoproyecto`
--
ALTER TABLE `tipoproyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiposuelo`
--
ALTER TABLE `tiposuelo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipounidad`
--
ALTER TABLE `tipounidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipovegetal`
--
ALTER TABLE `tipovegetal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Trabajadores_PlanDeGestionDeRiesgos1_idx` (`PlanDeGestionDeRiesgos_id`),
  ADD KEY `fk_Trabajadores_Genero1_idx` (`Genero_id`),
  ADD KEY `fk_Trabajadores_Pais1_idx` (`Pais_id`),
  ADD KEY `fk_Trabajadores_Ciudad1_idx` (`Ciudad_id`);

--
-- Indices de la tabla `unidadproduccion`
--
ALTER TABLE `unidadproduccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_UnidadProduccion_Asociacion1_idx` (`Asociacion_id`),
  ADD KEY `fk_UnidadProduccion_Producto1_idx` (`Producto_id`);

--
-- Indices de la tabla `unidadproduccion_has_propietario`
--
ALTER TABLE `unidadproduccion_has_propietario`
  ADD PRIMARY KEY (`UnidadProduccion_id`),
  ADD KEY `fk_UnidadProduccion_has_Propietario_Propietario1_idx` (`Propietario_ci`),
  ADD KEY `fk_UnidadProduccion_has_Propietario_UnidadProduccion1_idx` (`UnidadProduccion_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usosuelo`
--
ALTER TABLE `usosuelo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vulnerabilidades`
--
ALTER TABLE `vulnerabilidades`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agricultura`
--
ALTER TABLE `agricultura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `amenazas`
--
ALTER TABLE `amenazas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `areainfluencia`
--
ALTER TABLE `areainfluencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `biodigestor`
--
ALTER TABLE `biodigestor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `caracteristicasetnicas`
--
ALTER TABLE `caracteristicasetnicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoriaproyecto`
--
ALTER TABLE `categoriaproyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `clima`
--
ALTER TABLE `clima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `condicionesdrenaje`
--
ALTER TABLE `condicionesdrenaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `desecho`
--
ALTER TABLE `desecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `desechot`
--
ALTER TABLE `desechot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `destino`
--
ALTER TABLE `destino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ecosistema`
--
ALTER TABLE `ecosistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `lenguaje`
--
ALTER TABLE `lenguaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `manejoambiental`
--
ALTER TABLE `manejoambiental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `origeningresos`
--
ALTER TABLE `origeningresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paisaje`
--
ALTER TABLE `paisaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `peligros`
--
ALTER TABLE `peligros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permeabilidadsuelo`
--
ALTER TABLE `permeabilidadsuelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `plandegestionderiesgos`
--
ALTER TABLE `plandegestionderiesgos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `precuaria`
--
ALTER TABLE `precuaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `religion`
--
ALTER TABLE `religion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `taller`
--
ALTER TABLE `taller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoabono`
--
ALTER TABLE `tipoabono`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoanimales`
--
ALTER TABLE `tipoanimales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoasociacion`
--
ALTER TABLE `tipoasociacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipocontrolplaga`
--
ALTER TABLE `tipocontrolplaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipocultivos`
--
ALTER TABLE `tipocultivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipodesecho`
--
ALTER TABLE `tipodesecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipodesechot`
--
ALTER TABLE `tipodesechot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoproduccion`
--
ALTER TABLE `tipoproduccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoproyecto`
--
ALTER TABLE `tipoproyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tiposuelo`
--
ALTER TABLE `tiposuelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipounidad`
--
ALTER TABLE `tipounidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipovegetal`
--
ALTER TABLE `tipovegetal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `unidadproduccion`
--
ALTER TABLE `unidadproduccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usosuelo`
--
ALTER TABLE `usosuelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vulnerabilidades`
--
ALTER TABLE `vulnerabilidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agricultura`
--
ALTER TABLE `agricultura`
  ADD CONSTRAINT `fk_Agricultura_UnidadProduccion1` FOREIGN KEY (`UnidadProduccion_id`) REFERENCES `unidadproduccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Agricultura_UsoSuelo1` FOREIGN KEY (`UsoSuelo_id`) REFERENCES `usosuelo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `areainfluencia`
--
ALTER TABLE `areainfluencia`
  ADD CONSTRAINT `fk_AreaInfluencia_CaracteristicasEtnicas1` FOREIGN KEY (`CaracteristicasEtnicas_id`) REFERENCES `caracteristicasetnicas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AreaInfluencia_Clima1` FOREIGN KEY (`Clima_id`) REFERENCES `clima` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AreaInfluencia_CondicionesDrenaje1` FOREIGN KEY (`CondicionesDrenaje_id`) REFERENCES `condicionesdrenaje` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AreaInfluencia_Ecosistema1` FOREIGN KEY (`Ecosistema_id`) REFERENCES `ecosistema` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AreaInfluencia_ManejoAmbiental1` FOREIGN KEY (`ManejoAmbiental_id`) REFERENCES `manejoambiental` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AreaInfluencia_PermeabilidadSuelo1` FOREIGN KEY (`PermeabilidadSuelo_id`) REFERENCES `permeabilidadsuelo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AreaInfluencia_TipoSuelo1` FOREIGN KEY (`TipoSuelo_id`) REFERENCES `tiposuelo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AreaInfluencia_TipoTerreno1` FOREIGN KEY (`UsoSuelo_id`) REFERENCES `usosuelo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `areainfluencia_has_lenguaje`
--
ALTER TABLE `areainfluencia_has_lenguaje`
  ADD CONSTRAINT `fk_AreaInfluencia_has_Lenguaje_AreaInfluencia1` FOREIGN KEY (`AreaInfluencia_id`) REFERENCES `areainfluencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AreaInfluencia_has_Lenguaje_Lenguaje1` FOREIGN KEY (`Lenguaje_id`) REFERENCES `lenguaje` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `areainfluencia_has_religion`
--
ALTER TABLE `areainfluencia_has_religion`
  ADD CONSTRAINT `fk_AreaInfluencia_has_Religion_AreaInfluencia1` FOREIGN KEY (`AreaInfluencia_id`) REFERENCES `areainfluencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AreaInfluencia_has_Religion_Religion1` FOREIGN KEY (`Religion_id`) REFERENCES `religion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `areainfluencia_has_tipovegetal`
--
ALTER TABLE `areainfluencia_has_tipovegetal`
  ADD CONSTRAINT `fk_AreaInfluencia_has_TipoVegetal_AreaInfluencia1` FOREIGN KEY (`AreaInfluencia_id`) REFERENCES `areainfluencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AreaInfluencia_has_TipoVegetal_TipoVegetal1` FOREIGN KEY (`TipoVegetal_id`) REFERENCES `tipovegetal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `asociacion`
--
ALTER TABLE `asociacion`
  ADD CONSTRAINT `fk_Asociacion_TipoAsociacion1` FOREIGN KEY (`TipoAsociacion_id`) REFERENCES `tipoasociacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `biodigestor`
--
ALTER TABLE `biodigestor`
  ADD CONSTRAINT `fk_Biodigestor_UnidadProduccion1` FOREIGN KEY (`UnidadProduccion_id`) REFERENCES `unidadproduccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_Ciudad_Pais1` FOREIGN KEY (`Pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `desecho`
--
ALTER TABLE `desecho`
  ADD CONSTRAINT `fk_Desecho_Biodigestor1` FOREIGN KEY (`Biodigestor_id`) REFERENCES `biodigestor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Desecho_TipoDesecho1` FOREIGN KEY (`TipoDesecho_id`) REFERENCES `tipodesecho` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `desechot`
--
ALTER TABLE `desechot`
  ADD CONSTRAINT `fk_DesechoT_Taller1` FOREIGN KEY (`Taller_id`) REFERENCES `taller` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DesechoT_TipoDesechoT1` FOREIGN KEY (`TipoDesechoT_id`) REFERENCES `tipodesechot` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `manejoambiental`
--
ALTER TABLE `manejoambiental`
  ADD CONSTRAINT `fk_ManejoAmbiental_CategoriaProyecto1` FOREIGN KEY (`CategoriaProyecto_id`) REFERENCES `categoriaproyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ManejoAmbiental_TipoProyecto1` FOREIGN KEY (`TipoProyecto_id`) REFERENCES `tipoproyecto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ManejoAmbiental_UnidadProduccion1` FOREIGN KEY (`UnidadProduccion_id`) REFERENCES `unidadproduccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `origeningresos`
--
ALTER TABLE `origeningresos`
  ADD CONSTRAINT `fk_OrigenIngresos_Propietario1` FOREIGN KEY (`Propietario_id`) REFERENCES `propietario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_OrigenIngresos_UnidadProduccion1` FOREIGN KEY (`UnidadProduccion_id`) REFERENCES `unidadproduccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paisaje`
--
ALTER TABLE `paisaje`
  ADD CONSTRAINT `fk_Paisaje_AreaInfluencia1` FOREIGN KEY (`AreaInfluencia_id`) REFERENCES `areainfluencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plandegestionderiesgos`
--
ALTER TABLE `plandegestionderiesgos`
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_TipoAbono1` FOREIGN KEY (`TipoAbono_id`) REFERENCES `tipoabono` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_TipoControlPlaga1` FOREIGN KEY (`TipoControlPlaga_id`) REFERENCES `tipocontrolplaga` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_TipoCultivos1` FOREIGN KEY (`TipoCultivos_id`) REFERENCES `tipocultivos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plandegestionderiesgos_has_agricultura`
--
ALTER TABLE `plandegestionderiesgos_has_agricultura`
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_has_Agricultura_Agricultura1` FOREIGN KEY (`Agricultura_id`) REFERENCES `agricultura` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_has_Agricultura_PlanDeGestionDeRies1` FOREIGN KEY (`PlanDeGestionDeRiesgos_id`) REFERENCES `plandegestionderiesgos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plandegestionderiesgos_has_amenazas`
--
ALTER TABLE `plandegestionderiesgos_has_amenazas`
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_has_Amenazas_Amenazas1` FOREIGN KEY (`Amenazas_id`) REFERENCES `amenazas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_has_Amenazas_PlanDeGestionDeRiesgos1` FOREIGN KEY (`PlanDeGestionDeRiesgos_id`) REFERENCES `plandegestionderiesgos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plandegestionderiesgos_has_origeningresos`
--
ALTER TABLE `plandegestionderiesgos_has_origeningresos`
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_has_OrigenIngresos_OrigenIngresos1` FOREIGN KEY (`OrigenIngresos_id`) REFERENCES `origeningresos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_has_OrigenIngresos_PlanDeGestionDeR1` FOREIGN KEY (`PlanDeGestionDeRiesgos_id`) REFERENCES `plandegestionderiesgos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plandegestionderiesgos_has_tipoanimales`
--
ALTER TABLE `plandegestionderiesgos_has_tipoanimales`
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_has_TipoAnimales_PlanDeGestionDeRie1` FOREIGN KEY (`PlanDeGestionDeRiesgos_id`) REFERENCES `plandegestionderiesgos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_has_TipoAnimales_TipoAnimales1` FOREIGN KEY (`TipoAnimales_id`) REFERENCES `tipoanimales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `plandegestionderiesgos_has_vulnerabilidades`
--
ALTER TABLE `plandegestionderiesgos_has_vulnerabilidades`
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_has_Vulnerabilidades_PlanDeGestionD1` FOREIGN KEY (`PlanDeGestionDeRiesgos_id`) REFERENCES `plandegestionderiesgos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PlanDeGestionDeRiesgos_has_Vulnerabilidades_Vulnerabilidad1` FOREIGN KEY (`Vulnerabilidades_id`) REFERENCES `vulnerabilidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_Producto_TipoProducto1` FOREIGN KEY (`TipoProducto_id`) REFERENCES `tipoproducto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD CONSTRAINT `fk_Propietario_Genero1` FOREIGN KEY (`Genero_id`) REFERENCES `genero` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `taller`
--
ALTER TABLE `taller`
  ADD CONSTRAINT `fk_Taller_UnidadProduccion1` FOREIGN KEY (`UnidadProduccion_id`) REFERENCES `unidadproduccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipoanimales`
--
ALTER TABLE `tipoanimales`
  ADD CONSTRAINT `fk_TipoAnimales_Destino1` FOREIGN KEY (`Destino_id`) REFERENCES `destino` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TipoAnimales_Precuaria1` FOREIGN KEY (`Precuaria_id`) REFERENCES `precuaria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TipoAnimales_TipoProduccion1` FOREIGN KEY (`TipoProduccion_id`) REFERENCES `tipoproduccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TipoAnimales_TipoUnidad1` FOREIGN KEY (`TipoUnidad_id`) REFERENCES `tipounidad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD CONSTRAINT `fk_Trabajadores_Ciudad1` FOREIGN KEY (`Ciudad_id`) REFERENCES `ciudad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Trabajadores_Genero1` FOREIGN KEY (`Genero_id`) REFERENCES `genero` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Trabajadores_Pais1` FOREIGN KEY (`Pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Trabajadores_PlanDeGestionDeRiesgos1` FOREIGN KEY (`PlanDeGestionDeRiesgos_id`) REFERENCES `plandegestionderiesgos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `unidadproduccion`
--
ALTER TABLE `unidadproduccion`
  ADD CONSTRAINT `fk_UnidadProduccion_Asociacion1` FOREIGN KEY (`Asociacion_id`) REFERENCES `asociacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_UnidadProduccion_Producto1` FOREIGN KEY (`Producto_id`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `unidadproduccion_has_propietario`
--
ALTER TABLE `unidadproduccion_has_propietario`
  ADD CONSTRAINT `fk_UnidadProduccion_has_Propietario_Propietario1` FOREIGN KEY (`Propietario_ci`) REFERENCES `propietario` (`ci`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_UnidadProduccion_has_Propietario_UnidadProduccion1` FOREIGN KEY (`UnidadProduccion_id`) REFERENCES `unidadproduccion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
