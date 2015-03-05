<?php
  echo '
      <!DOCTYPE html>
      <html>
        <head>
            <title>EXERCICIO 5.1</title>
            <meta charset="UTF-8">
        </head>
        <body>
            Tabela</br>';
            $i=0;
            $linha[1][1] = '02K01';
            $linha[1][2] = 'Tecnologia Web II';
            $linha[1][3] = 'Segunda';
            $linha[1][4] = 'Charles';
            $linha[2][1] = '02J01';
            $linha[2][2] = 'Linguagem de Programacao I';
            $linha[2][3] = 'Terça';
            $linha[2][4] = 'João';
            $linha[3][1] = '02K01';
            $linha[3][2] = 'Linguagem de Programacao I';
            $linha[3][3] = 'Quarta';
            $linha[3][4] = 'Charles';
                for($i = 0;$i <= 3; $i++)   {
                    if($i==0){
                        echo '<style type="text/css">
                            table, td, th
                            {
                            border: 2px solid black;
                            }
                            </style>  
                           <table>
                               <tr>
                                   <td><B>Turma</B></td>
                                   <td><B>Disciplina</B></td>
                                   <td><B>Semana</B></td>
                                   <td><B>Professor</B></td>
                               </tr>';
                        }
        else {
            echo '<tr>';
            for($j = 1;$j <= 4; $j++){
                echo '<td>'.$linha[$i][$j].'</td>';
            }
            echo '</tr>';
        }
    }
            echo '</table>
            <hr>
        </body>
    </html>'; 
?>