<?php
// $action :variable d'aiguillage
$action = $_REQUEST['action'];
switch ($action) {
    case 'seConnecter': {
            if (!$_SESSION['session']) {
                $mail = null;
                $password = null;
                include('Vues/v_seconnecter.php');
            } else {
                include('Vues/v_account.php');
            }
            break;
        }
    case 'confirmConnection': {
            $mail = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            if (isset($mail) && isset($password)) {
                $account = $pdo->accountExist($mail, $password);
                if (!empty($account)) {
                    $id = $account['Id_Visiteur'];
                    $mail = $account['mailvisiteur'];
                    $password = $account['Password'];
                    $nom = $account['nomvisiteur'];
                    $pdo->createSession($id, $mail, $nom);
                    header('Location: index.php?uc=account&action=profile');
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
                $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
                $result = $pdo->creerVisiteur($nom, $prenom, $mail, $passwordHashed);
                include('Vues/v_seconnecter.php');
                $type = "success";
                $message = "Vous êtes maintenant incrit !";
                include('Vues/v_message.php');
            }
            break;
        }
}