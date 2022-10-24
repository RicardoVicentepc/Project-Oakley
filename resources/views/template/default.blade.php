<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('title')

  <!--css-->
  <link rel="stylesheet" href="{{url('/css/style.css')}}">
  <!--mdb-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
</head>

<body>
  <header>


    <nav>
      <a class="logo" href="/">OAKLEY</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-list">
        <li> <a class="navItens" href="/">Home</a></li>
        <li> <a class="navItens" href="/cliente">cliente</a></li>
        <li> <a class="navItens" href="/categoria">categoria</a>
        <li> <a class="navItens" href="/contato">contato</a></li>
        <li> <a class="navItens" href="/produto">produto</a></li>
        <li> <a class="navItens" href="/pedido">pedido</a></li>
      </ul>
    </nav>
  </header>

  
  @yield('content')



  <!-- Footer -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

      </section>
      <!-- Section: Social media -->

    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">julianery.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

<script src="{{url('/js/mobile-navbar.js')}}"></script>
</body>

</html>