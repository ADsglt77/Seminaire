<?php
include "./fonctions/fonctionsAccesDonnees.php";
include "./fonctions/fonctionsGestion.php";

if (isset($_SESSION['admin']) || estInscrit()) {
    echo "Vous êtes connecté";
} else {
    echo "Erreur : Veuillez vous inscrire.";
    echo "<br>";
    echo "<td><a href='./?action=inscription'>S'inscrire</a></td>";
    exit;  
}


$heures = donnerLesHeuresCreneaux();
$conferencesParHeure = array();
    foreach ($heures as $heure) {
        $conferencesParHeure[$heure] = donnerLesConferences($heure);
    }

$btn = "choixconferences";
if (isset($_POST["btn"])){
    $btn = $_POST["btn"];
    $lesChoix = $_POST;
}

switch ($btn) {
    case "valider":
        print_r($_REQUEST);
        enregistre($lesChoix);
        echo "Vos choix sont enregistrés";
    case "annuler":
        break;
}   
include "./vue/vueChoixconferences.php";

?>