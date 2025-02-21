<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('adminthem') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('adminthem')}}/img/img_1.png">
    <title>Smart Attendance</title>
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet"/>
    <!-- Nucleo Icons -->
    <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet"/>
    <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('adminthem') }}/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet"/>
</head>

<body class="bg-white">
<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-80 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <!-- فورم تسجيل الدخول -->
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="card card-plain shadow-lg p-4 bg-white">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder" style="color: #005399;">Welcome Back</h3> <!-- تغيير اللون -->
                                <p class="mb-3 text-dark">Enter your email and password to sign in</p>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('instructor.login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="fw-bold text-dark">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="fw-bold text-dark">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn w-100 mt-3 text-white"
                                                style="background-color: #005399; border-color: #005399;">
                                            Sign in
                                        </button> <!-- تغيير لون الزر -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- صورة الجانب -->
                    <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center">
                        <div class="oblique position-relative ms-n5">
                            <img src="{{ asset('adminthem') }}/img/img_1.png" class="img-fluid w-100" alt="Smart Attendance Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Footer -->
<footer class="footer pt-4">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 text-center text-muted">
                © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart"></i> by
                <a href="https://www.linkedin.com/in/khaledabdelbasitahmed/" class="fw-bold text-info" target="_blank">
                    Smart Attendance Team
                </a> for a better system.
            </div>
        </div>
    </div>
</footer>

<!-- Core JS Files -->
<script src="{{ asset('adminthem') }}/js/core/popper.min.js"></script>
<script src="{{ asset('adminthem') }}/js/core/bootstrap.min.js"></script>
<script src="{{ asset('adminthem') }}/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{ asset('adminthem') }}/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    if (navigator.platform.indexOf('Win') > -1 && document.querySelector('#sidenav-scrollbar')) {
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), { damping: '0.5' });
    }
</script>
</body>

</html>
