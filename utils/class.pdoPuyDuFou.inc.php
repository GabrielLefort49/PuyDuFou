<?php

/** 
 * Classe d'accès aux données. 
 * Utilise les services de la classe PDO
 * pour l'application JardiPlants
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
 */

class PdoPuyDuFou
{
    private static $serveur = 'mysql:host=db672809286.db.1and1.com';
    private static $bdd = 'dbname=db672809286';
    private static $user = 'dbo672809286';
    private static $mdp = 'BMw1234*';
    private static $monPdo;
    private static $monPdoPuyDuFou = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct()
    {
        PdoPuyDuFou::$monPdo = new PDO(PdoPuyDuFou::$serveur . ';' . PdoPuyDuFou::$bdd, PdoPuyDuFou::$user, PdoPuyDuFou::$mdp);
        PdoPuyDuFou::$monPdo->query("SET CHARACTER SET utf8");
    }
    public function _destruct()
    {
        PdoPuyDuFou::$monPdo = null;
    }
    /**
     * Fonction statique qui crée l'unique instance de la classe
     *
     * Appel : $instancePdoPuyDuFou = PdoPuyDuFou::getPdoPuyDuFou();
     * return l'unique objet de la classe PdoPuyDuFou
     */
    public  static function getPdoPuyDuFou()
    {
        if (PdoPuyDuFou::$monPdoPuyDuFou == null) {
            PdoPuyDuFou::$monPdoPuyDuFou = new PdoPuyDuFou();
        }
        return PdoPuyDuFou::$monPdoPuyDuFou;
    }
    /**
     * Retourne tous les spéctacles sous forme d'un tableau associatif
     *
     * return le tableau associatif des spéctacles 
     */
    public function getLesSpectacles()
    {
        $req = "SELECT * FROM `Spectacle`";
        $res = PdoPuyDuFou::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }

    /**
     * fonction qui prend et compte l'utilisateur que l'on demande
     *
     * 
     */
    public function accountExist($mail, $password)
    {
        $res = PdoPuyDuFou::$monPdo->prepare("SELECT * FROM visiteur WHERE mailvisiteur = :mail LIMIT 1");
        $res->bindValue('mail', $mail);
        $res->execute();
        $account = $res->fetch();
        if (!empty($account)) {
            if (password_verify($password, $account["Password"])) {
                return $account;
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    /**
     * Créer un Visiteur
     *
     * Créer un client à partir des arguments validés passés en paramètres
     */
    public function creerVisiteur($nom, $prenom, $mail, $passwordHashed)
    {
        $res = PdoPuyDuFou::$monPdo->prepare('INSERT INTO visiteur (nomvisiteur, 
			prenomvisiteur, mailvisiteur, Password) VALUES( :nom, 
			:prenom, :mail, :password)');
        $res->bindValue('nom', $nom);
        $res->bindValue('prenom', $prenom);
        $res->bindValue('mail', $mail);
        $res->bindValue('password', $passwordHashed);
        $res->execute();
    }

    public function modifierVisiteur($id, $nom, $prenom, $mail, $telephone, $vitesse)
    {
        $res = PdoPuyDuFou::$monPdo-> prepare('UPDATE visiteur SET nomvisiteur = :nom, prenomvisiteur = :prenom,
        mailvisiteur = :mail, numtelephonevisiteur = :telephone, vitessemarche = :vitesse WHERE Id_Visiteur = :id');
        $res->bindValue('id',$id);
        $res->bindValue('nom',$nom);
        $res->bindValue('prenom', $prenom);
        $res->bindValue('mail',$mail);
        $res->bindValue('telephone', $telephone);
        $res->bindValue('vitesse',$vitesse);

        $res -> execute();
    }

    public function createSession($id, $mail, $nom, $prenom, $telephone)
    {
        $account = [
            "id" => $id,
            "mailvisiteur" => $mail,
            "nomvisiteur" => $nom,
            "prenomvisiteur" => $prenom,
            "numtelephonevisiteur" => $telephone,
            "vitessemarche" => $vitesse
        ];
        $_SESSION["session"] = $account;
    }

    public function isConnected()
    {
        if (isset($_SESSION["session"])) {
            return true;
        } else {
            return false;
        }
    }

    public function disconnectSession()
    {
        $_SESSION["session"] = null;
    }
}