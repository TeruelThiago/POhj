<?php

class Operacoes{

public $saldo;

public function Saque($valotret){
    
 
}
public function Deposito($valotrec){
    
    $res = $this->saldo + $valotrec;
        return $res;
    
}
public function Transferencia($valortransf){
    
    $respo =  "Saldo  para tranferencia";
    $res = $this->saldo - $valortransf;
    if($valortransf > $this->saldo){
        return $respo;
    }else{
        return $res;
    }
}
}
?>