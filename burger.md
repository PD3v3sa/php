---
# Metainformació del document
title: Ejercicio Fin de aÑo
titlepage: true
subtitle: Burger Queen
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


El `Burger Queen` nos ha encargado una aplicación para la venta y la adminsitración de  sus productos. Para ello se nos adjuntan los ficheros de los productos y la BBDD que los gestiona.

Se deberán de hacer dos mantenimientos:

* Uno solo para el administrador, `http://localhost/php/burger/admin/`, donde podrá gestionar cada producto, modificar sus datos, verlo, borrarlo o añadir nuevos.
* El otro será el punto de venta, `http://localhost/php/burger/`, donde el _cliente_ podrá hacer su pedido, desde un menú a una refresco.


