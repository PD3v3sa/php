<?php
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