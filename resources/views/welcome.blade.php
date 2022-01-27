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
    <link rel = "icon" href ="/images/logov2.png" type = "image/x-icon">
    <!--CSS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body id="content">
    @include('Navbar')
      <div id="pic_container" class="container-fluid">
      <div class="mt-5 mb-2" style="text-align: center">
          <div>
            <img src="/images/john-towner-3Kv48NS4WUU-unsplash.jpg" alt="image" height="25%" width="35%" style="border-radius: 2em;">
          </div>
      </div>
    </div>
    <div class="card-body mt-2" style="text-align: center">
        <h1 class="px-5">Welcome To Wendie Dalberg's Site</h1>
        <h2>This Website is still under Development</h2>
        <p class="px-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet incidunt, temporibus quo, consequuntur at autem veritatis est voluptate repudiandae architecto maiores iure impedit. Repudiandae, qui voluptatem labore veritatis modi optio?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt obcaecati, debitis necessitatibus suscipit doloremque quis, ea voluptatum rerum dignissimos mollitia reiciendis cupiditate delectus, provident reprehenderit quo adipisci voluptas amet sequi.</p>
    </div>
</body>
<footer class="fixed-bottom text-center navbar-light text-lg-start" style="background: #858585;">
    <div class="text-center p-3">
      © 2022 Copyright
    </div>
  </footer>
</html>
