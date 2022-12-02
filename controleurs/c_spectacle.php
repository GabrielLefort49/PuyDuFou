<?php
$action = $_REQUEST['action'];
switch ($action) {
    case 'spectacle': {
            $spectacles = $pdo->getLesSpectacles();
            include('Vues/v_spectacle.php');
            break;
        }
}
