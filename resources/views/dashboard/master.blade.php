<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<!--Start Head -->
@include('dashboard.partilas.header')
<!-- End Head -->

<body>

<!-- Start Header/Navigation -->
@include('dashboard.partilas.nav')
<!-- End Header/Navigation -->

@yield('content') <!-- Content Section -->

<!-- Start Footer Section -->
@include('dashboard.partilas.footer')
<!-- End Footer Section -->

<!-- Start Scripts -->
@include('dashboard.partilas.scripts')
<!-- End Scripts -->

</body>

</html>
