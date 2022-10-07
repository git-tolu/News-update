<?php
include "../models/apipost.php";
include "../models/dbc.php";

$dbc = new Dbc();

if (($_SERVER['REQUEST_METHOD']) === 'POST') {
    echo json_encode([
        'message' => 'wrong method passed',
        'status' => '200'
    ]);
} else {
    echo json_encode([
        'message' => 'wrong method passed',
        'status' => '200'
    ]);
}
