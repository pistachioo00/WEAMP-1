<?php
include 'auth-admin.php';
checkAdminLogin();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENA Records - Worker's Affairs Office</title>
    <link rel="stylesheet" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
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
                    <a class="nav-link" href="#" id="rfaLink" data-bs-toggle="popover" 
                    data-bs-html="true" data-bs-trigger="click" data-bs-title-center="RFA" 
                    data-bs-content='<div><a class="nav-link" href="rfa-entries.php" class="btn btn-link">New Entries</a><br><a class="nav-link" href="rfa-assignment.php" class="btn btn-link">Assignment</a></div>' data-bs-placement="bottom">
                        RFA
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" id="recordsLink" data-bs-toggle="popover" 
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
                        <img src="../assets/User-register.svg" alt="Register" style="width: 20px; height: 20px; margin-right: 5px;">
                        My Account
                    </a>
                    <a class="nav-link" href="../admin/admin-login.php">
                        <img src="../assets/Sign_out_squre2.svg" alt="Sign-in" style="width: 20px; height: 20px; margin-right: 5px;">
                        Log out
                    </a>
                </ul>
            </a>
        </div>
    </nav>


        <!-- Modal for Delete Row -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Row</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this row?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><a class="nav-link"
                                href="../admin/sena-records.php">Delete</button></a>
                        <button type="button" class="btn btn-secondary"><a class="nav-link"
                                href="../admin/sena-records.php">Close</button></a>
                    </div>
                </div>
            </div>
        </div>

    <div class="container mt-5 mb-5" style="border: 2px solid black; padding: 1%">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3">
                <div class="searchbar-rec">
                    <div class="label">Claims/Issues</div>
                    <input type="text" class="form-control" style="background-color: #E5EEFF; border: 1px solid black; border-radius: 10px">
                </div>
            </div>
            <div class="col-md-3">
                <div class="searchbar-rec">
                    <div class="label">Relief Prayed</div>
                    <input type="text" class="form-control" style="background-color: #E5EEFF; border: 1px solid black; border-radius: 10px">
                </div>
            </div>
            <div class="col-md-3">
                <div class="searchbar-rec">
                    <div class="label">Date</div>
                    <div class="input-with-icon">
                        <input type="text" class="form-control" style="background-color: #E5EEFF; border: 1px solid black; border-radius: 10px">
                        <img src="../assets/blank-calendar--blank-calendar-date-day-month-empty.svg" class="icon" alt="icon" style="width: 20px; height: 20px">
                    </div>
                </div>

            </div>
            <div class="col-md-2 mt-3">
                <div class="searchbar-rec">
                    <div class="label"></div>
                    <button class="btn btn-dark btn-block button fw-bold btn-hover" style="font-family: Arial; height: 4%; font-size: .83rem; background-color: black">SEARCH</button>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <h2 class="text-start" style="font-family: sub-font-bold; font-weight: bold">SENA Conferences</h2>


        <table class="table-sena-records" style="padding-bottom: 20%;">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Reference No</th>
                    <th>Claims/Issues</th>
                    <th>Settlement</th>
                    <th>Responding Party</th>
                    <th>Category</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color:#E5EEFF">
                    <td>2024-03-02</td>
                    <td>SEAD RCMD-NCR-<br>
                        VAL-03-002-2024</td>
                    <td>Illegal Dismissal</td>
                    <td>Settled</td>
                    <td>ABC Company</td>
                    <td>Individual</td>
                    <td>
                        <div class="button-container">
                            <a href="sena-details.php"><button class="button col-auto"><img src="../assets/pencil--change-edit-modify-pencil-write-writing.svg" alt=""></button></a>
                            <button class="button col-auto"><img src="../assets/import.svg" alt=""></button>
                            <button class="button col-auto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><img src="../assets/trash.svg" alt=""></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2024-03-01</td>
                    <td>SEAD RCMD-NCR-<br>
                        VAL-03-001-2024</td>
                    <td>Illegal Dismissal with<br> Money Claims</td>
                    <td>Withdraw</td>
                    <td>HYBE Inc.</td>
                    <td>Group</td>
                    <td>
                        <div class="button-container">
                            <a href="sena-details.php"><button class="button col-auto"><img src="../assets/pencil--change-edit-modify-pencil-write-writing.svg" alt=""></button></a>
                            <button class="button col-auto"><img src="../assets/import.svg" alt=""></button>
                            <button class="button col-auto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><img src="../assets/trash.svg" alt=""></button>
                        </div>
                    </td>
                </tr>
                <tr style="background-color:#E5EEFF">
                    <td>2024-02-26</td>
                    <td>SEAD RCMD-NCR-<br>
                        VAL-02-026-2024</td>
                    <td>Illegal Dismissal</td>
                    <td>Settled</td>
                    <td>Rainbow Inc.</td>
                    <td>Individual</td>
                    <td>
                        <div class="button-container">
                            <a href="sena-details.php"><button class="button col-auto"><img src="../assets/pencil--change-edit-modify-pencil-write-writing.svg" alt=""></button></a>
                            <button class="button col-auto"><img src="../assets/import.svg" alt=""></button>
                            <button class="button col-auto" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"><img src="../assets/trash.svg" alt=""></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>






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