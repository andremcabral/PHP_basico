<?php
$Categorias = [];
$Categorias[] = ['Baby',0,5];
$Categorias[] = ['Infantil',6,12];
$Categorias[] = ['Adolescente',13,18];
$Categorias[] = ['Adulto',19,40];
$Categorias[] = ['Master',41,999];

$nome = "Andre";
$idade = 44;

for($i = 0; $i < count($Categorias); $i++){
    if($idade >= $Categorias[$i][1] && $idade <= $Categorias[$i][2]){
        echo $Categorias[$i][0];
    }
}
