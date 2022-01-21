<!DOCTYPE html>
<html lang="en">
    <style>
        h1 {
            color: #000000;
            font-style: normal;
            font-weight: 500;
            letter-spacing: 4px;
            text-transform: uppercase;
        }
        p {
    /* font-family: "Lora", sans-serif; */
    font-size: 14px;
    line-height: 25px;
    font-weight: 300;
    font-style: italic;
    text-transform: none;
    color: #6d6d6d;
}
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WendieTDalberg</title>
    <!--CSS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <nav class="fixed-top navbar navbar-expand-lg navbar-light" style="background: #d8c7a8;">
        <a class="navbar-brand" href="/"><img id="logo" src="/images/logo.png" height="100" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Therapy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Staff
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#" target="_blank">Wendie Dalberg</a>
                  <a class="dropdown-item" href="#" target="_blank">Haley Lochan</a>
                  <a class="dropdown-item" href="#" target="_blank">Others</a>
                </div>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Social Media
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#" target="_blank" ><ion-icon name="logo-facebook"></ion-icon>&nbsp;&nbsp;Facebook</a>
                <a class="dropdown-item" href="#" target="_blank"><ion-icon name="logo-twitter"></ion-icon>&nbsp;&nbsp;Twitter</a>
                <a class="dropdown-item" href="#" target="_blank"><ion-icon name="logo-instagram"></ion-icon>&nbsp;&nbsp;Instagram</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
      <div class="mt-5 mb-2" style="text-align: center">
          <div>
            <img src="/images/johannes-plenio-RwHv7LgeC7s-unsplash.jpg" alt="image" height="45%" width="65%">
          </div>
      </div>
    </div>
    <div class="card-body mt-2" style="text-align: center">
        <h1 class="px-5">HELPING SMALL BUSINESSES ESTABLISH A BRAND IDENTITY</h1>
        <p class="px-5">We help you establish your brand and identity by creating beautiful, minimal and unique designs. Focusing on the small creative business owners, we create the perfect brand for you that will enhance your unique business. Working closely with you, knowing your story, we can help you grow and reach your target audience and make it stand out from the crowd.</p>
    </div>
</body>
<footer class="fixed-bottom bg-light text-center text-lg-start">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright
    </div>
  </footer>
</html>
