<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style type="text/css">
        .carousel-item {
            height: 100vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        section {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .lnr {
            display: inline-block;
            fill: currentColor;
            width: 1em;
            height: 1em;
            vertical-align: -0.05em;
            stroke-width: 1;
        }

        .services-icon {
            margin-bottom: 20px;
            font-size: 30px;
        }

        bgc2,
        .vLine,
        .hLine {
            background-color: #0F52BA;
        }

        .quote-icon {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .services-icon {
            font-size: 60px;
            margin-left: 2rem;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#page-top">
                <img src="assets/landing/img/judulkucing.png" alt="Meow Medic Logo" class="me-2"
                    style="height: 30px; width: auto;">
                Meow Medic
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Download</a>
                    </li>
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal"
                        data-bs-target="#feedbackModal">
                        <span class="big">Login</span>
                    </button>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active"
                    style="background-image: url('{{ asset('assets/landing/img/kucing.jpg') }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">First Slide</h2>
                        <p class="lead">This is a description for the first slide.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('{{ asset('assets/landing/img/kucing2.png') }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">Second Slide</h2>
                        <p class="lead">This is a description for the second slide.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item"
                    style="background-image: url('{{ asset('assets/landing/img/kucing3.png') }}')">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-4">Third Slide</h2>
                        <p class="lead">This is a description for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <<section id="features">
        <div class="container px-5 enlarged-container">
            <div class="row gx-5 align-items-center enlarged-row">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0 enlarged-col">
                    <div class="container-fluid px-5 enlarged-container-fluid">
                        <div class="row gx-5 justify-content-center enlarged-row">
                            <div class="col-md-10 text-start enlarged-text-center">
                                <!-- Paragraf Fitur Terpadu -->
                                <h3 class="font-alt mb-4 enlarged" style="color: black;">About Us</h3>
                                <p class="text-muted mb-0 enlarged" style="font-family: IBM Plex Sans Hebrew">We're
                                    committed to offering cat owners a reliable resource for understanding their pets'
                                    health. Our app provides advanced filters for quick diagnosis searches and access to
                                    veterinarian-approved illness information. Easily manage your cat's health with
                                    streamlined user directories and detailed diagnosis history. Make informed decisions
                                    and ensure your feline friend receives the care they need. With our cat illness
                                    information app, caring for your cat has never been easier.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0 text-center enlarged-col">
                    <!-- Mockup perangkat pada bagian fitur-->
                    <div class="features-device-mockup enlarged-mockup">
                        <div class="device-wrapper enlarged-device-wrapper">
                            <!-- Menghapus div perangkat, hanya menyisakan gambar -->
                            <img src="{{ asset('assets/landing/img/nakesbunder.png') }}" alt="nakes"
                                class="enlarged-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <hr style="height:3px;border-width:0;color:gray;background-color:gray;width:70%">

        <section class="bg-custom">
            <div class="container px-5">
                <!-- New Title Section -->
                <div class="row gx-5 justify-content-center">
                    <div class="col-12 text-center mb-5">
                        <h2 class="display-4 lh-1 mb-4" style="color: #000000; font-weight: bold;">MeowMedic. Your
                            Go-To Cat Diagnosis and Health Management Solution</h2>
                    </div>
                </div>

                <!-- Existing Content -->
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-sm-8 col-md-6">
                        <div class="bg-dark text-black p-3 mb-4" style="border-radius: 20px">
                            <h3 class="mb-4" style="color: #FFFFFF;">Admin on website</h3>
                            <p class="lead fw-normal mb-5 mb-lg-0" style="color: #ffffff">Filters and check newly
                                added illnesses diagnosis from veterinarian. Quickly access diagnosis lists and user
                                directories for efficient management.</p>
                            <button class="btn btn-primary"
                                style="border-radius: 20px; background-color: #85868C;">Hire international
                                talent</button>
                            <img class="img-fluid" src="{{ asset('assets/landing/img/nakes2.png') }}"
                                alt="..." />
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-6">
                        <div class="bg-dark text-white p-3 mb-4" style="border-radius: 20px">
                            <h3 class="mb-4" style="color: #ffff;">Doctors on website</h3>
                            <p style="color: #ffffff;">Access a list of diagnosis histories, allowing them to review
                                and update information as necessary.</p>
                            <button class="btn btn-primary"
                                style="border-radius: 20px; background-color: #85868C;">Convert contractors</button>
                        </div>


                        <div class="bg-dark text-black p-3 mb-4" style="border-radius: 20px">
                            <h3 class="mb-4" style="color: #ffff;">Users on mobile</h3>
                            <p style="color: #ffffff">Utilize diagnoses for informed health decisions and access
                                detailed diagnosis history for personal health management.</p>
                            <button class="btn btn-primary"
                                style="border-radius: 20px; background-color: #85868C;">Convert contractors</button>
                        </div>
                    </div>
                </div>
                <div class="feature-container">
                    <div class="feature-box">
                        <div class="feature">
                            <h2>Extensive Diagnosis</h2>
                            <p>Access comprehensive diagnoses for informed pet healthcare.</p>
                        </div>
                        <div class="feature">
                            <h2>Personal Health Tracker</h2>
                            <p>Trusted by 25,000+ customers</p>
                        </div>
                        <div class="feature">
                            <h2>Intuitive Interface</h2>
                            <p>Enjoy a user-friendly experience for easy navigation and management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr style="height:3px;border-width:0;color:gray;background-color:gray;width:70%">

        <>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: ;
                    color: #fff;
                }

                .feature-container {
                    padding: 40px;
                }

                .feature-box {
                    background-color: #444;
                    padding: 20px;
                    border-radius: 10px;
                    display: flex;
                    justify-content: space-around;
                }

                .feature {
                    text-align: center;
                    width: 30%;
                }

                .feature h2 {
                    margin-top: 0;
                }

                .feature p {
                    font-size: 16px;
                }
            </style>

            <!-- Page Content -->
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style>
                    .inner-container {
                        background-color: #A8DADC;
                        padding: 30px;
                        border-radius: 15px;
                        display: inline-block;
                        text-align: left;
                    }

                    .header {
                        font-size: 3em;
                        font-weight: bold;
                        margin-bottom: 20px;
                        color: black;
                        text-align: center;
                    }

                    .content {
                        display: flex;
                        align-items: center;
                        flex-wrap: wrap;
                    }

                    .image-container {
                        flex: 1;
                        text-align: center;
                        padding: 10px;
                    }

                    .image-container img {
                        max-width: 100%;
                        height: auto;
                        border-radius: 10px;
                    }

                    .text-content {
                        flex: 2;
                        padding: 10px;
                        color: black;
                    }

                    .text-content .star {
                        font-size: 2em;
                        color: #FFA726;
                        margin-bottom: 10px;
                    }

                    .black-section {
                        background-color: #000;
                        padding: 50px 20px;
                        color: white;
                        text-align: center;
                    }

                    .footer {
                        display: flex;
                        justify-content: space-between;
                        padding: 20px;
                        background-color: #1a1a1a;
                        flex-wrap: wrap;
                    }

                    .footer div {
                        flex: 1;
                        margin: 10px;
                    }

                    .footer div h2 {
                        margin-top: 0;
                    }

                    .footer div ul {
                        list-style: none;
                        padding: 0;
                    }

                    .footer div ul li {
                        margin: 5px 0;
                    }

                    .footer div ul li a {
                        color: white;
                        text-decoration: none;
                    }

                    .footer .socials a {
                        display: inline-block;
                        margin: 0 10px;
                        color: white;
                        text-decoration: none;
                    }

                    .footer-bottom {
                        text-align: center;
                        padding: 10px;
                        background-color: #121212;
                        border-top: 1px solid #333;
                    }
                </style>
            </head>

            <body>

                <section class="main-section">
                    <div class="header">
                        Get a quick heads-up on your feline <br>friend's health issues, saving you time.
                    </div>
                    <div class="inner-container">
                        <div class="content">
                            <div class="image-container">
                                <img src="assets/landing/img/kucingpage.png" alt="Cat Image">
                            </div>
                            <div class="text-content">
                                <div class="star">✱</div>
                                <p>Helping cat owners stay proactive. Use our app for fast and accurate diagnosis of
                                    feline illnesses, ensuring timely care for your cat's well-being. Easily identify
                                    and address health issues early. Save time, keep your cat healthy.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-custom">
                    <div class="container px-5">
                        <!-- New Title Section -->
                        <div class="row gx-5 justify-content-center">
                            <div class="col-12 text-center mb-5">
                                <h2 class="display-4 lh-1 mb-4" style="color: #000000">Available on and Mobile.</h2>
                            </div>
                        </div>
                        <div class="row gx-5 align-items-center">
                            <div class="col-sm-8">
                                <div class="px-5 px-sm-0">
                                    <h3 class="mb-4" style="color: #FB7E5E;">Download our mobile app!</h3>
                                    <p class="lead fw-normal mb-5 mb-lg-0"
                                        style="color: #000000

                        ;">Our
                                        mobile app is available for Users and Doctors!</p>
                                    <button class="btn btn-primary"
                                        style="border-radius: 20px; background-color: #FB7E5E;">>Download in Google
                                        play</button>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center">
                                <img class="img-fluid" src="assets/landing/img/mobilekucing.png"
                                    alt="mobilekucing" />
                            </div>
                        </div>

                        <div class="row gx-5 align-items-center">
                            <div class="col-sm-4 text-center">
                                <img class="img-fluid" src="assets/landing/img/pckucing.png" alt="mobilekucing" />
                            </div>
                            <div class="col-sm-8">
                                <div class="px-5 px-sm-0">
                                    <h3 class="mb-4" style="color: #FB7E5E;">Access our website for free!</h3>
                                    <p class="lead fw-normal mb-5 mb-lg-0" style="color: #000000;">Our website are
                                        available for Admins and Doctors</p>
                                    <button class="btn btn-primary"
                                        style="border-radius: 20px; background-color: #FB7E5E">>Sign up for
                                        free!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="black-section" style="background-color: #1B1B1B">
                    <div class="container">
                        <h1>Empowering cat owners,<br> one purr at a time.</h1>
                    </div>

                    <hr style="height:3px;border-width:0;color:gray;background-color:gray;width:70%">
                </section>

                <footer class="footer">
                    <div class="about">
                        <h2><img src="assets/landing/img/judulkucing.png" alt="Meow Medic Logo"> <a
                                href="#"><br>meow
                                medic</a></h2>
                        <a href="#">Empower yourself as a responsible cat owner with meow medic. Our
                            comprehensive database and expert-curated information provide invaluable insights into
                            feline health. Stay informed, proactive, and confident in managing your cat's
                            well-being.</a>
                    </div>
                    <div class="socials">
                        <h2><a href="#">Sitemap</a></h2>
                        <ul>
                            <li><a href="#">Login user</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Download</a></li>
                        </ul>
                    </div>
                    <div class="socials">
                        <h2><a href="#">Connect with us</a></h2>
                        <ul>
                            <li><a href= "#">Email: meowmedic@gmail.com</a></li>
                            <li><a href="#">Phone: +628653495224</a></li>
                            <li><a href="#">Address: Jl. Mastrip, Krajan Timur, Sumbersari, Kec. Sumbersari,
                                    Kabupaten Jember, Jawa Timur 68121</a></li>
                        </ul>
                    </div>
                    <div class="socials">
                        <h2><a href="#">Socials</a></h2>
                        <a href="#" target="_blank">@meowmedic_</a>
                        <a href="#" target="_blank">@meowmedic</a>
                        <a href="#" target="_blank">@meow_medic</a>
                    </div>
                </footer>

                <div class="footer-bottom">
                    &copy; Copyright 2024. All Rights Reserved.
                </div>

            </body>
            </section>



            <!-- /.container -->
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
            </script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
                integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
            </script>
            <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

</body>

</html>
