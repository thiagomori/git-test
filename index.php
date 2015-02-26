<?php

$p1=10;
$m1=10;
$m2=10;
$proj1=10;
$proj2=10;
$proj3=10;
$proj4=10;
$trabF=10;
$proc=10;
$pf=10;

$MI = (30*$p1 + 10*$m1 + 10*$m2 + 5*$proj1 + 5*$proj2 + 5*$proj3 +5*$proj4 + 10*$trabF + 20*$proc)/100;
        
if($MI>=7.5){
        $MF=$MI;
        echo"Aprovado sem Prova Final<br>";
echo"Parabéns!!! Boas férias<br>";}
else{ 
    $MF=($MI+$pf)/2;

    if($MF>=5.0){
        echo"Aprovado com Prova Final";
        echo"Agora já pode descansar tranquilo";
        

}
    if($MF<5.0){
        echo"Reprovado";
        echo"Não foi dessa vez. Ano que vem tem mais TWII";
        echo"Media Intermediaria:" + $MI;
    echo"Media Final:"+ $MF;}
        
    }

?>
