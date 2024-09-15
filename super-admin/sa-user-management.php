<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Worker's Affairs Office</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .container {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/WAO-Logo.svg" alt="Header-Title" style="width: 300px; height: 80px;">
            </a>
            <button style="width: 10%; height: 50%" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                <ul class="nav nav-underline navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-items">
                        <a class="nav-link" href="../super-admin/sa-home.php">Home</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-link active" aria-current="page" href="../super-admin/sa-dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-link" href="../super-admin/sa-rfa-entries.php" id="rfaLink" data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="click" data-bs-title="<strong>New Entries</strong>" data-bs-content="Assignment" data-bs-placement="bottom">RFA</a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-link" href="../super-admin/sa-sena-records.php">Records</a>
                    </li>
                    <div class="mr-5"></div>
                    <li>
                        <a class="nav-link" href="../super-admin/sa-account.php">
                            <img src="../assets/User-register.svg" alt="Register" style="width: 20px; height: 20px; margin-right: 5px;">
                            My Account
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../super-admin/sa-login.php">
                            <img src="../assets/Sign_in_squre.svg" alt="Sign-in" style="width: 20px; height: 20px; margin-right: 5px;">
                            Log out
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
        </div>
    </nav>


    <!-- Modal for See Details -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Region: <p style="display: inline; ">NCR – National Capital Region</p>
                    </h6>
                    <h6>City: <p style="display: inline;">Valenzuela City</p>
                    </h6>
                    <h6>Area: <p style="display: inline;">Area 1</p>
                    </h6>
                    <h6>Barangay: <p style="display: inline;">Gen T. De Leon</p>
                    </h6>
                    <h6>UserName: <p style="display: inline;">mamalinda</p>
                    </h6>
                    <h6>First Name: <p style="display: inline;">Mhia Rose </p>
                    </h6>
                    <h6>Last Name: <p style="display: inline;">Baguanga</p>
                    </h6>
                    <h6>Email: <p style="display: inline;">mamalinds@gmail.com</p>
                    </h6>
                    <h6>Email Confirmed:
                        <img src="../assets/icon-check.png" alt="" style="display: inline;">
                    </h6>
                    <h6>Phone Number: <p style="display: inline;">09556644548</p>
                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Edit Account -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="exampleModalLabel">Edit Account</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="container text-align-left">
                    <div class="col">
                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">UserName</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="mamalinda">
                        </div>
                        <div class="mb-2">
                            <label for="formGroupExampleInput2" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Mhia Rose">
                        </div>
                        <div class="mb-2">
                            <label for="formGroupExampleInput2" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Baguanga">
                        </div>
                        <div class="mb-2">
                            <label for="formGroupExampleInput2" class="form-label">Email</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="mamalinds@gmail.com">
                        </div>
                        <div class="mb-4">
                            <label for="formGroupExampleInput2" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="09556644548">
                        </div>

                        <div class="modal-footer" style="border-top: 3px solid #757575;">
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="changedSave">Save
                                changes</button>
                            <button type="button" class="btn btn-secondary"><a class="nav-link" href="../super-admin/sa-sena-records.php">Close</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Disable Account -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Disable Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to disable this account? <br><br>
                    <h5>UserName:
                        <p style="display: inline; text-align-left: 15%">mamalinda</p>
                    </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="disableAdmin"><a class="nav-link" href="#">Disable</button></a>
                    <button type="button" class="btn btn-secondary"><a class="nav-link" href="../super-admin/sa-user-management.php">Close</button></a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal for Delete Row -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete <b>mamalinda</b>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="deleteAdmin"><a class="nav-link" href="#">Delete</button></a>
                    <button type="button" class="btn btn-secondary"><a class="nav-link" href="../super-admin/sa-user-management.php">Close</button></a>
                </div>
            </div>
        </div>
    </div>


    <section class="welcome-sec" style="padding-top: 10%;">
        <div class="container">
            <div class="row justify-content-between mb-2">
                <div class="col ml-auto">
                    <h2 class="fw-bold mt-3" style="font-family: sub-font-bold">Admin Accounts</h2>
                </div>
                <div class="col-auto d-flex justify-content-center align-items-center">
                    <button class="btn btn-dark fw-bold" style="font-size: 1rem; padding: 13px;  border-radius: 50px">
                        <div class="d-flex align-items-center justify-content-center text-center" style="font-weight:bold; font-family: Arial;">
                            <img src="../assets/file-dock-add.svg" alt="Image" style="margin-right: 5px; width: 25px; height: 25px; ">
                            <a class="nav-link" href="../super-admin/create-admin.php">Create New</a>
                        </div>
                    </button>
                </div>
            </div>

            <div class="container mt-3 mb-5">
                <table class="table-sena-records" style="padding-bottom: 10%;">
                    <thead>
                        <tr>
                            <th>UserName</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Email Confirmed</th>
                            <th>Contact</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color:#eeeeee">
                            <td>mamalinda</td>
                            <td>Mhia Rose</td>
                            <td>Baguanga</td>
                            <td>mamalinds@gmail.com</td>
                            <td><img src="../assets/icon-check.png" style=""></td>
                            <td>09556644548</td>
                            <td>
                                <div class="button-container">
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="../assets/info.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="../assets/pencil--change-edit-modify-pencil-write-writing.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal3"><img src="../assets/disable.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal4"><img src="../assets/trash.svg" alt=""></button>
                                </div>
                            </td>
                        </tr>
                        <tr style="background-color:#eeeeee">
                            <td>drei09</td>
                            <td>Andrei John</td>
                            <td>Camposano</td>
                            <td>andrei09@gmail.com</td>
                            <td><img src="../assets/icon-check.png" style=""></td>
                            <td>09523654851</td>
                            <td>
                                <div class="button-container">
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="../assets/info.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="../assets/pencil--change-edit-modify-pencil-write-writing.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal3"><img src="../assets/disable.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal4"><img src="../assets/trash.svg" alt=""></button>
                                </div>
                            </td>
                        </tr>
                        <tr style="background-color:#eeeeee">
                            <td>pistachio00</td>
                            <td>Hannah Erika</td>
                            <td>Racelis</td>
                            <td>hannah00@gmail.com</td>
                            <td><img src="../assets/icon-check.png" style=""></td>
                            <td>09568495635</td>
                            <td>
                                <div class="button-container">
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="../assets/info.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="../assets/pencil--change-edit-modify-pencil-write-writing.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal3"><img src="../assets/disable.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal4"><img src="../assets/trash.svg" alt=""></button>
                                </div>
                            </td>
                        </tr>
                        <tr style="background-color:#eeeeee">
                            <td>dsarangMiks</td>
                            <td>Mikaela Roisa</td>
                            <td>Pring</td>
                            <td>mikaMiks@gmail.com</td>
                            <td><img src="../assets/icon-check.png" style=""></td>
                            <td>09668956422</td>
                            <td>
                                <div class="button-container">
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="../assets/info.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal2"><img src="../assets/pencil--change-edit-modify-pencil-write-writing.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal3"><img src="../assets/disable.svg" alt=""></button>
                                    <button class="button col-md-3" data-bs-toggle="modal" data-bs-target="#exampleModal4"><img src="../assets/trash.svg" alt=""></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>




    <footer class="footer fixed-bottom">
        <div class="container-footer">
            <p class="text-muted">Copyright 2024 © All Rights Reserved</br>
                Worker's Affairs Office</p>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    // Initialize popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

</html>