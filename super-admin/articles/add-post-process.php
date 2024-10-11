<?php

include $_SERVER['DOCUMENT_ROOT'] . '/bk_WEAMP/WEAMP/public/config.php';


session_start();

$adminID = $_SESSION['adminID'];

if (!isset($adminID)) {
    header('location:sa-home.php');
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

    $select_image = $conn->prepare("SELECT * FROM posts WHERE image = ? AND adminID = ?");
    $select_image->execute([$image, $adminID]);

    if (isset($image)) {
        if ($select_image->rowCount() > 0 and $image != '') {
            $message[] = 'Image name repeated!';
        } elseif ($image_size > 5000000) {
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
        $insert_post = $conn->prepare("INSERT INTO posts(adminID, title, content, link, image, status) VALUES(?,?,?,?,?,?,?)");
        $insert_post->execute([$adminID, $title, $content, $link, $image, $status]);
        $message[] = 'Post published!';
    }
}


if (isset($_POST['draft'])) {

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

    $select_image = $conn->prepare("SELECT * FROM posts WHERE image = ? AND adminID = ?");
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
        $insert_post = $conn->prepare("INSERT INTO posts(adminID, title, content, link, image, status) VALUES(?,?,?,?,?,?)");
        $insert_post->execute([$adminID, $title, $content, $link, $image, $status]);
        $message[] = 'Draft saved!';
    }
}
?>
