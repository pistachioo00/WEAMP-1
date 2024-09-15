<?php
include 'auth-admin.php';
checkAdminLogin();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFA Assigned</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/header-title-admin.svg" alt="Header-Title" style="width: 300px; height: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                <ul class="nav nav-underline navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-items">
                        <a class="nav-link" href="../admin/home.php">Home</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-link" href="../admin/dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="rfaLink" data-bs-toggle="popover" 
                    data-bs-html="true" data-bs-trigger="click" data-bs-title-center="RFA" 
                    data-bs-content='<div><a class="nav-link" href="rfa-entries.php" class="btn btn-link">New Entries</a><br><a class="nav-link" href="rfa-assignment.php" class="btn btn-link">Assignment</a></div>' data-bs-placement="bottom">
                        RFA
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="recordsLink" data-bs-toggle="popover" 
                        data-bs-html="true" data-bs-trigger="click" data-bs-title-center="Records" 
                        data-bs-content='<div><a class="nav-link" href="sena-records.php" class="btn btn-link">SENA Conferences</a><br><a class="nav-link" href="#" class="btn btn-link">Advice Counselling</a></div>' data-bs-placement="bottom">
                        Records
                    </a>
                    </li>
                </ul>
            </div>

            <!-- Popover Content -->
            <div id="popoverContent" style="display: none;">
                <div class="popover-body">
                    Assignment
                </div>
            </div>

            <div id="popoverContent" style="display: none;">
                <div class="popover-body">
                    Advice Counselling
                </div>
            </div>

            <a href="#">
                    <ul class="navbar-nav ml-auto">
                        <a class="nav-link" href="../admin/admin-account.php">
                            <img src="../assets/User.svg" alt="My-Account"
                                style="width: 20px; height: 20px; margin-right: 5px;">
                            My Account
                        </a>
                        <a class="nav-link" href="logout.php" onclick="showLogoutConfirmation()">
                            <img src="../assets/Sign_out_squre.svg" alt="Sign-out"
                                style="width: 20px; height: 20px; margin-right: 5px;">
                            Log Out
                        </a>
                    </ul>
                </a>
        </div>
    </nav>

    <div class="container" style="padding-top:3%">
        <h2 class="text-start" style="font-family: sub-font-bold; font-weight: bold">ASSIGNMENT</h2>
    </div>

    <div class="container d-flex flex-column justify-content-center align-items-center" style="padding-top: 3%">
        <div class="text-center">
            <img src="../assets/folder-open.svg" alt="folder-open">
            <h3 style="font-family: sub-font-bold">You have a current RFA Assignment</h3>
        </div>

        <div class="col-md-5 d-flex justify-content-center align-items-center mt-5 mb-5">
            <a href="rfa-assignment.php"><button class="btn btn-dark fw-bold" style="font-size: 1rem; padding: 8px; border-radius: 50px; ">
                PROCEED TO ASSIGNMENT
            </button></a>
        </div>
    </div>


    <footer class="footer">
        <div class="container-footer">
            <p class="text-muted">Copyright 2024 © All Rights Reserved</br>
                Worker’s Affairs Office</p>
        </div>
    </footer>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    // Initialize popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

</html>