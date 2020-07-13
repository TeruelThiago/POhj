<?php

class Triangulo{

public $base;
public $altura;



public function getAltura()
{
return $this->altura;
}

public function setAltura($altura)
{
$this->altura = $altura;

return $this;
}


public function getBase()
{
return $this->base;
}

public function setBase($base)
{
$this->base = $base;

return $this;
}


public function area($base, $altura){
    $resultado = (($base*$altura)/2) ;
    return "<br/>Area do triangulo: " . $resultado;
}

public function imprimir(){
    return "Triangulo" . "<br/>Base:" . $this->getBase() . "<br/>Altura: " . $this->getAltura() ;
}
}

?>