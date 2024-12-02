---
# Metainformació del document
title: 1ª Evalaución
titlepage: true
subtitle: PHP
author:
- Pepe 
lang: va

# portada
titlepage-rule-height: 2
titlepage-rule-color: EE0000
titlepage-text-color: EE0000
titlepage-background: ../img/logo.png

# configuració de l'índex
toc: false
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


:::caution
    1. El ejercicio 1 vale el 70% de la nota. 
    2. El ejercicio 2 vale el 30%.
    3. Es obligatorio sacar más de un 3 sobre 10 en cada ejercicio, para que se haga la media.
    4. La presentación de ambos debe ser correcta, utilizad css o bootsrap o cualquier otro frame.
:::

**Ejercicio 1**

Desde el departamento de informàtica se nos pide que desarrollemos una aplicación para puntuar las notas del `tfg`. Los requerimientos que debemos de tener en cuenta son:

* Ningún *profesor* puede saber en ningún momento la nota de los otros profesores, es privada y confidencial.

* Habrán 4 profesores **(profesor1, profesor2, profesor3 y tutor)** acreditados para calificar a los alumnos, además habrá un usuario **admin** que podrá ver todas las notas.

* Este ejercicio se debe de hacer utilizando el _MVC_ 
* El usuario solo podrá acceder a la aplicación si se ha autenticado. **inicio.php**.
* Debéis de crear una tabla *usuarios*, con el *nombre* del usuario y la *contraseña* encriptada.

Se os adjunta un script con la base de datos de los alumnos del `tfg`.

***

**Ejercicio 2**

Vamos a desarrollar una aplicación plurilingüe, de tal manera que cuando seleccionamos  el idioma, español, valenciano o inglés nos devuelva los datos del usario traducidos.
Tendrá dos partes los estudios y los idiomas que habla. Se os adjunta el texto.

**$estudios** = "Soy un modelo de lenguaje desarrollado por OpenAI. Tengo una gran cantidad de conocimientos y puedo ayudarte en una variedad de tareas.";

**$idiomas** = "Hablo varios idiomas, incluyendo el español y el inglés.";
 
// Definir texto en valencià

**$estudio** = "Sóc un model de llenguatge desenvolupat per OpenAI. Tinc una gran quantitat de coneixements i puc ajudar-te en una varietat de tasques.";

**$idiomas** = "Parle diversos idiomes, incloent-hi l'espanyol i l'anglés.";

// Definir texto en inglés

**$estudios** = "I am a language model developed by OpenAI. I have a vast amount of knowledge and can assist you in a variety of tasks.";

**$idiomas** = "I speak multiple languages, including Spanish and English.";


