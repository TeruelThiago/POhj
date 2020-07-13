<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta bancária</title>
</head>

<body>
    <h1>Conta Bancária</h1>
    <form method="POST" action="AreaConta.php">
        Digite seu nome para cadastro:
        <input type="text" id= "usuario" name="usuario" value=""><br><br>
        Digite o valor inicial da conta (Mínimo 200) :
        <input type="text" id="valor" name="valor" value=""><br>
        <input type="submit" value="Abrir Conta"><br>
        <input type="hidden" id="acao" name="acao" value="Criarconta">
    </form>
</body>

</html>