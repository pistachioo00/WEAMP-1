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
    <section class="news-sec">
        <div class="container">
            <a href="#" class="mt-5 d-flex justify-content-start" onclick="goBack()">
                <img src="../assets/Expand_left.svg" alt="Back-Button" style="width: 2.5rem; height: 2.5rem;">
            </a>
            <div class="row justify-content-center align-items-center"> <!-- Modified row class -->

                <div style="display: flex; justify-content: center;">
                    <img src="../assets/Valenzuela-seal.png" alt="Valenzuela-Seal" style="max-width: 150px;">
                </div>

                <div class="col-12 text-center" style="margin-bottom: -10px;">
                    <h1 class="display-2 mb-2" style="font-family: main-font; font-size: 3.5rem; margin-bottom: -5px; color: #1C05B3; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">WEMP</h1>
                    <p class="display-2 mb-0" style="font-family: Arial, sans serif; font-size: 1.3rem; margin-top: -5px; color: #3682CC">Workers and Employers Management Platform</p>
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
            window.location.href = "../public/admin-login.php";
            //window.history.back();
        }
    </script>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="login-form" action="sa-login-process.php" method="POST">

                    <div class="form-group" style="max-width: 400px; margin: 0 auto;">
                        <input id="username" name="username" type="text" class="form-control" placeholder="Username" style="background-color: #F0F2F5; border: none; width: 100%; margin-bottom: 10px;" required>
                        <img src="../assets/Profile.svg" alt="User Icon" class="field-icon">
                    </div>

                    <div class="form-group" style="max-width: 400px; margin: 0 auto;">
                        <input id="password" name="password" type="password" class="form-control" placeholder="Password" style="background-color: #F0F2F5; border: none; width: 100%;" required>
                        <img src="../assets/View_alt.svg" alt="Password Icon" class="field-icon">
                    </div>

                    <div style="max-width: 400px; margin: 0 auto; padding-top: 3%;">
                        <!--ayaw gumana nung login kaya nilagyan ko muna href >,<-->
                        <a href="../super-admin/sa-home.php" button type="submit" style="background-color: #007BFF; color: white; font-family: Arial; padding: 2%; font-weight: bold; font-size: 16px; width: 100%;" class="btn btn-primary" onmouseover="this.style.backgroundColor='#0E72DE';" onmouseout="this.style.backgroundColor='#007BFF';">Sign in</a>
                    </div>

                    <div class="form-group mb-3 text-center" style="max-width: 400px; margin: 0 auto;">
                        <a href="../super-admin/sa-forgot-password.php" style="color:#465DA3" class="btn btn-link">Forgot Password?</a>
                    </div>

                    <div style="max-width: 400px; margin: 0 auto;">
                        <hr class="my-4" style="border: 1px solid #D9D9D9; width: 100%;">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>