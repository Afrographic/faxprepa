<?php
include_once dirname(__FILE__) . '/../services/schoolEngine.php';
$schools = getSchool(0);
echo json_encode($schools);
