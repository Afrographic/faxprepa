<?php
include_once dirname(__FILE__) . '/../services/schoolEngine.php';


if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $schools = searchSchool($token);
    echo json_encode($schools);
} else {
    $res['status'] = 404;
    echo json_encode($res);
}
