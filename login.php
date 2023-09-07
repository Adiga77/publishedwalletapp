<?php

session_start();
include "dashboard/classes/Validation.php";
if((isset($_GET['message'])) || (isset($_GET['msg3']))) {
    
    if(isset($_GET['message'])){
        echo "<h4>" . $_GET['message']."</h4>";
    }

    if(isset($_GET['msg3'])){
        echo "registration successful";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="dashboard/bootstrap/css/bootstrap.min.css">
    <?php include "style.php"; ?>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <h5 class="text-center">Login</h5>
                    </div>
                    <div class="card-body">
                        <form action="processes.php" method="post">
                            <div class="form-group mb-3">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <ul class="breadcrumb p-3 bg-body-tertiary rounded-3 text-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="register.php">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
   <script src="dashboard/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>