<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article posting</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- CSS Style -->
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<style>
    .tool-list {
        display: flex;
        flex-flow: row nowrap;
        list-style: none;
        padding: 0;
        overflow: hidden;
        gap: 10px;
        border-radius: 5px;
        background-color: white;
        justify-content: end;
        margin-right: 10%;
    }

    .tool--btn {
        display: flex;
        justify-content: center;
        align-items: center;
        border: none;
        border-radius: 5px;
        height: 20px;
        width: 20px;
        font-size: 12px;
        cursor: pointer;
        background-color: transparent;
    }

    .tool--btn img {
        width: 100%;
        height: 100%;
        vertical-align: middle;
    }

    .tool--btn:hover {
        background-color: #dddddd;
    }

    #output {
        height: 400px;
        padding: 1rem;
        width: 90%;
        border: 1px solid #333;
        border-radius: 5px;
        background-color: white;
    }

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
                Dashboard
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

    <section class="post-editor" style="padding-bottom: 15%">
        <h1 class="heading">Add new post</h1>
        <form action="../articles/add-post-process.php" method="post" enctype="multipart/form-data">
            <p>Post Title <span style="color:#C80000;">*</span></p>
            <input type="text" name="postTitle" maxlength="100" required placeholder="Add post title" class="box-post">
            <p>Post Content <span style="color:#C80000;">*</span></p>
            <textarea name="postContent" class="box-post" required maxlength="20000" placeholder="Write your content..." cols="30" rows="10"></textarea>
            <p>Post Link</p>
            <input type="url" name="postLink" class="box-post">
            <p>Post Image</p>
            <input type="file" name="postImage" class="box-post">
            <div class="flex-btn">
                <input type="submit" value="Publish Post" name="publish" class="btn">
                <input type="submit" value="Save Draft" name="draft" class="option-btn">
            </div>
        </form>
    </section>


    <!-- custom js file link  -->
    <script src="../js/super-admin.js"></script>

</body>

</html>