<?php
require_once "../models/apipost.php";
require_once "../models/dbc.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
    $sess = $_SESSION['ourUser'];
    $sessionSelect = $dbc->sessionSelect($sess);
    $uid = $sessionSelect['id'];
    // echo json_encode([
    //     'message' => $uid,
    //     'status' => 403
    // ]);

    if ($dbc->validateInput($_POST['blog_title'])) {
        $title = $dbc->test_input($_POST['blog_title']);
    } else {
        echo json_encode([
            'titleerr' => 'title cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['blog_Author'])) {
        $author = $dbc->test_input($_POST['blog_Author']);
    } else {
        echo json_encode([
            'authorerr' => 'author cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['blog_category'])) {
        $category = $dbc->test_input($_POST['blog_category']);
    } else {
        echo json_encode([
            'categoryerr' => 'category cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_FILES['blog_media']['name'])) {
        $coverimage = $dbc->test_input($_FILES['blog_media']['name']);
    } else {
        echo json_encode([
            'coverimageerr' => 'coverimage cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['blog_content'])) {
        $content = html_entity_decode($dbc->test_input($_POST['blog_content']));
    } else {
        echo json_encode([
            'contenterr' => 'textarea cannot be empty',
            'status' => 403
        ]);
    }

    if (!empty($title) && !empty($author) && !empty($category) && !empty($coverimage) && !empty($content)) {
        $folder = '../uploadMedia/';
        $newImage =  time() . '_' . rand(500000, 500000000000) . $coverimage;
        move_uploaded_file($_FILES['blog_media']['tmp_name'], $folder . $newImage);
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
                'result' => 'Sorry something went wrong',
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
