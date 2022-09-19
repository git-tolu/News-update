<?php
require_once "../models/apipost.php";
require_once "../models/dbc.php";

$dbc = new Dbc();
if(($_SERVER['REQUEST_METHOD']) === 'POST'){

    if ($dbc->validateInput($_POST['deleteUpload'])) {
        $id = $dbc->test_input($_POST['deleteUpload']);
    } else {
       echo json_encode([
        'iderr'=>'id cannot be empty',
        'status'=>403
       ]);
    }
     
    if ($dbc->validateInput($_POST['table'])) {
        $table = $dbc->test_input($_POST['table']);
    } else {
        echo json_encode([
            'tablerr' => 'table cannot be empty',
            'status' => 403
        ]);
    }
    
    // $table = `upload`;
    if (!empty($id) && !empty($table)) {
        $result = $dbc->Delete($table, $id);
        if ($result) {
            echo json_encode([
                'result' => 'successfull',
                'status' => 200
            ]);
        }else{
            echo json_encode([
                'result' => 'Something Went Wrong',
                'status' => 200
            ]);
        }
    }
}else{
    echo json_encode([
        'message' => 'wrong method passed',
        'status' => 400
    ]);
}