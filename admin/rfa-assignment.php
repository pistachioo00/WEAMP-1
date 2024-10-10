<?php
include 'auth-admin.php';
checkAdminLogin();

$adminID = $_SESSION['adminID'];

include 'rfa-entries-check-process.php';
checkNoAssignment($adminID);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFA Assignment</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
    <style>

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../user/index.php">
                <img src="../assets/Valenzuela-Seal-Outline.svg" alt="Valenzuela-Seal-Outline"
                    style="width: 80px; height: 80px;">
                <img src="../assets/Header-Title.svg" alt="Header-Title" style="width: 200px; height: 65px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                <ul class="navbar-nav nav-underline mx-auto mb-2 mb-lg-0">
                    <li class="nav-items">
                        <a class="nav-link" href="../admin/home.php">Home</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-link" href="../admin/dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="rfaLink" data-bs-toggle="popover"
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
                    Assignment
                </div>
            </div>

            <a href="#">
                <ul class="navbar-nav ml-auto">
                    <a class="nav-link" href="../admin/admin-account.php">
                        <img src="../assets/User.svg" alt="My-Account"
                            style="width: 20px; height: 20px; margin-right: 5px;">
                        My Account
                    </a>
                    <a class="nav-link" href="logout.php" onclick="showLogoutConfirmation()">
                        <img src="../assets/Sign_out_square.svg" alt="Sign-out"
                            style="width: 20px; height: 20px; margin-right: 5px;">
                        Log Out
                    </a>
                </ul>
            </a>
        </div>
    </nav>

    <!-- Add the logout confirmation modal markup -->
    <div class="modal fade" id="logoutConfirmationModal" tabindex="-1"
        aria-labelledby="logoutConfirmationModalLabel" aria-hidden="true">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div><br>

    <?php
    include '../public/config.php';

    // Get the current admin ID from the session
    $adminID = $_SESSION['adminID'];

    // Query to get the details including the accountID
    $sql = "SELECT 
            rfa.businessName,
            rfa.claimsAndIssues,
            rfa.claimsRemarks,
            rfa.reliefPrayedFor,
            rfa.reliefsRemarks,
            rfa.date AS dateCreated,
            rfa.status AS status,
            acc.*, 
            assign.*, 
            admin.adminID,
            admin.fullName AS adminFullName,
            admin.username AS adminUsername
        FROM 
            rfa AS rfa
        JOIN 
            account AS acc ON rfa.accountID = acc.accountID
        JOIN 
            assignment AS assign ON acc.accountID = assign.accountID
        JOIN 
            admin AS admin ON assign.adminID = admin.adminID  
        WHERE 
            rfa.status != 'PENDING' AND assign.adminID = ?;";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $adminID);
    $stmt->execute();
    $result = $stmt->get_result();
    $assigned = $result->fetch_assoc();

    ?>

    <div class="container" style="padding-top:8%">
        <h2 class="text-start" style="font-family: sub-font-bold; font-weight: bold">ASSIGNMENT</h2>

        <div class="container">
            <table class="table">
                <tbody>
                    <tr>
                        <td style="font-weight:bold">Submitted date</td>
                        <td><?php echo htmlspecialchars($assigned['dateCreated']); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold">Created by</td>
                        <td><?php echo htmlspecialchars($assigned['fullName']); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold">Received date</td>
                        <td><?php echo htmlspecialchars($assigned['datetime']); ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight:bold">SEADO assigned</td>
                        <td><?php echo htmlspecialchars($assigned['adminFullName']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <?php
        $oldAdminID = $_SESSION['adminID'];

        include '../public/config.php';

        $sql = "SELECT * FROM admin";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        ?>

        <div class="col-md-4 d-flex justify-content-center align-items-center" style="padding-left: 1%">
            <form action="move-assignment-process.php" method="POST" class="w-100">
                <div class="form-group d-flex align-items-center">
                    <!-- Dropdown -->
                    <select id="newAdminID" name="newAdminID" class="form-control me-2">
                        <?php while ($admin = $result->fetch_assoc()) { ?>
                            <option value="<?php echo htmlspecialchars($admin['adminID']); ?>">
                                <?php echo htmlspecialchars($admin['fullName']); ?>
                            </option>
                        <?php } ?>
                    </select>
                    <!-- Button -->
                    <button type="submit" class="btn btn-dark fw-bold" style="font-size: 0.8rem; padding: 10px; border-radius: 50px;">
                        MOVE ASSIGNMENT
                    </button>
                </div>
            </form>
        </div>



        <h4 class="fw-bold text-end mt-5" style="font-family: Arial; color: black">Reference No.</h4>
        <h2 class="fw-bold text-end" style="font-family: Arial; color: black">
            SEAD RCMD NCR-VAL-<?php echo htmlspecialchars($assigned['referenceID']); ?>-<?php echo date_format(date_create(htmlspecialchars($assigned['dateCreated'])), 'm-Y'); ?>
        </h2>

        <hr class="my-4" style="border-top: 2px solid black;">

        <h3 class="fw-bold text-start mt-2 mb-3" style="font-family: Arial; color: black">Requesting Party</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Date Employed</th>
                    <th>Service Years</th>
                    <th>Nature of Work</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($assigned['fullName']); ?></td>
                    <td><?php echo htmlspecialchars($assigned['addressLine1'] . ", " . $assigned['barangay'] . ", " . $assigned['city'] . ", " . $assigned['province'] . ", " . $assigned['region']); ?></td>
                    <td><?php echo htmlspecialchars($assigned['contact']); ?></td>
                    <td><?php echo htmlspecialchars($assigned['employmentDate']); ?></td>
                    <td><?php echo htmlspecialchars($assigned['yearsOfService']); ?></td>
                    <td><?php echo htmlspecialchars($assigned['natureOfWork']); ?></td>
                </tr>
            </tbody>
        </table>
        <?php
        if ($assigned) {
            $accountID = $assigned['accountID']; // Get the accountID from the fetched data

            // Query to get images for the specific accountID
            $sql_images = "SELECT selfieWithID, governmentID FROM account WHERE accountID = ?";

            if ($stmt_images = $conn->prepare($sql_images)) {
                $stmt_images->bind_param("i", $accountID);
                $stmt_images->execute();
                $stmt_images->bind_result($selfieWithID, $governmentID);

                if ($stmt_images->fetch()) { ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Government ID</th>
                                <th>Selfie With ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="../uploads/governmentID/<?= htmlspecialchars($governmentID) ?>" alt="Government ID" style="width:200px;height:auto;" data-bs-toggle="modal" data-bs-target="#govIDModal">
                                </td>
                                <td>
                                    <img src="../uploads/selfieWithID/<?= htmlspecialchars($selfieWithID) ?>" alt="Selfie with ID" style="width:130px;height:auto;" data-bs-toggle="modal" data-bs-target="#selfieIDModal">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php
                } else { ?>
                    <tr>
                        <td colspan="2">No images found for this account ID</td>
                    </tr>
        <?php }

                $stmt_images->close();
            } else {
                echo "Error preparing the SQL statement for images: " . $conn->error;
            }
        } else {
            echo "No data found for this admin.";
        }

        $stmt->close();
        $conn->close();
        ?>

        <!-- Government ID Modal -->
        <div class="modal fade" id="govIDModal" tabindex="-1" aria-labelledby="govIDModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="govIDModalLabel">Government ID</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="../uploads/governmentID/<?= htmlspecialchars($governmentID) ?>" alt="Government ID" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Selfie with ID Modal -->
        <div class="modal fade" id="selfieIDModal" tabindex="-1" aria-labelledby="selfieIDModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="selfieIDModalLabel">Selfie with ID</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="../uploads/selfieWithID/<?= htmlspecialchars($selfieWithID) ?>" alt="Selfie with ID" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-4" style="border-top: 2px solid black;">

        <h3 class="fw-bold text-start mt-2 mb-3" style="font-family: Arial; color: black">Responding Party</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Date Employed</th>
                    <th>Service Years</th>
                    <th>Nature of Work</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($assigned['businessName']); ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <hr class="my-4" style="border-top: 2px solid black;">

        <h3 class="fw-bold text-start mt-2 mb-3" style="font-family: Arial; color: black">Claims/Issues</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Subject of Request</th>
                    <th>Remarks</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding-bottom: 4%"><?php echo htmlspecialchars($assigned['claimsAndIssues']); ?></td>
                    <td style="padding-bottom: 4%"><?php echo htmlspecialchars($assigned['claimsRemarks']); ?></td>
                </tr>
            </tbody>
        </table>

        <hr class="my-4" style="border-top: 2px solid black;">

        <h3 class="fw-bold text-start mt-2 mb-3" style="font-family: Arial; color: black">Relief Prayed For</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Subject of Request</th>
                    <th>Remarks</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding-bottom: 4%"><?php echo htmlspecialchars($assigned['reliefPrayedFor']); ?></td>
                    <td style="padding-bottom: 4%"><?php echo htmlspecialchars($assigned['reliefsRemarks']); ?></td>
                </tr>
            </tbody>
        </table>

        <!-- <div class="col-md-2 d-flex justify-content-center align-items-center" style=" padding-right: 5%">
            <a href="assignment-take-action.php"> <button class="btn btn-dark fw-bold mb-5"
                    style="font-size: 1rem; padding: 8px; border-radius: 50px;">
                    TAKE ACTION
                </button></a>
        </div> -->

        <div class="d-flex justify-content-center align-items-center" style="padding-right: 5%;">

            <div class="col-md-2">
                <a href="assignment-take-action.php">
                    <button class="btn btn-dark fw-bold mb-5" style="font-size: 1rem; padding: 8px; border-radius: 50px;">
                        TAKE ACTION
                    </button>
                </a>
            </div>

            <!-- Iterate over the result set to create multiple forms for each record -->
            <div class="col-md-2">
                <form action="update-activity.php" method="POST" class="mb-5">
                    <input type="hidden" id="referenceID" name="referenceID" value="<?php echo htmlspecialchars($assigned['referenceID']); ?>">
                    <button type="submit" class="btn btn-dark fw-bold" style="font-size: 1rem; padding: 8px; border-radius: 50px;">
                        REVIEWED
                    </button>
                </form>
                <!-- Display reference ID for debugging purposes (optional) -->
                <p>Reference ID: <?php echo htmlspecialchars($assigned['referenceID']); ?></p>
            </div>
        </div>


    </div>

    <footer class="footer">
        <div class="container-footer">
            <p class="text-muted">Copyright 2024 © All Rights Reserved</br>
                Worker’s Affairs Office</p>
        </div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


<script>
    //Initialize popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    function showLogoutConfirmation() {
        $('#logoutConfirmationModal').modal('show');
    }

    function logout() {
        window.location.href = "logout.php";
    }
</script>

</html>