<?php

abstract class PerrosStrategy {
    //STRATEGY
    private  $miAlgoritmo;  
    public function setAlgoritmo($a){
        $this->miAlgoritmo = $a;
    }
    
    public function adoptar(){
        $this->miAlgoritmo->adoptarse();
    }
}