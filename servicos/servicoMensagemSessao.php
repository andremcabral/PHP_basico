<?php
session_start();

function definirMsgSucesso(string $mensagem) : void{
    $_SESSION['sucesso'] = $mensagem;
}
function obterMsgSucesso() : ?string // com o ? significa que pode retornar string ou null
{
    if(isset($_SESSION['sucesso']))
       return $_SESSION['sucesso'];
    return null;
}
function removerMsgSucesso() : void{
    if(isset($_SESSION['sucesso']))
        unset($_SESSION['sucesso']);
}

function definirMsgErro(string $mensagem) : void{
    $_SESSION['erro'] = $mensagem;
}
function obterMsgErro() : ?string // com o ? significa que pode retornar string ou null
{
    if(isset($_SESSION['erro']))
       return $_SESSION['erro'];
    return null;
}
function removerMsgErro() : void{
    if(isset($_SESSION['erro']))
        unset($_SESSION['erro']);
}