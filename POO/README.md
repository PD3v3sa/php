# Clases.php
Crea una página llamada clases.php con:
* una clase llamada **Persona** que tenga como atributos un DNI, un nombre y un email.
  * Crea un constructor que permita rellenar esos tres atributos,
  * y los getters y setters correspondientes.
  * Define también un método Mostrar para sacar por la página los datos de la persona (en un párrafo, separados por guiones).
  * Define adecuadamente la visibilidad (pública o privada) de cada atributo o método.
* Crea una segunda clase llamada **Estudiante** que:
  * herede de Persona, y
  * añada un atributo llamado numExpediente.
  * Crea su constructor, sus getters y setters y su correspondiente método Mostrar.

Fuera de las clases, entre el código HTML de la página, crea un objeto de cada tipo (una Persona y un
Estudiante), con los valores que quieras, llama después a algún setter de cada una para cambiar el
valor de algún atributo, y finalmente llama a sus métodos Mostrar para que saquen la información de
cada uno.
# Player.php
Crea un clase **Player**, con los campos:
* Name
* BirthDay
* Country
* Dorsal
* Position
* Goals
* Matches
* Minutes
* YellowCard
* RedCard
Crea los métodos:
* Age()
* Score()
* AddCard(int Colour)
* PlayMinutes(int min)
* Render() para mostrar la ficha del jugador
* Construct()
Crea un clase **Team**, amb el següents camps:
* Name
* Players
* Matches
* Won
* Lost
* Tie
* ScoreGoals
* ConcededGoals
Crea los métodos:
* Construct()
* Render() mostrar el equipo
* SignPlayer(Player)
Importa el fichero y cargalo el Team de l’Atletic de Madrit y muestra la plantilla en pantalla utilitzando
la función render de la classe Team.
![image](https://github.com/user-attachments/assets/d77053d4-9e47-4aff-94aa-2ca8c70286c8)

# Articulo.php
Crea dos clases,Articulo y ArticuloRebajado que será una subclase de Articulo.
* La clase Articulo se guardará en un fichero llamado “class.articulo.php” y contendrá dos atributos protegidos nombre y precio
* El constructor recibirá como parámetros obligatorios pNombre y pPrecio y le asignará dichos valores a sus correspondientes atributos.
* Implementar el método __toString() que devuelva la siguiente cadena:
  
````php
'Nombre:' . $this->nombre . '<br />' . 'Precio: ' .$this->precio . '&euro;<br />" ;
````
(usa el operador .=)
* Un método **getPrecio** que devuelva el valor actual del precio y setPrecio($pPrecio) que compruebe si la variable $pPrecio es un valor numérico y si es así, se lo asigne al atributo precio
de la clase Articulo.

Crea un nuevo fichero llamado **herencia.php”** que requiera la definición (usa la función que comprueba que no se haya requerido la definición de la clase anteriormente y si es así provoca un error fatal)
````php
if (!class_exists('Articulo'))
````
“Articulo” y dentro de dicho fichero crea la clase **ArticuloRebajado** que será declarada como final (no se podrá heredar de ella) y será hija de la clase Articulo.
Esta clase contendrá:
* Un atributo privado llamado $rebaja
* El constructor por defecto que recibe como parámetros obligatorios $pNombre, $pPrecio y
$pRebaja. Dentro de dicho constructor habrá que llamar al constructor del padre para darle
valor a nombre y precio. Después le daremos valor al atributo rebaja.
Un método privado llamado calculaDescuento() que nos devuelve el precio por la rebaja
dividido por 100.
* Un método público llamado precioRebajado() que nos devuelve la diferencia entre el precio y el descuento.
* El método **__toString()** que nos devuelve:
  * Lo que nos devuelve el método __toString() de la clase padre Articulo (habrá que realizar una llamada explícita al método __toString() del padre) Junto con la cadena ‘La rebaja es:’ . $this->rebaja . ’ %‘; y por último ’El descuento es’. self::calculaDescuento(). ’€” Después de definir la clase ArticuloRebajado crea una instancia de la misma con los parámetros:
  ````php
  nombre='Bicicleta', precio=352.10 y rebaja=20.
  ````
  
Imprime con un echo el objeto y en la siguiente línea esta cadena “El precio del artículo rebajado es”
concatenado con la función que nos devuelve el valor del precio rebajado junto el signo del euro y un
salto de línea. Debajo de esa línea muestra en formato preformateado () lo que devuelve la función
var_dump() del objeto creado anteriormente.
El resultado tiene que ser el siguiente:
![image](https://github.com/user-attachments/assets/a3e3926e-34c4-477c-ba90-e641f1644426)
