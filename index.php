<?php
require 'function.php';
if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE  id = $id"));
} else {
    header("Location: login.php");
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
            <a href="logout.php" type="button" class="btn btn-outline-success btn-lg">
                Logout
            </a>
        </div>
    </nav>
    <h1 class="text-center" style="padding-top: 70px; color:#40513B">
        <strong>Welcome Back</strong>
    </h1>
    <div class="card text-center" style="color: aliceblue;">
        <div class="card-body">
            <h1 class="name"><strong style="font-size: 100px;"><?php echo $user["name"]; ?></strong></h1>
        </div>
        <div class="card-footer text-body-secondary">
            <h2 style="color: #C1E5AC; padding-top: 10px">
                <strong>USER</strong>
            </h2>
        </div>
    </div>
    <div class="footer">
        <nav class="navbar" style="padding: 0 100px">
            <div class="container-fluid">
                <p class="pt-2">© 2024-2025 Jibee | All Rights Reserved</p>
                <img src="images/icons.png" alt="Logo" height="30px" class="d-inline-block align-text-top" />
            </div>
        </nav>
    </div>
</body>

</html>