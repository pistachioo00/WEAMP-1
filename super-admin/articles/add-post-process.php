
<?php
// Include the database configuration file
require_once '../../public/config.php';

session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/bk_WEAMP/WEAMP/public/config.php';

// Check if adminID is set in the session
if (!isset($_SESSION['adminID'])) {
    echo "Admin ID is not set in session.";
    exit; // Stop further execution
}

$adminID = $_SESSION['adminID'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['publish'])) {
    $postTitle = filter_var($_POST['postTitle'], FILTER_SANITIZE_STRING);
    $postContent = filter_var($_POST['postContent'], FILTER_SANITIZE_STRING);
    $postLink = filter_var($_POST['postLink'], FILTER_SANITIZE_STRING);
    $postStatus = 'Publish';

    $allowed_exs = array("jpg", "jpeg", "png");

    if (isset($_FILES['postImage'])) {
        $postImage = $_FILES['postImage']['name'];
        $postImage_tmp_name = $_FILES['postImage']['tmp_name'];
        $postImage_error = $_FILES['postImage']['error'];

        if ($postImage_error === 0) {
            $postImage_ext = strtolower(pathinfo($postImage, PATHINFO_EXTENSION));
            if (in_array($postImage_ext, $allowed_exs)) {
                $new_postImage_name = uniqid("POST-", true) . '.' . $postImage_ext;
                $postImage_upload_path = '../../uploads/articleImages/' . $new_postImage_name;

                if (move_uploaded_file($postImage_tmp_name, $postImage_upload_path)) {
                    // Insert into the database
                    $insert_post = $conn->prepare("INSERT INTO posts (adminID, postTitle, postContent, postLink, postImage, postStatus) VALUES (?, ?, ?, ?, ?, ?)");
                    $insert_post->bind_param('isssss', $adminID, $postTitle, $postContent, $postLink, $new_postImage_name, $postStatus);
                    $insert_post->execute();
                    echo "Post published!";
                } else {
                    echo "Failed to upload post image.";
                }
            } else {
                echo "Invalid file type for post image.";
            }
        } else {
            echo "Error uploading post image.";
        }
    }

    // Check if the image already exists for this admin
    $select_image = $conn->prepare("SELECT * FROM `posts` WHERE postImage = ? AND adminID = ?");
    $select_image->bind_param('si', $new_postImage_name, $adminID); // Use new_postImage_name instead of postImage
    $select_image->execute();
    $select_image->store_result();
    $image_count = $select_image->num_rows;

    if ($image_count > 0) {
        echo 'Image name repeated!';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['draft'])) {
    $postTitle = filter_var($_POST['postTitle'], FILTER_SANITIZE_STRING);
    $postContent = filter_var($_POST['postContent'], FILTER_SANITIZE_STRING);
    $postLink = filter_var($_POST['postLink'], FILTER_SANITIZE_STRING);
    $postStatus = 'Draft';

    $allowed_exs = array("jpg", "jpeg", "png");

    if (isset($_FILES['postImage'])) {
        $postImage = $_FILES['postImage']['name'];
        $postImage_tmp_name = $_FILES['postImage']['tmp_name'];
        $postImage_error = $_FILES['postImage']['error'];

        if ($postImage_error === 0) {
            $postImage_ext = strtolower(pathinfo($postImage, PATHINFO_EXTENSION));
            if (in_array($postImage_ext, $allowed_exs)) {
                $new_postImage_name = uniqid("POST-", true) . '.' . $postImage_ext;
                $postImage_upload_path = '../../uploads/articleImages/' . $new_postImage_name;

                if (move_uploaded_file($postImage_tmp_name, $postImage_upload_path)) {
                    // Insert into the database
                    $insert_post = $conn->prepare("INSERT INTO posts (adminID, postTitle, postContent, postLink, postImage, postStatus) VALUES (?, ?, ?, ?, ?, ?)");
                    $insert_post->bind_param('isssss', $adminID, $postTitle, $postContent, $postLink, $new_postImage_name, $postStatus);
                    $insert_post->execute();

                    echo "Draft saved!";
                } else {
                    echo "Failed to upload post image.";
                }
            } else {
                echo "Invalid file type for post image.";
            }
        } else {
            echo "Error uploading post image.";
        }
    }

    // Check if the image already exists for this admin
    $select_postImage = $conn->prepare("SELECT * FROM posts WHERE postImage = ? AND adminID = ?");
    $select_postImage->bind_param('si', $new_postImage_name, $adminID); // Use new_postImage_name
    $select_postImage->execute();
    $select_postImage->store_result();
    $postImage_count = $select_postImage->num_rows;

    if ($postImage_count > 0) {
        echo 'Image name repeated!';
    }
}

?>
