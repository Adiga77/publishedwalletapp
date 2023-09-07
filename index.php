<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <link rel="stylesheet" href="dashboard/bootstrap/css/bootstrap.min.css">
    <style>
        body::before{
        display: block;
        content: '';
        height: 100px;
    }

    </style>
</head>
<body id="top">
        <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">Wallet-App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenue">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenue">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact Us</a>
                    </li>   
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="register.php" class="nav-link">register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <!-- header section -->
    <section class="container" id="home">
        <div class="row flex-lg-row-reverse  g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="dashboard/assets/img/Stack of money and gold coins 3d cartoon style icon.jpg" class="img-fluid" alt="photo"  loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Welcome to Wallet-App</h1>
            <p class="lead">Our services are fast and handy, your satisfaction is our ultimate priority</p>
            <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="login.php" class="btn btn-outline-primary btn-lg px-4 me-md-2">Login</a>
            <a href="register.php" class="btn btn-outline-secondary btn-lg px-4">Register</a>
            </div>
        </div>
        </div>
    </section>
   

        <!-- About us -->
    <section class="container" id="about">
        <div class="row g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="dashboard/assets/img//businessman-moving-dollar-symbols.jpg" class="img-fluid" alt="photo"  loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">About Us</h1>
            <p class="lead">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem quos minima earum tempore reiciendis labore!
            </p>
        </div>
        </div>
    </section>  
 
    
        <!-- Contact Us -->
    <section class="container" id="contact">
        <div class="row flex-lg-row-reverse  g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="dashboard/assets/img/telephone.jpg" class="img-fluid" alt="photo"  loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Contact Us</h1>
                <p class="lead">Contact us here</p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, ipsam!
                </p>
            </div>
        </div>
    </section>
        <!--go to top action-->
    <div class="text-end mb-3 me-3"><a href="#top" class="btn btn-outline-primary text-end">Go to top</a></div>  
    <footer class="py-4 bg-light mt-auto bottom-0">
        <div class="container-fluid px-4">
            <div class="text-muted text-center">Copyright &copy; OTA group 2 WalletApp 2023</div>
        </div>
    </footer>
    <script src="dashboard/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>