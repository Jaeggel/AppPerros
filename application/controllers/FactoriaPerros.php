<?php
//ABSTRACT FACTORY
include 'Perros.php';
include 'PerroAdoptado.php';
include 'PerroNoAdoptado.php';
class FactoriaPerros {
    public function getEstado($tipo) 
    {
        if (strcmp($tipo, "1") == 1) 
        {
            return $PerroAdoptado=new PerroAdoptado();
        }
        else 
        {
            return $PerroNoAdoptado=new PerroNoAdoptado();
        }

    }
}