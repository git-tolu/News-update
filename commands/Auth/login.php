<?php
require "../models/apipost.php";
require "../models/dbc.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
    if ($dbc->validateInput($_POST['userEmail'])) {
        $userEmail = $dbc->test_input($_POST['userEmail']);
    } else {
        http_response_code(403);
        echo json_encode([
            'emailerr' => 'email cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['userPassword'])) {
        $userPassword = $dbc->test_input($_POST['userPassword']);
        if ($dbc->passwordRegex($userPassword)) {
            http_response_code(403);
            echo json_encode([
                'passworderr' => $dbc->passwordRegex($userPassword),
                'status' => 403
            ]);
            die();
        }
    } else {
        http_response_code(403);
        echo json_encode([
            'passworderr' => 'password cannot be empty',
            'status' => 403
        ]);
        die();
    }

    $login = $dbc->login($userEmail);

    if ($login != null) {
        if (password_verify($userPassword, $login['userPassword'])) {
            http_response_code(200);
            echo json_encode([
                'login' => 'Successful',
                'status' => 200
            ]);
            die();
            $_SESSION['ourUser'] = $email;
        } else {
            http_response_code(400);
            echo json_encode([
                'loginerr' => 'invalid password',
                'status' => 400
            ]);
            die();
        }
    } else {
        http_response_code(400);
        echo json_encode([
            'loginerr' => 'User not found',
            'status' => 400
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
