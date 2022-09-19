<?php
require_once "../models/apiget.php";
require_once "../models/session.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'GET') {
    if ($dbc->validateInput($_GET['fetchId'])) {
        $fetchId = $dbc->test_input($_GET['fetchId']);
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
