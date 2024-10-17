<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Worker's Affairs Office</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<style>
    .navbar-nav .nav-item .nav-link {
        color: white;
    }

    .rectangle {
        background-color: white;
        border: 2.5px solid #146fca;
    }

    .rectangle h4 {
        font-family: sub-font-bold;
        color: #304da5;
    }

    .rectangle h1 {
        margin-bottom: 0;
        padding-right: 35%;
        color: #465da3;
    }

    /* 
    .container {
        overflow: hidden;
    }

    .sidebar {
        display: none;
         // Initially hide the sidebar
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
        // Show the sidebar when visible class is added 
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
    } */
</style>

<body>
    <!-- Sidebar -->
    <div class="sidebar mt-5" style="background-color: #FFE5E5; border: 1.8px grey solid">
        <div class="container my-4">
            <h3 class="fs-7 text-center" style="font-family: sub-font-bold; padding-top:35%; color: #304DA5;">Article Posting</h3>
            <hr style="background-color: black;">
            <a href="sa-dashboard.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
                Dashoard

            </a>
            <a href="../super-admin/articles/add-post.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                <img src="../assets/posting-pen.svg" alt="posting_pen">
                Add posts
            </a>
            <a href="sa-user-management.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                <img src="../assets/view-eye.svg" alt="expand_right">
                View posts
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                    <ul class="nav nav-underline navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="../super-admin/sa-home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../super-admin/sa-dashboard.php">Dashboard</a>
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
    </div>
</body>

</html>