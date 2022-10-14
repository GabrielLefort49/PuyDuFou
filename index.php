<?php
// inclusion en une seule fois du fichier des fonctions et du modèle
require_once("utils/class.pdoPuyDuFou.inc.php");
require_once("utils/functions.inc.php");
// inclusion des vues footer et header
include("vues/v_footer.php");
include("vues/v_header.php");


if (!isset($_REQUEST['uc']))
    $uc = 'accueil';
else
    $uc = $_REQUEST['uc'];

// On fait un appel à l'instance de la class PdoPuyDuFou
$pdo = PdoPuyDuFou::getPdoPuyDuFou();

//Switch pour récuperer la valeur du uc dans l'url
switch ($uc) {
    case 'accueil': {
            include("vues/v_accueil.php");
            break;
        }
}