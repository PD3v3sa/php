# calculadora.php
Escribe un programa calculadora.php que acepte por la dirección las variables $x y $y y que:
Muestra por pantalla:
* El valor del array $_GET (utiliza la función print_r())
* La suma, resto, multiplicación y división de x e y.
* El valores de la variable $_SERVER.
* ¿Cual es el ordenador que hace la petición?
* En qué variable están los parámetros de la petición.
* ¿Qué es la ruta del sitio web en el ordenador local ?
* Utilitza una vista para mostrar el resultado. calculadora.view.php
  ![imagen](https://github.com/user-attachments/assets/19d91cc4-9bc8-497b-835f-c67c93c43005)
# formulario.html y formulario.php
Crea un formulario(utiliza bootstrap) que solicite:
* Nombre y apellidos.
* Email.
* URL página personal.
* Sexo (radio).
* Número de convivientes en el domicilio.
* Aficiones (checkboxes) => poner mínimo 4 valores.
* Menú favorito (lista selección múltiple) => poner mínimo 4 valores.
* Muestra los valores cargados en una tabla-resumen.
![imagen](https://github.com/user-attachments/assets/276b1fd5-0479-4c56-a541-11dcda2376c6)
![imagen](https://github.com/user-attachments/assets/f13c571e-d473-4e0b-bc97-f9fe560f8e72)

# subidaImagen.php
(utiliza bootstrap)
Crea un formulario que permita subir unicamente imágenes (comprueba la propiedad type del archivo
subido). Si el usuario selecciona otro tipo de archivos, se le debe informar del error y permitir que suba
un nuevo archivo. En el caso de subir el tipo correcto, visualizar la imagen durante 5 segundos,con la
ruta y nombre, tamaño de anchura y altura y redirecciona al formulario. También hay que crear un
enlace para mostrar el listado de todas las imagenes subidas.(analiza/estudia el método scandir()
).

![imagen](https://github.com/user-attachments/assets/e51bf102-477d-4aaf-a8ed-8d41564844d0)
===================================================
![imagen](https://github.com/user-attachments/assets/2b327c9c-c3ee-4625-b771-2cef19182019)
========================================================
![imagen](https://github.com/user-attachments/assets/243eac53-6096-4778-ae82-2b23fb056a8b)




### Ley d'Hont
<p>
   <img src="../img/hont.png" width=200 heignt=200 align="left">

Nos piden el diseño de una página web donde introduzcamos el número de partidos políticos, la cantidad de votos por partido y el número de escaños a repartir y nos devuelva una tabla como la siguiente: 

* Donde las columnas son el Total de votos del partido dividido entre el número de escaños. 
    *  500.000/1, 500.000/2 … 500.000/7 y así con los 4 partidos.
</p>

<p>
   <img src="../img/tablahont.png" width=300 heignt=300 align="right">

Donde hemos metido los 4 partidos el número total de votos por partido 500.000, 300.000, 150.000 y 50.000 respectivamente y el total de escaños a repartir, en este caso 7. 
Si nos fijamos y simplificando mucho hay que marcar las 7 cantidades mayores.

</p>

