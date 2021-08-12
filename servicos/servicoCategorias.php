<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string{
    $Categorias = [];
    $Categorias[] = ['Baby',0,5];
    $Categorias[] = ['Infantil',6,12];
    $Categorias[] = ['Adolescente',13,18];
    $Categorias[] = ['Adulto',19,40];
    $Categorias[] = ['Master',41,999];

    removerMsgErro();
    if(validaNome($nome) && validaIdade($idade)){
        for($i = 0; $i < count($Categorias); $i++){
            if($idade >= $Categorias[$i][1] && $idade <= $Categorias[$i][2]){
                definirMsgSucesso(mensagem : "O nadador " .$nome ." compete na categoria " .$Categorias[$i][0]);
                removerMsgErro();
                return null;
            }
        }
    }
    else
        removerMsgSucesso();
        return obterMsgErro();
}