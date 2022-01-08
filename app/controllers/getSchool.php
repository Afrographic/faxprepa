<?php
include_once dirname(__FILE__) . '/../services/schoolEngine.php';


if (isset($_GET['offset'])) {
    $offset = $_GET['offset'];
    $schools = getSchool($offset);
    echo json_encode($schools);
} else {
    $res['status'] = 404;
    echo json_encode($res);
}
