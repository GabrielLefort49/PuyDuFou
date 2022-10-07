<?php
// inclusion en une seule fois du fichier des fonctions et du modèle
require_once("utils/class.pdoPuyDuFou.inc.php");
// inclusion des vues
include("vues/v_footer.php");
include("vues/v_header.php");

$pdo = PdoPuyDuFou::getPdoPuyDuFou();
echo'test with my pc';