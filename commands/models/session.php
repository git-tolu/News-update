<?php
    require_once "dbc.php";
    $dbc= new Dbc();
    if (!isset($_SESSION['ourUser'])) {
        header("location: index");
    }

    $cession = $dbc->emailCheck($_SESSION['ourUser']);
    $cid = $cession['id'];
    $cstatus = $cession['status'];
    $cname = $cession['userName'];
    // echo $cstatus;