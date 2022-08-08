<?php
require "../models/apipost.php";
require "../models/dbc.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {

    if ($dbc->validateInput($_POST['userName'])) {
        $userName = $dbc->test_input($_POST['userName']);
    } else {
        http_response_code(403);
        echo json_encode([
            'nameerr' => 'name cannot be empty',
            'status' => 403
        ]);
        die();
    }

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
        $hash = password_hash($userPassword, PASSWORD_DEFAULT);
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

    if ($dbc->validateInput($_POST['userConfirmPassword'])) {
        $userConfirmPassword = $dbc->test_input($_POST['userConfirmPassword']);
        if ($dbc->passwordRegex($userConfirmPassword)) {
            http_response_code(403);
            echo json_encode([
                'confirmPassworderr' => $dbc->passwordRegex($userConfirmPassword),
                'status' => 403
            ]);
            die();
        }
    } else {
        http_response_code(403);
        echo json_encode([
            'confirmPassworderr' => 'Confirm password cannot be empty',
            'status' => 403
        ]);
        die();
    }


    if ($dbc->emailCheck($userEmail)) {
        http_response_code(403);
        echo json_encode([
            'emailerr' => 'email already exists',
            'status' => 403
        ]);
        die();
    } else {
        if ($userPassword !== $userConfirmPassword) {
            http_response_code(403);
            echo json_encode([
                'confirmPassworderr' => 'Passwords do not match',
                'status' => 403
            ]);
            die();
        } else {
            if (!empty($userName) && !empty($userEmail) && !empty($userPassword) && !empty($userConfirmPassword)) {
                $result = $dbc->registerUser($userName, $userEmail, $hash);
                if ($result) {
                    http_response_code(200);
                    echo json_encode([
                        'result' => 'Successfull',
                        'status' => 200
                    ]);
                    die();
                    $_SESSION['user'] = $userEmail;
                } else {
                    http_response_code(403);
                    echo json_encode([
                        'resulterr' => 'Sorry something went wrong',
                        'status' => 403
                    ]);
                    die();
                }
            }
        }
    }
} else {
    echo json_encode([
        'message' => "wrong method passed",
        'status' => 405
    ]);
    die(header('HTTP/1.1 405 Request method not allowed'));
}
