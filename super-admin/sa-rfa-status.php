<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Worker's Affairs Office</title>
    <link rel="stylesheet" href="">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> <!-- CSS Style -->
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



    <section class="welcome-sec">
        <div class="container">
            <div class="row justify-content-between mb-2" style="padding-top: 10%">
                <div class="col ml-auto">
                    <h4 class="fw-bold mt-3" style="font-family: sub-font-bold">RFA Status</h4>
                </div>
            </div>

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
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle">Unfair Labor Practice</td>
                        <td class="align-middle">Juan Dela Cruz</td>
                        <td class="align-middle">2024-03-08</td>
                        <td class="d-flex align-items-center justify-content-center"><a href="sa-rfa-status-details.php"><button class="btn btn-dark">Evaluating</button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">Illegal Dismissal</td>
                        <td class="align-middle">Padre Burgos</td>
                        <td class="align-middle">2024-03-08</td>
                        <td class="d-flex align-items-center justify-content-center"><a href="sa-rfa-status-details.php"><button class="btn btn-dark">Settled</button>
                    </tr>
                </tbody>
            </table>
    </section>




    <footer class="footer fixed-bottom">
        <div class="container-footer">
            <p class="text-muted">Copyright 2024 © All Rights Reserved</br>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    // Initialize popovers
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

</html>