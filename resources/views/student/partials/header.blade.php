    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <div class="site-logo mr-auto w-25">
                    <a href="courses.html">
                        <img src="{{asset('student_them')}}/images/img_1.png" alt="University Logo" class="img-fluid" style="max-height: 50px;">
                    </a>
                </div>

                <div class="mx-auto text-center">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                            <li><a href="{{route('student.courses')}}" class="nav-link">Courses</a></li>
                            <li><a href="program.html" class="nav-link">Programs</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="ml-auto w-25">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                            <li class="cta dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Profile : {{ auth()->user()->name }}</span>
                                </a>
                                <div class="dropdown-menu p-1" aria-labelledby="profileDropdown">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item d-flex align-items-center text-danger fw-bold p-1">
                                            <div class="icon icon-shape icon-xs shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                                <svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 17L21 12L16 7" stroke="#d9534f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M21 12H9" stroke="#d9534f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M12 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H12" stroke="#d9534f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <span class="ms-1 fs-6">Log Out</span>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
                </div>

            </div>
        </div>

    </header>
