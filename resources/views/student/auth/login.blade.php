<!doctype html>
<html lang="en">
@include('student.partials.head')
<body>
<section class="slide-1 d-flex justify-content-center align-items-center"
         style="height: 100vh; background: url('{{ asset('student_them/images/hero_1.jpg') }}') no-repeat center center/cover; position: relative;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.1);"></div>

    <div class="container position-relative vh-100 d-flex align-items-center justify-content-center">
        <div class="row w-75 shadow-lg rounded-4 overflow-hidden"
             style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.3);">

            <!-- الصورة الجانبية -->
            <div class="col-md-5 d-flex flex-column align-items-center justify-content-center p-5"
                 style="background: #005399;">
                <img src="{{ asset('student_them/images/img_1.png') }}" alt="University Logo" class="img-fluid"
                     style="max-width: 180px;">
            </div>

            <!-- الفورم -->
            <div class="col-md-7 bg-white p-5 d-flex flex-column justify-content-center">
                <h3 class="h4 text-center fw-bold" style="color: #005399;">Welcome Back</h3>
                <p class="mb-3 text-center text-dark">Enter your email and password to sign in</p>

                <form role="form" action="{{route('login')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label class="fw-bold text-dark">Email</label>
                        <input type="email" name="email"  class="form-control rounded-pill shadow-sm border-0 p-3"
                               placeholder="Email Address" required>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    </div>
                    <div class="mb-3">
                        <label class="fw-bold text-dark">Password</label>
                        <input type="password" name="password" class="form-control rounded-pill shadow-sm border-0 p-3"
                               placeholder="Password" required>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn rounded-pill py-2 shadow-sm w-100"
                                style="background: #005399; color: white;">Login</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@include('student.partials.footer')
@include('student.partials.scripts')
</html>
