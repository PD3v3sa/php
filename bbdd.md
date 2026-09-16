---
# Metainformació del document
title: PHP
titlepage: true
subtitle:   Acceso a Datos
author:
- Pepe Devesa
...
# Pròleg
:::info
En esta unidad vamos a aprender a acceder a datos que se encuentran en un servidor; recuperando, editando y creando dichos datos a través de una base de datos.

A través de las distintas capas o niveles, de las cuales 2 de ellas ya conocemos (Apache, PHP) y MySQL la que vamos a estudiar en este tema.

En la siguiente figura queda más claro donde se colocaría la capa de acceso de abstracción o capa de acceso a datos.

\begin{figure}
\centering
\subfigure[Gestor Team]{\includegraphics[width=0.5\linewidth]{./img/bbdd.png}}
\end{figure}
:::

# Preparación de la base de datos
Antes de conectar con una base de datos, evidentemente tenemos que tenerla creada y lista. Si utilizamos XAMPP, este paso puede hacerse fácilmente a través de la herramienta phpMyAdmin que ya viene instalada. Para usarla, accedemos a su URL predeterminada, que suele ser *http://localhost/phpmyadmin*.

\begin{figure}
\centering
\subfigure[phpmyadmin]{\includegraphics[width=0.5\linewidth]{./img/phpmyadmin1.png}}
\subfigure[crear bbdd]{\includegraphics[width=0.5\linewidth]{./img/phpmyadmin2.png}}
\subfigure[crear campos]{\includegraphics[width=0.5\linewidth]{./img/phpmyadmin3.png}}
\end{figure}

Con esto, ya tendremos la tabla videojuegos creada en la base de datos. Haciendo clic en ella desde el panel principal podremos consultar la información que haya guardada en cada momento.

Además, desde las opciones del menú superior Importar y Exportar podemos incorporar nuevas bases de datos (previamente exportadas) o exportar el contenido de las existentes para hacer copias de seguridad o llevarlas a otro servidor.

# Configuración de la conexión
A la hora de conectar con cualquier base de datos, tenemos que tener en cuenta cuatro o cinco
parámetros clave:

* **Dirección del servidor de bases de datos**. Típicamente suele estar alojado en la misma máquina donde tenemos el servidor web Apache, así que esta dirección suele ser localhost.

* **Puerto de conexión con el servidor**. Normalmente cada servidor queda escuchando por su puerto por defecto y no es necesario configurarlo. Así, el puerto por defecto de MySQL es el 3306, por ejemplo.

* **Nombre de la base de datos a la que queremos conectar**.

* **Login y password** del usuario con el que queremos conectar. En el caso de XAMPP, por defecto se crea un usuario root con contraseña vacía.

Teniendo todo esto en cuenta, el siguiente código nos va a permitir conectar con una base de datos
como la que hemos creado en el paso anterior:
```php
$host = "localhost";
$nombreBD = "videojuegos";
$usuario = "root";
$password = "";
$pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario,$password);
```
## PHP Data Objects :: PDO
De la misma manera podriamos hacerlo con `mysqli`, PHP Data Objects (o PDO) es un driver de PHP que se utiliza para trabajar bajo una interfaz de objetos con la base de datos. A día de hoy es lo que más se utiliza para manejar información desde una base de datos, ya sea relacional o no relacional. El objeto PDO anterior se construye usando tres parámetros:

* URL de conexión, donde indicamos el tipo de base de datos que vamos a usar (MySQL, en este caso), dirección del servidor, nombre de la base de datos y codificación. Notar que simplemente cambiando el tipo de base de datos (PostgreSQL, Oracle...) esta misma línea nos va a servir para
conectar con distintos SGBD.
* Usuario y contraseña de acceso.

:::tip
Estas líneas de conexión van a resultar muy frecuentes en nuestras aplicaciones si
accedemos a la base de datos desde distintas páginas PHP, por lo que convendría
definirlas en un archivo .inc e incluirlo en las páginas que necesiten esa conexión.
:::

Además, con PDO podemos usar las excepciones con **try catch** para gestionar los errores que se
produzcan en nuestra aplicación, para ello, como hacíamos antes, debemos encapsular el código entre
bloques try / catch.
```php
<?php
    $dsn = 'mysql:dbname=prueba;host=127.0.0.1';
    $usuario = 'usuario';
    $contraseña = 'contraseña';

    try {
        $pdo = new PDO($dsn, $usuario, $contraseña);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
     echo 'Falló la conexión: ' . $e->getMessage();
    }
?>
```
En primer lugar, creamos la conexión con la base de datos a través del constructor PDO pasándole la
información de la base de datos. En segundo lugar, establecemos los parámetros para manejar las
excepciones, en este caso hemos utilizado:

* **PDO::ATTR_ERRMODE** indicándole a PHP que queremos un reporte de errores.
* **PDO::ERRMODE_EXCEPTION** con este atributo obligamos a que lance excepciones, además de ser la opción más humana y legible que hay a la hora de controlar errores.

Cualquier error que se lance a través de PDO, el sistema lanzará una **PDOException**.