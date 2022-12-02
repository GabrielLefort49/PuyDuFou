<?Php
$action = $_REQUEST['action'];
switch ($action) {
    case 'actuday': {
            $dates = $pdo->getLesActudays();
            include('Vues/v_actuday.php');
            break;
        }
}