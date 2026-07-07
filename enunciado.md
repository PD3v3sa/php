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
    Para superar la prueba hay que sacar una nota mayor o igual a 4 para sacar la media de los dos ejercicios.
:::

# Ejercicio en PHP. Calificación de los TFG 

Se os pasa un script con los datos de los alumnos de un `IES...` el ejercicio consiste en hacer una aplicación *(CRUD)* para que cada profesor del tribunal ponga su *nota/calificación* sin saber la de los demás profesores. 

Expecificación:

* `inicio` pantalla donde se introducirá el usuario y contraseña.  Si el usuario existe lo guardaremos en una `sesion` y pasaremos al listado de *profesores* o *admin* dependiendo si hemos metido un profesor o admin.
```php
// Lista de usuarios y contraseñas
$usuarios = [
    'admin' => 'admin',
    'profesor1' => 'profesor1',
    'profesor2' => 'profesor2',
    'profesor3' => 'profesor3',
    'tutor' => 'tutor'
];
```
\begin{figure}
\centering
\subfigure[inicio]{\includegraphics[width=1\linewidth]{./img/Extraini.png}}
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
\subfigure[profesor]{\includegraphics[width=0.5\linewidth]{./img/Extranota.png}}
\end{figure}

* `admin` no puede introduir notas, pero puede ver las calificaciones de todos los profesores y la media el alumno.

\begin{figure}
\centering
\subfigure[admin]{\includegraphics[width=1\linewidth]{./img/Extraadmin.png}}
\end{figure}

* `Cerrar sesion` cierra la sesiones y nos redirecciona a la pantalla de inicio

# Ejercicio en Laravel. 

Realizar un *CRUD* para la gestión de productos. Para ello tendréis que crear la tabla desde una migración con los siguientes campos:

```php
 public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }
````

Como podéis ver en las imagenes siguientes ,en la pantalla de inicio, los datos son random, creados con un *seeder* y *faker*.


\begin{figure}
\centering
\subfigure[Pantalla de inicio]{\includegraphics[width=1\linewidth]{./img/Lini.png}}
\end{figure}

\begin{figure}
\centering
\subfigure[Añadir producto]{\includegraphics[width=1\linewidth]{./img/Ladd.png}}
\end{figure}

\begin{figure}
\centering
\subfigure[Editar producto]{\includegraphics[width=1\linewidth]{./img/Ledit.png}}
\end{figure}

\begin{figure}
\centering
\subfigure[Actualizar producto]{\includegraphics[width=1\linewidth]{./img/Lupdate.png}}
\end{figure}