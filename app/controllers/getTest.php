<?php
include_once dirname(__FILE__) . '/../services/epreuveEngine.php';

if (isset($_GET['idSchool'])) {
    $idSchool = $_GET['idSchool'];
    $tests = getEpreuve($idSchool);
    echo json_encode($tests);
} else {
    $res['status'] = 404;
    echo json_encode($res);
}
