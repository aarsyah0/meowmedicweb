<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Load Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #3D405B;
            height: 100vh;
            color: white;
        }

        .bg-custom {
            background-color: #3D405B !important;
        }

        .btn-custom {
            background-color: #ff6f61;
            border: none;
            font-size: 18px;
            padding: 12px;
            border-radius: 25px;
        }

        .btn-custom:hover {
            background-color: #e65a50;
        }

        .form-control-custom {
            max-width: 350px;
            font-size: 18px;
            padding: 12px 40px 12px 12px;
            /* Menambahkan ruang di sebelah kanan untuk ikon */
            border-radius: 25px;
            width: 100%
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
            background-color: #ff6f61;
            border-radius: 50%;
        }

        .custom-checkbox .custom-control-label::before {
            border-radius: 50%;
        }

        .input-group .form-control {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group-append {
            background-color: white;
            border-left: none;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
        }

        .input-group-text {
            border-left: none;
            background: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-start p-5 bg-custom">
                <h1>WELCOME BACK!</h1>
                <p>Don't have an account? <a href="#" class="text-primary">Sign up</a></p>
                <!-- Add server-side validation errors here -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="w-100">
                    @csrf
                    <!-- Label untuk input Username dengan warna EFE3D3 -->
                    <label for="username" style="color: #efe3d3; margin-bottom: 5px;">Username or
                        E-Mail</label>
                    <input type="text" id="username" name="username" class="form-control form-control-custom mb-3"
                        placeholder="Username or E-Mail" value="{{ old('username') }}">

                    <label for="password" style="color: #efe3d3; margin-bottom: 5px;">Password</label>
                    <!-- Input password dengan ikon mata untuk menyembunyikan atau menampilkan teks -->
                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" class="form-control form-control-custom"
                            placeholder="Password">
                        <div class="input-group-append">
                            <span class="input-group-text" id="togglePassword" style="border-radius: 20px">
                                <i class="fas fa-eye"></i>
                            </span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3 w-100">
                        <div class="custom-control custom-checkbox" style="margin-left: 10px;">
                            <input type="checkbox" class="custom-control-input" id="rememberMe" name="remember">
                            <label class="custom-control-label" for="rememberMe">Remember me</label>
                        </div>
                        <a href="#" class="text-primary" style="margin-right: 230px;">Forget password?</a>
                    </div>
                    <button type="submit" class="btn btn-custom btn-block form-control-custom">Log In</button>
                </form>
            </div>
            <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center bg-custom">
                <img src="assets/landing/img/paw.png" class="img-fluid" alt="Paw with Cats">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Fungsi untuk mengubah tipe input password menjadi teks dan sebaliknya
        function togglePassword() {
            var passwordField = document.getElementById("password");
            var passwordIcon = document.querySelector("#togglePassword i");

            if (passwordField.type === "password") {
                passwordField.type = "text";
                passwordIcon.classList.remove("fa-eye");
                passwordIcon.classList.add("fa-eye-slash");
            } else {
                passwordField.type = "password";
                passwordIcon.classList.remove("fa-eye-slash");
                passwordIcon.classList.add("fa-eye");
            }
        }

        // Menambahkan event listener untuk tombol toggle
        document.getElementById("togglePassword").addEventListener("click", togglePassword);
    </script>
</body>

</html>
