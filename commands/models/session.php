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
    $firstName = $cession['firstName'];
    $secondName = $cession['secondName'];
    $number = $cession['number'];
    $bio = $cession['bio'];
    $date = $cession['date'];
    $mon = $cession['mon'];
    $year = $cession['year'];
    // echo $cstatus;