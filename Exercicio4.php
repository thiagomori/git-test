Exercicio 1
<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">.cinza{background:gray}</style>  
        <meta charset="utf-8">
    </head>
        <body>
            <table border="1px">
                <tr>    
                    <td>ID</td>
                    <td>NOME</td>
                    <td>DESC</td>
                </tr>
                <?php
                    for($i=1;$i<8;$i++){
                        if($i%2==0){
                           echo'<tr>    
                                <td class="cinza">id</td>
                                <td class="cinza">nome</td>
                                <td class="cinza">desc</td>
                                </tr>';
                           
                        } else {
                            echo'<tr>    
                                 <td>id</td>
                                 <td>nome</td>
                                 <td>desc</td>
                                 </tr>';
                        }
                    }
                ?>
            </table>
        </body>  
</html>

<hr></hr>

exercicio 2

<?php
    $num=2;
    $cont=0;
    for($i=1;$i<=$num;$i++)
    {
        if($num % $i==0){
        $cont=$cont+1; }
    }
        if($cont==2){
            echo"<b>Este número é primo</b>";
        }
        else{
            echo"<b>Não é primo</b>"; }  
?>
<hr></hr>

exercicio 3

<?php
     $n=8;
     $ant=0;
     $result=1;
     $aux=0;
        if($n==1){
          $result=0;
          echo $result;
        }
        else{
        for($cont=1;$cont<$n;$cont++)
        {
          echo $ant;
          $aux=$ant+$result;
          $ant=$result;
          $result=$aux;
        }
        }
        echo $ant;
  
?>
