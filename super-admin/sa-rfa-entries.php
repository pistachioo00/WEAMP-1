<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Worker's Affairs Office</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- CSS Style -->
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .navbar-nav .nav-item .nav-link {
            color: white;
        }

        .container {
            overflow: hidden;
        }

        .table th {
            color: #304DA5;
            background-color: lightsteelblue;
        }

        table {
            border: 2.5px solid #304DA5;
            border-radius: 7px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C80000;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/WAO-Logo.svg" alt="Header-Title" style="width: 300px; height: 70px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-center" id="navbarSupportedContent">
                <ul class="nav nav-underline navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="../super-admin/sa-home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../super-admin/sa-dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../super-admin/sa-rfa-entries.php" id="rfaLink"
                            data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="click"
                            data-bs-title="<strong>New Entries</strong>" data-bs-content="Assignment"
                            data-bs-placement="bottom">RFA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../super-admin/sa-sena-records.php"
                            id="recordsLink" data-bs-toggle="popover" data-bs-html="true" data-bs-trigger="click"
                            data-bs-title="<strong>SENA Conference</strong>" data-bs-content="Advice Counselling"
                            data-bs-placement="bottom">Records</a>
                    </li>
                </ul>
            </div>

            <a href="#">
                <ul class="navbar-nav ml-auto">
            </a>
            <a class="nav-link" href="../super-admin/sa-account.php" style="color: white">
                <img src="../assets/User/User.svg" alt="My-Account"
                    style="width: 20px; height: 20px; margin-right: 5px;">My Account
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



    <section class="welcome-sec">
        <div class="container">
            <div class="row justify-content-between mb-2" style="padding-top: 4%">
                <div class="col ml-auto">
                    <h4 class="fw-bold mt-3" style="font-family: sub-font-bold; color: #304DA5;">NEW ENTRIES</h4>
                </div>
            </div>

            <table class="table table-bordered" style="border: 2.5px solid #304DA5; table-layout: fixed; border-radius: 3px; ">
                <colgroup style="width: 25%;">
                    <col style=" width: 25%;">
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
                    <tr>
                        <td class="align-middle">Unfair Labor Practice</td>
                        <td class="align-middle">Juan Dela Cruz</td>
                        <td class="align-middle">2024-03-08</td>
                        <td class="d-flex align-items-center justify-content-center"><a href="sa-rfa-assignment.php"><button class="btn btn-dark" style="width:55px; height: 45px; background-color: #304DA5"><img src="../assets/Done.svg"></button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Illegal Dismissal</td>
                        <td class="align-middle">Padre Burgos</td>
                        <td class="align-middle">2024-03-08</td>
                        <td class="d-flex align-items-center justify-content-center"><a href="sa-rfa-assignment.php"><button class="btn btn-dark" style="width:55px; height: 45px; background-color: #304DA5"><img src="../assets/Done.svg"></button>
                    </tr>
                </tbody>
            </table>



    </section>




    <footer class="footer fixed-bottom" style="background-color: #C80000;">
        <div class="container-footer" style="color: white;">
            <p>Copyright 2024 © All Rights Reserved</br>
                Worker’s Affairs Office</p>
        </div>
    </footer>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script>
    // Initialize popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

</html>