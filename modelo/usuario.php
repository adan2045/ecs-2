<?php

class Usuario{

    Public $Nombre;
    Public $Apellido;
    Public  $Email;
    Public  $FechaAlta;
    Public $Id;
    Public $NombreDeUsuario;
    Public  $FechaNacimiento;
    Public  $Clave;
    Public  $NroDocumento;
     


     Public function MostrarDatos(){

        echo 'Nombre :' . $this-> Nombre . '<br>';
        echo 'Apellido :' . $this-> Apellido . '<br>';
        echo 'Email :' . $this-> Email . '<br>';
        echo 'FechaAlta :' . $this-> FechaAlta . '<br>';
        echo 'FechaNacimiento :' . $this-> FechaNacimiento . '<br>';
        echo 'NroDocumento :' . $this-> NroDocumento . '<br>';
        echo 'Id :' . $this-> Id . '<br>';
        echo 'Clave :' . $this-> Clave . '<br>';
        echo 'NombreDeUsuario:'  . $this-> NombreDeUsuario . '<br>'; 
    
    }
     

}