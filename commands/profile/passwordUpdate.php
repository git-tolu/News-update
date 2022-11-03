<?php

include "../models/apipost.php";
include "../models/dbc.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
    $sess = $_SESSION['ourUser'];
    $sessionSelect = $dbc->sessionSelect($sess);
    $uid = $sessionSelect['id'];
    // echo json_encode([
    //     'message' => $uid,
    //     'status' => 403
    // ]);

    if ($dbc->validateInput($_POST['oldPassword'])) {
        $oldPassword = $dbc->test_input($_POST['oldPassword']);
        if (!password_verify($oldPassword, $sessionSelect['userPassword'])) {
            echo json_encode([
                'oldPassworderr' => 'This is not your current password',
                'status' => 403
            ]);
            die();
        }
    }
    else {
        echo json_encode([
            'oldPassworderr' => 'password cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['newPassword'])) {
        $newPassword = $dbc->test_input($_POST['newPassword']);
        $hash = password_hash($newPassword, PASSWORD_DEFAULT);
        if ($dbc->passwordRegex($newPassword)) {
            echo json_encode([
                'newPassworderr' => $dbc->passwordRegex($newPassword),
                'status' => 403
            ]);
            die();
        }

    }
    else {
        echo json_encode([
            'newPassworderr' => 'password cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['ConfPassword'])) {
        $ConfPassword = $dbc->test_input($_POST['ConfPassword']);
        if ($dbc->passwordRegex($ConfPassword)) {
            echo json_encode([
                'Confpassworderr' => $dbc->passwordRegex($ConfPassword),
                'status' => 403
            ]);
            die();
        }
    }else {
        echo json_encode([
            'Confpassworderr' => 'password cannot be empty',
            'status' => 403
        ]);
        die();
    }

    // if ($dbc->validateInput($_POST['table'])) {
    //     $table = $dbc->test_input($_POST['table']);
    // }
    // else {
    //     echo json_encode([
    //         'tableerr' => 'table cannot be empty',
    //         'status' => 403
    //     ]);
    //     die();
    // }


    if ($newPassword !== $ConfPassword) {
        echo json_encode([
            'Confpassworderr' => 'passwords do not match',
            'status' => 403
        ]);
        die();
    }else {
        $result = $dbc->updatePassword($hash, $uid);
        if ($result) {
            echo json_encode([
                'result' => 'successful',
                'status' => '200'
            ]);
            die();
        }
        else {
            echo json_encode([
                'result' => 'Something went wrong',
                'status' => '200'
            ]);
            die();
        }

    }

}else {
    echo json_encode([
        'message' => 'wrong method passed',
        'status' => '200'
    ]);
}