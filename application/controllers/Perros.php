<?php
abstract class Perros{
    //ABSTRACT FACTORY
    private $ESTADO;
    public function getEstado_Perro() 
    {
        return $this->ESTADO;
    }

    public function setEstado_Perro($ESTADO) 
    {
         $this->ESTADO = $ESTADO;
    }
    public abstract function getEstado_PerroAbst();
}