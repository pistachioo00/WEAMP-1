<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Worker's Affairs Office</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <style>
        .container {
            overflow: hidden;
        }

        .sidebar {
            display: none;
            /* Initially hide the sidebar */
            background-color: white;
            border: 1.8px black solid;
            width: 250px;
            position: fixed;
            top: 0;
            right: 0;
            height: 100%;
            z-index: 1000;
            transition: right 0.3s ease;
        }

        .sidebar.visible {
            display: block;
            /* Show the sidebar when visible class is added */
        }


        .mt-5 {
            margin-top: 5rem;
        }

        .my-5 {
            margin-top: 5rem;
            margin-bottom: 5rem;
        }

        .text-center {
            text-align: center;
        }

        .nav-link {
            display: block;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar mt-5" id="sidebar">
        <div class="container my-5">
            <h3 class="fs-7 text-center" style="font-family: sub-font-bold; padding-top:35%">Dashboard</h3>
            <hr style="background-color: black;">
            <a href="#" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: black; padding: left 35%">
                SENA Assistance Desk
                <img src="../assets/Expand_right.svg" alt="expand_right">
            </a>
            <a href="sa-user-management.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: black; padding: left 35%">
                User Management
                <img src="../assets/Expand_right.svg" alt="expand_right">
            </a>
            <a href="sa-rfa-status.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: black; padding: left 35%">
                RFA Status
                <img src="../assets/Expand_right.svg" alt="expand_right">
            </a>
        </div>
    </div>


    <!-- Main content -->
    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../assets/WAO-Logo.svg" alt="Header-Title" style="width: 300px; height: 80px;">
                </a>
                <button style="width: 10%; height: 50%" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                    <ul class="nav nav-underline navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="../super-admin/sa-home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../super-admin/sa-dashboard.php" id="dashboardLink">Dashboard</a>
                        </li>
                        <li class="nav-items">
                            <a class="nav-link" href="../super-admin/sa-rfa-entries.php">RFA</a>
                        </li>
                        <li class="nav-items">
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

        <section class="welcome-sec">
            <div class="container">
                <h1 class="display-1 text-start" style="font-family: main-font;">HELLO</h1>
                <h2 class="text-start" style="font-family: Arial, sans serif; font-weight: bold">SEADO #1</h2>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="rectangle">
                        <h4 class="fw-bold mt-2" style="font-family: sub-font-bold">RFA ENTRIES</h4>
                        <div class="d-flex justify-content-center align-items-center"> <!-- Flex container -->
                            <h1 class="display-1 fw-bold" style="margin-bottom: 0; padding-right: 35%">2</h1>
                            <img src="../assets/Arhive_alt_add_list_light.svg" alt="" style="max-width: 100%; padding-left: 10px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rectangle">
                        <h4 class="fw-bold mt-2" style="font-family: sub-font-bold">SENA CONFERENCE</h4>
                        <div class="d-flex justify-content-center align-items-center"> <!-- Flex container -->
                            <h1 class="display-1 fw-bold" style="margin-bottom: 0; padding-right: 35%">2</h1>
                            <img src="../assets/Group.svg" alt="" style="max-width: 100%; padding-left: 10px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rectangle">
                        <h4 class="fw-bold mt-2" style="font-family: sub-font-bold">ADVICE & COUNSELLING</h4>
                        <div class="d-flex justify-content-center align-items-center"> <!-- Flex container -->
                            <h1 class="display-1 fw-bold" style="margin-bottom: 0; padding-right: 35%">1</h1>
                            <img src="../assets/Vector_5.svg" alt="" style="max-width: 100%; padding-left: 10px; height: 75px; width: 75px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="rectangle">
                        <h4 class="fw-bold mt-2" style="font-family: sub-font-bold">SETTLED CASES</h4>
                        <div class="d-flex justify-content-center align-items-center"> <!-- Flex container -->
                            <h1 class="display-1 fw-bold" style="margin-bottom: 0; padding-right: 35%">2</h1>
                            <img src="../assets/settled-cases.svg" alt="" style="max-width: 100%; padding-left: 10px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rectangle">
                        <h4 class="fw-bold mt-2" style="font-family: sub-font-bold">SETTLEMENT AGREEMENT</h4>
                        <div class="d-flex justify-content-center align-items-center"> <!-- Flex container -->
                            <h1 class="display-1 fw-bold" style="margin-bottom: 0; padding-right: 35%">2</h1>
                            <img src="../assets/settled-agreement.svg" alt="" style="max-width: 100%; padding-left: 10px;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rectangle">
                        <h4 class="fw-bold mt-2" style="font-family: sub-font-bold">REFERRALS</h4>
                        <div class="d-flex justify-content-center align-items-center"> <!-- Flex container -->
                            <h1 class="display-1 fw-bold" style="margin-bottom: 0; padding-right: 35%">0</h1>
                            <img src="../assets/Folder_send.svg" alt="" style="max-width: 100%; padding-left: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="rectangle">
                        <h4 class="fw-bold mt-2" style="font-family: sub-font-bold">WITHDRAWALS</h4>
                        <div class="d-flex justify-content-center align-items-center"> <!-- Flex container -->
                            <h1 class="display-1 fw-bold" style="margin-bottom: 0; padding-right: 35%">1</h1>
                            <img src="../assets/Arhive_load_light.svg" alt="" style="max-width: 100%; padding-left: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <footer class="footer fixed-bottom">
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
<script src="dashboard.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var dashboardLink = document.getElementById('dashboardLink');
        var sidebar = document.getElementById('sidebar');
        var clickCount = 0;

        dashboardLink.addEventListener('click', function(event) {
            clickCount++;
            if (clickCount % 2 === 1) {
                sidebar.classList.add('visible');
            } else {
                sidebar.classList.remove('visible');
            }
            event.preventDefault(); // Prevent default link behavior
        });
    });
</script>

</html>