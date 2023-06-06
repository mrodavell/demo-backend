<?php

include_once('db.php');
include_once('request.php');
include('cors.php');

$requestType = $_SERVER['REQUEST_METHOD'];

if (!check("POST", $requestType)) {
    echo "Error: 403 Forbidden Access";
    exit();
}
 
$data = json_decode(file_get_contents('php://input'), true);
var_dump($data);