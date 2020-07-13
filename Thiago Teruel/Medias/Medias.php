<?php

class Medias{

public $nota1;
public $nota2;
public $nota3;
public $nota4;



public function getNota1()
{
return $this->nota1;
}

public function setNota1($nota1)
{

$this->nota1 = $nota1;

return $this;
}


public function getNota2()
{
return $this->nota2;
}

public function setNota2($nota2)
{
$this->nota2 = $nota2;

return $this;
}


public function getNota3()
{
return $this->nota3;
}

public function setNota3($nota3)
{
$this->nota3 = $nota3;

return $this;
}


public function getNota4()
{
return $this->nota4;
}

public function setNota4($nota4)
{
$this->nota4 = $nota4;

return $this;
}

public function Media($nota1, $nota2, $nota3, $nota4){
    $resultado = (($nota1+$nota2+$nota3+$nota4)/4);
    $Media;
    if($resultado  >= 9){
        $Media = "MB";
    }
    if($resultado  >= 7 && $resultado < 9){
        $Media = "B";
    }
    if($resultado  >= 5 && $resultado < 7){
        $Media = "R";
    }
    if($resultado < 5){
        $Media = "I";
    }
    return "<br/>Amedia é de " . $resultado . ". Sendo assim : Sua média é de : " . $Media;
}
}

?>