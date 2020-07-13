<?php
session_start();
$verentradacorreta = $_POST['valor'];
if($verentradacorreta < 200){
    header("Location:index.php");
}else{
    $nomeusuario= $_POST['usuario'];
    $saldovalor ;
    $saldovalor= $_POST['valor'];
    $verentradacorreta = $_POST['valor'];
    setcookie('valor',$saldovalor, time()+60*60*20 );
}

?>