<?php
require 'function.php';
if (isset($_SESSION["id"])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Website | SignUp</title>
</head>

<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/LOGO.png" alt="Logo" width="57" height="87" class="d-inline-block align-text-top" />
            </a>
        </div>
    </nav>

    <div class="card text-center">
        <div class="card-body">
            <h2 class="card-title" style="color: aliceblue; padding: 15px">
                <strong>Sign Up</strong>
            </h2>
            <form action="" method="post">
                <input type="hidden" id="action" value="register" />
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" placeholder="" />
                    <label for="floatingInput">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="username" placeholder="" />
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating" style="margin-bottom: 10px">
                    <input type="password" class="form-control" id="password" placeholder="Password" />
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-light btn-lg" type="button" onclick="submitData();">
                    Register
                </button>
            </form>
        </div>
        <div class="card-footer text-body-secondary">
            <p style="color: aliceblue; padding-top: 10px">
                Already Have an Account? <a href="login.php">Log In</a>
            </p>
        </div>
    </div>
    <?php require "script.php"; ?>
</body>

</html>