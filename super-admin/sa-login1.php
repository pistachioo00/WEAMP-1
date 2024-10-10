<?php

include '../super-admin/components/config.php';

session_start();

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE name = ? AND password = ?");
    $select_admin->execute([$name, $pass]);

    if ($select_admin_id->rowCount() > 0) {
        $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
        $_SESSION['adminID'] = $fetch_admin_id['id'];
        header('location:sa-home.php');
    } else {
        $message[] = 'Incorrect username or password!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Admin Login</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/sa.css">

</head>

<body style="padding-left: 0 !important;">


    <?php
    if (isset($message)) {
        foreach ($message as $message) {
            echo '
    <div class="message">
        <span>' . $message . '</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
    </div>
    ';
        }
    }
    ?>

    <!-- admin login form section starts  -->

    <section class="form-container">
        <form action="" method="POST">
            <section class="news-sec" style="padding-top:6%">
                <div class="container">
                    <div class="row justify-content-center align-items-center"> <!-- Modified row class -->
                        <div style="display: flex; justify-content: center;">
                            <img src="../assets/Valenzuela-seal.png" alt="Valenzuela-Seal" style="max-width: 150px;">
                        </div>

                        <div class="col-12 text-center" style="margin-bottom: -10px;">
                            <h1 class="display-2 mb-2" style="font-family: main-font; font-size: 3.5rem; margin-bottom: -5px; color: #1C05B3; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">WEAMP</h1>
                            <p class="display-2 mb-0" style="font-family: Arial, sans serif; font-size: 1.3rem; margin-top: -5px; color: #3682CC">Workers and Employers Affairs Management Platform</p>
                        </div>
                    </div>
                </div>
            </section>
            <h3>Login now</h3>
            <input type="text" name="name" maxlength="20" required placeholder="Username/Email Address" class="box" style="background-color: #E5EEFF;">
            <img src=" ../assets/User-register.svg" alt="User Icon" class="field-icon">

            <input type="password" name="pass" maxlength="20" required placeholder="Password" class="box">
            <img src="../assets/View_alt.svg" alt="Password Icon" class="field-icon">
            <input type="submit" value="Sign In" name="submit" class="btn">


    </section>

    <!-- admin login form section ends -->













</body>

</html>