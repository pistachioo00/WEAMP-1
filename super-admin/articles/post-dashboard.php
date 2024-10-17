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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Post Dashboard</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
   <!-- CSS Style -->
   <link rel="stylesheet" href="../../css/styles.css">
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../css/sa.css">
</head>

<body>
   <!-- admin dashboard section starts  -->

   <section class="dashboard">

      <h1 class="heading">Posting Dashboard</h1>

      <div class="box-container">

         <div class="box">
            <?php
            $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ?");
            $select_posts->execute([$adminID]);
            $numbers_of_posts = $select_posts->rowCount();
            ?>
            <h3><?= $numbers_of_posts; ?></h3>
            <p>Posts added</p>
            <a href="../articles/add-post.php" class="btn">Add new post</a>
         </div>

         <div class="box">
            <?php
            $select_publish_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ? AND postStatus = ?");
            $select_publish_posts->bind_param('is', $adminID, $postStatus);
            $postStatus = 'publish';
            $select_publish_posts->execute();
            ?>
            <h3><?= $numbers_of_publish_posts; ?></h3>
            <p>Publish posts</p>
            <a href="../../articles/view-post.php" class="btn">See Posts</a>
         </div>

         <div class="box">
            <?php
            $select_draft_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ? AND postStatus = ?");
            $select_draft_posts->bind_param('is', $adminID, $postStatus);
            $postStatus = 'draft';
            $select_draft_posts->execute();
            ?>
            <h3><?= $numbers_of_draft_posts; ?></h3>
            <p>Draft posts</p>
            <a href="../articles/view-post.php" class="btn">See Posts</a>
         </div>

         <div class="box">
            <?php
            $select_users = $conn->prepare("SELECT * FROM `users`");
            $select_users->execute();
            $numbers_of_users = $select_users->rowCount();
            ?>
            <h3><?= $numbers_of_users; ?></h3>
            <p>users account</p>
            <a href="users_accounts.php" class="btn">see users</a>
         </div>

         <div class="box">
            <?php
            $select_admins = $conn->prepare("SELECT * FROM `admin`");
            $select_admins->execute();
            $numbers_of_admins = $select_admins->rowCount();
            ?>
            <h3><?= $numbers_of_admins; ?></h3>
            <p>Admins Account</p>
            <a href="admin_accounts.php" class="btn">See Admins</a>
         </div>


      </div>

   </section>

   <!-- admin dashboard section ends -->


   <!-- custom js file link  -->
   <script src="../js/super-admin.js"></script>

</body>

</html>