<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RendeLearn | Sign in</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,530;1,530&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style-login.css')}}">
    </head>
        <body>

        <header>
          <!-- Header -->
          <div class="header">
              <div class="logo">
                  <a href="/">
                  <img id="responsive_image" src="assets/img/logo_horizontal.png" width="300" alt="RendeLearn">
                  </a>
              </div>
  
          <!-- Header Buttons -->
          <div class="header-buttons">
              <nav class="navbar bg-transparent">
                  <div class="container-fluid">
                      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

          <!-- Offcanvas content -->
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">RendeLearn</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
                  <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                          <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Tutors</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Blog</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Support</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="login.html">Sign in</a>
                          </li>
                          </ul>
                          <form class="d-flex mt-3" role="search">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>
                      </div>
                  </div>
              </div>
          </nav>

          <!-- Additional Header Links (not inside offcanvas) -->
          <div class="header-item home">
              <p><a href="/">Home</a></p>
          </div>
          <div class="header-item tutors">
              <p><a href="#">Tutors</a></p>
          </div>
          <div class="header-item blog">
              <p><a href="#">Blog</a></p>
          </div>
          <div class="header-item support">
              <p><a href="#">Support</a></p>
          </div>

      </div>
  </div>

  </header>
        
        <!-- Login page -->
        <form action="{{route('login')}}" method="POST">
            @csrf
        <div class="login">
            <h1 class="login-header">Sign&nbsp;in</h1>

            <p class="acc-username">Email or Username
                <input type="text" class="form-control" id="input_type" name="input_type" autofocus>
                
                @if ($errors->has('email'))
                    <div class="email-error">
                        @foreach ($errors->get('email') as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                @if ($errors->has('username'))
                    <div class="username-error">
                        @foreach ($errors->get('username') as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                
            </p>

            <p class="acc-password">Password
                <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" name="password">
                
                @if ($errors->has('password'))
                    <div class="password-error">
                        @foreach ($errors->get('password') as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
                
            </p>

            <p class="credentials-container">
                <span class="remember-credentials">
                    <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember">
                    <label class="form-check-label" for="remember-credentials"><span class="clickable">Remember&nbsp;me</span></label>
                </span>

            <span class="forgot-password">
                @if (Route::has('password.request'))
                <a href="{{route('password.request')}}" class="forgot-password-btn">Forgot&nbsp;password?</a>
                @endif
            </span>

            </p>

            <p class="sign-in">
                <button type="submit" class="btn btn-primary">Sign&nbsp;in</button>
            </p>
            
            <!-- Sign up -->
            <p class="signup-image">
                <img src="assets/img/login-background.jpg" width="643" draggable="false">

                <div class="signup-info">
                    <h1><span class="signup-font-size">New to<br>RendeLearn?</span></h1>
                </div>

                <div class="signup-button">
                    <a href="{{route('signup')}}" class="btn btn-outline-light">Sign up</a>
                </div>
            </p>

        </div>

        </form>

        <footer>
            <img id="responsive_image" src="assets/img/logo_horizontal.png" width="300" alt="RendeLearn" class="footer-image">
            <p class="copyright">
                © 2024 RendeLearn. All righs reserved.
            </p>
        </footer>

        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('assets/js/img-lock.js')}}"></script>
        <script src="{{asset('assets/js/responsive.js')}}"></script>
</html>