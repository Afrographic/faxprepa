<?php
include_once dirname(__FILE__) . '/../services/schoolEngine.php';

if (isset($_POST['name']) && isset($_POST['mdp']) && isset($_FILES['logo'])) {
    // Serialising the name
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mdp = mysqli_real_escape_string($con, $_POST['mdp']);

    // Saving the school to the database
    $dbImagePath = 'images/logoEcole/' . $_FILES['logo']['name'];
    $inserted = createSchool($name, $mdp, $dbImagePath);
    if ($inserted) {
        // upload the image to the server
        $tempLogoPath =  $_FILES['logo']['tmp_name'];
        $destFolder = '../../images/logoEcole/' . $_FILES['logo']['name'];
        move_uploaded_file($tempLogoPath, $destFolder);

        // Get the information of the connected user
        $schoolData = login($name, $mdp);
        $res["status"] = 200;
        $res["schoolData"] = $schoolData;
    } else {
        $res["status"] = 404;
        $res["schoolData"] = "An error Occured!";
    }

    echo json_encode($res);
}
