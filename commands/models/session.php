<?php
    require_once "dbc.php";
    if (!isset($_SESSION['ourUser'])) {
        header("location: index");
    }