<?php
// $action :variable d'aiguillage
$action = $_REQUEST['action'];
switch ($action) {
    case 'profile': {
            include('Vues/v_account.php');
        }
    case 'confirmModification': {
        $idVisiteur = $_SESSION['session']['id'];
        $nomVisiteur = $_SESSION['session']['nomvisiteur'];
        $prenomVisiteur = $_SESSION['session']['prenomvisiteur'];
        $mail = $_SESSION['session']['mailvisiteur'];
        $telephone = $_SESSION['session']['numtelephonevisiteur'];
        $vitessemarche = $_SESSION['session']['vitessemarche'];

        $pdo->modifierVisiteur($idVisiteur, $nomVisiteur, $prenomVisiteur, $mail, $telephone, $vitessemarche);

        header('Location: index.php?uc=account&action=profile');
        }
}