<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS  -->
    <link rel="stylesheet" href="../css/styles.css">

    <style>
        .form-group {
            position: relative;
        }

        .field-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            pointer-events: none;
        }
    </style>
</head>

<body>
    <section class="news-sec" style="padding-top:6%">
        <div class="container">
            <div class="row justify-content-center align-items-center"> <!-- Modified row class -->
                <img src="../assets/admin-logo.svg" alt="Logo" style="width: 350px; height: 200px;">
                <div class="col-12 text-center" style="margin-bottom: -10px;">
                    <h1 class="display-2 mb-2" style="color: black; font-family: main-font; font-size: 3.5rem; margin-bottom: -4px;">WEMP</h1>
                    <p class="display-2 mb-0" style="font-family: Arial, sans serif; font-size: 1.3rem; margin-top: -4px;">Workers and Employers Management Platform</p>
                </div>

            </div>
        </div>
    </section>

    <script>
        // BACK BTN MODAL CONFIRMATION
        function showBackConfirmationModal() {
            $('#backConfirmationModal').modal('show');
        }

        function goBack() {
            window.location.href = "../user/index.php";
            //window.history.back();
        }
    </script>

    <div class="modal fade" id="backConfirmationModal" tabindex="-1" aria-labelledby="backConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title text-center" id="backConfirmationModalLabel">Confirmation</h5>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to go back?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="goBack()">Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="login.php" method="post" class="login-form">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username/Email Address" style="background-color: #E5EEFF; border-left: none;" required>
                            <img src="../assets/User.svg" alt="User Icon" class="field-icon">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" style="background-color: #E5EEFF; border-left: none;" required>
                            <img src="../assets/View_alt.svg" alt="Password Icon" class="field-icon">
                        </div>

                        <a href="../super-admin/sa-home.php" button type="submit" style="background-color: black; color: white; font-family: Arial; padding: 2%" class="btn btn-primary btn-block"> Sign in</a>
                    </form>

                    <div class="form-group mb-3">
                        <a href="../super-admin/sa-forgot-password.php" style="color:black; font-style: italic" class="btn btn-link float-left">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

</html>