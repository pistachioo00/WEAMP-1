<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Worker's Affairs Office</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<style>
    .navbar-nav .nav-item .nav-link {
        color: white;
    }

    .container .row {
        color: #465DA3;
    }

    .modal-body .mb-2 .form-control {
        background-color: #e5eeff;
    }
</style>

<body>
    <div class="main-content">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #C80000;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../assets/WAO-Logo.svg" alt="Header-Title" style="width: 300px; height: 70px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                    <ul class="nav nav-underline navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="../super-admin/sa-home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../super-admin/sa-dashboard.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../super-admin/sa-rfa-entries.php">RFA</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../super-admin/sa-sena-records.php">Records</a>
                        </li>
                    </ul>
                </div>
                <a href="#">
                    <ul class="navbar-nav ml-auto">
                </a>
                <a class="nav-link" href="../super-admin/sa-account.php" style="color: white">
                    <img src="../assets/User/User.svg" alt="My-Account"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    My Account
                </a>
                <a class="nav-link" href="logout.php" onclick="showLogoutConfirmation()" style="color: white">
                    <img src="../assets/User/Line1.svg" alt="Line"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    <img src="../assets/User/Sign_out_squre.svg" alt="Sign-out"
                        style="width: 20px; height: 20px; margin-right: 5px;">
                    Log Out
                </a>
                </ul>
                </a>
            </div>
        </nav>

        <section class="my-account-sec">
            <div class="container">
                <h3 class="display-5 text-start mt-5" style="font-family: sub-font-bold; color:#465DA3;"> Manage your Account</h3>
                <div class="mb-3 row">
                    <div class="col-sm-2 mt-2">
                        <button type="button" class="btn btn-secondary btn-sm rounded-pill text-white" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop" style="font-family: sub-font-bold; width: 100%; background-color: #465DA3;">
                            Change Password
                        </button>
                    </div>
                </div>

                <!-- Modal for Edit Account -->
                <div class=" modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="exampleModalLabel">Edit Account</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="container text-align-left">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="formGroupExampleInput" class="form-label">UserName</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput"
                                            placeholder="mamalinda">
                                    </div>
                                    <div class="mb-2">
                                        <label for="formGroupExampleInput2" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Mhia Rose">
                                    </div>
                                    <div class="mb-2">
                                        <label for="formGroupExampleInput2" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="Baguanga">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="mamalinds@gmail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput2"
                                            placeholder="09556644548">
                                    </div>

                                    <div class="modal-footer" style="border-top: 3px solid #757575;">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save
                                            changes</button>
                                        <button type="button" class="btn btn-secondary"><a class="nav-link"
                                                href="../super-admin/sa-sena-records.php">Close</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Modal Change Password-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Change Password</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container text-align-left">
                                    <div class="col">
                                        <h3>IMPORTANT REMINDER</h3>
                                        <p style="font-size: .8"><b>Password must be at least 6 characters long and must
                                                contain the following:</b>
                                            uppercase
                                            letters (A through Z), lowercase letters (a through z), numeric characters
                                            (0-9),
                                            and non-alphanumeric characters (special characters e.g. 1. $, #, %)</p>
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputPassword5" class="form-label">Current Password</label>
                                        <input type="password" id="inputPassword5" class="form-control"
                                            aria-describedby="passwordHelpBlock">
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputPassword5" class="form-label">New Password</label>
                                        <input type="password" id="inputPassword5" class="form-control"
                                            aria-describedby="passwordHelpBlock">
                                    </div>
                                    <div class="mb-2">
                                        <label for="inputPassword5" class="form-label">Confirm New Password</label>
                                        <input type="password" id="inputPassword5" class="form-control"
                                            aria-describedby="passwordHelpBlock">
                                    </div>
                                    <div id="passwordHelpBlock" class="form-text">
                                        Your password must be 8-20 characters long, contain letters and numbers, and
                                        must not contain spaces, special characters, or emoji.
                                    </div>
                                    <div class="modal-footer">
                                        <a class="nav-link" href="sa-update-account.php"><button type="button"
                                                class="btn btn-success">Change Password</a></button>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
        </section>

        <hr class="my-3" style="background-color: black; border-width: 0.1rem; width: 60%">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form action="process.php" method="POST">
                        <div class="mb-3 row">
                            <label for="username" style="font-family: sub-font;"
                                class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"
                                    style="font-family: sub-font; background-color: transparent; border: #304DA5 1.5px solid;"
                                    id="username" placeholder="raffy24" name="username">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="name" style="font-family: sub-font;"
                                class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"
                                    style="font-family: sub-font; background-color: transparent; border: #304DA5 1.5px solid;"
                                    id="name" placeholder="Rafael Santiago" name="name">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" style="font-family: sub-font;"
                                class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"
                                    style="font-family: sub-font; background-color: transparent; border: #304DA5 1.5px solid;"
                                    id="email" placeholder="rafaelsantiago@gmail.com" name="email">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="contact" style="font-family: sub-font;"
                                class="col-sm-3 col-form-label">Contact</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"
                                    style="font-family: sub-font; background-color: transparent; border: #304DA5 1.5px solid;"
                                    id="contact" placeholder="09564586594" name="contact">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-4 mt-4">
                                <a class="nav-link" href="../super-admin/sa-update-account.php"><button type="submit"
                                        style="font-family: sub-font-bold; width: 100%; background-color: #465DA3;"
                                        class="btn btn-secondary btn-sm rounded-pill text-white">Update Account</button></a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <footer class="footer fixed-bottom" style="background-color: #C80000;">
            <div class="container-footer" style="color: white;">
                <p>Copyright 2024 © All Rights Reserved</br>
                    Worker’s Affairs Office</p>
            </div>
        </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</html>