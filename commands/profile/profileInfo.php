<?php
require_once "../models/apipost.php";
require_once "../models/dbc.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
    $sess = $_SESSION['ourUser'];
    $sessionSelect = $dbc->sessionSelect($sess);
    $uid = $sessionSelect['id'];

    if ($dbc->validateInput($_POST['firstname'])) {
        $firstname = $dbc->test_input($_POST['firstname']);
    } else {
        echo json_encode([
            'firstnameerr' => 'Firstname cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['lastname'])) {
        $lastname = $dbc->test_input($_POST['lastname']);
    } else {
        echo json_encode([
            'lastnameerr' => 'lastname cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['email'])) {
        $email = $dbc->test_input($_POST['email']);
    } else {
        echo json_encode([
            'emailerr' => 'email cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['contact'])) {
        $contact = $dbc->test_input($_POST['contact']);
    } else {
        echo json_encode([
            'contacterr' => 'contact cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['bio'])) {
        $bio = $dbc->test_input($_POST['bio']);
    } else {
        echo json_encode([
            'bioerr' => 'bio cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['date'])) {
        $date = $dbc->test_input($_POST['date']);
    } else {
        echo json_encode([
            'dateerr' => 'date cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['month'])) {
        $month = $dbc->test_input($_POST['month']);
    } else {
        echo json_encode([
            'montherr' => 'month cannot be empty',
            'status' => 403
        ]);
        die();
    }

    if ($dbc->validateInput($_POST['year'])) {
        $year = $dbc->test_input($_POST['year']);
    } else {
        echo json_encode([
            'yearerr' => 'year cannot be empty',
            'status' => 403
        ]);
        die();
    }
    if (!empty($firstname) && !empty($lastname) && !empty($contact) && !empty($bio) && !empty($email) && !empty($date) && !empty($month) && !empty($year)) {
        $dob = $date .', '. $month .' '. $year;
        $result = $dbc->UpdateProfileIno($uid, $firstname, $lastname, $email, $contact, $bio, $date, $month, $year);
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
        'message' => 'Wrong Method Passed',
        'status' => 200
    ]);
    die();
}
