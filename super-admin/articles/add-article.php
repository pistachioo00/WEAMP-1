<?php

include '../super-admin/components/config.php';

session_start();

$adminID = $_SESSION['adminID'];

if (!isset($adminID)) {
    header('location:sa-login.php');
}

if (isset($_POST['Publish'])) {

    $title = $_POST['title'];
    $title = filter_var($title, FILTER_SANITIZE_STRING);
    $content = $_POST['content'];
    $content = filter_var($content, FILTER_SANITIZE_STRING);
    $link = $_POST['link'];
    $link = filter_var($links, FILTER_SANITIZE_STRING);
    $status = 'Publish';

    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../uploads/articleImage' . $image;

    $select_image = $conn->prepare("SELECT * FROM `posts` WHERE image = ? AND adminID = ?");
    $select_image->execute([$image, $adminID]);

    if (isset($image)) {
        if ($select_image->rowCount() > 0 and $image != '') {
            $message[] = 'Image name repeated!';
        } elseif ($image_size > 3000000) {
            $message[] = 'Images size is too large!';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);
        }
    } else {
        $image = '';
    }

    if ($select_image->rowCount() > 0 and $image != '') {
        $message[] = 'Please rename your image!';
    } else {
        $insert_post = $conn->prepare("INSERT INTO `posts`(adminID, title, content, link, image, video, status) VALUES(?,?,?,?,?,?,?)");
        $insert_post->execute([$adminID, $title, $content, $link, $image, $video, $status]);
        $message[] = 'Post published!';
    }
}


if (isset($_POST['Draft'])) {

    $title = $_POST['title'];
    $title = filter_var($title, FILTER_SANITIZE_STRING);
    $content = $_POST['content'];
    $content = filter_var($content, FILTER_SANITIZE_STRING);
    $link = $_POST['link'];
    $link = filter_var($links, FILTER_SANITIZE_STRING);
    $status = 'Draft';

    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_STRING);
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../uploaded_img/' . $image;

    $select_image = $conn->prepare("SELECT * FROM `posts` WHERE image = ? AND adminID = ?");
    $select_image->execute([$image, $adminID]);

    if (isset($image)) {
        if ($select_image->rowCount() > 0 and $image != '') {
            $message[] = 'Image name repeated!';
        } elseif ($image_size > 30000000) {
            $message[] = 'Images size is too large!';
        } else {
            move_uploaded_file($image_tmp_name, $image_folder);
        }
    } else {
        $image = '';
    }

    if ($select_image->rowCount() > 0 and $image != '') {
        $message[] = 'Please rename your image!';
    } else {
        $insert_post = $conn->prepare("INSERT INTO `posts`(adminID, title, content, link, image, status) VALUES(?,?,?,?,?,?)");
        $insert_post->execute([$adminID, $title, $content, $link, $image, $status]);
        $message[] = 'Draft saved!';
    }

}
?>

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
    <link rel="stylesheet" href="../css/sa.css">

</head>

<body>


    <?php include '../components/admin-header.php' ?>

    <section class="post-editor">

        <h1 class="heading">Add new post</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <p>Post Title <span>*</span></p>
            <input type="text" name="title" maxlength="100" required placeholder="add post title" class="box">
            <p>Post Content <span>*</span></p>
            <textarea name="content" class="box" required maxlength="20000" placeholder="write your content..." cols="30" rows="10"></textarea>
            <p>Post Link <span>*</span></p>
            <input type="url" id="link" name="link" required>
            <div class="flex-btn">
                <input type="submit" value="publish post" name="publish" class="btn">
                <input type="submit" value="save draft" name="draft" class="option-btn">
            </div>
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