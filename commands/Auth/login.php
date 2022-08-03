<?php
require "../models/apipost.php";

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
    echo json_encode([
        'message' => "successful",
        'status' => 400
    ]);
} else {
    echo json_encode([
        'message' => "wrong method passed",
        'status' => 405
    ]);
    die(header('HTTP/1.1 405 Request method not allowed'));
}
