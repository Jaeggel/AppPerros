<?php
include_once 'Perros.php';
class PerroNoAdoptado extends Perros {
	//ABSTRACT FACTORY
    public function getEstado_PerroAbst() {
     	return $this->getEstado_Perro()*0;
    }
}