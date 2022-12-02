<table>
    <tr>
        <th>Date</th>
        <th>Heure d'ouverture</th>
        <th>Heure de Fermeture</th>
    </tr>
<?php
if (is_array($dates)){
foreach($dates as $date) {
	$dateP = $date['Dateparc'];
    $houverture = $date['houverture'];
    $hfermeture = $date['hfermeture'];
    ?>
    <tr>
        <td><?php echo $dateP?></td>
        <td><?php echo $houverture?></td>
        <td><?php echo $hfermeture?></td>
    </tr>
    <?php
    }
}
?>
</table>
        
