---
# Metainformació del document
title: PHP 
titlepage: true
subtitle: Enunciado Evaluación Extraordianaria
author:
- Pepe
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
header-right: Curs 2023-2024
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


:::important
    Para hacer media en la prueba hay que sacar una nota mayor o igual a 4 en los dos ejercicios.
:::
# curriculum.php
Crea un programa llamado `curriculum.php` donde, utilizando variables variables, muestres parte de tu currículum (por ejemplo, un párrafo con tus estudios y otro con los idiomas que hablas), como podéis ver en el ejemplo.
\begin{figure}
\centering
\subfigure[curriculum]{\includegraphics[width=0.5\linewidth]{./img/curriculum.png}}
\end{figure}
# trimestre.php
Crear un formulario `trimestre.php` para introducir las calificacioes de los alumnos por trimestre y que nos muestre en una *tabla* las notas de todos los alumnos por trimestre y la *media*. Además tendréis de crear un botón para borrar los datos y poder introducir nuevos datos.
\begin{figure}
\centering
\subfigure[calificaciones]{\includegraphics[width=0.5\linewidth]{./img/ses_media.png}}
\end{figure}

# BBDD. Calificación de los TFG 
Se os pasa un script con los datos de los alumnos de un `IES...` el ejercicio consiste en hacer una aplicación *(CRUD)* para que cada profesor del tribunal ponga su *nota/calificación* sin saber la de los demás profesores. 

Expecificación:

* `inicio` pantalla donde se introducirá el usuario y contraseña.  Si el usuario existe lo guardaremos en una `sesion` y pasaremos al listado de *profesores* o *admin* dependiendo si hemos metido un profesor o admin.
````php
// Lista de usuarios y contraseñas
$usuarios = [
    'admin' => 'admin',
    'profesor1' => 'profesor1',
    'profesor2' => 'profesor2',
    'profesor3' => 'profesor3',
    'tutor' => 'tutor'
];
````
\begin{figure}
\centering
\subfigure[inicio]{\includegraphics[width=0.5\linewidth]{./img/Extraini.png}}
\end{figure}

:::important
    En todas las pantallas hay que comprobar que existe el usuario.
:::

* `profesor:` son *profesor1, profesor2, profesor3 y tutor*. Los profesores solo pueden introducir su nota, así cuando se autentiquen solo verán a los alumnos y su columna para introducir las notas.

\begin{figure}
\centering
\subfigure[profesor]{\includegraphics[width=1\linewidth]{./img/Extrapro.png}}
\end{figure}

* `Notas` se introduce la nota del alumno y después se redirecciona al listado del profesor para poder seguir metiendo notas.
\begin{figure}
\centering
\subfigure[profesor]{\includegraphics[width=0.2\linewidth]{./img/Extranota.png}}
\end{figure}

* `admin` no puede introduir notas, pero puede ver las calificaciones de todos los profesores y la media el alumno.

\begin{figure}
\centering
\subfigure[admin]{\includegraphics[width=1\linewidth]{./img/Extraadmin.png}}
\end{figure}

* `Cerrar sesion` cierra la sesiones y nos redirecciona a la pantalla de inicio

# Ejercicio en Laravel. 
:::tip
Subir el ejercicio a github y entregar el enlace.
:::
Realizar un *CRUD* para la gestión de productos. Para ello tendréis que crear la tabla desde una migración con los siguientes campos:

````php
`id` -> únivo y autoincremental;
`code`-> unique;
`name`-> string;
`quantity`->integer;
`price`-> decimal(8,2);
`description`-> not null;
````
Configura la base de datos con migraciones, seeder y factories , olvidate de usar la consola phpmyadmin.
Tienes que crear 60 productos.

### Página principal 

* Mostrar la paginación de 3 en 3.
* Botón para añadir nuevos productos.
* Botones para redireccionar a los distintos mantenimientos.

\begin{figure}
\centering
\subfigure[Pantalla de inicio]{\includegraphics[width=1\linewidth]{./img/Lini.png}}
\end{figure}

### Añadir un producto

* Debe tener 2 botones, uno para insertar y otro para cancelar. Ambos deben redireccionar a la pantalla de inicio.

\begin{figure}
\centering
\subfigure[Añadir producto]{\includegraphics[width=1\linewidth]{./img/Ladd.png}}
\end{figure}

### Editar
* Mostrar el contenido sin posibilida de modificar
\begin{figure}
\centering
\subfigure[Editar producto]{\includegraphics[width=1\linewidth]{./img/Ledit.png}}
\end{figure}
### Borrar
* Elimina un producto. No hace falta un mantenimiento especial solo mostrar un mensaje por pantalla.
\begin{figure}
\centering
\subfigure[Borrar producto]{\includegraphics[width=0.5\linewidth]{./img/Extradelete.png}}
\end{figure}
### Modificar
* Modificar el contenido de cualquier producto, o no...

\begin{figure}
\centering
\subfigure[Actualizar producto]{\includegraphics[width=1\linewidth]{./img/Lupdate.png}}
\end{figure}