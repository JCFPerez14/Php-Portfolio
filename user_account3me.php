<?php
require_once('classes/database.php');
$con = new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome!</title>
  <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- For Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="./includes/style.css">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

<!-- My Photo and links-->
<div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">I'm</h3>
                    <h1 class="display-3 mb-3">Jan Carlo Perez</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer, Photographer, Videographer</div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="https://github.com/JCFPerez14" target="_blank" class="btn btn-primary py-3 px-4 me-5 ">Github</a>
                        <a href="https://www.instagram.com/jcfp14/" target="_blank" class="btn btn-primary py-3 px-4 me-5 ">Instagram</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="img/IMG_5122.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container my-5 wow fadeInUp" data-wow-delay="0.6s">
        <h2 class="text-center">My Profiles Personal and In game</h2>
        <div class="card-container">
            <?php
            $data = $con->view();
            foreach ($data as $rows) {
            ?>
            <div class="card wow fadeInUp" data-wow-delay="0.1s">
                <div class="card-body text-center">
                    <?php if (!empty($rows['user_profile_picture'])): ?>
                        <img src="<?php echo htmlspecialchars($rows['user_profile_picture']); ?>" alt="Profile Picture" class="profile-img">
                    <?php else: ?>
                        <img src="path/to/default/profile/pic.jpg" alt="Default Profile Picture" class="profile-img">
                    <?php endif; ?>
                    <h5 class="card-title"><?php echo htmlspecialchars($rows['user_firstname']) . ' ' . htmlspecialchars($rows['user_lastname']); ?></h5>
                    <p class="card-text"><strong>Birthday:</strong> <?php echo htmlspecialchars($rows['user_birthday']); ?></p>
                    <form method="POST" class="d-inline">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($rows['user_id']); ?>">
                    </form>
                </div>
            </div>
            
            <?php
            }
            ?>
        </div>
    </div>
  </div>

 <!-- Expertise Start -->
 <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <p class="mb-4">Skill Issue</p>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">HTML</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">CSS</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">PHP</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">C#</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">C++</h6>
                                    <h6 class="font-weight-bold">75%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Javascript</h6>
                                    <h6 class="font-weight-bold">90%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Photographer</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Videographer</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Photo Editor</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Video Editor</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>UI Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2019 - 2024</p>
                                    <h6 class="mb-0">Self Taught</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Product Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2019 - 2024</p>
                                    <h6 class="mb-0">Self Taught</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Web Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2019 - 2024</p>
                                    <h6 class="mb-0">Self Taught</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Apps Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2019 - 2024</p>
                                    <h6 class="mb-0">Self Taught</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Photographer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2022 - 2024</p>
                                    <h6 class="mb-0">NU Lipa</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Videographer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2022 - 2024</p>
                                    <h6 class="mb-0">NU Lipa</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Photo Editor</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2019 - 2024</p>
                                    <h6 class="mb-0">NU Lipa</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Video Editor</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2019 - 2024</p>
                                    <h6 class="mb-0">NU Lipa</h6>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>UI Design Course</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2020 - 2022</p>
                                    <h6 class="mb-0">STI</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Android Development</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2020 - 2022</p>
                                    <h6 class="mb-0">STI</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Apps Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2020 - 2022</p>
                                    <h6 class="mb-0">STI</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Web Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2022 - 2024</p>
                                    <h6 class="mb-0">NU Lipa</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Advanced Database</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2023 - 2024</p>
                                    <h6 class="mb-0">NU Lipa</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->

     <!-- About Me Start -->
     <div class="container-fluid bg-light py-5 my-5" id="testimonial">
            <h1 class="display-5 text-center mb-5 wow fadeInUp">About Me</h1>
            <div class="row justify-content-center">
                        <div class="testimonial-item text-center mb-5 wow fadeInUp">
                            <H2 class="fs-5 fst-italic">Address</H2>
                            <p class="card-text"><strong></strong> <?php echo ucwords(htmlspecialchars($rows['address'])); ?></p>
                            <hr class="w-25 mx-auto">
                            <p class="card-text"><strong></strong> <?php echo ucwords(htmlspecialchars($rows['about_me'])); ?></p>
                        </div>
                </div>
            </div>
    </div>
    <!-- About Me End -->

    <!-- Contact Start -->
    <div class="container wow fadeInUp">
            <div class="row g-5 align-items-center">
            <h1 class="display-5 text-center mb-5 wow fadeInUp">Contact Me</h1>
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                <p class="mb-2">My office:</p>
                    <h3 class="fw-bold"><?php echo ucwords(htmlspecialchars($rows['address'])); ?></h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">+<?php echo ucwords(htmlspecialchars($rows['phone_num'])); ?></h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold"><?php echo ucwords(htmlspecialchars($rows['user_email'])); ?></h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href="https://x.com/JanCarlolo" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.facebook.com/Zagredf01.14.03" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/jcfp14/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="img/IMG_77399.png" alt="">
                </div>
            </div>
        </div>
    <!-- Contact End -->

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.js"></script>
<!-- Bootsrap JS na nagpapagana ng danger alert natin -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/typed/typed.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
