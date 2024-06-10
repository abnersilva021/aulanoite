<?php

$nome = "abner";
$anoNasc = 2010;
$idade = 2024 - $anoNasc;
$peso = 69.6;
$altura= 1.84;
$imc = $peso / pow($altura,2);
$ehCasado = true;
$op;
if($idade>=18){
    echo"$nome vc é maior de idade!<br>";
}else{
    echo"$nome vc é menor de idade ta chupando bala!<br>";
}

if($imc <18.5){
    echo"$nome vc é magrão!";
}else if($imc >= 18.5 && $imc <= 24.9){
    echo"$nome voce ta perfeito";

}else if($imc >= 25 && $imc <= 29.9){
    echo"$nome para de comer gordo(a)!";
}else if($imc >= 30 && $imc <= 34.9){
    echo"$nome vc ta virado um porco!";
}else if($imc >= 35 && $imc <= 39.9){
    echo"$nome ta com muita banha!";
}else{
    echo"$nome ta na hora da carneamento!";
}
$op = 2;
switch($op){
    case 1:
        echo "<br>Domingo";
        break;
    case 2:
        echo "<br>Segunda";
        break;
    case 3:
        echo"<br>Terça";
        break;
    case 4:
        echo"<br>Quarta";
        break;
    case 5:
        echo"<br>Quinta";
        break;
    case 6:
        echo"<br>Sexta";
        break;
    case 7:
        echo"<br>Sábado";
        break;
    default:
    echo"<br>Dia da semana inválida!";
}


echo "<br>Nome: $nome<br>";
echo "Nascido em $anoNasc<br>";
echo "$nome tem $idade anos de idade";
