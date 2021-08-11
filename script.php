<?php
    $Categorias = [];
    $Categorias[] = ['Baby',0,5];
    $Categorias[] = ['Infantil',6,12];
    $Categorias[] = ['Adolescente',13,18];
    $Categorias[] = ['Adulto',19,40];
    $Categorias[] = ['Master',41,999];

    $nome = $_POST['seu_nome'];
    $idade = $_POST['sua_idade'];

    if(empty($nome))
    {
        echo 'O nome não pode ser vazio';
        return;
    }
    
    if(strlen($nome) < 3)
    {
        echo 'O nome não pode ter menos que 3 caracteres';
        return;
    }
    
    if(strlen($nome) > 30)
    {
        echo 'O nome não pode ter mais que 30 caracteres';
        return;
    }
    
    if(!is_numeric($idade))
    {
        echo 'A idade precisa ser um número';
        return;
    }

    if(empty($idade))
    {
        echo 'A idade não pode ser vazia';
        return;
    }


    for($i = 0; $i < count($Categorias); $i++){
        if($idade >= $Categorias[$i][1] && $idade <= $Categorias[$i][2]){
            echo ("O nadador " .$nome ." compete na categoria " .$Categorias[$i][0]);
        }
    }
