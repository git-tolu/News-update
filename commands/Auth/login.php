<?php
require "../models/apipost.php";
require "../models/dbc.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
    if ($dbc->validateInput($_POST['userEmail'])) {
        $userEmail = $dbc->test_input($_POST['userEmail']);
    } else {
        echo json_encode([
            'emailerr' => 'email cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['userPassword'])) {
        $userPassword = $dbc->test_input($_POST['userPassword']);
        if ($dbc->passwordRegex($userPassword)) {
                echo json_encode([
                'passworderr' => $dbc->passwordRegex($userPassword),
                'status' => 403
            ]);
            die();
        }
    } else {
        echo json_encode([
            'passworderr' => 'password cannot be empty',
            'status' => 403
        ]);
        die();
    }

    $login = $dbc->login($userEmail);

    if ($login != null) {
        if (password_verify($userPassword, $login['userPassword'])) {
            $_SESSION['ourUser'] = $userEmail;
            $_SESSION['status'] = $login['status'];
            echo json_encode([
                'login' => 'Successful',
                'status' => 200
            ]);
            die();
        } else {
            echo json_encode([
                'loginerr' => 'invalid password',
                'status' => 400
            ]);
            die();
        }
    } else {
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
