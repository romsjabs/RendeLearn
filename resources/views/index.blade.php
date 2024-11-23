<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RendeLearn</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,530;1,530&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style-index.css')}}">
        <link rel="stylesheet" href="assets/css/style-modal.css">
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
            <div class="header-item credentials">
                <a href="{{route('login')}}" class="sign-in-btn">Sign in</a>
            </div>

            <!-- Account Info (for logged-in users, comment or uncomment as needed) -->
            <!-- <div class="credentials-logged-in">
                <p>Logged in as <span class="username">[username]</span></p>
            </div> -->
        </div>
    </div>

    </header>
    
    <main>
    <!-- Content -->

    <div class="content">

        <h1 class="index-title">Find available tutors<br>near you</h1>
        
        <div class="tutor-finder">

            <p class="location-select">Location
                <select class="form-select" id="location-select" aria-label="location-select">
                    <option selected disabled>Select a location..</option>
                    <option value="1">Davao City</option>
                    <option value="2">Luzon</option>
                    <option value="3">Visayas</option>
                    <option value="4">Mindanao</option>
                    <option value="5">Other..</option>
                </select> 
            </p>

            <p class="subject-select">Subject (Course)
                <select class="form-select" id="subject-select" aria-label="subject-select">
                    <option selected disabled>Select a subject..</option>
                    <option value="1">English</option>
                    <option value="2">Math</option>
                    <option value="3">Science</option>
                    <option value="4">Other..</option>
                </select>
            </p>

            <p class="search-index">Custom search
                <input type="text" class="form-control w-100" id="custom-search" placeholder="Tutor name, location, course..">
            </p>

            <!-- Age Range Selection -->

            <div class="age-select">
                
                <p class="age-title">Age:</p>

              <div class="radio-select age1">
                  <div class="form-check age1">
                      <input class="form-check-input age1" type="radio" name="flexradiodefault" id="agegroup1">
                      <label class="agegroup1" for="agegroup1">4-7</label>
                  </div>
                  <div class="form-check age1">
                      <input class="form-check-input age1" type="radio" name="flexradiodefault" id="agegroup2">
                      <label class="agegroup2" for="agegroup2">8-11</label>
                  </div>
                  <div class="form-check age1">
                      <input class="form-check-input age1" type="radio" name="flexradiodefault" id="agegroup3">
                      <label class="agegroup3" for="agegroup3">12-17</label>
                  </div>
              </div>
              
              <div class="radio-select age2">
                  <div class="form-check age2">
                      <input class="form-check-input age2" type="radio" name="flexradiodefault" id="agegroup4">
                      <label class="agegroup4" for="agegroup4">18-23</label>
                  </div>
                  <div class="form-check age2">
                      <input class="form-check-input age2" type="radio" name="flexradiodefault" id="agegroup5">
                      <label class="agegroup5" for="agegroup5">24+</label>
                  </div>
              </div>
            </div>
            <button class="search-button" type="submit">
              <i class="fa-solid fa-magnifying-glass"></i>
              Search
            </button>
          
        </div>

        <!-- Overview -->
        
        <h1 class="title1">Why RendeLearn?</h1>

            <div class="overview1">
        
                <div class="card1">
                    <p class="desc1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
                <div class="card2">
                    <p class="desc2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

            </div>

            <div class="overview2">

                <div class="card3">
                    <p class="desc3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

                <div class="card4">
                    <p class="desc4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="otherModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Specify Your Option</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Please provide more details for the "Other" option.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    </main>

    <footer>
        <img id="responsive_image" src="assets/img/logo_horizontal.png" width="300" alt="RendeLearn" class="footer-image">
        <p class="copyright">
            © 2024 RendeLearn. All righs reserved.
        </p>
        
        <p class="socials">
            
        </p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/js/modal.js')}}"></script>
    <script src="{{asset('assets/js/img-lock.js')}}"></script>
    <script src="{{asset('assets/js/responsive.js')}}"></script>
</body>
</html>
