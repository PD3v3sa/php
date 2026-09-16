---
# Metainformació del document
title: PHP
titlepage: true
subtitle:   Programación Orientada a Objetos
author:
- Pepe Devesa
...
# Pròleg

La Programación Orientada a Objetos (OOP, Object Oriented Programming) es un estilo de
organizar el código que permite a los desarrolladores agrupar tareas similares en clases. Esto ayuda a
que el código sea más fácil de mantener y a no repetirse (DRY, Don’t Repeat Yourself).

# Clases y Objetos

Un `clase` es un plantilla que define las propiedades y métodos para poder crear objetos. De este
manera, un objeto es una instancia de una clase.

* Similar a otros lenguajes como Java o C#

* Representan algo real.

* Se declaran con la palabra reservada **class**

* Entre llaves se declaran los atributos y métodos, que pueden ser privados, públicos o protegidos.Por defecto son públicos
    * **private**: Sólo puede acceder la propia clase.
    * **protected**: Sólo puede acceder la propia clase o sus descendientes.
    * **public**: Puede acceder cualquier otra clase.

:::important
**Buenas Practicas:**

*  Todas las clases empiezan por letra mayúscula.
* Siempre definiremos cada clase en un fichero que nombraremos NombreClase.php
* Los atributos siempre serán privados o protegidos (crearemos getters y setters para acceder a ellos)
:::

Para poder crear variables u objetos de cualquier clase, necesitamos definir una función especial
llamada constructor. Estas funciones pueden recibir una serie de parámetros, que normalmente
son los valores que queremos asignarles a los distintos atributos.

* Para instanciar un objeto a partir de la clase, se utiliza **new**.

* Para acceder desde un objeto a sus atributos o métodos, utilizamos la operador flecha **(->)**

* El objeto **$this**

    * Cuando desde un objeto se invoca un método de la clase, a este se le pasa siempre una referencia al objeto que lo ha llamado. Esta referencia se almacena en la variable $this

* Solo puede haber un `constructor` y se llamará `__construct`

    * Será invocada automáticamente al hacer new
    * Es ideal para inicializar los datos del objeto antes de usarlo.

Así, podemos definir una clase y un constructor que reciba tres parámetros (uno para el código, otro para el título y otro para la versión) y los asigne a los correspondientes atributos:

```php
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
```
Con esto, ya podemos crear variables de este tipo, usando el operador `new` para crear cada objeto. Por ejemplo, así crearíamos dos variables de tipo Software, $s1 y $s2, con diferentes datos cada una (desde fuera de la clase, si queremos):

```php
$s1 = new Software(1, "LibreOffice", "6.0");
$s2 = new Software(2, "GIMP", "3.8");
```

Y para llamar a las funciones de la clase y poder, por ejemplo, mostrar los datos de cada Software por pantalla, haríamos algo como esto.

```php
echo "<p>Datos del primer programa:</p>";
$s1->MostrarDatos();
echo "<p>Datos del segundo programa:</p>";
$s2->MostrarDatos();
```

## Encapsualación

Hemos dicho que los atributos de una clase normalmente son privados. Esto es así para no poder acceder a ellos directamente desde fuera, y cambiar su valor erróneamente.
Para cada propiedad, se añaden métodos públicos (getter/setter):

```php
public setPropiedad(tipo $param)
public getPropiedad() : tipo
```
Las constantes se definen públicas para que sean accesibles por todos los recursos.
```php
class MayorMenor {
    private int $mayor;
    private int $menor;

public function setMayor(int $may) {
    $this->mayor = $may;
}
public function setMenor(int $men) {
    $this->menor = $men;
}
public function getMayor() : int {
    return $this->mayor;
}
public function getMenor() : int {
    return $this->menor;
}
}
```

Otra forma de definirlos es con `__get` sirven para obtener el valor del atributo al que representan y `__set` se emplean para modificar el valor del atributo.

```php
class Software
{
private $codigo;
private $titulo;
private $version;
...
public function __get($nombre)
{
    if ($nombre == 'Cod')
        return $this->codigo;
    else if ($nombre == 'Titulo')
        return $this->titulo;
    else if ($nombre == 'Version')
        return $this->version;
}
public function __set($nombre, $valor)
{
    if ($nombre == 'Cod' && $valor > 0)
        $this->codigo = $valor;
    else if ($nombre == 'Titulo')
        $this->titulo = $valor;
    else if ($nombre == 'Version')
        $this->version = $valor;
}
...
}
```
Observa que el método `__get` recibe como parámetro un nombre (el que queramos), y luego dentro de la función emparejamos cada nombre con el atributo al que queramos enlazarlo. Si ponemos Cod, lo asociaremos al atributo $codigo, y así sucesivamente.

Con esto, si queremos cambiar el código del objeto anterior, podríamos hacerlo con su setter correspondiente, y asegurarnos de que se cambiará a un valor correcto.

```php
$s1->Cod = -1; // Esto no hará nada
$s1->Cod = 10; // Esto sí funcionará
```

La llamada al setter o al getter no es como en el resto de funciones. Tenemos que poner:

* el nombre del objeto.
* el operador ->.
* y un nombre (de entre los que vaya a aceptar el getter o setter).
* y en el caso de querer asignarle un valor, se lo asignamos como si fuera una variable normal.

Ese nombre, como podemos apreciar, no tiene por qué coincidir con el nombre del atributo. Dentro de
la función nos encargamos de emparejar cada nombre con el atributo, así que pueden ser diferentes,
ya que la asociación la hacemos nosotros a mano.

\newpage

# Herencia
PHP soporta herencia simple, de manera que una clase solo puede heredar de otra, no de dos clases
a la vez. Para ello se utiliza la palabra clave extends. Si queremos que la clase A hereda de la clase B
haremos:
```php
class A extends B
```
No es posible extender a múltiples clases, sólo se puede heredar de una clase. Los métodos y
propiedades heredados pueden ser sobreescritos declarándolos de nuevo con el mismo nombre que
tienen en la clase padre:

```php
class Perro
{
public $nombre = "Rudolf";
public function ladrar(){
print "Guau!";
}
}
class Bulldog extends Perro {
public function ladrar(){
print "Woof!";
}
}
$cachorro = new Bulldog(); // Instancia de la clase hija
$cachorro->nombre = "Jeffrey"; // Heredamos la propiedad padre $nombre y le asignamos Jeffrey
echo $cachorro->nombre; // Devuelve Jeffrey
$cachorro->ladrar(); // Devuelve Woof! ya que ha sobreescrito la función padre ladrar().
```
Ahora que ya tenemos una idea de cómo funciona la herencia de clases, vamos a ver cada uno de los
modificadores.

1. **Public**
Las propiedades y métodos `public` son accesibles desde cualquier parte del script, siendo este
modificador el más fácil de usar. En PHP 4 las variables se declaraban con “var” y eran public, pero esa forma de denominarlas está obsoleta y puede generar algunos warnings.

```php
class Perro
{
public $nombre;
public function ladrar(){
print "Guau!";
}
}
class Bulldog extends Perro {
public function ladrar(){
print "Woof!";
}
}
$cachorro = new Bulldog();
$cachorro->nombre = "BunBuns";
print $cachorro->nombre; // Devuelve: BunBuns
```

2. **Private**
El problema de las propiedades y métodos public es que se permite llamar a los métodos y establecer
las propiedades desde cualquier lado del script. En el ejemplo anterior, si en lugar de crear un objeto
Bulldog, creamos un objeto Perro e intentamos establecer nombre, nos dará un fatal error: Cannot
access private property.

```php
class Perro
{
private $nombre;
public function ladrar(){
print "Guau!";
}
}
$cachorro = new Perro();
$cachorro->nombre = "BunBuns"; // Fatal error
```

No se podrá ni mostrar ni modificar el nombre. Para hacerlo se utilizan getters y setters, métodos
public para poder acceder a estas propiedades y métodos private desde otras partes del script:

```php
class Perro
{
private $nombre;
public function ladrar(){
print "Guau!";
}
public function setNombre($nombre){
$this->nombre = $nombre;
}
public function getNombre(){
return $this->nombre;
}
}
$cachorro = new Perro();
$cachorro->setNombre("Chicken");
echo $cachorro->getNombre(); // Devuelve: Chicken
```

3. **Protected**
Las propiedades y métodos marcados como `protected` son accesibles a través de la clase donde se crean y sus descendientes:

```php
class Perro
{
protected $nombre;
protected function ladrar(){
print "Guau!";
}
}
class Bulldog extends Perro {
    public function ladrarBulldog(){
    // Podemos acceder a ladrar() de la clase Perro
    return $this->ladrar();
    }
    public function setNombre($nombre){
    $this->nombre = $nombre;
    }
    public function getNombre(){
    print $this->nombre;
    }
}
```
Diferentes ejemplos de acceso a propiedades protected:
```php
$cachorro = new Bulldog();
// Podemos acceder a la función ladrar() desde ladrarBulldog():
$cachorro->ladrarBulldog(); // Devuelve Guau!
// No podemos acceder a ladrar() desde el objeto cachorro:
$cachorro->ladrar(); // Fatal error: Call to protected method Perro::
ladrar()
// Tampoco podemos asignarle un nombre, pues $nombre también es protected
$cachorro->nombre = "Hunky"; // Fatal Error: Cannot access protected
property
// Si podemos asignarle un valor con el método setNombre():
$cachorro->setNombre("Hunky");
// Y mostrarlo con getNombre():
echo $cachorro->getNombre(); // Devuelve: Hunky
```

5. **Abstract**
El modificador `abstract` indica que una clase ométodo no puede instanciarse y sólo puede heredarse,
transladando su funcionamiento obligatorio a las clases hijas.
```php
abstract class CocheAbstract {
public function getRuedas()
{
return 4;
}
abstract public function setPotencia($potencia);
abstract public function getPotencia();
}
class Audi extends CocheAbstract {
public $brand = 'Audi';
protected $potencia;
public function setPotencia($potencia)
{
$this->potencia = $potencia;
}
public function getPotencia()
{
return $this->potencia;
}
}
$audi = new Audi;
$ruedas = $audi->getRuedas();
$audi->setPotencia(100);
$potencia = $audi->getPotencia();
echo "Coche " . $audi->brand . " de " . $ruedas . " ruedas " . "y " .
$potencia . " cv de potencia";
// Devuelve Coche Audi de 4 ruedas y 100 cv de potencia
```
El método `getRuedas()` será igual para todas las marcas de coches, por eso se define en la clase
abstracta. La clase Audi tendrá esemétodo para usar, y además deberá definir losmétodos `setPotencia()`
y `getPotencia()`.

## El elemento parent
Hemos visto que el objeto $this nos sirve para referenciar a los atributos o elementos de una clase, y
poderlos distinguir de otros externos que se llamen igual. Del mismo modo, podemos referenciar a los
atributos o métodos de la clase padre mediante el objeto parent, con la sintaxis:

```php
parent::metodo(...)
```
`**super()** en java`. Así, por ejemplo, no sería necesario duplicar el código en el constructor de la clase hija para los atributos que asigna la clase padre. Podríamos poner:

```php
public function __construct($c, $t, $v, $p)
{
    parent::__construct($c, $t, $v);
    $this->plataforma = $p;
}
```

## Convertir un objeto a cadena

Otra de los métodos mágicos interesantes es el método especial denominado `__toString()` que devolverá una cadena representando el estado actual de un objeto.
Si en una clase sobrescribimos el método, éste se invocará al intentar imprimir la clase por ejemplo, haciendo **echo $objeto**.

```php
class Persona {
protected $dni;
protected $nombre;

public function __construct($pDni, $pNombre) {
    //constructor
    $this->dni = $pDni;
    $this->nombre = $pNombre;
}
public function __toString()
{
    $texto = 'DNI: '.$this->dni.'<br>';
    $texto .= 'Nombre: '. $this->nombre . '<br>';
    return $texto;
}
}
$alumno = new Persona('12345678','Pepe Devesa');
echo $alumno; //Llamada implícita al método __toString()
?>
```
Al ejecutar ese código tendremos como resultado lo siguiente:

```php
DNI:12345678
Nombre: Pepe Devesa
```
# Métodos mágicos

Todas las clases PHP ofrecen un conjunto de métodos, también conocidos como magic methods que
se pueden sobreescribir para sustituir su comportamiento. Algunos de ellos ya los hemos utilizado.
Ante cualquier duda, es conveniente consultar la [documentación oficial](https://www.php.net/manual/es/language.oop5.magic.php).

Los más destacables son:

* __construct()

* __destruct() se invoca al perder la referencia. Se utiliza para cerrar una conexión a la BD, cerrarun fichero, ...

* __toString() -> representación del objeto como cadena. Es decir, cuando hacemos echo $objeto se ejecuta automáticamente este método __get(propiedad), __set(propiedad, valor) -> Permitiría acceder a las propiedad privadas, aunque siempre es más legible/mantenible codificar los getter/setter.

* __isset(propiedad), __unset(propiedad)->Permite averiguar o quitar el valor a una propiedad.

* __sleep(), __wakeup() -> Se ejecutan al recuperar (unserializeˆ) o almacenar un objeto que se serializa (serialize), y se utilizan para permite definir qué propiedades se serializan.

* __call(), __callStatic() -> Se ejecutan al llamar a un método que no es público. Permiten sobrecargan métodos.

# Espacio de nombres

También conocidos como `Namespaces`, permiten organizar las clases/interfaces, funciones y/o constantes de forma similar a los paquetes en Java. Se declaran en la primera línea mediante la palabra clave `namespace` seguida del nombre del espacio de nombres asignado (cada subnivel se separa con la barra invertida \):
Por ejemplo, para colocar la clase Producto dentro del **namespace dwes\\Ejemplos** lo haríamos así:

```php
namespace dwes\Ejemplos;
const IVA = 0.21;
class Producto {
    public $nombre;
    public function muestra() : void {
        echo"<p>Prod:" . $this->nombre . "</p>";
    }
}
```
## Acceso
Para referenciar a un recurso que contiene un namespace, primero hemos de tenerlo disponible haciendo uso de include o require. Si el recurso está en el mismo namespace, se realiza un acceso directo (se conoce como acceso sin cualificar).
Realmente hay tres tipos de acceso:

* sin cualificar: recurso
* cualificado: rutaRelativa\\recurso no hace falta poner el namespace completo
* totalmente cualificado: \\rutaAbsoluta\\recurso.

```php
namespace Dwes\Ejemplos;
include_once("Producto.php");

echo IVA; // sin cualificar
echo Utilidades\IVA; // acceso cualificado. Daría error, no existe \Dwes\Ejemplos\Utilidades\IVA
echo \Dwes\Ejemplos\IVA; // totalmente cualificado

$p1 = new Producto(); // lo busca en el mismo namespace y encuentra \Dwes\Ejemplos\Producto
$p2 = new Model\Producto(); // daría error, no existe el namespace Model. Está buscando \Dwes\Ejemplos\Model\Producto
$p3 = new \Dwes\Ejemplos\Producto(); // \Dwes\Ejemplos\Producto
```

# Exepciones

* `Exception` es la clase base para todas las excepciones de usuario en PHP.
* Proporcionan métodos para obtener información de la excepción y de traza
    * getMessage. Devuelve el mensaje, en caso de que se haya puesto algún
    * getCode. Devuelve el código de error si existe

## Excepciones definidas por el usuario

* El código susceptible de producir algún error se introduce en un bloque **try**
* Cuando se produce algún error, se lanza una excepción utilizando la instrucción **throw**
* Después del bloque try tiene que haber como mínimo un bloque **catch** encargado de procesar el error
* Si una vez acabado el bloque try no se ha lanzado ninguna excepción, se continúa con la ejecución en la línea siguiente al bloque o bloques catch
* Si hay algo que se tenga que ejecutar tanto si se produce una excepción como si no se produce, lo pondremos dentro de un bloque **finally**, después del último bloque catch.
* Para lanzar una excepción no es necesario indicar ningún parámetro, aunque de forma opcional se puede pasar un mensaje de error y también un código de error.

```php
class DivisionByZero extends exception{
protected $message = "El segundo argumento es 0";
}
function dividir($a, $b){
    if ($b==0){
    throw new DivisionByZero;
    }
return $a/$b;
}
try{
    $resul1 = dividir(5, 0);
    echo "Resul 1 $resul1". "<br>";
}catch(DivisionByZero $e){
    echo "Excepción: ". $e->getMessage(). "<br>";
}finally{
    echo "Primer finally<br>";
}
try{
    $resul2 = dividir(5, 2);
    echo "Resul 2 $resul2". "<br>";
}catch(DivisionByZero $e){
    echo "Excepción: ". $e->getMessage(). "<br>";
}finally{
    echo "Segundo finally";
}
```
# Ejercicios
:::box
**Clases.php**

Crea una página llamada **clases.php** con:

* una clase llamada Persona que tenga como atributos un DNI, un nombre y un email.
    * Crea un constructor que permita rellenar esos tres atributos,
    * y los getters y setters correspondientes.
    * Define también un método Mostrar para sacar por la página los datos de la persona (en un párrafo, separados por guiones).
    * Define adecuadamente la visibilidad (pública o privada) de cada atributo o método.
* Crea una segunda clase llamada Estudiante que:
    * herede de Persona, y
    * añada un atributo llamado numExpediente.
    * Crea su constructor, sus getters y setters y su correspondiente método Mostrar.

Fuera de las clases, entre el código HTML de la página, crea un objeto de cada tipo (una Persona y un Estudiante), con los valores que quieras, llama después a algún setter de cada una para cambiar el valor de algún atributo, y finalmente llama a sus métodos Mostrar para que saquen la información de cada uno.
:::

:::box
**Player.php**

Crea las siguientes clases :

| **Clase** | **Campos** | **Métodos** |
|------------|------------|-------------|
| **Player** | Name, BirthDay, Country, Dorsal, Position, Goals, Matches, Minutes, YellowCard, RedCard | `Construct()`, `Age()`, `Score()`, `AddCard(int Colour)`, `PlayMinutes(int min)`, `Render()` |
| **Team** | Name, Players, Matches, Won, Lost, Tie, ScoreGoals, ConcededGoals | `Construct()`, `Render()`, `SignPlayer(Player)` |

Importa el fichero y cargalo el Team de l’Atletic de Madrit y muestra la plantilla en pantalla utilitzando la función render de la classe Team.
\begin{figure}
\centering
\subfigure[Team]{\includegraphics[width=0.6\linewidth]{./img/team.png}}
\end{figure}
:::