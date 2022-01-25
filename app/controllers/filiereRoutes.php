<?php
include_once dirname(__FILE__) . '/../services/filiereEngine.php';
// getting all ths faculties
if (isset($_GET["idSchool"])) {
    $idSchool = $_GET["idSchool"];
    $filieres = getFiliere($idSchool);
    echo json_encode($filieres);
}

// saving a filiere
if (isset($_POST["label"]) && isset($_POST["idSchool"])) {
    $label = $_POST["label"];
    $idSchool = $_POST["idSchool"];
    $res = createFiliere($idSchool, $label);
    echo json_encode($res);
}
