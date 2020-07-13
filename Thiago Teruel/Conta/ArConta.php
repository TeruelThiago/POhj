<?php
session_start();
if($_POST['acao'] == 'Criarconta'){
   

    if($_POST['valor'] < 200){
        header("Location:index.php");
    }else{
        $nomeusuario = $_POST['usuario'];
        $_SESSION['usuario'] =  $nomeusuario;
        $_SESSION['saldo'] = $_POST['valor'];
    }
}
if($_POST['acao']== 'Movimentarconta'){
    $o = $_POST['radio'];
    $mod = $_POST['mod'];
    $respo = '';

    if($o == 'Saque'){
        
        $res =  $_SESSION['saldo'] - $mod;
        if($mod >  $_SESSION['saldo']){
            $respo =  "Saldo insulficiente" ;
        }else{
            $_SESSION['saldo'] = $res;
        }
    }
    if($o == 'Deposito'){
        
    $res =  $_SESSION['saldo'] + $mod;
    $_SESSION['saldo'] = $res;
    }
    if($o == 'Tranferencia'){
        
    
    $res =  $_SESSION['saldo'] - $mod;
    if($mod >  $_SESSION['saldo']){
        $respo =  "Saldo  para tranferencia" ;
    }else{
        $_SESSION['saldo'] = $res;
    }
    }
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contabancário</title>
</head>

<body>
    <h1>Conta Bancária</h1>
    <h3>Bem-vindo <?php echo $_SESSION['usuario'] ;?></h3>
    <h4>Escolha a ação:</h4>

    <h4>Saldo atual: <?php echo $_SESSION['saldo'];?></h4>
    <form method="POST">
        <input type="radio" name="radio" id="Saque" value="Saque">
        <label for="Saque">Saque</label>
        </br>
        <input type="radio" name="radio" id="Deposito" value="Deposito">
        <label for="Deposito">Depósito</label>
        </br>
        <input type="radio" name="radio" id="Tranferencia" value="Tranferencia">
        <label for="Tranferencia">Tranferência</label><br>
        Valor a ser alterado :
        <input type="text" id="mod" name="mod" value=""><br>
        <input type="hidden" id="acao" name="acao" value="Movimentarconta"><br>
        <input type="submit" value="Concluir">
        </br></form>

    <h3><?=$respo?></h3>
</body>

</html>