<?php

include $_SERVER['DOCUMENT_ROOT'] . '/bk_WEAMP/WEAMP/public/config.php';

session_start();

$adminID = $_SESSION['adminID'];

if (!isset($adminID)) {
   header('location:../super-admin/sa-home.php');
}


if (isset($_POST['delete'])) {
   // Ensure the correct POST key is used, matching your form input
   $postID = $_POST['post_id'];

   // Sanitize postID properly (since it should be an integer)
   $postID = filter_var($postID, FILTER_SANITIZE_NUMBER_INT);

   if ($postID) {
      // Select the postImage for deletion
      $delete_postImage = $conn->prepare("SELECT postImage FROM `posts` WHERE postID = ?");
      if ($delete_postImage === false) {
         die('Prepare failed: ' . htmlspecialchars($conn->error));
      }

      $delete_postImage->bind_param('i', $postID);
      $delete_postImage->execute();

      $result = $delete_postImage->get_result();
      $fetch_delete_postImage = $result->fetch_assoc();

      if ($fetch_delete_postImage && !empty($fetch_delete_postImage['postImage'])) {
         $postImage_path = '../../uploads/articleImages/' . $fetch_delete_postImage['postImage'];

         // Check if the file exists and delete it
         if (file_exists($postImage_path)) {
            if (!unlink($postImage_path)) {
               die('Error deleting the image: ' . $postImage_path);
            }
         }
      }

      $delete_postImage->close();

      // Proceed with deleting the post itself
      $delete_post = $conn->prepare("DELETE FROM `posts` WHERE postID = ?");
      if ($delete_post === false) {
         die('Prepare failed: ' . htmlspecialchars($conn->error));
      }

      $delete_post->bind_param('i', $postID);
      $delete_post->execute();

      if ($delete_post->affected_rows > 0) {
         $message[] = 'Post deleted successfully!';
      } else {
         $message[] = 'Post deletion failed!';
      }

      $delete_post->close();
   } else {
      $message[] = 'Invalid post ID.';
   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Posts</title>

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="../../css/sa.css">
   <!-- <link rel="stylesheet" href="../../css/styles.css"> -->

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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
   <!-- Main content -->
   <br><br><br>
   <h1 class="heading">Your posts</h1>

   <section class="post-section">
      <div class="box-container">

         <?php
         // Selecting posts based on adminID
         $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ?");
         $select_posts->bind_param('i', $adminID); // Bind adminID as an integer
         $select_posts->execute();
         $result = $select_posts->get_result();

         // Check if there are posts available
         if ($result->num_rows > 0) {
            while ($fetch_posts = $result->fetch_assoc()) {
               $postID = $fetch_posts['postID'];
               $postImage = htmlspecialchars($fetch_posts['postImage']); // Fetch post image uniquely for each post
         ?>
               <form method="post" class="box">
                  <input type="hidden" name="post_id" value="<?= $postID; ?>">

                  <!-- Display the post image if available -->
                  <?php if (!empty($postImage)) { ?>
                     <img src="../../uploads/articleImages/<?= $postImage; ?>" class="image"
                        alt="Post Image" style="width:200px;height:auto;" data-bs-toggle="modal"
                        data-bs-target="#postImageModal">
                  <?php } ?>

                  <!-- Post status with color coding -->
                  <div class="status" style="background-color:<?php
                                                               echo ($fetch_posts['postStatus'] == 'publish') ? 'limegreen' : 'coral';
                                                               ?>;">
                     <?= $fetch_posts['postStatus']; ?>
                  </div>

                  <!-- Post details -->
                  <div class="title"><?= htmlspecialchars($fetch_posts['postTitle']); ?></div>
                  <div class="posts-content"><?= htmlspecialchars($fetch_posts['postContent']); ?></div>
                  <div class="posts-link"><?= htmlspecialchars($fetch_posts['postLink']); ?></div>

                  <!-- Action buttons -->
                  <div class="flex-btn">
                     <a href="../articles/edit-post.php?postID=<?= $postID; ?>" class="option-btn">Edit</a>
                     <button type="submit" name="delete" class="delete-btn"
                        onclick="return confirm('Delete this post?');">Delete</button>
                  </div>
                  <a href="../articles/read-post.php?postID=<?= $postID; ?>" class="btn">View post</a>
               </form>
         <?php
            }
         } else {
            echo '<p class="empty">No posts added yet! <a href="../articles/add-post.php" class="btn" style="margin-top:1.5rem;">Add post</a></p>';
         }
         ?>

      </div>
   </section>

   <!-- custom js file link  -->
   <script src="../js/super-admin.js"></script>
</body>

</html>