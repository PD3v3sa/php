---
# Metainformació del document
title: PHP 
titlepage: true
subtitle: Clases de Recuperación
author:
- Pepe Devesa
lang: va

# portada
titlepage-rule-height: 2
titlepage-rule-color: EE0000
titlepage-text-color: EE0000
titlepage-background: ../img/logo.png

# configuració de l'índex
toc: true
toc-own-page: true
toc-title: Continguts
toc-depth: 2

# capçalera i peu
header-left: \thetitle
header-right: Curs 2024-2025
footer-left: IES Salvador Gadea
footer-right: \thepage/\pageref{LastPage}

# Les figures que apareguen on les definim i centrades
float-placement-figure: H
caption-justification: centering
# No volem numerar les linies de codi
listings-disable-line-numbers: true

# Configuracions dels paquets de latex
header-includes:
# imatges i subfigures
- \usepackage{graphicx}
- \usepackage{subfigure}
- \usepackage{lastpage}

# caixes d'avisos
- \usepackage{awesomebox}
- \usepackage{lastpage}
# text en columnes
- \usepackage{multicol}
- \setlength{\columnseprule}{1pt}
- \setlength{\columnsep}{1em}

page-background: ../img/agua.png
page-background-opacity: 0.5


# definició de les caixes d'avis
pandoc-latex-environment:
    noteblock: [note]
    tipblock: [tip]
    warningblock: [warning]
    cautionblock: [caution]
    importantblock: [important]


...
# CRUD Empleados
Vamos a generar un mantenimiento para la gestión de empleados de una empresa. Para ello se os adjunto el script con la única tabla, **empleados**.
```mysql
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2024 at 12:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_empleados`
--

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE `empleados` (
  `codigo` varchar(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `lugar_nacimiento` varchar(30) NOT NULL,
  `fecha_nacimiento` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `puesto` varchar(15) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`codigo`, `nombres`, `lugar_nacimiento`, `fecha_nacimiento`, `direccion`, `telefono`, `puesto`, `estado`) VALUES
('1250', 'Juan Campos', 'Santa Ana, El Salvador', '15-06-1991', '', '70252525', 'Gerente', 1),
('12509', 'Andres Perez', 'SM', '06-06-1980', 'SM', '12345789', 'Gerente', 3),
('15200', 'Marcos Amaya', 'Santa Salvador', '06-06-2017', 'San Salvador', '12345678', 'Vendedor', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```
## Mostrar los datos de los empleados

Para mostrar los datos de los empleados crear un archivo llamado **“index.php“**, el cual se encargará de listar los registros de nuestra tabla y mostrar los usuarios.
\begin{figure}
\centering
\subfigure[index.php]{\includegraphics[width=1\linewidth]{./img/Empleados_listar.png}}
\end{figure}

* Hay un campo para filtrar por el estado.

## Editar los datos de los empleados

Para editar los datos de los empleados, crear un archivo llamado **“edit.php”**
\begin{figure}
\centering
\subfigure[edit.php]{\includegraphics[width=0.5\linewidth]{./img/Empleados_edit.png}}
\end{figure}

## Crear empleados (opción agregar)
Para la creación de los empleados,crear un archivo llamado **“add.php”**
\begin{figure}
\centering
\subfigure[agregar.php]{\includegraphics[width=0.5\linewidth]{./img/Empleados_agregar.png}}
\end{figure}

## Eliminar los datos de los empleados

Para eliminar los datos de los empleados colocar el código respectivo para la eliminación de datos, en el archivo **“index.php“**

## Viendo detalle datos de los empleados

Para visualizar la informacion detallada de cada empleado hemos creado el archivo **“profile.php”**
\begin{figure}
\centering
\subfigure[profile.php]{\includegraphics[width=0.5\linewidth]{./img/Empleados_perfil.png}}
\end{figure}

# CRUD Burger

Se os adjunto un script con las dos tablas y el fichero con las imagenes.

Teneis que hacer una presentación como la del ejemplo:

## Listar
\begin{figure}
\centering
\subfigure[Listar]{\includegraphics[width=0.5\linewidth]{./img/Burger_listar.png}}
\end{figure}
## Agregar
\begin{figure}
\centering
\subfigure[Agregar]{\includegraphics[width=0.5\linewidth]{./img/Burger_agregar.png}}
\end{figure}
## Ver
\begin{figure}
\centering
\subfigure[ver]{\includegraphics[width=0.5\linewidth]{./img/Burger_ver.png}}
\end{figure}
## Modificar
\begin{figure}
\centering
\subfigure[Editar]{\includegraphics[width=0.5\linewidth]{./img/Burger_editar.png}}
\end{figure}