<?php
require "../models/apipost.php";
require "../models/dbc.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {

    if ($dbc->validateInput($_POST['userName'])) {
        $userName = $dbc->test_input($_POST['userName']);
        echo json_encode([
            'message' => $userName,
            'status' => 200
        ]);

    } else {
        http_response_code(403);
        echo json_encode([
            'message' => 'name cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['userEmail'])) {
        $userEmail = $dbc->test_input($_POST['userEmail']);
    } else {
        http_response_code(403);
        echo json_encode([
            'message' => 'email cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['userPassword'])) {
        $userPassword = $dbc->test_input($_POST['userPassword']);
    } else {
        http_response_code(403);
        echo json_encode([
            'message' => 'password cannot be empty',
            'status' => 403
        ]);
        die();
    }
} else {
    echo json_encode([
        'message' => "wrong method passed",
        'status' => 405
    ]);
    die(header('HTTP/1.1 405 Request method not allowed'));
}
