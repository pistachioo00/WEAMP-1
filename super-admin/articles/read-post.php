<?php

include $_SERVER['DOCUMENT_ROOT'] . '/bk_WEAMP/WEAMP/public/config.php';

session_start();

$adminID = $_SESSION['adminID'];

if (!isset($adminID)) {
   header('location:sa-home.php');
}

$get_id = $_GET['postID'];

if (isset($_POST['delete'])) {

   $postID = $_POST['postID'];
   $postID = filter_var($postID, FILTER_SANITIZE_STRING);

   // Get post image for deletion
   $delete_postImage = $conn->prepare("SELECT * FROM `posts` WHERE postID = ?");
   $delete_postImage->execute([$postID]);
   $fetch_delete_postImage = $delete_postImage->fetch(PDO::FETCH_ASSOC); // Corrected fetch

   if (!empty($fetch_delete_postImage['postImage'])) { // Corrected image handling
      unlink('../../uploads/articleImages/' . $fetch_delete_postImage['postImage']);
   }

   // Delete the post
   $delete_post = $conn->prepare("DELETE FROM `posts` WHERE postID = ?");
   $delete_post->execute([$postID]);

   header('location:../../articles/view-post.php');
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
   <!-- <link rel="stylesheet" href="../../css/sa.css"> -->
   <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../css/styles.css">

</head>

<body>

   <section class="read-post">

      <?php
      // Fetch post data
      $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE adminID = ? AND postID = ?");
      $select_posts->execute([$adminID, $get_id]);

      if ($select_posts->rowCount() > 0) {
         $fetch_posts = $select_posts->fetch(PDO::FETCH_ASSOC); // Fetch single post
         $postID = $fetch_posts['postID'];
      } else {
         echo '<p>No post found!</p>';
      }
      ?>
      <form method="post">
         <input type="hidden" name="postID" value="<?= $postID; ?>">
         <div class="status" style="background-color:<?php if ($fetch_posts['postStatus'] == 'publish') {
                                                         echo 'limegreen';
                                                      } else {
                                                         echo 'coral';
                                                      }; ?>;"><?= $fetch_posts['postStatus']; ?></div>
         <?php if (!empty($fetch_posts['postImage'])) { ?>
            <img src="../../uploads/articleImages/<?= $fetch_posts['postImage']; ?>" class="image" alt="">
         <?php } ?>
         <div class="title"><?= $fetch_posts['postTitle']; ?></div>
         <div class="content"><?= $fetch_posts['postContent']; ?></div>
         <div class="link"><?= $fetch_posts['postLink']; ?></div>
         <div class="flex-btn">
            <a href="../../articles/edit-post.php?id=<?= $postID; ?>" class="inline-option-btn">Edit</a>
            <button type="submit" name="delete" class="inline-delete-btn" onclick="return confirm('Delete this post?');">Delete</button>
            <a href="../../articles/view-post.php" class="inline-option-btn">Go back</a>
         </div>
      </form>
   </section>

   <!-- custom js file link  -->
   <script src="../js/super-admin.js"></script>

</body>

</html>