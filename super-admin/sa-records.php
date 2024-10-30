<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar mt-5" style="background-color: #FFE5E5; border: 1.8px grey solid">
        <div class="container my-5">
            <h3 class="fs-7 text-center" style="font-family: sub-font-bold; padding-top:35%; color: #304DA5;">Dashboard
            </h3>
            <hr style="background-color: black;">
            <a href="#" class="nav-link mt-3"
                style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                SENA Assistance Desk
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="sa-user-management.php" class="nav-link mt-3"
                style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                User Management
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="sa-rfa-status.php" class="nav-link mt-3"
                style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                RFA Status
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="../super-admin/articles/article-dashboard.php" class="nav-link mt-3"
                style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                Articles
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="#" class="nav-link mt-3"
                style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                Seminar
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="#" class="nav-link mt-3"
                style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                Records Management
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
        </div>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #C80000;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../assets/WAO-Logo.svg" alt="Header-Title" style="width: 300px; height: 70px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                    <ul class="nav nav-underline navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="../super-admin/sa-home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="../super-admin/sa-dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../super-admin/sa-rfa-entries.php">RFA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../super-admin/sa-sena-records.php">Records</a>
                        </li>
                    </ul>
                </div>
                <a href="#">
                    <ul class="navbar-nav ml-auto">
                </a>
                <a class="nav-link" href="../super-admin/sa-account.php" style="color: white">
                    <img src="../assets/User/User.svg" alt="My-Account"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    My Account
                </a>
                <a class="nav-link" href="../logout.php" onclick="showLogoutConfirmation()" style="color: white">
                    <img src="../assets/User/Line1.svg" alt="Line"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    <img src="../assets/User/Sign_out_squre.svg" alt="Sign-out"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    Log Out
                </a>
                </ul>
                </a>
            </div>
        </nav>





</body>

</html>