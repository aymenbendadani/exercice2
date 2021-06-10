<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <?php
    $csv = array();
    $lines = file('BD21.csv');

    foreach ($lines as $key => $value)
{
        $csv[$key] = str_getcsv($value);
        
}
sort($csv);


    

    ?> 
    <div class="span3">
                
         
    
    <table>
            <tr>
            <td>
                <h3> </h3>
                <table border=10>
                    <tr><td>Nom</td><td>Prenom</td><td>Date de naissance </td><td>Poids</td><td>Taille</td><td>Option bac </td><td>Moyenne </td><td>Photo</td></tr>
                    <?php for ($x=0; $x<count($csv);$x++){?>
    
    
                    <tr><td><?php echo $csv[$x][0] ?></td><td><?php echo $csv[$x][1] ?></td><td><?php echo $csv[$x][2] ?></td><td><?php echo $csv[$x][3] ?></td><td><?php echo $csv[$x][4] ?></td><td><?php echo $csv[$x][5] ?></td><td><?php echo $csv[$x][6] ?></td><td><?php echo '<img src='.$csv[$x][7].' width=\"70\" height=\"70\">'; ?></td></tr>
                    
                    <?php }
                    ?>
                </table>
            </td>
            </tr>
        </table>  
        </div>         
    
  </body>
