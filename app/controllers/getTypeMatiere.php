<?php
include_once dirname(__FILE__) . '/../services/typeEpreuve.php';
$typeExam = getTypeEpreuve();
echo json_encode($typeExam);
