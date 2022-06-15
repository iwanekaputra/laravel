<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Peminjaman Buku</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('landingpage.link')
</head>

<body>
    @include('landingpage.header')
    @include('landingpage.hero')

  <main id="main">
    <!-- ======= Clients Section ======= -->
    @yield('content')
    @include('landingpage.contact')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    @include('landingpage.footer')
  </footer><!-- End Footer -->

  <a href="#main" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    @include('landingpage.script')

</body>
</html>