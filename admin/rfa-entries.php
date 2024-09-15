<?php
include 'auth-admin.php';
checkAdminLogin();

$adminID = $_SESSION['adminID'];

include 'rfa-assignment-check-process.php';
checkAssignedRFA($adminID);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Entries</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="../admin/home.php">
                <img src="../assets/header-title-admin.svg" alt="Header-Title" style="width: 300px; height: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                <ul class="nav nav-underline navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-items">
                        <a class="nav-link" href="../admin/home.php">Home</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-link" href="../admin/dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" id="rfaLink" data-bs-toggle="popover" 
                    data-bs-html="true" data-bs-trigger="click" data-bs-title-center="RFA" 
                    data-bs-content='<div><a class="nav-link" href="rfa-entries.php" class="btn btn-link">New Entries</a><br><a class="nav-link" href="rfa-assignment.php" class="btn btn-link">Assignment</a></div>' data-bs-placement="bottom">
                        RFA
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="recordsLink" data-bs-toggle="popover" 
                        data-bs-html="true" data-bs-trigger="click" data-bs-title-center="Records" 
                        data-bs-content='<div><a class="nav-link" href="sena-records.php" class="btn btn-link">SENA Conferences</a><br><a class="nav-link" href="#" class="btn btn-link">Advice Counselling</a></div>' data-bs-placement="bottom">
                        Records
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Popover Content -->
            <div id="popoverContent" style="display: none;">
                <div class="popover-body">
                    <button type="button" class="btn btn-primary">Assignment</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">RFA Entries</button>
                </div>
            </div>

            <a href="#">
                <ul class="navbar-nav ml-auto">
                    <a class="nav-link" href="../admin/admin-account.php">
                        <img src="../assets/User-register.svg" alt="Register" style="width: 20px; height: 20px; margin-right: 5px;">
                        My Account
                    </a>
                    <a class="nav-link" href="../public/login.php">
                        <img src="../assets/Sign_in_squre.svg" alt="Sign-in" style="width: 20px; height: 20px; margin-right: 5px;">
                        Log out
                    </a>
                </ul>
            </a>
        </div>
    </nav>



    <section class="welcome-sec">
        <div class="container">
            <div class="row justify-content-between mb-2">
                <div class="col ml-auto">
                    <h4 class="fw-bold mt-3" style="font-family: sub-font-bold">NEW ENTRIES</h4>
                </div>
            </div>

            <!-- RETRIEVE NG ACCOUNT INFORMATION -->
        <?php

        include '../public/config.php';

        $sql = "SELECT rfa.claimsAndIssues, rfa.date, acc.fullName, rfa.referenceID
                FROM rfa rfa
                JOIN account acc ON rfa.accountID = acc.accountID
                WHERE rfa.status = 'PENDING';";
                
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $rfa = $result->fetch_assoc();
        ?>


            <table class="table table-bordered" style="border: 2px solid black; table-layout: fixed;">
                <colgroup>
                    <col style="width: 25%;">
                    <col style="width: 25%;">
                    <col style="width: 25%;">
                    <col style="width: 25%;">
                </colgroup>
                <thead>
                    <tr>
                        <th>Claims/Issues</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Receive</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Loop through the result set and display each row
                    while ($rfa = $result->fetch_assoc()) {
                        ?>
                    <tr>
                    <td class="align-middle"><?php echo htmlspecialchars($rfa['claimsAndIssues']); ?></td>
                    <td class="align-middle"><?php echo htmlspecialchars($rfa['fullName']); ?></td>
                    <td class="align-middle"><?php echo htmlspecialchars($rfa['date']); ?></td>
                    <td class="d-flex align-items-center justify-content-center">  
                        <form action="rfa-entries-process.php" method="POST">
                            <input type="hidden" id="referenceID" name="referenceID" value="<?php echo htmlspecialchars($rfa['referenceID']); ?>">
                            <button type="submit" class="btn btn-dark" style="width:55px; height: 45px"><img src="../assets/Done.svg"></button>
                        </form>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
    </section>


    <footer class="footer">
        <div class="container-footer">
            <p class="text-muted">Copyright 2024 © All Rights Reserved</br>
                Worker’s Affairs Office</p>
        </div>
    </footer>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    //Initialize popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

</html>