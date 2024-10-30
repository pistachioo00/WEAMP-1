<!-- PREVENT FROM ACCCESS NA NAKALOG OUT KA NA -->
<?php
include 'auth.php';
checkLogin();

include '../public/config.php';

session_start();

if (isset($_SESSION['accountID'])) {
    $accountID = $_SESSION['accountID'];
} else {
    $accountID = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
    <style>
    .container {
        overflow: hidden;
    }

    .notification-panel {
        width: 20%;
        position: absolute;
        left: 72%;
        top: 5%;
        max-height: 400px;
        overflow-y: auto;
        font-family: Arial;
        z-index: 9999;
    }

    /* PUSH NOTIFICATIONS */
    .notification-list {
        list-style-type: none;
        padding: 0;
    }

    .notification-list li {
        background-color: #f5f5f5;
        padding: 10px;
        margin-bottom: 5px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    .notification-list li:hover {
        background-color: #e0e0e0;
        cursor: pointer;
    }

    /* Ensure collapsible content is fixed when collapsed */
    #collapseNotifications:not(.show) {
        position: fixed;
    }

    .container {
        overflow: hidden;
    }

    .rec-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
        gap: 20px;
    }

    #rec {
        border: 1.5px solid black;
        padding: 20px;
        margin-bottom: 50px;
        background-color: transparent;
        height: 400px;
        width: 360px;
    }

    /* Adjust h1 size for smaller screens */
    @media (max-width: 768px) {
        h1.display-2 {
            font-size: 2.5rem;
            padding-top: 5%;
            padding-bottom: 4%;
        }

        .services-sec img {
            width: 80px;
            /* Adjust width as needed */
            height: 50px;
            /* Adjust height as needed */
        }

        .services-sec p {
            font-size: 14px;
            /* Adjust font size as needed */
        }
    }

    @media (max-width: 480px) {
        h1.display-2 {
            font-size: 2rem;
            padding-top: 3%;
            padding-bottom: 3%;
        }

        .services-sec img {
            width: 60px;
            /* Adjust width as needed */
            height: 40px;
            /* Adjust height as needed */
        }

        .services-sec p {
            font-size: 12px;
            /* Adjust font size as needed */
        }

        body {
            max-width: 100%;
        }
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #C80000;">
        <div class="container">
            <a class="navbar-brand" href="../user/home.php">
                <img src="../assets/WAO-Logo.svg" alt="Header-Title" style="width: 300px; height: 80px;">
            </a>
            <button style="width: 10%; height: 50%; background-color: #fff; border: none;" class="navbar-toggler"
                type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: #C80000;"></span>
            </button>
            <div class="mr-5"></div>
            <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 mr-5">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/rfa.php">RFA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/dashboard-status.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/contact-us.php">Contact</a>
                    </li>
                    <div class="mr-5"></div>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#collapseNotifications"
                            aria-expanded="false" aria-controls="collapseNotifications">
                            <img src="../assets/Bell_Pin.svg" alt="Notification"
                                style="width: 20px; height: 20px; margin-right: 5px;">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../user/my-account.php">
                            <img src="../assets/User.svg" alt="My-Account"
                                style="width: 20px; height: 20px; margin-right: 5px;">
                            My Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" onclick="showLogoutConfirmation()">
                            <img src="../assets/Sign_out_square.svg" alt="Sign-out"
                                style="width: 20px; height: 20px; margin-right: 5px;">
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Add the logout confirmation modal markup -->
    <div class="modal fade" id="logoutConfirmationModal" tabindex="-1" aria-labelledby="logoutConfirmationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-center" id="logoutConfirmationModalLabel">Logout Confirmation</h5>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to log out?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="logout()">Logout</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Collapsible content -->
    <div class="collapse position-fixed"
        style="width: 20%; left: 65%; top: 0; max-height: 400px; overflow-y: auto; font-family: Arial; padding-top: 5%; z-index: 9999;"
        id="collapseNotifications">
        <div class="card card-body">
            <ul class="notification-list">
                <!-- Example notifications -->
                <li>No notifications</li>
            </ul>
        </div>
    </div>

    <section class="welcome-sec">
        <div class="container">
            <h1 class="text-start" style="font-family: main-font; font-size: 5rem">WEMP</h1>
            <h2 class="text-start" style="font-family: Arial, sans serif; font-weight: bold">Welcome to Workers and
                Employers Management Platforms<br> of Valenzuela City Worker’s Affairs Office</h2>
        </div>
    </section>

    <section class="container text-center">
        <div class="clock">
            <div id="Date" style="font-family: 'Arial', sans serif"></div>
        </div>
    </section>

    <?php
    // Define variables
    $solved_cases = 525;
    $unsolved_cases = 202;

    echo "<div style='display: flex; justify-content: center; margin-top: 20px;'>";
    echo "<div style='text-align: center; margin-right: 20px; padding-right: 10%; padding-top: 3%'>";
    echo "<h3 style='margin: 0; font-family: main-font; padding-top: 3%;'>$solved_cases</h3><p style='margin: 0; font-family: Arial, sans-serif'>Solved Cases</p>";
    echo "</div>";
    echo "<div style='text-align: center; padding-left: 10%; padding-top: 3%'>";
    echo "<h3 style='margin: 0; font-family: main-font;'>$unsolved_cases</h3><p style='margin: 0; font-family: Arial, sans-serif'>Unsolved Cases</p>";
    echo "</div>";
    echo "</div>";



    ?>

    <section class="services-sec">
        <div class="container">
            <h1 class="display-2 text-center"
                style="font-family: main-font; font-size: 2.5rem; padding-top: 7%; padding-bottom: 3%;">SERVICES</h1>
        </div>
    </section>

    <section class="container">
        <ul class="list-unstyled d-flex justify-content-center">
            <li class="text-center mx-2" style="padding-right: 3rem">
                <a href="../user/rfa.php">
                    <img src="../assets/Form.svg" alt="Form" class="img-fluid" style="width: 100px; height: 70px;">
                    <p style="color: black">Request for</br> Assistance</p>
                </a>
            </li>
            <li class="text-center mx-2">
                <a href="#" disabled>
                    <img src="../assets/seminar.svg" alt="Seminar" class="img-fluid" style="width: 100px; height: 70px;"
                        disabled>
                    <p style="color: black">Seminar</p>
                </a>
            </li>
            <li class="text-center mx-2" style="padding-left: 3rem">
                <a href="#">
                    <img src="../assets/note.svg" alt="Quit Claim" class="img-fluid"
                        style="width: 100px; height: 70px;">
                    <p style="color: black">Quit Claim</p>
                </a>
            </li>
        </ul>
    </section>

    <section class="assist-sec">
        <div class="container">
            <h1 class="display-2 text-center"
                style="font-family: main-font; font-size: 2.5rem; padding-top: 7%; padding-bottom: 6%;">HOW CAN WE
                ASSIST YOU?</h1>
        </div>
    </section>

    <div class="centered-button">
        <a href="#" style="font-family: sub-font;">For Requesting Party</a>
    </div>
    <section class="container">
        <div class="row">
            <!-- First div -->
            <div class="col-md-4">
                <div class="image-div">
                    <img src="../assets/Online.svg" alt="Online" class="img-fluid">
                    <p class="mt-3" style="font-family: sub-font;">
                        <span style=" font-family: sub-font-bold;">1. REGISTER </span><br>
                        Register for an account by providing the necessary information needed to access the various
                        features available.
                    </p>
                </div>
            </div>

            <!-- Second div -->
            <div class="col-md-4">
                <div class="image-div">
                    <img src="../assets/Clock.svg" alt="Clock" class="img-fluid">
                    <p class="mt-3" style=" font-family: sub-font;">
                        <span style=" font-family: sub-font-bold;">2. VERIFICATION / APPROVAL</span> <br>
                        Please anticipate an email sent to your registered email address, which serves as confirmation
                        of your verified account approval. Thank you for your patience as we finalize the verification
                        process.
                    </p>
                </div>
            </div>
            <!-- Add more columns for additional divs if needed -->

            <!-- Third div -->
            <div class="col-md-4">
                <div class="image-div">
                    <img src="../assets/survey.svg" alt="Survey" class="img-fluid">
                    <p class="mt-3" style=" font-family: sub-font">
                        <span style=" font-family: sub-font-bold;">3. START POSTING</span> <br>
                        Now that your registration is complete, you are now authorized to start posting.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="announcement-sec">
        <div class="container">
            <h1 class="display-2 text-center"
                style="font-family: main-font; font-size: 2.5rem; padding-top: 7%; padding-bottom: 6%;">ANNOUNCEMENTS
            </h1>
            <?php
            // Database connection (make sure $conn is your connection object)
            require_once '../public/config.php'; // Include your DB connection here

            $select_posts = $conn->prepare("SELECT posts.postID, posts.postTitle, posts.postContent, posts.postLink, posts.postImage, posts.postDate, admin.adminID 
                                FROM `posts` 
                                JOIN `admin` ON posts.adminID = admin.adminID 
                                WHERE postStatus = ? 
                                ORDER BY posts.postDate DESC 
                                LIMIT 6");
            $postStatus = 'Publish';
            $select_posts->bind_param('s', $postStatus);
            $select_posts->execute();

            // Bind the result columns to variables
            $select_posts->bind_result($postID, $postTitle, $postContent, $postLink, $postImage, $postDate, $adminID);

            // Check if there are any results
            if ($select_posts->fetch()) {
                do {
            ?>
            <!-- HTML Structure to Display Post -->
            <div class="post">
                <h2 class="post-title"><?= htmlspecialchars($postTitle); ?></h2>
                <p class="post-admin">
                    Posted
                    on: <?= htmlspecialchars($postDate); ?>
                </p>

                <?php if (!empty($postImage)): ?>
                <img src="../uploads/articleImages/<?= htmlspecialchars($postImage); ?>" alt="Post Image">
                <?php endif; ?>

                <p class="post-content">
                    <?= htmlspecialchars($postContent); ?>
                </p>

                <p class="post-link">
                    <?= htmlspecialchars($postLink); ?>
                </p>

                <a href="../articles/view-post.php?postID=<?= htmlspecialchars($postID); ?>" class="read-more">Read
                    More</a>
            </div>
            <?php
                } while ($select_posts->fetch());
            } else {
                echo '<p>No posts added yet!</p>';
            }
            ?>


        </div>

        <!-- Link to view all posts -->
        <div class="more-btn" style="text-align: center; margin-top:1rem;">
            <a href="../user/article-posts.php" class="p-inline-btn">View all posts</a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm mb-3 px-sm-3" style="border: 1px solid black; padding: 5%;">
                    <p class="mb-0" style="font-size: 20px; font-weight: bold; font-family: sub-font-bold;">Valenzuela
                        suspends business permit of NLEX operator over RFID mess</p>
                    <p class="mb-0" style="font-family: sub-font">Valenzuela City Mayor Rex Gatchalian suspended the
                        business permit of NLEX Corporation, the operator of the North Luzon Expressway (NLEX), after
                        the company failed to address the heavy traffic caused by its cashless payment system. </p>
                    <a href="https://www.rappler.com/nation/valenzuela-city-rejects-nlex-corporation-appeal-rfid-mess-december-2020/"
                        style="text-decoration: underline; font-family: sub-font">Read More</a>
                </div>
                <div class="col-sm mb-3 px-sm-3 offset-sm-1" style="border: 1px solid black; padding: 5%;">
                    <p class="mb-0" style="font-size: 20px; font-weight: bold; font-family: sub-font-bold;">Valenzuela
                        City suspends permit of factory that paid worker in centavo coins</p>
                    <p class="mb-0" style="font-family: sub-font">Valenzuela City Mayor Rex Gatchalian has suspended the
                        business permit of Nexgreen Enterprise, a company that paid a worker's salary in centavo coins.
                        The company was given 15 days to address employee concerns, employees received salary in coins
                        wrapped in adhesive tape. <span> <a
                                href="https://www.gmanetwork.com/news/topstories/metro/793485/valenzuela-city-suspends-permit-of-factory-that-paid-worker-in-centavo-coins/story/"
                                style="text-decoration: underline; font-family: sub-font">Read More</a></span></p>
                </div>
                <div class="col-sm mb-3 px-sm-3 offset-sm-1" style="border: 1px solid black; padding: 5%;">
                    <p class="mb-0" style="font-size: 20px; font-weight: bold; font-family: sub-font-bold;">Valenzuela
                        fire death trap highlights sweatshop abuses</p>
                    <p class="mb-0" style="font-family: sub-font;">The deaths of 72 people in a <span> <a
                                href="https://www.rappler.com/nation/93352-valenzuela-fire-sweatshop-abuses/"
                                style="text-decoration: underline; font-family: sub-font">footwear factory
                                fire</a></span> in Valenzuela city have exposed abusive conditions for millions of poor
                        and desperate workers across the Philippines. The alleged exploitation of workers at the
                        factory, where lax safety standards caused the fire, is anything but unusual across the country,
                        according to the government and unions.</p>
                </div>
            </div>
        </div>

        <section class="new-sec">
            <div class="container">
                <h1 class="display-2 text-center"
                    style="font-family: main-font; font-size: 2.5rem; padding-top: 7%; padding-bottom: 6%;">WHAT'S NEW?
                </h1>
            </div>
        </section>


        <div class="container">
            <div class="row">
                <div class="col-sm mb-3 px-sm-3" style="border: 1px solid black; padding: 5%;">
                    <p class="mb-0" style="font-size: 20px; font-weight: bold; font-family: sub-font-bold;">Valenzuela
                        suspends business permit of NLEX operator over RFID mess</p>
                    <p class="mb-0" style="font-family: sub-font">Valenzuela City Mayor Rex Gatchalian suspended the
                        business permit of NLEX Corporation, the operator of the North Luzon Expressway (NLEX), after
                        the company failed to address the heavy traffic caused by its cashless payment system. </p>
                    <a href="https://www.rappler.com/nation/valenzuela-city-rejects-nlex-corporation-appeal-rfid-mess-december-2020/"
                        style="text-decoration: underline; font-family: sub-font">Read More</a>
                </div>
                <div class="col-sm mb-3 px-sm-3 offset-sm-1" style="border: 1px solid black; padding: 5%;">
                    <p class="mb-0" style="font-size: 20px; font-weight: bold; font-family: sub-font-bold;">Valenzuela
                        City suspends permit of factory that paid worker in centavo coins</p>
                    <p class="mb-0" style="font-family: sub-font">Valenzuela City Mayor Rex Gatchalian has suspended the
                        business permit of Nexgreen Enterprise, a company that paid a worker's salary in centavo coins.
                        The company was given 15 days to address employee concerns, employees received salary in coins
                        wrapped in adhesive tape. <span> <a
                                href="https://www.gmanetwork.com/news/topstories/metro/793485/valenzuela-city-suspends-permit-of-factory-that-paid-worker-in-centavo-coins/story/"
                                style="text-decoration: underline; font-family: sub-font">Read More</a></span></p>
                </div>
                <div class="col-sm mb-3 px-sm-3 offset-sm-1" style="border: 1px solid black; padding: 5%;">
                    <p class="mb-0" style="font-size: 20px; font-weight: bold; font-family: sub-font-bold;">Valenzuela
                        fire death trap highlights sweatshop abuses</p>
                    <p class="mb-0" style="font-family: sub-font;">The deaths of 72 people in a <span> <a
                                href="https://www.rappler.com/nation/93352-valenzuela-fire-sweatshop-abuses/"
                                style="text-decoration: underline; font-family: sub-font">footwear factory
                                fire</a></span> in Valenzuela city have exposed abusive conditions for millions of poor
                        and desperate workers across the Philippines. The alleged exploitation of workers at the
                        factory, where lax safety standards caused the fire, is anything but unusual across the country,
                        according to the government and unions.</p>
                </div>
            </div>
        </div>


        <section class="container-fluid" style="background-color: #E5EEFF; padding: 60px;">
            <div class="row justify-content-center text-center">
                <!-- First div -->
                <div class="col-md-3">
                    <p class="mt-3" style="font-family: sub-font;">
                        <span
                            style="font-weight: bold; font-family: sub-font-bold; font-size: 2em; display: block; margin: 0 auto;">MISSION</span>
                        <br>
                        "To protect workers, promote their welfare, and maintain industrial peace"
                    </p>
                </div>

                <!-- Second div -->
                <div class="col-md-3">
                    <p class="mt-3" style="font-family: sub-font;">
                        <span
                            style="font-weight: bold; font-family: sub-font-bold; font-size: 2em; display: block; margin: 0 auto;">VISION</span>
                        <br>
                        "Every workers in Valenzuela attains full, decent and productive employment"
                    </p>
                </div>
                <!-- Add more columns for additional divs if needed -->
            </div>
        </section>

        <footer class="footer">
            <div class="container-footer">
                <p class="text-muted">Copyright 2024 © All Rights Reserved</br>
                    Worker’s Affairs Office</p>
            </div>
        </footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="index.js"></script>
<script>
function clock() {

    var monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];
    var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

    var today = new Date();

    document.getElementById('Date').innerHTML = (dayNames[today.getDay()] + ", " + monthNames[today.getMonth()] + ' ' +
        today.getDate());
}

var inter = setInterval(clock, 400);


function showLogoutConfirmation() {
    var logoutModal = new bootstrap.Modal(document.getElementById('logoutConfirmationModal'));
    logoutModal.show();
}


function logout() {
    window.location.href = "../public/home.php";
}

$(document).ready(function() {
    var $collapseElement = $('#collapseNotifications');
    var bsCollapse = new bootstrap.Collapse($collapseElement[0], {
        toggle: false
    });

    $('#collapseNotifications').on('click', function(event) {
        event.preventDefault();
        if ($collapseElement.hasClass('show')) {
            bsCollapse.hide();
        } else {
            bsCollapse.show();
        }
    });
});
</script>

</html>