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
    } else {
        echo json_encode([
            'passworderr' => 'password cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['newPassword'])) {
        $newPassword = $dbc->test_input($_POST['newPassword']);
        $hash = password_hash($newPassword, PASSWORD_DEFAULT);
    } else {
        echo json_encode([
            'newPassworderr' => 'password cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['ConfPassword'])) {
        $ConfPassword = $dbc->test_input($_POST['ConfPassword']);
    } else {
        echo json_encode([
            'Confpassworderr' => 'password cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['table'])) {
        $table = $dbc->test_input($_POST['table']);
    } else {
        echo json_encode([
            'tableerr' => 'table cannot be empty',
            'status' => 403
        ]);
        die();
    }


    if ($newPassword !== $ConfPassword) {
        echo json_encode([
            'Confpassworderr' => 'passwords donot match',
            'status' => 403
        ]);
        die();
    } else {
        $result = $dbc->updatePassword($table, $hash, $uid);
        if ($result) {
            echo json_encode([
                'result' => 'successful',
                'status' => '200'
            ]);        
        } else {
            echo json_encode([
                'result' => 'Something went wrong',
                'status' => '200'
            ]);        
        }
        
    }
    
} else {
    echo json_encode([
        'message' => 'wrong method passed',
        'status' => '200'
    ]);
}

