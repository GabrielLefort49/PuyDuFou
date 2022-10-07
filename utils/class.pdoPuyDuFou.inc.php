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
     * @return l'unique objet de la classe PdoJardiPlants
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
     * @return le tableau associatif des spéctacles 
     */
    public function getLesSpectacles()
    {
        $req = "SELECT * FROM `Spectacle`";
        $res = PdoPuyDuFou::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }
}