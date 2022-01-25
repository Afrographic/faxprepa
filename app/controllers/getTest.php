<?php
include_once dirname(__FILE__) . '/../services/epreuveEngine.php';

// get all the for a school
if (isset($_GET['idSchool'])) {
    $idSchool = $_GET['idSchool'];
    $tests = getEpreuve($idSchool);
    echo json_encode($tests);
}


// search school
if (isset($_POST["idSchool"]) && isset($_POST["idFiliere"]) && isset($_POST["annee"]) && isset($_POST["niveau"])) {
    $idSchool = $_POST["idSchool"];
    $idFiliere = $_POST["idFiliere"];
    $annee = $_POST["annee"];
    $niveau = $_POST["niveau"];

    $tests = searchEpreuve($idSchool, $idFiliere, $annee, $niveau);
    echo json_encode($tests);
}
