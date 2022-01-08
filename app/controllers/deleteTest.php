<?php
include_once dirname(__FILE__) . '/../services/epreuveEngine.php';


if (isset($_GET['idTest'])) {
    $idTest = $_GET['idTest'];
    deleteTest($idTest);
    $res["status"] = 200;
    $res["data"] = "Deleted";
    echo json_encode($res);
} else {
    $res['status'] = 404;
    echo json_encode($res);
}
