    <nav class="navbar-static-top  navbar navbar-expand-lg navbar-light" style="background: #858585;">
        <a class="navbar-brand pl-2" href="/"><img id="logo" src="/images/logov2.png" height="75" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            {{-- <li class="nav-item">
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
            </li> --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Staff
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#" target="_blank">Wendie Dalberg</a>
                  {{-- <a class="dropdown-item" href="{{ route('staff.') }}" target="_blank">Haley Lochan</a> --}}
                  <a class="dropdown-item" href="#" target="_blank">Others</a>
                </div>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Social Media
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="https://facebook.com/" target="_blank" ><ion-icon name="logo-facebook"></ion-icon>&nbsp;&nbsp;Facebook</a>
                <a class="dropdown-item" href="https://twitter.com" target="_blank"><ion-icon name="logo-twitter"></ion-icon>&nbsp;&nbsp;Twitter</a>
                <a class="dropdown-item" href="https://about.instagram.com/about-us" target="_blank"><ion-icon name="logo-instagram"></ion-icon>&nbsp;&nbsp;Instagram</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

