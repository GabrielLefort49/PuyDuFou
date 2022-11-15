<?php
// $action :variable d'aiguillage
$action = $_REQUEST['action'];
switch ($action) {
    case 'profile': {
            include('Vues/v_account.php');
        }
}