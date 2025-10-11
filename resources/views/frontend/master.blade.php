<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - FolioOne Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  @include('frontend.includes.style')


  <!-- =======================================================
  * Template Name: FolioOne
  * Template URL: https://bootstrapmade.com/folioone-bootstrap-portfolio-website-template/
  * Updated: Aug 23 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  @include('frontend.includes.header')

  <main class="main">

    @yield('content')

  </main>

  @include('frontend.includes.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  @include('frontend.includes.script')

</body>

</html>