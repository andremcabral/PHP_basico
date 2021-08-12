<?php
include 'servicos/servicoMensagemSessao.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nadadores</title>
</head>
<body>

<p> FORMULÁRIO DE INSCRIÇÃO</p>
<form action="script.php" method="post">
<?php
    $mensagemDeErro = obterMsgErro();
    if(!empty($mensagemDeErro))
    {
        echo $mensagemDeErro;
    }

    $mensagemDeSucesso = obterMsgSucesso();
    if(!empty($mensagemDeSucesso))
    {
        echo $mensagemDeSucesso;
    }
?>
<p>Seu nome: <input type="text" name="nome"></p>
<p>Sua idade: <input type="text" name="idade"></p>
<p><input type="submit" value="Enviar dados"></p>
</form>
</body>
</html>