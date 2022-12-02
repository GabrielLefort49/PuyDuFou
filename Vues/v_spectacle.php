<table>
    <tr>
        <th>Numéro</th>
        <th>Spectacle</th>
        <th>Duree d'Attente</th>
    </tr>
    
<?php

foreach($spectacles as $spectacle) {
	$numero = $spectacle['Id_Spectacle'];
    $nomspectacle = $spectacle['nomspectacle'];
    $dattente = $spectacle['dureeattente'];?>
    <tr><td><?php echo $numero?></td>
    <td><?php echo $nomspectacle?></td>
    <td><?php echo $dattente?></td></tr><?php
    ?>
    <?php
    }

?>

    
</table>
        
