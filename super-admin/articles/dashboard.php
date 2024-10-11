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
   <title>Posts Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/sa.css">

</head>
<body>

<?php include '../components/admin-header.php' ?>

<!-- admin dashboard section starts  -->

<section class="dashboard">

   <h1 class="heading">dashboard</h1>

   <div class="box-container">

<!--    <div class="box">
      <h3>welcome!</h3>
      <p><?= $fetch_profile['name']; ?></p>
      <a href="update_profile.php" class="btn">update profile</a>
   </div> -->

   <div class="box">
      <?php
         $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ?");
         $select_posts->execute([$adminID]);
         $numbers_of_posts = $select_posts->rowCount();
      ?>
      <h3><?= $numbers_of_posts; ?></h3>
      <p>Posts Added</p>
      <a href="add-post.php" class="btn">Add new post</a>
   </div>

   <div class="box">
      <?php
      $select_publish_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ? AND status = ?");
         $select_publish_posts->execute([$adminID, 'publish']);
      $numbers_of_publish_posts = $select_publish_posts->rowCount();
      ?>
      <h3><?= $numbers_of_publish_posts; ?></h3>
      <p>Publish posts</p>
      <a href="view-posts.php" class="btn">See Posts</a>
   </div>

   <div class="box">
      <?php
         $select_draft_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ? AND status = ?");
      $select_draft_posts->execute([$adminID, 'draft']);
      $numbers_of_draft_posts = $select_draft_posts->rowCount();
      ?>
      <h3><?= $numbers_of_draft_posts; ?></h3>
      <p>Draft posts</p>
      <a href="view-posts.php" class="btn">See Posts</a>
   </div>

   </div>

</section>

<!-- admin dashboard section ends -->










<!-- custom js file link  -->
<script src="../js/super-admin.js"></script>

</body>
</html>