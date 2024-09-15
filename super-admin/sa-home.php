<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Worker's Affairs Office</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .container {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../user/index.php">
                <img src="../assets/WAO-Logo.svg" alt="Header-Title" style="width: 300px; height: 80px;">
            </a>
            <button style="width: 10%; height: 50%" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                <ul class="navbar-nav nav-underline mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../super-admin/sa-home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../super-admin/sa-dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../super-admin/sa-rfa-entries.php">RFA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../super-admin/sa-sena-records.php">Records</a>
                    </li>
                    <div class="mr-5"></div>
                    <li>
                        <a class="nav-link" href="../super-admin/sa-account.php">
                            <img src="../assets/User.svg" alt="My-Account" style="width: 20px; height: 20px; margin-right: 5px;">
                            My Account
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../super-admin/sa-login.php" onclick="showLogoutConfirmation()">
                            <img src="../assets/Sign_out_squre.svg" alt="Sign-out" style="width: 20px; height: 20px; margin-right: 5px;">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <section class="welcome-sec">
        <div class="container">
            <h1 class="display-4 text-start" style="font-family: main-font;">WEMP 1.0</h1>
            <h2 class="text-start" style="font-family: Arial, sans serif; font-weight: bold; font-size:2.5rem">Welcome to Workers and Employers Management Platforms of Valenzuela City Worker’s Affairs Office</h2>
        </div>

        <div class="container">
            <div class="row justify-content-end">
                <div class="button">
                    <button type="button" class="btn btn-dark" style="--bs-btn-padding-y: 0.2rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: 1rem; --bs-btn-font-weight: bold; --bs-btn-border-radius: 30px; width: 15%;">
                        <a class="nav-link" href="../user/index.php">Visit WAO Website</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-4" style="border-top: 2px solid black;">

    <div class="container">
        <section>
            <div class="announcements">
                <h2 style="font-weight: bold; font-family: sub-font-bold; margin-top: 4%; margin-bottom: 2%">Announcements</h2>
                <p style="font-size: 1.5rem; margin-bottom: 4%">
                    • Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor.<br>
                    • Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor. <br>
                    • Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor.</p>
            </div>
        </section>
    </div>

    <hr class="my-4" style="border-top: 2px solid black;">

    <div class="container">

        <section>
            <div class="announcements">
                <h2 style="font-weight: bold; font-family: sub-font-bold; margin-top: 4%; margin-bottom: 2%">What’s New?</h2>
                <p style="font-size: 1.5rem; margin-bottom: 4%">
                    • Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor.<br>
                    • Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor. <br>
                    • Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor.</p>
            </div>
        </section>
    </div>

    <section class="container-fluid" style="background-color: #E5EEFF; padding: 60px;">
        <div class="row justify-content-center text-center">
            <!-- First div -->
            <div class="col-md-3">
                <p class="mt-3" style="font-family: sub-font;">
                    <span style="font-weight: bold; font-family: sub-font-bold; font-size: 2em; display: block; margin: 0 auto;">MISSION</span> <br>
                    "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                </p>
            </div>

            <!-- Second div -->
            <div class="col-md-3">
                <p class="mt-3" style="font-family: sub-font;">
                    <span style="font-weight: bold; font-family: sub-font-bold; font-size: 2em; display: block; margin: 0 auto;">VISION</span> <br>
                    "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                </p>
            </div>
            <!-- Add more columns for additional divs if needed -->
        </div>
    </section>


    <footer class="footer">
        <div class="container-footer">
            <p class="text-muted">Copyright 2024 © All Rights Reserved</br>
                Worker’s Affairs Office</p>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

</html>