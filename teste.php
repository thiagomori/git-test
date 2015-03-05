<?php
    $x=5;
    $y=5;
    
    <?php include "operacoes.php" ?>
    function imprime_resultado($resultado) {
    echo "O resultado : ".$resultado;
    $resultado = soma($x, $y);
    imprime_resultado($resultado);


?>
