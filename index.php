<?php
// inclusion en une seule fois du fichier des fonctions et du modèle
require_once("utils/class.pdoPuyDuFou.inc.php");
require_once("utils/functions.inc.php");
// inclusion des vues footer et header
include("Vues/v_entete.php");
include("Vues/v_header.php");


if (!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

// On fait un appel à l'instance de la class PdoPuyDuFou
$pdo = PdoPuyDuFou::getPdoPuyDuFou();

//Switch pour récuperer la valeur du uc dans l'url
switch ($uc) {
    case 'accueil': {
            include("Vues/v_accueil.php");
            echo 'test';
            break;
        }
}
include("Vues/v_footer.php");