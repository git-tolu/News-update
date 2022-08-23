<?php
session_start();
unset($_SESSION['ourUser']);
header("location: ../../userDashboard/index");