<?php

function validaNome(string $nome) : bool
{
    if(empty($nome)){
        definirMsgErro($mensagem = 'O nome não pode ser vazio, preencha corretamente');
        $_SESSION['sucesso'] = "";
        return false;
    }
    else if(strlen($nome) < 3){
        definirMsgErro($mensagem = 'O nome não pode ter menos que 3 caracteres, preencha corretamente');
        removerMsgSucesso();
        return false;
    }
    else if(strlen($nome) > 30){
        definirMsgErro($mensagem = 'O nome não pode ter mais que 30 caracteres, preencha corretamente');
        removerMsgSucesso();
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool{
    if(!is_numeric($idade))
    {
        definirMsgErro($mensagem = 'A idade precisa ser um número, preencha corretamente');
        removerMsgSucesso();
        // header("location: index.php");
        return false;
    }
    return true;
}