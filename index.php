<?php

require_once 'modelo/usuario.php';


$p= new Usuario();
    $p->Nombre ='Luis' ;
    $p->Apellido='Grosso';
    $p->Email='adan@difhsdiohf';
    $p->FechaAlta='25/52/33';
    $p->FechaNacimiento='28/07/1988';
    $p->NroDocumento='33847868';
    $p->Id='65f4g35df4';
    $p->Clave='2222';
    $p->NombreDeUsuario='luis_grosso';



$p->MostrarDatos();