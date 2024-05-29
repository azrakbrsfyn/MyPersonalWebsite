<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Azriel Akbar Sofyan')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4 shadow">
    <div class="container">
      <a class="navbar-brand me-auto" href="{{route('home.index')}}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item p-2">
            <a class="nav-link" aria-current="page" href="{{route('home.index')}}">Home</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link" href="{{route('portfolio.index')}}">Portfolio</a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link" href="{{route('about.index')}}">About</a>
          </li>
          <li class="nav-item p-2">
            <a href="#"><button type="button" class="btn btn-secondary">Contact</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Content -->
  @yield('content')
  <!-- Content -->

  <!-- Footer -->
  <div class="bg-dark shadow">
    <div class="container p-4">
      <div class="row d-flex justify-content-between align-items-center">
        <div class="col-md-4">
          <h3>Azriel Akbar Sofyan</h3>
        </div>
        <div class="col-md-3">
          <p>Reach me out on:</p>
          <div class="d-flex align-items-center mb-4">
            <a href="#"><img src="{{asset('/img/whatsapp.png')}}" class="img-fluid p-2 reach-contact"></a>
            <a href="#"><img src="{{asset('/img/instagram-logo.png')}}" class="img-fluid p-2 reach-contact"></a>
          </div>
        </div>
        <div class="col-md-4">
          <p>Created with heart by me and powered by:</p>
          <div class="d-flex align-items-center mb-4">
            <img src="{{asset('/img/laravel.png')}}" class="img-fluid p-2">
            <img src="{{asset('/img/bootstrap.png')}}" class="img-fluid p-2">
          </div>
          <p><b>Copyright</b> - Azriel Akbar Sofyan</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>