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