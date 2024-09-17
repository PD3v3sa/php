
### Apuestas del Estado

<img src="./img/loterias.png">
Queremos realizar una página en el servidor que me genere de forma aleatoria una apuesta de primitiva u otra de euromillones. Para realizar el script en PHP deberemos tener en cuenta que:  

* `PRIMITIVA` Una apuesta de 6 números entre 49 posibles (del 1 al 49). 

* `EUROMILLONES` Una apuesta de 5 números entre 50 posibles (del 1 al 50) más 2 estrellas de entre 9 posibles (del 1 al 9). 

Además vamos a utilizar programación modular y para ello se nos proporciona el siguiente **DEM (Diagrama de Estructura de Módulos):**

<img src="./img/apuestas.png">

Deberemos implementar el código HTML con dos enlaces para `select_apuesta.html` que enlazarán a los scripts: 

* `primitiva.php` encargado de mostrar una apuesta ordenada de lotería primitiva. Implementando los módulos del DEM para primitiva. 

* `euromillones.php` encargado de mostrar una apuesta ordenada de euromillones. Implementando los módulos del DEM para euromillones. 

Intentaremos implementar cada módulo del DEM como una función en PHP de tal manera que aquellos que sean comunes a primitiva.php y euromillones.php los introduciremos en la librería `loteria.inc`. Un ejemplo, "cutre", de visualización final puede ser: 

<img src="./img/apuestas2.png">