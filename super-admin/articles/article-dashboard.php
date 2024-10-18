<?php

include $_SERVER['DOCUMENT_ROOT'] . '/bk_WEAMP/WEAMP/public/config.php';

session_start();

$adminID = $_SESSION['adminID'];

if (!isset($adminID)) {
    header('location:sa-home.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- CSS Style -->
    <link rel="stylesheet" href="../../css/styles.css">
    <!-- <link rel="stylesheet" href="../../css/sa.css"> -->
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
</style>

<body>
    <!-- Sidebar -->
    <div class="sidebar mt-5" style="background-color: #FFE5E5; border: 1.8px grey solid">
        <div class="container my-4">
            <h3 class="fs-7 text-center" style="font-family: sub-font-bold; padding-top:35%; color: #304DA5;">Article Posting</h3>
            <hr style="background-color: black;">
            <a href="article-dashboard.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                <img src="../../assets/user/Expand_right.svg" alt="expand_right">
                Posts Dashboard
            </a>
            <a href="../articles/add-post.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                <img src="../../assets/posting-pen.svg" alt="posting_pen">
                Add posts
            </a>
            <a href="../articles/view-post.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                <img src="../../assets/view-eye.svg" alt="expand_right">
                View posts
            </a>
            <a href="../articles/seminar.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                <img src="../../assets/seminars.svg" alt="expand_right">
                Seminars
            </a>
        </div>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #C80000;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../../assets/WAO-Logo.svg" alt="Header-Title" style="width: 300px; height: 70px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                    <ul class="nav nav-underline navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="../sa-home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../sa-dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../sa-rfa-entries.php">RFA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../sa-sena-records.php">Records</a>
                        </li>
                    </ul>
                </div>
                <a href="#">
                    <ul class="navbar-nav ml-auto">
                </a>
                <a class="nav-link" href="../sa-account.php" style="color: white">
                    <img src="../../assets/User/User.svg" alt="My-Account"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    My Account
                </a>
                <a class="nav-link" href="../logout.php" onclick="showLogoutConfirmation()" style="color: white">
                    <img src="../../assets/User/Line1.svg" alt="Line"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    <img src="../../assets/User/Sign_out_squre.svg" alt="Sign-out"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    Log Out
                </a>
            </div>
        </nav>
    </div>

    <section class="post-dashboard" style="padding-bottom: 80%;">

        <h1 class="heading">Posting Dashboard</h1>

        <div class="post-container">

            <!-- Box for Total Posts -->
            <div class="box-post">
                <?php
                $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ?");
                $select_posts->bind_param('i', $adminID);  // 'i' for integer
                $select_posts->execute();
                $select_posts->store_result();  // Needed to use num_rows
                $numbers_of_posts = $select_posts->num_rows;  // Count the number of posts
                ?>
                <h3><?= $numbers_of_posts; ?></h3>
                <p>Posts added</p>
                <a href="../articles/add-post.php" class="btn">Add new post</a>
            </div>

            <!-- Box for Published Posts -->
            <div class="box-post">
                <?php
                $select_publish_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ? AND postStatus = ?");
                $postStatus = 'Publish';  // Set status to 'Publish'
                $select_publish_posts->bind_param('is', $adminID, $postStatus);  // 'i' for integer, 's' for string
                $select_publish_posts->execute();
                $select_publish_posts->store_result();  // Store result to use num_rows 
                $numbers_of_publish_posts = $select_publish_posts->num_rows;  // Count active posts
                ?>
                <h3><?= $numbers_of_publish_posts; ?></h3>
                <p>Published posts</p>
                <a href="../articles/view-post.php" class="btn">See Posts</a>
            </div>

            <!-- Box for Draft Posts -->
            <div class="box-post">
                <?php
                $select_draft_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ? AND postStatus = ?");
                $postStatus = 'Draft';  // Set status to 'Draft'
                $select_draft_posts->bind_param('is', $adminID, $postStatus);  // 'i' for integer, 's' for string
                $select_draft_posts->execute();
                $select_draft_posts->store_result();  // Store result to use num_rows
                $numbers_of_draft_posts = $select_draft_posts->num_rows;  // Count draft posts
                ?>
                <h3><?= $numbers_of_draft_posts; ?></h3>
                <p>Draft posts</p>
                <a href="../articles/view-post.php" class="btn">See Posts</a>
            </div>

        </div>

    </section>


    <!-- custom js file link  -->
    <script src="../js/super-admin.js"></script>

</body>

</html>