<?php
include_once dirname(__FILE__) . '/../services/schoolEngine.php';

if (isset($_POST['name']) && isset($_POST['mdp']) && isset($_FILES['logo']) && isset($_POST['pseudo'])) {
    // Serialising the name
    $name = $_POST['name'];
    $mdp = $_POST['mdp'];
    $pseudo = $_POST['pseudo'];

    // Saving the school to the database
    $dbImagePath = 'images/logoEcole/' . $_FILES['logo']['name'];
    $inserted = createSchool($name, $mdp, $dbImagePath, $pseudo);
    if ($inserted) {
        // upload the image to the server
        $tempLogoPath =  $_FILES['logo']['tmp_name'];
        $destFolder = '../../images/logoEcole/' . $_FILES['logo']['name'];
        move_uploaded_file($tempLogoPath, $destFolder);

        // Get the information of the connected user
        $schoolData = login($pseudo, $mdp);
        $res["status"] = 200;
        $res["schoolData"] = $schoolData;
    } else {
        $res["status"] = 404;
        $res["schoolData"] = "An error Occured!";
    }

    echo json_encode($res);
}
