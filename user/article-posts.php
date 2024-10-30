<!-- PREVENT FROM ACCCESS NA NAKALOG OUT KA NA -->
<?php
include 'auth.php';
checkLogin();

include '../public/config.php';

session_start();

if (isset($_SESSION['accountID'])) {
    $accountID = $_SESSION['accountID'];
} else {
    $accountID = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .container {
            overflow: hidden;
        }

        .notification-panel {
            width: 20%;
            position: absolute;
            left: 72%;
            top: 5%;
            max-height: 400px;
            overflow-y: auto;
            font-family: Arial;
            z-index: 9999;
        }

        /* PUSH NOTIFICATIONS */
        .notification-list {
            list-style-type: none;
            padding: 0;
        }

        .notification-list li {
            background-color: #f5f5f5;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .notification-list li:hover {
            background-color: #e0e0e0;
            cursor: pointer;
        }

        /* Ensure collapsible content is fixed when collapsed */
        #collapseNotifications:not(.show) {
            position: fixed;
        }

        .container {
            overflow: hidden;
        }

        .rec-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
            gap: 20px;
        }

        #rec {
            border: 1.5px solid black;
            padding: 20px;
            margin-bottom: 50px;
            background-color: transparent;
            height: 400px;
            width: 360px;
        }

        /* Adjust h1 size for smaller screens */
        @media (max-width: 768px) {
            h1.display-2 {
                font-size: 2.5rem;
                padding-top: 5%;
                padding-bottom: 4%;
            }

            .services-sec img {
                width: 80px;
                /* Adjust width as needed */
                height: 50px;
                /* Adjust height as needed */
            }

            .services-sec p {
                font-size: 14px;
                /* Adjust font size as needed */
            }
        }

        @media (max-width: 480px) {
            h1.display-2 {
                font-size: 2rem;
                padding-top: 3%;
                padding-bottom: 3%;
            }

            .services-sec img {
                width: 60px;
                /* Adjust width as needed */
                height: 40px;
                /* Adjust height as needed */
            }

            .services-sec p {
                font-size: 12px;
                /* Adjust font size as needed */
            }

            body {
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #C80000;">
        <div class="container">
            <a class="navbar-brand" href="../user/home.php">
                <img src="../assets/WAO-Logo.svg" alt="Header-Title" style="width: 300px; height: 80px;">
            </a>
            <button style="width: 10%; height: 50%; background-color: #fff; border: none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: #C80000;"></span>
            </button>
            <div class="mr-5"></div>
            <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 mr-5">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/rfa.php">RFA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/dashboard-status.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/contact-us.php">Contact</a>
                    </li>
                    <div class="mr-5"></div>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseNotifications" aria-expanded="false" aria-controls="collapseNotifications">
                            <img src="../assets/Bell_Pin.svg" alt="Notification" style="width: 20px; height: 20px; margin-right: 5px;">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/my-account.php">
                            <img src="../assets/User.svg" alt="My-Account" style="width: 20px; height: 20px; margin-right: 5px;">
                            My Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" onclick="showLogoutConfirmation()">
                            <img src="../assets/Sign_out_square.svg" alt="Sign-out" style="width: 20px; height: 20px; margin-right: 5px;">
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Add the logout confirmation modal markup -->
    <div class="modal fade" id="logoutConfirmationModal" tabindex="-1" aria-labelledby="logoutConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-center" id="logoutConfirmationModalLabel">Logout Confirmation</h5>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to log out?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="logout()">Logout</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Collapsible content -->
    <div class="collapse position-fixed" style="width: 20%; left: 65%; top: 0; max-height: 400px; overflow-y: auto; font-family: Arial; padding-top: 5%; z-index: 9999;" id="collapseNotifications">
        <div class="card card-body">
            <ul class="notification-list">
                <!-- Example notifications -->
                <li>No notifications</li>
            </ul>
        </div>
    </div>