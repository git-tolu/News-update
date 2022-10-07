<?php
require_once "../models/apipost.php";
require_once "../models/session.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
    if ($dbc->validateInput($_POST['fetchId'])) {
        $fetchId = $dbc->test_input($_POST['fetchId']);
    } else {
        echo json_encode([
            'fetchIderr' => 'fetchId cannot be empty',
            'status' => 403
        ]);
        die();
    }

    $fetch = $dbc->UploadFetchSingle($fetchId);
    echo json_encode([
        'data' => $fetch,
        // 'status' => 200
    ]);

} else {
    echo json_encode([
        'message' => 'Wrong method passed',
        'status' => 400
    ]);
}
