<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article posts</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../css/sa.css">
</head>

<body>

    <?php include '../components/admin-header.php' ?>
    
    <!-- Sidebar -->
    <div class="sidebar mt-5" style="background-color: #FFE5E5; border: 1.8px grey solid">
        <div class="container my-5">
            <h3 class="fs-7 text-center" style="font-family: sub-font-bold; padding-top:35%; color: #304DA5;">Dashboard</h3>
            <hr style="background-color: black;">
            <a href="#" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                SENA Assistance Desk
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="../sa-user-management.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                User Management
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="../sa-rfa-status.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                RFA Status
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
            <a href="../articles/add-post.php" class="nav-link mt-3" style="font-size: 1rem; font-family: sub-font; color: #304DA5; padding: left 35%">
                Articles and Seminar
                <img src="../assets/user/Expand_right.svg" alt="expand_right">
            </a>
        </div>
    </div>

    <section class="post-editor">
        <h1 class="heading">Add new post</h1>
        <form action="../articles/add-post-process.php" method="post" enctype="multipart/form-data">
            <p>Post Title <span>*</span></p>
            <input type="text" name="title" maxlength="100" required placeholder="add post title" class="box">
            <p>Post Content <span>*</span></p>
            <textarea name="content" class="box" required maxlength="20000" placeholder="write your content..." cols="30" rows="10"></textarea>
            <p>Post Link <span>*</span></p>
            <input type="url" id="link" name="link" class="box" required>
            <p>Post Image</p>
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">
            <div class="flex-btn">
                <input type="submit" value="publish post" name="publish" class="btn">
                <input type="submit" value="save draft" name="draft" class="option-btn">
            </div>
        </form>

    </section>


    <!-- custom js file link  -->
    <script src="../js/super-admin.js"></script>

</body>

</html>