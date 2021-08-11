<?php

session_start();

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
    $_SESSION['erro'] = 'O nome não pode ser vazio, preencha corretamente';
    $_SESSION['sucesso'] = "";
    header("location: index.php");
    return;
}
else if(strlen($nome) < 3)
{
    $_SESSION['erro'] = 'O nome não pode ter menos que 3 caracteres, preencha corretamente';
    header("location: index.php");
    $_SESSION['sucesso'] = "";
    return;
}
else if(strlen($nome) > 30)
{
    $_SESSION['erro'] = 'O nome não pode ter mais que 30 caracteres, preencha corretamente';
    $_SESSION['sucesso'] = "";
    header("location: index.php");
    return;
}
// else if(empty($idade))
// {
//     $_SESSION['erro'] = 'A idade não pode ser vazia, preencha corretamente';
//     header("location: index.php");
//     return;
// }
else if(!is_numeric($idade))
{
    $_SESSION['erro'] = 'A idade precisa ser um número, preencha corretamente';
    $_SESSION['sucesso'] = "";
    header("location: index.php");
}

for($i = 0; $i < count($Categorias); $i++){
    if($idade >= $Categorias[$i][1] && $idade <= $Categorias[$i][2]){
        $_SESSION['sucesso'] = "O nadador " .$nome ." compete na categoria " .$Categorias[$i][0];
        $_SESSION['erro'] = "";
        header("location: index.php");
        // echo ("O nadador " .$nome ." compete na categoria " .$Categorias[$i][0]);
    }
}
