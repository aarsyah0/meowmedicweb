link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <link rel="stylesheet" href="{{ asset('landing/css/styles.css') }}">
    <title>Meow Medic </title>
</head>
<>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#page-top">
                <img src="{{ asset('landing/img/judul_kucing.jpg') }}" alt="Meow Medic Logo" class="me-2"
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
                    style="background-image: url('{{ asset('landing/img/kucing.jpg') }}')">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset('landing/img/kucing2.png') }}')">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('{{ asset('landing/img/kucing3.png') }}')">
                    <div class="carousel-caption d-none d-md-block">
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


    <section id="features">
        <div class="container px-5 enlarged-container">
            <div class="row gx-5 align-items-center enlarged-row">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0 enlarged-col">
                    <div class="container-fluid px-5 enlarged-container-fluid">
                        <div class="row gx-5 justify-content-center enlarged-row">
                            <div class="col-md-10 text-center enlarged-text-center">
                                <!-- Paragraf Fitur Terpadu -->
                                <h3 class="font-alt mb-4 enlarged">About Us</h3>
                                <p class="text-muted mb-0 enlarged">We're committed to offering cat owners a reliable
                                    resource for understanding their pets' health. Our app provides advanced filters for
                                    quick diagnosis searches and access to veterinarian-approved illness information.
                                    Easily manage your cat's health with streamlined user directories and detailed
                                    diagnosis history. Make informed decisions and ensure your feline friend receives
                                    the care they need. With our cat illness information app, caring for your cat has
                                    never been easier.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0 text-center enlarged-col">
                    <!-- Mockup perangkat pada bagian fitur-->
                    <div class="features-device-mockup enlarged-mockup">
                        <div class="device-wrapper enlarged-device-wrapper">
                            <!-- Menghapus div perangkat, hanya menyisakan gambar -->
                            <img src="{{ asset('landing/img/nakesbunder.png') }}" alt="nakes" class="enlarged-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-custom">
        <div class="container px-5">
            <!-- New Title Section -->
            <div class="row gx-5 justify-content-center">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-4 lh-1 mb-4" style="color: #000000; font-weight: bold;">MeowMedic. Your Go-To Cat
                        Diagnosis and Health Management Solution</h2>
                </div>
            </div>

            <!-- Existing Content -->
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-sm-8 col-md-6">
                    <div class="bg-dark text-black p-3 mb-4" style="border-radius: 20px">
                        <h3 class="mb-4" style="color: #FFFFFF;">Admin on website</h3>
                        <p class="lead fw-normal mb-5 mb-lg-0" style="color: #ffffff">Filters and check newly added
                            illnesses diagnosis from veterinarian. Quickly access diagnosis lists and user directories
                            for efficient management.</p>
                        <button class="btn btn-primary" style="border-radius: 20px; background-color: #85868C;">Hire
                            international talent</button>
                        <img class="img-fluid" src="{{ asset('landing/img/nakes2.png') }}" alt="..." />
                    </div>
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="bg-dark text-white p-3 mb-4" style="border-radius: 20px">
                        <h3 class="mb-4" style="color: #ffff;">Doctors on website</h3>
                        <p style="color: #ffffff;">Access a list of diagnosis histories, allowing them to review and
                            update information as necessary.</p>
                        <button class="btn btn-primary"
                            style="border-radius: 20px; background-color: #85868C;">Convert contractors</button>
                    </div>


                    <div class="bg-dark text-black p-3 mb-4" style="border-radius: 20px">
                        <h3 class="mb-4" style="color: #ffff;">Users on mobile</h3>
                        <p style="color: #ffffff">Utilize diagnoses for informed health decisions and access detailed
                            diagnosis history for personal health management.</p>
                        <button class="btn btn-primary"
                            style="border-radius: 20px; background-color: #85868C;">Convert contractors</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
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
    </head>

    <body>
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
    </body>
