<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('title')
  <title>Document</title>
  <link rel="stylesheet" href="{{url('/css/template.css')}}">
  <script src="{{url('/js/template.js')}}"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">

</head>

<body id="body-pd">
  <header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
  </header>
  <div class="l-navbar" id="nav-bar">
    <nav class="nav">
      <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BBBootstrap</span> </a>
        <div class="nav_list"> <a href="/" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i>
            <span class="nav_name">Dashboard</span> </a>
          <a href="/cliente" class="nav_link"> <i class='bx bx-user nav_icon'></i>
            <span class="nav_name">Cliente</span> </a>
          <a href="/categoria" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Categoria</span> </a> <a href="/contato" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Contato</span> </a> <a href="/produto" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Produto</span> </a> <a href="/pedido" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Pedido</span> </a>
        </div>
      </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
    </nav>
  </div>
  <!--Container Main start-->
  <div class="height-100 bg-light">
    @yield('content')


  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function(event) {

      const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId),
          bodypd = document.getElementById(bodyId),
          headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
          toggle.addEventListener('click', () => {
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
          })
        }
      }

      showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

      /*===== LINK ACTIVE =====*/
      const linkColor = document.querySelectorAll('.nav_link')

      function colorLink() {
        if (linkColor) {
          linkColor.forEach(l => l.classList.remove('active'))
          this.classList.add('active')
        }
      }
      linkColor.forEach(l => l.addEventListener('click', colorLink))

      // Your code to run since DOM is loaded and ready
    });
  </script>

</html>