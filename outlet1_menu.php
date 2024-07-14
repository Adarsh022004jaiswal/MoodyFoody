<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Menu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- PHP code to display welcome message -->
        <?php
session_start();

// Check if user is logged in
if(isset($_SESSION['email'])) {
    $servername = "localhost";
    $username = "root";
    $password = '';
    $dbname = "moodyfoody";
                                
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if the connection was successful
    if($conn) {
        // Retrieve the email of the logged-in user from the session
        $email = $_SESSION['email'];

        // Prepare and execute a query to retrieve the username associated with the logged-in user's email
        $query = "SELECT username FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if($result && mysqli_num_rows($result) > 0) {
            // Fetch the row and extract the username
            $row = mysqli_fetch_assoc($result);
            $username = $row['username'];

            // Print the welcome message with the username
            echo "<div class='welcome-msg'>Welcome $username!</div>";
        } else {
            // Error handling if the query fails or no user found
            echo "Error retrieving user information.";
        }

        // Close the database connection
        mysqli_close($conn);
    } else {
        // Error handling if unable to connect to the database
        echo "Error connecting to the database.";
    }
} else {
    // Error handling if user is not logged in
    echo "Please log in to access this page.";
}
?>

        <!-- PHP co
        de end -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>MoodyFoody</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="menu.html" class="nav-item nav-link active">Menu</a>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Menu Start -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Popular Outlets Inside Campus</h1>
                
            </div>
            </div>
    
       
            <div class="row">
                <!-- Outlet 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card outlet-card">
                    <img src="img\ICH.jpg" class="card-img-top" alt="Outlet Image">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="rating" style="color: #FEA116; font-size: 24px;">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span> 
                                <span class="star">&#9734;</span>
                            </div>
                            <h5 class="card-title mb-3">Indian Coffee House</h5>
                            <a href="ich.html" class="btn btn-primary mb-3">Explore</a>
                        </div>
                    </div>
                </div>
                <!-- Outlet 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card outlet-card">
                        <img src="img\Nandini.jpg" class="card-img-top" alt="Outlet Image">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="rating" style="color: #FEA116; font-size: 24px;">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span> 
                                <span class="star">&#9734;</span>
                            </div>
                            <h5 class="card-title mb-3">Nandini</h5>
                            <a href="Nandini.html" class="btn btn-primary mb-3">Explore</a>
                        </div>
                    </div>
                </div>
                <!-- Outlet 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card outlet-card">
                    <img src="img\Mingos.jpeg" class="card-img-top" alt="Outlet Image">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="rating" style="color: #FEA116; font-size: 24px;">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span> 
                                <span class="star">&#9734;</span>
                            </div>
                            <h5 class="card-title mb-3">Mingos</h5>
                            <a href="Mingos.html" class="btn btn-primary mb-3">Explore</a>
                        </div>
                    </div>
                </div>
                <!-- Outlet 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card outlet-card">
                    <img src="img\Brunch House.jpg" class="card-img-top" alt="Outlet Image">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="rating" style="color: #FEA116; font-size: 24px;">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span> 
                                <span class="star">&#9734;</span>
                            </div>
                            <h5 class="card-title mb-3">Brunch House</h5>
                            <a href="brunchhouse.html" class="btn btn-primary mb-3">Explore</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card outlet-card">
                    <img src="img\Christ Bakery.jpg" class="card-img-top" alt="Outlet Image">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="rating" style="color: #FEA116; font-size: 24px;">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span> 
                                <span class="star">&#9734;</span>
                            </div>
                            <h5 class="card-title mb-3">Christ Bakery</h5>
                            <a href="christbakery.html" class="btn btn-primary mb-3">Explore</a>
                        </div>
                    </div>
                </div>
                <!-- Outlet 5 -->
                <div class="col-md-3 mb-4">
                    <div class="card outlet-card">
                    <img src="img\Michael's.jpg" class="card-img-top" alt="Outlet Image">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="rating" style="color: #FEA116; font-size: 24px;">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span> 
                                <span class="star">&#9734;</span>
                            </div>
                            <h5 class="card-title mb-3">Michael's</h5>
                            <a href="Michaels.html" class="btn btn-primary mb-3">Explore</a>
                        </div>
                    </div>
                </div>
                <!-- Outlet 6 -->
                <div class="col-md-3 mb-4">
                <div class="card outlet-card">
                <img src="img\eleven.jpg" class="card-img-top" alt="Outlet Image">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="rating" style="color: #FEA116; font-size: 24px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span> 
                        <span class="star">&#9734;</span>
                    </div>
                    <h5 class="card-title mb-3">#e11even</h5>
                    <a href="#e11even.html" class="btn btn-primary mb-3">Explore</a>
                </div>
                </div>
                </div>
                <!-- Outlet 7 -->
                <div class="col-md-3 mb-4">
                <div class="card outlet-card">
                <img src="img\Kiosk.jpg" class="card-img-top" alt="Outlet Image">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="rating" style="color: #FEA116; font-size: 24px;">
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9733;</span>
                        <span class="star">&#9734;</span> 
                        <span class="star">&#9734;</span>
                    </div>
                    <h5 class="card-title mb-3">Kiosk</h5>
                    <a href="kiosk.html" class="btn btn-primary mb-3">Explore</a>
                </div>
                </div>
                </div>
                <!-- Outlet 8 -->
                <center><div class="col-md-3 mb-4">
                    <div class="card outlet-card">
                        <img src="img\JustBake.jpg" class="card-img-top" alt="Outlet Image">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="rating" style="color: #FEA116; font-size: 24px;">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9734;</span> 
                                <span class="star">&#9734;</span>
                            </div>
                            <h5 class="card-title mb-3">Just Bake</h5>
                            <a href="Justbake.html" class="btn btn-primary mb-3">Explore</a>
                        </div>
                    </div>
                </div></center>
                </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
        
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Christ(Deemed to be University) Bangalore Central Campus Hosur Road, Near Dairy Circle, Bangalore Karnataka-560029</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 73532 06655</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>mahima.mahi2108@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                        <h5 class="text-light fw-normal">Monday - Saturday</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Sunday</h5>
                        <p>10AM - 08PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Feedback</h4>
                        <p>Please feel free to give feedback and help us get better.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">MoodyFoody</a>, All Right Reserved. 
							
							<!--/* This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. */-->                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>
