<?php
session_start();

function checkLogin()
{
    if (!isset($_SESSION['accountID'])) {
        header("Location: ../public/login.php");

        exit();
    }

    if (isset($_SESSION['adminID'])) {
        header("Location: ../admin/home.php");
        exit();
    }
    
    if (isset($_SESSION['adminID']) && $_SESSION['adminID'] == 2) {
        header("Location: ../super-admin/sa-home.php");
        exit();
    }
}