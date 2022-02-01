<?php
include_once dirname(__FILE__) . '/../services/studentEngine.php';
// creating the user

if (isset($_POST['email']) && isset($_POST['mdp'])  && isset($_POST['pseudo'])) {
    // Serialising the name
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $pseudo = $_POST['pseudo'];

    // Saving the school to the database
    $dbImagePath = "";
    if (isset($_FILES['profile'])) {
        $dbImagePath = 'images/profile/' . $_FILES['profile']['name'];
    }
    $inserted = createStudent($dbImagePath, $pseudo, $email, $mdp);
    if ($inserted) {
        if (isset($_FILES['profile'])) {
            // upload the image to the server
            $tempLogoPath =  $_FILES['logo']['tmp_name'];
            $destFolder = '../../images/profile/' . $_FILES['profile']['name'];
            move_uploaded_file($tempLogoPath, $destFolder);
        }

        // Get the information of the connected user
        $studentData = login($pseudo, $mdp);
        $res["status"] = 200;
        $res["studentData"] = $studentData;
    } else {
        $res["status"] = 404;
        $res["studentData"] = "An error Occured!";
    }

    echo json_encode($res);
}
