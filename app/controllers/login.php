
<?php
include_once dirname(__FILE__) . '/../services/schoolEngine.php';
if (isset($_POST['name']) && isset($_POST['mdp'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mdp = mysqli_real_escape_string($con, $_POST['mdp']);
    $res = login($name, $mdp);
    if (!$res) {
        $res["status"] = 200;
        $res["schoolData"] = $schoolData;
    } else {
        $res["status"] = 404;
    }

    echo json_encode($res);
}
