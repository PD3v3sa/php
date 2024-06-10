---
# Metainformació del document
title: PHP 
titlepage: true
subtitle: OOP, Object Oriented Programming en PHP
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

# Pròleg
La `Programación Orientada a Objetos` (OOP, Object Oriented Programming) es un estilo de organizar el código que permite a los desarrolladores agrupar tareas similares en clases. Esto ayuda a que el código sea más fácil de mantener y a no repetirse (`DRY`, Don't Repeat Yourself).

# Clases y Objetos

Un `clase` es un plantilla que define las propiedades y métodos para poder crear `objetos`. De este manera, un objeto es una instancia de una clase. 

* Similar a otros lenguajes como Java o C#
* Representan algo real.
* Se declaran con la palabra reservada **class**
* Entre llaves se declaran los atributos y métodos, que pueden ser privados, públicos o protegidos.Por defecto son públicos
    *  **private:** Sólo puede acceder la propia clase.
    *  **protected:** Sólo puede acceder la propia clase o sus descendientes.
    *  **public:** Puede acceder cualquier otra clase.

:::tip
**Buenas Practicas:**

* Todas las clases empiezan por letra mayúscula.

* Siempre definiremos cada clase en un fichero que nombraremos *NombreClase.php*

* Los atributos siempre serán privados o protegidos (crearemos getters y setters para acceder a ellos)

:::

Para poder crear variables u `objetos` de cualquier clase, necesitamos definir una función especial llamada `constructor`. Estas funciones pueden recibir una serie de parámetros, que normalmente son los valores que queremos asignarles a los distintos atributos.

* Para instanciar un objeto a partir de la clase, se utiliza _new_.

* Para acceder desde un objeto a sus atributos o métodos, utilizamos la operador **flecha (->)**

* El objeto **$this**

    * Cuando desde un objeto se invoca un método de la clase, a este se le pasa siempre una referencia al objeto que lo ha llamado.Esta referencia se almacena en la variable **$this**

* Solo puede haber un `constructor`y se llamará `__construct`
    * Será invocada automáticamente al hacer *new*
    * Es ideal para inicializar los datos del objeto antes de usarlo.

Así, podemos definir una clase y un constructor que reciba tres parámetros (uno para el código, otro para el título y otro para la versión) y los asigne a los correspondientes atributos:

````php
class Software
{
    private $codigo = 0;
    private $titulo = "";
    private $version = "1";

    public function __construct($c, $t, $v)
    {
        $this->codigo = $c;
        $this->titulo = $t;
        $this->version = $v;
    }

    ...
}
````
Con esto, ya podemos crear variables de este tipo, usando el operador `new` para crear cada objeto. 
Por ejemplo, así crearíamos dos variables de tipo Software, *$s1 y $s2*, con diferentes datos cada una (desde fuera de la clase, si queremos):
````php
$s1 = new Software(1, "LibreOffice", "6.0");
$s2 = new Software(2, "GIMP", "3.8");
````