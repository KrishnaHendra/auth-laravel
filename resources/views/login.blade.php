<!doctype html>
<html lang="en">

<head>
    <title>Tugas Binus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{'assets/login/'}}css/style.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4 font-weight-bold">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                            class="social-icon d-flex align-items-center justify-content-center">
                                            <img src="https://kompaspedia.kompas.id/wp-content/uploads/2020/08/logo_Universitas-Bina-Nusantara-thumb.png"
                                                alt="binus" width="100px">
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <form id="formLogin" action="{{ 'login' }}" class="signin-form" method="POST">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    <label class="form-control-placeholder" for="username">Email</label>
                                </div>
                                <div class="form-group mt-3">
                                    <input id="password-field" name="password" type="password" class="form-control"
                                        required>
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                        class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="btnLogin"
                                        class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center mb-0">Developed By <a class="text-small" data-toggle="tab"
                                    href="#signup">&copy; Farisa Mukti Arta Mevia</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{'assets/login/'}}js/jquery.min.js"></script>
    <script src="{{'assets/login/'}}js/popper.js"></script>
    <script src="{{'assets/login/'}}js/bootstrap.min.js"></script>
    <script src="{{'assets/login/'}}js/main.js"></script>
    <script src="{{'assets/login/'}}js/auth.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if(Session::has('message'))
    <script>
        toastr.success('You have been logged out!', 'SUCCESS')
    </script>
    @endif

</body>

</html>
