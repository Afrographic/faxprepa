<?php
include_once dirname(__FILE__) . '/../services/epreuveEngine.php';
if (isset($_POST['name']) && isset($_POST['annee']) && isset($_POST['taille']) && isset($_POST['idEcole']) && isset($_POST['idTypeEpreuve']) && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $name = $_POST['name'];
    $annee = $_POST['annee'];
    $taille = $_POST['taille'];
    $idEcole = $_POST['idEcole'];
    $idTypeEpreuve = $_POST['idTypeEpreuve'];
    $niveau = $_POST['niveau'];
    $idFiliere = $_POST['idFiliere'];


    // file db path
    $path = 'data/subjects/' . $file['name'];
    createEpreuve($name, $annee, $taille, $idEcole, $idTypeEpreuve, $path, $niveau, $idFiliere);

    // upload the file to the server
    $tempFilePath =  $file['tmp_name'];
    $destFolder = '../../data/subjects/' . $file['name'];
    move_uploaded_file($tempFilePath, $destFolder);

    // return the response
    $res["status"] = 200;
    $res["data"] = true;
    echo json_encode($res);
}
