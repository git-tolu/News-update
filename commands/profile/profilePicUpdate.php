<?php
include "../models/apipost.php";
include "../models/dbc.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
    $sess = $_SESSION['ourUser'];
    $sessionSelect = $dbc->sessionSelect($sess);
    $uid = $sessionSelect['id'];

    if ($dbc->validateInput($_FILES['profilePic']['name'])) {
        $profilePic = $dbc->test_input($_FILES['profilePic']['name']);
        $folder = '../profilepic/';
        $newImage =  time() . '_' . rand(500000, 500000000000) . $profilePic;
        move_uploaded_file($_FILES['profilePic']['tmp_name'], $folder . $newImage);
        $result = $dbc->updateProfilePic($newImage, $uid);
        if ($result) {
            echo json_encode([
                'result' => 'successful',
                'status' => '200'
            ]);
            die();
        }
        else {
            echo json_encode([
                'resulterr' => 'Something went wrong',
                'status' => '200'
            ]);
            die();
        }
    }else {
        echo json_encode([
            'profilePicerr' => 'password cannot be empty',
            'status' => 403
        ]);
        die();
    }


} else {
    echo json_encode([
        'message' => 'wrong method passed',
        'status' => '200'
    ]);
}
