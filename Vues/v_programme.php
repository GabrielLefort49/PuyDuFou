<?php
// inclusion des vues footer et header
include("Vues/v_entete.php");
?>

<div class="wrapper-profile">
    <div class="sidebar">
        <h3><?= $_SESSION['session']['prenomvisiteur'] ?></h3>
        <ul>
            <li><a href="index.php?uc=account&action=profile"><i class="fa-solid fa-user"></i> Profile</a></li>
            <li><a href="index.php?uc=account&action=programme"><i class="fas fa-blog"></i>Programme</a></li>
            <li><a href="index.php?uc=connection&action=deconnexion"><i class="fas fa-map-pin"></i>Deconnection</a></li>
        </ul>
    </div>
</div>