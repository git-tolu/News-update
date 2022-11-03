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
    $profilePic = $cession['profilePic'];
    $userEmail = $cession['userEmail'];
    $profilePic = $cession['profilePic'];
    $profilePic = $cession['profilePic'];
    $profilePic = $cession['profilePic'];
    $profilePic = $cession['profilePic'];
    $profilePic = $cession['profilePic'];
    $profilePic = $cession['profilePic'];
    // echo $cstatus;