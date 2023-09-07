<?php
if((isset($_GET['msg1'])) || (isset($_GET['msg2'])) ) {
    if(isset($_GET['msg1'])){
        echo "empty email field";
    }

    if(isset($_GET['msg2'])){
        echo "a user have been registered with this email";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="dashboard/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">  
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-primary text-light">
                        <h5 class="text-center">Register</h5>
                    </div>
                    <div class="card-body">
                        <form action="processes.php" method="post">
                            <div class="form-group mb-3">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="register" class="btn btn-primary">Submit</button>
                            </div>
                            <div class="form-group mb-3">
                                <p class="lead text-center">Already registered? Login</p>
                            </div>
                        </form>
                    </div>
                </div>
                <ul class="breadcrumb p-3 bg-body-tertiary rounded-3 text-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="dashboard/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>