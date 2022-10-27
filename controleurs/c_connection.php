<?php
// $action :variable d'aiguillage
$action = $_REQUEST['action'];
switch ($action) {
    case 'seConnecter': {
            if (!$_SESSION['session']) {
                $mail = null;
                $password = null;
                include('Vues/v_seconnecter.php');
                break;
            } else {
                include('Vues/v_account.php');
            }
        }
    case 'confirmConnection': {
            $mail = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            if (isset($mail) && isset($password)) {
                $account = $pdo->accountExist($mail, $password);
                if (!empty($account)) {
                    $id = $account['Id_Visiteur'];
                    $pdo->createSession($id, $mail);
                    include('Vues/v_account.php');
                    $type = "success";
                    $message = "Vous êtes connecté !";
                    include('Vues/v_message.php');
                } else {
                    include("Vues/v_seconnecter.php");
                    $type = "error";
                    $message = "Identifiants incorrects.";
                    include('Vues/v_message.php');
                }
            } else {
            }
            break;
        }
    case 'deconnexion': {
            if ($pdo->isConnected()) {
                $pdo->disconnectSession();
                $mail = null;
                $password = null;
                include("Vues/v_seconnecter.php");
                break;
            }
        }
    case 'confirmInscription': {
            if (isset($_POST['create'])) {
                $nom = $_REQUEST['nomS'];
                $prenom = $_REQUEST['prenomS'];
                $mail = $_REQUEST['mailS'];
                $password = $_REQUEST['passwordS'];
                $result = $pdo->creerVisiteur($nom, $prenom, $mail, $password);
                include('Vues/v_seconnecter.php');
            }
            break;
        }
}