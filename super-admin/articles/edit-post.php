<?php

include $_SERVER['DOCUMENT_ROOT'] . '/bk_WEAMP/WEAMP/public/config.php';
session_start();

$adminID = $_SESSION['adminID'];

if (!isset($adminID)) {
   header('location:sa-home.php');
}

// Save Post Logic
if (isset($_POST['save'])) {

   $postID = $_POST['post_id'];
   $postTitle = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
   $postContent = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
   $postLink = filter_var($_POST['link'], FILTER_SANITIZE_STRING);
   $postStatus = filter_var($_POST['status'], FILTER_SANITIZE_STRING);

   // Update post content and status
   $update_post = $conn->prepare("UPDATE `posts` SET postTitle = ?, postContent = ?, postLink = ?, postStatus = ? WHERE postID = ?");
   $update_post->execute([$postTitle, $postContent, $postLink, $postStatus, $postID]);

   $message[] = 'Post updated!';

   // Handling image
   $old_postImage = $_POST['old_image'];
   $postImage = $_FILES['image']['name'];
   $postImage_tmp_name = $_FILES['image']['tmp_name'];
   $postImage_size = $_FILES['image']['size'];
   $allowed_exs = array("jpg", "jpeg", "png", "webp");
   $postImage_folder = '../../uploads/articleImages/' . $postImage;

   if (!empty($postImage)) {
      $postImage_ext = strtolower(pathinfo($postImage, PATHINFO_EXTENSION));

      if ($postImage_size > 2000000) {
         $message[] = 'Image size is too large!';
      } elseif (!in_array($postImage_ext, $allowed_exs)) {
         $message[] = 'Invalid image type!';
      } else {
         // Move the image and update the post
         move_uploaded_file($postImage_tmp_name, $postImage_folder);
         $update_postImage = $conn->prepare("UPDATE `posts` SET postImage = ? WHERE postID = ?");
         $update_postImage->execute([$postImage, $postID]);

         // Delete the old image if it's different
         if (!empty($old_postImage) && $old_postImage != $postImage) {
            unlink('../../uploads/articleImages/' . $old_postImage);
         }

         $message[] = 'Image updated!';
      }
   }
}

// Delete Post Logic
if (isset($_POST['delete_post'])) {

   $postID = $_POST['postID'];
   $postID = filter_var($postID, FILTER_SANITIZE_STRING);
   $delete_postImage = $conn->prepare("SELECT * FROM `posts` WHERE postID = ?");
   $delete_postImage->execute([$postID]);
   $fetch_delete_postImage = $delete_postImage->fetch(PDO::FETCH_ASSOC);

   if (!empty($fetch_delete_postImage['postImage'])) {
      unlink('../../uploads/articleImages/' . $fetch_delete_postImage['postImage']);
   }

   $delete_post = $conn->prepare("DELETE FROM `posts` WHERE postID = ?");
   $delete_post->execute([$postID]);

   $message[] = 'Post deleted successfully!';
}

// Delete Image Logic
if (isset($_POST['delete_postImage'])) {

   $empty_image = '';
   $postID = $_POST['postID'];
   $postID = filter_var($postID, FILTER_SANITIZE_STRING);

   $delete_postImage = $conn->prepare("SELECT * FROM `posts` WHERE postID = ?");
   $delete_postImage->execute([$postID]);
   $fetch_delete_postImage = $delete_postImage->fetch(PDO::FETCH_ASSOC);

   if (!empty($fetch_delete_postImage['postImage'])) {
      unlink('../../uploads/articleImages/' . $fetch_delete_postImage['postImage']);
   }

   $unset_postImage = $conn->prepare("UPDATE `posts` SET postImage = ? WHERE postID = ?");
   $unset_postImage->execute([$empty_postImage, $postID]);

   $message[] = 'Image deleted successfully!';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Posts</title>

   <!-- custom css file link  -->
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
   <!-- <link rel="stylesheet" href="../../css/sa.css"> -->
   <link rel="stylesheet" href="../../css/styles.css">
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

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

   <section class="post-editor">
      <h1 class="heading">Edit post</h1>

      <?php
      $postID = $_GET['postID'];
      $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE postID = ?");
      $select_posts->execute([$postID]);

      if ($select_posts->rowCount() > 0) {
         while ($fetch_posts = $select_posts->fetch(PDO::FETCH_ASSOC)) {
         }
      } else {
         echo '<p class="empty">No posts found!</p>';
      }
      ?>
         <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="old_image" value="<?= $fetch_posts['postImage']; ?>">
            <input type="hidden" name="post_id" value="<?= $fetch_posts['postID']; ?>">

            <p>Post status <span>*</span></p>
            <select name="postStatus" class="box" required>
               <option value="<?= $fetch_posts['postStatus']; ?>" selected><?= $fetch_posts['postStatus']; ?></option>
               <option value="publish">Publish</option>
               <option value="draft">Draft</option>
            </select>

            <p>Post Title <span>*</span></p>
            <input type="text" name="title" maxlength="100" required placeholder="Add post title" class="box" value="<?= $fetch_posts['postTitle']; ?>">

            <p>Post Content <span>*</span></p>
            <textarea name="content" class="box" required maxlength="20000" placeholder="Write your content..." cols="30" rows="10"><?= $fetch_posts['postContent']; ?></textarea>

            <p>Post Link <span>*</span></p>
            <input type="url" name="link" class="box" required value="<?= $fetch_posts['postLink']; ?>">

            <p>Post Image</p>
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">

            <?php if ($fetch_posts['postImage'] != '') { ?>
               <img src="../uploads/articleImages/<?= $fetch_posts['postImage']; ?>" class="image" alt="">
               <input type="submit" value="Delete Image" class="inline-delete-btn" name="delete_image">
            <?php } ?>

            <div class="flex-btn">
               <input type="submit" value="Save Post" name="save" class="btn">
               <a href="../articles/view-post.php" class="option-btn">Go back</a>
               <input type="submit" value="Delete Post" class="delete-btn" name="delete_post">
            </div>
         </form>

         <div class="flex-btn">
            <a href="../articles/view-post.php" class="option-btn">View posts</a>
            <a href="../articles/add-post.php" class="option-btn">Add posts</a>
         </div>
   </section>

   <!-- custom js file link  -->
   <script src="../js/admin_script.js"></script>

</body>

</html>