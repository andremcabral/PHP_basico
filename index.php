<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadadores</title>
</head>
<body>

<p> FORMULÁRIO DE INSCRIÇÃO </p>
<form action="script.php" method="post">
<?php
    $mensagemDeErro = isset($_SESSION['erro']) ? $_SESSION['erro'] : "";
    if(!empty($mensagemDeErro))
    {
        echo $mensagemDeErro;
    }
?>
<p>
Seu nome: <input type="text" name="seu_nome" id="seu_nome">
</p>
<p>
Sua idade: <input type="text" name="sua_idade">
</p>
<p>
<input type="submit" value="Enviar dados">
</p>
<?php
    $mensagemDeSucesso = isset($_SESSION['sucesso']) ? $_SESSION['sucesso'] : "";
    if(!empty($mensagemDeSucesso))
    {
        echo $mensagemDeSucesso;
    }
?>
</form>
</body>
</html>