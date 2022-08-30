<?php
require_once "../models/apipost.php";
require_once "../models/dbc.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
    $sess = $_SESSION['ourUser'];
    $sessionSelect = $dbc->sessionSelect($sess);
    $uid = $sessionSelect['id'];
    if ($dbc->validateInput($_POST['title'])) {
        $title = $dbc->test_input($_POST['title']);
    } else {
        echo json_encode([
            'titleerr' => 'title cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['author'])) {
        $author = $dbc->test_input($_POST['author']);
    } else {
        echo json_encode([
            'authorerr' => 'author cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['category'])) {
        $category = $dbc->test_input($_POST['category']);
    } else {
        echo json_encode([
            'categoryerr' => 'category cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_FILES['coverimage']['name'])) {
        $coverimage = $dbc->test_input($_FILES['coverimage']['name']);
    } else {
        echo json_encode([
            'coverimageerr' => 'coverimage cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['content'])) {
        $content = $dbc->test_input($_POST['content']);
    } else {
        echo json_encode([
            'content' => 'textarea cannot be empty',
            'status' => 403
        ]);
    }

    if (!empty($title) && !empty($author) && !empty($category) && !empty($coverimage) && !empty($content)) {
        $folder = '../uploadMedia/';
        $newImage =  time() . '_' . rand(500000, 500000000000) . $coverimage;
        move_uploaded_file($_FILES['coverimage']['tmp_name'], $folder . $newImage);
        $result = $dbc->upload($uid, $title, $author, $category, $newImage, $content);
        if ($result) {
            // $_SESSION['ourUser'] = $newUserEmail;
            echo json_encode([
                'result' => 'Successfull',
                'status' => 200
            ]);
            die();
        } else {
            echo json_encode([
                'resulterr' => 'Sorry something went wrong',
                'status' => 403
            ]);
            die();
        }
    }
} else {
    echo json_encode([
        'message' => 'wrong method passed',
        'status' => '200'
    ]);
}
