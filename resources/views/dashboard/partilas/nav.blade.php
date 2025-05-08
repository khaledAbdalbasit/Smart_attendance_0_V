<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
       id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        {{--        <a class="navbar-brand m-0" href="{{route('admin.dashboard')}}">--}}
        <img src="{{asset('adminthem')}}/img/img_1.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Modern Academy Engineering</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if(Auth::guard('instructors')->user()->role == 'instructor')
                <li class="nav-item">
                    <a class="nav-link @yield('student-active')" href="{{ route('instructor.subject.index') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2
                d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000"
                                 class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path
                                    d="M13 7c1.105 0 2-.672 2-1.5S14.105 4 13 4s-2 .672-2 1.5S11.895 7 13 7Zm-6.5 0C8.605 7 9.5 6.328 9.5 5.5S8.605 4 7.5 4 5.5 4.672 5.5 5.5 6.395 7 7.5 7Zm-6.5 0C2.605 7 3.5 6.328 3.5 5.5S2.605 4 1.5 4 0.5 4.672 0.5 5.5 1.395 7 2.5 7ZM4 8c-1.657 0-3 1.119-3 2.5V13h6v-2.5C7 9.119 5.657 8 4 8Zm9 0c-1.657 0-3 1.119-3 2.5V13h6v-2.5c0-1.381-1.343-2.5-3-2.5ZM8 8c-1.086 0-2.019.422-2.5 1.063C6.463 9.406 7.26 9.5 8 9.5s1.537-.094 2.5-.437C10.019 8.422 9.086 8 8 8Zm0 1.5c-1.105 0-2 .672-2 1.5V13h4v-2c0-.828-.895-1.5-2-1.5Z"/>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Students</span>
                    </a>
                </li>
            @endif

            {{-- Professors Link - For admin & super-admin only --}}
            @if(Auth::guard('instructors')->user()->role == 'admin' || Auth::guard('instructors')->user()->role == 'super-admin')
                <li class="nav-item">
                    <a class="nav-link @yield('instructor-active')" href="{{ route('admin.instructors') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2
                d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000"
                                 class="bi bi-person-badge-fill" viewBox="0 0 16 16">
                                <path d="M6.5 2a1.5 1.5 0 1 1 3 0v1h-3V2z"/>
                                <path d="M4 5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v.5h-8V5z"/>
                                <path fill-rule="evenodd"
                                      d="M1 7a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7zm4.5 1.5a.5.5 0 0 0-1 0v1.528a1.5 1.5 0 1 0 1 0V8.5zm3.5.5a.5.5 0 0 1 .5.5v1.528a1.5 1.5 0 1 1-1 0V9.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Professors</span>
                    </a>
                </li>
            @endif

            {{-- Subjects Link - For admin & super-admin only --}}
            @if(Auth::guard('instructors')->user()->role == 'admin' || Auth::guard('instructors')->user()->role == 'super-admin')
                <li class="nav-item">
                    <a class="nav-link @yield('subject-active')" href="{{ route('admin.subjects') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2
                d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000"
                                 class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M6 8V1h1v6.117l.447-.276A.5.5 0 0 1 8 7.5v4.117l-.447-.276A.5.5 0 0 1 7 11.5V15H6V8z"/>
                                <path d="M3 0h10a1 1 0 0 1 1 1v1H2V1a1 1 0 0 1 1-1zm-1 3h12v11a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3z"/>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Subjects</span>
                    </a>
                </li>
            @endif

            {{-- Students Link - For admin & super-admin only --}}
            @if(Auth::guard('instructors')->user()->role == 'admin' || Auth::guard('instructors')->user()->role == 'super-admin')
                <li class="nav-item">
                    <a class="nav-link @yield('student-active')" href="{{ route('admin.students') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2
                d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#000000"
                                 class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path
                                    d="M13 7c1.105 0 2-.672 2-1.5S14.105 4 13 4s-2 .672-2 1.5S11.895 7 13 7Zm-6.5 0C8.605 7 9.5 6.328 9.5 5.5S8.605 4 7.5 4 5.5 4.672 5.5 5.5 6.395 7 7.5 7Zm-6.5 0C2.605 7 3.5 6.328 3.5 5.5S2.605 4 1.5 4 0.5 4.672 0.5 5.5 1.395 7 2.5 7ZM4 8c-1.657 0-3 1.119-3 2.5V13h6v-2.5C7 9.119 5.657 8 4 8Zm9 0c-1.657 0-3 1.119-3 2.5V13h6v-2.5c0-1.381-1.343-2.5-3-2.5ZM8 8c-1.086 0-2.019.422-2.5 1.063C6.463 9.406 7.26 9.5 8 9.5s1.537-.094 2.5-.437C10.019 8.422 9.086 8 8 8Zm0 1.5c-1.105 0-2 .672-2 1.5V13h4v-2c0-.828-.895-1.5-2-1.5Z"/>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Students</span>
                    </a>
                </li>
            @endif

            {{-- Locations Link - For admin & super-admin only --}}
            @if(Auth::guard('instructors')->user()->role == 'admin' || Auth::guard('instructors')->user()->role == 'super-admin')
                <li class="nav-item">
                    <a class="nav-link @yield('location-active')" href="{{ route('admin.locations') }}">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2
                d-flex align-items-center justify-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                 stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="feather feather-map-pin">
                                <path d="M21 10c0 6-9 13-9 13S3 16 3 10a9 9 0 1 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Locations</span>
                    </a>
                </li>


                    <!-- Periods -->
                    <li class="nav-item">
                        <a class="nav-link @yield('period-active')" href="{{route('admin.periods')}}">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <!-- Clock Icon -->
                                <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#000000"
                                          d="M12 1a11 11 0 1 0 11 11A11.012 11.012 0 0 0 12 1zm0 20a9 9 0 1 1 9-9a9.01 9.01 0 0 1-9 9zm.5-13h-1v6l5.25 3.15l.5-.87L12.5 14z"/>
                                </svg>
                            </div>
                            <span class="nav-link-text ms-1">Periods</span>
                        </a>
                    </li>

                    <!-- Schedules -->
                    <li class="nav-item">
                        <a class="nav-link @yield('schedules-active')" href="{{route('admin.schedules')}}">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <!-- Schedule Icon (Clipboard Check) -->
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#000000" d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zM12 3c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-1 13l-3.5-3.5 1.41-1.41L11 13.17l4.59-4.59L17 10l-6 6z"/>
                                </svg>
                            </div>
                            <span class="nav-link-text ms-1">Schedules</span>
                        </a>
                    </li>

                    <!-- Schedule Subjects -->
                    <li class="nav-item">
                        <a class="nav-link @yield('schedule-subjects-active')" href="{{route('admin.schedules.subjects')}}">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <!-- Book Icon (For subjects/courses) -->
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#000000" d="M19 2H8a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h11V2zm0 18H8V4h11v16zM6 6H4v13a1 1 0 0 0 1 1h1V6z"/>
                                </svg>
                            </div>
                            <span class="nav-link-text ms-1">Schedule Subjects</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link @yield('student-registration-active')" href="{{route('admin.registrations')}}">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <!-- Book Icon (For subjects/courses) -->
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M7 10h5v2H7v-2zm0 4h5v2H7v-2zm6-4h4v2h-4v-2zm0 4h4v2h-4v-2z"/>
                                    <path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v15a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V5a2 2 0 0 0-2-2zm0 17H5V8h14v12zm0-14H5V5h14v1z"/>
                                </svg>

                            </div>
                            <span class="nav-link-text ms-1">Student Registration</span>
                        </a>
                    </li>
                @endif

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link  " href="#">
                    <div
                        class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>customer-support</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(1.000000, 0.000000)">
                                            <path class="color-background opacity-6"
                                                  d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                                            <path class="color-background"
                                                  d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                            <path class="color-background"
                                                  d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>

            <li class="nav-item">
                <form id="logout-form" action="{{ route('instructor.logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit"
                            class="nav-link bg-transparent border-0 w-100 text-start d-flex align-items-center text-danger fw-bold">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 17L21 12L16 7" stroke="#d9534f" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M21 12H9" stroke="#d9534f" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M12 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H12"
                                      stroke="#d9534f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Log Out</span>
                    </button>
                </form>
            </li>


        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
            <div class="full-background"
                 style="background-image: url('{{asset('adminthem')}}/img/curved-images/white-curved.jpg')"></div>
            <div class="card-body text-start p-3 w-100">
                <div
                    class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
                    <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true"
                       id="sidenavCardIcon"></i>
                </div>
                <div class="docs-info">
                    <h6 class="text-white up mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold">Please check our docs</p>
                    <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard"
                       target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
                </div>
            </div>
        </div>
    </div>
</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
         navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                    </li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">@yield('title-page')</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">

                    <li class="nav-item d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">{{ Auth::guard('instructors')->user()->name }}</span>
                        </a>
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item px-3 d-flex align-items-center">

                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-bell cursor-pointer"></i>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                            aria-labelledby="dropdownMenuButton">
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="{{asset('adminthem')}}/img/team-2.jpg"
                                                 class="avatar avatar-sm  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New message</span> from Laur
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                13 minutes ago
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="my-auto">
                                            <img src="{{asset('adminthem')}}/img/small-logos/logo-spotify.svg"
                                                 class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                <span class="font-weight-bold">New album</span> by Travis Scott
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                1 day
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                    <div class="d-flex py-1">
                                        <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <title>credit-card</title>
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                       fill-rule="nonzero">
                                                        <g transform="translate(1716.000000, 291.000000)">
                                                            <g transform="translate(453.000000, 454.000000)">
                                                                <path class="color-background"
                                                                      d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                      opacity="0.593633743"></path>
                                                                <path class="color-background"
                                                                      d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="text-sm font-weight-normal mb-1">
                                                Payment successfully completed
                                            </h6>
                                            <p class="text-xs text-secondary mb-0 ">
                                                <i class="fa fa-clock me-1"></i>
                                                2 days
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
