#!/usr/bin/php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webserv</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">




    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Webserv/1.1</a></li>
            <li class="sidebar-nav-item"><a href="/">Home</a></li>
            <li class="sidebar-nav-item"><a href="/admin">Admin</a></li>
            <li class="sidebar-nav-item"><a href="/data">Data</a></li>
            <li class="sidebar-nav-item"><a href="/autoindex/">autoindex</a></li>
            <li class="sidebar-nav-item"><a href="form.html">Upload</a></li>
            <li class="sidebar-nav-item"><a href="form_cookies.html">Cookies</a></li>
            <li class="sidebar-nav-item"><a href="flush.html">Delete</a></li>
            <li class="sidebar-nav-item"><a href="#about">About</a></li>
        </ul>
    </nav>





    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">42 Webserv - PHP</h1>
            <h3 class="" style="text-align: center; width: 30pc; justify-content: center; margin: 20px auto;"><em></em>
            </h3>
            <a class="btn btn-success btn-xl" href="#about">Find Out More</a>
        </div>
    </header>





    <section class="content-section bg-light" style="height: 100vh;" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>A C++ Web Server!</h2>
                    <p class="lead mb-5">
                        We are utilizing epoll for event-driven I/O, handles HTTP requests and CGI scripts, providing
                        low-level control for high-performance web serving
                        <a href="">Github</a>
                        !
                    </p>
                    <a class="btn btn-dark btn-xl" href="#team">Meet The Team</a>
                </div>
            </div>
        </div>
    </section>


    <section class="content-section text-white text-center" id="team">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h2 class="text-dark mb-5">The Team</h2>
            </div>
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><img src="../assets/img/dareoduwole.webp"
                            alt=""></span>
                    <h4 class="text-dark"><strong>Dare Oduwole</strong></h4>
                    <div class="social-icons">
                        <a href="https://github.com/DreyWesson/" target="_blank" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/dareoduwole/" target="_blank" class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <img src="../assets/img/R1-02375-012A.webp" alt="">
                    </span>
                    <h4 class="text-dark"><strong>Daria Goremykina</strong></h4>
                    <div class="social-icons">
                        <a href="https://github.com/dashadsh" target="_blank" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/dariagoremykina/" target="_blank" class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-md-0">
                    <span class="service-icon rounded-circle mx-auto mb-3"><img src="../assets/img/my_picture.webp"
                            alt=""></span>
                    <h4 class="text-dark"><strong>Mohammed Elkholy</strong></h4>
                    <div class="social-icons">
                        <a href="https://github.com/SolarisCode" target="_blank" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/mohammed-seifelislam-elkholy/" target="_blank"
                            class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <p class="text-muted small mb-0">Copyright &copy; Webserv 2024</p>
        </div>
    </footer>






    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>