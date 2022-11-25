<?php
// $action :variable d'aiguillage
$action = $_REQUEST['action'];
switch ($action) {
    case 'profile': {
            $id = $_SESSION['session']['id'];
            $laLigne = $pdo->getVisiteur($id);
            include('Vues/v_account.php');
            break;
        }
    case 'confirmModification': {
            $id = $_SESSION['session']['id'];
            $nom = $_REQUEST['nomvisiteur'];
            $prenom = $_REQUEST['prenomvisiteur'];
            $mail = $_REQUEST['mailvisiteur'];
            $telephone = $_REQUEST['numtelephonevisiteur'];
            $marche = $_REQUEST['vitessemarche'];
            $pdo->modifierVisiteur($id, $nom, $prenom, $mail, $telephone, $marche);

            $laLigne = $pdo->getVisiteur($id);
            include('Vues/v_account.php');
            break;
        }
    case 'programme': {
            include('essai_parcours.php');
            break;
        }
}